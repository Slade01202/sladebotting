<?php

require_once(__DIR__ . "/../../backend/pmd_personality_quiz/class.Loader.php");

$questions = new Loader(__DIR__ . "/../../backend/pmd_personality_quiz/questions.yaml");

var_dump($questions->getSingleQuestion());