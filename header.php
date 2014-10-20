<html lang="en">
    
    <head>
        <meta charset="utf-8" />
        <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Le styles -->
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
        
         <?php wp_enqueue_script("jquery"); ?>
    	<?php wp_head(); ?>
    	<?php
    	ini_set("display_errors", true);
    	ini_set("display_warnings",true);
    	error_reporting(E_ALL);
    	?>
    </head>
    
    <body>
        <nav class="navbar navbar-fixed-top navbar-default navbar-custom">
        	<div class="container">
            	<div class="navbar-header">
            		<a class="navbar-brand navbar-brand-custom" href="<?php echo site_url(); ?>">
            			<h2 style="margin-top: -15px; margin-bottom: 0px; padding: 0px;"><?php echo get_bloginfo('name'); ?></h2>
						<?php echo get_bloginfo('description');?>
            			
            		</a>
            		<a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="glyphicon glyphicon-bar"></span>
						<span class="glyphicon glyphicon-bar"></span>
						<span class="glyphicon glyphicon-bar"></span>
					</a>
            	</div>
                <div class="container">
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                           <?php wp_list_pages(array('title_li' => '')); ?>
                        </ul>
                        
                    </div>
                    <!--/.navbar-collapse -->
                </div>
            </div>
        </nav>
        <div class="container" style="heigth:100%">
