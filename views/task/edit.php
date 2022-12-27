<?php 
include base_path('layouts/head.php') ;
?>
<html>
<?php 
?>
<h1>Add Task</h1>
<form action="./update" method="post"  class="form-inline">
    <div class="form-group mx-sm-3 ">
Task<input class="col-xs-3 " type="text" value="<?php echo $tasks['Task'] ?>"  name="name">
<input type="hidden" value="<?php echo $tasks['id'] ?>"  name="id">
<button class="btn btn-primary mb-2">update</button>
</div>
</form>



</html>