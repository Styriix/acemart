<?php
defined('BASEPATH') OR exit('This page does not exist');

class Category_model extends CI_Model {

    /*
    =========================================
    * Creating of datas
    =========================================
    */

    //* Create new main category
    public function createNewMainCategory($data)
    {
        $this->db->insert('zd_main_category', $data);
        return TRUE;
    }

    //* Creat new sub category
    public function createNewSubCategory($data)
    {
        $this->db->insert('zd_sub_category', $data);
        return TRUE;
    }

    //* Creating of child categories
    public function createNewChildCategory($data)
    {
        $this->db->insert('zd_child_category', $data);
        return TRUE;
    }

    /*
    =========================================
    * Reading of datas
    =========================================
    */

    //* Fetch main categories
    public function fetchMainCategory()
    {
        $this->db->select('*');
        $this->db->from('zd_main_category');
        $this->db->order_by('main_cat_name', 'ASC');
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

    //* Retrive main category for editing action
    public function getEditedCats($cat)
    {
        $this->db->where('main_cat_slug', $cat);
        $query = $this->db->get('zd_main_category');
        if($query->num_rows() > 0)
        {
            return $query->row(0);
        }
        else
        {
            return FALSE;
        }
    }

    //* Globally list all main category (Not in use)
    public function listMainCategoryGloballys()
    {
        $this->db->select('*');
        $this->db->from('zd_main_category');
        $this->db->order_by('zd_main_category.main_cat_name', 'ASC');
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

    //* fetch Main Global cateires
    public function listMainCategoryGlobally()
    {
        $query = $this->db->get('zd_main_category');
        $return = array();
        foreach ($query->result() as $main_cat) {
            $return[$main_cat->main_cat_id] = $main_cat;
            $return[$main_cat->main_cat_id]->sub_cats = $this->getRelatedSubCatToSub($main_cat->main_cat_id);
        }

        return $return;
    }

    //* Get the sub category related to the subs
    public function getRelatedSubCatToSub($cat_id)
    {
        $this->db->where('sub_main_cat_id', $cat_id);
        $query = $this->db->get('zd_sub_category');
        return $query->result();
    }

    
    //* fetch sub cateires
    public function fetchSubCategory()
    {
       $this->db->select('*');
       $this->db->from('zd_sub_category');
       $this->db->join('zd_main_category', 'zd_main_category.main_cat_id = zd_sub_category.sub_main_cat_id');
       $this->db->order_by('zd_sub_category.sub_cat_name', 'ASC');
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

    //* get sub category to edit
    public function getEditedSubCats($cat)
    {
        $this->db->where('sub_cat_slug', $cat);
        $query = $this->db->get('zd_sub_category');
        if($query->num_rows() > 0)
        {
            return $query->row(0);
        }
        else
        {
            return FALSE;
        }
    }

    //* Fetch the sub categories for option list form
    public function getOptionLIstSubCats()
    {
        $this->db->order_by('sub_cat_id', 'DESC');
        $query = $this->db->get('zd_sub_category');
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return FALSE;
        }
    }

    //* Fetch child categories
    public function fetchChildCategory()
    {
        $this->db->select('*');
        $this->db->from('zd_child_category');
        $this->db->join('zd_sub_category', 'zd_sub_category.sub_cat_id = zd_child_category.child_sub_cat_id');
        $this->db->order_by('zd_child_category.child_cat_name', 'ASC');
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

    //* Get the edited cate details
    public function getEditedChildCats($cat)
    {
        $this->db->where('child_cat_slug', $cat);
        $query = $this->db->get('zd_child_category');
        return $query->row(0);
    }

    //* List supb cats for uploader
    public function listSubCatsForUploader()
    {
        $this->db->order_by('sub_cat_name', 'ASC');
        $query = $this->db->get('zd_sub_category');
        $return = array();
        foreach ($query->result() as $sub_cat) {
            $return[$sub_cat->sub_cat_id] = $sub_cat;
            $return[$sub_cat->sub_cat_id]->child_cats = $this->getRelatedChildCatToSub($sub_cat->sub_cat_id);
        }

        return $return;
    }

    //* Get the sub category related to the subs
    public function getRelatedChildCatToSub($cat_id)
    {
        $this->db->where('child_sub_cat_id', $cat_id);
        $this->db->order_by('child_cat_name', 'ASC');
        $query = $this->db->get('zd_child_category');
        return $query->result();
    }

    //* Get main cat by slug in the main pages
    public function getMainCatBySlug($cat)
    {
        $this->db->select('*');
        $this->db->from('zd_main_category');
        $this->db->where('main_cat_slug', $cat);
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

    //* Get sub categgory base on the main cat
    public function getSubCatByMainCatId($id)
    {
        $this->db->select('*');
        $this->db->from('zd_sub_category');
        $this->db->where('sub_main_cat_id', $id);
        $this->db->order_by('sub_cat_name', 'ASC');
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            $return = array();
            foreach($query->result() as $sub_cat)
            {
                $return[$sub_cat->sub_cat_id] = $sub_cat;
                $return[$sub_cat->sub_cat_id]->chi_total = $this->getChildOfSubCat($sub_cat->sub_cat_id);
            }
            return $return;
        }
        else
        {
            return FALSE;
        }
        
    }

    //* Count the child base on the sub category
    public function getChildOfSubCat($id)
    {
        $this->db->where('child_sub_cat_id', $id);
        $query = $this->db->get('zd_child_category');
        return $query->num_rows();
    }

    //* Get the sub cat id
    public function getSubCatId($cat)
    {
        $this->db->select('*');
        $this->db->from('zd_sub_category');
        $this->db->where('sub_cat_slug', $cat);
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

    //* Get the main cat from the sub cat
    public function getTheMainCatFromSubCat($id)
    {
        $this->db->select('*');
        $this->db->from('zd_main_category');
        $this->db->where('main_cat_id', $id);
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

    //* Get all cild cat base on the sub cats
    public function getAllChildCatBaseOnSubCat($id)
    {
        $this->db->select('*, COUNT(zd_items.item_id) AS item_tot');
        $this->db->from('zd_child_category');
        $this->db->where('zd_child_category.child_sub_cat_id', $id);
        $this->db->join('zd_items', 'zd_items.item_cat_id = zd_child_category.child_cat_id');
        $this->db->group_by('zd_child_category.child_cat_id');
        $this->db->order_by('zd_child_category.child_cat_name', 'ASC');
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

    //* Get child cat id
    public function getChildCatId($cat)
    {
        $this->db->select('*');
        $this->db->from('zd_child_category');
        $this->db->where('child_cat_slug', $cat);
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

    //* Get the sub cat from the child cat
    public function getTheSubCatFromSubCat($id)
    {
        $this->db->select('*');
        $this->db->from('zd_sub_category');
        $this->db->where('sub_cat_id', $id);
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

    /*
    =========================================
    * Updating datas
    =========================================
    */

    //* Updating of main category
    public function updateMainCategory($data, $id)
    {
        $this->db->where('main_cat_id', $id);
        $this->db->update('zd_main_category', $data);
        return TRUE;
    }

    //* Updating of sub category
    public function updateSubCategory($data, $id)
    {
        $this->db->where('sub_cat_id', $id);
        $this->db->update('zd_sub_category', $data);
        return TRUE;
    }

    //* Updating of child category
    public function updateChildCategory($data, $id)
    {
        $this->db->where('child_cat_id', $id);
        $this->db->update('zd_child_category', $data);
        return TRUE;
    }

    /*
    =========================================
    * Deleting of datas
    =========================================
    */

    //* Deleting of main category
    public function deleteMainCategory($id)
    {
        $this->db->where('main_cat_id', $id);
        $this->db->delete('zd_main_category');
        return TRUE;
    }

    //* Deleting of sub category
    public function deleteSubCategory($id)
    {
        $this->db->where('sub_cat_id', $id);
        $this->db->delete('zd_sub_category');
        return TRUE;
    }

    //* Deleting of child category
    public function deleteChildCategory($id)
    {
        $this->db->where('child_cat_id', $id);
        $this->db->delete('zd_child_category');
        return TRUE;
    }

    /*
    =========================================
    * Counting of datas
    =========================================
    */
}