<!DOCTYPE html>
<html lang='en'>
	<meta cahrset='utf-8'>
<head>
<title>Hukum</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/docs.css">
</head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">

<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         
          <a class="brand" href="">Blog</a>
         </a>
        </div>
      </div>
</div>

	<div class="container" id="backg">
		<div class="row-fluid"><!-- start header -->
			<div class="page-header">
			<img src="<?php echo base_url();?>assets/images/otheadergray.jpg?>" width="990" height="144">
			</div>
		</div><!-- end header -->
		<div class="row"><!-- start nav -->
			<div class="span12">
			  <div class="navbar navbar-inverse">
					<div class="navbar-inner">
					  <div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</a>
						<div class="nav-collapse">
						  <ul class="nav">
              				 <?php $this->load->view('topmenu.php'); ?> 
            			  </ul>
					 	 <ul class="nav pull-right">
						   <li class="divider-vertical"></li>
							  <form method=POST class="navbar-search" action="<?php echo base_url()?>main/search_kata">
								<input name="search" type="text" class="search-query span2" placeholder="Search">
								<i class="icon-search icon-white" ></i>
							</form>
						  </ul>

						</div><!-- /.nav-collapse -->

					  </div>
					</div><!-- /navbar-inner -->
				</div><!-- /navbar -->
			</div>
		</div><!-- end nav -->	
   
		   <div class="row-fluid">
				<div class="span3 bs-docs-sidebar">
		    		<div class="nav nav-list">
						  <div  style="padding: 8px 0;">
		    				<?php $this->load->view('kiri'); ?>
						  </div>
		  			</div>
		 	    </div>	
		   			<div class="paragraphs">
					  <div class="row">
  						  <div class="span9">
   					   <?php $this->load->view($main); ?>
  						   </div>
					  </div>
		       			
		    	</div>
		  		   </div>
			   </div>

    <div class="row-fluid">
  			<footer>
				
   				<div class="footer"></div>
  			
			</footer>
	</div> <!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

 <script src=" <?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
 <script src=" <?php echo base_url(); ?>assets/js/bootstrap-dropdown.js" type="text/javascript"></script>
 <script src=" <?php echo base_url(); ?>assets/js/bootstrap-alert.js" type="text/javascript"></script>
 <script src=" <?php echo base_url(); ?>assets/js/bootstrap-button.js" type="text/javascript"></script>
 <script src=" <?php echo base_url(); ?>assets/js/bootstrap-carousel.js" type="text/javascript"></script>
 <script src=" <?php echo base_url(); ?>assets/js/bootstrap-popover.js" type="text/javascript"></script>
 <script src=" <?php echo base_url(); ?>assets/js/bootstrap-scrollspy.js" type="text/javascript"></script>
 <script src=" <?php echo base_url(); ?>assets/js/bootstrap-tab.js" type="text/javascript"></script>
 <script src=" <?php echo base_url(); ?>assets/js/bootstrap-tooltip.js" type="text/javascript"></script>
 <script src=" <?php echo base_url(); ?>assets/js/bootstrap-transition.js" type="text/javascript"></script>
 <script src=" <?php echo base_url(); ?>assets/js/bootstrap-typeahead.js" type="text/javascript"></script>
 <script src=" <?php echo base_url(); ?>assets/js/bootstrap-modal.js" type="text/javascript"></script>
 <script src=" <?php echo base_url(); ?>assets/js/application.js" type="text/javascript"></script>
 <script src=" <?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
 <script src=" <?php echo base_url(); ?>assets/js/bootstrap-affix.js" type="text/javascript"></script>

 <script language="javascript">
    $('.dropdown-toggle').dropdown();
    $('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
      });
</script>

</body>
</html>
