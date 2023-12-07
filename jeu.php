<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Quiz</h1>
    <div id="question-container"><?php echo htmlspecialchars($question['question']); ?></div>
    <div id="answer-result"></div>
    <form id="answer-form" method="post" action="fonctions.php">
        <input type="hidden" name="current_question_index" value="<?php echo htmlspecialchars($current_question_index); ?>">
        <button type="submit" name="answer" value="faux">Faux</button>
        <button type="submit" name="answer" value="vrai">Vrai</button>
    </form>
</body>
</html>