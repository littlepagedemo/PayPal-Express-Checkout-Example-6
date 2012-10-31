<?php

session_start();
include("header.php");
include("config.php");

?>
  	
	<div id="content-container">
	
		<div id="content">
			<h2>
				Product
			</h2>

			<div class="thumbnail">
				<img src="images/harddisk.jpg" alt="" width="120"><br>
				WD My Passport® 1TB 隨身硬碟<?php echo $PayPalCurrencyCode; ?> $1,000<br>
				<form method="post" action="cart.php">
					<input type="hidden" name="itemname" value="WD My Passport® 1TB 隨身硬碟" /> 
					<input type="hidden" name="itemdesc" value="兼享 Nomad™ 堅固耐用硬碟保護箱 (價值高達 $1137)" /> 
					<input type="hidden" name="itemnumber" value="46190" /> 
					<input type="hidden" name="itemprice" value="1000.00" />
        			Quantity : 
        			<select name="itemQty">
        			<option value="1">1</option>
        			<option value="2">2</option>
        			<option value="3">3</option>
        			</select> 
        			<br><input class="chkbtn" type="submit" name="submit" value="Add to Cart" />
        			<br>20% off = $800 now
    			</form>
			</div>
			<div class="thumbnail">
				<img src="images/bag.jpg" alt="" width="120"><br>
				Leather Reborn 手袋銀包保養服務<?php echo $PayPalCurrencyCode; ?> $300.00<br>
				<form method="post" action="cart.php">
					<input type="hidden" name="itemname" value="Leather Reborn 手袋銀包保養服務" /> 
					<input type="hidden" name="itemdesc" value="包基本清潔 、光澤回復及防水防滲加工，兩間分店適用" /> 
					<input type="hidden" name="itemnumber" value="46311" /> 
					<input type="hidden" name="itemprice" value="300.00" />
        			Quantity : 
        			<select name="itemQty">
        			<option value="1">1</option>
        			<option value="2">2</option>
        			<option value="3">3</option>
        			</select> 
        			<br><input class="chkbtn" type="submit" name="submit" value="Add to Cart" />
    			</form>
			</div>

		</div>
		
		<div id="aside">
			<h3>
				Express Checkout
			</h3>
			<p>Checkout with Paypal and pay at PayPal.
			<br>Note: Recommend for flat or free shipping fee.
			</p>
			
		</div>

<?php
	include("footer.php");
?>