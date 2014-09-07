<?php

if ($handle = opendir('../userfiles/')) {
    while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != "..") {
          
$stat = stat('../userfiles/'.$file.'').'<li><a href="userfiles/'.$file.'">'.$file.'</a>  </li>';  }
    }
    closedir($handle);
  }


echo 'size: ' . $stat['size'];