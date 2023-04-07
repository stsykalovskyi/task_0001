<?php

namespace App\Transformer;

class JoffTransformer implements TransformerInterface
{
    public function transform(int $number): string
    {
        return in_array($number, [1, 4, 9]) ? 'joff' : '';
    }
}