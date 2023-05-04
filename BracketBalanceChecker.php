<?php

class BracketBalanceChecker
{
    private $bracketsMap;

    public function __construct()
    {
        $this->bracketsMap = [
            ')' => '(',
            ']' => '[',
            '}' => '{',
        ];
    }

    public function isBalanced(string $expression): string
    {
        $stack = [];

        for ($i = 0; $i < strlen($expression); $i++) {
            $char = $expression[$i];

            if (in_array($char, $this->bracketsMap, true)) {
                $stack[] = $char;
            } elseif (isset($this->bracketsMap[$char])) {
                if (empty($stack) || array_pop($stack) !== $this->bracketsMap[$char]) {
                    return "Incorrect";
                }
            }
        }

        return empty($stack) ? "Correct" : "Incorrect";
    }
}
