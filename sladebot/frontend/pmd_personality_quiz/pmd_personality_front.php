<?php

require_once (__DIR__ . "/../../backend/pmd_personality_quiz/class.Loader.php");

/**
 * Class pmdFront
 * Contains methods for handling questions received by the backend Loader class, preparing them for end user view
 */
class pmdFront {

    /**
     * @var Loader contains a backend Loader object
     */
    private $questions;

    /**
     * @var array contains the questions ready to be sent to the view
     */
    private $questionStorage = [];

    /**
     * pmdFront constructor.
     * @param $questionCount int amount of questions to be pulled from the backend
     * TODO: add check to validate count before executing
     */
    public function __construct($questionCount) {
        $this->questions = new Loader(__DIR__ . "/../../backend/pmd_personality_quiz/questions.yaml");
        $this->setQuestionArray($questionCount);
    }

    /**
     * @param $questionCount int amount of questions to be pulled from the backend
     */
    private function setQuestionArray($questionCount) {
        for ($i = 0; $i < $questionCount; $i++) {
            $this->questionStorage[$i] = $this->questions->getSingleQuestion();
        }
    }

    /**
     * @return array the array containing the questions from the frontend, ready to be displayed in view
     */
    public function getQuestionArray() {
        return $this->questionStorage;
    }



}

