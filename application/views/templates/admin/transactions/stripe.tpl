{extends file="layouts/admin.tpl"}

{block name=contents}

<div class="grid simple">
    <div class="grid-title">
        <h4 class="text-primary">Strip Transaction</h4>
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
                        <th>Customer</th>
                        <th>Item Name</th>
                        <th>Transaction Id</th>
                        <th>Gross</th>
                        <th>Strip Order Id</th>
                        <th>Stripe Payer Email</th>
                        <th>Payer Currency</th>
                        <th>Status</th>
                        <th>Payment Date</th>
                        
                    </tr>
                </thead>
                <tbody>
                    {if $s_trans}
                    {assign var="i" value="1"}
                    {foreach from=$s_trans item=$item}
                    <tr>
                        <td class="v-align-middle">
                        <div class="checkbox check-default">
                        <input type="checkbox" value="3" id="checkbox{$item->sp_id}">
                        <label for="checkbox{$item->sp_id}"></label>
                        </div>
                        </td>
                        <td>{$i++}</td>
                        <td><img src="{$u_photo}{$item->user_avater}" width="35px" alt="Profile Pic" data-toggle="tooltip" data-placement="top" title="{$item->user_firstname} {$item->user_lastname} ({$item->user_username})"></td>
                        <td>{$item->item_name}</td>
                        <td>{$item->sp_txn_id}</td>
                        <td>{number_format($item->sp_amount/100, 2)}</td>
                        <td>{$item->sp_order_id}</td>
                        <td>{$item->sp_payer_email}</td>
                        <td>{$item->sp_currency}</td>
                        <td>
                            {if $item->sp_status eq succeeded}
                                <span class="text-success">Approved</span>
                            {else}
                                <span class="tex-danger">{$item->sp_status}</span>
                            {/if}
                        </td>
                        <td>{Carbon\Carbon::parse($item->sp_created_at)->format('d, F Y')}</td>
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