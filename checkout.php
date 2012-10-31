<?php

session_start();
include_once("config.php");
include_once("paypal_ecfunctions.php");

/* --------------------------------------------------------
//  PayPal Express Checkout Call - SetExpressCheckout()
//  and redirect to paypal side
//
//  Checkout from Shopping Cart - commit
//---------------------------------------------------------
*/



//  2. Checkout from Shopping Cart - (option 3)
if ($_REQUEST['useraction'] == "commit") 
{
	$useraction = $_REQUEST['useraction'];
	$_SESSION['useraction'] = $useraction;	// commit
	
}



	//-------------------------------------------
	// Prepare url for items details information
	//-------------------------------------------
	if ($_SESSION['cart_item_arr']) 
	{

		// Cart items
		$payment_request = get_payment_request();
		
		
		// Final Amount
		$paymentAmount = $_SESSION["Payment_Amount"];	// from cart.php
				
										
		//'--------------------------------------------------------------------		
		//'	Tips:  It is recommend that to save this info for the drop off rate 
		///	Function to save data into DB
		//'--------------------------------------------------------------------
		SaveCheckoutInfo($payment_request);
	
									
		//'-------------------------------------------------------------
		//' Calls the SetExpressCheckout API call
		//' Prepares the parameters for the SetExpressCheckout API Call
		//'-------------------------------------------------------------		
		$resArray = CallShortcutExpressCheckout ($paymentAmount, $payment_request); 
		
		$ack = strtoupper($resArray["ACK"]);
		if($ack=="SUCCESS" || $ack=="SUCCESSWITHWARNING")
		{
			//print_r($resArray);
			RedirectToPayPal ( $resArray["TOKEN"] );	// redirect to PayPal side to login
		} 
		else  
		{
			//Display a user friendly Error on the page using any of the following error information returned by PayPal
			DisplayErrorMessage('SetExpressCheckout', $resArray, $padata);
			
		}
			
	
	}else {
	
		header("Location: cart.php"); // back to cart if don't have cart items 
		exit;
	
	}
	


			
?>
