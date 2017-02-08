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
        require_once 'vendor/autoload.php';

        include 'fonctions.php';
        $loader = new Twig_Loader_Filesystem('templates');
        $twig = new Twig_Environment($loader, array(
            'cache' => false,
        ));
        
        $template = $twig->load('openClassRoomTwig.twig');
        
        // exemple "if..else" 
        $age = 15;

        if ($age <= 12) {
            echo 'Je vois que tu as moins de 12 ans,super!!!<br>'
            . 'Clic sur ce<a href="http://www.kidsgen.com/" target="_blank"> lien</a>,<br>'
            . ' il te conduira vers un Monde Féérique...';
            $autorisation_entrer = "oui";
//            echo 'Salut,tu es bien sur un site pour les enfants de ton âge.<br>'
//            . 'Tu es le bienvenu <br>';
//            
        } else {
            echo 'Tu es trop vieux pour être ici.<br>'
            . 'Clic sur ce<a href="http://mikekus.com/404"><strong>lien</strong></a>,<br>'
            . 'il te conduira vers la page que tu recherches<br>';
            $autorisation_entrer = "non";
        }
        echo "Avez-vous l'autorisation d'entrer ??<br> "
        . "La réponse est : <strong>$autorisation_entrer</strong><br>";
        
        $variable=23;
        if ($variable==23){
            echo "<strong>BRAVO !!!  </strong><br>Vous avez trouvé le nombre mystere $variable<br>";
            
        }
        
        $age=24;
        $majeur=($age>=18)?true:false;
        echo 'Vous etes majeur et bien plus encore ! <br>';
        
        //boucle "while"
        $ligne=1;
        while ($ligne<=6){
            echo "j'ai le numéro de ligne .$ligne<br><br>";
                $ligne++;
        }
        
        //enumération du tableau
        $prenoms =array('alin','marie','boris','jean','clothilde');
        foreach ($prenoms as $prenom)
            echo "mon prenom est : - $prenom.<br><br>";
        
        ///////////////////////////////////////////////////
        
        //rechercher par la position/indice
        $fruits = array('Fraise','Banane','Orange','Raisins');        
        if (in_array('Raisins', $fruits)){
            echo 'les "Raisins" se trouvent dans les fruits;<br>';
        }
        $position = array_search('Fraise', $fruits);
        echo '"Fraises" se trouve en position :' .$position.'<br>';   
        
        ////////////////////////////////////////////////////////
        
        
        //longeur d'un mot/phrase + remplacer les lettres
        $mot='salut';
        $longeur= strlen($mot);
        
        echo 'le mot "'.$mot.'" comporte '.$longeur.' lettres :<br>';
        $remplacer = str_replace('s', 'p', $mot);
        echo "'$remplacer'  pas prise..." ;
        ?>
        
        
    </body>
</html>
