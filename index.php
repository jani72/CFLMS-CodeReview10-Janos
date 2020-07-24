<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
   <title>Big Library</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <style type ="text/css">
       .manageMedia {
           width : 50%;
           margin: auto;
       }

        table {
           width: 100%;
            margin-top: 20px;
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
<a href= "create.php"><button type="button" class="btn btn-success" >Add Media</button></a>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
  </div>
</div>

<div class ="manageUser">
   <table class="table table-dark" border="1" cellspacing= "0" cellpadding="0">
       <thead>
           <tr>
               <th>Teaser</th>
               <th>Artist</th>
               <th>Name</th>
               <th>Publisher Name</th>
               <th>Publish</th>
               <th>Type</th>
               <th>Description</th>
               <th>Actions</th>
           </tr>
       </thead>
       <tbody>
       <?php
           $sql = "SELECT * FROM library WHERE active = 0";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>".$row['teaser']."</td>
                       <td>".$row['artist' ]."</td>
                       <td>".$row['name']."</td>
                       <td>".$row['publisher_name']."</td>
                       <td>".$row['publish']."</td>
                       <td>".$row['type']."</td>
                       <td>".$row['description']."</td>
                       <td>
                           <a href='update.php?id=" .$row['ISBN']."'><button type='button' class='btn btn-success'>Edit</button></a>
                           <a href='delete.php?id=" .$row['ISBN']."'><button type='button' class='btn btn-success'>Delete</button></a>
                       </td>
                       <td>
                       </td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>
       </tbody>
   </table>
</div>

</body>
</html>