<?php

require_once 'requires.php';

function hello()
{
    return !world(true);
}

function world($is_hello = null)
{
    if ($is_hello = true)
        return $is_hello;
    else
        return [];
}


function sayHello()
{
    echo "Hello World";
}

$HELLO_OBJ = new HelloX();

switch (true)
{
    case hello(): echo $HELLO_OBJ->sayHello(11, false);
    case world(): echo $HELLO_OBJ->sayHello(16, true);
}


//echo "Hello world";
