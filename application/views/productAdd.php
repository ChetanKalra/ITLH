<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="../../../public/js/script.js"></script>
    <title>Add Product</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="../../../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../public/css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	  
	 <style>
	 
		 .form-group{
			 
			 padding: 1.5em;
		 }
	  
		 .bdr{
			 
			 border: 1px solid;
			 margin-left: 0.5em;
			 margin-right: 0.5em;
		 }
	 </style> 
  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
					A Big Title <small></small>
				</h1>
			</div>
			<nav class="navbar navbar-default navbar-inverse" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="../../dashboard/admin">Dashboard</a>
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
									<a href="../../pagination_controller_cat/getdetails1/">Mobiles</a>
								</li>
								<li>
									<a href="../../pagination_controller_cat/getdetails2/">Tablets</a>
								</li>
								<li>
                                    <a href="../../pagination_controller_cat/getdetails3/">Laptops</a>
								</li>
                                <li>
                                    <a href="../../pagination_controller_cat/getdetails4/">Motherboards</a>
								</li>
                                <li>
                                    <a href="../../pagination_controller_cat/getdetails5/">Processors</a>
								</li>
							</ul>
						</li>
                        <li class="active">
							<a href="#">Products</a>
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
			<ul class="breadcrumb">
				
				<li>
					<a href="http://localhost/Ecommerce_S/index.php/pagination_controller/getdetails/">Products</a> <span class="divider">/</span>
				</li>
				<li class="active">
					Edit Products
				
				</li>
			</ul>
			
			<div class="row">
				<div class="col-md-12">
				
						
							<form enctype="multipart/form-data" action="../../productdetails/add" method="post">
							<div class="col-md-6">	
								<div class="form-group">
									 <label class="col-md-5 control-label" for="text-field">Product Name</label>
											<div class="col-md-7">
												<input class="form-control" type="text" name="name">
											</div>
									
								</div>
								<div class="form-group">
									 <label class="col-md-5 control-label" for="text-field">Quantity in Stock</label>
											<div class="col-md-7">
												<input class="form-control" placeholder="" type="text" name="quantity">
											</div>

								</div>
								<div class="form-group">
									<label class="col-md-5 control-label" for="text-field">Price per Unit</label>
											<div class="col-md-7">
												<input class="form-control" placeholder="" type="text" name="price">
											</div>
								</div>
								<div class="form-group">
											<label class="col-md-5 control-label" for="select-1">Categories</label>
											<div class="col-md-7">
			
												<select class="form-control" id="select-1" name="category">
													<option value="1">Mobiles</option>
													<option value="2">Tablets</option>
													<option value="3">Laptops</option>
													<option value="4">Motherboards</option>
													<option value="5">Processors</option>
												</select> 
			
											</div>
								</div>
								<div class="form-group">
											<label class="col-md-5 control-label" for="textarea">Description</label>
											<div class="col-md-7">
												<textarea class="form-control" rows="4" name="description"></textarea>
											</div>
								</div>
							</div>
						
								<div class="col-md-6">
									<!--<label class="col-md-3 control-label" for="text-field">Images</label>-->
									<div class="col-md-6">
                            
										<!--<div id="filediv"><input name="file[]" type="file" id="file"/></div><br/>
									
										<input type="button" id="add_more" class="upload" value="Add More Files"/>--></div>
									
							
							<br/>
				<!-------Including PHP Script here------>
                <?php include "upload.php"; ?>
                                
        
								
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
										
						
										<input type="submit" class="btn btn-default" value="Add Product">
										<button type="reset" class="btn btn-default">Clear</button>
								    </div>
									
								</div>
									</div>
								</form>
                          
				</div>
			</div>
		</div>
	</div>
</div>

    <script src="../../../public/js/jquery.min.js"></script>
    <script src="../../../public/js/bootstrap.min.js"></script>
    <script src="../../../public/js/scripts.js"></script>
  </body>
</html>