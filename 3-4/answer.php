<link rel="stylesheet" href="css/style.css">
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST['name'];

$choice1 = $_POST['choice1'];
$answer1 = $_POST['answer1'];

$choice2 = $_POST['choice2'];
$answer2 = $_POST['answer2'];

$choice3 = $_POST['choice3'];
$answer3 = $_POST['answer3'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function checkAnswer($choice, $answer) {
    echo $choice === $answer ? '正解!' : '残念・・・';
}
?>

<p><?php echo $name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php checkAnswer($choice1, $answer1); ?></p>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php checkAnswer($choice2, $answer2); ?></p>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php checkAnswer($choice3, $answer3); ?></p>