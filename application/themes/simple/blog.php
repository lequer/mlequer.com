<?=$view->inc('elements/headers.php');?>
	
	
	<!-- +++++ Projects Section +++++ -->
	
	<div class="container pt">
<div class="row mt">	
			<div class="col-lg-6 col-lg-offset-2">
		<?php
						$a = new Area('White');
						$a->display($c);
					?>
				</div><!-- /col-lg-8 -->
<div class="col-lg-3" id="rb">
		<?php
						$a = new Area('Right section');
						$a->display($c);
					?>
				</div><!-- /col-lg-8 -->
			</div><!-- /row -->
	</div>
	<?=$view->inc('elements/footers.php');?>
	
