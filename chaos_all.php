<meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>NOTNIV</title>
  <link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="stylesheets/base.css">
  <link rel="stylesheet" href="stylesheets/skeleton.css">
  <link rel="stylesheet" href="stylesheets/layout.css">
  <link rel="stylesheet" href="stylesheets/styles.css">
  <link rel="stylesheet" href="stylesheets/all.css">
  <link rel="stylesheet" href="stylesheets/main.css">
  <link rel="stylesheet" href="stylesheets/text.css">
  <link rel="stylesheet" href="css\bootstrap.min.css">
   <style>
	.navbar-collapse {
	  text-align:center;
	  
	}

	.navbar-nav {
	  display:inline-block;
	  float: none;
	  background-color:#292929;
      padding:0px;
	}
  </style>
 </head>
<body>

<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h3 style="color:#339933;">CHAOS</h3>
			</div>	
			<div class="col-lg-10">
				<table class="table table-condensed">
				
					<thead><tr>
						
					</tr></thead>
			
			<tbody>
			<?PHP
			/*if(!isset($_POST['jenis']) || $_POST['jenis']=="Software/Games")
				$saring = "";
			else{
				$jenis=$_POST['jenis'];
				$saring = " WHERE jenis='$jenis'";
			}*/
			mysql_connect("localhost","root","") or die(mysql_error());
			mysql_select_db("premo") or die("Database tidak ditemukan");
			$query = mysql_query("SELECT * FROM premo_oreimo ".$saring." ORDER BY kode");
			//echo "<table width=100%>";
			//echo "<tr><td colspan=7>Filter Jenis :  
			/*echo "<form method='post' action=''>
					<select name='jenis'>
					<option value='Software/Games'>Software/Games
					<option value='Software'>Software
					<option value='Games'>Games
				</select>
				<input type=submit value='Filter'>
				</form>
			</td></tr>";*/
			echo "<br><br>";
			/*echo "<tr bgcolor=#AAAAAA><th>Cover</th><th>No.ID</th><th>Nama</th><th>Jenis</th>
			<th>*****</th></tr>";*/
				while($brs = mysql_fetch_assoc($query)){
				echo "<tr><th><b>$brs[kode]</b></th></tr>
				<tr><th rowspan='2'><img width='166' heigth='260' src='data:image/jpeg;base64,".base64_encode( $brs['pic'] )."'/></th>
				<td>$brs[jpn]</td></tr>
				<tr>
				<td>$brs[eng]</td>
				</tr>";
			}
			//echo "</table>";
			?>
			<br>
			</tbody>
			</div><br>
	  </div>
</div>



<script src="js/jquery-1.11.3.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>