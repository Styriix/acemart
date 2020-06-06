{extends file="layouts/admin.tpl"}

{block name=contents}
    
<div class="grid simple">
    <div class="card-body">
        <form action="" method="post"></form>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <h4 class="card-title text-center">Google Meta Tags Verification Code</h4>
                    <div class="card-body">
                        <div class="form-group">
                          <input type="text" name="google_meta_tags" value="{$app.gmt}" class="form-control" placeholder="Place only the verification code e.g (goog-verification-xxxxxxx)">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <h4 class="card-title text-center">Google Analytics Verification Code</h4>
                    <div class="card-body">
                        <div class="form-group">
                          <input type="text" name="google_analystics" value="" class="form-control" placeholder="Place only the verification code e.g (UA-XXXXX-Y)">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                          <button type="submit" class="btn btn-outline-info btn-block btn-rounded waves-effects waves-effect-light">Update Google Tags</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </form>
    </div>
</div>

{/block}