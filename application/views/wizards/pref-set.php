<section class="container">
        <?=
        validation_errors();?>
	<section class="content-pref-wizard">
		<h2>What would you like to learn?<br /><small>Let us know your interests and we'll recommend courses for you. Update these preferences any time from the My Interests menu.</small></h2>
		<form method="post" id="pref_form">
			<table class="recommendations">
				<thead>
					<tr>
						<th>Category</th>
						<th>Not Interested</th>
						<th>No Opinion</th>
						<th>Interested</th>
					</tr>
				</thead>
                    <?php
                        $allCategories = $this -> course_cat -> get();
                        
                        foreach($allCategories as $singleCategory)
                        {
                     ?>
                         <?php
                         /*
                          *     0 -> Not Interested
                          *     1 -> No Openion
                          *     2 -> Interested
                          * 
                          */
                            $user_interest_categories =  new user_interest_categories();
                            $user_interest_categories = $user_interest_categories->getWithConditionLimit1(array('cat_id' => $singleCategory -> id, 'user_id' => $this -> session -> userdata('user_id')));
                         //   echo '<pre>';
                          //  print_r($user_interest_categories);
                          //  echo '</pre>';
                         ?>
					<tr>
						<td><?=$singleCategory->category;?></td>
						<td><input <?php if($user_interest_categories->interest_level == 0) echo "checked"; ?> type="radio" name="cat_<?=$singleCategory->id;?>" value="0" /></td>
						<td><input <?php if($user_interest_categories->interest_level == 1) echo "checked"; ?>  type="radio" name="cat_<?=$singleCategory->id;?>" value="1" /></td>
						<td><input <?php if($user_interest_categories->interest_level == 2) echo "checked"; ?>  type="radio" name="cat_<?=$singleCategory->id;?>" value="2" /></td>
					</tr>
                    <?php 
                        }
                    ?>
			</table>
		</form>
		<section class="btn-pref-set">
			<a href="<?=base_url();?>index.php/home">Not Right Now</a>
			<!-- <a href="<?=base_url();?>index.php/preference/rank_preference">Next Step</a> -->
			<a id="submit_pref">Next Step</a>
			<input type="button" value="Recommendations" onclick="newDoc()">
                <script>
                    $(document).ready(function(){
                       $("#submit_pref").click(function(){
                           $("#pref_form").submit();
                       });
                    });
                </script>
				<script>
					function newDoc() {
					    window.location.assign("<?=base_url();?>index.php/recommendations");
					}
				</script>
<!-- redirect script -->
          <!--               <?php
			//if()
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
									var url = "<?= base_url() . "index.php/preference/rank_preference";?>";
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

	?> -->
		</section>
	</section>
</section>
	
	<section class="clear"></section>