<?php

require_once(__DIR__ . "/../../backend/pmd_personality_quiz/class.ResultLoader.php");

class resultFront {

    private $resultBackend;

    public function __construct() {
        $this->resultBackend = new ResultLoader(__DIR__ . "/../../backend/pmd_personality_quiz/pokemon.yaml");
    }

    public function debug() {
        var_dump($this->resultBackend);
    }
}