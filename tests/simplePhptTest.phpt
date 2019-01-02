--TEST--
convert_char_kind() -- basic test for convert_char_kind()
--FILE--
<?php
require __DIR__ . '/../simpleTest.php';

var_dump(simpleText('TEST'));
var_dump(simpleText('ERROR'));

?>
--EXPECT--
string(4) "TEST"
string(4) "TEST"