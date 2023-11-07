<?php 
require('db_conn.php');
$sql = 'SELECT * FROM featured';
$result = $conn->query($sql);
$image_path = array();
$cardHtml = '';

$infotext = array();

while ($row = mysqli_fetch_assoc($result)) {
    $image_path[] = $row['img'];
    $infotext[] = $row['title'];
}
echo '<li style="background: #f6bd60;"><img src="'. $image_path[0] .'" alt="'. $infotext[0].'"></li>';
for ($i=1; $i < 17; $i++) { 
    $cardHtml .= '<li style="background: #f6bd60;"><img src="'. $image_path[$i] .'" alt="'. $infotext[$i] .'"></li>';
}

echo $cardHtml;


