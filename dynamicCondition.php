<?php

function dynamicCondition($a, $condition, $b)
{
    $conditions = [
        '>'     => $a > $b,
        '<'     => $a < $b,
        '>='    => $a >= $b,
        '<='    => $a <= $b,
        '=='    => $a == $b,
        '!='    => $a != $b,
        '==='   => $a === $b,
        '!=='   => $a !== $b,
    ];

    return $conditions[$condition];
}
