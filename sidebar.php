		<!-- Sidebar Start -->
		<div id="sidebar">
			
			<div class="rightPan top">
				<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/" class="headSearch">
					<div>
						<input type="hidden" name="IncludeBlogs" id="IncludeBlogs" value="1"/>
						<input type="text" class="keyword" onblur="if (document.forms['searchform'].s.value == '') document.forms['searchform'].s.value='Search Keywords';" onfocus="document.forms['searchform'].s.value='';" value="Search Keywords" name="s"/>
						<input type="submit" value="" id="searchsubmit" class="searchButton" />
					</div>
				</form>
				<div class="gbc"><span class="sbc">&nbsp;</span></div>
			</div>
						
			<div class="rightPan">
				<a href="http://nation.bobvila.com/blog/san-francisco-victorian">
					<div class="bob-vila">&nbsp;</div>
				</a>
			</div>
			
			<div class="rightPan">
				<span class="stc">&nbsp;</span>
					<h3>Browse by Room</h3>				
					<ul>
						<?php list_tags('show_count=1&title_li='); ?>
					</ul>
				<div class="gbc"><span class="sbc">&nbsp;</span></div>
			</div>			

			<div class="rightPan">
					<span class="stc">&nbsp;</span>
					<h3>Browse by Category</h3>
					<ul>
						 <?php wp_list_categories('show_count=1&title_li='); ?>
				</ul>
			<div class="gbc"><span class="sbc">&nbsp;</span></div>
			</div>


			
			<div class="rightPan">
			
			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
			
			<span class="stc">&nbsp;</span>	
			<h3>Other blogs</h3>
			<ul>
							
				<?php wp_list_bookmarks('categorize=0&title_li='); ?>


			</ul>
			<?php } ?>
			<div class="gbc"><span class="sbc">&nbsp;</span></div>
					</div>

		
			<?php	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar 1') ) : ?>
		
			<?php endif; ?>					 
			
		</div>
		<!-- Sidebar End -->
