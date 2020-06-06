{extends file="layouts/profile.tpl"}

{block name=contents}

<section class="dashboard-area">
<div class="dashboard_contents">
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="dashboard_title_area clearfix">
            <div class="dashboard__title pull-left">
                <h3>Withdraw Earning</h3>
            </div>
        </div>
        <!-- end /.dashboard_title_area -->
    </div>
    <!-- end /.col-md-12 -->
</div>

<!-- Withdrawal Page Start Here -->
<div class="withdraw_module withdraw_history">
    
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                {$form_alert}
                <h5 class="title-section text-center text-info">Withdrawals Earnings</h5>
                <hr>
                <div class="withdrawal-wrapper inner-page-padding">
                    <form action="create-withdrawal" method="post" id="personal-info-form">
                        {$csrf_token}
                        <div class="form-group withdrawal-info-item"> 
                            <div class="form-group"> 
                                <label>Amount to Withdraw ({$app.currency}{$app.min_withdraw} Minimum)<span> *</span></label>
                                <input class="text_field" placeholder="Enter the amount you want to withdraw..." value="" name="amount" type="number">
                            </div>
                        </div>
                        <div class="form-group withdrawal-info-item"> 
                            <div class="form-group"> 
                                <label>Choose your Withdraw Method<span> *</span></label>
                                <select id="categories" name="method" class='text_field' required>
                                    <option value="0">Select Method</option>
                                    <option value="paypal">Paypal</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group withdrawal-info-item"> 
                            <div class="form-group"> 
                                <label>Your Account Name or Email<span> *</span></label>
                                <input class="text_field" placeholder="Enter Your Account name or email" value="" name="account" type="text">
                            </div>
                        </div>
                        <div class="form-group withdrawal-info-item"> 
                            <div class="form-group"> 
                                <label>Confirm Your Password Confirm Your Password<span> *</span></label>
                                <input class="text_field" placeholder="Password" value="" name="password" type="password">
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn--round btn--fullwidth btn--sm btn-block">Place Withdrawal</button>
                    </form>
                </div>  
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h5 class="title-section text-center text-danger">Withdrawal History</h5>
                <hr>
                <div class="withdrawal-wrapper inner-page-padding">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <th>Amount</th>
                                <th>Account/Email</th>
                                <th>Schedule</th>
                                <th>Status</th>
                                <th>Method</th>
                            </thead>
                            <tbody>
                                {if $mws}
                                    {foreach from=$mws item=$mw}
                                        <tr>
                                            <td>{$app.currency}{$mw->wd_amount}</td>
                                            <td>{$mw->wd_account}</td>
                                            <td>{$mw->wd_place}</td>
                                            <td>
                                                {if $mw->wd_status eq 1}
                                                    <span>Paid</span>
                                                {else}
                                                    Pending
                                                {/if}
                                            </td>
                                            <td>{$mw->wd_method}</td>
                                        </tr>
                                    {/foreach}
                                {/if}
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div> 
        </div>    
</div>  
<!-- Withdrawal Page End Here -->
</div>
</div>
</section>
{/block}

{block name=w_css}
<link rel="stylesheet" href="{$ast}/css/select2.min.css">
{/block}

{block name=w_js}
<script src="{$ast}/js/select2.min.js" type="text/javascript"></script>
{/block}