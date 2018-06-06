<?php
session_start();
 require_once 'dbh.inc.php';
 $pavadinimas = $_POST['pavadinimas'];
 $data = $_POST['data'];
 $vieta = $_POST['vieta'];
 $kategorija = $_POST['kategorija'];
 $info = $_POST['info'];
 $diff = $_POST['diff'];
 $kontaktai = $_POST['kontaktai'];
 var_dump($pavadinimas);
 if(empty($pavadinimas)||empty($data)||empty($vieta)||empty($kategorija)||empty($info)||empty($diff)||empty($kontaktai)){
     exit();
 }else {
     $sql = "SELECT * FROM events WHERE event_pavadinimas = '$pavadinimas';";
     $sql2 = "SELECT * FROM events WHERE event_pavadinimas = '$vieta';";
     $result = mysqli_query($conn, $sql);
     $result2 = mysqli_query($conn, $sql2);
     $resultCheck = mysqli_num_rows($result);
     $resultCheck2 = mysqli_num_rows($result2);
     $results = $resultCheck + $resultCheck2;
     if ($resultCheck > 1) {
         echo 'Tokios lenktynes jau egzistuoja';
         header('location : index.php');
     } else {
         $sql = "INSERT INTO events (event_pavadinimas, event_data ,
                             event_vieta , event_kategorija , 
                            event_kontaktai,event_info,event_diff) 
                          VALUES ('$pavadinimas','$data','$vieta','$kategorija','$kontaktai','$info','$diff');";
         mysqli_query($conn, $sql);
         header('location : index.php');
         exit();
        }
    }