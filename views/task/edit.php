<html>
<?php 
?>
<h1>Add Task</h1>
<form action="./update" method="post">
Task<input type="text" value="<?php echo $tasks['Task'] ?>"  name="name">
<input type="hidden" value="<?php echo $tasks['id'] ?>"  name="id">
<button>update</button>

</form>



</html>