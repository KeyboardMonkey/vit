
	<section class="container">
	
		<section id="main-welcome">
			<h1>Welcome to Vitorials</h1>
                        <?=validation_errors();?>
                        <?=$message?>
			<p>We are aiming to serve the students of Faculty of Computing of Riphah International University by providing them an online, state of the art Self-Learning Environment.</p>
		</section>

	</section>
	<?php
			if($success)
			{
?>
				<span class="countdown">
				3
				</span>

			<script>
						$(document).ready(function(){
							//alert("readh");
							var count = 3;
							var fun = function()
							{
								count --;
								$('.countdown').html(count);
								if(count == 0){
									var url = "<?= base_url() . "index.php/preference/index";?>";
								//	alert("you are being teleported to: " + url);
									window.location = url;
								}
								setTimeout(fun, 1000);
							}
							setTimeout(fun, 1000);

						});

			</script>
<?php

			}

	?>
	<section class="clear"></section>