<?php


class ResultLoader extends Loader
{
    public function __construct($resultPath)
    {
        parent::__construct($resultPath);
    }
    public function getAnswers($nature) {
        return $this->content["pokemon"][$nature];
    }
}