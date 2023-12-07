<?php
function getQuestion($index) {
    $questions = [
        ["question" => "Quelle est la couleur du ciel ?", "faux" => "Vert", "vrai" => "Bleu"],
        ["question" => "Quel est le meilleur nombre ?", "faux" => "42", "vrai" => "7"],
        // Ajoutez plus de questions ici
    ];

    return $questions[$index];
}

function displayQuestion($index) {
    global $question;
    $question = getQuestion($index);
}

function checkAnswer($answer, $index) {
    global $question;
    $question = getQuestion($index);
    if ($answer === $question['vrai']) {
        echo '<div id="answer-result">Bravo, la réponse est correcte !</div>';
        displayQuestion($index + 1);
    } else {
        echo '<div id="answer-result">Dommage, la réponse est incorrecte. La bonne réponse était: ' . htmlspecialchars($question['vrai']) . '</div>';
    }
}
?>