<?php return array(
    'root' => array(
        'name' => 'johnpbloch/wordpress',
        'pretty_version' => '6.8.1',
        'version' => '6.8.1.0',
        'reference' => null,
        'type' => 'package',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'johnpbloch/wordpress' => array(
            'pretty_version' => '6.8.1',
            'version' => '6.8.1.0',
            'reference' => null,
            'type' => 'package',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'johnpbloch/wordpress-core' => array(
            'pretty_version' => '6.8.1',
            'version' => '6.8.1.0',
            'reference' => '702c3bda87abb47ae43f90c7b8868cf0b7dff1e2',
            'type' => 'wordpress-core',
            'install_path' => __DIR__ . '/../../wordpress',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'johnpbloch/wordpress-core-installer' => array(
            'pretty_version' => '2.0.0',
            'version' => '2.0.0.0',
            'reference' => '237faae9a60a4a2e1d45dce1a5836ffa616de63e',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../johnpbloch/wordpress-core-installer',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wordpress/core-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '6.8.1',
            ),
        ),
    ),
);
