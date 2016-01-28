<?php
/*	Date & Time Example
	by. Tianchan Studio
	Materi-IT.com		*/
	
  date_default_timezone_set("Asia/Jakarta");
  $NowDate = date("Y-m-d");
  echo "Now Date : ".$NowDate."<br>";
  $Now = strtotime(date("Y-m-d"));
  $Date = date('Y-m-d', strtotime('-4 year -8 month +5 day', $Now));
  echo " - 4 Year - 8 Month + 5 Day : ".$Date."<br /><br />";
?>
  
<?php
  date_default_timezone_set("Asia/Jakarta");
  $NowTime = date("H:i");
  echo "Now Time : ".$NowTime."<br>";
  $Hours = strtotime(date("H:i"));
  $Time = date('H:i', strtotime('+3 hour', $Hours));
  echo " + 3 Hour : ".$Time."<br>";
?>