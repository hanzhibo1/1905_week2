<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <h1>登录页面</h1>
<form action="{{ url('login/login_do') }}" method="post">
		<fieldset>
			<legend>用户登录</legend>
			<ul>
				<li>
					<label>用户名:</label>
					<input type="text" name="name">
				</li>
				<li>
					<label>密   码:</label>
					<input type="password" name="pwd">
				</li>
				<li>
					<label> </label>
					<input type="submit" name="login" value="登录">
				</li>
			</ul>
		</fieldset>
	</form>
</body>
</html>