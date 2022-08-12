<?php include 'database.php'; ?>

<?php
// date_default_timezone_set("America/New_York");
// $date = date("Y-m-d");
$release_date = "'2022-08-13'";
$question_number = $_POST['question_number'];

$query = "SELECT * FROM questions WHERE release_date = $release_date AND question_number = $question_number";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
$row = $result->fetch_assoc();
$choice_one_votes = $row['choice_one_votes'];
$choice_two_votes = $row['choice_two_votes'];

$which_vote = $_POST['vote'];
echo $question_number;
echo "test";
//if(isset($_POST['vote'])){
if($which_vote == 1){
    $choice_one_votes++;
    $update_query_one = "UPDATE questions SET choice_one_votes = $choice_one_votes WHERE release_date = $release_date AND question_number = $question_number";
    mysqli_query($mysqli,$update_query_one);
}

if($which_vote == 2){
    $choice_two_votes++;
    $update_query_two = "UPDATE questions SET choice_two_votes = $choice_two_votes WHERE release_date = $release_date AND question_number = $question_number";
    mysqli_query($mysqli,$update_query_two);
}
//}

