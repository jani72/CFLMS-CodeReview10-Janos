<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
   <title>PHP CRUD</title>

   <style type ="text/css">
       .manageUser {
           width : 50%;
           margin: auto;
       }

        table {
           width: 100%;
            margin-top: 20px;
       }

   </style>

</head>
<body>

<div class ="manageUser">
   <a href= "create.php"><button type="button" >Add User</button></a>
   <table  border="1" cellspacing= "0" cellpadding="0">
       <thead>
           <tr>
               <th>Teaser</th>
               <th >Artist</th>
               <th >Name</th>
               <th >Publisher Name</th>
               <th >Publish</th>
               <th >Type</th>
               <th >Description</th>
           </tr>
       </thead>
       <tbody>
           
       </tbody>
   </table>
</div>

</body>
</html>