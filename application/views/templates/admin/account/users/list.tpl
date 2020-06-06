{extends file="layouts/admin.tpl"}

{block name=contents}
    <a href="{$url.admin}/accounts/users/create-new"><button type="button" class="btn btn-success">Create New Account</button></a>

{$form_alert}
<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-title">
                <h4>Admin <span class="semi-bold">Accounts</span></h4>
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
                                <th>Status</th>
                                <th>Action</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            {if $users}
                            {assign var="i" value="1"}
                            {foreach from=$users item=$user}
                            <tr>
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
                                    {if $user->user_status eq 1}
                                        <span class="badge badge-success">Active</span>
                                    {elseif $user->user_status eq 2}
                                        <span class="badge badge-danger">Blocked</span>
                                    {else}
                                        <span class="badge badge-warning">Un Verify</span>
                                    {/if}
                                </td>
                                <td><a href="{$url.admin}/accounts/users/edit-account/{$user->user_username}"><span class="badge badge-primary">Edit</span></a></td>
                                <td>
                                    <form action="{$url.admin}/delete_user_account/{$user->user_id}" onsubmit="return confirm('Are You Sure?');" method="post">
                                        {$csrf_token}
                                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Remove</button>
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