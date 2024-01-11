<?php

class Player
{
    // TODO: add name and score
    protected $name;
    protected $score;

    public function __construct(string $name = "", int $score = 0)
    {
        // TODO: add 👤 automatically to their name
        $this->name = $name;
        $this->score = $score;

    }

    public function getName() {
        return $this->name;
    }

    public function getScore() {
        return $this->score;
    }

    public function addEmoji() {
        return $this->name . " 👤";
    }
}