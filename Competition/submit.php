<?php
include("dbconnect.php");
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$contact=$_REQUEST['contact'];
$title=$_REQUEST['title'];
$description=$_REQUEST['description'];
$year=$_REQUEST['year'];
$gender=$_REQUEST['gender'];
$fromdate=$_REQUEST['fromdate'];
$todate=$_REQUEST['todate'];
$people=$_REQUEST['people'];


$query=mysqli_query($db_connect,"INSERT INTO symbols(name,email,contact,title,description,year,gender,fromdate,todate,people) VALUES('$name','$email','$contact','$title','$description','$year','$gender','$fromdate','$todate','$people')");

if(!$query) 
        { echo "<script type='text/javascript'>alert('Error in Submission! Try Again ');

  window.location = 'upload_new.php';

</script>";}
    else
    {
        echo "<script type='text/javascript'>alert('Succesfully Submitted! ');

  window.location = 'upload_new.php';

</script>";

    }


mysqli_close($db_connect);


?>

