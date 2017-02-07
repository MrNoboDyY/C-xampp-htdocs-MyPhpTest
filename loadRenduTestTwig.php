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

        $loader = new Twig_Loader_Filesystem('templates');
        $twig = new Twig_Environment($loader, array(
            'cache' => false,
        ));

        $template = $twig->load('renduTestTwig.twig');

        $data = array('fruits' => array(
                array('name' => 'Papaye', 'couleur' => 'yellow'
                ),
                array('name' => 'Orange', 'couleur' => 'orange'
                ),
                array('name' => 'Fraise', 'couleur' => 'red'
                )
        ));
        echo $template->render($data);
        
        ?>

        
    </body>
</html>
