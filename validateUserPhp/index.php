<?php
/*
   creare 3 chiamate GET con mail nome ed età
   verificare che nome abbia più di 3 caratteri;
   verificare che mail contenga @ e .;
   verificare che età sia un numero e non una stringa ! se questi parametri son rispettati stampare un messaggio di successo
   altrimenti stampare un messaggio di errore
*/
 
//ISTANZIO LE MIE TRE VARIABILI CHE OCNTERRANNO LE CHIMATE GET NOME EMAIL ETA'


        $nome = $_GET['name'];
        $eta =  $_GET['eta'];
        $mail = $_GET['mail'];

        if(strpos($mail,'@')==true && strpos($mail,'.')==true &&strlen($nome) >3 && is_numeric($eta)==true ){
            echo 'complimenti la mail inserita è corretta, il nome è corretto ela tua età è un numero';
        } else  {
                echo 'ops qualcosa è andato storto';
        }





?>