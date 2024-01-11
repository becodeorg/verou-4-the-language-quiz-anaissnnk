<?php

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

    // public function verify(string $answer): bool
    // {

    // }
}
