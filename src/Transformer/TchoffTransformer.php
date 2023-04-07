<?php

namespace App\Transformer;

class TchoffTransformer implements TransformerInterface
{
    public function transform(int $number): string
    {
        return $number > 5 ? 'tchoff' : '';
    }
}