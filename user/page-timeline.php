<?php 

/**
 Template Name: 时光轴模版
 */

get_header();

#error_reporting(E_ALL);
#ini_set('display_errors', '1');
?>
   	<div id="main">
		<header class="timeline-header"><h1 class="cat-title"> <i class="fas fa-clock"></i></h1> <span class="cat-des"><p>TimeLine</p> </span></header>
        <div id="main-part">
			<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
            <article class="art">
                <div class="art-main">
                    <div class="art-content">
                        <?php the_content( '', true ); memory_archives_list(); ?>
					</div>
				</div>
			</article>
			<?php endif; ?>
        </div>
    </div>
<?php get_footer(); 
