<?php

$results = 0;
   if($_GET["mada"] === "antananarivo"){
     $results = $results + 1;
   } else {
     $results = $results;
   }
   if($_GET["namb"] === "windhoek"){
     $results = $results + 1;
   } else {
     $results = $results;
   }
   if($_GET["kirg"] === "bichkek"){
     $results = $results + 1;
   } else {
     $results = $results;
   }
   if($_GET["puer"] === "sanJuan"){
     $results = $results + 1;
   } else {
     $results = $results;
   }
   if($_GET["nica"] === "anagua"){
     $results = $results + 1;
   } else {
     $results = $results;
   }
   if($_GET["kong"] === "hongKong"){
     $results = $results + 1;
   } else {
     $results = $results;
   }
   if($_GET["cana"] === "ottawa"){
     $results = $results + 1;
   } else {
     $results = $results;
   }
   if($_GET["grie"] === "budapest"){
     $results = $results + 1;
   } else {
     $results = $results;
   }
   if($_GET["maro"] === "rabat"){
     $results = $results + 1;
   } else {
     $results = $results;
   }
   if($_GET["lett"] === "riga"){
     $results = $results + 1;
   } else {
     $results = $results;
   }




echo "You've got " . $results . " correct answer(s).";
