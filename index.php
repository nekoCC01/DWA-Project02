<?php require('getQuotes.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project02 - YouQuoted</title>

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">

        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pure/1.0.0/pure-min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/cerulean/bootstrap.min.css"> -->

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>


<h1>Quote Generator</h1>
<div class="form_container <?=$class_hide?>">
    <form method="GET" action="/">
        <fieldset>
            <legend>Author</legend>
            <label for="username">Enter your name: </label>
            <input type="text" name="username" id="username" size="30"><br/>
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
                <option value="english" selected>English</option>
                <option value="german">German</option>
            </select><br/>
        </fieldset>
        <input type="submit" value="Select Random Quote">
    </form>
</div>
<div class="img_container">
<img src="img/background_male.png">
    <p class="quote">Test Text</p>
    <p class="name">Name</p>
    <img class="original_thinker_img" src="img/Hobbes.jpg" alt="">
</div>
<p></p>

</body>
</html>