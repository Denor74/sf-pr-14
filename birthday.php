<?php
$birthday = '25.04.1994';

$bd = explode('.', $birthday);
$bd = mktime(0, 0, 0, $bd[1], $bd[0], date('Y') + ($bd[1].$bd[0] <= date('md')));
$days_until = ceil(($bd - time()) / 86400);
echo $bd . PHP_EOL;
echo $days_until;
?>