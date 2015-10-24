<?php

/**
 * create random and unique long id
 *
 * @param $string
 * @param int $loops
 * @return string
 */
function createRandomId($string, $loops = 10)
{
    $random = $string.microtime(true);
    for ($i = 0; $i < $loops; $i++) {
        $random .= rand(0, 1) ? rand(0, 9) : chr(rand(ord('a'), ord('z')));
    }
    return hash('md2', $random);
}

/**
 * test if the id is unique
 *
 * @param int $times
 * @return array
 */
function testIfIdsIsUnique($times = 22)
{
    $ids = [];
    $pass = 0;
    for ($i = 0; $i < $times; $i++) {
        $rand = CreatePublicId('23');
        if(in_array($rand, $ids)){
            break;
        }else{
            $ids[] = $rand;
        }
        $pass++;
    }
    return "Passed $pass inspections of $times";
}
