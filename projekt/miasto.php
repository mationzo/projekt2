<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<style>
        

    body {
         margin: 0;
         padding: 0;
         background-color: #939393;
         

        }

		li a {
		  display: block;
		  color: #000;
		  padding: 8px 16px;
		  text-decoration: none;
          font-size: 24px;
		}

		li a.active {
		  background-color: #545454;
		  color: white;
		}

		li a:hover:not(.active) {
		  background-color: #555;
		  color: white;
		}

		.tt {
            position: relative;
			margin-top: 25px;
			margin-left: 25px;
		}
		table, tr, td{
			border: 2px solid;
			border-collapse: collapse;
            padding: 3px;
            font-size: 28px;
            width: 12%;
		}
		th {
			background-color: #545454;
			color: white;
		}

        ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #696969;
        position: fixed;
        height: 36%;
        overflow: auto;
        padding-left: 0px;
        top: 0;
        left: 0;
        }

        .menu1 {

            position: static;
            
            font-size:24px;
            background: yellow;
            border: solid black 2px;
            height:50px;
            text-align: center;
            width:12.28%;
            float:left;
        }
        .menu2 {
            position: static;
            font-size:24px;
            background: yellow;
            border: solid black 2px;
            height:50px;
            text-align: center;
            width:12.29%;
            float:left;
        }
        .menu3 {
            position: static;
            font-size:24px;
            background: yellow;
            border: solid black 2px;
            height:50px;
            text-align: center;
            width:12.29%;
            float:left;
        }
        .menu4 {
            position: static;
            font-size:24px;
            background: yellow;
            border: solid black 2px;
            height:50px;
            text-align: center;
            width:12.29%;
            float:left;
        }
        .menu5 {
            position: static;
            font-size:24px;
            background: yellow;
            border: solid black 2px;
            height:50px;
            text-align: center;
            width:12.29%;
            float:left;
        }
        .menu6 {
            position: static;
            font-size:24px;
            background: yellow;
            border: solid black 2px;
            height:50px;
            text-align: center;
            width:12.29%;
            float:left;
        }.menu7 {
            position: static;
            font-size:24px;
            background: yellow;
            border: solid black 2px;
            height:50px;
            text-align: center;
            width:12.30%;
            float:left;
        }
        .menu8 {
            position: static;
            font-size:24px;
            background: yellow;
            border: solid black 2px;
            height:50px;
            text-align: center;
            width:12.30%;
            float:left;
        }

        a {
            color: black;
            text-decoration: none;
        }

        .pusty {
            height: 55px;
            width: 100%
        }

	</style>
</head>
<body>
	


        <a href="menu.php" class="menu1">Strona Główna</a>
        <a href="imiona.php"class="menu2">Imiona</a>
		<a href="nazwiska.php"class="menu3">Nazwiska</a>
        <a href="klient.php"class="menu4">Klient</a>
        <a href="miasto.php"class="menu5">Miasto</a>
        <a href="ulice.php"class="menu6">Ulice</a>
        <a href="kod pocztowy.php"class="menu7">Kod pocztowy</a>
		<a href="faktura_vat.php"class="menu8">Faktura_vat</a>

        <div class="pusty"></div>

		<!-- <li><a href="nazwy firm.php">nazwy firm</a></li>
		<li><a href="nazwy towarow.php">nazwy towarów</a></li>
		<li><a href="pozycja faktury.php">pozycja faktury</a></li>
		<li><a href="rodzaje towaru.php">rodzaje towaru</a></li>
		<li><a href="towar.php">towar</a></li>
		<li><a href="vat.php">vat</a></li> -->
        <?php
$do_bazy = new mysqli('localhost', 'root', '', 'hurt_ele_ms');
mysqli_set_charset($do_bazy, "utf8");
if (mysqli_connect_errno()) {
  echo "Nie moge polaczyc sie z serwerem MySQL. Kod błędu:" . mysqli_connect_error();
  exit;
}

if ($result = mysqli_query($do_bazy, 'SELECT * FROM miasto')) {
  echo "<div class='tt'>";
  echo "<table>";
  echo "<tr><th>ID</th><th>Imię</th></tr></div>";

  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row['ID_m'] . "</td><td>" . $row['Nazwa'] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "Brak danych do wyświetlenia";
}
mysqli_close($do_bazy);
?>


</body>
</html>