<?php include_once './header.php'; ?>
	<title>Music Pool</title>
	<link rel="stylesheet" href="./css/sign.css">
	<style>
		<?php 
			if(isset($_REQUEST['r']))
				if($_REQUEST['r'] == "sign-up")
					echo '#sign_up{
							display:inline-block !important;
						  }
						  #sign_in{
						  	display:none !important;
						  }
					';
		 ?>
	</style>
</head>
<body>
	<div id='navbar'>
		<img draggable='false' src="./imgs/logo.png" alt="Music pool">
	</div>

	<div id='sign'>

		<form action="#" id='sign_in'>
			<label>USERNAME</label> <input type="text">
			<label>PASSWORD</label> <input type="password">
			<div id='buttons'>
				<input type="submit" value='SIGNIN'>
				<a href='?r=sign-up'>SIGNUP</a>
			</div>
		</form>
	
		<form action="#" id='sign_up'>
			<label>USERNAME</label> <input type="text">
			<label>E-mail</label> <input type="email">
			<label>PASSWORD</label> <input type="password">
			<div id="line"></div>
			<input id='terms' type="checkbox"> <label for="terms">I accept all terms</label>
			<input type="submit" value='SIGNUP'>
		</form>

	</div>
	
</body>
</html>