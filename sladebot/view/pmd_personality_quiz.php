<?php require_once(__DIR__ . "/../frontend/pmd_personality_quiz/pmd_personality_front.php");
$viewQuestions = new pmdFront(30);
$i = 0?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PMD Personality Quiz</title>
        <link href="../includes/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <form id="questions" action="results.php" method="post">
            <?php foreach ($viewQuestions->getQuestionArray() as $viewQuestion) {
                $i++;?>
            <h4><?=$i . " . " . $viewQuestion["question"]?></h4><br>
            <?php foreach ($viewQuestion["answers"] as $answer) {?>
            <input type ="radio" name="<?=$i?>" id="<?=$i?>"><label for="<?=$i?>"><?=$answer?></label><br>
            <?php }
            }
            ?>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>