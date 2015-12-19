<?php

$currency = '&#8377; '; //Currency Character or code

$shipping_cost      = 1.50; //shipping cost
$taxes              = array( //List your Taxes percent here.
                            'VAT' => 12,
                            'Service Tax' => 5
                            );

// Connect to database
if(!mysql_connect("localhost","root","root"))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("dbtest"))
{
	die('oops database selection problem ! --> '.mysql_error());
}

?>
