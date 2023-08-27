<?php

declare(strict_types=1);

function formatDollarAmount(float $amount): string
{
    $isNegative = $amount < 0;

    return ($isNegative ? '-' : '') . '$' . number_format(abs($amount), 2, '.', ',');
}

function formatDate(string $date): string
{
    return date('M j, Y', strtotime($date));
}

function calculateColor(float $amount): string
{
    $color = match(true) {
        $amount > 0 => 'green',
        $amount < 0 => 'red',
        $amount == 0 => 'black'
    };

    return $color;
}