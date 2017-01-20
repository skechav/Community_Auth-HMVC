<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!---Import Meta--->
		<?php echo $this->template->meta; ?>
		
		<!---Import Styles--->
		<?php echo $this->template->stylesheet; ?>

		<!---Page Title--->
		<title><?php echo $this->template->title->default("Default title"); ?></title>
	</head>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            
			<!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            
			<!---Top Navigation Widget--->
			<?php echo $this->template->widget("top_nav", array('title' => 'Project name')); ?>
           
			<!---Side Navigation Widget--->
			<?php echo $this->template->widget("side_nav", array('title' => 'Project name')); ?>
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
						
						<!---Display Page Content--->
						<?php echo $this->template->content;?>
						
                    </div>
                </div>
                <!-- /.row --

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Load JS Files -->
    <?php echo $this->template->javascript; ?>

</body>

</html>
