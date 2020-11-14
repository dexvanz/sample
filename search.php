<?php require "database.php";?>
<?php if(!$_GET['q']) header('location: index.php');?>
<!DOCTYP HTML>
<html>
	<head>
		<title>My Simple Google</title>
		<style>
			#wrapper {
				padding:20px;
			}
			#form {				
				width: 600px;
			}
			#form #logo {
				font-size: 25px;
				font-weight: bold;
				padding:20px 0px 20px 0px;
				text-align: left;
			}
			#logo a {
				color: #111;
				text-decoration: none;
			}

			#form #q {
				padding:10px;
				border:1px solid #dddddd;
			}

			.item {
				padding:10px 0px 10px 0px;
				border-bottom: 1px solid #eeeeee;
			}
			.item .title {
				color: #000be0;
			}
			.item .link {
				color: #00a65a;
			}
			.item .description {
				color:#333333;
			}
		</style>
	</head>
	<body>
		<div id='wrapper'>			
			<div id='form'>
				<div id='logo'>
					<a href='index.php'>My Search Engine</a>
				</div>
				<div id='form-input'>
					<form method='get' action='search.php'>
						<input type='text' id='q' name='q' value='<?php echo $_GET['q']?>' placeholder='Ketik Kata Kunci...' style="width:100%" />
					</form>
				</div>
			</div>		

			<div id='result'>
			<?php 
				$q = $_GET['q'];
				$query = "select * from contents where title like '%".$q."%' limit 10";
				$query_exec = mysqli_query($con,$query);
				while($row = mysqli_fetch_array($query_exec)):
			?>	
				<div class='item'>
					<div class='title'><?php echo $row['title']?></div>
					<div class='description'><?php echo $row['description'];?></div>
					<div class='link'><?php echo $row['url'];?></div>
				</div>
			<?php 
				endwhile;
			?>	
			</div>
		</div>
	</body>	
</html>