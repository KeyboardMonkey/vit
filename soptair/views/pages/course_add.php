
<section class="container">
	
	<section class="content-lg">
        <?=$message;?>
        <?=validation_errors();?>
        <form class="dashboard" method="post">
            <p>
                <label>Course Full Name:</label>
                <input class="name" type="text" name="full_name" placeholder="Course Full Name" />
            </p>
            <p>
                <label>Course Short Name:</label>
                <input class="name" type="text" name="short_name" placeholder="Course Short Name" />
            </p>
            <p>
                <label>Category:</label>
                <select id="category" name="category">
                    <?php
                    $cats = $this -> course_cat -> get();
                    foreach($cats as $cat)
                    {
                        ?>
                        <option value="<?=$cat -> id;?>"><span class="<?=$cat->color_tag;?>"><?=$cat->category;?></span></option>
                        <?php
                    }?>

                </select>
            </p>
            <p>
                <label>Visible:</label>
                <section class="onoffswitch">
                    <input type="checkbox" name="status" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                    <label class="onoffswitch-label" for="myonoffswitch">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                </section>
            </p>
            <p>
                <label>Description:</label>
                <textarea rows="4" cols="50" name="description" placeholder="Write Course Summary Here"></textarea>
            </p>
            <input type="Submit" value="Submit" />
        </form>
        <section class="save-unsave">

            <section class="inline-buttons">
                <a class="submit_form" >Save</a>
                <a href="#">Cancel</a>

            </section>
        </section>
    </section>
</section>

<script>
    $(document).ready(function(){

        $('.submit_form').click(function(){
            $('form .dashboard').submit();
        });
    });
</script>

