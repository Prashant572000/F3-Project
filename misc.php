<?php 
function getNumOrders()
{
	global $conn;
	$query = mysqli_query($conn, "SELECT * FROM orders");
	if (mysqli_num_rows($query)) 
	{
		return mysqli_num_rows($query);
	}
	return"0";
}


function getNumPayments()
{
	global $conn;
	$query = mysqli_query($conn, "SELECT * FROM payments");
	if (mysqli_num_rows($query)) 
	{
		return mysqli_num_rows($query);
	}
	return"0";
}


function getNumReturns()
{
	global $conn;
	$query = mysqli_query($conn, "SELECT * FROM returns");
	if (mysqli_num_rows($query)) 
	{
		return mysqli_num_rows($query);
	}
	return"0";
}

function getNumClientsku()
{
	global $conn;
	$query = mysqli_query($conn, "SELECT * FROM client_sku");
	if (mysqli_num_rows($query)) 
	{
		return mysqli_num_rows($query);
	}
	return"0";
}

function getNumClientticket()
{
	global $conn;
	$query = mysqli_query($conn, "SELECT * FROM client_ticket");
	if (mysqli_num_rows($query)) 
	{
		return mysqli_num_rows($query);
	}
	return"0";
}

function getNumClientreturn()
{
	global $conn;
	$query = mysqli_query($conn, "SELECT * FROM client_return");
	if (mysqli_num_rows($query)) 
	{
		return mysqli_num_rows($query);
	}
	return"0";
}
