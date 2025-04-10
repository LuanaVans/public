<?php

echo '<h1>Hola Mundo</h1>';

echo 'otra cosa';

$myarray = [
    'fran',
    'richard',
    'xuan',
    'jess'
];

echo '<ul>';
foreach($myarray as $cosa){
    echo '<li>';
    echo $cosa;
    echo '</li>';
}
echo '</ul>';


include ("external_file.php");

?>