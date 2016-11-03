<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'ax-HEoP7Vs1xurSdBX0jFef16LOELa30',
        ],


         'assetManager' => [
        'bundles' => [
            'dosamigos\google\maps\MapAsset' => [
                'options' => [
                    'key' => 'AIzaSyDPKkS1Gu440jZF6D569kO_ms1HeQBR4Ec',
                    'language' => 'id',
                    'version' => '3.1.18'
                ]
            ]
        ]
    ],

    
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    // $config['bootstrap'][] = 'debug';
    // $config['modules']['debug'] = [
    //     'class' => 'yii\debug\Module',
    // ];
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
