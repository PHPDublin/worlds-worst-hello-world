<?php

goto builder;

builder:
define('CHARS', array(
    10,32,72,87,101,108,111,114,100,119
));

for ($i = 0; $i < count(CHARS); $i++) {
    if ($i == 2)
    {
        print(chr(CHARS[$i]));
        break;
    }

}

for ($i = 0; $i < count(CHARS); $i++) {
    if ($i == 4)
    {
        print(chr(CHARS[$i]));
        break;
    }
}

for ($i = 0; $i < count(CHARS); $i++) {
    if ($i == 5)
    {
        print(chr(CHARS[$i]));
        print(chr(CHARS[$i]));
        break;
    }
}

for ($i = 0; $i < count(CHARS); $i++) {
    if ($i == 6)
    {
        print(chr(CHARS[$i]));
        break;
    }
}

for ($i = 0; $i < count(CHARS); $i++) {
    if ($i == 1)
    {
        print(chr(CHARS[$i]));
        break;
    }
}

for ($i = 0; $i < count(CHARS); $i++) {
    if ($i == 9)
    {
        print(chr(CHARS[$i]));
        break;
    }
}

for ($i = 0; $i < count(CHARS); $i++) {
    if ($i == 6)
    {
        print(chr(CHARS[$i]));
        break;
    }
}

for ($i = 0; $i < count(CHARS); $i++) {
    if ($i == 7)
    {
        print(chr(CHARS[$i]));
        break;
    }
}

for ($i = 0; $i < count(CHARS); $i++) {
    if ($i == 5)
    {
        print(chr(CHARS[$i]));
        break;
    }
}

for ($i = 0; $i < count(CHARS); $i++) {
    if ($i == 8)
    {
        print(chr(CHARS[$i]));
        break;
    }
}

goto fin;

fin:
return null;
