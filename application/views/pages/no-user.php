   <section class="breadcrumb">
        <h2><a href="<?=base_url();?>index.php/home">HOME</a> / USER NOT FOUND</h2>
    </section>

<section class="container">
			<section class="content-md" style="width: 90%!important;">
				<div style="margin:0px auto; text-align: center;">
					<h4>No Account Found! </h4>
					<br />
					<h5>Redirecting you in <span class="countdown" style="font-weight:bold; ">5</span> seconds ...</h5>
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

