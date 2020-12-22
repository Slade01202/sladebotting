<?php require_once(__DIR__ . "/../frontend/pmd_personality_quiz/pmd_personality_front.php");
$viewQuestions = new pmdFront(10)?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PMD Personality Quiz</title>
</head>
<body>
    <form id="questions">
        <h1>is this thing on?</h1>
        <h1><?php var_dump($viewQuestions)?></h1>

    </form>
</body>
</html>