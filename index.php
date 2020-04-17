<?php
include 'Application.php';

echo 'Total objects count '. Application::$count.'<br>';
$appOne = new Application('app one');
echo 'Total objects count '. Application::$count.'<br>';
$appTwo = new Application('app two');
echo 'Total objects count '. Application::$count.'<br>';
echo $appOne.'<br>';
echo $appTwo.'<br>';

