<?php require_once(__DIR__ . "/../frontend/pmd_personality_quiz/pmd_personality_front.php");
$viewQuestions = new pmdFront(30);
$i = 0;?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PMD Personality Quiz</title>
    </head>
    <body>
        <form id="questions">
            <?php foreach ($viewQuestions->getQuestionArray() as $viewQuestion) {
                $i = $i + 1?>
            <h4><?= $viewQuestion["question"]?></h4><br>
            <?php foreach ($viewQuestion["answers"] as $answer) {?>
            <input type ="radio" name="<?=$viewQuestion["question"]?>"><label for="<?=$viewQuestion["question"]?>"><?=$answer . $i?></label><br>
            <?php }
            }
            ?>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>