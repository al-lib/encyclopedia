<?php

include_once 'class/database_manager.class.php';
include_once 'class/person.class.php';
//********************************************************************************

$person_obj=new Person;
$database= new Database_manager;

$person_obj->check_name();
/**************************************************************************/


//echo "correct=".$person_obj->correct_name;
?>
<h1>Данные для внесения</h1>
<?php

echo $person_obj->correct_name."<br/>";
echo $person_obj->short_description."<br/>";
echo $person_obj->age."<br/>";
echo $person_obj->keywords."<br/>";
echo "send to   -->".$person_obj->upload_dir.$person_obj->article_filename."<br/>";
echo $person_obj->tmp_filename."<br/>";

$record_arr= array(
				'name' => $person_obj->correct_name, 
				'short_description' => $person_obj->short_description,
				'age' => $person_obj->age,
				'keywords' => $person_obj->keywords,
				'file_path' => $person_obj->upload_dir.$person_obj->article_filename
				);
echo $database->add_record();

//**************************************************************************
?>