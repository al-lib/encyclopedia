<?php
  if($_GET['id']=="")
  {
  	// add new 
  } 
  else {
  	// record
  } 
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link rel="stylesheet" type="text/css" href="styles/write_form_style.css" media="screen" />
		<script type="text/javascript" src="scripts/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    theme: "modern",
    language: "ru",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "template paste"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ",
    toolbar2: "bullist numlist outdent indent | link image preview  | forecolor backcolor ",
    image_advtab: true,
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ],
});
</script>

		<title>add</title>

	</head>

	<body>
		<div id="content">
		  <form id="jform" action="record_to_html.php" method="post" enctype="multipart/form-data">
		  <fieldset>
		  		<legend>Личность</legend>
		  		<table>
					<tr>
						<td class="description_column">
							<label for="person_name">Имя: </label>
						</td>
						<td>
							<input type="text" name="person_name" id="person_name" size="40"/>
						</td>
					</tr>
					<tr>
						<td class="description_column">
							<label for="data">Информация: </label>
						</td>
						<td>
							<textarea name="data" id="data" width="100%"></textarea>
						</td>
					</tr>
				</table>

		  		<fieldset>
		  			<legend>Фотография </legend>
				  	<table>
			
						<tr>
							<td class="description_column">
								<label for="photo">&nbsp;</label>
							</td>
							<td>
								<input type="file" accept="image/*" multiple name="photo" id="photo"/>
							</td>
						</tr>
					
					
					</table>
			  	</fieldset>
			  	
			  	<p align="center">
				  		<input type="submit" id='send' value="Добавить"/> <input type="reset" value="Сбросить"/>
				</p>
		  	</fieldset>
		  </form>
		</div>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" charset="utf-8"></script>
		<?php //<script type="text/javascript" src="scripts/validate.js" charset="utf-8"></script>?>
	</body>
</html>
