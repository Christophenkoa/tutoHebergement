<?php 
$info = array(
    'name' => 'Nkoa' ,
    'surname' => 'Chistophe' ,
    'age' => 18
);

echo $info['name'];

echo ($info['age'] % 10 == 0) ? 'verified' : 'denied'; 

?>