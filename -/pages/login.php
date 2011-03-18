<?php include('stubs/header.php'); ?>
<form method="post">
	<input type="text" 		name="username" placeholder="username" id="username" autocapitalize="off" autocorrect="off" />
	<input type="password" 	name="password" placeholder="password" autocapitalize="off" autocorrect="off"  />
	<button>Login</button>
</form>
<script>
document.getElementById('username').focus();
</script>
<?php include('stubs/footer.php'); ?>