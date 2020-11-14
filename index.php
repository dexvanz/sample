<?php require "database.php";?>
<!DOCTYP HTML>
<html>
	<head>
		<title>My Simple Google</title>
		<style>
			#form {
				margin: 100px auto;
				width: 600px;
			}
			#form #logo {
				font-size: 35px;
				font-weight: bold;
				padding:20px 0px 20px 0px;
				text-align: center;
			}

			#form #q {
				padding:10px;
				border:1px solid #dddddd;
			}
		</style>
	</head>
	<body>
		<div id='wrapper'>			
			<div id='form'>
				<div id='logo'>
					My Search Engine
				</div>
				<div id='form-input'>
					<form method='get' action='search.php'>
						<input type='text' id='q' name='q' style="width:100%" placeholder='Ketik Kata Kunci...'/>
					</form>
				</div>
			</div>
		</div>
	</body>	
</html>