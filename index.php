<?php
require __DIR__ . '/header.php';
require __DIR__ . '/functions.php';

?>

<main class="container">

    <h1 class="header">
        <img src="/images/header2.png"></img>
        <!---Header made in Figma--->
    </h1>
    <hr>

    <!---usort to sort articles based on date--->
    <?php usort($articles, 'date_compare'); ?>
    <?php foreach ($articles as $article) : ?>
        <?php
        $title = $article['title'];
        $content = $article['content'];
        $date = $article['published_date'];
        $likes = $article['likes'];
        $dislikes = $article['dislikes'];
        $author = $article['author'];
        $id = $article['id'];
        $image = $article['img']; ?>

        <h2 class="title">
            <?= $title; ?>
        </h2>

        <article class="content">
            <?= $content; ?>
            <br><br>
            <img src="<?= $article['img'] ?>" width="60%">
            <!---TODO: better way of posting img, this doesn't seem optimal--->

            <div class="author">
                <?= $author; ?>
                <?= $date; ?>
            </div>

            <div class="likes">
                <?= $likes; ?>
                &#10084;&#65039;
                <?= $dislikes; ?>
                &#128545;
            </div>
            <hr>
        </article>







    <?php endforeach ?>






</main>




















<?php require __DIR__ . '/footer.php'; ?>