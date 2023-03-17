<?php
$a = 1;
$b = 2;
function somme() {
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
} // NOK {{Prefer local variables to globals}}
somme();
echo $b;

function somme2() {
    global $a, $b;
    $b = $a + $b;
} // NOK {{Prefer local variables to globals}}
somme2();
echo $b;
?>
