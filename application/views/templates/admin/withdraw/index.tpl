{extends file="layouts/admin.tpl"}

{block name=contents}

<div class="grid simple">
    <div class="grid-title">
        <h4 class="text-primary">Paypal Transactions</h4>
    </div>
    <div class="grid-body">
        {$form_alert}
        <div class="table-responsive">
            <table class="table table-bordered table-condensed" id="example">
                <thead>
                    <tr>
                        <th style="width:1%">
                        <div class="checkbox check-default" style="margin-right:auto;margin-left:auto;">
                        <input type="checkbox" value="1" id="checkbox0">
                        <label for="checkbox0"></label>
                        </div>
                        </th>
                        <th>#</th>
                        <th>User</th>
                        <th>User Balance</th>
                        <th>Amount Request</th>
                        <th>Method</th>
                        <th>Account</th>
                        <th>Approve</th>
                        <th>Decline</th>
                        
                    </tr>
                </thead>
                <tbody>
                    {if $mws}
                    {assign var="i" value="1"}
                    {foreach from=$mws item=$item}
                    <tr>
                        <td class="v-align-middle">
                        <div class="checkbox check-default">
                        <input type="checkbox" value="3" id="checkbox{$item->wd_id}">
                        <label for="checkbox{$item->wd_id}"></label>
                        </div>
                        </td>
                        <td>{$i++}</td>
                        <td><img src="{$u_photo}{$item->user_avater}" width="35px" alt="Profile Pic" data-toggle="tooltip" data-placement="top" title="{$item->user_firstname} {$item->user_lastname} ({$item->user_username})"></td>
                        <td>{$app.currency}{number_format($item->bal_value, 2)}</td>
                        <td>{$app.currency}{number_format($item->wd_amount, 2)}</td>
                        <td>{$item->wd_method}</td>
                        <td>{$item->wd_account}</td>
                        <td>
                            <form action="{$url.admin}/approve_withdrawal/{$item->wd_user_id}/{$item->wd_id}" method="post">
                                {$csrf_token}
                                <input type="hidden" name="amt" value="{$item->wd_amount}">
                                <button type="submit" name="submit" class="btn btn-info">Approve</button>
                            </form>
                        </td>
                        <td>
                            <form action="{$url.admin}/reject_withdrawal/{$item->wd_id}" method="post">
                                {$csrf_token}
                                <button type="submit" name="submit" class="btn btn-danger">Decline</button>
                            </form>
                        </td>
                    </tr>
                    {/foreach}
                    {/if}
                </tbody>
            </table>
        </div>
    </div>
</div>
    
{/block}

{block name=data_table_css}
<link href="{$asset}/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
<link href="{$asset}/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
 <link href="{$asset}/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
{/block}

{block name=data_table_js}
<script src="{$asset}/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="{$asset}/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="{$asset}/plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js" type="text/javascript"></script>
<script type="text/javascript" src="{$asset}/plugins/datatables-responsive/js/datatables.responsive.js"></script>
<script type="text/javascript" src="{$asset}/plugins/datatables-responsive/js/lodash.min.js"></script>

<script src="{$asset}/js/datatables.js" type="text/javascript"></script>
    
{/block}