<?php
/**
 * In this case, we want to increase the default cost for BCRYPT to 12.
 * Note that we also switched to BCRYPT, which will always be 60 characters.
 */
$options = [
    'cost' => 8,
];

for ($x = 0; $x <= 108; $x++) {
    echo password_hash("CalvinBegins$x", PASSWORD_BCRYPT, $options);
    echo("<br>"); // new line breaks
  }


?>
