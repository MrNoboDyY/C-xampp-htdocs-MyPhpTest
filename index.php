<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ceci est une page de test et il est <?php date('h:i:s'); ?></title>
    </head>
    <body>merci et             
        <?php
        require_once 'vendor/autoload.php';

        $loader = new Twig_Loader_Filesystem('templates');
        $twig = new Twig_Environment($loader, array(
            'cache' => false,
        ));
        $template = $twig->load('premiereTwig.twig');
        
        echo $template->render(array('salaire' => '2000',
            'branche'=> 'informatique',
            'moyenne'=> 11.5,
            'nom'=>'jean',
            'age'=>19,
            'taille'=>2.10));


        $salaire = 2000;
        $branche = 'informatique';
        $moyenne = 11.5;
        $nom = 'jean';
        $age = 19;
        $taille = 2.10;
        echo '<strong>Bonjour.</br></strong>
        Le salaire auquel j\'aspire pour bien vivre ' . $salaire . '€.<br/>
                La branche dans laquelle je travaille ou souhaite travailler : l\' ' . $branche . '</br>
                  Pour préciser:<strong>l\'informatique est la branche dans laquelle je travaille.</br></strong>  
                  La note moyenne que j\'ai obetenue au BAC :' . $moyenne . '</br>    
            Mon 2ieme nom est ' . $nom . '<br/>
                j\'ai ' . $age . '<br/>
                    je mesure ' . $taille . 'm.<br/>
                        et comme mon nom l\'indique,je suis :'
        ?>
        <br>


    </body>
</html>
