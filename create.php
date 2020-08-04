<!DOCTYPE html>
<html>
<head>
   <title>Big Library</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <style type= "text/css">
       fieldset {
           margin: auto;
            margin-top: 100px;
           width: 50% ;
       }

       table tr th  {
           padding-top: 20px;
       }

       .jumbotron {
            background-image: url("images/BL.jpg");
            background-size: cover;
            height: 30vw;
       }

       body{
           background-color: lightgrey;
       }

   </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Jürgens Library</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
    </div>
  </div>
  <a href= "#"><button type="button" class="btn btn-success" >Add Media</button></a>
</nav>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
  </div>
</div>


<fieldset >
   <legend>Add Media</legend>

   <form  action="actions/a_create.php" method= "post">
       <table class="table table-dark" cellspacing= "0" cellpadding="0">
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
               <td><button type="submit" class="btn btn-success">Insert media</button></td>
               <td ><a href= "index.php"><button  type="button" class="btn btn-success">Back</button></a></td>
           </tr >
       </table>
   </form>

</fieldset >

</body>
</html>