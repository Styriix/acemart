<?php
defined('BASEPATH') OR exit('This page is not found');

class Commands extends CI_Controller 
{
    public function __construct()
    {
        parent:: __construct();
    }

    //* Setting up free files of the week
    public function free_file()
    {
        //* Empty the free file item table
        $this->Item_model->emptyTheFreeFileTable();

        //* Check for available free item in item table
        $freebies = $this->Item_model->checkForFreeFiles();

        //* Update the timestamp
        $this->Item_model->updateFreeFileTimeStamp();

        foreach($freebies as $free)
        {
            $this->Item_model->createNewFreeFileList($free->item_id);

            //* Let give the user a free icon badge
            $this->Account_model->giveUserAFreeBadgeIcon($free->item_user_id);
        }
    }

    //* Setting up weekly flash sale
    public function flash_sale()
    {
        //* Empty the item table
        $this->Item_model->emptyFlashSale();
        
        //* Check for available flash sale item
        $flashsales = $this->Item_model->checkForFlashFiles();

        //* Update the titmestampp
        $this->Item_model->updateFlashSaleTimeStamp();

        //* loop in the flash sales in table
        if($flashsales)
        {
            foreach($flashsales as $flash)
            {
                $this->Item_model->createNewFlashSales($flash->item_id, $flash->item_regu_price);

                //* Let give flash sale badge
                $this->Account_model->giveFlashSaleBadgeToUser($flash->item_user_id);
            }
        }
    }
}