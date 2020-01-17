<!DOCTYPE HTML>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="src/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Lesson 3 - Forms</title>
</head>

<body>
    <div class="conteiner">
        <fieldset id="about">
            <legend>Коротко о себе</legend>
            <p>Имя: <?php echo $_POST['name']; ?></p>
            <P>Фамилия: <?php echo $_POST['second-name']; ?></P>
            <p>Пол: <?php if (isset($_POST['gender'])) echo $_POST['gender']; ?> </p>
            <p>Возраст: <?php echo (int) $_POST['age']; ?></p>
        </fieldset>
        <fieldset id="about-more">
            <legend>Подробнее о себе</legend>
            <p>Пол: <?php if (isset($_POST['gender-2'])) echo $_POST['gender-2']; ?> </p>
            <p>Дата рождения: <?php echo $_POST['date']; ?></p>
            <p>Семейное положение: <?php echo $_POST['marital-status']; ?> </p>
            <p>Социальный статус: <?php echo $_POST['social-status']; ?> </p>
            <p>Место жительства: <?php echo $_POST['address']; ?> </p>
            <p> Что вы обычно делаете на выходных:
                <?php
                    if (isset($_POST['spend-time1'])) echo $_POST['spend-time1'];
                    if (isset($_POST['spend-time2'])) echo $_POST['spend-time2'];
                    if (isset($_POST['spend-time3'])) echo $_POST['spend-time3'];
                    if (isset($_POST['spend-time4'])) echo $_POST['spend-time4'];
                ?>
            </p>
            <p>Рассказать о форматах в книге, посвященной HTML: <?php echo $_POST['about-book']; ?> </p>
            <p>Сколько книг вы прочитали за свою жизнь: <?php if (isset($_POST['books'])) echo $_POST['books']; ?> </p>
            <h3>Ваши комментарии:</h3>
            <textarea id="comments"> <?php echo $_POST['comments']; ?> </textarea>
            <p> <?php foreach ($_POST['poisiton'] as $keys => $values) echo "$values<br>"; ?> </p>     
        </fieldset>
        <fieldset id="at-last">
            <legend>И в заключении</legend>
            <p>Это поле было введено до вас <?php echo $_POST['personal']; ?> </p>
            <p>Email: <?php echo $_POST['email']; ?> </p>
            <h3>Вы подписались на рассылку на тему:</h3>
            <p> 
                <?php 
                    if (isset($_POST['subscribing'])) echo $_POST['subscribing'];
                ?> 
            </p>
            <h3>На сколько сложная задача:</h3>
            <p> <?php if (isset($_POST['finish-question'])) echo $_POST['finish-question']; ?> </p>
        </fieldset>
    </div>
</body>

</html>



<?php















