<?php include_once '../header.php'; ?>
	<title>Music pool | Settings</title>
	<link rel="stylesheet" type="text/css" href="../css/settings.css">
</head>
<body>
	
	<?php include_once '../sidbar.php'; ?>
	<div id='container'>
		<p class="title"><img src="../imgs/settings_icon.png" alt="Settings icon"> Setting</p>
		<p class='link' href='#'>NASTGRAPHY</p>
		<div id='setting'>
			<ul>

				<li>
					<div class="sl-do-bu" data-id="account">Account Settings</div>
					<div id='account'  class='slide-down'>
						<p class='div_head'>CHANGE PASSWORD</p>
						<form action="#" onsubmit='return false'>
							<label>CURRENT</label>
							<input type="password" name='old_password'>
							<label>NEW</label>
							<div class='pass_contain'>
								<input type="password" name='new_password' id='show_pass1'>
								<!-- <button class='show_botton' data-num='1'><img src="../imgs/show.png" alt="show button"></button> -->
							</div>
							<label>RETYPE</label>
							<div class='pass_contain'>
								<input type="password" name='new_password2' id='show_pass2'>
								<!-- <button class='show_button' data-num='2'><img src="../imgs/show.png" alt="show button"></button> -->
							</div>
							<input type="submit" value='Save'>
							<input type="submit" value='Cancel' class='cancel'>
						</form>
					</div>
				</li>

				<li>
					<div class="sl-do-bu" data-id="delete">Delete Account</div>
					<div id='delete' class='slide-down'>
						<form action="#">
							<input type="submit" value='DELETE'>
							<input type="submit" value='CANCEL' class='cancel'>
						</form>
					</div>
				</li>

				<li>
					<div class="sl-do-bu" data-id="invite">Invite A Friend</div>
					<div id='invite'  class='slide-down'>
						<form action="#">
							<label>YOUR LINK</label>
							<input type="text" name='invite_link'>
							<input type="submit" value='COPY'>
						</form>
					</div>
				</li>

				<li>
					<div class="sl-do-bu" data-id="about-us">About Us</div>
					<div id="about-us"  class='slide-down'>
						<p class='div_head'>HELP</p>
						<a class="link" href='mailto:support@musicpoolapp.com'>SUPPORT@MUSICPOOLAPP.COM</a>
						<p class="div_head">TERMS AND PRIVACY POLICY</p>
						<pre>
asdfoisanoicv
asdflanfdkas
ddvkjxcnvkjxcv
aklsdnlansd
knclxvlcvnknqwe
						</pre>
						<h1 id='version'>VERSION : <span>V 4.4.2</span></h1>
					</div>
				</li>

			</ul>
		</div>
	</div>
	<script src='../js/js.js'></script>
</body>
</html>