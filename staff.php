<?php include 'include_files/session.php'; ?>
<?php include "include_files/dbcon.php"; ?>
<?php include 'admin_data/returns.php'; ?>
<?php include 'admin_data/payments.php'; ?>
<?php include 'admin_data/orders.php'; ?>
<?php include 'misc.php'; ?>
<html>
<head>
	<title>Admin Panel</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
<h4><a href="include_files/logout.php" class="btn btn-info" style="float:right;margin-right:30px;font-size:20px;color:black;">Logout</a></h4><br>
<br><center><h1>ADMIN PANEL</h1></center>

<!-- FOR order,payment and return -->
<section class="my-5">
		<div class="container-fluid">
		<div class="row">

			<!-- <div class="col-lg-4 col-md-4 col-12" style="border: thick ridge red;"> -->
			<div class="col-lg-4 col-md-4 col-12">
				<div class="py-5">
					<h2 class="text-center">ORDER</h2>
				</div>
				<form action="admin_data/orders.php" method="post" enctype="multipart/form-data">
				  <!-- <label for="myfile">Select a Client(DATABASE)</label><br>
				  	<div class="dropdown show">
					  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Choose A Database
					  </a>

					  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					    <a class="dropdown-item" href="#">Ananda</a>
					    <a class="dropdown-item" href="#">ETC</a>
					    <a class="dropdown-item" href="#">ETC</a>
					 	</div>
					</div><br> -->
				  <label for="myfile">Select a file:</label>
				  <input type="file" id="file1" name="file1" required><br><br>
				  <input type="submit" name="submit"><br><br><br><br>
				  <a class="btn btn-info" href="#">Remove Duplicates</a>
				  <br><br>
				  <!-- <a type="button" class="btn btn-info" href="show_order_data.php" target="_blank">SHOW ORDER DATA</a><br><br><br><br> -->
				    <div class="col-lg-12 col-md-6">
				        <div class="panel panel-info">
				            <div class="panel-heading">
				                <div class="row">
				                    <div class="col-xs-3">
				           
				                    </div>
				                    <div class="col-xs-12 text-right">


				                        <div>TOTAL ROWS IN ORDER TABLE<br>
				                            <p style="font-size: 40px; font-weight: 700"><?php echo getNumOrders(); ?></p>
				                        </div>
				                    </div>
				                </div>
				            </div>
				            <a href="admin_data/Show_admin/show_order_data.php" target="_blank">
				                <div class="panel-footer">
				                    <span class="pull-left">SHOW ORDER DATA</span>
				                    <div class="clearfix"></div>
				                </div>
				            </a>
				        </div>
				    </div>
				</form>
			</div>

			<!-- <div class="col-lg-4 col-md-4 col-12" style="border: thick ridge red;"> -->
			<div class="col-lg-4 col-md-4 col-12">
				<div class="py-5">
					<h2 class="text-center">PAYMENT</h2>
				</div>
				<form action="admin_data/payments.php" method="post" enctype="multipart/form-data">
				  <!-- <label for="myfile">Select a Client(DATABASE)</label><br>
				  	<div class="dropdown show">
					  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Choose A Database
					  </a>

					  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					    <a class="dropdown-item" href="#">Ananda</a>
					    <a class="dropdown-item" href="#">ETC</a>
					    <a class="dropdown-item" href="#">ETC</a>
					 	</div>
					</div><br> -->
				  <label for="file2">Select a file:</label>
				  <input type="file" id="myfile2" name="file2" required><br><br>
				  <input type="submit" name="submit"><br><br><br><br>
				  <a class="btn btn-info" href="#">Remove Duplicates</a>
				  <br><br>
				  <!-- <a type="button" class="btn btn-info" href="show_payment_data.php" target="_blank">SHOW PAYMENT DATA</a><br><br><br><br> -->
					<div class="col-lg-12 col-md-6">
				        <div class="panel panel-info">
				            <div class="panel-heading">
				                <div class="row">
				                    <div class="col-xs-3">
				                    </div>
				                    <div class="col-xs-12 text-right">

				                      <div>TOTAL ROWS IN PAYMENT TABLE<br>
				                        <p style="font-size: 40px; font-weight: 700"><?php echo getNumPayments(); ?></p></div>
				                    </div>
				                </div>
				            </div>
				             <a href="admin_data/Show_admin/show_payment_data.php" target="_blank">
				                <div class="panel-footer">
				                    <span class="pull-left">SHOW PAYMENT DATA</span>
				                    <div class="clearfix"></div>
				                </div>
				            </a>
				        </div>
				    </div>
				</form>
			</div>

		<!-- <div class="col-lg-4 col-md-4 col-12" style="border: thick ridge red;"> -->
			<div class="col-lg-4 col-md-4 col-12">
				<div class="py-5">
					<h2 class="text-center">RETURN</h2>
				</div>
				<form action="admin_data/returns.php" method="post" enctype="multipart/form-data">
				  <!-- <label for="file">Select a Client(DATABASE)</label><br>
				  	<div class="dropdown show">
					  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Choose A Database
					  </a>

					  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					    <a class="dropdown-item" href="#">Ananda</a>
					    <a class="dropdown-item" href="#">ETC</a>
					    <a class="dropdown-item" href="#">ETC</a>
					 	</div>
					</div><br> -->
				  <label for="file3">Select a file:</label>
				  <input type="file"  name="file3" required><br><br>
				  <input type="submit" name="submit"><br><br><br><br>
				  <a class="btn btn-info" href="#">Remove Duplicates</a>
				  <br><br>
				  <!-- <a type="button" class="btn btn-info" href="show_return_data.php" target="_blank">SHOW RETURN DATA</a><br><br><br><br> -->
					<div class="col-lg-12 col-md-6">
				        <div class="panel panel-info">
				            <div class="panel-heading">
				                <div class="row">
				                    <div class="col-xs-3">
				                    </div>
				                    <div class="col-xs-12 text-right">

				                        <div>TOTAL ROWS IN RETURN TABLE<br>
				                        <p style="font-size: 40px; font-weight: 700"><?php echo getNumReturns(); ?></p></div>
				                    </div>
				                </div>
				            </div>
				            <a href="admin_data/Show_admin/show_return_data.php" target="_blank">
				                <div class="panel-footer">
				                    <span class="pull-left">SHOW RETURN DATA</span>
				                    <div class="clearfix"></div>
				                </div>
				            </a>
				        </div>
				    </div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- // FOR order,payment and return -->


<hr style="height:5px;background-color: gray;">


<!-- FOR  adinath_sku,adinath_ticket and adinath_return -->
<section class="my-5">
		<div class="container-fluid">
		<div class="row">

			<!-- <div class="col-lg-4 col-md-4 col-12" style="border: thick ridge red;"> -->
			<div class="col-lg-4 col-md-4 col-12">
				<div class="py-5">
					<h2 class="text-center">CLIENT_SKU</h2>
				</div>
				<form action="client_data/client_sku.php" method="post" enctype="multipart/form-data">
				  <!-- <label for="myfile">Select a Client(DATABASE)</label><br>
				  	<div class="dropdown show">
					  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Choose A Database
					  </a>

					  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					    <a class="dropdown-item" href="#">Ananda</a>
					    <a class="dropdown-item" href="#">ETC</a>
					    <a class="dropdown-item" href="#">ETC</a>
					 	</div>
					</div><br> -->
				  <label for="myfile">Select a file:</label>
				  <input type="file" id="file4" name="file4" required><br><br>
				  <input type="submit" name="submit"><br><br><br><br>
				  <a class="btn btn-info" href="#">Remove Duplicates</a>
				  <br><br>
				  <!-- <a type="button" class="btn btn-info" href="show_order_data.php" target="_blank">SHOW ORDER DATA</a><br><br><br><br> -->
				    <div class="col-lg-12 col-md-6">
				        <div class="panel panel-info">
				            <div class="panel-heading">
				                <div class="row">
				                    <div class="col-xs-3">
				           
				                    </div>
				                    <div class="col-xs-12 text-right">


				                        <div>TOTAL ROWS IN CLIENT_SKU TABLE<br>
				                            <p style="font-size: 40px; font-weight: 700"><?php echo getNumClientsku(); ?></p>
				                        </div>
				                    </div>
				                </div>
				            </div>
				            <a href="client_data/Show_Client/show_client_sku_data.php" target="_blank">
				                <div class="panel-footer">
				                    <span class="pull-left">SHOW CLIENT_SKU DATA</span>
				                    <div class="clearfix"></div>
				                </div>
				            </a>
				        </div>
				    </div>
				</form>
			</div>

			<!-- <div class="col-lg-4 col-md-4 col-12" style="border: thick ridge red;"> -->
			<div class="col-lg-4 col-md-4 col-12">
				<div class="py-5">
					<h2 class="text-center">CLIENT_TICKET</h2>
				</div>
				<form action="client_data/client_ticket.php" method="post" enctype="multipart/form-data">
				  <!-- <label for="myfile">Select a Client(DATABASE)</label><br>
				  	<div class="dropdown show">
					  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Choose A Database
					  </a>

					  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					    <a class="dropdown-item" href="#">Ananda</a>
					    <a class="dropdown-item" href="#">ETC</a>
					    <a class="dropdown-item" href="#">ETC</a>
					 	</div>
					</div><br> -->
				  <label for="file5">Select a file:</label>
				  <input type="file" id="myfile5" name="file5" required><br><br>
				  <input type="submit" name="submit"><br><br><br><br>
				  <a class="btn btn-info" href="#">Remove Duplicates</a>
				  <br><br>
				  <!-- <a type="button" class="btn btn-info" href="show_payment_data.php" target="_blank">SHOW PAYMENT DATA</a><br><br><br><br> -->
					<div class="col-lg-12 col-md-6">
				        <div class="panel panel-info">
				            <div class="panel-heading">
				                <div class="row">
				                    <div class="col-xs-3">
				                    </div>
				                    <div class="col-xs-12 text-right">

				                      <div>TOTAL ROWS IN CLIENT_TICKET TABLE<br>
				                        <p style="font-size: 40px; font-weight: 700"><?php echo getNumClientticket(); ?></p></div>
				                    </div>
				                </div>
				            </div>
				             <a href="client_data/Show_Client/show_client_ticket_data.php" target="_blank">
				                <div class="panel-footer">
				                    <span class="pull-left">SHOW CLIENT_TICKET DATA</span>
				                    <div class="clearfix"></div>
				                </div>
				            </a>
				        </div>
				    </div>
				</form>
			</div>

		<!-- <div class="col-lg-4 col-md-4 col-12" style="border: thick ridge red;"> -->
			<div class="col-lg-4 col-md-4 col-12">
				<div class="py-5">
					<h2 class="text-center">CLIENT_RETURN</h2>
				</div>
				<form action="client_data\client_return.php" method="post" enctype="multipart/form-data">
				  <!-- <label for="file">Select a Client(DATABASE)</label><br>
				  	<div class="dropdown show">
					  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Choose A Database
					  </a>

					  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					    <a class="dropdown-item" href="#">Ananda</a>
					    <a class="dropdown-item" href="#">ETC</a>
					    <a class="dropdown-item" href="#">ETC</a>
					 	</div>
					</div><br> -->
				  <label for="file6">Select a file:</label>
				  <input type="file"  name="file6" required><br><br>
				  <input type="submit" name="submit"><br><br><br><br>
				  <a class="btn btn-info" href="#">Remove Duplicates</a>
				  <br><br>
				  <!-- <a type="button" class="btn btn-info" href="show_return_data.php" target="_blank">SHOW RETURN DATA</a><br><br><br><br> -->
					<div class="col-lg-12 col-md-6">
				        <div class="panel panel-info">
				            <div class="panel-heading">
				                <div class="row">
				                    <div class="col-xs-3">
				                    </div>
				                    <div class="col-xs-12 text-right">

				                        <div>TOTAL ROWS IN CLENT_RETURN TABLE<br>
				                        <p style="font-size: 40px; font-weight: 700"><?php echo getNumClientreturn(); ?></p></div>
				                    </div>
				                </div>
				            </div>
				            <a href="client_data/Show_Client/show_client_return_data.php" target="_blank">
				                <div class="panel-footer">
				                    <span class="pull-left">SHOW CLIENT_RETURN DATA</span>
				                    <div class="clearfix"></div>
				                </div>
				            </a>
				        </div>
				    </div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- // FOR  Clent_sku, Client_ticket and Client_return -->

</body>
</html>