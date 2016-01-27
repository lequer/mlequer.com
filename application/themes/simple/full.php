<?=$view->inc('elements/headers.php');?>
	<!-- +++++ Welcome Section +++++ -->
	<div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">
					<?php
						$a = new Area('Gray');
						$a->display($c);
						?>
					
					
				
				</div><!-- /col-lg-8 -->
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /ww -->
	
	
	<!-- +++++ Projects Section +++++ -->
	
	<div class="container pt">
		<?php
						$a = new Area('White');
						$a->display($c);
					?>
	</div>
	<?=$view->inc('elements/footers.php');?>
	
