<?php

require_once(__DIR__ . "/../../includes/Spyc.php");
class Loader
{
    private $questionPath;

    private $questions;

    private function setQuestions($questionFile) {
        $this->questions= Spyc::YAMLLoad($questionFile);
    }

    private function questionCount() {
        return count($this->questions["questions"]);
    }

    public function setQuestionPath($questionPath) {
        $this->questionPath = $questionPath;
    }

    public function __construct($questionPath) {
        $this->setQuestionPath($questionPath);
        $this->setQuestions($this->questionPath);
    }

    public function getSingleQuestion() {
        $bannedIndex = [];
        $randIndex = rand(0, ($this->questionCount() - 1));
        if (!isset($randIndex, $bannedIndex)) {
            $bannedIndex[] = $randIndex;
            return $this->questions["questions"][$randIndex];
        } else {
            $this->getSingleQuestion();
        }
        return false;
    }



}