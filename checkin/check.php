
<?php
$username = "varun";
$password = "varunraj.in@2662";
$hostname = "localhost"; 

$exno=$_POST['exno'];
$email=$_POST['email'];

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db("exousia",$dbhandle) 
  or die("Could not select examples");

$exno=str_replace("EX14","",$exno);
//execute the SQL query and return records
$result = mysql_query("SELECT * FROM attendee where id='$exno' and email='$email'");

if(mysql_num_rows($result)>0)
{
	$status= mysql_query("SELECT status FROM attendee where id='$exno' and email='$email'");
	$value = mysql_fetch_object($status);
	
	if($value->status==1)
		{
		echo 2;
	}
	else{
	mysql_query("UPDATE attendee SET status=1 where id='$exno' and email='$email' ");
	echo 1;
	}

}

else if(mysql_num_rows($result)==0){
echo 0;
}
//close the connection
mysql_close($dbhandle);
?>