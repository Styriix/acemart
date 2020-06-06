{extends file="layouts/admin.tpl"}

{block name=contents}

{$form_alert}
<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-title">
                <h4>Admin Manage <span class="semi-bold">Users Availbale Balance</span></h4>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="reload"></a>
                </div>
            </div>
            <div class="grid-body ">
                <div class="">
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
                                <th>Profile</th>
                                <th>FirstName</th>
                                <th>LastName</th>
                                <th>UserName</th>
                                <th>Email Address</th>
                                <th>Balance ({$app.currency})</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {if $users}
                            {assign var="i" value="1"}
                            {foreach from=$users item=$user}
                            <tr>
                                <form method="post" action="{$url.admin}/update_usaer_blance/{$user->bal_user_id}">
                                {$csrf_token}
                                <td class="v-align-middle">
                                <div class="checkbox check-default">
                                <input type="checkbox" value="3" id="checkbox{$user->user_id}">
                                <label for="checkbox{$user->user_id}"></label>
                                </div>
                                </td>
                                <td>{$i++}</td>
                                <td><img src="{$u_photo}{$user->user_avater}" width="35px" alt="Profile Pic"></td>
                                <td>{$user->user_firstname}</td>
                                <td>{$user->user_lastname}</td>
                                <td>{$user->user_username}</td>
                                <td>{$user->user_email}</td>
                                <td>
                                    <input type="text" name="u_bal" value="{number_format($user->bal_value, 2)}" sytle="max-width:3px;">
                                </td>
                                <td><button name="submit" type="submit" class="btn btn-primary btn-block">Update</button></td>
                                </form>
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