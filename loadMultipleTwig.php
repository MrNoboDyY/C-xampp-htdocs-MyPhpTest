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
        <h1>Bienvenu dans votre espace</h1>
        <h2>Inscription facile</h2>        
        <form name="inscription" action="saisie.php" method="POST">
            <!--$_POST['nom']--> 
            Votre nom  <input type="text" name="nom"  />

            <!--$_POST['ville']-->
            Votre ville <input type="text" name="ville"  />

            <!--$_POST['valider']-->
            <input type="submit" value="go" name="valider" />
        </form>
        <!--        avant de valider le formulaire,structurer la condition "if"
        si le user clic sur "valider" =====>> recup du nom + recup ville
        =====>> ecrire "bjr (nom user) de la ville(ville user) .Bienvenu dans votre espace
        ajoutons la codition 
        si sa ville est "Paris",rencontre possible !!====>> if(ville user Paris) alors ===>
        ===>> ecrire 'On est plusieurs de Panam sur le site.Rencontre possible,Cool !!'
        -->

        <?php
        ///////////////////////
        //---->> Twig <<----//
        ///////////////////////
        require_once 'vendor/autoload.php';

        $loader = new Twig_Loader_Filesystem('templates');
        $twig = new Twig_Environment($loader, array(
            'cache' => false,
        ));
        
        //appel du fichier premiereTwig dans templates
        //possibilité d'en creer plusieurs...
        $template = $twig->load('premiereTwig.twig');
        $template1 = $twig->load('renduTestTwig.twig');
        
        //tableau de fruits avec renduTestTwig
        $data = array('fruits' => array(
                array('name' => 'Papaye', 'couleur' => 'yellow'
                ),
                array('name' => 'Orange', 'couleur' => 'orange'
                ),
                array('name' => 'Fraise', 'couleur' => 'red'
                )
        ));
        
        $comment = array('salaire' => '2000',
            'branche'=> 'informatique',
            'moyenne'=> 11.5,
            'nom'=>'jean',
            'age'=>19,
            'taille'=>2.10,
            'moteur_name'=>'Twig',
            'fruit_name'=>'Mangue',
            'fruit_name2'=>'Orange');
        
        echo $template->render($comment);
        echo $template1->render($data);
        
        
        
        //affichage du fichier premiereTwig
        //voir config dans premiereTwig
//        echo $template->render(array('salaire' => '2000',
//            'branche'=> 'informatique',
//            'moyenne'=> 11.5,
//            'nom'=>'jean',
//            'age'=>19,
//            'taille'=>2.10,
//            'moteur_name'=>'Twig',
//            'fruit_name'=>'Mangue',
//            'fruit_name2'=>'Orange',
//            'fruit_name3'=>'Raisin')).'<br>';
       
        
  /////////////////////////////////////////////////////////      
////////-->> Fin de Twig <<--////////////////////////////////////   
//////////////////////////////////////////////////////////////////              
        
//       dans le php on note "if(isset.....){}"       
        echo 'vos données entrées : '.'<br/>';
        if (isset($_POST['valider'])) {
            foreach ($_POST as $index=>$valeur){
                echo '- '.$index.':'.$valeur.'<br/>';
            }
            //recuperation du nom / de la ville
            $nom = $_POST['nom'];
            $ville = $_POST['ville'];
            if ($ville == 'Paris') {
                echo 'on est plusieurs de Panam sur le site.Rencontre possible cool';
            } else {
                echo'<strong>Bonjour ' . $nom . '</strong> de la ville de ' . $ville . '  Bienvenu dans votre espace! <br/>';
            }
        }
        
        $semaine = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
        //echo $semaine[3];
        foreach ($semaine as $jour){
            echo '- '.$jour.'<br/>';
        }

//        jouons avec les tableaux associatif ou pas ! Construction d'un tableau

        //on signale que adresse sera un tableau
        $adresse = array();
        
 
//        echo $adresse['rue'];
        //tableau adresse0
       $adresse0= array();
       $adresse0['nom']='Zero';
       $adresse0['prenom']='zer';
       $adresse0['num']=25;
       $adresse0['rue']='rue des roses';
       $adresse0['cp']=75001;
       $adresse0['ville']='Paris';
       
       //tableau adresse1
       $adresse1=array();
       
       $adresse1['nom']='Ain';
       $adresse1['prenom']='un';
       $adresse1['num']=36;
       $adresse1['rue']='rue des marguerites';
       $adresse1['cp']=75001;
       $adresse1['ville']='Paris';
       
       //tableau adresses2
       $adresse2=array();
       
       $adresse2['nom']='Deux';
       $adresse2['prenom']='deu';
       $adresse2['num']=57;
       $adresse2['rue']='rue des hibiscus';
       $adresse2['cp']=75001;
       $adresse2['ville']='Paris';
       
       
       //tableau adresse3
       $adresse3 = array(); 
        //on le remplit
        $adresse3 ['nom']='Trois';
        $adresse3 ['prenom']='tri';
        $adresse3 ['num'] = 43; 
        $adresse3 ['rue']  = 'rue des éléphants'; 
        $adresse3 ['cp']  = 69000;
        $adresse3 ['ville'] = 'LYON';
       
       
        //construction d'un tableau de tableaux
        $agenda=array($adresse0,$adresse1,$adresse2,$adresse3);
        
        //recuperer l'adresse totale de Indice Deux
        //$adresseDeux=$agenda[2];
        
        //recuperer le nom de famille de Indice Deux
        //$adresseDeux['nom'];
        
       //en plus condensé avec echo : 
      // echo $agenda[3]['rue'];
       
       
       //parcourir le tableaux avec "foreach" + $_POST
       foreach ($agenda as $adresse){
           foreach ($adresse as $element){
               echo '- '.$element.'   ';
           }
           echo '<br/>';
       }
       
       //avec les variables POST !!
       //pour chaque elements du tableau $_POST,
       //recuperer et affecter la valeur de l'index
       //puis recuperer et affecter la valeur associé a cet index !!!
       foreach ($_POST as $index=>$valeur){
           if ($index!='valider'){      
           echo '- '.$valeur.'<br>';
           
           }
       }
       
       //les fonctions dans la page
       //affichage des notes ,colorées en fonction de leur valeur /20                     
       //colore en rouge les notes inf à 10
       //colore en vert les notes sup à 15
       function colore($nombre){
           if ($nombre<10) {
               echo '<font color="red"><strong>'.$nombre.'</strong></font>';
           }elseif ($nombre>=15) {
               echo '<font color="green"><h1>'.$nombre.'</h1></font>';
            } else {
                echo $nombre;    
            }
       }
       //construction d'un tableau de notes
       $notes= array(2,5,7,10,11,13,15,19);
       
      
       //la function était avec $nombre
       echo 'Vos notes du trimestre sont :<br/>';
       foreach ($notes as $note){
           echo '- ';
                   colore($note);//color($note) mache aussi bien
                   echo '<br/>';
       }
       
       ///////////////////////////////////////////////////////////////////////
       ///////////////////////////////////////////////////////////////////////
       
       //function vérif parité
//       function parite($nombre){
//           //condition si le reste de la div = 0
//           if ($nombre%2==0){
//               $verdict='pair';
//           } else {
//           $verdict='impair';
//           }
//           return $verdict;
       //}
             
        ?>
        <form  action="saisie.php" method="POST">
            Entrez votre nombre <br/>
            <input type="text" name="num"  />
            <input type="submit" value="ok" name="envoyer" />           
        </form>
        
        <?php 
        include 'fonctions.php';
        //si l'utilisateur clic sur envoyer
        if (isset($_POST['envoyer'])){
            
            //recup la valeur entrée
            $nombre=$_POST['num'];
            
            //affectation de la verif dans la variable "recup"
            $recup= Functions::parite($nombre);
            
            //afficher le verdict
            
            echo "vous avez fourni" .$nombre. "comme nombre <br/>";
            echo 'ce nombre est '.$recup.'.<br/>';
        }
        
//        for($i=0;$i<=50;$i++){
//            echo 'je ne tricherai plus.' , $i .'<br/>';
//        }
        
        
        ?>
        

    </body>
</html>
