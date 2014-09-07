<?php
$pageTitle='Добавяне';
include 'includes/header.php';
include 'includes/1.php';
echo '<a href="includes/exit.php"> ИЗХОД <br></a> ';
echo '<a href="files.php"> Обратно към списъка <br></a>';

if(isset($_FILES['obj'])){
if(count($_FILES)>0){
    if(move_uploaded_file($_FILES['obj']['tmp_name'], 'userfiles'.DIRECTORY_SEPARATOR.$_FILES['obj']['name'])){
        echo '<h2>Файлът е качен успешно</h2>';
    }
 else {
        echo '<h2>Възникна грешка (провери размерът на файла)</h2>';    
    }
}
move_uploaded_file($_FILES['obj']['tmp_name'], 'userfiles'.DIRECTORY_SEPARATOR.$_FILES['obj']['name']);
}
?>
<form method="POST" enctype="multipart/form-data">
    <div>
        Избор на файл (до 8 MB): <input type="file" name="obj" /> 
    </div>
    <div>
        <input type="submit" value="Добави" />
    </div>
</form>
