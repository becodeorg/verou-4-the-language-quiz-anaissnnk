<?php

require_once 'Data.php';

class Word
{
    // TODO: add word (JP) and answer (EN) - (via constructor or not? why?)
    public function getWords() {
        $wordData = Data::words();
        return $wordData;
    }

    public function verify(string $answer): bool
    {
        // TODO: use this function to verify if the provided answer by the user matches the correct 
        
        

        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }
}

// return [
//     'パン' => 'bread',
//     '卵' => 'egg',
//     '帽子' => 'hat',
//     'ドアー' => 'door',
//     '音楽' => 'music',
//     'クッキー' => 'cookie',
// ];