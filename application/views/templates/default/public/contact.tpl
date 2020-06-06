{extends file="layouts/contact.tpl"}

{block name=contents}

<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="{$url.main}">Home</a><span> -</span></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>  
</div> 
<!-- Inner Page Banner Area End Here -->          
   
<!-- Contact Us Info Area Start Here -->
<div class="contact-us-info-area">
    <div class="container">
        {$form_alert}
        <div class="row">  
            <div class="col-md-12">
                <div class="contact-us-right"> 
                    <h2>Drop Us A Message </h2>    
                    <div class="contact-form"> 
                        <form method="post" action="{$url.main}main/send_contact" id="contact-form">
                            {$csrf_token}
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
    
{/block}