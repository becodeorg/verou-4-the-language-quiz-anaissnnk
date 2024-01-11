<?php

require_once 'Data.php';

class Word
{
    protected $japaneseTranslation;
    protected $englishTranslation;

    public function __construct(string $japaneseTranslation, string $englishTranslation)
    {
        $this->japaneseTranslation = $japaneseTranslation;
        $this->englishTranslation = $englishTranslation;
    }

    public function getJapaneseTranslation() {
        return $this->japaneseTranslation;
    }

    public function getEnglishTranslation() {
        return $this->englishTranslation;
    }

    public function verify(string $answer): bool
    {
        // TODO: use this function to verify if the provided answer by the user matches the correct 
        
        

        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }
}
