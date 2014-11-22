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
        #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #sortable li { border: 1px solid red; margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
        .highlights { background-color: yellow; }
    </style>
<script type="text/javascript" src="<?=base_url('assets/js/jquery-ui.min.js');?>"></script>
<section class="container">
	<section class="content-pref-wizard">
		<h2>Rank Your Interests<br /><small>Want even more finely-tuned recommendations? Rank your interests below.</small></h2>
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
<input type="submit" value="submit" />
		</form>
		<section class="inline-buttons">
			<a href="<?=base_url();?>index.php/preference/index">Go Back</a>
			<a href="<?=base_url();?>index.php/recommendations">Create My Recommendations</a>
		</section>
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
