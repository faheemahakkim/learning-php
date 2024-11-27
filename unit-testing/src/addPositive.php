<?php

function addPositive(float $a, float $b): float {
    if ($a < 0 || $b < 0) {
        throw new Exception('Numbers must be positive');
    }

    return $a + $b;
}