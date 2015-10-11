<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$calendarResult = mysql_query("SELECT calendar_id FROM usercalendarmappling where user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
$calendarRow=mysql_fetch_array($calendarResult);
?>

<html>
<head>
	<link rel="stylesheet" href="assets/css/calendar.css" />
    <link href="bower_components/fullcalendar/dist/fullcalendar.css" rel="stylesheet">
    <link href="bower_components/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">
    <link href="bower_components/datetimepicker/jquery.datetimepicker.css" rel="stylesheet">
    <link href="bower_components/jquery-ui/themes/redmond/jquery-ui.css" rel="stylesheet">

    <script src="bower_components/uoacalendar-js/dist/uoacalendar.js"></script>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/jquery-ui/jquery-ui.js"></script>
    <script src="bower_components/moment/min/moment.min.js"></script>
    <script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="bower_components/datetimepicker/jquery.datetimepicker.js"></script>
    <script src="bower_components/fullcalendar-uoa/uoacal.js"></script>
    <script src="bower_components/fullcalendar-uoa-ui/uoacal-ui.js"></script>

    <script lang="javascript">
        $(document).ready(function() {
            console.log("user ready() called");
            eventType = {
		    	show: ['title', 'start', 'end', 'reminder', 'url'],
			    custom: []
		    };
            uoaCalendar('#calendar', {
                events: {
                    uoaCalendarId: '<?php echo $calendarRow['calendar_id']?>',
                    uoaCalendarApiToken: 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJvcmlnX2lhdCI6MTQyMjQ5ODk0OSwiZXhwIjoxNDIyNDk5MjQ5LCJ1c2VyX2lkIjoyLCJ1c2VybmFtZSI6ImRldmVsb3BlciIsImVtYWlsIjoidGVzdEBhdWNrbGFuZC5hYy5ueiJ9.7jLkEBovT2HvT2noL4xdIhddaY8wpZpEVYEDHnnNm1Y',
                    uoaCalendarHost: 'sitcalprd01.its.auckland.ac.nz',
                    uoaCalendarPort: '345'
                },
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                }
            });
        });
    </script>

</head>
<body>
			
			<header id="header">
				<h1><a href="index.html">Fantastic Training</a></h1>
					
						Hello, <?php echo $userRow['username']; ?>&nbsp;
						
					
				
				<a href="home.php">Back</a>
				
				
			</header>
			
			
<div id="loading">loading...</div>

<table style="width:100%">
    <tr>
        <td style="width: 15%"></td>
        <td ><div id="calendar"></div></td>
        <td style="width: 15%"></td>
    </tr>
</table>




</body>
			

</html>