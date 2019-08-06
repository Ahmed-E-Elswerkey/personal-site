<?php include_once '../header.php'; ?>
	<title>Music Pool | Home</title>
	<link rel="stylesheet" href="../css/home.css">
	<style>
		#sidbar a:nth-of-type(3):after{
			visibility: visible;
		}
		#more{
			border: 0;
		    background: transparent;
		}
		#more:hover{
			cursor:pointer;
		}
		#more img{
			width:1.5rem;
		}
	</style>
</head>
<body>
	<?php include_once '../sidbar.php'; ?>
	<div id='container'>

		<div id="search">
			<input type="search" placeholder='Search' name='search'>
		</div>

		<div>
			<div class='room soundcloud'>
				<a href="../room/">
					<img src="../imgs/room.png" alt="Room Image">
					<p class='mini_title'>JAZZ</p>
				</a>
			</div>
			<div class='room spotify'>
				<a href="../room/">
					<img src="../imgs/room.png" alt="Room Image">
					<p class='mini_title'>JAZZ</p>
				</a>
			</div>
			<div class='room anghamy'>
				<a href="../room/">
					<img src="../imgs/room.png" alt="Room Image">
					<p class='mini_title'>JAZZ</p>
				</a>
			</div>
			<div class='room youtube'>
				<a href="../room/">
					<img src="../imgs/room.png" alt="Room Image">
					<p class='mini_title'>JAZZ</p>
				</a>
			</div>
		</div>

		<button id='more' title='Show more rooms'>
			<img src="../imgs/more.png" alt="show more rooms">
		</button>

	</div>




</body>
</html> 