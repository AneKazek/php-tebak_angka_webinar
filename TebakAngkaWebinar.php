<?php
echo "====SELAMAT DATANG====\n";
echo "Thanks to Pondok Teknologi\n";
echo "Created by @AneKazek\n";

function getInput($prompt)
{
    echo $prompt;
    return trim(fgets(STDIN));
}

function getDifficulty()
{
    while (true) {
        $difficulty = strtolower(getInput("Pilih level kesulitan (Easy, Medium, Hard): "));
        if ($difficulty === 'easy' || $difficulty === 'medium' || $difficulty === 'hard') {
            return $difficulty;
        } else {
            echo "Pilihan level tidak valid. Silakan Pilih Antara 'Easy', 'Medium', Atau 'Hard'.\n";
        }
    }
}

function getLimit($difficulty)
{
    switch ($difficulty) {
        case 'easy':
            return 5;
        case 'medium':
            return 15;
        case 'hard':
            return 25;
        default:
            return 9;
    }
}

$difficulty = getDifficulty();
$upperLimit = getLimit($difficulty);

while (true) {
    $computer = rand(1, $upperLimit);
    echo "MASUKKAN TEBAKANMU : ";
    $player = (int) getInput("");

    if ($player == $computer) {
        echo "Sensational\n";
    } else {
        echo "Mohon Bersabar. Angka yang benar adalah: $computer\n";
    }
}