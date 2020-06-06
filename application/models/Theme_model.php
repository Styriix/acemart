<?php
defined('BASEPATH') OR exit('This page does not exit');

class Theme_model extends CI_Model {

    //* Getting the active theme
    public function getActiveTheme()
    {
        $this->db->where('theme_status', 1);
        $query = $this->db->get('zd_themes');
        return $query->row(1)->theme_name;
    }

    //* Reset themes
    public function resetTheme()
    {
        $this->db->where('theme_status', 1);
        $this->db->set('theme_status', 0);
        $this->db->update('zd_themes');
        return TRUE;
    }

    //* SEt new theme
    public function setNewTheme($id)
    {
        $this->db->where('theme_id', $id);
        $this->db->set('theme_status', 1);
        $this->db->update('zd_themes');
        return TRUE;
    }
}