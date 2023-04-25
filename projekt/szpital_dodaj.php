<?php
$do_bazy = new mysqli('localhost', 'root', '', 'hurt_ele_ms');
mysqli_set_charset($do_bazy, "utf8");
if (mysqli_connect_errno()) {
  echo "Nie moge polaczyc sie z serwerem MySQL. Kod błędu:" . mysqli_connect_error();
  exit;
}

if(isset($_POST['pole']) && !empty($_POST['pole'])){
  $nowe_imie = $_POST['pole'];
  
  $sql = "INSERT INTO Ulica VALUES ('$nowe_imie')";
  
  if(mysqli_query($do_bazy, $sql)){
    echo "Dodano nowe imię pacjenta: " . $nowe_imie;
  } else{
    echo "Błąd: " . mysqli_error($do_bazy);
  }
}

mysqli_close($do_bazy);
?> 