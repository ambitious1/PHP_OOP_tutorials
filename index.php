<?php
require 'Foo.php';

require 'Bar.php';

$foo = new Bar();

echo $foo->baz();
?>