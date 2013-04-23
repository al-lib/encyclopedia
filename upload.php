<?php

include_once 'class/database_manager.class.php';
include_once 'class/person.class.php';
//********************************************************************************

$person_obj=new Person;

$person_obj->check_name();
/**************************************************************************/


echo "correct=".$person_obj->correct_name;
?>
<h1>Данные для внесения</h1>
<?php


?>