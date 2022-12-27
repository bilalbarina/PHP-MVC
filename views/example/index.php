<?php
include base_path('layouts/head.php') ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<a href="create" class="btn btn-primary">Add task</a>
<table class="table">

   <thead>
    <tr>
       <th>Id</th>
       <th>Task</th>
       <th>Action</th>
    </tr>   
</thead>
   <tbody>
    <?php foreach ($tasks as  $value) {
     ?>
     <tr>
        <td><?php echo $value['id'] ?></td>
        <td><?php echo $value['Task'] ?></td>
        <td><a href="delete?id=" class="btn btn-danger">Delete</a></td>
        </tr>
   <?php } ?>
   </tbody>
   </table>
</body>
</html>