	<section class="container">
	<section class="widgets">
		<section class="widget-video-transition">
			<h6>Video 1/8</h6>
			<h4>Introduction to jQuery</h4>
			<ul>
				<li class="previous"><a href="">Previous</a></li>
				<li class="next"><a href="">Next</a></li>
			</ul>
		</section>
		
		<section class="clear"></section>

		
		<section class="widget-course-progress">
			<h4>Course Progress</h4>
			<section class="progress-bar">
			</section>
		</section>
		
		<section class="clear"></section>  
		
		<section class="widget-project-files">
			<h4>Download</h4>
			<ul>
				<li><span class="download"><img src="<?=base_url();?>assets/graphics/downloads.png" width="20px" height="18px" alt="download" /></span><a href="">Download Course Files</a></li>
			</ul>
		</section>
		
		<section class="clear"></section>
		
		<section class="widget-facebook-recommendations">
			<h4>Facebook Recommendations</h4>
			<p class="fb-feeds">"Asdsfk afd fdfdk adsfdsf dfdj dfjdjf djdj jd jdjdjdj jd jd jjjdjds swizadfdd asdadnafas."</p>
			<p class="fb-feeds">"Asdsfk afd fdfdk adsfdsf dfdj dfjdjf djdj jd jdjdjdj jd jd jjjdjds swizadfdd asdadnafas."</p>
			<p class="fb-feeds">"Asdsfk afd fdfdk adsfdsf dfdj dfjdjf djdj jd jdjdjdj jd jd jjjdjds swizadfdd asdadnafas."</p>
		</section>
	</section>
	
	<section class="content-md">
		<section class="widget-video-player">
		<h3 class="course-title">jQuery Basics Overview</h3>
		 <section style="display:none;margin: 0 auto;" class="html5gallery" data-skin="vertical" data-width="720" data-height="480">

            <!-- Add Videos to Gallery -->
            <a href="<?=base_url();?>assets/graphics/gallery/2020-Technology.mp4">
                <img src="<?=base_url();?>assets/graphics/gallery/video1.jpg" alt="2020 Technology" />
            </a>
            <a href="<?=base_url();?>assets/graphics/gallery/Amazing-Screen.mp4">
                <img src="<?=base_url();?>assets/graphics/gallery/video2.jpg" alt="Amazing Screen" />
            </a>
            <a href="<?=base_url();?>assets/graphics/gallery/Coke-and-Milk.mp4">
                <img src="<?=base_url();?>assets/graphics/gallery/video3.jpg" alt="Coke and Milk" />
            </a>
            <a href="<?=base_url();?>assets/graphics/gallery/Future-Technology-2019.mp4">
                <img src="<?=base_url();?>assets/graphics/gallery/video4.jpg" alt="Future Technology 2019" />
            </a>
		</section>
		<section class="teacher-notes">
			<h4>Teacher's Notes</h4>
			<ul>
				<li><span class="notes"><img src="<?=base_url();?>assets/graphics/teacher-notes.png" width="20px" height="20px" /></span><a href="">Introduction to Programming</a></li>
				<li><span class="notes"><img src="<?=base_url();?>assets/graphics/teacher-notes.png" width="20px" height="20px" /></span><a href="">JavaScript Foundations</a></li>
			</ul>
		</section>
	</section>
	
	<section class="content-md">
		<section class="widget-facebook-commenter">
			<h3>Discussions</h3>
			    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'vitorials'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
//            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            dsq.src = '<?=base_url();?>assets/js/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the discussions.</noscript>
    
		</section>
	</section>
	
	</section>
	<section class="clear"></section>

	<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'vitorials'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        dsq.src = '<?=base_url();?>assets/js/embed.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
    </script>
    <script src="<?=base_url();?>assets/js/html5gallery/html5gallery.js"></script>