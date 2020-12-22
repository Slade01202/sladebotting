<?php

require_once(__DIR__ . "/../../includes/Spyc.php");
class Loader
{
    private $questionPath;

    private $questions;

    private $bannedIndex = [];

    private function setQuestions($questionFile) {
        $this->questions= Spyc::YAMLLoad($questionFile);
    }

    private function questionCount() {
        return count($this->questions["questions"]);
    }

    private function setQuestionPath($questionPath) {
        $this->questionPath = $questionPath;
    }

    public function __construct($questionPath) {
        $this->setQuestionPath($questionPath);
        $this->setQuestions($this->questionPath);
    }

    public function getSingleQuestion() {
        $randIndex = rand(0, ($this->questionCount() - 2));
        if (!array_key_exists($randIndex, $this->bannedIndex)) {
            $bannedIndex[$randIndex] = $randIndex;
            var_dump($bannedIndex);
            echo PHP_EOL;
            return $this->questions["questions"][$randIndex];
        } else {
            $this->getSingleQuestion();
        }
        return false;
    }



}