<?php

namespace App\Transformer;

class HateeTransformer implements TransformerInterface
{
    public function transform(int $number): string
    {
        return $number % 2 === 0 ? 'hatee' : '';
    }
}