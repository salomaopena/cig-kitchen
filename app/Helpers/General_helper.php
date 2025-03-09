<?php

function format_currency($value)
{
    return 'R$ ' . number_format($value, 2, '.');
}

function define_order_number_from_id($id_order)
{
    //implement logic to generate order number from id

    if ($id_order < 100) {
        return $id_order;
    } else {
        return ($id_order / 100);
    }
}

function lead_zeros($value, $length){
    return str_pad($value, $length, '0', STR_PAD_LEFT);
}
