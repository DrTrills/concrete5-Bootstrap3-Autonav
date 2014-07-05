<div class="navbar navbar-inverse navbar-static-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php      echo DIR_REL?>/" class="navbar-brand">Title</a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse" role="navigation">
		    <?php 
			$a = new GlobalArea('Nav');
			$a->display($c);
		    ?>            
		</div>
	</div>
</div>
