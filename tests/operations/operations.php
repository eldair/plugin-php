<?php
$a++;
++$a;

+$a;
-$a;

$a + 1;
$a += 1;
$a - 1;
$a -= 1;
$a * 1;
$a *= 1;
$a / 1;
$a /= 1;
$a % 1;
$a %= 1;
$a ** 1;

$a & $b;
$a &= $b;
$a | $b;
$a |= $b;
$a ^ $b;
$a ^= $b;
~ $a;
$a << $b;
$a <<= $b;
$a >> $b;
$a >>= $b;

$a == $b;
$a === $b;
$a != $b;
$a <> $b;
$a !== $b;
$a < $b;
$a > $b;
$a <= $b;
$a >= $b;
$a <=> $b;

$a and $b;
$a or $b;
$a xor $b;
!$a;
$a && $b;
$a || $b;

$a . $b;
$a .= $b;

$a instanceof stdClass;

$output = `ls -al`;
$a = (bool) "test";

$b = &$a;

$a ?? $b;

$this->reallyLong->testPropertyName = 'a' . $someOtherTest . 'n' . $oneLastOneToMakeLineLong;

'tesssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssst' . 'test';

$someReallyReallyReallyLongBooleanVariable + $someReallyReallyReallyLongBooleanVariable;
$someReallyReallyReallyLongBooleanVariable . $someReallyReallyReallyLongBooleanVariable;
$someReallyReallyReallyLongBooleanVariable .= $someReallyReallyReallyLongBooleanVariable;
++$someReallyReallyReallyLongBooleanVariableWithReallyReallyReallyReallyReallyReallyLongName;
--$someReallyReallyReallyLongBooleanVariableWithReallyReallyReallyReallyReallyReallyLongName;
$someReallyReallyReallyLongBooleanVariableWithReallyReallyReallyReallyReallyReallyLongName++;
$someReallyReallyReallyLongBooleanVariableWithReallyReallyReallyReallyReallyReallyLongName--;
$someReallyReallyReallyLongBooleanVariable + $someReallyReallyReallyLongBooleanVariable - $someReallyReallyReallyLongBooleanVariable;

$value = isset($_POST['menu-item-dropdown']) &&
isset($_POST['menu-item-dropdown'][$menuItemDbId])
    ? 'enabled'
    : 'disabled';
