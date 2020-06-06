<?php
/* Smarty version 3.1.33, created on 2019-10-17 15:59:29
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\default\public\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da873c121fd86_64474183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcdd648bbcdb9377d6f23c0b96242228f74ad1d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\default\\public\\contact.tpl',
      1 => 1571320763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da873c121fd86_64474183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7895342465da873c11fa188_06527867', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/contact.tpl");
}
/* {block 'contents'} */
class Block_7895342465da873c11fa188_06527867 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_7895342465da873c11fa188_06527867',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="index.html">Home</a><span> -</span></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>  
</div> 
<!-- Inner Page Banner Area End Here -->          
   
<!-- Contact Us Info Area Start Here -->
<div class="contact-us-info-area">
    <div class="container">
        <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

        <div class="row">  
            <div class="col-md-12">
                <div class="contact-us-right"> 
                    <h2>Drop Us A Message </h2>    
                    <div class="contact-form"> 
                        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
main/send_contact" id="contact-form">
                            <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Name*" class="form-control" name="name" id="form-name" data-error="Name field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" placeholder="Email*" class="form-control" name="email" id="form-email" data-error="Email field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                        <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Subject*" class="form-control" name="subject" id="form-subject" data-error="Subject field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea placeholder="Message*" class="textarea form-control" name="message" id="form-message" rows="7" cols="20" data-error="Message field is required" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
                                        <div class="form-group margin-bottom-none">
                                            <button type="submit" name="submit" class="update-btn">Send Message</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
                                        <div class='form-response'></div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Us Page Area End Here -->
    
<?php
}
}
/* {/block 'contents'} */
}
