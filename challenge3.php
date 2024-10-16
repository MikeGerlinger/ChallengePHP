<?php
$robertStevenson = [
    "treasureIsland" => "1983",
    "kidnapped" => "1986",
    "theSwing" => "1991",
];
asort ($robertStevenson);
foreach ($robertStevenson as $key => $years)
    echo "$years - " . $key . "<br>";

?>
