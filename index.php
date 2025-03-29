<?php
require('config.php');
?>
<form action="thankyou.html" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="1000000"
		data-name="Gurukul"
		data-description="Fees Submission!"
		data-image="logo.png"
		data-currency="inr"
		data-email="gurukul123@gmail.com"
	>
	</script>
</form>