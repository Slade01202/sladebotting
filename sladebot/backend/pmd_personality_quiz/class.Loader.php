<?php

//Load YAML-Loader class
require_once(__DIR__ . "/../../includes/Spyc.php");

/**
 * Class Loader
 *
 * class for loading questions in the backend, and returning singleton questions
 */
class Loader
{
    /**
     * @var string path to the file containing all the questions + answers, usually filled by frontend
     */
    private $questionPath;

    /**
     * @var array containing sub arrays with all question + answer text in them
     */
    private $questions;

    /**
     * @var array containing the banned during question generation
     */
    private $bannedIndex = [];

    /**
     * @param $questionFile string loads up all questions into an array
     */
    private function setQuestions($questionFile) {
        $this->questions = Spyc::YAMLLoad($questionFile);
    }

    /**
     * @return int the number of questions in the $questions array
     */
    private function questionCount() {
        return count($this->questions["questions"]);
    }

    /**
     * @param $questionPath string path to the file containing all questions
     */
    private function setQuestionPath($questionPath) {
        $this->questionPath = $questionPath;
    }

    /**
     * Loader constructor.
     * @param $questionPath string path to the file containing all questions
     */
    public function __construct($questionPath) {
        $this->setQuestionPath($questionPath);
        $this->setQuestions($this->questionPath);
        $this->bannedIndex = [];
    }

    /**
     * @return array returns the subarray taken from $questions with the given index
     */
    public function getSingleQuestion() {
        $randIndex = rand(0, ($this->questionCount() - 2));
        if (!in_array($randIndex, $this->bannedIndex)) {
            $this->bannedIndex[] = $randIndex;
            return $this->questions["questions"][$randIndex];
        } else {
            return $this->getSingleQuestion();
        }
    }



}