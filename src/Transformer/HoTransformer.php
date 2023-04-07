<?php

namespace App\Transformer;

class HoTransformer implements TransformerInterface
{
    public function transform(int $number): string
    {
        return $number % 7 === 0 ? 'ho' : '';
    }
}