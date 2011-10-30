			<!-- Sidebar Start -->
				<div id="sidebar">

				<?php if ( !is_home() && !is_page() ) { ?>
					<script type="text/javascript"><!--
					google_ad_client = "pub-6910113458656880";
					/* 250x250, created 7/7/09 */
					google_ad_slot = "9005209936";
					google_ad_width = 250;
					google_ad_height = 250;
					//-->
					</script>
					<script type="text/javascript"
					src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
					</script>
				<?php } ?>

				<div class="rightPan top">
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
					<script type="text/javascript"><!--
					google_ad_client = "pub-6910113458656880";
					/* smaller text */
					google_ad_slot = "3019388622";
					google_ad_width = 250;
					google_ad_height = 250;
					//-->
					</script>
					<script type="text/javascript"
					src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
					</script>
				<?php } ?>
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
