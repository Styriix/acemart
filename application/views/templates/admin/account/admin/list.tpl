{extends file="layouts/admin.tpl"}

{block name=contents}
    <a href="{$url.admin}/accounts/admin/create-new"><button type="button" class="btn btn-success">Create New Account</button></a>

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
                <div class="table-responsive">
                    <table class="table table-bordered table-condensed" id="example">
                        <thead>
                            <tr>
                                <th style="width:1%">
                                <div class="checkbox check-default" style="margin-right:auto;margin-left:auto;">
                                <input type="checkbox" value="1" id="checkbox1">
                                <label for="checkbox1"></label>
                                </div>
                                </th>
                                <th>#</th>
                                <th>Profile</th>
                                <th>FirstName</th>
                                <th>LastName</th>
                                <th>UserName</th>
                                <th>Email Address</th>
                                <th>Registered</th>
                                <th>Action</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            {if $admins}
                            {assign var="i" value="1"}
                            {foreach from=$admins item=$admin}
                            <tr>
                                <td class="v-align-middle">
                                <div class="checkbox check-default">
                                <input type="checkbox" value="3" id="checkbox2">
                                <label for="checkbox2"></label>
                                </div>
                                </td>
                                <td>{$i++}</td>
                                <td><img src="{$a_photo}{$admin->admin_profile_pic|default:'default.png'}" width="35px" alt="Profile Pic"></td>
                                <td>{$admin->admin_firstname}</td>
                                <td>{$admin->admin_lastname}</td>
                                <td>{$admin->admin_username}</td>
                                <td>{$admin->admin_email}</td>
                                <td>{Carbon\Carbon::parse($admin->admin_created_at)->diffForHumans(['options' => Carbon\Carbon::ONE_DAY_WORDS])|ucfirst}</td>
                                <td><a href="{$url.admin}/accounts/admin/edit-account/{$admin->admin_username}"><span class="badge badge-primary">Edit</span></a></td>
                                <td>
                                    <form action="{$url.admin}/delete_admin_account/{$admin->admin_id}" onsubmit="return confirm('Are You Sure?');" method="post">
                                        {$csrf_token}
                                        <button type="submit" name="submit" class="btn btn-danger btn-lg">Remove</button>
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