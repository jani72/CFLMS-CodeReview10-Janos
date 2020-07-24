<?php 

require_once 'db_connect.php';

if ($_POST) {
   $pname = $_POST['publisher_name'];
   $padress = $_POST['publisher_adress'];
   $publish = $_POST[ 'publish'];
   $psize = $_POST[ 'publisher_size'];
   $artist = $_POST[ 'artist'];
   $description = $_POST[ 'description'];
   $teaser = $_POST[ 'teaser'];
   $type = $_POST[ 'type'];
   $active = $_POST[ 'active'];
   $name = $_POST[ 'name'];




   echo $id = $_POST['id'];

$sql = "UPDATE library SET publisher_name = '$pname', publisher_adress = '$padress', publish = '$publish', publisher_size = '$psize', artist = '$artist', description = '$description', teaser = '$teaser', type = '$type', active = '$type', name = '$name' WHERE ISBN = {$id}" ;
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

