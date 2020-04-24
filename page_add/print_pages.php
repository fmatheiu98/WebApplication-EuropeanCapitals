<?php

$db = mysqli_connect('localhost', 'root', '', 'users');
mysqli_select_db($db,'users');

$query = "SELECT * FROM pagini";
$res = mysqli_query($db,$query);

echo "<ul>";
while($row = mysqli_fetch_assoc($res))
{
    
    echo "<li><a href='".$row['page_name'].".php"."' > ".$row['page_name']."</a></li>";
}

echo "</ul>";
?>