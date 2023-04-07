<?php

require_once __DIR__ . '/autoload.php';

use App\Transformer\HateeTransformer;
use App\Transformer\HoTransformer;
use App\Transformer\JoffTransformer;
use App\Transformer\PaTransformer;
use App\Transformer\PowTransformer;
use App\Transformer\TchoffTransformer;
use App\Translator;

/**
 * For numbers from 1 to 20:
 *
 * Print that number
 * If number divides by 3, print pa instead
 * If number divides by 5, print pow instead
 * If number divides by both 3 and 5, print papow instead
 * Put spaces in between of the elements (but not before first or after the last one).
 *
 * Expected output:
 *
 * 1 2 pa 4 pow pa 7 8 pa pow 11 pa 13 14 papow 16 17 pa 19 pow
 */

$prints = [];
for ($i = 1; $i <= 20; $i++) {
    $result = '';
    if ($i % 3 === 0) {
        $result .= 'pa';
    }
    if ($i % 5 === 0) {
        $result .= 'pow';
    }

    if (empty($result)) {
        $result = $i;
    }
    $prints[] = $result;
}

echo 'TASK 1' . PHP_EOL;
echo implode(' ', $prints) . PHP_EOL . PHP_EOL;

/**
 * Maintain the code from task v1, it's still used in the system.
 *
 * Besides that, for numbers from 1 to 15:
 *
 * Print that number
 * If number is even (divides by 2), print hatee instead
 * If number divides by 7, print ho instead
 * If number is even and divides by 7, print hateeho instead
 * Put dashes in between of the elements (but not before first or after the last one).
 *
 * Expected output:
 *
 * 1-hatee-3-hatee-5-hatee-ho-hatee-9-hatee-11-hatee-13-hateeho-15
 * As task v1 should be mainained, full expected output would be something like this:
 *
 * Task v1:
 * 1 2 pa 4 pow pa 7 8 pa pow 11 pa 13 14 papow 16 17 pa 19 pow
 * Task v2:
 * 1-hatee-3-hatee-5-hatee-ho-hatee-9-hatee-11-hatee-13-hateeho-15
 * It would be really great if there would be no copy-and-paste (you can use copy-and-paste, just avoid duplicated code in the end result).
 */

function translate($number, $divisor, $result)
{
    return $number % $divisor === 0 ? $result : '';
}

$results = [];

for ($i = 1; $i <= 15; $i++) {
    $result = '';
    $result .= translate($i, 2, 'hatee');
    $result .= translate($i, 7, 'ho');
    if (empty($result)) {
        $result = $i;
    }
    $results[] = $result;
}

echo 'TASK 2' . PHP_EOL;
echo implode('-', $results) . PHP_EOL . PHP_EOL;

/**
 * Before or while performing this task, consider refactoring your code into OOP.
 *
 * Maintain the code from task v1 and v2, as it's still used in the system.
 *
 * For numbers from 1 to 10:
 *
 * Print that number
 * If number is one of the numbers 1, 4, 9, print joff instead
 * If number is larger than 5, print tchoff instead
 * If number is one of the numbers 1, 4, 9 and is larger than 5, print jofftchoff instead
 * Put dashes in between of the elements (but not before first or after the last one).
 *
 * Expected output:
 * joff-2-3-joff-5-tchoff-tchoff-tchoff-jofftchoff-tchoff
 * As task v1 and v2 should be mainained, full expected output would be something like this:
 *
 * Task v1:
 * 1 2 pa 4 pow pa 7 8 pa pow 11 pa 13 14 papow 16 17 pa 19 pow
 * Task v2:
 * 1-hatee-3-hatee-5-hatee-ho-hatee-9-hatee-11-hatee-13-hateeho-15
 * Task v3:
 * joff-2-3-joff-5-tchoff-tchoff-tchoff-jofftchoff-tchoff
 * It would be really great if there would be no copy-and-paste (you can use copy-and-paste, just avoid duplicated code in the end result).
 */


echo 'TASK 3' . PHP_EOL;

$translator = new Translator(new PaTransformer(), new PowTransformer());
$result = $translator->translate(20);
echo implode(' ', $result) . PHP_EOL;


$translator = new Translator(new HateeTransformer(), new HoTransformer());
$result = $translator->translate(15);
echo implode('-', $result) . PHP_EOL;

$translator = new Translator(new JoffTransformer(), new TchoffTransformer());
$result = $translator->translate(10);
echo implode('-', $result) . PHP_EOL;