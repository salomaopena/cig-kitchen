<?php

function format_currency($value)
{
    return 'R$ ' . number_format($value, 2, '.');
}

function define_order_number_from_from_last_order_number($order_number)
{
    //implement logic to generate order number from id

    if ($order_number < 100) {
        return $order_number;
    } else {
        return ($order_number / 100);
    }
}

function lead_zeros($value, $length){
    return str_pad($value, $length, '0', STR_PAD_LEFT);
}

function order_color($order_number){
    return ORDER_COLORS [$order_number % 10];
}
