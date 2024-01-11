<?php

class LanguageGame
{
    private array $words;

    public function __construct()
    {
        // :: is used for static functions
        // They can be called without an instance of that class being created
        // and are used mostly for more *static* types of data (a fixed set of translations in this case)

        $this->words = [];

        foreach (Data::words() as $japaneseTranslation => $englishTranslation) {
            // TODO: create instances of the Word class to be added to the words array
            $word = new Word($japaneseTranslation, $englishTranslation);
            $this->words[] = $word;
        }
    }

    public function getWords() {
        return $this->words;
    }

    public function run(): void
    {
        // Option B: user has just submitted an answer
        // TODO: verify the answer (use the verify function in the word class) - you'll need to get the used word from the array first
        if($_SERVER["REQUEST_METHOD"] === "POST") {
            $answer = htmlspecialchars($_POST["answer"]);
            $selectedWord = htmlspecialchars($_POST["word"]);

            //Define english translation
            $correctEnglishTranslation = null;
            foreach (Data::words() as $japaneseTranslation => $englishTranslation) {
                if ($japaneseTranslation === $selectedWord) {
                    $correctEnglishTranslation = $englishTranslation;
                    break;
                }
            }

            if ($correctEnglishTranslation !== null) {
                // Compare the player's answer with the correct English translation
                if ($answer === $correctEnglishTranslation) {
                    echo "You got it right!";
                } else {
                    echo "Wrong answer!";
                }
            } else {
                echo "Invalid selection"; // Handle the case when the selected word is not found
            }
        }

    }
}