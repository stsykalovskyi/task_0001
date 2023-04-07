<?php

namespace App\Transformer;

class PaTransformer implements TransformerInterface
{
    public function transform(int $number): string
    {
        return $number % 3 === 0 ? 'pa' : '';
    }
}