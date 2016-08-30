<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel='stylesheet' href="<?php echo base_url();?>assets/fullcalendar/fullcalendar.css" />
	<link rel='stylesheet' href="<?php echo base_url();?>assets/fullcalendar/fullcalendar.print.css" media="print"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/docs.css">
	<title>main page</title>
</head>

<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">BPRTIK</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Jadwal<span class="sr-only">(current)</span></a></li>
	        <li><a href="<?php echo base_url();?>index.php/ListRuang">List Ruangan</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">One more separated link</a></li>
	          </ul>
	        </li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">Link</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="container-fluid">
		<div class="row-fluid">

		<!--jQuery-->
		<script src='<?php echo base_url();?>assets/jquery/jquery-1.9.1.min.js'></script>
		<script src='<?php echo base_url();?>assets/jquery/jquery-ui-1.10.2.custom.min.js'></script>
		
		<!--FullCalendar-->
		<script src='<?php echo base_url();?>assets/fullcalendar/fullcalendar.min.js'></script>
		<script type="text/javascript">
			
			/*
				jQuery document ready
			*/
			
			$(document).ready(function()
			{
				/*
					date store today date.
					d store today date.
					m store current month.
					y store current year.
				*/
				var date = new Date();
				var d = date.getDate();
				var m = date.getMonth();
				var y = date.getFullYear();
				
				/*
					Initialize fullCalendar and store into variable.
					Why in variable?
					Because doing so we can use it inside other function.
					In order to modify its option later.
				*/
				
				var calendar = $('#calendar').fullCalendar(
				{
					/*
						header option will define our calendar header.
						left define what will be at left position in calendar
						center define what will be at center position in calendar
						right define what will be at right position in calendar
					*/
					header:
					{
						left: 'prev,next today',
						center: 'title',
						right: 'month,agendaWeek,agendaDay'
					},
					/*
						defaultView option used to define which view to show by default,
						for example we have used agendaWeek.
					*/
					defaultView: 'agendaWeek',
					/*
						selectable:true will enable user to select datetime slot
						selectHelper will add helpers for selectable.
					*/
					selectable: true,
					selectHelper: true,
					/*
						when user select timeslot this option code will execute.
						It has three arguments. Start,end and allDay.
						Start means starting time of event.
						End means ending time of event.
						allDay means if events is for entire day or not.
					*/
					select: function(start, end, allDay)
					{
						/*
							after selection user will be promted for enter title for event.
						*/
						var title = prompt('Event Title:');
						/*
							if title is enterd calendar will add title and event into fullCalendar.
						*/
						if (title)
						{
							calendar.fullCalendar('renderEvent',
								{
									title: title,
									start: start,
									end: end,
									allDay: allDay
								},
								true // make the event "stick"
							);
						}
						calendar.fullCalendar('unselect');
					},
					/*
						editable: true allow user to edit events.
					*/
					editable: true,
					/*
						events is the main option for calendar.
						for demo we have added predefined events in json object.
					*/
					events: [
						{
							title: 'All Day Event',
							start: new Date(y, m, 1)
						},
						{
							title: 'Long Event',
							start: new Date(y, m, d-5),
							end: new Date(y, m, d-2)
						},
						{
							id: 999,
							title: 'Repeating Event',
							start: new Date(y, m, d-3, 16, 0),
							allDay: false
						},
						{
							id: 999,
							title: 'Repeating Event',
							start: new Date(y, m, d+4, 16, 0),
							allDay: false
						},
						{
							title: 'Meeting',
							start: new Date(y, m, d, 10, 30),
							allDay: false
						},
						{
							title: 'Lunch',
							start: new Date(y, m, d, 12, 0),
							end: new Date(y, m, d, 14, 0),
							allDay: false
						},
						{
							title: 'Birthday Party',
							start: new Date(y, m, d+1, 19, 0),
							end: new Date(y, m, d+1, 22, 30),
							allDay: false
						},
						{
							title: 'Click for Google',
							start: new Date(y, m, 28),
							end: new Date(y, m, 29),
							url: 'http://google.com/'
						}
					]
				});
				
			});

		</script>
		<style type="text/css">
			body
			{
				margin-top: 40px;
				text-align: center;
				font-size: 14px;
				font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
			}
			#calendar
			{
				width: 900px;
				margin: 0 auto;
			}
		</style>


		<!--FullCalendar container div-->
		<div id='calendar'></div>
		</div>

		<div class="row-fluid">
			<footer>
				<div class="footer"></div>
			</footer>
		</div>
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

<script src='lib/jquery.min.js'></script>
<script src='lib/moment.min.js'></script>
<script src='fullcalendar/fullcalendar.js'></script>

</body>
</html>