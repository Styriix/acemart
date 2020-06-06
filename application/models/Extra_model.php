<?php
defined('BASEPATH') OR exit('This page does not exist');

class Extra_model extends CI_Model {

    public function doUpload($pub_file, $pri_name, $uniq_id)
    {
        $this->db->set('file_name', $pub_file);
        $this->db->set('sess_id', $uniq_id);
        $this->db->set('private_name', $pri_name);
        $this->db->insert('zd_files');
        return TRUE;
    }

    public function getFiles($uniq_id)
    {
        $this->db->where('sess_id', $uniq_id);
        $query = $this->db->get('zd_files');
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return FALSE;
        }
    }

    //* Create new pages
    public function createNewPage($data)
    {
        $this->db->insert('zd_pages', $data);
        return TRUE;
    }

    //* Get created pages
    public function getPages()
    {
        $this->db->order_by('page_name', 'asc');
        $query = $this->db->get('zd_pages');
        return $query->result();
    }

    //* check if editable
    public function toBeEdited($edit)
    {
        $this->db->where('page_slug', $edit);
        $query = $this->db->get('zd_pages');
        if($query->num_rows() > 0)
        {
            return $query->row(0);
        }
        else
        {
            return FALSE;
        }
    }

    //* update page
    public function updatePage($data, $id)
    {
        $this->db->where('page_id', $id);
        $this->db->update('zd_pages', $data);
        return TRUE;
    }

    //* Deleteing page
    public function deletePage($id)
    {
        $this->db->where('page_id', $id);
        $this->db->delete('zd_pages');
        return TRUE;
    }

    //* Get page on main site
    public function getPagesMain($url)
    {
        $this->db->where('page_slug', $url);
        $query = $this->db->get('zd_pages');
        if($query->num_rows() > 0)
        {
            return $query->row(0);
        }
        else
        {
            return FALSE;
        }
    }

    //* Get facebook application keys
    public function getFacebookAppKeys()
    {
        $this->db->where('fb_id', 1);
        $query = $this->db->get('zd_fb_login');
        return $query->row(0);
    }

    //* Get goole app key
    public function getGoogleAppKeys()
    {
        $this->db->where('gg_id', 1);
        $query = $this->db->get('zd_google_login');
        return $query->row(0);
    }

    //* Update facebook application key
    public function updateFacebookLoginApp($data)
    {
        $this->db->where('fb_id', 1);
        $this->db->update('zd_fb_login', $data);
        return TRUE;
    }

    //* Update Google application key
    public function updateGoogleLoginApp($data)
    {
        $this->db->where('gg_id', 1);
        $this->db->update('zd_google_login', $data);
        return TRUE;
    }

    //* Let detect if amazone can be use as file storage
    public function isAmazonStorage()
    {
        $this->db->where('s3_id', 1);
        $query = $this->db->get('zd_s3_storage');
        if($query->row(4)->s3_status == 1)
        {
            return $query->row(0);
        }
        else
        {
            return FALSE;
        }
    }

    public function isAmazonStorageOpt()
    {
        $this->db->where('s3_id', 1);
        $query = $this->db->get('zd_s3_storage');
        return $query->row(0);
    }

    //* Get Amazone Settings
    public function getAmazonSettings()
    {
        $this->db->where('s3_id', 1);
        $query = $this->db->get('zd_s3_storage');
        return $query->row(0);
    }
}