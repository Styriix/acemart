{extends file="layouts/admin.tpl"}

{block name=contents}

<div class="row 2col">
<div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
<div class="tiles blue added-margin">
<div class="tiles-body">
<div class="controller">
<a href="javascript:;" class="reload"></a>
</div>
<div class="tiles-title"> TOTAL USERS </div>
<div class="heading"> <span class="animate-number" data-value="{$tot_u}" data-animation-duration="5000">0</span> </div>
<div class="progress transparent progress-small no-radius">
<div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="{$tot_u}%"></div>
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
<div class="heading"> <span class="animate-number" data-value="{$tot_item}" data-animation-duration="5000">0</span> </div>
<div class="progress transparent progress-small no-radius">
<div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="{$tot_item}%"></div>
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
<div class="heading"><span class="animate-number" data-value="{$tot_s}" data-animation-duration="5000">0</span> </div>
<div class="progress transparent progress-white progress-small no-radius">
<div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="{$tot_s}%"></div>
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
<div class="heading"> <span class="animate-number" data-value="{number_format($earn, 2)}" data-animation-duration="20000">0</span> </div>
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


<script>
{literal}
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "{/literal}{date("Y")}{literal} Sales"
	},
	axisY: {
		title: "{/literal}{date("Y")}{literal} Sales)"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## Sales",
		dataPoints: {/literal}{json_encode($dataPoints, JSON_NUMERIC_CHECK)}{literal}
	}]
});
chart.render();
 
}
{/literal}
</script>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


{/block}

{block name=admin_chart}
	<script>
{literal}
	$(document).ready(function () {
		showGraph();
	});


	function showGraph()
	{
		{
			$.post("{/literal}{$url.admin}/chart_data{literal}",
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
			$.post("{/literal}{$url.admin}/top_item_sale{literal}",
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
	{/literal}
	</script>
{/block}