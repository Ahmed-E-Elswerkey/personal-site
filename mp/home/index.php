<?php include_once '../header.php'; ?>
	<title>Music Pool | Home</title>
	<link rel="stylesheet" href="../css/home.css">
	<style>
		#sidbar a:nth-of-type(1):after{
			visibility: visible;
		}
	</style>
</head>
<body>
	<?php include_once '../sidbar.php'; ?>
	<div id='container'>
		<div id="search">
			<input type="search" placeholder='Search' name='search'>
		</div>

		<div id="last_entered">
			<p class='title'>LAST ENTERED</p>
			<div class='room'>
				<a href="../room/">
					<img src="../imgs/room.png" alt="Room Image">
					<p class='mini_title'>JAZZ</p>
				</a>
			</div>
			<div class='room'>
				<a href="../room/">
					<img src="../imgs/room.png" alt="Room Image">
					<p class='mini_title'>JAZZ</p>
				</a>
			</div>
			<div class='room'>
				<a href="../room/">
					<img src="../imgs/room.png" alt="Room Image">
					<p class='mini_title'>JAZZ</p>
				</a>
			</div>
		</div>

		<div id="popular">
			<p class="title">POPULAR ROOMS</p>
			<div class='room'>
				<a href="../room/">
					<img src="../imgs/room.png" alt="Room Image">
					<p class='mini_title'>JAZZ</p>
				</a>
			</div>
			<div class='room'>
				<a href="../room/">
					<img src="../imgs/room.png" alt="Room Image">
					<p class='mini_title'>JAZZ</p>
				</a>
			</div>
			<div class='room'>
				<a href="../room/">
					<img src="../imgs/room.png" alt="Room Image">
					<p class='mini_title'>JAZZ</p>
				</a>
			</div>
		</div>

</body>
</html> 