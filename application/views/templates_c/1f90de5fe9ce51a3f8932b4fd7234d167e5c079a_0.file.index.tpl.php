<?php
/* Smarty version 3.1.33, created on 2020-05-08 13:27:55
  from 'C:\wamp64\www\acemart\application\views\templates\admin\public\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb55e5b5a9f20_97930185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f90de5fe9ce51a3f8932b4fd7234d167e5c079a' => 
    array (
      0 => 'C:\\wamp64\\www\\acemart\\application\\views\\templates\\admin\\public\\index.tpl',
      1 => 1575985877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb55e5b5a9f20_97930185 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15724350325eb55e5b572160_65173290', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13923129335eb55e5b59e489_32090799', 'admin_chart');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_15724350325eb55e5b572160_65173290 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_15724350325eb55e5b572160_65173290',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="row 2col">
<div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
<div class="tiles blue added-margin">
<div class="tiles-body">
<div class="controller">
<a href="javascript:;" class="reload"></a>
</div>
<div class="tiles-title"> TOTAL USERS </div>
<div class="heading"> <span class="animate-number" data-value="<?php echo $_smarty_tpl->tpl_vars['tot_u']->value;?>
" data-animation-duration="5000">0</span> </div>
<div class="progress transparent progress-small no-radius">
<div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="<?php echo $_smarty_tpl->tpl_vars['tot_u']->value;?>
%"></div>
</div>
<div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; </span>
</div>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
<div class="tiles green added-margin">
<div class="tiles-body">
<div class="controller">
<a href="javascript:;" class="reload"></a>
<a href="javascript:;" class="remove"></a>
</div>
<div class="tiles-title"> TOTAL ITEMS </div>
<div class="heading"> <span class="animate-number" data-value="<?php echo $_smarty_tpl->tpl_vars['tot_item']->value;?>
" data-animation-duration="5000">0</span> </div>
<div class="progress transparent progress-small no-radius">
<div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="<?php echo $_smarty_tpl->tpl_vars['tot_item']->value;?>
%"></div>
</div>
<div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; </span>
</div>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 spacing-bottom">
<div class="tiles red added-margin">
<div class="tiles-body">
<div class="controller">
<a href="javascript:;" class="reload"></a>
<a href="javascript:;" class="remove"></a>
</div>
<div class="tiles-title"> TOTAL ITEM SOLD </div>
<div class="heading"><span class="animate-number" data-value="<?php echo $_smarty_tpl->tpl_vars['tot_s']->value;?>
" data-animation-duration="5000">0</span> </div>
<div class="progress transparent progress-white progress-small no-radius">
<div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="<?php echo $_smarty_tpl->tpl_vars['tot_s']->value;?>
%"></div>
</div>
<div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; </span>
</div>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="tiles purple added-margin">
<div class="tiles-body">
<div class="controller">
<a href="javascript:;" class="reload"></a>
<a href="javascript:;" class="remove"></a>
</div>
<div class="tiles-title"> uSERS AVL BAL. </div>
<div class="row-fluid">
<div class="heading"> <span class="animate-number" data-value="<?php echo number_format($_smarty_tpl->tpl_vars['earn']->value,2);?>
" data-animation-duration="20000">0</span> </div>
<div class="progress transparent progress-white progress-small no-radius">
<div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="12%"></div>
</div>
</div>
<div class="description"><i class="icon-custom-up"></i><span class="text-white mini-description ">&nbsp; </span>
</div>
</div>
</div>
</div>
</div>
<style>
#graphCanvas {
	width:100%;
	height:auto;
}

#graphTopItemSale {
	width:100%;
	height:auto;
}
</style>
<div class="row">
	<div class="col-md-6">
		<div class="grid simple form-grid">
			<div class="grid-body no-border">
				<div id="chart-container">
					<canvas id="graphCanvas"></canvas>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="grid simple form-grid">
			<div class="grid-body no-border">
				<div id="chart-container">
					<canvas id="graphTopItemSale"></canvas>
				</div>
			</div>
		</div>
	</div>
</div>


<?php echo '<script'; ?>
>

window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "<?php echo date("Y");?>
 Sales"
	},
	axisY: {
		title: "<?php echo date("Y");?>
 Sales)"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## Sales",
		dataPoints: <?php echo json_encode($_smarty_tpl->tpl_vars['dataPoints']->value,JSON_NUMERIC_CHECK);?>

	}]
});
chart.render();
 
}

<?php echo '</script'; ?>
>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<?php echo '<script'; ?>
 src="https://canvasjs.com/assets/script/canvasjs.min.js"><?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'contents'} */
/* {block 'admin_chart'} */
class Block_13923129335eb55e5b59e489_32090799 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin_chart' => 
  array (
    0 => 'Block_13923129335eb55e5b59e489_32090799',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
>

	$(document).ready(function () {
		showGraph();
	});


	function showGraph()
	{
		{
			$.post("<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/chart_data",
			function (data)
			{
				var data = JSON.parse(data);
					var names = [];
				var items = [];

				for (var i in data) {
					names.push(data[i].user_username);
					items.push(data[i]["totupl"]);
				}

				var chartdata = {
					labels: names,
					datasets: [
						{
							label: 'Uploaded Item',
							backgroundColor: '#49e2ff',
							borderColor: '#46d5f1',
							hoverBackgroundColor: '#CCCCCC',
							hoverBorderColor: '#666666',
							data: items
						}
					]
				};

				var graphTarget = $("#graphCanvas");

				var barGraph = new Chart(graphTarget, {
					type: 'bar',
					data: chartdata
				});
			});
		}
	}

	//* top selling items


	$(document).ready(function () {
		topItems();
	});


	function topItems()
	{
		{
			$.post("<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/top_item_sale",
			function (data)
			{
				var data = JSON.parse(data);
					var names = [];
				var items = [];

				for (var i in data) {
					names.push(data[i].item_name.substr(0, 10));
					items.push(data[i]["sales"]);
				}

				var chartdata = {
					labels: names,
					datasets: [
						{
							label: 'Top Item Sold',
							backgroundColor: '#f35958',
							borderColor: '#46d5f1',
							hoverBackgroundColor: '#CCCCCC',
							hoverBorderColor: '#666666',
							data: items
						}
					]
				};

				var graphTarget = $("#graphTopItemSale");

				var barGraph = new Chart(graphTarget, {
					type: 'bar',
					data: chartdata
				});
			});
		}
	}
	
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'admin_chart'} */
}
