<?php
 require("class/Autoloader.php");
 Autoloader::register();
 $connect=Database::connect();
 $objet=new EtudiantService($connect);
?>
 <?php
 include "menu.php";
 ?>
 
    <h1><strong>LOGES<strong></h1> 
    <table  class="table">
        <thead class="thead-dark">
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Date Naissance</th>
            <th>Telephone</th>
            <th>Email</th>
        </thead>
        <tbody>
        <?php
                foreach($objet->findAllloge() as $val){
                    echo'<tr>';
                    echo'<td>'.$val['matricule'].'</td>';
                    echo'<td>'.$val['nom'].'</td>';
                    echo'<td>'.$val['prenom'].'</td>';
                    echo'<td>'.$val['date_naiss'].'</td>';
                    echo'<td>'.$val['telephone'].'</td>';
                    echo'<td>'.$val['email'].'</td>';
                    echo'</tr>';
                }
            ?>
        </tbody>
    </table>