<?php

$firstname = $_POST['fn'];
$lastname = $_POST['ln'];
$image = $_POST['image_upload'];
$appName = $_POST['appname'];


//connection variables
$host="127.0.0.1";
$port=3306;
$socket="";
$user="will_macomber";
$password="";
$dbname="niceguys";


//attempt connection
$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();

//connect to the appropriate database
mysql_select_db("niceguys", $con);

//upload the content
$SQL = "INSER INTO images (image, AppName, firstn, lastn) VALUES ($image, $appName, $firstname, $lastname)";

//error catch
if (!mysql_query($SQL, $con))
    {
        die("Error: " . mysql_error());
    }

//let the user know their information was uploaded
echo "Your account has been created";

//end the database connection so somebody doesn't backdoor it
mysql_close($connect);

?>