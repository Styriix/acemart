{extends file="layouts/admin.tpl"}

{block name=contents}
{$form_alert}
<div class="grid simple">
    <div class="grid-body">
        <h4 class="text-center card-title">Manage Website Social Links</h4>
        <hr>

        <div class="col-md-4">
            {if not $sl_edit}
            <form method="post" action="{$url.admin}/create_new_social_link" role="form" autocomplete="off" class="validate">
                {$csrf_token}
                <div class="form-group">
                    <label for="social_name">Social Link Name</label>
                    <input id="social_name" class="form-control" type="text" placeholder="e.g Facebook" name="sl_name" required>
                </div>
                <div class="form-group">
                    <label for="icon">Social Link Icon</label>
                    <input id="icon" class="form-control" type="text" placeholder="e.g Facebook" name="sl_icon" required>
                </div>
                <div class="form-group">
                    <label for="url">Social Link Url</label>
                    <input id="url" class="form-control" type="url" placeholder="http://facebook.com/mycompany" name="sl_link" required>
                </div>
                <button type="submit" name="submit" class="btn btn-info btn-block">Create New Link</button>
            </form>
            {else}
            <form method="post" action="{$url.admin}/update_social_link/{$sl_edit->sl_name}" role="form" autocomplete="off" class="validate">
                {$csrf_token}
                <div class="form-group">
                    <label for="social_name">Social Link Name</label>
                    <input id="social_name" class="form-control" type="text" value="{$sl_edit->sl_name}" placeholder="e.g Facebook" name="sl_name" disabled>
                </div>
                <div class="form-group">
                    <label for="icon">Social Link Icon</label>
                    <input id="icon" class="form-control" type="text" value="{$sl_edit->sl_icon}" placeholder="e.g Facebook" name="sl_icon" required>
                </div>
                <div class="form-group">
                    <label for="url">Social Link Url</label>
                    <input id="url" class="form-control" type="url" value="{$sl_edit->sl_link}" placeholder="http://facebook.com/mycompany" name="sl_link" required>
                </div>
                <button type="submit" name="submit" class="btn btn-info btn-block">Update Link</button>
            </form>
            {/if}
        </div>

        <div class="col-md-8">
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
                            <th>SocialName</th>
                            <th>SocialIcon</th>
                            <th>SocialLink</th>
                            <th>Actions</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        {if $sl}
                        {assign var="i" value="1"}
                        {foreach from=$sl item=$link}
                        <tr>
                            <td class="v-align-middle">
                            <div class="checkbox check-default">
                            <input type="checkbox" value="3" id="checkbox{$link->sl_id}">
                            <label for="checkbox{$link->sl_id}"></label>
                            </div>
                            </td>
                            <td>{$i++}</td>
                            <td>{$link->sl_name}</td>
                            <td><i class="fa fa-{$link->sl_icon}" aria-hidden="true"></i></td>
                            <td>{auto_link($link->sl_link)}</td>
                            <td>
                                <form action="{$url.admin}/delete_social_link/{$link->sl_id}" method="post" id="del">
                                    {$csrf_token}
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <a href="{$url.admin}/settings/social-connect/edit/{$link->sl_name}" data-toggle="tooltip" data-placement="top" title="Edit"><span class="text-primary"><i class="fa fa-pencil"></i></span></a>
                                        </div>
                                        <input type="hidden" name="dels" value="{$link->sl_name}">
                                        <div class="col-xs-6">
                                            <a href="javascript:{}" onclick="document.getElementById('del').submit(); return false;" data-toggle="tooltip" data-placement="top" title="Delete"><span class="text-danger"><i class="fa fa-trash"></i></span></a>
                                        </div>
                                    </div>
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


{/block}

{block name=form_css}
<link href="{$asset}/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
<link href="{$asset}/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
<link href="{$asset}/plugins/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="{$asset}/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css" />
<link href="{$asset}/plugins/boostrap-checkbox/css/bootstrap-checkbox.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="{$asset}/plugins/ios-switch/ios7-switch.css" type="text/css" media="screen">
{/block}

{block name=form_js}
<script src="{$asset}/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="{$asset}/plugins/boostrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>

<script src="{$asset}/js/form_validations.js" type="text/javascript"></script>
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