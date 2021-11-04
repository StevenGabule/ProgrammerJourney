<?php
// Valid constant names
const FOO = "something";
const FOO2 = "something else";
const FOO_BAR = "something more";

// Invalid constant names
// This is valid, but should be avoided:
// PHP may one day provide a magical constant
// that will break your script
const __FOO__ = "something";
echo __FOO__;
