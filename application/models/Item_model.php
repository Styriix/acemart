<?php
defined('BASEPATH') OR exit('This page does not exist');

class Item_model extends CI_Model
{
    /*
    ======================================================
    * Ceating of datas
    ======================================================
    */

    //* Creating of new item
    public function adminCreateNewItem($data)
    {
        $this->db->insert('zd_items', $data);
        return TRUE;
    }

    public function userCreateNewItem($data)
    {
        $this->db->insert('zd_items', $data);
        return $this->db->insert_id();
    }

    //* Create item thumbnails
    public function createItemThumbs($thumbs, $item_id)
    {
        $this->db->set('thumb_item_id', $item_id);
        $this->db->set('thumb_name', $thumbs);
        $this->db->insert('zd_item_thumnails');
        return TRUE;
    }

    //* Create item preview image
    public function createItemPreviewImage($pre_img, $item_id)
    {
        $this->db->set('pre_item_id', $item_id);
        $this->db->set('pre_name', $pre_img);
        $this->db->insert('zd_item_previews');
        return TRUE;
    }

    //* Create item main file
    public function createItemMainFile($item_file, $item_id)
    {
        $this->db->set('mf_item_id', $item_id);
        $this->db->set('mf_file', $item_file);
        $this->db->insert('zd_main_files');
        return TRUE;
    }

    //* Let submit new item rating
    public function submitNewItemRating($itd, $value, $uid, $r_cmt)
    {
        $this->db->set('rating_item_id', $itd);
        $this->db->set('rating_value', $value);
        $this->db->set('rating_user_id', $uid);
        $this->db->set('rating_comment', $r_cmt);
        $this->db->insert('zd_item_rating');
        return TRUE;
    }

    //* creating of new item comment
    public function postNewItemComment($data)
    {
        $this->db->insert('zd_item_comments', $data);
        return TRUE;
    }

    //* Repling to a comment
    public function replyToComment($data)
    {
        $this->db->insert('zd_item_comment_replies', $data);
        return TRUE;
    }

    //* Creating new free file list
    public function createNewFreeFileList($id)
    {
        $this->db->set('free_item_id', $id);
        $this->db->insert('zd_free_items');
        return TRUE;
    }

    //* Create new flash sales icom
    public function createNewFlashSales($item_id, $price)
    {
        $flash_price = ceil($price - ($price * 50 / 100));
        $this->db->set('fs_item_id', $item_id);
        $this->db->set('fs_price', $flash_price);
        $this->db->insert('zd_flash_sale');
        return TRUE;
    }

    //* Create new item liker
    public function createNewItemLike($id, $uid)
    {
        $this->db->where('like_item_id', $id);
        $this->db->where('like_user_id', $uid);
        $get_r = $this->db->get('zd_item_likes');
        if($get_r->num_rows() == 0) {
            //* create new record
            $this->db->set('like_item_id', $id);
            $this->db->set('like_user_id', $uid);
            $this->db->insert('zd_item_likes');
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /*
    ======================================================
    * Reading of datas
    ======================================================
    */

    //* Get the last created item by slug
    public function getLastCreatedItemBySlug($slug)
    {
        $this->db->where('item_slug', $slug);
        $query = $this->db->get('zd_items');
        return $query->row(0)->item_id;
    }

    
    //* Fetch active items in admin mode
    public function getActiveItemAdmin()
    {
        $this->db->select('*');
        $this->db->from('zd_items');
        $this->db->join('zd_child_category', 'zd_child_category.child_cat_id = zd_items.item_cat_id', 'left');
        $this->db->join('zd_sub_category', 'zd_sub_category.sub_cat_id = zd_child_category.child_sub_cat_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_items.item_user_id', 'left');
        $this->db->order_by('zd_items.item_id', 'DESC');
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            $return = array();
            foreach($query->result() as $item)
            {
                $return[$item->item_id] = $item;
                $return[$item->item_id]->sales = $this->getItemTotalSale($item->item_id);
            }
            return $return;
        }
        else
        {
            return FALSE;
        }
    }

    //* Fetch pause items in admin mode
    public function getPauseItemAdmin()
    {
        $this->db->select('*');
        $this->db->from('zd_items');
        $this->db->join('zd_child_category', 'zd_child_category.child_cat_id = zd_items.item_cat_id', 'left');
        $this->db->join('zd_sub_category', 'zd_sub_category.sub_cat_id = zd_child_category.child_sub_cat_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_items.item_user_id', 'left');
        $this->db->where('zd_items.item_status', 2);
        $this->db->order_by('zd_items.item_id', 'DESC');
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            $return = array();
            foreach($query->result() as $item)
            {
                $return[$item->item_id] = $item;
                $return[$item->item_id]->sales = $this->getItemTotalSale($item->item_id);
            }
            return $return;
        }
        else
        {
            return FALSE;
        }
    }

    //* Get items total sale
    public function getItemTotalSale($id)
    {
        $this->db->where('td_item_id', $id);
        $query = $this->db->get('zd_item_downloads');
        return $query->num_rows();
    }

    //* Fetch review items in admin mode
    public function getReviewItemAdmin()
    {
        $this->db->select('*');
        $this->db->from('zd_items');
        $this->db->join('zd_child_category', 'zd_child_category.child_cat_id = zd_items.item_cat_id', 'left');
        $this->db->join('zd_sub_category', 'zd_sub_category.sub_cat_id = zd_child_category.child_sub_cat_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_items.item_user_id', 'left');
        $this->db->where('zd_items.is_review', 'no');
        $this->db->order_by('zd_items.item_id', 'DESC');
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

    //* Get main file for admin to download
    public function getMainFileForAdmin($itd)
    {
        $this->db->where('mf_item_id', $itd);
        $query = $this->db->get('zd_main_files');
        if($query->num_rows() > 0)
        {
            return $query->row(2)->mf_file;
        }
        else
        {
            return FALSE;
        }
    }

    //* Get main file for uer to download
    public function getMainFileForUser($itd)
    {
        $this->db->where('mf_item_id', $itd);
        $query = $this->db->get('zd_main_files');
        if($query->num_rows() > 0)
        {
            return $query->row(2)->mf_file;
        }
        else
        {
            return FALSE;
        }
    }

    //* Get the item infomation before downloading
    public function getItemInfoBeforeDownload($itd)
    {
        $this->db->where('item_id', $itd);
        $query = $this->db->get('zd_items');
        return $query->row(0);
    }

    //* Get the item infomation before downloading For user
    public function getItemInfoBeforeDownloadForUser($itd)
    {
        $this->db->where('item_id', $itd);
        $this->db->where('item_parma_delete', 'no');
        $query = $this->db->get('zd_items');
        if($query->num_rows() > 0)
        {
            return $query->row(0);
        }
        else
        {
            return FALSE;
        }
    }

    //* Get the item to edit in admin mode
    public function getItemToEditInAdmin($id)
    {
        $this->db->select('*');
        $this->db->from('zd_items');
        $this->db->where('zd_items.item_id', $id);
        $this->db->join('zd_child_category', 'zd_child_category.child_cat_id = zd_items.item_cat_id', 'left');
        $this->db->join('zd_sub_category', 'zd_sub_category.sub_cat_id = zd_child_category.child_sub_cat_id', 'left');
        $this->db->join('zd_item_previews', 'zd_item_previews.pre_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_item_thumnails', 'zd_item_thumnails.thumb_item_id = zd_items.item_id', 'left');
        $this->db->order_by('zd_items.item_id', 'DESC');
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->row(0);
        }
        else
        {
            return FALSE;
        }
    }

    //* Get homepagenewest item
    public function getHomePageNewestItem($user)
    {
        $this->db->select('*');
        $this->db->from('zd_items');
        $this->db->join('zd_child_category', 'zd_child_category.child_cat_id = zd_items.item_cat_id', 'left');
        $this->db->join('zd_sub_category', 'zd_sub_category.sub_cat_id = zd_child_category.child_sub_cat_id', 'left');
        $this->db->join('zd_item_previews', 'zd_item_previews.pre_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_item_thumnails', 'zd_item_thumnails.thumb_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_items.item_user_id', 'left');
        $this->db->where('zd_items.is_review', 'yes');
        $this->db->order_by('zd_items.item_id', 'DESC');
        $this->db->limit(8);
        $query = $this->db->get();

        if($query->num_rows() > 0)
        {
            $return = array();
            foreach($query->result() as $item)
            {
                $return[$item->item_id] = $item;
                $return[$item->item_id]->item_rate = $this->getHomeNewItemRating($item->item_id);
                $return[$item->item_id]->item_likes = $this->getHomeNewitemTotalLike($item->item_id);
                $return[$item->item_id]->isFree = $this->checkIfItemIsFree($item->item_id);
                if($return[$item->item_id]->isFlash = $this->checkIfItemIsFalsh($item->item_id)) {
                    $return[$item->item_id]->fs_price = $this->getFlashSalePrice($item->item_id);
                }
                if($user) {
                    $return[$item->item_id]->isLiked = $this->checkIfItemIsLiked($item->item_id, $user);
                }
            }
            return $return;
        }
        else
        {
            return FALSE;
        }
    }

    //* Get homepage popular item
    public function getPopularItems($user)
    {
        $this->db->select('*, COUNT(a.td_item_id) AS pops');
        $this->db->from('zd_items');
        $this->db->join('zd_child_category', 'zd_child_category.child_cat_id = zd_items.item_cat_id', 'left');
        $this->db->join('zd_sub_category', 'zd_sub_category.sub_cat_id = zd_child_category.child_sub_cat_id', 'left');
        $this->db->join('zd_item_previews', 'zd_item_previews.pre_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_item_thumnails', 'zd_item_thumnails.thumb_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_items.item_user_id', 'left');
        $this->db->group_by('zd_items.item_id');
        $this->db->join('zd_item_downloads AS a', 'a.td_item_id = zd_items.item_id', 'left');
        $this->db->where('zd_items.is_review', 'yes');
        $this->db->order_by('pops', 'DESC');
        $this->db->limit(10);
        $query = $this->db->get();

        if($query->num_rows() > 0)
        {
            $return = array();
            foreach($query->result() as $item)
            {
                $return[$item->item_id] = $item;
                $return[$item->item_id]->item_rate = $this->getHomeNewItemRating($item->item_id);
                $return[$item->item_id]->item_likes = $this->getHomeNewitemTotalLike($item->item_id);
                $return[$item->item_id]->isFree = $this->checkIfItemIsFree($item->item_id);
                if($return[$item->item_id]->isFlash = $this->checkIfItemIsFalsh($item->item_id)) {
                    $return[$item->item_id]->fs_price = $this->getFlashSalePrice($item->item_id);
                }
                if($user) {
                    $return[$item->item_id]->isLiked = $this->checkIfItemIsLiked($item->item_id, $user);
                }
            }
            return $return;
        }
        else
        {
            return FALSE;
        }
    }

    //* Let get item rating
    public function getHomeNewItemRating($id)
    {
        $this->db->select('ROUND(AVG(rating_value), 1) AS rate');
        $this->db->from('zd_item_rating');
        $this->db->where('rating_item_id', $id);
        $query = $this->db->get();
        //return $query->row()->rating_value;
        $rates = $query->result_array();
        $rating = $rates[0]['rate'];
        if($rating)
        {
            return $rating;
        }
        else
        {
            return 0;
        }
    }

    //* Get home new item total likes
    public function getHomeNewitemTotalLike($id)
    {
        $this->db->where('like_item_id', $id);
        $query = $this->db->get('zd_item_likes');
        return $query->num_rows();
    }

    //* Get full item details page
    public function getItemByIdAndSlug($id, $slug)
    {
        $this->db->select('*');
        $this->db->from('zd_items');
        $this->db->join('zd_child_category', 'zd_child_category.child_cat_id = zd_items.item_cat_id', 'left');
        $this->db->join('zd_sub_category', 'zd_sub_category.sub_cat_id = zd_child_category.child_sub_cat_id', 'left');
        $this->db->join('zd_main_category', 'zd_main_category.main_cat_id = zd_sub_category.sub_main_cat_id', 'left');
        $this->db->join('zd_item_previews', 'zd_item_previews.pre_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_item_thumnails', 'zd_item_thumnails.thumb_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_items.item_user_id', 'left');
        $this->db->where('zd_items.item_id', $id);
        $this->db->where('zd_items.is_review', 'yes');
        $this->db->where('zd_items.item_slug', $slug);
        $query = $this->db->get();
        
        if($query->num_rows() > 0)
        {
            $item = $query->row(0);

            return $item;
        }
        else
        {
            return FALSE;
        }
    }

    //* get all the item my the main category
    public function getItemByTheMainCat($id, $page, $user)
    {
        $this->db->select('*');
        $this->db->from('zd_items');
        $this->db->join('zd_child_category', 'zd_child_category.child_cat_id = zd_items.item_cat_id', 'left');
        $this->db->join('zd_sub_category', 'zd_sub_category.sub_cat_id = zd_child_category.child_sub_cat_id', 'left');
        $this->db->join('zd_main_category', 'zd_main_category.main_cat_id = zd_sub_category.sub_main_cat_id', 'left');
        $this->db->join('zd_item_previews', 'zd_item_previews.pre_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_item_thumnails', 'zd_item_thumnails.thumb_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_items.item_user_id', 'left');
        $this->db->where('zd_main_category.main_cat_id', $id);
        $this->db->where('zd_items.is_review', 'yes');
        $this->db->order_by('zd_items.item_id', 'DESC');
        $this->db->limit(15, $page);
        $query = $this->db->get();

        if($query->num_rows() > 0)
        {
            $return = array();
            foreach($query->result() as $item)
            {
                $return[$item->item_id] = $item;
                $return[$item->item_id]->item_rate = $this->getHomeNewItemRating($item->item_id);
                $return[$item->item_id]->item_likes = $this->getHomeNewitemTotalLike($item->item_id);
                $return[$item->item_id]->isFree = $this->checkIfItemIsFree($item->item_id);
                if($return[$item->item_id]->isFlash = $this->checkIfItemIsFalsh($item->item_id)) {
                    $return[$item->item_id]->fs_price = $this->getFlashSalePrice($item->item_id);
                }
                if($user) {
                    $return[$item->item_id]->isLiked = $this->checkIfItemIsLiked($item->item_id, $user);
                }
            }
            return $return;
        }
        else
        {
            return FALSE;
        }
    }

    //* Fetch LL items related to the sub category
    public function getAllItemRelateToTheSubCat($id, $page, $user)
    {
        $this->db->select('*');
        $this->db->from('zd_items');
        $this->db->join('zd_child_category', 'zd_child_category.child_cat_id = zd_items.item_cat_id', 'left');
        $this->db->join('zd_sub_category', 'zd_sub_category.sub_cat_id = zd_child_category.child_sub_cat_id', 'left');
        $this->db->join('zd_main_category', 'zd_main_category.main_cat_id = zd_sub_category.sub_main_cat_id', 'left');
        $this->db->join('zd_item_previews', 'zd_item_previews.pre_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_item_thumnails', 'zd_item_thumnails.thumb_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_items.item_user_id', 'left');
        $this->db->where('zd_sub_category.sub_cat_id', $id);
        $this->db->where('zd_items.is_review', 'yes');
        $this->db->order_by('zd_items.item_id', 'DESC');
        $this->db->limit(20, $page);
        $query = $this->db->get();

        if($query->num_rows() > 0)
        {
            $return = array();
            foreach($query->result() as $item)
            {
                $return[$item->item_id] = $item;
                $return[$item->item_id]->item_rate = $this->getHomeNewItemRating($item->item_id);
                $return[$item->item_id]->item_likes = $this->getHomeNewitemTotalLike($item->item_id);
                $return[$item->item_id]->isFree = $this->checkIfItemIsFree($item->item_id);
                if($return[$item->item_id]->isFlash = $this->checkIfItemIsFalsh($item->item_id)) {
                    $return[$item->item_id]->fs_price = $this->getFlashSalePrice($item->item_id);
                }
                if($user) {
                    $return[$item->item_id]->isLiked = $this->checkIfItemIsLiked($item->item_id, $user);
                }
            }
            return $return;
        }
        else
        {
            return FALSE;
        }
    }

    //* Fetch all item related to the child category
    public function getAllItemRelateToTheChildCat($id, $page, $user)
    {
        $this->db->select('*');
        $this->db->from('zd_items');
        $this->db->join('zd_child_category', 'zd_child_category.child_cat_id = zd_items.item_cat_id', 'left');
        $this->db->join('zd_sub_category', 'zd_sub_category.sub_cat_id = zd_child_category.child_sub_cat_id', 'left');
        $this->db->join('zd_main_category', 'zd_main_category.main_cat_id = zd_sub_category.sub_main_cat_id', 'left');
        $this->db->join('zd_item_previews', 'zd_item_previews.pre_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_item_thumnails', 'zd_item_thumnails.thumb_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_items.item_user_id', 'left');
        $this->db->where('zd_child_category.child_cat_id', $id);
        $this->db->where('zd_items.is_review', 'yes');
        $this->db->order_by('zd_items.item_id', 'DESC');
        $this->db->limit(20, $page);
        $query = $this->db->get();

        if($query->num_rows() > 0)
        {
            $return = array();
            foreach($query->result() as $item)
            {
                $return[$item->item_id] = $item;
                $return[$item->item_id]->item_rate = $this->getHomeNewItemRating($item->item_id);
                $return[$item->item_id]->item_likes = $this->getHomeNewitemTotalLike($item->item_id);
                $return[$item->item_id]->isFree = $this->checkIfItemIsFree($item->item_id);
                if($return[$item->item_id]->isFlash = $this->checkIfItemIsFalsh($item->item_id)) {
                    $return[$item->item_id]->fs_price = $this->getFlashSalePrice($item->item_id);
                }
                if($user) {
                    $return[$item->item_id]->isLiked = $this->checkIfItemIsLiked($item->item_id, $user);
                }
            }
            return $return;
        }
        else
        {
            return FALSE;
        }
    }

    //* Fetch more author realated items
    public function getMoreAuthorProduct($uid, $id)
    {
        $this->db->select('*');
        $this->db->from('zd_items');
        $this->db->join('zd_child_category', 'zd_child_category.child_cat_id = zd_items.item_cat_id', 'left');
        $this->db->join('zd_sub_category', 'zd_sub_category.sub_cat_id = zd_child_category.child_sub_cat_id', 'left');
        $this->db->join('zd_main_category', 'zd_main_category.main_cat_id = zd_sub_category.sub_main_cat_id', 'left');
        $this->db->join('zd_item_previews', 'zd_item_previews.pre_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_item_thumnails', 'zd_item_thumnails.thumb_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_items.item_user_id', 'left');
        $this->db->where('zd_items.item_user_id', $uid);
        $this->db->where('zd_items.item_id !=', $id);
        $this->db->where('zd_items.is_review', 'yes');
        $this->db->order_by('zd_items.item_id', 'DESC');
        $this->db->limit(3);
        $query = $this->db->get();

        if($query->num_rows() > 0)
        {
            $return = array();
            foreach($query->result() as $item)
            {
                $return[$item->item_id] = $item;
                $return[$item->item_id]->item_rate = $this->getHomeNewItemRating($item->item_id);
            }
            return $return;
        }
        else
        {
            return FALSE;
        }
    }

    //* Get the item a customer paid for
    public function getItemPaidFor($id)
    {
        $this->db->where('item_id', $id);
        $query = $this->db->get('zd_items');
        return $query->row(0);
    }

    //* Check if the user it the item owner
    public function checkIfUserIsAuthor($uid, $id)
    {
        $this->db->where('item_user_id', $uid);
        $this->db->where('item_id', $id);
        $query = $this->db->get('zd_items');
        if($query->num_rows() == 1)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    //* Check if user have not rate item before
    public function checkIfNotRateBefore($uid, $itd)
    {
        $this->db->where('rating_user_id', $uid);
        $this->db->where('rating_item_id', $itd);
        $query = $this->db->get('zd_item_rating');
        if($query->num_rows() == 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    //* Get item reviews
    public function getItemReviews($id)
    {
        $this->db->select('*');
        $this->db->from('zd_item_rating');
        $this->db->where('zd_item_rating.rating_item_id', $id);
        $this->db->join('zd_users', 'zd_users.user_id = zd_item_rating.rating_user_id', 'left');
        $this->db->order_by('zd_item_rating.rating_id', 'DESC');
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

    //* Check if user can delete rating
    public function isUserCanDeleteRating($uid, $rate_id)
    {
        $this->db->where('rating_user_id', $uid);
        $this->db->where('rating_id', $rate_id);
        $query = $this->db->get('zd_item_rating');
        if($query->num_rows() == 1)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    //* Get items comment
    public function getItemComments($id)
    {
        $this->db->select('*');
        $this->db->from('zd_item_comments');
        $this->db->where('zd_item_comments.cmt_item_id', $id);
        $this->db->join('zd_users', 'zd_users.user_id = zd_item_comments.cmt_user_id', 'left');
        $this->db->order_by('zd_item_comments.cmt_id', 'ASC');
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            $return = array();
            foreach($query->result() as $cmter)
            {
                $return[$cmter->cmt_id] = $cmter;
                $return[$cmter->cmt_id]->replies = $this->getCommentReplies($cmter->cmt_id);
                $return[$cmter->cmt_id]->u_cmt = $this->getBuyerId($cmter->cmt_user_id, $cmter->cmt_item_id);
            }
            return $return;
        }
        else
        {
            return FALSE;
        }
    }

    //* Get comments reply
    public function getCommentReplies($id)
    {
        $this->db->select('*');
        $this->db->from('zd_item_comment_replies');
        $this->db->where('zd_item_comment_replies.rp_cmt_id', $id);
        $this->db->join('zd_users', 'zd_users.user_id = zd_item_comment_replies.rp_user_id', 'left');
        $this->db->order_by('zd_item_comment_replies.rp_id', 'ASC');
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

    //* Get the buyer id
    public function getBuyerId($id, $itd)
    {
        $this->db->where('td_user_id', $id);
        $this->db->where('td_item_id', $itd);
        $query = $this->db->get('zd_item_downloads');
        if($query->num_rows() == 1)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    //* Check if commenter not author
    public function notAuthorComment($uid, $id)
    {
        $this->db->where('item_id', $id);
        $this->db->where('item_user_id', $uid);
        $query = $this->db->get('zd_items');
        if($query->num_rows() == 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    //* Get author info
    public function getAuthorInfo($id)
    {
        $this->db->select('*');
        $this->db->from('zd_items');
        $this->db->where('zd_items.item_id', $id);
        $this->db->join('zd_users', 'zd_users.user_id = zd_items.item_user_id', 'left');
        $query = $this->db->get();
        return $query->row(0);
    }

    //* Geting the user shops
    public function getUserShops($id)
    {
        $this->db->select('*');
        $this->db->from('zd_items');
        $this->db->join('zd_child_category', 'zd_child_category.child_cat_id = zd_items.item_cat_id', 'left');
        $this->db->join('zd_sub_category', 'zd_sub_category.sub_cat_id = zd_child_category.child_sub_cat_id', 'left');
        $this->db->join('zd_main_category', 'zd_main_category.main_cat_id = zd_sub_category.sub_main_cat_id', 'left');
        $this->db->join('zd_item_previews', 'zd_item_previews.pre_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_item_thumnails', 'zd_item_thumnails.thumb_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_items.item_user_id', 'left');
        $this->db->where('zd_items.item_user_id', $id);
        $this->db->where('zd_items.is_review', 'yes');
        $this->db->order_by('zd_items.item_id', 'DESC');
        $this->db->limit(30);
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

    //* Get my items
    public function getMyItems($id)
    {
        $this->db->select('*');
        $this->db->from('zd_items');
        $this->db->join('zd_child_category', 'zd_child_category.child_cat_id = zd_items.item_cat_id', 'left');
        $this->db->join('zd_sub_category', 'zd_sub_category.sub_cat_id = zd_child_category.child_sub_cat_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_items.item_user_id', 'left');
        $this->db->join('zd_item_thumnails', 'zd_item_thumnails.thumb_item_id =zd_items.item_id');
        $this->db->where('zd_items.item_user_id', $id);
        $this->db->order_by('zd_items.item_id', 'DESC');
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            $return = array();
            foreach($query->result() as $item)
            {
                $return[$item->item_id] = $item;
                $return[$item->item_id]->sales = $this->getItemTotalSale($item->item_id);
            }
            return $return;
        }
        else
        {
            return FALSE;
        }
    }

    //* Check if user can edit item
    public function isMyItem($uid, $id)
    {
        $this->db->where('item_id', $id);
        $this->db->where('item_user_id', $uid);
        $query = $this->db->get('zd_items');
        return $query->row(0);
    }

    //* Search item
    public function searchItem($key)
    {
        $this->db->select('*');
        $this->db->from('zd_items');
        $this->db->join('zd_child_category', 'zd_child_category.child_cat_id = zd_items.item_cat_id', 'left');
        $this->db->join('zd_sub_category', 'zd_sub_category.sub_cat_id = zd_child_category.child_sub_cat_id', 'left');
        $this->db->join('zd_item_previews', 'zd_item_previews.pre_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_item_thumnails', 'zd_item_thumnails.thumb_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_items.item_user_id', 'left');
        $this->db->where('zd_items.is_review', 'yes');
        $this->db->like('zd_items.item_name', $key);
        $this->db->or_like('zd_items.item_tags', $key);
        $this->db->order_by('zd_items.item_id', 'DESC');
        $this->db->limit(20);
        $query = $this->db->get();

        if($query->num_rows() > 0)
        {
            $return = array();
            foreach($query->result() as $item)
            {
                $return[$item->item_id] = $item;
                $return[$item->item_id]->item_rate = $this->getHomeNewItemRating($item->item_id);
            }
            return $return;
        }
        else
        {
            return FALSE;
        }
    }

    //* Fetch item top sallers
    public function getItemTopSalers($cid)
    {
        $this->db->select('*, COUNT(zd_item_downloads.td_item_id) AS sales');
        $this->db->from('zd_items');
        $this->db->join('zd_child_category', 'zd_child_category.child_cat_id = zd_items.item_cat_id', 'left');
        $this->db->join('zd_sub_category', 'zd_sub_category.sub_cat_id = zd_child_category.child_sub_cat_id', 'left');
        $this->db->join('zd_main_category', 'zd_main_category.main_cat_id = zd_sub_category.sub_main_cat_id', 'left');
        $this->db->join('zd_item_previews', 'zd_item_previews.pre_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_item_thumnails', 'zd_item_thumnails.thumb_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_items.item_user_id', 'left');
        $this->db->join('zd_item_downloads', 'zd_item_downloads.td_item_id = zd_items.item_id', 'left');
        $this->db->group_by('zd_items.item_id');
        $this->db->where('zd_items.is_review', 'yes');
        $this->db->where('zd_main_category.main_cat_id', $cid);
        $this->db->order_by('sales', 'DESC');
        $this->db->limit(10);
        $query = $this->db->get();

        if($query->num_rows() > 0)
        {
            $return = array();
            foreach($query->result() as $item)
            {
                $return[$item->item_id] = $item;
                $return[$item->item_id]->item_rate = $this->getHomeNewItemRating($item->item_id);
            }
            return $return;
        }
        else
        {
            return FALSE;
        }
    }

    //* Checking for free files
    public function checkForFreeFiles()
    {
        //* Check in free files
        $flash = $this->db->get('zd_flash_sale');
        if($flash->num_rows() > 0)
        {
            foreach($flash->result() as $u_free)
            {
                $fid = $u_free->fs_item_id;

                //* Now check available free items
                $this->db->where('item_id !=', $fid);
                $this->db->where('item_to_free', 1);
                $this->db->order_by('rand()');
                $this->db->limit(4);
                $free = $this->db->get('zd_items');
                if($free->num_rows() > 0)
                {
                    return $free->result();
                }
            }
        }
        else
        {
            $this->db->where('item_to_free', 1);
            $this->db->order_by('rand()');
            $this->db->limit(4);
            $free = $this->db->get('zd_items');
            if($free->num_rows() > 0)
            {
                return $free->result();
            }
        }
    }

    //* Fetch weekly free files
    public function getAllFreeFiles($user)
    {
        $this->db->select('*');
        $this->db->from('zd_free_items');
        $this->db->join('zd_items', 'zd_items.item_id = zd_free_items.free_item_id', 'left');
        $this->db->join('zd_child_category', 'zd_child_category.child_cat_id = zd_items.item_cat_id', 'left');
        $this->db->join('zd_sub_category', 'zd_sub_category.sub_cat_id = zd_child_category.child_sub_cat_id', 'left');
        $this->db->join('zd_item_previews', 'zd_item_previews.pre_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_item_thumnails', 'zd_item_thumnails.thumb_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_items.item_user_id', 'left');
        $this->db->where('zd_items.is_review', 'yes');
        $this->db->order_by('zd_items.item_id', 'DESC');
        $this->db->limit(4);
        $query = $this->db->get();

        if($query->num_rows() > 0)
        {
            $return = array();
            foreach($query->result() as $item)
            {
                $return[$item->item_id] = $item;
                $return[$item->item_id]->item_rate = $this->getHomeNewItemRating($item->item_id);
                $return[$item->item_id]->item_likes = $this->getHomeNewitemTotalLike($item->item_id);
                $return[$item->item_id]->isFree = $this->checkIfItemIsFree($item->item_id);
                if($return[$item->item_id]->isFlash = $this->checkIfItemIsFalsh($item->item_id)) {
                    $return[$item->item_id]->fs_price = $this->getFlashSalePrice($item->item_id);
                }
                if($user) {
                    $return[$item->item_id]->isLiked = $this->checkIfItemIsLiked($item->item_id, $user);
                }
            }
            return $return;
        }
        else
        {
            return FALSE;
        }
    }

    //* Check if item is on free file
    public function checkIfFileIsFree($id)
    {
        $this->db->where('free_item_id', $id);
        $query = $this->db->get('zd_free_items');
        if($query->num_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    //* Check if item is free
    public function checkIfItemIsFree($id)
    {
        $this->db->where('free_item_id', $id);
        $query = $this->db->get('zd_free_items');
        if($query->num_rows() == 1)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    //* Get the last updated free files
    public function getLastUpdatedFreeFiles()
    {
        $this->db->where('lff_id', 1);
        $query = $this->db->get('zd_last_free_files');
        return $query->row(0)->lff_timestamp;
    }

    //* Get the last updated flash files
    public function getLastUpdatedFlashFiles()
    {
        $this->db->where('lfs_id', 1);
        $query = $this->db->get('zd_last_flash_sale');
        return $query->row(0)->lfs_timestamp;
    }

    //* Check for randomly availbale flash sale
    public function checkForFlashFiles()
    {
        //* Check in free files
        $free = $this->db->get('zd_free_items');
        if($free->num_rows() > 0)
        {
            foreach($free->result() as $u_free)
            {
                $fid = $u_free->free_item_id;

                //* Now check available flash items
                $this->db->where('item_id !=', $fid);
                $this->db->where('item_to_flash', 1);
                $this->db->order_by('rand()');
                $this->db->limit(4);
                $flash = $this->db->get('zd_items');
                if($flash->num_rows() > 0)
                {
                    return $flash->result();
                }
            }
        }
        else
        {
            $this->db->where('item_to_flash', 1);
            $this->db->order_by('rand()');
            $this->db->limit(4);
            $flash = $this->db->get('zd_items');
            if($flash->num_rows() > 0)
            {
                return $flash->result();
            }
        }
    }

    //* Get following feeds
    public function getFollowingFeed($uid, $user)
    {
        $this->db->select('*');
        $this->db->from('zd_followers');
        $this->db->where('zd_followers.folo_is_user', $uid);
        $this->db->join('zd_items', 'zd_items.item_user_id = zd_followers.folo_is_following', 'left');
        $this->db->join('zd_child_category', 'zd_child_category.child_cat_id = zd_items.item_cat_id', 'left');
        $this->db->join('zd_sub_category', 'zd_sub_category.sub_cat_id = zd_child_category.child_sub_cat_id', 'left');
        $this->db->join('zd_item_previews', 'zd_item_previews.pre_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_items.item_user_id', 'left');
        $this->db->where('zd_items.is_review', 'yes');
        $this->db->order_by('zd_items.item_id', 'DESC');
        $this->db->limit(4);
        $query = $this->db->get();

        if($query->num_rows() > 0)
        {
            $return = array();
            foreach($query->result() as $item)
            {
                $return[$item->item_id] = $item;
                $return[$item->item_id]->item_rate = $this->getHomeNewItemRating($item->item_id);
                $return[$item->item_id]->item_likes = $this->getHomeNewitemTotalLike($item->item_id);
                if($user) {
                    $return[$item->item_id]->isLiked = $this->checkIfItemIsLiked($item->item_id, $user);
                }
            }
            return $return;
        }
        else
        {
            return FALSE;
        }
    }

    //* Get BTC checkout item price
    public function getItemPayViaBtcPrice($item_id)
    {
        $this->db->where('item_id', $item_id);
        $query = $this->db->get('zd_items');
        return $query->row(0);
    }

    //* Get license infomation
    public function getLicenseInfo($id, $uid)
    {
        $this->db->select('*');
        $this->db->from('zd_item_downloads');
        $this->db->where('zd_item_downloads.td_item_id', $id);
        $this->db->where('zd_item_downloads.td_user_id', $uid);
        $this->db->join('zd_items', 'zd_items.item_id = zd_item_downloads.td_item_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_items.item_user_id', 'left');
        $this->db->join('zd_sale_statement', 'zd_sale_statement.ss_item_id = zd_item_downloads.td_item_id AND zd_sale_statement.ss_user_id = '.$uid, 'left');
        //$this->db->join('zd_sale_statement sales', 'sales.ss_user_id = '.$uid, 'left');
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->row(0);
        }
        else
        {
            return FALSE;
        }
    }

    //* GEt top item uploader
    public function getTopItemsAuthor()
    {
        $this->db->select('u.user_username,COUNT(t.item_id) AS totupl');
        $this->db->from('zd_users u');
        $this->db->join('zd_items t', 't.item_user_id = u.user_id', 'left');
        $this->db->group_by('u.user_id');
        $this->db->order_by('totupl', 'DESC');
        $this->db->limit(10);
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

    //* Get top item sales
    public function getTopItemSale()
    {
        $this->db->select('u.item_name, COUNT(t.td_item_id) AS sales');
        $this->db->from('zd_items u');
        $this->db->join('zd_item_downloads t', 't.td_item_id = u.item_id', 'left');
        $this->db->group_by('u.item_id');
        $this->db->order_by('sales', 'DESC');
        $this->db->limit(10);
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

    //* Get Jan Sale
    public function getJanSale()
    {
        $year = date('Y');
        $mnt = $year."-01-01 00:00:00";
        $month = date('m', strtotime($mnt));
        $this->db->where('MONTH(td_created_at) = '. $month. ' AND YEAR(td_created_at) = '. $year);
        $query = $this->db->get('zd_item_downloads');
        return $query->num_rows();
    }

    //* Get Feb sale
    public function getFebSale()
    {
        $year = date('Y');
        $mnt = $year."-02-01 00:00:00";
        $month = date('m', strtotime($mnt));
        $this->db->where('MONTH(td_created_at) = '. $month. ' AND YEAR(td_created_at) = '. $year);
        $query = $this->db->get('zd_item_downloads');
        return $query->num_rows();
    }

    //* Get Mar sale
    public function getMarSale()
    {
        $year = date('Y');
        $mnt = $year."-03-01 00:00:00";
        $month = date('m', strtotime($mnt));
        $this->db->where('MONTH(td_created_at) = '. $month. ' AND YEAR(td_created_at) = '. $year);
        $query = $this->db->get('zd_item_downloads');
        return $query->num_rows();
    }

    //* Get April sale
    public function getAprSale()
    {
        $year = date('Y');
        $mnt = $year."-04-01 00:00:00";
        $month = date('m', strtotime($mnt));
        $this->db->where('MONTH(td_created_at) = '. $month. ' AND YEAR(td_created_at) = '. $year);
        $query = $this->db->get('zd_item_downloads');
        return $query->num_rows();
    }

    //* Get May sales
    public function getMaySale()
    {
        $year = date('Y');
        $mnt = $year."-05-01 00:00:00";
        $month = date('m', strtotime($mnt));
        $this->db->where('MONTH(td_created_at) = '. $month. ' AND YEAR(td_created_at) = '. $year);
        $query = $this->db->get('zd_item_downloads');
        return $query->num_rows();
    }

    //* Get June sales
    public function getJunSale()
    {
        $year = date('Y');
        $mnt = $year."-06-01 00:00:00";
        $month = date('m', strtotime($mnt));
        $this->db->where('MONTH(td_created_at) = '. $month. ' AND YEAR(td_created_at) = '. $year);
        $query = $this->db->get('zd_item_downloads');
        return $query->num_rows();
    }

    //* Get July sale
    public function getJulSale()
    {
        $year = date('Y');
        $mnt = $year."-07-01 00:00:00";
        $month = date('m', strtotime($mnt));
        $this->db->where('MONTH(td_created_at) = '. $month. ' AND YEAR(td_created_at) = '. $year);
        $query = $this->db->get('zd_item_downloads');
        return $query->num_rows();
    }

    //* Get Aug sales
    public function getAugSale()
    {
        $year = date('Y');
        $mnt = $year."-08-01 00:00:00";
        $month = date('m', strtotime($mnt));
        $this->db->where('MONTH(td_created_at) = '. $month. ' AND YEAR(td_created_at) = '. $year);
        $query = $this->db->get('zd_item_downloads');
        return $query->num_rows();
    }

    //* Get Sept sales
    public function getSeptSale()
    {
        $year = date('Y');
        $mnt = $year."-09-01 00:00:00";
        $month = date('m', strtotime($mnt));
        $this->db->where('MONTH(td_created_at) = '. $month. ' AND YEAR(td_created_at) = '. $year);
        $query = $this->db->get('zd_item_downloads');
        return $query->num_rows();
    }

    //* get Oct sale
    public function getOctSale()
    {
        $year = date('Y');
        $mnt = $year."-10-01 00:00:00";
        $month = date('m', strtotime($mnt));
        $this->db->where('MONTH(td_created_at) = '. $month. ' AND YEAR(td_created_at) = '. $year);
        $query = $this->db->get('zd_item_downloads');
        return $query->num_rows();   
    }

    //* Get Nov sales
    public function getNovSale()
    {
        $year = date('Y');
        $mnt = $year."-11-01 00:00:00";
        $month = date('m', strtotime($mnt));
        $this->db->where('MONTH(td_created_at) = '. $month. ' AND YEAR(td_created_at) = '. $year);
        $query = $this->db->get('zd_item_downloads');
        return $query->num_rows();
    }

    //* Get Dec sales
    public function getDecSale()
    {
        $year = date('Y');
        $mnt = $year."-12-01 00:00:00";
        $month = date('m', strtotime($mnt));
        $this->db->where('MONTH(td_created_at) = '. $month. ' AND YEAR(td_created_at) = '. $year);
        $query = $this->db->get('zd_item_downloads');
        return $query->num_rows();
    }

    //* Fetch flash slae item
    public function getAllFlashSale($user)
    {
        $this->db->select('*');
        $this->db->from('zd_flash_sale');
        $this->db->join('zd_items', 'zd_items.item_id = zd_flash_sale.fs_item_id', 'left');
        $this->db->join('zd_child_category', 'zd_child_category.child_cat_id = zd_items.item_cat_id', 'left');
        $this->db->join('zd_sub_category', 'zd_sub_category.sub_cat_id = zd_child_category.child_sub_cat_id', 'left');
        $this->db->join('zd_item_previews', 'zd_item_previews.pre_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_item_thumnails', 'zd_item_thumnails.thumb_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_items.item_user_id', 'left');
        $this->db->where('zd_items.is_review', 'yes');
        $this->db->order_by('zd_items.item_id', 'DESC');
        $this->db->limit(4);
        $query = $this->db->get();

        if($query->num_rows() > 0)
        {
            $return = array();
            foreach($query->result() as $item)
            {
                $return[$item->item_id] = $item;
                $return[$item->item_id]->item_rate = $this->getHomeNewItemRating($item->item_id);
                $return[$item->item_id]->item_likes = $this->getHomeNewitemTotalLike($item->item_id);
                $return[$item->item_id]->isFree = $this->checkIfItemIsFree($item->item_id);
                if($return[$item->item_id]->isFlash = $this->checkIfItemIsFalsh($item->item_id)) {
                    $return[$item->item_id]->fs_price = $this->getFlashSalePrice($item->item_id);
                }
                if($user) {
                    $return[$item->item_id]->isLiked = $this->checkIfItemIsLiked($item->item_id, $user);
                }
            }
            return $return;
        }
        else
        {
            return FALSE;
        }
    }

    //* Check if item is flash sale
    public function checkIfItemIsFalsh($id)
    {
        $this->db->where('fs_item_id', $id);
        $query = $this->db->get('zd_flash_sale');
        if($query->num_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    //* Get flash sale item price
    public function getFlashItemPrice($id)
    {
        $this->db->where('fs_item_id', $id);
        $query = $this->db->get('zd_flash_sale');
        return $query->row(2)->fs_price;
    }

    //* Check if item is liked
    public function checkIfItemIsLiked($id, $user)
    {
        $this->db->where('like_item_id', $id);
        $this->db->where('like_user_id', $user);
        $check = $this->db->get('zd_item_likes');
        if($check->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    //* GEt the item flash sale price
    public function getFlashSalePrice($id)
    {
        $this->db->where('fs_item_id', $id);
        $query = $this->db->get('zd_flash_sale');
        return $query->row(2)->fs_price;
    }

    //* Get the item liked infomation
    public function getItemLIkedInfo($id)
    {
        $this->db->where('item_id', $id);
        $this->db->join('zd_users', 'zd_users.user_id = zd_items.item_user_id', 'left');
        $query = $this->db->get('zd_items');
        return $query->row(0);
    }

    //* Let check if file is stroe on amazon
    public function isAwsStoreage($id)
    {
        $this->db->where('item_id', $id);
        $query = $this->db->get('zd_items');
        if($query->row(17)->item_storage == 1)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    //* Get item preview file to delete
    public function getItemPreviewToDelete($id)
    {
        $this->db->where('pre_item_id', $id);
        $query = $this->db->get('zd_item_previews');
        return $query->row(2)->pre_name;
    }

    //* Get item icon file to delete
    public function getIemIconFileToDelete($id)
    {
        $this->db->where('thumb_item_id', $id);
        $query = $this->db->get('zd_item_thumnails');
        return $query->row(2)->thumb_name;
    }

    //* Let get item zipped file
    public function getItemZippedFile($id)
    {
        $this->db->where('mf_item_id', $id);
        $query = $this->db->get('zd_main_files');
        return $query->row(2)->mf_file;
    }

    /*
    ======================================================
    * updating of datas
    ======================================================
    */

    //* Admin update item
    public function adminUpdateItem($data, $id)
    {
        $this->db->where('item_id', $id);
        $this->db->update('zd_items', $data);
        return TRUE;
    }

    //* Updating of item thumbnails
    public function updateItemThumbs($thumbs, $item_id)
    {
        $this->db->where('thumb_item_id', $item_id);
        $this->db->set('thumb_name', $thumbs);
        $this->db->update('zd_item_thumnails');
        return TRUE;
    }

    //* Updating of item preview image
    public function updateItemPreviewImage($pre_img, $item_id)
    {
        $this->db->where('pre_item_id', $item_id);
        $this->db->set('pre_name', $pre_img);
        $this->db->update('zd_item_previews');
        return TRUE;
    }

    //* Update item main file
    public function updateItemMainFile($item_file, $item_id)
    {
        $this->db->where('mf_item_id', $item_id);
        $this->db->set('mf_file', $item_file);
        $this->db->update('zd_main_files');
        return TRUE;
    }

    //* Approving of items
    public function approveNewItem($id)
    {
        $this->db->where('item_id', $id);
        $this->db->set('item_status', 1);
        $this->db->set('is_review', 'yes');
        $this->db->update('zd_items');
        return TRUE;
    }

    //* Updating of item
    public function userUpdateItem($data, $tid, $update)
    {
        $this->db->where('item_id', $tid);
        if($update)
        {
            $this->db->set('item_updated_at', 'NOW()', FALSE);
        }
        $this->db->update('zd_items', $data);
        return TRUE;
    }

    //* updating of free file time stamp
    public function updateFreeFileTimeStamp()
    {
        $this->db->set('lff_timestamp', 'NOW()', FALSE);
        $this->db->where('lff_id', 1);
        $this->db->set('lff_timestamp', 'NOW()', FALSE);
        $this->db->update('zd_last_free_files');
        return TRUE;
    }

    //* updating of flash sale file time stamp
    public function updateFlashSaleTimeStamp()
    {
        $this->db->set('lfs_timestamp', 'NOW()', FALSE);
        $this->db->where('lfs_id', 1);
        $this->db->update('zd_last_flash_sale');
        return TRUE;
    }

    /*
    ======================================================
    * Deleting of datas
    ======================================================
    */

    //* Deleting of item rating
    public function deleteRating($rate_id)
    {
        $this->db->where('rating_id', $rate_id);
        $this->db->delete('zd_item_rating');
        return TRUE;
    }

    //* delecte rejected item
    public function rejectItem($id)
    {
        $this->db->where('item_id', $id);
        $this->db->delete('zd_items');
        return TRUE;
    }

    //* Removing of items
    public function deleteItem($id)
    {
        $this->db->where('item_id', $id);
        $this->db->delete('zd_items');
        return TRUE;
    }

    //* Remove item liker
    public function removeItemLike($id, $uid)
    {
        $this->db->where('like_item_id', $id);
        $this->db->where('like_user_id', $uid);
        $this->db->delete('zd_item_likes');
        return TRUE;
    }

    //* REmove item preview
    public function deleteItemPreview($id)
    {
        $this->db->where('pre_item_id', $id);
        $this->db->delete('zd_item_previews');
        return TRUE;
    }

    //* Delete item icon
    public function deleteItemIcon($id)
    {
        $this->db->where('thumb_item_id', $id);
        $this->db->delete('zd_item_thumnails');
        return TRUE;
    }

    //* Delete main file
    public function deleteMainFile($id)
    {
        $this->db->where('mf_item_id', $id);
        $this->db->delete('zd_main_files');
        return TRUE;
    }

    /*
    =======================================================
    * Counting of datas
    =======================================================
    */

    //* count all item base of the min cat page
    public function count_search($id)
    {
        $this->db->select('*');
        $this->db->from('zd_items');
        $this->db->join('zd_child_category', 'zd_child_category.child_cat_id = zd_items.item_cat_id', 'left');
        $this->db->join('zd_sub_category', 'zd_sub_category.sub_cat_id = zd_child_category.child_sub_cat_id', 'left');
        $this->db->join('zd_main_category', 'zd_main_category.main_cat_id = zd_sub_category.sub_main_cat_id', 'left');
        $this->db->join('zd_item_previews', 'zd_item_previews.pre_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_item_thumnails', 'zd_item_thumnails.thumb_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_items.item_user_id', 'left');
        $this->db->where('zd_main_category.main_cat_id', $id);
        $this->db->where('zd_items.is_review', 'yes');
        $this->db->order_by('zd_items.item_id', 'DESC');
        $query = $this->db->get();
        return $query->num_rows();
    }

    //* count all item base of the sub cat page
    public function count_sub_item($id)
    {
        $this->db->select('*');
        $this->db->from('zd_items');
        $this->db->join('zd_child_category', 'zd_child_category.child_cat_id = zd_items.item_cat_id', 'left');
        $this->db->join('zd_sub_category', 'zd_sub_category.sub_cat_id = zd_child_category.child_sub_cat_id', 'left');
        $this->db->join('zd_main_category', 'zd_main_category.main_cat_id = zd_sub_category.sub_main_cat_id', 'left');
        $this->db->join('zd_item_previews', 'zd_item_previews.pre_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_item_thumnails', 'zd_item_thumnails.thumb_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_items.item_user_id', 'left');
        $this->db->where('zd_sub_category.sub_cat_id', $id);
        $this->db->where('zd_items.is_review', 'yes');
        $this->db->order_by('zd_items.item_id', 'DESC');
        $query = $this->db->get();
        return $query->num_rows();
    }

    //* Count all item base on the chil cat page
    public function count_child_item($id)
    {
        $this->db->select('*');
        $this->db->from('zd_items');
        $this->db->join('zd_child_category', 'zd_child_category.child_cat_id = zd_items.item_cat_id', 'left');
        $this->db->join('zd_sub_category', 'zd_sub_category.sub_cat_id = zd_child_category.child_sub_cat_id', 'left');
        $this->db->join('zd_main_category', 'zd_main_category.main_cat_id = zd_sub_category.sub_main_cat_id', 'left');
        $this->db->join('zd_item_previews', 'zd_item_previews.pre_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_item_thumnails', 'zd_item_thumnails.thumb_item_id = zd_items.item_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_items.item_user_id', 'left');
        $this->db->where('zd_child_category.child_cat_id', $id);
        $this->db->where('zd_items.is_review', 'yes');
        $this->db->order_by('zd_items.item_id', 'DESC');
        $query = $this->db->get();
        return $query->num_rows();
    }

    //* Count total items
    public function countItems()
    {
        $query = $this->db->get('zd_items');
        return $query->num_rows();
    }

    //* sales
    public function getTotalSale()
    {
        $query = $this->db->get('zd_item_downloads');
        return $query->num_rows();
    }

    //* Earning
    public function getEarning()
    {
        $this->db->select_sum('bal_value');
        $this->db->from('zd_user_balance');
        $query = $this->db->get();
        return $query->row()->bal_value;
    }

    //* Count home view item
    public function countHomeViewItems()
    {
        $this->db->where('item_status', 1);
        $this->db->where('is_review', 'yes');
        $query = $this->db->get('zd_items');
        return $query->num_rows();
    }

    //* Count home view total sales
    public function countHomeViewTotalSales()
    {
        $query = $this->db->get('zd_item_downloads');
        return $query->num_rows();
    }

    //* Count home view free items
    public function countHomeViewFreeFiles()
    {
        $query = $this->db->get('zd_free_items');
        return $query->num_rows();
    }

    /*
    ================================================
    * Other Functions
    ================================================
    */
    //* Empty the free file table
    public function emptyTheFreeFileTable()
    {
        $this->db->empty_table('zd_free_items');
        return TRUE;
    }

    //* Empty the flash slae item table
    public function emptyFlashSale()
    {
        $this->db->empty_table('zd_flash_sale');
        return TRUE;
    }
}