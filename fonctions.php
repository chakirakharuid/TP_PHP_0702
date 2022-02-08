<?php

function quantitealea(int $nbalea)
{
    $aleaquant = mt_rand(1, $nbalea);
    return $aleaquant;
}

function prixtotal($qt, $pu)
{
    return $qt * $pu;
}

function totalttc($pt)
{
    return $pt * 1.2;
}
?>
