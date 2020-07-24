<?php 

require_once 'actions/db_connect.php';

if(isset($_GET['id'])) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM library WHERE ISBN = {$id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();}

?>

<!DOCTYPE html>
<html>
<head>
   <title >Big Library</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 20px;
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

<fieldset>
   <legend>Update user</legend>

   <form action="actions/a_update.php"  method="post">
   <input type="hidden"  name="id" value="<?php echo $data['ISBN'] ?>"/>
       <table class="table table-dark" cellspacing="0" cellpadding= "0">
           <tr>
               <th>Publisher Name</th>
               <td><input type="text"  name="publisher_name" placeholder ="Publisher Name" value="<?php echo $data['publisher_name'] ?>"/></td>
           </tr>    
           <tr>
               <th>Publisher adress</th>
               <td><input type= "text" name="publisher_adress"  placeholder="Publisher sdress" value ="<?php echo $data['publisher_adress'] ?>"/></td >
           </tr>
           <tr>
               <th>Publish</th>
               <td><input type ="text" name= "publish" placeholder= "Publish" value= "<?php echo $data['publish'] ?>"/></td>
           </tr>
           <tr>
               <th>Publisher Size</th>
               <td><input type ="text" name= "publisher_size" placeholder= "Publisher Size" value= "<?php echo $data['publisher_size'] ?>"/></td>
           </tr>
           <tr>
               <th>Artist</th>
               <td><input type ="text" name= "artist" placeholder= "Artist" value= "<?php echo $data['artist'] ?>"/></td>
           </tr>
           <tr>
               <th>Description</th>
               <td><input type ="text" name= "description" placeholder= "Description" value= "<?php echo $data['description'] ?>"/></td>
           </tr>
           <tr>
               <th>Teaser</th>
               <td><input type ="text" name= "teaser" placeholder= "Teaser" value= "<?php echo $data['teaser'] ?>"/></td>
           </tr>
           <tr>
               <th>Type</th>
               <td><input type ="text" name= "type" placeholder= "Type" value= "<?php echo $data['type'] ?>"/></td>
           </tr>
           <tr>
               <th>Active</th>
               <td><input type ="text" name= "active" placeholder= "Active" value= "<?php echo $data['active'] ?>"/></td>
           </tr>
           <tr>
               <th>Name</th>
               <td><input type ="text" name= "name" placeholder= "Name" value= "<?php echo $data['name'] ?>"/></td>
           </tr>


           <tr>
              
               <td><button type="button" class="btn btn-success" type= "submit">Save Changes</button ></td>
               <td><a  href= "index.php"><button  type="button" class="btn btn-success" >Back</button ></a ></td >
           </tr>
       </table>
   </form >

</fieldset >

</body >
</html >

