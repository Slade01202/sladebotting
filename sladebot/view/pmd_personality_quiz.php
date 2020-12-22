<?php require_once(__DIR__ . "/../frontend/pmd_personality_quiz/pmd_personality_front.php");
$viewQuestions = new pmdFront(1)?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PMD Personality Quiz</title>
    </head>
    <body>
        <form id="questions">
            <h1>is this thing on?</h1>
            <h1><?php var_dump($viewQuestions);?></h1>
            <?php foreach ($viewQuestions->getQuestionArray() as $viewQuestion) {?>
            <h2><?= $viewQuestion["question"]?></h2><br>
            <?php foreach ($viewQuestion["answers"] as $answer) {?>
            <input type ="radio" id="<?=$answer?>"><label for="<?=$answer?>"><?=$answer?></label><br>
            <?php }
            }
            ?>
        </form>
    </body>
</html>