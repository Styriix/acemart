<?php
/* Smarty version 3.1.33, created on 2019-11-17 17:07:08
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\public\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd1702c0cdcb4_57680857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20b3fb83ecde922e410ea7713bfbe16c9300923f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\public\\contact.tpl',
      1 => 1574006807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd1702c0cdcb4_57680857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12446728585dd1702c0b0d71_20168973', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/contact.tpl");
}
/* {block 'contents'} */
class Block_12446728585dd1702c0b0d71_20168973 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_12446728585dd1702c0b0d71_20168973',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section class="contact-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <!-- start col-md-12 -->
                    <div class="col-md-12">
                        <div class="section-title">
                            <h1>How can We
                                <span class="highlighted">Help?</span>
                            </h1>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

                <div class="row">

                    <div class="col-md-12">
                        <?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

                        <div class="contact_form cardify">
                            <div class="contact_form__title">
                                <h3>Leave Your Messages</h3>
                            </div>

                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <div class="contact_form--wrapper">
                                        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
main/send_contact" id="contact-form">
                                            <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Name" name="name" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" placeholder="Email" name="email" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Subject" name="subject" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <textarea cols="30" rows="10" placeholder="Yout text here" name="message" required></textarea>

                                            <div class="sub_btn">
                                                <button type="submit" name="submit" class="btn btn--round btn--default">Send Request</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- end /.col-md-8 -->
                            </div>
                            <!-- end /.row -->
                        </div>
                        <!-- end /.contact_form -->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
    
<?php
}
}
/* {/block 'contents'} */
}
