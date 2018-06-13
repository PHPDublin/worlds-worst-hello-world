<?php

class HelloTest extends \PHPUnit\Framework\TestCase
{
    public function testOutputsHelloWorld()
    {
        $output = system("cd ".__DIR__."/../ && php hello.php");

        $this->assertTrue(in_array($output, ["Hello world", "Hello world\n"]), "Expected 'Hello world', got '$output'");
    }
}
