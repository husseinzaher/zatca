<?php

namespace Husseinzaher\Zatca\Tags;

use Husseinzaher\Zatca\Tag;

class TaxNumber extends Tag
{
    public function __construct($value)
    {
        parent::__construct(2, $value);
    }
}
