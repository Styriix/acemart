<?php
defined('BASEPATH') OR exit('This page does not exist');

class Email_model extends CI_model
{
    /*
    =============================================
    * Creating of data
    =============================================
    */

    /*
    =============================================
    * Reading of data
    =============================================
    */

    //* Geting email templates
    public function getEmailTemps($id)
    {
        $this->db->where('em_temp_id', $id);
        $query = $this->db->get('zd_email_templates');
        return $query->row(0);
    }

    //* Get the email temps to send
    public function getEmailTempsToSend($id)
    {
        $this->db->where('em_temp_id', $id);
        $query = $this->db->get('zd_email_templates');
        return $query->row(2)->mail_body;
    }

    /*
    =============================================
    * Updating of data
    =============================================
    */

    //* Updating of email templates
    public function updateEmailTemps($email, $id)
    {
        $this->db->where('em_temp_id', $id);
        $this->db->set('mail_body', $email);
        $this->db->update('zd_email_templates');
        return TRUE;
    }

    /*
    =============================================
    * Deleting of data
    =============================================
    */
}