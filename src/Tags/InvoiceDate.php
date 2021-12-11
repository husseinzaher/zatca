<?php

namespace Husseinzaher\Zatca\Tags;

use Husseinzaher\Zatca\Tag;

class InvoiceDate extends Tag
{
    public function __construct($value)
    {
        parent::__construct(3, $value);
    }
}
