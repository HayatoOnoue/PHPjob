<link rel="stylesheet" href="css/style.css">
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_GET['name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$choices1 = [80, 22, 20, 21];
$choices2 = ['PHP', 'Python', 'JAVA', 'HTML'];
$choices3 = ['join', 'select', 'insert', 'update'];

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$answer1 = $choices1[0];
$answer2 = $choices2[3];
$answer3 = $choices3[1];

?>
<p>お疲れ様です<?php echo $name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">
    <h2>①ネットワークのポート番号は何番？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach($choices1 as $choice) { ?>
        <input type="radio" name="choice1" value=<?php echo $choice; ?> /><?php echo $choice; ?>
    <?php } ?>

    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach($choices2 as $choice) { ?>
        <input type="radio" name="choice2" value=<?php echo $choice; ?>><?php echo $choice; ?>
    <?php } ?>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach($choices3 as $choice) { ?>
        <input type="radio" name="choice3" value=<?php echo $choice; ?>><?php echo $choice; ?>
    <?php } ?>

    <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
    <input type="hidden" name="answer1" value=<?php echo $answer1; ?> />
    <input type="hidden" name="answer2" value=<?php echo $answer2; ?> />
    <input type="hidden" name="answer3" value=<?php echo $answer3; ?> />

    <input type="hidden" name="name" value=<?php echo $name; ?> />

    <!-- 送信ボタン -->
    <p>
        <input type="submit" value="回答する" />
    </p>
</form>