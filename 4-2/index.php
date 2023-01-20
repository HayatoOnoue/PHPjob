<?php
require_once("getData.php");

$data = new getData();
$users_data = $data->getUserData();
$full_name = "${users_data['last_name']}${users_data['first_name']}";

$post_data = $data->getPostData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="logo-area">
            <img src="images/1599315827_logo.png" alt="logo">
        </div>
        <div class="user-info">
            <div class="user-info-item user-name">ようこそ <?php echo $full_name; ?>さん</div>
            <div class="user-info-item last-login">最終ログイン日： <?php echo $users_data['last_login']; ?></div>
        </div>
    </header>
    <main>
        <table>
            <tr>
                <th>記事ID</th>
                <th>タイトル</th>
                <th>カテゴリ</th>
                <th>本文</th>
                <th>投稿日</th>
            </tr>
            <?php while ($row = $post_data->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['category_no']; ?></td>
                    <td><?php echo $row['comment']; ?></td>
                    <td><?php echo $row['created']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </main>
    <footer>Y&I group.inc</footer>
</body>
</html>