<?php

use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

defined('BASEPATH') OR exit('This page does not exist');

class Files extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function prepare_files()
    {

        header('Content-type:application/json;charset=utf-8');

        try {
            if (
                !isset($_FILES['file']['error']) ||
                is_array($_FILES['file']['error'])
            ) {
                throw new RuntimeException('Invalid parameters.');
            }
        
            switch ($_FILES['file']['error']) {
                case UPLOAD_ERR_OK:
                    break;
                case UPLOAD_ERR_NO_FILE:
                    throw new RuntimeException('No file sent.');
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    throw new RuntimeException('Exceeded filesize limit.');
                default:
                    throw new RuntimeException('Unknown errors.');
            }
        
            
            $config['upload_path'] = './static/files/';
            $config['allowed_types'] = 'zip|jpeg|jpg|png';
            $config['max_size']  = '250000';
            $config['encrypt_name'] = TRUE;
            
            $this->upload->initialize($config);
            
            if ( ! $this->upload->do_upload('file')){
                throw new RuntimeException('Failed to move uploaded file.');
            }
            else{
                
                //* Catch the file name
                $pub_file = $_FILES['file']['name'];
                $file = $this->upload->data();
                $pri_name = $file['file_name'];

                //* Send to database
                $uniq_id = $this->session->userdata('upl_uniq');
                $this->Extra_model->doUpload($pub_file, $pri_name, $uniq_id);

                $filepath = base_url() . 'static/files/'.$pri_name;

                if($file['file_ext'] == '.zip')
                {
                    //* Let decide if amazon can be used
                    if($aws = $this->Extra_model->isAmazonStorage())
                    {
                        // AWS Info
                        $bucketName = $aws->s3_bucket_name;
                        $IAM_KEY = $aws->s3_access_key;
                        $IAM_SECRET = $aws->s3_secret_key;

                        // Connect to AWS
                        try {
                            // You may need to change the region. It will say in the URL when the bucket is open
                            // and on creation.
                            $s3 = S3Client::factory(
                                array(
                                    'credentials' => array(
                                        'key' => $IAM_KEY,
                                        'secret' => $IAM_SECRET
                                    ),
                                    'version' => 'latest',
                                    'region'  => 'us-east-2'
                                )
                            );
                        } catch (Exception $e) {
                            // We use a die, so if this fails. It stops here. Typically this is a REST call so this would
                            // return a json object.
                            die("Error: " . $e->getMessage());
                        }

                        
                        // For this, I would generate a unqiue random string for the key name. But you can do whatever.

                        
                        $keyName = 'acemart/static/files/zips/'.$pri_name;
                        $pathInS3 = 'https://s3.us-east-2.amazonaws.com/' . $bucketName . '/' . $keyName;

                        // Add it to S3
                        try {
                            // Uploaded:
                            $file = $_FILES["file"]['tmp_name'];

                            $s3->putObject(
                                array(
                                    'Bucket'=>$bucketName,
                                    'Key' =>  $keyName,
                                    'SourceFile' => $file,
                                    'StorageClass' => 'REDUCED_REDUNDANCY',
                                    'ACL' => 'public-read',
                                )
                            );

                        } catch (S3Exception $e) {
                            die('Error:' . $e->getMessage());
                        } catch (Exception $e) {
                            die('Error:' . $e->getMessage());
                        }

                        //* Remove the file from local storage
                        unlink('./static/files/'.$pri_name);
                        
                    }
                    else
                    {
                        rename('./static/files/'.$pri_name, './static/files/zips/'.$pri_name);
                    }
                }
            }
        
            // All good, send the response
            echo json_encode([
                'status' => 'ok',
                'path' => $filepath
            ]);
        
        } catch (RuntimeException $e) {
            // Something went wrong, send the err message as JSON
            http_response_code(400);
        
            echo json_encode([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }
        
    }

    //* Load data from ajax request
    public function load_files()
    {
        $uniq_id = $this->session->userdata('upl_uniq');
        $query = $this->Extra_model->getFiles($uniq_id);

        if($query)
        {
            echo '<option value="">Select Item</option>';

            foreach($query as $file)
            {
                echo '<option value="'.$file->private_name.'">'.$file->file_name.'</option>';
            }
        }
    }
}