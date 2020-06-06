{extends file="layouts/statement.tpl"}

{block name=contents}

<section class="dashboard-area">
    

    <div class="dashboard_contents dashboard_statement_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard_title_area">
                        <div class="dashboard__title">
                            <h3>Sales Statements</h3>
                            <div class="date_area">
                                <form action="" method="get" autocomplete="off">
                                    <div class="input_with_icon">
                                        <input type="text" class="dattaPikkara" name="from" placeholder="From">
                                        <span class="lnr lnr-calendar-full"></span>
                                    </div>

                                    <div class="input_with_icon">
                                        <input type="text" class="dattaPikkara" name="to" placeholder="To">
                                        <span class="lnr lnr-calendar-full"></span>
                                    </div>

                                    <button type="submit" class="btn btn--sm btn--round btn--color1">Find</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="statement_table table-responsive">
                        <table class="table">
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

                        <div class="pagination-area pagination-area2">
                            <h2>Total sales: <strong><font color="red">{$app.currency} {number_format($my_sales, 2)}</font></strong></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.dashboard_menu_area -->
</section>
    
{/block}