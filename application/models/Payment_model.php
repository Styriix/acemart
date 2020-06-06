<?php
defined('BASEPATH') OR exit('This page does not exist');

class Payment_model extends CI_Model
{
    /*
    ======================================================
    * Creating of datas
    ======================================================
    */

    //* Create new paypal transactions
    public function createPaypalTransaction($data)
    {
        $this->db->insert('zd_paypal_transactions', $data);
        return TRUE;
    }

    //* Create new stripe transactions
    public function createNewStripeTransaction($data)
    {
        $this->db->insert('zd_stripe_transactions', $data);
        return $this->db->insert_id();
    }

    //* Create a new witdrawal request
    public function createNewWithdrawRequest($data)
    {
        $this->db->insert('zd_withdrawal', $data);
        return TRUE;
    }

    //* Set new bitcoin order infomation
    public function setNewBitcoinOrder($item_id, $ord, $uid)
    {
        $this->db->set('zd_btc_user_id', $uid);
        $this->db->set('zd_btc_item_id', $item_id);
        $this->db->set('zd_btc_order_no', $ord);
        $this->db->insert('zd_bitcoin_orders');
        return TRUE;
    }

    /*
    ======================================================
    * Reading of datas
    ======================================================
    */

    //* Get all paypal made transactions
    public function getPaypalTransactions()
    {
        $this->db->select('*');
        $this->db->from('zd_paypal_transactions');
        $this->db->join('zd_users', 'zd_users.user_id = zd_paypal_transactions.pp_user_id', 'left');
        $this->db->join('zd_items', 'zd_items.item_id = zd_paypal_transactions.pp_product_id', 'left');
        $this->db->order_by('zd_paypal_transactions.pp_id', 'DESC');
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

    //* Get all stripe made transactions
    public function getStripeTransactions()
    {
        $this->db->select('*');
        $this->db->from('zd_stripe_transactions');
        $this->db->join('zd_users', 'zd_users.user_id = zd_stripe_transactions.sp_user_id', 'left');
        $this->db->join('zd_items', 'zd_items.item_id = zd_stripe_transactions.sp_item_id', 'left');
        $this->db->order_by('zd_stripe_transactions.sp_id', 'DESC');
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

    //* Get all Bitcoin made transactions
    public function getBitcoinTransactions()
    {
        $this->db->select('*');
        $this->db->from('crypto_payments');
        $this->db->join('zd_users', 'zd_users.user_id = crypto_payments.userID', 'left');
        $this->db->join('zd_bitcoin_orders', 'zd_bitcoin_orders.zd_btc_order_no = crypto_payments.orderID', 'left');
        $this->db->join('zd_items', 'zd_items.item_id = zd_bitcoin_orders.zd_btc_item_id', 'left');
        $this->db->order_by('crypto_payments.paymentID', 'DESC');
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

    //* Get paypal gateway
    public function getPaypalGateway()
    {
        $this->db->where('pg_id', 1);
        $query = $this->db->get('zd_paypal_gateway');
        return $query->row(0);
    }

    //* Get stripe gateway
    public function getStripeGateway()
    {
        $this->db->where('sg_id', 1);
        $query = $this->db->get('zd_stripe_gateway');
        return $query->row(0);
    }

    //* Get bitcoin gateway
    public function getBitcoinGateway()
    {
        $this->db->where('btc_id', 1);
        $query = $this->db->get('zd_bitcoin_gateway');
        return $query->row(0);
    }

    //* Already have a pending withdrawal
    public function allreadyHavePendingWithdrawal($uid)
    {
        $this->db->where('wd_user_id', $uid);
        $this->db->where('wd_status', 0);
        $query = $this->db->get('zd_withdrawal');
        if($query->num_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    //* Get withdrawal list
    public function getWithdrawalList($uid)
    {
        $this->db->where('wd_user_id', $uid);
        $this->db->order_by('wd_id', 'desc');
        $this->db->limit(10);
        $query = $this->db->get('zd_withdrawal');
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return FALSE;
        }
    }

    //* Get all pending withdrawals
    public function getAllPendingWithdrawals()
    {
        $this->db->select('*');
        $this->db->from('zd_withdrawal');
        $this->db->where('zd_withdrawal.wd_status', 0);
        $this->db->join('zd_users', 'zd_users.user_id = zd_withdrawal.wd_user_id', 'left');
        $this->db->join('zd_user_balance', 'zd_user_balance.bal_user_id = zd_withdrawal.wd_user_id', 'left');
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
    ======================================================
    * Updating of datas
    ======================================================
    */

    //* Updating paypal payment gateway
    public function updatePaypalGateway($data)
    {
        $this->db->where('pg_id', 1);
        $this->db->update('zd_paypal_gateway', $data);
        return TRUE;
    }

    //* Updating stripe payment gateway
    public function updateStripeGateway($data)
    {
        $this->db->where('sg_id', 1);
        $this->db->update('zd_stripe_gateway', $data);
        return TRUE;
    }

    //* Updating Bitcoin payment gateway
    public function updateBitcoinGateway($data)
    {
        $this->db->where('btc_id', 1);
        $this->db->update('zd_bitcoin_gateway', $data);
        return TRUE;
    }

    //* Updating of withdrawal status
    public function updateWithdrawState($id)
    {
        $this->db->where('wd_id', $id);
        $this->db->set('wd_status', 1);
        $this->db->update('zd_withdrawal');
        return TRUE;
    }

    /*
    ======================================================
    * Deleting of datas
    ======================================================
    */
    //* Rejecting withdrawal reques
    public function delete_withdrawal($id)
    {
        $this->db->where('wd_id', $id);
        $this->db->delete('zd_withdrawal');
        return TRUE;
    }
}