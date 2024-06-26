<?php
/**
 * Footer Template
 * 
 * @package Aquila
 */
?>
<footer id="site-footer" class="bg-light p-4">
	<div class="container color-gray">
			<div class="row">
				<section class="col-lg-4 col-md-6 col-sm-12">
					<?php
					if(is_active_sidebar('sidebar-2')) {
						?>
						<aside>
							<?php dynamic_sidebar('sidebar-2');?>
						</aside>
						<?php
					}
					?>
				</section>
			</div>
		</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>