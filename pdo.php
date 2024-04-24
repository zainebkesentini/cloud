<?php

            try{
                $pdo = new PDO("mysql:host=localhost;dbname=projet", 'root');
              
              }
            catch(PDOException  $e){
              print "Erreur !: " . $e->getMessage() ;
            } 
            session_start(); 
            
      ?>
