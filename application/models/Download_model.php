<?php
defined('BASEPATH') OR exit('This page does not exist');

class Download_model extends CI_Model
{
    /*
    ===========================================
    * Creating of data
    ===========================================
    */

    //* Create new download
    public function createNewDownload($uid, $productID)
    {
        $this->db->set('td_item_id', $productID);
        $this->db->set('td_user_id', $uid);
        $this->db->insert('zd_item_downloads');
        return $this->db->insert_id();
    }

    /*
    ===========================================
    * reading of data
    ===========================================
    */

    //* Fetch user downloaded items
    public function getUserItemDownloads($uid)
    {
        $this->db->select('*');
        $this->db->from('zd_item_downloads');
        $this->db->where('zd_item_downloads.td_user_id', $uid);
        $this->db->join('zd_items', 'zd_items.item_id = zd_item_downloads.td_item_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_items.item_user_id', 'left');
        $this->db->order_by('zd_item_downloads.td_id', 'DESC');
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return FALSE;
        }
    }

    //* Determine if the user is able to download item
    public function isAbleToDownloadItem($item_id, $user_id)
    {
        $this->db->where('td_item_id', $item_id);
        $this->db->where('td_user_id', $user_id);
        $query = $this->db->get('zd_item_downloads');
        if($query->num_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    //* Check if user already purchase the item
    public function checkIfUserIsPurchased($uid, $id)
    {
        $this->db->where('td_item_id', $id);
        $this->db->where('td_user_id', $uid);
        $query = $this->db->get('zd_item_downloads');
        if($query->num_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    /*
    ===========================================
    * updating of data
    ===========================================
    */

    /*
    ===========================================
    * deleting of data
    ===========================================
    */

    /*
    ===========================================
    * Counting of item
    ===========================================
    */

    //* Count he item sales
    public function getSalesValue($id)
    {
        $this->db->select('*, COUNT(td_item_id) AS total_sale');
        $this->db->from('zd_item_downloads');
        $this->db->where('zd_item_downloads.td_item_id', $id);
        $query = $this->db->get();
        return $query->row()->total_sale;
    }
}