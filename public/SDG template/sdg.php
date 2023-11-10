<?php 
require('db_conn.php');
$sql = 'SELECT * FROM featured';
$result = $conn->query($sql);
$image_path = array();
$cardtemplate = '';

$infotext = array();
$title = array();
$id = array();

while ($row = mysqli_fetch_assoc($result)) {
    $id[] = $row['ID'];
    $image_path[] = $row['IMG'];
    $title[] = $row['TITTLE'];
    $infotext[] = $row['INFOTEXT'];
}
for ($i=0; $i < 17; $i++) { 
    $cardtemplate = '<a href="template_ying.php?id=' . $id[$i] . '">';
    $cardtemplate .= '<img src="'. $image_path[$i] .'" alt="'. $title[$i] .'"><p class="text-style"> '. $infotext[$i] . '</p></li>';
    echo $cardtemplate;
}