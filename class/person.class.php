<?php
    class Person{
    	
		public function check_name($name_value){
			$name_value=trim($name_value);
			$pattern_name_value="/(^[А-я]+)(\s+)([А-я]+)(\s+)([А-я]+)$/e";
			$replacement_pattern="/(\w)(\w*)(\s)/";
			$replace_with="strtoupper('$1').'$2'.'$3'";
			
			preg_replace($pattern_name_value, $replacement, $subject);
			
		}
		
		public function file_safety($path_to_file){
			
		}
		public function check_short_description($short_description_value){
			
		}
		public function parse_keywords($keywords_value)	{
		}
   }
?>