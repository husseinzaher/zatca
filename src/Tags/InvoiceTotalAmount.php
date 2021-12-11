<?php

namespace Husseinzaher\Zatca\Tags;

use Husseinzaher\Zatca\Tag;

class InvoiceTotalAmount extends Tag
{
    public function __construct($value)
    {
        parent::__construct(4, $value);
    }
}
