<?php 

require_once 'actions/db_connect.php';

if  (isset($_GET['id'])) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM library WHERE ISBN = {$id}";
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();

   $connect->close();}


?>

<!DOCTYPE html>
<html>
<head>

   <title >Big Library</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <style type ="text/css">
       .manageMedia {
           width : 50%;
           margin: auto;
       }


       .jumbotron {
            background-image: url("images/BL.jpg");
            background-size: cover;
            height: 30vw;
       }

       body{
          background-color:lightgrey;
       }

   </style>

</head>
<body>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
  </div>
</div>

<h3>Do you really want to delete this media?</h3>
<form action ="actions/a_delete.php" method="post">

   <input type="hidden" name= "id" value="<?php echo $data['ISBN'] ?>" />
   <button type="button" class="btn btn-success" type="submit">Yes, delete it!</button >
   <a href="index.php"><button type="button"class="btn btn-success">No, go back!</button ></a>
</form>

</body>
</html>

<?php
?>