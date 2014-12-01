    <section class="breadcrumb">
        <h2><a href="<?=base_url();?>index.php/home">HOME</a> / <a href="<?=base_url();?>index.php/preference/set_preference">SET PREFERENCE</a> / RANK PREFERENCE</h2>
    </section>
<?php
$userInterests = $this -> user_interest_categories -> getWithCondition(
    array(
        'user_id' => $this -> session -> userdata('user_id'),
        'interest_level >' => '0'

    )
);

if(count($userInterests) < 5)
{
    echo "<h2> Please specify atleast 5 of your interests to procede.</h2>";
    echo "<p> Click <a href='" . base_url('index.php/preference/set_preference'). "'> here </a> to set preferences</p> ";
}else{
?>
    <?=validation_errors();?>
    <style>
        #sortable { margin:0 2.5%; padding:0; list-style-type:none; width:80%; }
        #sortable li { margin:2px 0; padding:10px 0; padding-left:20px; color:#FFFFFF; background:#2ABB9B; font-size:16px; }
        .highlights { background-color:#ECF0F1; }
    </style>
<script type="text/javascript" src="<?=base_url('assets/js/jquery-ui.min.js');?>"></script>
<section class="container">
	<section class="content-pref-wizard">
        <h2>Rank Your Interests<br /><small>Want even more finely-tuned recommendations? Rank your interests below by dragging up and down.</small></h2>
		<h4 style="margin:0px 0px 10px 25px;">Top-most category has the highest priority.</h4>
		<form method="post">
            <ul id="sortable">
                <?php
                    $i = 1;
                    foreach($userInterests  as $interest)
                    {
                        $cat = new course_cat();
                        $cat -> load($interest -> cat_id);
                        ?>
                        <input value="<?=$i;?>" type="hidden" name="input_cat_<?=$interest->cat_id;?>" id="input_cat_<?=$interest->cat_id;?>"/>
                        <li id="sortable" data-cat_id="<?=$interest -> cat_id;?>">

                            <?=$cat -> category;?>
                        </li>
                <?php
                    }
                ?>
            </ul>
            
            <section class="inline-buttons">
                <a class="default" href="<?=base_url();?>index.php/preference/index">Go Back</a>
                <button class="default" type="submit" style="border:none;">Create My Recommendations</button>
            </section>
		</form>
			<!-- <a href="<?=base_url();?>index.php/recommendations">Create My Recommendations</a> -->
	</section>
	</section>
    <script>
        $(function() {
            $( "#sortable" ).sortable({
                change: function(event, ui) {
                    var old_rank = ui.item.data('old_rank');
                    var index = ui.placeholder.index();
                    if (old_rank < index) {
                        $('#sortable li:nth-child(' + index + ')').addClass('highlights');
                    } else {
                        ui.item.attr('data-new_rank', index + 1);
                        $('#sortable li:eq(' + (index + 1) + ')').addClass('highlights');
                    }
                },
                update: function(event, ui) {
                    $('#sortable li').removeClass('highlights');
                    $('#sortable li').each(function(key, value) {
                        var cat_id = $(this).attr('data-cat_id');
                        var selector = '#input_cat_' + cat_id;
                        console.log(selector);
                        console.log($(selector));
                        $(selector).val(key + 1);
                        console.log("NEW VALUE: " + $(selector).val());
                        $(value).attr('data-new_rank', key + 1);
                        $(value).children('span').html(key + 1);
                    });
                }
            });
            $( "#sortable" ).disableSelection();
        });
    </script>
	<section class="clear"></section>

<?php

}
?>
