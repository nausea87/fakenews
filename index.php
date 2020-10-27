<?php
require __DIR__ . '/header.php';
require __DIR__ . '/functions.php';

?>

<main class="container">

    <nav class="navbar">QUIZ</nav>
    <h1 class="header">FAKENEWS! FAKENEWS! FAKENEWS!</h1>
    <hr>


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
            <?= shortenText($content); ?>
            <button class="button">Read more</button>
            <!---Perhaps link to full article and img?--->

            <br>

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