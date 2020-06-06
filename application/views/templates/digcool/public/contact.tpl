{extends file="layouts/contact.tpl"}

{block name=contents}

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
                        {$form_alert}
                        <div class="contact_form cardify">
                            <div class="contact_form__title">
                                <h3>Leave Your Messages</h3>
                            </div>

                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <div class="contact_form--wrapper">
                                        <form method="post" action="{$url.main}main/send_contact" id="contact-form">
                                            {$csrf_token}
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
    
{/block}