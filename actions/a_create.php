<?php 

require_once 'db_connect.php';

if ($_POST) {
   $teaser = $_POST['Teaser'];
   $artist = $_Post['Artist'];
   $name = $_POST['Name'];
   $pname = $_POST['Publisher_Name'];
   $publish = $_Post['Publish'];
   $type = $_POST['Type'];
   $description = $_POST['Description'];



   $sql = "INSERT INTO user (Teaser, Artist, Name, Publisher_name, Publish, Type, Description) VALUES ('$fteaser', '$artist', '$name', '$publisher_name', '$publish', '$type', '$description')";
    if($connect->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='./create.php'><button type='button'>Back</button></a>";
        echo "<a href='./index.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>