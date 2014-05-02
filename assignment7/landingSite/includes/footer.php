
<? 
$Todays_Date=strftime("%x");
$Todays_Month=strftime("%B");
$Todays_Day=strftime("%e");
$Todays_Year=strftime("%G");
$Todays_Time=strftime("%r");
$Current_Time=strftime("%X");
$Todays_Hour=strftime("%I");
$Todays_Minute=strftime("%M");
$Todays_Second=strftime("%S");
$Today_xm=strftime("%p");
echo "<p class = 'foot'> Matt Wolf </p>" ."<p class = 'foot'>Today is " . $Todays_Month . " " . $Todays_Day . ", " . $Todays_Year . " at " . $Todays_Hour.":". $Todays_Minute . $Today_xm . "</p>";
?>
<p><a href = "https://www.uvm.edu/~mhwolf/cs148/assign3/main.php">Home</a></p>
</body>
</html>