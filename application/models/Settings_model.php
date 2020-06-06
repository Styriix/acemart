<?php
defined('BASEPATH') OR exit('This page does not exist');

class Settings_model extends CI_Model {

    /*
    =====================================================
    * Creating of data
    =====================================================
    */

    //* Create new social links
    public function createNewSocialLinks($data)
    {
        $this->db->insert('zd_social_links', $data);
        return TRUE;
    }

    /*
    =====================================================
    * Reading of data
    =====================================================
    */

    //* Get applications infomations
    public function getApllicationInfo()
    {
        $this->db->where('set_id', 1);
        $query = $this->db->get('zd_website_settings');
        return $query->row(0);
    }

    //* Get the smtp credentials
    public function getSmtpDetails()
    {
        $this->db->where('smtp_id', 1);
        $query = $this->db->get('zd_smtp_settings');
        return $query->row(0);
    }

    //* Check if website is pause
    public function isPause()
    {
        $this->db->where('set_id', 1);
        $query = $this->db->get('zd_website_settings');
        $check = $query->row(12)->set_site_status;
        if($check == 1)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
        
    }

    //* Reading of header contents
    public function getHeaderContents()
    {
        $this->db->where('hc_id', 1);
        $query = $this->db->get('zd_header_contents');
        return $query->row(0);
    }

    //* Reading of footer contents
    public function getFooterContents()
    {
        $this->db->where('fc_id', 1);
        $query = $this->db->get('zd_footer_contents');
        return $query->row(0);
    }

    //* Get all available social links
    public function getSocialLinks()
    {
        $this->db->order_by('sl_name', 'ASC');
        $query = $this->db->get('zd_social_links');
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return FALSE;
        }
    }

    //* Retrieve social to edit
    public function getSocialLinkToEdit($edit)
    {
        $this->db->where('sl_name', $edit);
        $query = $this->db->get('zd_social_links');
        if($query->num_rows() > 0)
        {
            return $query->row(0);
        }
        else
        {
            return FALSE;
        }
    }

    //* Retrieve google recaptcha infomations
    public function getGoogleRecaptchaInfo()
    {
        $this->db->where('gr_id', 1);
        $query = $this->db->get('zd_google_recaptcha');
        return $query->row(0);
    }

    //* Checking for Goggle rechaptcha
    public function getForGoogleRecaptcha()
    {
        $this->db->where('gr_id', 1);
        $query = $this->db->get('zd_google_recaptcha');
        return $query->row(0);
    }

    /*
    =====================================================
    * Updating of data
    =====================================================
    */

    //* Updating of basic settings infomations
    public function updateWebsiteBasicSettings($data)
    {
        $this->db->where('set_id', 1);
        $this->db->update('zd_website_settings', $data);
        return TRUE;
    }

    //* Update SMTP Credentials
    public function updateSmtpSettings($data)
    {
        $this->db->where('	smtp_id', 1);
        $this->db->update('zd_smtp_settings', $data);
        return TRUE;
    }

    //* Updatee header contents
    public function updateHeaderContents($data)
    {
        $this->db->where('hc_id', 1);
        $this->db->update('zd_header_contents', $data);
        return TRUE;
    }

    //* Updating footer contents
    public function updateFooterContents($data)
    {
        $this->db->where('fc_id', 1);
        $this->db->update('zd_footer_contents', $data);
        return TRUE;
    }

    //* Updating of social links
    public function updateSocialLinks($data, $name)
    {
        $this->db->where('sl_name', $name);
        $this->db->update('zd_social_links', $data);
        return TRUE;
    }

    //* Update Google Recaptcha
    public function updateGoogleRecaptcha($data)
    {
        $this->db->where('gr_id', 1);
        $this->db->update('zd_google_recaptcha', $data);
        return TRUE;
    }

    //* Updating of amazon settings
    public function updateAmazoneSEttings($data)
    {
        $this->db->where('s3_id', 1);
        $this->db->update('zd_s3_storage', $data);
        return TRUE;
    }

    /*
    =====================================================
    * Deleting of data
    =====================================================
    */

    //* Deleting social links
    public function deleteSocialLinks($id)
    {
        $this->db->where('sl_id', $id);
        $this->db->delete('zd_social_links');
        return TRUE;
    }

    /*
    =====================================================
    * Counting of data
    =====================================================
    */
}