<?php 

var_dump($login_user);




?>
<h1>Change password</h1>

<form action="updatePassword" method="POST">

New password <input name="newPassword" type="text"><br>
Confirm new password <input name="confirmNewPassword" type="text"><br>
 <input name="id" value="<?= $login_user['id']?>" type="hidden"><br>
 <?php echo isset($_SESSION["error"]["newPassword"]) ? $_SESSION["error"]["newPassword"]: ""  ?>
 <?php echo isset($_SESSION["ConfirmPasswordErr"]) ? $_SESSION["ConfirmPasswordErr"]: ""  ?>
<button>Set Password</button>
</form>

<?php
unset($_SESSION['error']);
unset($_SESSION['ConfirmPasswordErr']);
unset($_SESSION['user']);
?>