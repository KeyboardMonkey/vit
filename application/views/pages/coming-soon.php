		
  <section class="breadcrumb">
        <h2><a href="<?=base_url();?>index.php/home">HOME</a> / <a href="<?=base_url();?>index.php/library">LIBRARY</a> / COMING SOON</h2>
    </section>

		<section class="container">
			<section class="content-md" style="width: 90%!important;">
				<div style="margin:0px auto; text-align: center;">
					<h4>Feature Coming Soon!</h4>
					<h4>Please stay tuned.</h4>
					<br />
					<h5>Redirecting you to Home in <span class="countdown" style="font-weight:bold; ">5</span> seconds ...</h5>
				</div>
			</section>
		</section>

		<script>
			$(document).ready(function(){
							//alert("readh");
							var count = 5;
							var fun = function()
							{
								count --;
								$('.countdown').html(count);
								if(count == 0){
									var url = "<?= base_url() . "index.php/home";?>";
								//	alert("you are being teleported to: " + url);
								window.location = url;
							}
							setTimeout(fun, 1000);
						}
						setTimeout(fun, 1000);

					});

		</script>

