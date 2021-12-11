<?php

namespace Husseinzaher\Zatca\Tags;

use Husseinzaher\Zatca\Tag;

class Seller extends Tag
{
    public function __construct($value)
    {
        parent::__construct(1, $value);
    }
}
