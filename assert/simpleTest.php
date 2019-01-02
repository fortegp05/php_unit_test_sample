<?php
/**
 *
 * @author FORTEgp05
 */

require_once "../simpleTest.php";

// normal
assert('simpleText("TEST") === "TEST"');

// error
assert('simpleText("TEST") === "ERROR"');