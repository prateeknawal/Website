<html></!DOCTYPE html>
<html>
<head>
	<title> Gmail Login Screen | Welcome</title>
</head>
<body>

	<div id="login_form">
	<form action="<?=site_url('Login/process')?>" method='post' name='process'>
	<h2>User login</h2>
	<br/>
	<label for='username' username></label>
	<input type="text" name="username" id='username' size='25'/><br/>

	<label for='password' password></label>
	<input type="text" name="password" id='password' size='25'/><br/>

	<input type="submit" value='signup'/>

	</form>
	</div>







</body>
</html>>