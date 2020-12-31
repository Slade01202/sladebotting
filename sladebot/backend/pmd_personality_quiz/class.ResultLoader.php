<?php


class ResultLoader extends Loader
{
    public function __construct($questionPath)
    {
        parent::__construct($questionPath);
    }
    public function getAnswers($nature) {
        return $this->questions["pokemon"][$nature];
    }
}