<?php

namespace App\Transformer;

interface TransformerInterface
{
    public function transform(int $number): string;
}