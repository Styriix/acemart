<?php
defined('BASEPATH') OR exit('This page does not exit');

class Account_model extends CI_Model {

    /*
    ===================================================
    * Creating of datas
    ===================================================
    */

    //* Create new admin account
    public function createNewAdmin($data)
    {
        $this->db->insert('zd_admin', $data);
        return TRUE;
    }

    //* Admin create new user account
    public function adminCreateNewUser($data)
    {
        $this->db->set('user_last_seen', 'NOW()', FALSE);
        $this->db->insert('zd_users', $data);
        return $this->db->insert_id();
    }

    //* User registration
    public function userCreateAccount($data)
    {
        $this->db->set('user_last_seen', 'NOW()', FALSE);
        $this->db->insert('zd_users', $data);
        return $this->db->insert_id();
    }

    //* Create the user activation key
    public function createActivationCode($lastId, $v_key)
    {
        $this->db->set('uk_user_id', $lastId);
        $this->db->set('uk_value', $v_key);
        $this->db->insert('zd_user_email_key');
        return TRUE;
    }

    //* Create the user account balance
    public function createUserBalance($lastId)
    {
        $this->db->set('bal_user_id', $lastId);
        $this->db->insert('zd_user_balance');
        return TRUE;
    }

    //* Creating a new follower
    public function createNewFollower($me, $id)
    {
        $this->db->set('folo_is_user', $me);
        $this->db->set('folo_is_following', $id);
        $this->db->insert('zd_followers');
        return TRUE;
    }

    //* Create new message
    public function createNewMessage($data)
    {
        $this->db->insert('zd_messages', $data);
        return TRUE;
    }

    //* Retrive user statement
    public function getUserSaleStatement($uid)
    {
        $this->db->select('*');
        $this->db->from('zd_sale_statement');
        $this->db->where('zd_sale_statement.ss_author_id', $uid);
        $this->db->join('zd_users', 'zd_users.user_id = zd_sale_statement.ss_user_id', 'left');
        $this->db->join('zd_items', 'zd_items.item_id = zd_sale_statement.ss_item_id', 'left');
        $this->db->order_by('zd_sale_statement.ss_id', 'DESC');
        $this->db->limit(50);
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

    //* Retrive user statement
    public function getUserSaleStatementByDate($uid, $from, $to)
    {
        $this->db->select('*');
        $this->db->from('zd_sale_statement');
        $this->db->where('zd_sale_statement.ss_author_id', $uid);
        $this->db->where('zd_sale_statement.ss_date BETWEEN "'. date('Y-m-d', strtotime($from)). '" and "'. date('Y-m-d', strtotime($to)).'"');
        $this->db->join('zd_users', 'zd_users.user_id = zd_sale_statement.ss_user_id', 'left');
        $this->db->join('zd_items', 'zd_items.item_id = zd_sale_statement.ss_item_id', 'left');
        $this->db->order_by('zd_sale_statement.ss_id', 'DESC');
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

    //* Create new sale statement
    public function createNewSaleStatement($uid, $author_id, $earn, $productID, $randomString)
    {
        $this->db->set('ss_user_id', $uid);
        $this->db->set('ss_author_id', $author_id);
        $this->db->set('ss_item_id', $productID);
        $this->db->set('ss_earn', $earn);
        $this->db->set('ss_code', $randomString);
        $this->db->insert('zd_sale_statement');
        return TRUE;
    }

    //* Create a new user as author
    public function makeUserAnAuthor($uid)
    {
        $this->db->set('author_user_id', $uid);
        $this->db->insert('zd_authors');
        return TRUE;
    }

    //* Give user a new free badge
    public function giveUserAFreeBadgeIcon($id)
    {
        $this->db->where('fbg_user_id', $id);
        $query = $this->db->get('zd_free_badge');
        if($query->num_rows() == 0)
        {
            $this->db->set('fbg_user_id', $id);
            $this->db->insert('zd_free_badge');
            return TRUE;
        }
    }

    //* Give user a new Flash sale badge
    public function giveFlashSaleBadgeToUser($id)
    {
        $this->db->where('fsb_user_id', $id);
        $query = $this->db->get('zd_flash_sale_badge');
        if($query->num_rows() == 0)
        {
            $this->db->set('fsb_user_id', $id);
            $this->db->insert('zd_flash_sale_badge');
            return TRUE;
        }
    }

    /*
    ===================================================
    * Reading of datas
    ===================================================
    */

    //* Get all admin accounts
    public function getAllAdmin()
    {
        $this->db->select('*');
        $this->db->from('zd_admin');
        $this->db->order_by('admin_firstname', 'ASC');
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

    //* Check username of admin before editing
    public function checkEditedUsername($uname)
    {
        $this->db->where('admin_username', $uname);
        $query = $this->db->get('zd_admin');
        if($query->num_rows() > 0)
        {
            return $query->row(0);
        }
        else
        {
            return FALSE;
        }
    }

    //* Fetch the current admin user profile picture
    public function getUserProfilePic($id)
    {
        $this->db->where('admin_id', $id);
        $query = $this->db->get('zd_admin');
        return $query->row(5)->admin_profile_pic;
    }

    //* Checking admin login credenctials
    public function checkAdminLoginData($email, $password)
    {
        $this->db->select('*');
        $this->db->from('zd_admin');
        $this->db->where('admin_email', $email);
        $em = $this->db->get();

        if($em->num_rows() > 0)
        {
            $pass = $em->row(6)->admin_password;
            if(password_verify($password, $pass))
            {
                return $em->row(0)->admin_id;
            }
            else
            {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
    }

    //* Checking user login credenctials
    public function checkUserLoginData($username, $password)
    {
        $this->db->select('*');
        $this->db->from('zd_users');
        $this->db->where('user_username', $username);
        $this->db->where('user_status', 1);
        $em = $this->db->get();

        if($em->num_rows() > 0)
        {
            $pass = $em->row(6)->user_password;
            if(password_verify($password, $pass))
            {
                return $em->row(0)->user_id;
            }
            else
            {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
    }

    //* Validating the user id from session
    public function validateUserLogId($uid)
    {
        $this->db->where('admin_id', $uid);
        $query = $this->db->get('zd_admin');
        if($query->num_rows() > 0)
        {
            return $query->row(0);
        }
        else
        {
            return FALSE;
        }
    }

    //* Validating the user id from session for normal users
    public function validateUserSectionLogId($uid)
    {
        $this->db->select('*');
        $this->db->from('zd_users');
        $this->db->where('zd_users.user_id', $uid);
        $this->db->join('zd_user_balance', 'zd_user_balance.bal_user_id = zd_users.user_id');
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

    //* Fetch all users
    public function getAllUsers()
    {
        $this->db->select('*');
        $this->db->from('zd_users');
        $this->db->order_by('user_id', 'DESC');
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

    //* Check the user account username for editing
    public function checkUserEditedUsername($uname)
    {
        $this->db->where('user_username', $uname);
        $query = $this->db->get('zd_users');
        if($query->num_rows() > 0)
        {
            return $query->row(0);
        }
        else
        {
            return FALSE;
        }
    }

    //* Get the current user avater
    public function getUserCurrentAvater($uname)
    {
        $this->db->where('user_username', $uname);
        $query = $this->db->get('zd_users');
        return $query->row(6)->user_avater;
    }

    //* List users for select choose in creating new item
    public function listUsersInSelect()
    {
        $this->db->where('user_status', 1);
        $this->db->order_by('user_firstname', 'ASC');
        $query = $this->db->get('zd_users');
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return FALSE;
        }
    }

    //* Fetch out the user id
    public function getUserId($username)
    {
        $this->db->where('user_username', $username);
        $query = $this->db->get('zd_users');
        return $query->row(0)->user_id;
    }

    //* Validate the user verification key to verify email
    public function validateUserVerifyToken($uid, $key)
    {
        $this->db->where('uk_user_id', $uid);
        $query = $this->db->get('zd_user_email_key');
        if($query->num_rows() > 0)
        {
            $db_key = $query->row(2)->uk_value;
            if(password_verify($key, $db_key))
            {
                return TRUE;
            }
        }
        else
        {
            return FALSE;
        }
    }

    //* Get the user infomations
    public function getTheUserInfo($uid)
    {
        $this->db->where('user_id', $uid);
        $query = $this->db->get('zd_users');
        return $query->row(0);
    }

    //* Get the author infomaion in payment zone
    public function catchAuthorInfoInPayment($author_id)
    {
        $this->db->select('*');
        $this->db->from('zd_users');
        $this->db->where('zd_users.user_id', $author_id);
        $this->db->join('zd_user_balance', 'zd_user_balance.bal_user_id = zd_users.user_id');
        $query = $this->db->get();
        return $query->row(0);
    }

    //* Get user who rate item information
    public function getUserRaterInfo($uid)
    {
        $this->db->where('user_id', $uid);
        $query = $this->db->get('zd_users');
        return $query->row(0);
    }

    //* Get user profile infomations
    public function getUserProfileInfomation($user)
    {
        $this->db->select('*');
        $this->db->from('zd_users');
        $this->db->where('zd_users.user_username', $user);
        $query = $this->db->get();
        if($query->num_rows() == 1)
        {
            return $query->row(0);
        }
        else
        {
            return FALSE;
        }
    }

    //* Get user data for settings page
    public function getUserData($uid)
    {
        $this->db->where('user_id', $uid);
        $query = $this->db->get('zd_users');
        return $query->row(0);
    }

    //* Verify the user old password
    public function verifyOldpassword($old_pass, $uid)
    {
        $this->db->where('user_id', $uid);
        $query = $this->db->get('zd_users');
        $db_pass = $query->row(9)->user_password;
        if(password_verify($old_pass, $db_pass))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    //* Get the author user email
    public function getAuthorEmail($uid)
    {
        $this->db->where('user_id', $uid);
        $query = $this->db->get('zd_users');
        return $query->row(5)->user_email;
    }

    //* Check for password
    public function checkPasswordToWithdraw($uid, $password)
    {
        $this->db->where('user_id', $uid);
        $query = $this->db->get('zd_users');
        $db_pass = $query->row(9)->user_password;
        if(password_verify($password, $db_pass))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    //* Get the user balance
    public function getUserBalance($uid)
    {
        $this->db->where('bal_user_id', $uid);
        $query = $this->db->get('zd_user_balance');
        return $query->row(2)->bal_value;
    }

    //* Check before password reset
    public function letResetPassword($username, $email)
    {
        $this->db->where('user_username', $username);
        $this->db->where('user_email', $email);
        $query = $this->db->get('zd_users');
        return $query->row(0);
    }

    //* Fetch all user that were active
    public function fetchAllUsers()
    {
        $this->db->where('user_status', 1);
        $query = $this->db->get('zd_users');
        return $query->result();
    }

    //* Let check if refer exist in our data
    public function checkIfRefExist($ref)
    {
        $this->db->where('user_username', $ref);
        $query = $this->db->get('zd_users');
        if($query->num_rows() > 0)
        {
            return $query->row(0)->user_id;
        }
        else
        {
            return FALSE;
        }
    }

    //* Let check if user is not following before
    public function checkIfIsNotFollowingBefore($me, $id)
    {
        $this->db->where('folo_is_user', $me);
        $this->db->where('folo_is_following', $id);
        $query = $this->db->get('zd_followers');
        if($query->num_rows() == 1)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    //* Let check if user is following
    public function isFollowing($id, $myId)
    {
        $this->db->where('folo_is_user', $myId);
        $this->db->where('folo_is_following', $id);
        $query = $this->db->get('zd_followers');
        if($query->num_rows() == 1)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    //* Retrieve current user followers
    public function listOutUserFollowers($id)
    {
        $this->db->select('*');
        $this->db->from('zd_followers');
        $this->db->where('zd_followers.folo_is_following', $id);
        $this->db->join('zd_users', 'zd_users.user_id = zd_followers.folo_is_user', 'left');
        $this->db->order_by('zd_followers.folo_id', 'DESC');
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            //return $query->result();
            $return = array();
            foreach($query->result() as $user)
            {
                $return[$user->user_id] = $user;
                $return[$user->user_id]->u_item = $this->getTheUserTotalItems($user->user_id);
                $return[$user->user_id]->u_folo = $this->getTheUserTotalFollowers($user->user_id);
            }

            return $return;
        }
        else
        {
            return FALSE;
        }
    }

    //* Retrieve current user following
    public function listOutUserFollowing($id)
    {
        $this->db->select('*');
        $this->db->from('zd_followers');
        $this->db->where('zd_followers.folo_is_user', $id);
        $this->db->join('zd_users', 'zd_users.user_id = zd_followers.folo_is_following', 'left');
        $this->db->order_by('zd_followers.folo_id', 'DESC');
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            //return $query->result();
            $return = array();
            foreach($query->result() as $user)
            {
                $return[$user->user_id] = $user;
                $return[$user->user_id]->u_item = $this->getTheUserTotalItems($user->user_id);
                $return[$user->user_id]->u_folo = $this->getTheUserTotalFollowers($user->user_id);
            }

            return $return;
        }
        else
        {
            return FALSE;
        }
    }

    //* Count total user item as abouve function
    public function getTheUserTotalItems($id)
    {
        $this->db->where('item_user_id', $id);
        $query = $this->db->get('zd_items');
        return $query->num_rows();
    }

    //* Count toatal user followers
    public function getTheUserTotalFollowers($id)
    {
        $this->db->where('folo_is_following', $id);
        $query = $this->db->get('zd_followers');
        return $query->num_rows();
    }

    //* Get user messages conversations
    public function getConversations($uid)
    {
        $this->db->select('*');
        $this->db->from('zd_messages');
        $this->db->where('zd_messages.msg_to_id', $uid);
        $this->db->or_where('zd_messages.msg_from_id', $uid);
        $this->db->join('zd_users', 'zd_users.user_id = zd_messages.msg_to_id', 'left');
        $this->db->order_by('zd_messages.msg_id', 'DESC');
        //$this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            //return $query->result();
            $return = array();
            foreach($query->result() as $convo)
            {
                
                $return[$convo->msg_id] = $convo;
                $return[$convo->msg_id]->msg_unread = $this->getNumOfUnreadMsg($convo->msg_id, $uid);
                $return[$convo->msg_id]->alt_user = $this->getTheAltUser($convo->msg_from_id);
            }

            return $return;
        }
        else
        {
            return FALSE;
        }
    }

    //* Get user messages conversations second
    public function getConversationsSecond($uid)
    {
        $this->db->select('*');
        $this->db->from('zd_messages');
        $this->db->where('zd_messages.msg_to_id', $uid);
        $this->db->or_where('zd_messages.msg_from_id', $uid);
        $this->db->join('zd_users', 'zd_users.user_id = zd_messages.msg_to_id', 'left');
        $this->db->order_by('zd_messages.msg_id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            //return $query->result();
            $return = array();
            foreach($query->result() as $convo)
            {
                
                $return[$convo->msg_id] = $convo;
                $return[$convo->msg_id]->msg_unread = $this->getNumOfUnreadMsg($convo->msg_id, $uid);
                $return[$convo->msg_id]->alt_user = $this->getTheAltUser($convo->msg_from_id);
            }

            return $return;
        }
        else
        {
            return FALSE;
        }
    }

    //* Get number of unread message as define above
    public function getNumOfUnreadMsg($id, $to_id)
    {
        $this->db->where('msg_id', $id);
        $this->db->where('msg_to_id !=', $to_id);
        $this->db->where('msg_read', 0);
        $query = $this->db->get('zd_messages');
        return $query->num_rows();
    }

    //* Get the alt user as define above
    public function getTheAltUser($uid)
    {
        $this->db->where('user_id', $uid);
        $query = $this->db->get('zd_users');
        return $query->row(0);
    }

    //* Get user messaging to infomation
    public function getUserMessagingToInfo($user)
    {
        $this->db->where('user_username', $user);
        $query = $this->db->get('zd_users');
        if($query->num_rows() > 0)
        {
            return $query->row(0);
        }
        else
        {
            return FALSE;
        }
    }

    //* Get sender infomations
    public function getSenderInfomation($uid)
    {
        $this->db->where('user_id', $uid);
        $query = $this->db->get('zd_users');
        return $query->row(0);
    }

    //* Retrive the conversation messages
    public function getMessages($uid, $msg_to_id)
    {
        $this->db->select('*');
        $this->db->from('zd_messages');
        $this->db->where('zd_messages.msg_from_id', $uid);
        $this->db->where('zd_messages.msg_to_id', $msg_to_id);
        $this->db->or_where('zd_messages.msg_to_id', $uid);
        $this->db->where('zd_messages.msg_from_id', $msg_to_id);
        $this->db->join('zd_users', 'zd_users.user_id = zd_messages.msg_to_id', 'left');
        $this->db->limit(20);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            //return $query->result();
            $return = array();
            foreach($query->result() as $alt)
            {
                $return[$alt->msg_id] = $alt;
                $return[$alt->msg_id]->alt_user = $this->getAltUserOfMessages($alt->msg_from_id);
            }
            return $return;
        }
        else
        {
            return FALSE;
        }
    }

    //* Get alt users in messages as declare above
    public function getAltUserOfMessages($id)
    {
        $this->db->where('user_id', $id);
        $query = $this->db->get('zd_users');
        return $query->row(0);
    }

    //* Get receiver id
    public function getReceiverId($user)
    {
        $this->db->where('user_username', $user);
        $query = $this->db->get('zd_users');
        return $query->row(0)->user_id;
    }

    //* Let check if user to is valid
    public function checkValidUserTo($id)
    {
        $this->db->where('user_id', $id);
        $query = $this->db->get('zd_users');
        if($query->num_rows() > 0)
        {
            return $query->row(0);
        }
        else
        {
            return FALSE;
        }
    }

    //* Retrive current user blance
    public function getTheAvaliableUserBalance($uid)
    {
        $this->db->where('bal_user_id', $uid);
        $query = $this->db->get('zd_user_balance');
        return $query->row(2)->bal_value;
    }

    //* Get my info
    public function getMyInfo($uid)
    {
        $this->db->where('user_id', $uid);
        $query = $this->db->get('zd_users');
        return $query->row(0);
    }

    //* Let check if user is and author
    public function checkIfUserIsAnAuthor($uid)
    {
        $this->db->where('author_user_id', $uid);
        $query = $this->db->get('zd_authors');
        if($query->num_rows() == 1)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    //* Check facebook auth email
    public function fbCheckIfEmailIsUsed($user_email)
    {
        $this->db->where('user_email', $user_email);
        $query = $this->db->get('zd_users');
        if($query->num_rows() > 0)
        {
            return $query->row(0)->user_id;
        }
        else
        {
            return FALSE;
        }
    }

    //* Let check unique username
    public function checkUsedUsername($user_name)
    {
        $this->db->where('user_username', $user_name);
        $query = $this->db->get('zd_users');
        return $query->num_rows();
    }

    //* Check if user has gift badge
    public function checkIfUserIsGiftBadge($id)
    {
        $this->db->where('fbg_user_id', $id);
        $query = $this->db->get('zd_free_badge');
        if($query->num_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    //* Check if user has flash badge
    public function checkIfUserHasFlashBadge($id)
    {
        $this->db->where('fsb_user_id', $id);
        $query = $this->db->get('zd_flash_sale_badge');
        if($query->num_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    //* Get all users balances
    public function getAllUsersBalances()
    {
        $this->db->select('*');
        $this->db->from('zd_user_balance');
        $this->db->join('zd_users', 'zd_users.user_id = zd_user_balance.bal_user_id', 'left');
        $this->db->order_by('zd_users.user_firstname', 'ASC');
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

    /*
    ===================================================
    * Updating of datas
    ===================================================
    */

    //* Update admin user account
    public function updateAdminAccount($id, $uname, $data)
    {
        $this->db->where('admin_id', $id);
        $this->db->where('admin_username', $uname);
        $this->db->update('zd_admin', $data);
        return TRUE;
    }

    //* Admin update user account
    public function adminUpdatedUser($data, $uname)
    {
        $this->db->where('user_username', $uname);
        $this->db->update('zd_users', $data);
        return TRUE;
    }

    //* Activate the user account
    public function activateTheNewUserAccount($uid)
    {
        $this->db->where('user_id', $uid);
        $this->db->set('user_status', 1);
        $this->db->update('zd_users');
        return TRUE;
    }

    //* Update auhor account balance
    public function updateAuthorAccountBalance($author_id, $new_a_balance)
    {
        $this->db->where('bal_user_id', $author_id);
        $this->db->set('bal_value', $new_a_balance);
        $this->db->update('zd_user_balance');
        return TRUE;
    }

    //* Updating user last seen
    public function updateLastSeenOfUser($uid)
    {
        $this->db->where('user_id', $uid);
        $this->db->set('user_last_seen', 'NOW()', FALSE);
        $this->db->update('zd_users');
        return TRUE;
    }

    //* User update basic profile
    public function userUpdateBasicProfile($data, $uid)
    {
        $this->db->where('user_id', $uid);
        $this->db->update('zd_users', $data);
        return TRUE;
    }

    //* Update user balance ater withdrawing
    public function updateBalanceAfterWithdraw($uid, $remain)
    {
        $this->db->where('bal_user_id', $uid);
        $this->db->set('bal_value', $remain);
        $this->db->update('zd_user_balance');
        return TRUE;
    }

    //* Update user new password
    public function resetPassword($uid, $data)
    {
        $this->db->where('user_id', $uid);
        $this->db->update('zd_users', $data);
        return TRUE;
    }

    //* Read messages receipt
    public function readMessagesReceipt($id, $uid)
    {
        $this->db->where('msg_from_id', $id);
        $this->db->where('msg_to_id', $uid);
        $this->db->set('msg_read', 1);
        $this->db->update('zd_messages');
        return TRUE;
    }

    //* Update user credit balance
    public function updateUserCreditBal($uid, $left_bal)
    {
        $this->db->where('bal_user_id', $uid);
        $this->db->set('bal_value', $left_bal);
        $this->db->update('zd_user_balance');
        return TRUE;
    }

    //* Let update the author sell  badge
    public function updateAuthorSellBadgeStat($author_id, $productID, $item_price_get, $dl_id)
    {
        $this->db->set('sb_user_id', $author_id);
        $this->db->set('sb_item_id', $productID);
        $this->db->set('sb_amount', $item_price_get);
        $this->db->set('sb_dl_id', $dl_id);
        $this->db->insert('zd_sell_badge');
        return TRUE;
    }

    //* ADmin update user balance
    public function adminUpdateUserBalance($data, $id)
    {
        $this->db->where('bal_user_id', $id);
        $this->db->update('zd_user_balance', $data);
        return TRUE;
    }

    /*
    ===================================================
    * Deleting of datas
    ===================================================
    */

    //* Removing of admin account
    public function delteAdminAccount($id)
    {
        $this->db->where('admin_id', $id);
        $this->db->delete('zd_admin');
        return TRUE;
    }

    //* Deleting of users account
    public function delteUserAccount($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('zd_users');
        return TRUE;
    }

    //* Removing the verification key
    public function removeUserVerificationKey($uid)
    {
        $this->db->where('uk_user_id', $uid);
        $this->db->delete('zd_user_email_key');
        return TRUE;
    }

    //* Removing follower (Unfollowing)
    public function removeFollower($me, $id)
    {
        $this->db->where('folo_is_user', $me);
        $this->db->where('folo_is_following', $id);
        $this->db->delete('zd_followers');
        return TRUE;
    }

    //* Get the user from or to informations
    public function getUserFromInfo($id)
    {
        $this->db->where('user_id', $id);
        $query = $this->db->get('zd_users');
        return $query->row(0);
    }

    /*
    ===================================================
    * Counting of datas
    ===================================================
    */

    //* Get the total sale of user
    public function calculateTotalSale($id)
    {
        $this->db->select('*');
        $this->db->from('zd_item_downloads');
        $this->db->join('zd_items', 'zd_items.item_id = zd_item_downloads.td_item_id', 'left');
        $this->db->group_by('zd_item_downloads.td_item_id');
        $this->db->where('zd_items.item_user_id', $id);
        $query = $this->db->get();
        return $query->num_rows();
    }

    //* Count all users
    public function countAllUsers()
    {
        $query = $this->db->get('zd_users');
        return $query->num_rows();
    }

    //* Count number of user followers
    public function countNumOfFollwers($id)
    {
        $this->db->where('folo_is_following', $id);
        $query = $this->db->get('zd_followers');
        return $query->num_rows();
    }

    //* Coount number of following
    public function countNumOfFollowing($id)
    {
        $this->db->where('folo_is_user', $id);
        $query = $this->db->get('zd_followers');
        return $query->num_rows();
    }

    //* Count all members
    public function countHomeViewTotalUsers()
    {
        $query = $this->db->get('zd_users');
        return $query->num_rows();
    }

    //* Calculating user total sales
    public function calculateMyTotalSales($uid)
    {
        $this->db->select('*');
        $this->db->from('zd_sale_statement');
        $this->db->where('ss_author_id', $uid);
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

    //* Retreve number of item purchase by user
    public function getNumberOfItemPurchase($id)
    {
        $this->db->where('td_user_id', $id);
        $query = $this->db->get('zd_item_downloads');
        return $query->num_rows();
    }

    //* Calculate total item sold price
    public function catchTotalOfItemSold($user_id)
    {
        $this->db->select_sum('sb_amount');
        $this->db->from('zd_sell_badge');
        $this->db->where('sb_user_id', $user_id);
        $query = $this->db->get();
        return $query->row(3)->sb_amount;
    }

    //* Get num of Affilate user
    public function getNumberOfRefs($user)
    {
        $this->db->where('user_ref', $user);
        $query = $this->db->get('zd_users');
        return $query->num_rows();
    }
}