<!DOCTYPE html>
<html>
<head>
   <title>PHP CRUD  |  Add User</title>

   <style type= "text/css">
       fieldset {
           margin: auto;
            margin-top: 100px;
           width: 50% ;
       }

       table tr th  {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset >
   <legend>Add Library</legend>

   <form  action="actions/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>Teaser</th >
               <td><input  type="text" name="Teaser"  placeholder="Teaser" /></td >
           </tr>    
           <tr>
               <th>Artist</th>
               <td><input  type="text" name= "Artist" placeholder="Artist" /></td>
           </tr>
           <tr>
               <th>Name</th>
               <td><input type="text"  name="Name" placeholder ="Name" /></td>
           </tr>
           <tr>
               <th>Publisher Name</th>
               <td><input type="text"  name="Publisher Name" placeholder ="Publisher Name" /></td>
           </tr>
           <tr>
               <th>Publish</th>
               <td><input type="text"  name="Publish" placeholder ="Publish" /></td>
           </tr>
           <tr>
               <th>Type</th>
               <td><input type="text"  name="Type" placeholder ="Type" /></td>
           </tr>
           <tr>
               <th>Description</th>
               <td><input type="text"  name="Description" placeholder ="Description" /></td>
           </tr>
 

           <tr>
               <td><button type ="submit">Insert user</button></td>
               <td ><a href= "index.php"><button  type="button">Back</button></a></td>
           </tr >
       </table>
   </form>

</fieldset >

</body>
</html>