<html>
<?php 
var_dump($tasks);
?>
<h1>Add Task</h1>
<form action="./store" method="post">
Task<input type="text" value="<?php echo $tasks['Task'] ?>"  name="task">
<button>add</button>

</form>



</html>