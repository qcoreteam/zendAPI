--TEST--
interface exists test
--FILE--
<?php

if (interface_exists("InterfaceA") && interface_exists("InterfaceB") && interface_exists("InterfaceC")) {
    echo "InterfaceA and InterfaceB and InterfaceC exists\n";
}

?>
--EXPECT--
InterfaceA and InterfaceB and InterfaceC exists
