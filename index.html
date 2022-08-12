<?php include 'database.php'; ?>
<?php
    // date_default_timezone_set("America/New_York");
    // $date = date("Y-m-d");
    $release_date = "'2022-08-13'";

    $query = "SELECT * FROM questions WHERE release_date = $release_date";
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    
    $question_number = array();
    $question_text = array();
    $choice_one_text = array();
    $choice_two_text = array();

    while($row = $result->fetch_assoc()){
        array_push($question_number, $row[question_number]);
        array_push($question_text, $row[question_text]);
        array_push($choice_one_text, $row[choice_one_text]);
        array_push($choice_two_text, $row[choice_two_text]);
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 
    <script>
        $(document).ready(function(){
            $("#btn-top").click(function(){
                $.ajax({
                    url: 'submit.php',
                    type: 'POST',
                    data: {vote: '1',question_number: 1},
                    success: function(data)
                    {
                        $('#display').html(data);
                    }
                });
                
                //$("#btn-top").fadeOut(function(){
                //    $("#btn-top")
                //});
            });
            $("#btn-bottom").click(function(){
                $.ajax({
                    url: 'submit.php',
                    type: 'POST',
                    data: {vote: '2',question_number: 1},
                    success: function(data)
                    {
                        $('#display').html(data);
                    }
                });
                
                //$("#btn-top").fadeOut(function(){
                //    $("#btn-top")
                //});
            });
            
        });
    </script>

</head>

<body>
    <div class="nav-container">
        <div class="wrapper">
            <nav>
                <div class="logo">
                    SUPERFORECAST
                </div>
            </nav>
        </div>
    </div>
    <div class="question-section">
        <div class="question-container">
            <p class="question-text">
                <?php echo $question_text[0]?>
            </p>
        </div>
        <div id="answer-buttons" class="btn-grid">
            <button id="btn-top" class="btn">
                <?php echo $choice_one_text[0] ?>
            </button>
            <button id="btn-bottom" class="btn">
                <?php echo $choice_two_text[0] ?>
            </button>
        </div>
        <div class="page-number">
            <p class="page-text">
                <?php echo $question_number[0] ?> of <?php echo count($question_number) ?>
            </p>
        </div>
    </div>
    <div id="display"></div>

    
</body>

</html>