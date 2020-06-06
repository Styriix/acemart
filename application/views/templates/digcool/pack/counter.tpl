<section class="counter-up-area bgimage">
        <div class="bg_image_holder">
            <img src="{$url.main}static/website/home-banner/main-banner.jpg" alt="">
        </div>
        <!-- start .container -->
        <div class="container content_above">
            <!-- start .col-md-12 -->
            <div class="col-md-12">
                <div class="counter-up">
                    <div class="counter mcolor2">
                        <span class="lnr lnr-briefcase"></span>
                        <span class="count">{number_format($cal_item)}</span>
                        <p>Items for sale</p>
                    </div>
                    <div class="counter mcolor3">
                        <span class="lnr lnr-cloud-download"></span>
                        <span class="count">{number_format($cal_sales)}</span>
                        <p>Total Sales</p>
                    </div>
                    <div class="counter mcolor1">
                        <span class="lnr lnr-gift"></span>
                        <span class="count">{number_format($cal_free)}</span>
                        <p>Free Files</p>
                    </div>
                    <div class="counter mcolor4">
                        <span class="lnr lnr-users"></span>
                        <span class="count">{number_format($cal_users)}</span>
                        <p>Members</p>
                    </div>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.container -->
    </section>