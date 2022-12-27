<?php
include base_path('layouts/head.php') ;
?>
<html>
    
<h1>Add Task</h1>
<form action="./store" method="post" class="form-inline">
    <div class="form-group mx-sm-3 ">
    <label for="exampleInputTask" class="sr-only">Task</label>
    <input class="col-xs-3 " type="text" name="task">
    <button class="btn btn-primary mb-2">Add</button>
</div>
</form>



</html>