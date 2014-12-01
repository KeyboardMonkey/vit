<?php
    $number = 1;
    foreach($leaders as $leader)
    {
        if($leader -> user_id == $this -> session -> userdata('user_id'))
        {
            break;
        }
        $number ++;
    }
?>

 <section class="breadcrumb">
        <h2><a href="<?=base_url();?>index.php/home">HOME</a> / LEADERBOARD</h2>
    </section>

<section class="container">

	<section class="content-md">
		<table class="leaderboard">
			<thead>
				<tr>
					<th>Ranking</th>
					<th>Students</th>
					<th>Points</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<td colspan="3">You're ranked <?=$number;?> out of 100 students for total scores!</td>
				</tr>
			</tfoot>
	        
	        <?php 
	        $i = 1;
	        foreach($leaders as $leader) {
	        ?>
			
			<tr>
	                           
				<td><?=$i;?></td>
				<td><a href="<?=base_url('index.php/profile/index/' . $leader -> user_id) ;?>"><?=$leader ->first_name." ".$leader->last_name;?></a></td>
				<td><?= $leader -> getAllPoints();?></td>
			</tr>

			<?php
	        $i++;
	    	}
	        ?>
			
		</table>
	</section>
</section>	
<section class="clear"></section>