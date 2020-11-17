<?php

require_once __DIR__.'/twig.php';

//list paket
$paket = [
            [
                'name'          => 'Bayi',
                'norm_price'    =>  19900,
                'disc_price'    =>  14900,
                'registered'    =>  938,
            ],
            [
                'name'          => 'Pelajar',
                'norm_price'    =>  46900,
                'disc_price'    =>  23450,
                'registered'    =>  4168,
            ],
            [
                'name'          => 'Personal',
                'norm_price'    =>  58900,
                'disc_price'    =>  38900,
                'registered'    =>  10017,
            ],
            [
                'name'          => 'Bisnis',
                'norm_price'    =>  109900,
                'disc_price'    =>  65900,
                'registered'    =>  3552,
            ]
        ];

echo $twig->render('header.html');
echo $twig->render('index.html', ['paket' => $paket] );
echo $twig->render('footer.html');
