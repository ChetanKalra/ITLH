<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Product Listing</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="../../../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../public/css/style.css" rel="stylesheet">
      
      
    <style>
      
          .border1{
              
              border:1px solid;
              padding: 20px;
              margin-left: 2px;
              margin-right: 2px;
          }
        
          .border{
              
              border:1px solid;
              padding: 0px;
              margin-left: 1px;
              margin-right: 1px;
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
        
        .right{
            text-align: right;
        }
        
        #abc, #editproduct, #reassignproduct, #deleteproduct {
            display: none;
        }
        
        a:hover{
            cursor:pointer;
        }
        <!--    -->
        
#abc, #editproduct, #reassignproduct, #deleteproduct {
    width:100%;
    height:115%;
    position: absolute;
    z-index: 1;
    background-color: #313131;
    opacity: 0.95;
    }  

#popupContact {
    font-family:'Raleway',sans-serif;
    top:27%;
    left: 38%;
    position: fixed;
}

form {
    max-width:325px;
    min-width:250px;
    padding:10px 50px;
    border:2px solid gray;
    border-radius:10px;
    font-family:raleway;
    background-color:#fff;
    padding-top: 20px;
    padding-bottom: 20px;
}

#des {
text-align:left;
border-radius:10px 10px 0 0
}
 


       
<!--    -->
        
        
        
      </style>  

  </head>
  <body>
      
    <div id="abc">
    <!-- Popup Div Starts Here -->
        <center><div id="popupContact">
            <!-- Contact Us Form -->
            <form action="../../productdetails/ReassignAllProducts/<?php echo $Category?>" id="form" method="post" name="form">
                
                <table>
                    <tr>
                        <td colspan="2"><h4 id="des">Please select a category below to reassign all the products.</h4></td>
                    </tr>
                    <tr>
                        <td><h4>Reassign To&emsp;</h4></td>
                        <td><select name="catID">
                                <option value="1">Mobiles</option>
                                <option value="2">Tablets</option>
                                <option value="3">Laptops</option>
                                <option value="4">Motherboards</option>
                                <option value="5">Processors</option>
                            </select></td>
                    </tr>
                    
                    <tr>
                        <!--<td><a href="../../ReassignAllProducts" id="submit">REASSIGN</a></td>-->
                        <td><input type="submit" value="SUBMIT" class="btn btn-default"/></td>
                        <td><a href="#" id="submit" onclick="div_hide()"><br>CANCEL</a></td>
                    
                    </tr>
                </table>
                
            </form>
        </div></center>
    <!-- Popup Div Ends Here -->
</div>  
      
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
							 <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Categories<strong class="caret"></strong></a>
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
                        <li>
							<a href="../../pagination_controller/getdetails/">Products</a>
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
		</div>
	</div>       
        
	<div class="row">
		<div class="col-md-12">
			<div class="row border">
				<div class="col-md-6">
					<h3>
                        Categories <?php if($Category==1) echo "Mobiles";
                        else if($Category==2) echo "Tablets";
                        else if($Category==3) echo "Laptops";
                        else if($Category==4) echo "Motherboards";
                        else if($Category==5) echo "Processors";
                        ?> Product Listings
					</h3>
				</div>
				<div class="col-md-6 right">
					<div class="row">
						<div class="col-md-12">
							 
							<a><button type="button" class="btn btn-default" onclick="div_show()">
								Reassign All Products
							</button></a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<ul class="pagination">
								<!--<li>
									<a href="#">Prev</a>
								</li>
								<li>
									<a href="../../productdetails/getalldetails/1">1</a>
								</li>
                                <li>
									<a href="../../productdetails/getalldetails/2">2</a>
								</li>
                                <li>
									<a href="../../productdetails/getalldetails/3">3</a>
								</li>
                                <li>
									<a href="../../productdetails/getalldetails/4">4</a>
								</li>
                                <li>
									<a href="../../productdetails/getalldetails/5">5</a>
								</li>
                                <li>
									<a href="../../productdetails/getalldetails/6">6</a>
								</li>
								
								<li>
									<a href="#">Next</a>
								</li>-->
                                <h5><?php echo $links; ?></h5>
							</ul>
						</div>
					</div>
				</div>
			</div>
            <br>
            
			<table class="table table-hover table-bordered css-serial">
				<thead>
					<tr>
						<th>
							ID
						</th>
						<th>
							Product Name
						</th>
						<th>
							Price
						</th>
						<th>
							Quantity
						</th>
                        <th>
							Actions
						</th>
					</tr>
				</thead>
				<tbody>
                    
                    <?php
                    
                        $k=1;
					
						if($results=="")
						{
							echo "<tr><td colspan='5'>NO PRODUCTS</td></tr>";
						}
					
						else{
                        foreach($results as $data) {
                             
                            if($data->category_id==1) $cat= "Mobiles";
                                if($data->category_id==2) $cat= "Tablets";
                                    if($data->category_id==3) $cat= "Laptops";
                                        if($data->category_id==4) $cat= "Motherboards";
                                            if($data->category_id==5) $cat= "Processors";
                            
                            echo "<tr>
                                    <td>".$data->id."</td>
                                    <td>".$data->name."</td>
                                    <td>".$data->price."</td>
                                    <td>".$data->quantity."</td>
                                    <td>
                                    <div class='col-md-4'><a href='../../productdetails/Editpage/$data->id'>Edit</a></div>
                                        
                                    <div class='col-md-4'><a href='../../productdetails/deleteproduct/".$data->id."' onclick='return deleteproduct()'>Delete</a></div>
                                    </td>
                                    </tr>";
                                $k=$k+1;
                                
                                
                       // echo $data->name . " - " . $data->id . "<br>";
                        				}
							}
                    ?>
                    
                    
                    
				</tbody>
			</table>
		</div>
	</div>
        
    
        
    <!--    -->    
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
        
        
    <!--     -->    
</div>
    
   <!-- <style>
    
        .css-serial {
  counter-reset: serial-number;  /* Set the serial number counter to 0 */
}

.css-serial td:first-child:before {
  counter-increment: serial-number;  /* Increment the serial number counter */
  content: counter(serial-number);  /* Display the counter */
}
      
    </style>-->
      
    <script>
    
        // Validating Empty Field

//Function To Display Popup
        function div_show() {
                document.getElementById('abc').style.display = "block";
            }
        function div_hide()
            {
                document.getElementById('abc').style.display = "none";
            }
        
        function deleteproduct()
            {
                var a= confirm("Are you sure you want to delete?");
                
                if(a==true)
                    {
                        return true;
                    }
                else
                    {
                        return false;
                    }
                
                //document.getElementById('deleteproduct').style.display = "block";
            }
        function div_hide_delete()
            {
                document.getElementById('deleteproduct').style.display = "none";
            }
    </script>  
      
    <script src="../../../public/js/jquery.min.js"></script>
    <script src="../../../public/js/bootstrap.min.js"></script>
    <script src="../../../public/js/scripts.js"></script>
  </body>
</html>