<?php

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__, 2));
$dotenv->load();
$dotenv->required('ENV')->allowedValues(['developer', 'production', 'homologue']);

