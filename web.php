<?php
$source_code = file('https://www.geeksforgeeks.org');

foreach ($source_code as $line_number => $line) {
    echo nl2br(htmlspecialchars($line) . "\n");
}
?>
