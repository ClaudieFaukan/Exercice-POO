<?php

require ('Employe.php');

$emp = new Employe (45,'mimi');


echo($emp->getId());

echo($emp->getNom());

?>