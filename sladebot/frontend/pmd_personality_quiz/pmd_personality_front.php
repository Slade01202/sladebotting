<?php

require_once (__DIR__ . "/../../backend/pmd_personality_quiz/class.Loader.php");

class pmdFront
{
    private $question;

    private $questions;

    private $questionStorage = [];

    public function __construct($questionCount) {
        $this->questions = new Loader(__DIR__ . "/../../backend/pmd_personality_quiz/questions.yaml");
        $this->setQuestionArray($questionCount);
    }

    private function setQuestionArray($questionCount) {
        for ($i = 0; $i < $questionCount; $i++) {
            $this->questionStorage[$i] = $this->questions->getSingleQuestion();
            while (!$this->questionStorage[$i]) {
                $this->questionStorage[$i] = $this->questions->getSingleQuestion();
            }
        }
    }

    public function getQuestionArray() {
        return $this->questionStorage;
    }



}

