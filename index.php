<?php
include('./db_connect.php');
if(isset($_POST['delete']))
{
  $value=$_POST['delete'];
  $sql = "DELETE from todu where Id=$value";

  $query_run = mysqli_query($conn,$sql);  
}
if(isset($_POST['add']))
{
  
  $value = $_POST['title'];
  $sql = "INSERT INTO todu (`title`) VALUES ('$value')";
  $query_run = mysqli_query($conn,$sql); 
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TODU</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
  
     </head>
  <body>
    <div class="add-button">
        <form action="" method="POST">
                <label for="">Add Task</label>
                <input type="text" name="title" class="form-control" placeholder="Enter your todu here">
                <button class="btn btn-success" type="submit" name="add">Add</button>
        </form>
    </div>
    <div class="main">
             <!-- <div class="topic">
               <h1>Todo List</h1>
             </div>
             <div class="forTable">
             <table class="table"> -->
  <table class="table table-dark">
  <thead>
    <tr>
      
      <th scope="col">Id</th>
      <th scope="col">Title</th>
    </tr>
  </thead>
  
 
  <tbody>
    <?php
    // $i=1;
    $sql= "SELECT * from todu";
    $query_run = mysqli_query($conn,$sql);
    foreach($query_run as $value)
    {

    ?>
    <tr>
      
      <td><?= $value['id']?></td> 
      <td><?= $value['title']?></td>
      <td><a href="edit.php?id=<?=$value['id'];?>" class="btn btn-warning">Edit</a></td>
      <td>
         <form action="" method="POST">
        <button class="btn btn-danger" name="delete" value="<?=$value['id'];?>" >Delete</button></td>
        <form>
    </tr>
     <?php
    }
    ?>
</tbody>
</table>
             
    </div>
    </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>