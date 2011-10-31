<?php get_header(); ?>
		<div id="content">				
			<!-- Content Start-->
			<?php if (have_posts()) : ?>
				<div class="post">
				<?php while (have_posts()) : the_post(); ?>						
					<h2 class="h2title">
						<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
						<span><?php the_date(); ?></span>
						<span class="comment"><?php comments_popup_link('0', '1', '%'); ?></span>
					</h2>															
					<div class="entry">
						<?php the_content('Read the rest of this entry &raquo;'); ?>
					</div>
					<div class="postmetadata">
						<br />Author: <b><?php the_author(); ?></b><br />
						Filed Under Category: <?php the_category(', ') ?><br/>
						<!-- Article <?php the_tags(); ?><br/> -->
						Comments: <?php comments_popup_link('No comments', '1 comment', '% comments'); ?>
					</div>		
				<?php endwhile; ?>
				
				<div class="navigation">
                                        <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
                                        <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
                                </div>

				</div>	
			<?php else : ?>		
				<h2 class="h2title">Not Found</h2>
				<p>Sorry, but you are looking for something that isn't here.</p>		
			<?php endif; ?>
			<?php get_sidebar(); ?>
			<div class="clear_both"></div>
			<!-- Content End -->
<?php get_footer(); ?>
