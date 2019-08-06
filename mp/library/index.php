<?php include_once '../header.php'; ?>
	<title>Music Pool | Home</title>
	<link rel="stylesheet" href="../css/home.css">
	<link rel="stylesheet" href="../css/lib.css">
	<style>
		#sidbar a:nth-of-type(2):after{
			visibility: visible;
		}

		#genres_modes:before{
			content: '';
		    display: block;
		    width: 100%;
		    height: 4px;
		    background: linear-gradient(to left,#ffffff00,white,#ffffff00);
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

		<div id="genres_modes">
			<p class='title'>GENRES & MOODS</p>
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

		<button id='more' title='Show more rooms'>
			<img src="../imgs/more.png" alt="show more rooms">
		</button>

	</div>




</body>
</html> 