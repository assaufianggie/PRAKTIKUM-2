<?php
function Grade($nilai_akhir) {
  if ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
    return '<b>Grade A</b>';
  }
  elseif ($nilai_akhir >= 70 && $nilai_akhir <= 84) {
    return '<b>Grade B</b>';
  }
  elseif ($nilai_akhir >= 56 && $nilai_akhir <= 69) {
    return '<b>Grade C</b>';
  }
  elseif ($nilai_akhir >= 36 && $nilai_akhir <= 55) {
    return '<b>Grade D</b>';
  }
  elseif ($nilai_akhir >= 0 && $nilai_akhir <= 35) {
    return '<b>Grade E</b>';
  }
  else {
    return '<b>Grade ?</b>';
  }
}
function Predikat($nilai_akhir) {
  switch (true) {
    case $nilai_akhir >= 85 && $nilai_akhir <= 100:
      return '<h5 class="text-success">Sangat Memuaskan</h5><br><br>';
      break;
    case $nilai_akhir >= 70 && $nilai_akhir <= 84:
      return '<h5 class="text-success">Memuaskan</h5><br><br>';
      break;
    case $nilai_akhir >= 56 && $nilai_akhir <= 69:
      return '<h5 class="text-success">Cukup</h5><br><br>';
      break;
    case $nilai_akhir >= 36 && $nilai_akhir <= 55:
      return '<h5 class="text-success">Kurang</h5><br><br>';
      break;
    case $nilai_akhir >= 0 && $nilai_akhir <= 35:
      return '<h5 class="text-success">Sangat Kurang</h5><br><br>';  
      break;
    default:
      return '<h5>Tidak Ada</h5><br><br>';
      break;
  }
}
function Kelulusan($nilai_akhir) {
  if ($nilai_akhir > 55) {
    return '<b>LULUS!</b>';
  } 
  else {
    return '<b>TIDAK LULUS!</b>';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <?php
    $proses = $_GET['proses__'];
    $nama_siswa = $_GET['nama__lengkap']; 
    $mata_kuliah = $_GET['mata__kuliah'];
    $nilai_uts = $_GET['nilai__uts'];
    $nilai_uas = $_GET['nilai__uas'];
    $nilai_tugas = $_GET['nilai__tugas'];
    $nim = $_GET['nim__'];
    $total = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
    $nilai_akhir = number_format($total, 2);

    $ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>90,'tugas'=>89];
    $ns2 = ['id'=>2,'nim'=>'01145','uts'=>100,'uas'=>90,'tugas'=>98];
    $ns3 = ['id'=>3,'nim'=>'01108','uts'=>40,'uas'=>70,'tugas'=>83];
    $ns4 = ['id'=>4,'nim'=>'01102','uts'=>90,'uas'=>93,'tugas'=>85];
    $ns5 = ['id'=>5,'nim'=> $nim,'uts'=>$nilai_uts,'uas'=>$nilai_uas,'tugas'=>$nilai_tugas];
    
    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4, $ns5];
    ?>
  <div class="container shadow p-5 mt-5" style="background-color:#F7DCB4;">
    <h3 class="text-center mb-5" style="color:#C35817;">Daftar Nilai Siswa</h3>
    <form action="nilai_siswa.php" method="GET">
      <table border="1" width="90%" class="m-auto">
        <thead class="text-center" style="color:#C35817;">
          <tr>
            <th>No</th><th>NIM</th><th>UTS</th>
            <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
          </tr>
        </thead>
        <tbody class="text-center" style="color:#C35817;">
        <?php
        $nomor = 1;
        foreach($ar_nilai as $ns) {
            echo '<tr><td>'.$nomor.'</td>';
            echo '<td>'.$ns['nim'].'</td>';
            echo '<td>'.$ns['uts'].'</td>';
            echo '<td>'.$ns['uas'].'</td>';
            echo '<td>'.$ns['tugas'].'</td>';
            $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
            echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
            echo '<tr/>';
            $nomor++;
        }
        ?>
        </tbody>
      </table>
    </form>
    
  </div>     
  <div class="container mt-5 mb-5 p-5 shadow" style="background-color:#F7DCB4;">
    <h1 class="animate__animated animate__bounce animate__infinite	infinite animate__delay-4s	4s" style="color:#C35817;">Ini HASILNYA!</h1>
      <br>
        <?php
          echo "<b>Proses :</b> $proses<br><br>";
          echo "<b>Nama :</b> $nama_siswa <br><br>";
          echo "<b>NIM :</b> $nim <br><br>";
          echo "<b>Mata Kuliah :</b> $mata_kuliah<br><br>";
          echo "<b>Nilai UTS :</b> $nilai_uts <br><br>";
          echo "<b>Nilai UAS :</b> $nilai_uas <br><br>";
          echo "<b>Nilai Tugas Praktikum :</b> $nilai_tugas <br><br>";
          echo "<b>Total :</b> $nilai_akhir <br><br>";
        // echo "<b>Proses :</b> $proses <br><br> <b>Nama :</b> $nama_siswa <br><br> <b>NIM :</b> $nim <br>
        //         <br><b>Mata Kuliah :</b> $mata_kuliah <br><br> <b>Nilai UTS :</b> $nilai_uts <br>
        //         <br><b>Nilai UAS :</b> $nilai_uas <br><br> <b>Nilai Tugas :</b> $nilai_tugas <br>";
          echo Grade($nilai_akhir)."<br><br>";
          echo Predikat($nilai_akhir);
          echo Kelulusan($nilai_akhir);
        ?>
  </div>
</body>
</html>