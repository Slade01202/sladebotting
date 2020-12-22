<?php

require_once(__DIR__ . "/../../includes/Spyc.php");
class Loader
{
    private $questionPath;

    private $questions;

    private function setQuestions($questionFile) {
        $this->questions= Spyc::YAMLLoad($questionFile);
    }

    private function getQuestions() {
        return $this->questions;
    }

    public function setQuestionPath($questionPath) {
        $this->questionPath = $questionPath;
    }

    public function __construct($questionPath) {
        $this->setQuestionPath($questionPath);
        $this->setQuestions($this->questionPath);
    }

    public function getSingleQuestion() {
        $randIndex = rand(0, 54);
        return $this->questions["questions"][$randIndex];
    }

}