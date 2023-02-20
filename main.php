#!/usr/bin/php
<?php
     echo ("1. MD5 \n2. SHA1 \n3. SHA-256 \n4. SHA-512 \n");
     echo ("Hash algoritmasın secin >> ");
     switch ( trim(fgets(STDIN,256)) ) {

          // MD5
          case "1":  
               print("hashlemek isteğiniz metini girin >> \n");
               $variable = readline("\n");
               $variable = md5($variable);
               print($variable);
               exit();

          // sha1
          case "2": 
               print("hashlemek isteğiniz metini girin >> \n");
               $variable = readline("\n");
               $variable = sha1($variable);
               print($variable);
               exit();
     
          // sha-256
          case "3": 
               print("hashlemek isteğiniz metini girin >> \n");
               $variable = readline("\n");
               $variable = hash('sha256',$variable);
               print($variable);
               exit();

          // sha512
          case "4": 
               print("hashlemek isteğiniz metini girin >> \n");
               $variable = readline("\n");
               $variable = hash('sha512',$variable);
               print($variable);
               exit();

     }     

?>