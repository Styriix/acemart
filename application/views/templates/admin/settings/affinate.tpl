{extends file="layouts/admin.tpl"}

{block name=contents}
{$form_alert}
<div class="grid simple">
    <div class="grid-body">
        <h4 class="text-center card-title">Affinate Program</h4>
        <hr>
        <form action="{$url.admin}/set_affinate_program" method="post">
        {$csrf_token}
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="set_affinvate">Activate Affinate Program</label>
                    <select id="set_affinvate" class="form-control" name="aff_set" required>
                        <option value="1" {if $app.is_affi eq 1}selected{/if}>On</option>
                        <option value="0" {if $app.is_affi eq 0}selected{/if}>Off</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="set_affinate_earn">Affinate Percent %</label>
                    <input id="set_affinate_earn" class="form-control" type="number" value="{$app.affi_rate}" name="aff_earn" required>
                </div>
            </div>

            <div class="col-md-12">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Update Affinate Program</button>
            </div>
        </div>
        </form>
    </div>
</div>


{/block}