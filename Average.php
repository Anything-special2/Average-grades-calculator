/*not sure if this 
formula thingy works correct me in 
the comments*/
<html lang = "en">
<head>
<title>test</title>
<style>
form {
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
height: 80vh;
}
input {
margin: 50px;
width: 800px;
height: 200px;
background: #ccc;
border: none;
border-radius: 80px;
outline: none;
font-size: 60px;
}
.heading {
width: 1000px;
height: 100px;
}
label {
position: relative;
top: 50px;
font-size: 80px;
margin: 10px;
}
h2 {
color: red;
font-size: 80px;
}
</style>
</head>
<body>
<h1>hello</h1>
<header class = "heading">
<h1 style = "font-family: cursive; font-size: 100px; text-align: center; color: black;">Welcome to my website</h1>
</header>
<form action = "idk.php" method = "get">
<label>scores:</label>
<input name = "preexam" placeholder = "works" value = "0">
<input name = "midexam" placeholder = "works" value = "0">
<input name = "prefinal" placeholder = "works" value = "0">
<input name = "finalexam" placeholder = "works" value = "0">
<input type = "submit">
</form>
</body>
</html>
<?PHP
$average = $_GET["preexam"] + $_GET["midexam"] + $_GET["prefinal"];
//let's find the average
$divide = $average / 3; 
$finalExam = $_GET["finalexam"];
$finalExam/100;
$total_average_score = $_finalExam + $divide;
$total_average_score = round($total_average_score);
if ($total_average_score > 75) {
echo "<h1>you have a good grade</h1>";
}
if ($total_average_score < 75) {
echo "<h1>you failed!</h1>";
}
echo $finalExam;
echo $average;

$real_score = $finalExam + $divide;

$real_score = round($real_score);

echo "<h1> estimated score: your average is: {$total_average_score}%</h1>";
echo "<h1>the real score is: {$real_score}%</h1>";
echo "<h1>mini project done</h1>";
?>
