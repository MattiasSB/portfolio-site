<?php 

@require_once(__DIR__ . "/../init.php");

$bottleShooter = new cardInfo([
    'source' => '',
    'title' => 'bottle shotting web based game project project information',
    'alt' => 'Monitor displaying Bottle Shooter web game',
    'projectName' => 'BottleShooter',
    'projectType' => ' HTML Game',
    'imageSource' => '/project-bottleshooter.jpg',
    'height' => '400',
    'width' => '400'
]);

$dash = new cardInfo([
    'source' => '',
    'title' => 'responsive website project information',
    'alt' => 'Monitor displaying DASH website',
    'projectName' => 'DASH',
    'projectType' => ' Responsive Website',
    'imageSource' => '/project-dash.jpg',
    'height' => '400',
    'width' => '400'
]);

$botanical = new cardInfo([
    'source' => '',
    'title' => 'mobile app prototype project information',
    'alt' => 'Phone displaying Botanical prototype',
    'projectName' => 'Botanical',
    'projectType' => ' Mobile Prototype',
    'imageSource' => '/project-botanical.jpg',
    'height' => '400',
    'width' => '500'
]);

$homeScroll = [
    $bottleShooter, $botanical, $dash
];

?>