<?php require('getQuote.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project02 - Great Quote Pretender</title>

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Coustard" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>

<div class="container">
    <h1>The Great <span>Quote</span> Pretender</h1>
    <div class="form_container <?= $class_form ?>">
        <form method="GET" action="/">
            <fieldset>
                <legend>Author</legend>
                <label for="username">Enter your name: </label>
                <input type="text" name="username" id="username" size="30"><br/>
                <p class="<?=$class_feedback_message?>">Please provide a name!</p>
            </fieldset>
            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="gender" value="female" id="female" checked>
                <label for="female">Female</label><br/>
                <input type="radio" name="gender" value="male" id="male">
                <label for="male">Male</label><br/>
            </fieldset>
            <fieldset>
                <legend>Language</legend>
                <select name="language" id="language">
                    <option value="English" selected>English</option>
                    <option value="German">German</option>
                    <option value="French">French</option>
                </select><br/>
            </fieldset>
            <input type="submit" value="Select Random Quote">
        </form>
    </div>

    <?php if($hasInput) : ?>
    <div class="img_container">
        <img src="img/background_<?=$_GET['gender']?>.png">
        <p class="quote"><?=$random_quote['quote']?></p>
        <p class="name"><?=$_GET['username']?></p>
        <img class="original_thinker_img" src="img/<?=$random_quote['img']?>" alt="">
    </div>
        <form action="/">
        <input type="submit" value="Show Form again">
        </form>
    <?php endif; ?>
</div>

</body>
</html>