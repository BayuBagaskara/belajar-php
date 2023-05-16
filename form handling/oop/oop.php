<?php

class OOP
{
public function publicMethod()
{
echo "omo adalah OOp <etode Public";
}

protected function protectedMethod()
{
echo "Ini adalah OOP Metode Protected";
}

private function privateMethod()
{
echo "Ini adalah OOP Metode private";
}

public function AccessMethodOOP()
{
$this->publicMethod();
echo "<br>";
$this->protectedMethod();
echo "<br>";
$this->privateMethod();
}

}

$oop = New OOP();
$oop->publicMethod();
echo "<br>";
$oop->accessMethodOOP();
