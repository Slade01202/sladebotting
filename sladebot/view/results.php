<?php
require_once(__DIR__ . "/../frontend/pmd_personality_quiz/pmd_result_front.php");
$fuck = new resultFront();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PMD Personality Quiz</title>
</head>
<body>
<h1> The results are in!</h1>
<div>
    <p>Looks like you are a ... or ...!</p>

    <p><?php $fuck->debug();?></p>
</div>
</body>
</html>