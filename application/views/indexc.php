<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Product Details</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="../../../public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
   
      
    <link href="../../../public/css/style.css" rel="stylesheet" type="text/css"> 
      
      <style>
      
          .border1{
              
              border:1px solid;
              padding: 20px;
              margin-left: 2px;
              margin-right: 2px;
          }
          
          a{
              color:black;
              
          }
          
          a:hover{
              
              color:black;
              text-decoration: none;
          }
          
          .btn{
              margin-top: 20px;
              padding: 10px;
          }
          
          .rightalign{
              
              border: 1px solid;
              padding-bottom: 16px;
              
          }
          
          #Description{
              padding-top: 20px;
              font-size: 20px;
              
          }
          
          img{
              
              border:1px solid;
          }
		  
		  .field{
			  
			 width:35px;
			  
		  }
      </style>
	  
	  <script type="text/javascript">
		function incrementButtons( upBtn, downBtn, qtyField )
		{
		var step = parseFloat( qtyField.value ) || 1,
		currentValue = step;

		downBtn.onclick = function()
		{
		currentValue = parseFloat( qtyField.value );
		qtyField.value = ( currentValue -= Math.min( step, currentValue - step ) );
		}

		upBtn.onclick = function()
		{
			if(currentValue<=<?php print_r($res[0]->quantity)?>)
			{
				currentValue = parseFloat( qtyField.value ) || step;
				qtyField.value = ( currentValue += step );
			}
			   
		}
		}
	  </script>

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1>
				A Big Title
			</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default navbar-inverse navbar-static-top" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#">Home</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="#">Mobiles</a>
						</li>
						<li>
							<a href="#">Tablets</a>
						</li>
                        <li>
							<a href="#">Laptops</a>
						</li>
                        
                        <li>
							<a href="#">Motherboards</a>
						</li>
                        
                        <li>
							<a href="#">Processors</a>
						</li>
                        
                        <li>
							<a href="#">Offers</a>
						</li>
                        
                        <li>
							<a href="#">Sale</a>
						</li>
						
					</ul>
				<!--	<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control">
						</div> 
						<button type="submit" class="btn btn-default">
							Submit
						</button>
					</form> -->
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Sign Up</a>
						</li>
                        
                        <li>
							<a href="#">Login</a>
						</li>
						
					</ul>
				</div>
				
			</nav>
		</div>
	</div>
	<div class="row border1">
		<div class="col-md-12">
			<div class="row border1">
                
                <div class="row">
                
                <h3 style="padding-left:30px;"><?php print_r($res[0]->name); ?></h3>
                    
                </div>
                
				<div class="col-md-5">
					<img alt="Heroimage" src="<?php print_r($res1[4]->img_path) ?>" width="450" height="250">
				</div>
				<div class="col-md-7">
					<div class="row">
						<div class="col-md-6 rightalign">
							<div class="row">
								<div class="col-md-12">
                                    <div class="col-md-8">
									<h3>
										Order Now
									</h3>
                                </div>
									
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
                                    <div class="col-md-6">
									<h3>
										Quantity: 
									</h3>
                                    </div>
									<div class="col-md-6">
										<h3><form id="f1" class=".qtyform">
											<div class="col-md-4">
												<input type='text' name='qty' id='qty' value='1' class="field" />
											</div>
											<div class="col-md-4">
												<input type='button' name='add' value='+'/>
											</div>
											<div class="col-md-4">
												<input type='button' name='subtract' value='-'/>
											</div>
											</form></h3>
											 <script type="text/javascript">
												with( document.getElementById( 'f1' ) )
												incrementButtons( add, subtract, qty );
	  										</script>
										
											
									</div>
                                    
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									  <div class="col-md-6">
									<h3>
										Availability: 
									</h3>
                                    </div>
                                    <div class="col-md-6">
                                    <h3 style="color:green;"><?php if(($res[0]->quantity)>3){
                                            echo 'In Stock';} 
                                        ?></h3>
                                     <h3 style="color:red;"><?php if(($res[0]->quantity)<=3)   
                                            {
                                            echo 'Out of Stock';
                                        } ?>
                                        </h3>
                                    </div>
								
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									  <div class="col-md-6">
									<h3>
										Price:
									</h3>
                                    </div>
                                    <div class="col-md-6">
                                    <h3><?php print_r($res[0]->price) ?></h3>
                                    </div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<h3>
										Payment Option
									</h3>
									
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<input type="checkbox" name="COD" checked/> &nbsp;Cash On Delivery
								
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									 
									<button type="button" class="btn btn-default">
										Checkout
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row border1">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-3">
							<a href=""><img alt="Bootstrap Image Preview" src="<?php print_r($res1[0]->img_path) ?>" height="250" width="250"></a>
						</div>
						<div class="col-md-3">
                            <a href=""><img alt="Bootstrap Image Preview" src="<?php print_r($res1[1]->img_path) ?>"  height="250" width="250"></a>
						</div>
						<div class="col-md-3">
                            <a href=""><img alt="Bootstrap Image Preview" src="<?php print_r($res1[2]->img_path) ?>"  height="250" width="250"></a>
						</div>
						<div class="col-md-3">
                            <a href=""><img alt="Bootstrap Image Preview" src="<?php print_r($res1[3]->img_path) ?>"  height="250" width="250"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row border1">
				<!-- <div class="col-md-12">
					<dl>
						<dt>
							Description lists
						</dt>
						<dd>
							A description list is perfect for defining terms.
						</dd>
						<dt>
							Euismod
						</dt>
						<dd>
							Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
						</dd>
						<dd>
							Donec id elit non mi porta gravida at eget metus.
						</dd>
						<dt>
							Malesuada porta
						</dt>
						<dd>
							Etiam porta sem malesuada magna mollis euismod.
						</dd>
						<dt>
							Felis euismod semper eget lacinia
						</dt>
						<dd>
							Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
						</dd>
					</dl>
					
				</div> -->
                <div class="tabbable" id="tabs-809802">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#panel-110645" data-toggle="tab">Description</a>
							</li>
							<!--<li>
								<a href="#panel-251414" data-toggle="tab">Section 2</a>
							</li> -->
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="panel-110645">
								<p id="Description">
                                    <?php print_r($res[0]->description); ?>
                                <p>
							</div>
							<!--<div class="tab-pane" id="panel-251414">
								<p>
									Howdy, I'm in Section 2.
								</p>
							</div> -->
						</div>
					</div>
			</div>
		</div>
	</div>
	<div class="row border1">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3">
					<center><h4>Get to Know Us</h4>
					<a href="#">About Us</a><br>
					<a href="#">Careers</a><br>
					<a href="#">Press Releases</a><br>
                    <a href="#">Get a smile</a></center>
					
				</div>
				<div class="col-md-3">
                    <center><h4>Connect With Us</h4>
					<a href="#">Facebook</a><br>
					<a href="#">Twitter</a><br>
					<a href="#">Instagram</a></center>
				
				</div>
                
                <div class="col-md-3">
                    <center><h4>Let Us Help You</h4>
					<a href="#">Your Account</a><br>
					<a href="#">Returns Centre</a><br>
					<a href="#">100% Purchase Protection</a><br>
					<a href="#">Help</a><br>
					<a href="#">Assistant</a></center>
				
				</div>
				
                
				<div class="col-md-3">
					 
					<address>
						 <center><strong>Twitter, Inc.</strong><br> 795 Folsom Ave, Suite 600<br> San Francisco, CA 94107<br> <abbr title="Phone">P:</abbr> (123) 456-7890</center>
					</address>
				
				</div>
			</div>
		</div>
	</div>
</div>

    <SCRIPT src="../../../public/js/jquery-3.0.0.js"></SCRIPT>
	  
	 
	  
	 
    

      
    <script src="../../../public/js/jquery.min.js"></script>
    <script src="../../../public/js/bootstrap.min.js"></script>
    <script src="../../../public/js/scripts.js"></script>
  </body>
</html>