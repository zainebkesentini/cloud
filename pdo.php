<?php

            try{
                $pdo = new PDO("mysql:host=192.168.134.134;dbname=projet", 'root');
              
              }
            catch(PDOException  $e){
              print "Erreur !: " . $e->getMessage() ;
            } 
            session_start(); 
            
      ?>
