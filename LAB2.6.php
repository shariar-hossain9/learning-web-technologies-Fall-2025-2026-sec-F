<?php
$numbers = array(104, 204, 304, 404, 504);
$search = 403;
for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $search) {
        $found = true;
    }
}
if ($found) {
    echo "Element $search Found in the Array.";
} else {
    echo "Element $search Not found in the Array.";
}
?>