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
                                     ?>
                                    <tr>
					<td><?=$singleCategory->category;?></td>
					<td><input type="radio" name="<?=$singleCategory->id;?>" value="0" checked="checked"/></td> 
					<td><input type="radio" name="<?=$singleCategory->id;?>" value="1" /></td>
					<td><input type="radio" name="<?=$singleCategory->id;?>" value="2" /></td>
                                    </tr>
                                
                                <?php 
                                    }
                                ?>
				
			</table>
		</form>
		<section class="inline-buttons">
			<a href="<?=base_url();?>index.php/home">Not Right Now</a>
			<a id="submit_pref">Next Step</a>
                        <script>
                            $(document).ready(function(){
                               $("#submit_pref").click(function(){
                                   $("#pref_form").submit();
                               });
                            });
                        </script>
		</section>
	</section>
	</section>
	
	<section class="clear"></section>