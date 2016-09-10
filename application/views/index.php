	<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8">
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
	
	<!--<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\ecommerce\public\css\bootstrap.min.css">-->
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
	
	<script src="../../public/js/jquery.min.js"></script>
    <script src="../../public/js/bootstrap.min.js"></script>
    <script src="../../public/js/scripts.js"></script>
	
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

th{
	position: relative;
}
li {
    display: inline;
}
body {margin: 50px;}

ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:  lightgrey;
}

ul.topnav li {float: left;}

ul.topnav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #95a5a6;}

ul.topnav li a.active {background-color: #FF5733;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px){
    ul.topnav li.right,
    ul.topnav li {float: none;}
}
table {
    border-collapse: collapse;
    width: 100%;
}
.graph{
	height: 20em;
	border-style: solid;
	border-width: 1px;

}

td {
    text-align: center;
    font-family: 'Fira Sans', sans-serif;
    padding: 8px;
}
th{
	text-align: center;
}

tr:nth-child(even){background-color: #f2f2f2}
.space{
	padding-bottom: 1em;
}

		</style>
</head>
<body>

	<div class="container-fluid">
	<div class="row space">
		<div class="col-md-12">
		<h1>A Big Title</h1>
		</div>
	</div>
	<div class="row space">
		<div class="col-md-12">
			<nav class="navbar navbar-default navbar-inverse" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#">Dashboard</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="#">Orders</a>
						</li>
						
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="../pagination_controller_cat/getdetails1/">Mobiles</a>
								</li>
								<li>
									<a href="../pagination_controller_cat/getdetails2/">Tablets</a>
								</li>
								<li>
                                    <a href="../pagination_controller_cat/getdetails3/">Laptops</a>
								</li>
                                <li>
                                    <a href="../pagination_controller_cat/getdetails4/">Motherboards</a>
								</li>
                                <li>
                                    <a href="../pagination_controller_cat/getdetails5/">Processors</a>
								</li>
							</ul>
						</li>
                        <li>
							<a href="../pagination_controller/getdetails/">Products</a>
						</li>
                        
                        <li>
							<a href="#">Banners</a>
						</li>
                        
                        <li>
							<a href="#">Static Pages</a>
						</li>
                        
					</ul>
					<!--<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control">
						</div> 
						<button type="submit" class="btn btn-default">
							Submit
						</button>
					</form>-->
					<ul class="nav navbar-nav navbar-right">
						
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Switch Account</a>
								</li>
								<li>
									<a href="#">Add Account</a>
								</li>
                                
								<li class="divider">
								</li>
								<li>
									<a href="#">Logout</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				
			</nav>
			<div class="row space">

				
			<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        title: {
            text: 'Sales and Profit',
            x: -20 //center
        },
        
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Earning'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '₹'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Mobile',
            data: [4.9, 3.2, 4.7, 3.5, 4.9, 3.2, 4.0, 3.6, 4.2, 3.3, 4.6, 3.8]
        }, {
            name: 'Tablet',
            data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
        }, {
            name: 'Laptop',
            data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 20.0, 23.9, 25.0]
        }, {
            name: 'Computer Hardware ',
            data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 20.2, 25.3, 26.6, 30.8]
        }]
    });
});
		</script>
	</head>
	<body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 280px; height: 400px; margin: 0 auto"></div>


	</body>

</html>
				
				
			</div>
			<div class="row space" >

			<div class="col-md-4">


<table class="table table-striped table-bordered">
    <tr ><th colspan="3">Most Sold Products</th></tr>
     <tr>	
		<td>Name</td>		
		<td>Sold</td>		
    </tr>
    

	<?php foreach($mostsold as $ms): ?>  
	<tr> 

			<td><?php echo $ms['p_name']; ?></td>
			<td><?php echo $ms['msold']?></td>
		<?php endforeach; ?>
	
	</tr>

			
</table>
</div>

<div class="col-md-4">
<table class="table table-striped table-bordered">
    <tr ><th colspan="3">Most Profitable Products</th></tr>
    <tr>
		<td >Name</td>
		<td>Earned</td>
	</tr>
	<tr>
	<?php foreach($mostprofitable as $mp): ?>    		
		<td><?php echo $mp['p_name']; ?></td>
		<td><?php echo $mp['mprofit']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>	
</div>


<div class="col-md-4">
<table class="table table-striped table-bordered">
    <tr ><th colspan="3">Most Important Clients</th></tr>
    <tr>
		<td >Name</td>
		<td>Sum of Orders</td>
	</tr>
	<?php foreach($users as $u): ?>
    <tr>
		<td><?php echo $u['c_name']; ?></td>
		<td><?php echo $u['mbuy']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>	

</div>
		
</div>
				</div>
			</div>		
		</div>
	</div>
</div>

</body>
</html>