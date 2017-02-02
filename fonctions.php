<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
       // function vérif parité
       function parite($nombre){
           //condition si le reste de la div = 0/\donc pair
           if ($nombre%2==0){
               $verdict='pair';
           } else {
           $verdict='impair';
           }
           return $verdict;
       }
       
       
        ?>
    </body>
</html>
