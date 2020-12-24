<?php

namespace vdebes\phpdojo\fizzBuzz;

class fizzBuzzer
{
    public function __invoke(): string
    {
        $output = null;

        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 === 0) {
                $output .= 'Fizz';
            } else {
                $output .= (string) $i;
            }
            if ($i !== 100) {
                $output .= PHP_EOL;
            }
        }

        return $output;
    }
}
