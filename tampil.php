<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

  $Uts = $_POST['uts'];
  $Uas = $_POST['uas'];
  $Quiz = $_POST['quiz'];
  $Tugas = $_POST['tugas'];
  
  //hitung nilai uts uas guiz

  $nilai_uts = $Uts * 0.2;
  $nila_uas = $Uas * 0.3;
  $nilai_quiz = $Quiz * 0.3 ;
  $nilai_tugas = $Tugas * 0.2 ;

  //penjumlahan nilai akhir 

  $nilai_akhir = $nilai_uts + $nila_uas + $nilai_quiz + $nilai_tugas;

  //grade nilai

  if($nilai_akhir>=80){
  	$grade = "A";
  }

  elseif ($nilai_akhir>=70){

    $grade = "B";  	
  }
  elseif ($nilai_akhir>=50){
  	$grade = "C";
  }
  elseif ($nilai_akhir>=40) {
  	$grade = "D";
  }
  else
  {
  	$grade = "E";
  }

  echo "<h1>Rekap nilai</h1>"
?>

<table border="2px">
  <tr>
    <td>UTS</td>
    <td>UAS</td>
    <td>Quiz</td>
    <td>TUGAS</td>
    <td>TOTAL</td>
    <td>INDEX</td>
  </tr>
  <tr>
   <td> <?php echo"$nilai_uts"?> </td>
   <td><?php echo"$nila_uas"?></td>
   <td><?php echo"$nilai_quiz"?></td>
   <td><?php echo"$nilai_tugas"?></td>
   <td><?php echo"$nilai_akhir"?></td>
   <td><?php echo"$grade"?></td>

  </table>
</body>
</html>