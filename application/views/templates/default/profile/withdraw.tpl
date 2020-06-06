{extends file="layouts/profile.tpl"}

{block name=contents}

<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="{$url.main}">Home</a><span> -</span></li>
                <li>Withdrawals</li>
            </ul>
        </div>
    </div>  
</div>

<!-- Withdrawal Page Start Here -->
<div class="withdrawal-page-area bg-secondary section-space-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                {$form_alert}
                <h3 class="title-section">Withdrawals Earnings</h3>
                <div class="withdrawal-wrapper inner-page-padding">
                    <form action="create-withdrawal" method="post" id="personal-info-form">
                        {$csrf_token}
                        <div class="form-group withdrawal-info-item"> 
                            <div class="withdrawal-info-title"> 
                                <h4>Amount to Withdraw ({$app.currency}{$app.min_withdraw} Minimum)<span> *</span></h4>
                            </div>
                            <div class="withdrawal-info-field"> 
                                <input class="profile-heading" placeholder="Enter the amount you want to withdraw..." value="" name="amount" type="number">
                            </div>
                        </div>
                        <div class="form-group withdrawal-info-item"> 
                            <div class="withdrawal-info-title"> 
                                <h4>Choose your Withdraw Method<span> *</span></h4>
                            </div>
                            <div class="withdrawal-info-field"> 
                                <div class="custom-select">
                                    <select id="categories" name="method" class='select2' required>
                                        <option value="0">Select Method</option>
                                        <option value="paypal">Paypal</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group withdrawal-info-item"> 
                            <div class="withdrawal-info-title"> 
                                <h4>Your Account Name or Email<span> *</span></h4>
                            </div>
                            <div class="withdrawal-info-field"> 
                                <div class="custom-select">
                                    <input class="profile-heading" placeholder="Enter Your Account name or email" value="" name="account" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group withdrawal-info-item"> 
                            <div class="withdrawal-info-title"> 
                                <h4>Confirm Your Password Confirm Your Password<span> *</span></h4>
                            </div>
                            <div class="withdrawal-info-field"> 
                                <input class="profile-heading" placeholder="Password" value="" name="password" type="password">
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-success btn-block">Place Withdrawal</button>
                    </form>
                </div>  
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h2 class="title-section">Withdrawal History</h2>
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
</div>  
<!-- Withdrawal Page End Here -->
{/block}

{block name=w_css}
<link rel="stylesheet" href="{$ast}/css/select2.min.css">
{/block}

{block name=w_js}
<script src="{$ast}/js/select2.min.js" type="text/javascript"></script>
{/block}