<!DOCTYPE html>
<html>

<head>
	<title>AgroLife</title>

	<!-- <link rel="stylesheet" type="text/css" href="Styles/AgroCraft.css">	 -->
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Infant&display=swap" rel="stylesheet">

	<!-- <style>
	*{
		color: whitesmoke;
		font-family: 'Cormorant Infant', serif;
		font-size: 2rem;
	}
	body{
		background-color: rgb(54, 54, 54);
		display: flex;
		justify-content: center;
		align-items: center;
		Height:100vh;
	}
	
	a{
		color:rgb(255, 255, 255);
		text-decoration: none;
	}
	#welcome{
		font-weight: 500;
	}

	#Farmerbutton{
		background-color: rgb(0, 120, 56);
		padding:auto 30px;	
	}
	 
</style> -->

	<STYLE>

		body{
			display: flex;
			justify-content: center;
			align-items: center;
			 
		}
		*,
		*:before,
		*:after {
			box-sizing: border-box;
		}

		html {
			overflow-y: scroll;
		}

		body {
			background: #c1bdba;
			font-family: 'Titillium Web', sans-serif;
		}

		a {
			text-decoration: none;
			color: #1ab188;
			transition: .5s ease;
		}

		a:hover {
			color: #179b77;
		}

		.form {
			background: rgba(19, 35, 47, 0.9);
			padding: 40px;
			max-width: 600px;
			margin: 40px auto;
			border-radius: 4px;
			box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
		}

		.tab-group {
			list-style: none;
			padding: 0;
			margin: 0 0 40px 0;
		}

		.tab-group:after {
			content: "";
			display: table;
			clear: both;
		}

		.tab-group li a {
			display: block;
			text-decoration: none;
			padding: 15px;
			background: rgba(160, 179, 176, 0.25);
			color: #a0b3b0;
			font-size: 20px;
			float: left;
			width: 50%;
			text-align: center;
			cursor: pointer;
			transition: .5s ease;
		}

		.tab-group li a:hover {
			background: #179b77;
			color: #ffffff;
		}

		.tab-group .active a {
			background: #1ab188;
			color: #ffffff;
		}

		.tab-content>div:last-child {
			display: none;
		}

		h1 {
			text-align: center;
			color: #ffffff;
			font-weight: 300;
			margin: 0 0 40px;
		}

		label {
			position: absolute;
			transform: translateY(6px);
			left: 13px;
			color: rgba(255, 255, 255, 0.5);
			transition: all 0.25s ease;
			-webkit-backface-visibility: hidden;
			pointer-events: none;
			font-size: 22px;
		}

		label .req {
			margin: 2px;
			color: #1ab188;
		}

		label.active {
			transform: translateY(50px);
			left: 2px;
			font-size: 14px;
		}

		label.active .req {
			opacity: 0;
		}

		label.highlight {
			color: #ffffff;
		}

		input,
		textarea {
			font-size: 22px;
			display: block;
			width: 100%;
			height: 100%;
			padding: 5px 10px;
			background: none;
			background-image: none;
			border: 1px solid #a0b3b0;
			color: #ffffff;
			border-radius: 0;
			transition: border-color .25s ease, box-shadow .25s ease;
		}

		input:focus,
		textarea:focus {
			outline: 0;
			border-color: #1ab188;
		}

		textarea {
			border: 2px solid #a0b3b0;
			resize: vertical;
		}

		.field-wrap {
			position: relative;
			margin-bottom: 40px;
		}

		.top-row:after {
			content: "";
			display: table;
			clear: both;
		}

		.top-row>div {
			float: left;
			width: 48%;
			margin-right: 4%;
		}

		.top-row>div:last-child {
			margin: 0;
		}

		.button {
			border: 0;
			outline: none;
			border-radius: 0;
			padding: 15px 0;
			font-size: 2rem;
			font-weight: 600;
			text-transform: uppercase;
			letter-spacing: .1em;
			background: #1ab188;
			color: #ffffff;
			transition: all 0.5s ease;
			-webkit-appearance: none;
		}

		.button:hover,
		.button:focus {
			background: #179b77;
		}

		.button-block {
			display: block;
			width: 100%;
		}

		.forgot {
			margin-top: -20px;
			text-align: right;
		}
	</STYLE>

</head>

<body>
	
	 <!-- <div class="form">
		
				<div class="tab-content">
					<div id="signup">
						<h1>Welcome to Agrolife </h1>
						<br>
						<h1>Are You A </h1>

		
		 
		
					</div>
		
					<div id="login">
						 
					</div>
		
				</div> 
 

		<ul class="tab-group">
			 
			<li class="tab"><a href="#login" onclick="location.href='auth/FarmerLogin.php';">Farmer</a></li>
			<li class="tab"><a href="#login" onclick="location.href='auth/BuyerLogin.php';">Buyer</a></li>

			 
		</ul>

	</div>  -->
	<?php
	 @include'home2.php';
	?>


</body>

</html>