<?php

    $Score = 0;

    $dom = new DOMDocument("EECS 448 Lab 6 Part 2.html");

    $Q1 = $_POST["F-Country"];
    $Q2 = $_POST["Radio-Star"];
    $Q3 = $_POST["Tomato"];
    $Q4 = $_POST["Fantasy-Enemy"];
    $Q5 = $_POST["Mobile-Game"];

    if($Q1 == "Three")
    {
        $Score++;
    }
    if($Q2 == "Video")
    {
        $Score++;
    }
    if($Q3 == "Both")
    {
        $Score++;
    }
    if($Q4 == "Goblin")
    {
        $Score++;
    }
    if($Q5 == "Fossil Fighters")
    {
        $Score++;
    }

    $Grade = $Score*20;

    echo "1) How many countries start with the letter F?", "<br>";
    echo "You answered: ", $Q1, "<br>";
    echo "Correct answer: Three", "<br>", "<br>";

    echo "2) What killed the radio star?", "<br>";
    echo "You answered: ", $Q2, "<br>";
    echo "Correct answer: Video", "<br>", "<br>";

    echo "3) Is a tomato a fruit or a vegetable?", "<br>";
    echo "You answered: ", $Q3, "<br>";
    echo "Correct answer: Both", "<br>", "<br>";

    echo "4) What is a popular enemy in fantasy typically depicted with green skin?", "<br>";
    echo "You answered: ", $Q4, "<br>";
    echo "Correct answer: Goblin", "<br>", "<br>";

    echo "Which of the following is not a game available for mobile devices?", "<br>";
    echo "You answered: ", $Q5, "<br>";
    echo "Correct answer: Fossil Fighters", "<br>", "<br>";

    echo "You answered ", $Score, " questions correctly!", "<br>";
    echo "Your grade is a ", $Grade, "%.";

?>
