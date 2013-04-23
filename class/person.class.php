<?php
    class Person{
    	
		var $correct_name;
		var $short_description;
		
		var $article_file;
		var $upload_dir;
		var $tmp_filename;
		var $filename;
		var $safetyerror;
		
		var $age;
		var $keywords;
		
		var $SPACE;
		var $COMMA;
		
		public function __construct(){
			$this->correct_name=$_POST['person_name'];
			$this->short_description=$_POST['brief'];
			$this->age=$_POST['age'];
			$this->keywords=$_POST['keywords'];
//			$this->safety_ok=TRUE;
			$this->upload_dir="files/";
			$this->tmp_filename=$_FILES['article']['tmp_name'];
			$this->filename=$_FILES['article']['name'];
			
			
			$this->SPACE=" ";
			$this->COMMA=", ";
		}
		
		private function capitalize_first($input_string){
			$input_string=mb_convert_case($input_string, MB_CASE_TITLE,"UTF-8");
			return $input_string;
		}
		
		private function remove_multiple_spaces($input_string, $replace_with){
			$input_string=trim($input_string);
			$many_spaces_pattern="/\s+/";
			return preg_replace($many_spaces_pattern, $replace_with, $input_string);	
		}
    	
		public function check_name(){
			$this->correct_name=$this->remove_multiple_spaces($this->correct_name, $this->SPACE);
			$this->correct_name=$this->capitalize_first($this->correct_name);					
		}
		
		public function file_safety_upload($filename){
			$destination=$this->upload_dir.basename($this->filename);	
		//	if ($this->is_html($filename))
			move_uploaded_file($filename, $destination);
		}
/*
		private function is_html($filename){
				return(preg_match("/[html|htm]$/i", $filename));			
		}
*/
		public function check_short_description($short_description_value){
			
		}
		public function parse_keywords()	{
			$this->keywords=$this->remove_multiple_spaces($this->keywords, $this->COMMA);
			
		}
   }
?>