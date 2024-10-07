<?php 

function isPalindrome($userWord) {
    $palindrome = false;
    if ($userWord == strrev($userWord)) {
        $palindrome = true;
    };

    return $palindrome;
}