<?php
$numCorrect = 0;

$ans1 = $_POST["Ans1"];
$ans1correct = "Sucre";
if($ans1==$ans1correct)
{
  $numCorrect++;
}

$ans2 = $_POST["Ans2"];
$ans2correct = "Alan MacMasters";
if($ans2==$ans2correct)
{
  $numCorrect++;
}

$ans3 = $_POST["Ans3"];
$ans3correct = "Fish";
if($ans3==$ans3correct)
{
  $numCorrect++;
}

$ans4 = $_POST["Ans4"];
$ans4correct = "Postal";
if($ans4==$ans4correct)
{
  $numCorrect++;
}

$ans5 = $_POST["Ans5"];
$ans5correct = "Any toothpaste that is willing to pay";
if($ans5==$ans5correct)
{
  $numCorrect++;
}

echo "Quiestion 1: What is the capital of Bolivia?<br>";
echo "You answered: " . $ans1. "<br>";
echo "Correct Answer: " . $ans1correct. "<br>";
echo "<br>";
echo "Quiestion 2: Who invented the electric toster?<br>";
echo "You answered: " . $ans2. "<br>";
echo "Correct Answer: " . $ans2correct. "<br>";
echo "<br>";
echo "Quiestion 3: What animal is placed in a barrel and shot in the famous English idiom?<br>";
echo "You answered: " . $ans3. "<br>";
echo "Correct Answer: " . $ans3correct. "<br>";
echo "<br>";
echo "Quiestion 4: What does the P in USPS stand for?<br>";
echo "You answered: " . $ans4. "<br>";
echo "Correct Answer: " . $ans4correct. "<br>";
echo "<br>";
echo "Quiestion 5: What toothpaste do 9 out of 10 dentists recommend?<br>";
echo "You answered: " . $ans5. "<br>";
echo "Correct Answer: " . $ans5correct. "<br>";
echo "<br>";
echo "The number of correct answers you got is: ". $numCorrect. "<br>";
echo "<br>";
$percentageCorrect = $numCorrect * 20;
echo "Your final percentage is: ". $percentageCorrect. "%<br>";
?>
