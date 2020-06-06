{extends file="layouts/admin.tpl"}

{block name=contents}

<div class="grid simple">
    <div class="grid-title">
        <h4 class="text-primary">Bitcoin Transaction</h4>
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
                        <th>Order No</th>
                        <th>Coin Label</th>
                        <th>Wallet Addr</th>
                        <th>Amount</th>
                        <th>Amount In USD</th>
                        <th>Status</th>
                        <th>Payment Date</th>
                        
                    </tr>
                </thead>
                <tbody>
                    {if $btc_trans}
                    {assign var="i" value="1"}
                    {foreach from=$btc_trans item=$item}
                    <tr>
                        <td class="v-align-middle">
                        <div class="checkbox check-default">
                        <input type="checkbox" value="3" id="checkbox{$item->paymentID}">
                        <label for="checkbox{$item->paymentID}"></label>
                        </div>
                        </td>
                        <td>{$i++}</td>
                        <td><img src="{$u_photo}{$item->user_avater}" width="35px" alt="Profile Pic" data-toggle="tooltip" data-placement="top" title="{$item->user_firstname} {$item->user_lastname} ({$item->user_username})"></td>
                        <td>{$item->item_name}</td>
                        <td>{$item->txID}</td>
                        <td>{$item->zd_btc_order_no}</td>
                        <td>{$item->coinLabel}</td>
                        <td>{$item->addr}</td>
                        <td>{number_format($item->amount, 2)}</td>
                        <td>{number_format($item->amountUSD, 2)}</td>
                        <td>
                            {if $item->processed eq 1}
                                <span class="text-success">Confirmed</span>
                            {else}
                                <span class="tex-danger">Pending</span>
                            {/if}
                        </td>
                        <td>{Carbon\Carbon::parse($item->recordCreated)->format('d, F Y')}</td>
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