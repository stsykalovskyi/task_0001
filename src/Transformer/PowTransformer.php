<?php

namespace App\Transformer;

class PowTransformer implements TransformerInterface
{
    public function transform(int $number): string
    {
        return $number % 5 === 0 ? 'pow' : '';
    }
}