<?php
defined('BASEPATH') OR exit('This page is not found');

class Blog_model extends CI_Model {

    /*
    ======================================================
    * Creating of data
    ======================================================
    */

    //* Create new blog category
    public function createNewBlogCategory($data)
    {
        $this->db->insert('zd_blog_category', $data);
        return TRUE;
    }

    //* Creating new blog post
    public function createNewBlogPost($data)
    {
        $this->db->insert('zd_blogs', $data);
        return TRUE;
    }

    /*
    ======================================================
    * Reading of data
    ======================================================
    */

    //* Get all blog categories
    public function listAllCategories()
    {
        $this->db->order_by('bc_name', 'ASC');
        $query = $this->db->get('zd_blog_category');
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return FALSE;
        }
    }

    //* Get blog post in admin
    public function getAllBlogs()
    {
        $this->db->select('*');
        $this->db->from('zd_blogs');
        $this->db->join('zd_blog_category', 'zd_blog_category.bc_id = zd_blogs.blog_cat_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_blogs.blog_author_id', 'left');
        $this->db->order_by('zd_blogs.blog_id', 'DESC');
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

    //* Get the blog post to edit
    public function getBlogToEdit($id)
    {
        $this->db->select('*');
        $this->db->from('zd_blogs');
        $this->db->where('blog_id', $id);
        $this->db->join('zd_blog_category', 'zd_blog_category.bc_id = zd_blogs.blog_cat_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_blogs.blog_author_id', 'left');
        $this->db->order_by('zd_blogs.blog_id', 'DESC');
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

    //* Get the category to edit
    public function editBlogCategory($edit_cat)
    {
        $this->db->where('bc_slug', $edit_cat);
        $query = $this->db->get('zd_blog_category');
        if($query->num_rows() > 0)
        {
            return $query->row(0);
        }
        else
        {
            return FALSE;
        }
    }

    //* Get the image blog post preview
    public function getBlogPostImagePreview($id)
    {
        $this->db->where('blog_id', $id);
        $query = $this->db->get('zd_blogs');
        return $query->row(6)->blog_preview;
    }

    //* Fetch blog to front ends page
    public function getHomePageBlogList($page)
    {
        $this->db->select('*');
        $this->db->from('zd_blogs');
        $this->db->where('blog_status_id', 1);
        $this->db->join('zd_blog_category', 'zd_blog_category.bc_id = zd_blogs.blog_cat_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_blogs.blog_author_id', 'left');
        $this->db->order_by('zd_blogs.blog_id', 'DESC');
        $this->db->limit(12, $page);
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

    //* Get blog by slug
    public function getBlogBySlug($slug)
    {
        $this->db->select('*');
        $this->db->from('zd_blogs');
        $this->db->where('blog_slug', $slug);
        $this->db->where('blog_status_id', 1);
        $this->db->join('zd_blog_category', 'zd_blog_category.bc_id = zd_blogs.blog_cat_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_blogs.blog_author_id', 'left');
        $this->db->order_by('zd_blogs.blog_id', 'DESC');
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

    //* Get recent blog post
    public function getRecentBlogPost($slug)
    {
        $this->db->select('*');
        $this->db->from('zd_blogs');
        $this->db->where('blog_slug !=', $slug);
        $this->db->where('blog_status_id', 1);
        $this->db->join('zd_blog_category', 'zd_blog_category.bc_id = zd_blogs.blog_cat_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_blogs.blog_author_id', 'left');
        $this->db->order_by('zd_blogs.blog_id', 'DESC');
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

    //* Get blog comment settings
    public function getCommentSettings()
    {
        $this->db->where('blog_cmt_id', 1);
        $query = $this->db->get('zd_blog_comment');
        return $query->row(0);
    }

    //* Get home page blogs
    public function getMainPageBlogList()
    {
        $this->db->select('*');
        $this->db->from('zd_blogs');
        $this->db->where('blog_status_id', 1);
        $this->db->join('zd_blog_category', 'zd_blog_category.bc_id = zd_blogs.blog_cat_id', 'left');
        $this->db->join('zd_users', 'zd_users.user_id = zd_blogs.blog_author_id', 'left');
        $this->db->order_by('zd_blogs.blog_id', 'DESC');
        $this->db->limit(3);
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

    //* Let check if is blog
    public function checkIsBlog()
    {
        $query = $this->db->get('zd_blogs');
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
    ======================================================
    * Updating of data
    ======================================================
    */

    //* Updating of blog category
    public function updateBlogCategory($data, $id)
    {
        $this->db->where('bc_id', $id);
        $this->db->update('zd_blog_category', $data);
        return TRUE;
    }

    //* Updating of blog post
    public function updateBlogPost($data, $id)
    {
        $this->db->where('blog_id', $id);
        $this->db->update('zd_blogs', $data);
        return TRUE;
    }

    //* Updating blog comment
    public function updateBlogComment($code)
    {
        $this->db->where('blog_cmt_id', 1);
        $this->db->set('blog_cmt_code', $code);
        $this->db->update('zd_blog_comment');
        return TRUE;
    }

    //* Update the blog view count
    public function setBlogView($id) 
    {
        $this->db->where('blog_id', $id);
        $this->db->set('blog_view', 'blog_view+1', FALSE);
        $this->db->update('zd_blogs');
        return TRUE;
    }

    /*
    ======================================================
    * Deleting of data
    ======================================================
    */

    //* Deleting of blog category
    public function deleteBlogCategory($id)
    {
        $this->db->where('bc_slug', $id);
        $this->db->delete('zd_blog_category');
        return TRUE;
    }

    //* Deleting of blog post
    public function deleteBlogPost($id)
    {
        $this->db->where('	blog_id', $id);
        $this->db->delete('zd_blogs');
        return TRUE;
    }

    /*
    ======================================================
    * Counting of data
    ======================================================
    */

    //* Count blog post
    public function count_blog_post()
    {
        $query = $this->db->get('zd_blogs');
        return $query->num_rows();
    }
}