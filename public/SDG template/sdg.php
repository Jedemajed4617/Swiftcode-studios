<?php
require('db_conn.php');
$sql = 'SELECT * FROM featured ORDER BY ID';
$result = $conn->query($sql);

while ($sdg = mysqli_fetch_assoc($result)) {
    echo '<a href="template_ying.php?id=' . $sdg['ID'] . '">';
    echo '  <img src="' . $sdg['IMG'] . '" alt="' . $sdg['TITTLE'] . '">';
    echo '  <p class="text-style"> ' . $sdg['INFOTEXT'] . '</p>';
    echo '</a>';
}