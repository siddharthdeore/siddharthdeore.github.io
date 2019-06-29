<?php echo "Live Apps <br />";
$path = "apps"; 
$dh = opendir($path); 
$i=1; 
while (($file = readdir($dh)) !== false) { 
    echo "<ol>";
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<li>";
        echo "<a href='$path/$file'>$file</a><br />"; 
        echo "</li>";
        $i++; 
    } 
    echo "</ol>";
}
closedir($dh);
?> 