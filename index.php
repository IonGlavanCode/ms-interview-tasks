<?php

require_once 'BracketBalanceChecker.php';

$checker = new BracketBalanceChecker();
$correctExpression = "[({})]";
echo $checker->isBalanced($correctExpression); // Вывод: "Correct"

$incorrectExpression = "[([)";
echo $checker->isBalanced($incorrectExpression); // Вывод: "Incorrect"