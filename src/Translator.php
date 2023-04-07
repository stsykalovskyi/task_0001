<?php

namespace App;

use App\Transformer\TransformerInterface;

class Translator
{
    private array $transformers;

    public function __construct(TransformerInterface ...$transformers)
    {
        $this->transformers = $transformers;
    }

    public function translate(int $count): array
    {
        $items = [];
        for ($i = 1; $i <= $count; $i++) {
            $result = '';
            foreach ($this->transformers as $transformer) {
                $result .= $transformer->transform($i);
            }
            $items[] = !empty($result) ? $result : $i;
        }
        return $items;
    }
}