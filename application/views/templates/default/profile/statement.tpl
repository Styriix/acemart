{extends file="layouts/statement.tpl"}

{block name=contents}

<!-- Main Banner 1 Area End Here --> 
<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="index.html">Home</a><span> -</span></li>
                <li>Sales Statement</li>
            </ul>
        </div>
    </div>  
</div> 
<!-- Inner Page Banner Area End Here -->          
<!-- Sales Statement Page Start Here -->
<div class="sales-statement-page-area bg-secondary section-space-bottom">
    <div class="container">
        <h2 class="title-section">Your Sales Statement</h2>
        <div class="sales-statement-wrapper inner-page-padding">
        <form method="get" action="" id="let_find" autocomplete="off">
            <div class="sales-statement-filter">
            
                <div class="sales-statement-filter-item">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <input type="text" class="form-control rt-date" placeholder="Date" name="from" id="form-date-from" data-error="Subject field is required" required/>
                </div>
                    <div class="sales-statement-filter-item">
                    <span>To</span>
                </div>
                    <div class="sales-statement-filter-item">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <input type="text" class="form-control rt-date" placeholder="Date" name="to" id="form-date-to" data-error="Subject field is required" required/>
                </div>
                    <div class="sales-statement-filter-item">
                    <a href="javascript:void();" onclick="document.getElementById('let_find').submit(); return false;" class="find-btn" id="login-button">Find</a>
                </div>
            
            </div>
            </form>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Item Sold</th>
                        <th>Customer</th>
                        <th>Purchase Code</th>
                        <th>Earning</th>
                        <th>Date Sold</th>
                        </tr>
                    </thead>
                    <tbody>
                        {if $my_smt}
                            {assign var="i" value=1}
                            {foreach from=$my_smt item=$smt}
                            <tr>
                                <th scope="row">{$i++}.</th>
                                <td>Sold: <a href="">{$smt->item_name}</a></td>
                                <td><img src="{$u_photo}{$smt->user_avater}" alt="avatar" width="35px" class="img-responsive" data-toggle="tooltip" data-placement="top" title="{$smt->user_firstname} {$smt->user_lastname} ({$smt->user_username})"></td>
                                <td><font color="red">{$smt->ss_code}</font></td>
                                <td><strong><font color="blue">{$app.currency}{number_format($smt->ss_earn, 2)}</font></strong></td>
                                <td>{Carbon\Carbon::parse($smt->ss_date)->format('d, M Y')}</td>
                            </tr>
                            {/foreach}
                        {/if}
                    </tbody>
                </table>
            </div>
            <div class="total-sale">Total Sales:<span> <font color="red">{$app.currency} {number_format($my_sales, 2)}</font></span></div> 
        </div> 
    </div> 
</div> 
<!-- Sales Statement Page End Here -->
    
{/block}

{block name=date_picker}
<script src="{$ast}/js/jquery.datetimepicker.full.min.js" type="text/javascript"></script>
 {/block}