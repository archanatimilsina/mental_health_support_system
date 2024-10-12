<?php
require('connection.php');
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = "Archana Timilsina"; // Temporary user name
    $profile = "Not Found!"; // Assuming profile is set in the session
    $question1 = [];
    $answer1 = [];
    $i = 0;

    while ($i < count($_POST)) {
        if (isset($_POST['question' . $i]) && isset($_POST['answer' . $i])) {
            $question1[] = $_POST['question' . $i];
            $answer1[] = $_POST['answer' . $i];
        }
        $i++;
    }

    $question = base64_encode(serialize($question1));
    $answer = base64_encode(serialize($answer1));
    $query = "INSERT INTO qna_records (fullname, profile, question, answer) VALUES ('$fullname', '$profile', '$question', '$answer')";
    $result = mysqli_query($con, $query);

    if ($result) {
    //     $questionsDecoded = unserialize(base64_decode($question));
    //     $answersDecoded = unserialize(base64_decode($answer));
    //    echo "<script> alert(Data is submitted successfully);</script>";
    echo" <script>
    alert('Data is Submitted successfully!!');
    window.location.href='index.php';
    </script>";
    } else {
        echo "Error submitting data: " . mysqli_error($con);
    }
}

// Pagination setup
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 1;
$offset = ($page - 1) * $limit;
$query = "SELECT * FROM qna LIMIT $offset, $limit";
$result = mysqli_query($con, $query);
$squery = "SELECT * FROM qna";
$sresult = mysqli_query($con, $squery);
$trecord = mysqli_num_rows($sresult);
$tpage = ceil($trecord / $limit);
$range = 2; // Display 2 pages before and after the current page
$start = max(1, $page - $range);
$end = min($tpage, $page + $range);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QNA</title>
    <style>
        .qna-box {
            width: 90%;
            height: 200px;
            margin: auto;
            border: 1px solid black;
            border-radius: 10px;
            margin-top: 80px;
        }
        .question-box {
            height: 30%;
            border-radius: 10px;
            background-color: lavender;
            width: 97.7%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 25px;
            padding: 10px;
        }
        .answer-box {
            width: 99.3%;
            height: 70%;
        }
        .prev-btn, .next-btn, .page-btn, .submit-btn {
            border: 1px solid black;
            width: 70px;
            height: 30px;
            background-color: lavender;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .pagination {
            margin: auto;
            width: 80%;
            height: 50px;
            display: flex;
            justify-content: end;
            align-items: center;
        }
        .head p {
            text-align: center;
            color: black;
            font-size: 40px;
            font-family: cursive;
        }
    </style>
</head>
<body>
    <div class="head">
        <p>Please answer the following question</p>
    </div>

    <!-- Q&A Form -->
    <form action="" method="POST" id="qnaForm">
        <?php while ($data = mysqli_fetch_array($result)) { ?>
            <div class="qna-box">
                <div class="question-box">
                    <input type="text" readonly value="<?php echo $data['questions']; ?>" class="question-box" name="question<?php echo $page; ?>" id="questionNow_<?php echo $page; ?>">
                </div>
                <div class="answer-box">
                    <input type="text" name="answer<?php echo $page; ?>" id="answerInput_<?php echo $page; ?>" placeholder="Enter your answer" class="answer-box">
                </div>
            </div>
        <?php } ?>

        <!-- Pagination Links -->
        <div class="pagination">
            <?php if ($page > 1) { ?>
                <button type="button" class="prev-btn" onclick="GoToPage(<?php echo ($page - 1); ?>)">Previous</button>
            <?php } ?>

            <?php for ($i = $start; $i <= $end; $i++) {
                echo "<button type='button' class='page-btn' onclick='GoToPage($i)'>$i</button>";
            } ?>

            <?php if ($page < $tpage) { ?>
                <button type="button" class="next-btn" onclick="SaveAndNext(<?php echo ($page + 1); ?>)">Next</button>
            <?php } elseif ($page == $tpage) { ?>
                <button type="button" class="submit-btn" onclick="SaveAndNext(<?php echo ($page + 1); ?>)">Submit All</button>
            <?php } ?>
        </div>
        <input type="hidden" name="currentPage" value="<?php echo $page; ?>">
    </form>

    <script>
        var tpage = <?php echo $tpage; ?>;
        
        function GoToPage(page) {
            window.location.href = "qna.php?page=" + page;
        }

        function SaveAndNext(nextPage) {
            let storedAnswers = JSON.parse(sessionStorage.getItem('answers')) || [];
            let storedQuestions = JSON.parse(sessionStorage.getItem('questions')) || [];
            const answerInput = document.getElementById('answerInput_<?php echo $page; ?>').value;
            const questionNow = document.getElementById('questionNow_<?php echo $page; ?>').value;
            const currentPage = <?php echo ($page - 1); ?>;  // Adjust for zero-indexing

            if (answerInput === "") {
                alert("Please enter an answer before proceeding to the next question.");
                return; 
            }
            storedAnswers[currentPage] = answerInput;  // Save answer
            storedQuestions[currentPage] = questionNow;  // Save question
            sessionStorage.setItem('answers', JSON.stringify(storedAnswers));
            sessionStorage.setItem('questions', JSON.stringify(storedQuestions));

            if (nextPage > tpage) {
                SubmitAll();
            } else {
                GoToPage(nextPage);
            }
        }

        function SubmitAll() {
            const answersParsed = JSON.parse(sessionStorage.getItem('answers')) || [];
            const questionsParsed = JSON.parse(sessionStorage.getItem('questions')) || [];
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = 'qna.php'; // Change to the actual submission URL
            for (let i = 0; i < tpage; i++) {
                if (answersParsed[i] && questionsParsed[i]) {
                    const input1 = document.createElement('input');
                    const input2 = document.createElement('input');
                    input1.type = 'hidden';
                    input1.name = 'question' + i;
                    input1.value = questionsParsed[i];
                    form.appendChild(input1);
                    input2.type = 'hidden';
                    input2.name = 'answer' + i;
                    input2.value = answersParsed[i];
                    form.appendChild(input2); 
                }
            }
            document.body.appendChild(form);
            form.submit();
        }
    </script>
</body>
</html>
