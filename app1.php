<?php

    //echo $data .", ". $ilosc .", ". $telefon;

    $connect = @mysqli_connect('localhost', 'root', '', 'baza');
        //@ tutaj usuwa alert warning przy niepowodzeniu

    if($connect){
        //echo "Połączono z bazą";
        $data = $_POST["data"];
        $ilosc = $_POST["ilosc"];
        $telefon = $_POST["telefon"];

        $query = mysqli_query($connect, "INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) VALUES ('$data', $ilosc, '$telefon')");

        if($query){
            mysqli_close($connect);
            echo "Pomyślnie dodano rezerwację do bazy";
        } else{
            echo "Nie dodano rezerwacji";
        }
    } else{
        echo "Nie ma połączenia";
    }


    //INSERT INTO rezerwacje (nr_stolika, data_rez, liczba_osob, telefon) VALUES (1, '2017-07-04', 4, '111222333');
?>