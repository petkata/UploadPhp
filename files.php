<?php
$pageTitle='Списък файлове';
include 'includes/header.php';
include 'includes/1.php';
echo '<a href="includes/exit.php"> ИЗХОД <br></a> ';
echo '<a href="upload.php" >Добави нов файл<br></a>';
$thelist='';
  if ($handle = opendir('userfiles')) {
    while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != "..") {
                 $thelist.= '<li><a href="userfiles/'.$file.'">'.$file.'</a>  </li>
                     <a href="del.php?file='.$file.'">ИЗТРИЙ</a> ' ;
                 
      }
    }
    closedir($handle);
  }
?>
<h1>Списък на файловете:</h1>
<ul><?php echo $thelist;?></ul>