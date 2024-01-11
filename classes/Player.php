<?php

class Player
{
    protected $name;
    protected $score;

    public function __construct(string $name = "", int $score = 0)
    {
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