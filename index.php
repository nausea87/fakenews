<?php
require __DIR__ . '/header.php';
require __DIR__ . '/functions.php';

?>
<div class="container">
    <h2>
        <div class="header">FAKENEWS!</header>
    </h2>

    <div class="separator"></div>
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


        <div class="headlines">
            <?= $title; ?>
        </div>

        <div class="news">
            <?= shortenText($content); ?>


            <!--expand--->
            <button class="button">Read more</button>
            <!---Button to expand--->
            <br>

            <?= $image; ?>
            <br>
            <div class="author">
                <?= $author; ?>
                <?= $date; ?>
            </div>

            <br>
            <?= $likes; ?>
            &#10084;&#65039;
            <?= $dislikes; ?>
            &#128545;


        </div>
        <br>
        <div class="separator"></div>


    <?php endforeach ?>


</div>




















<?php require __DIR__ . '/footer.php'; ?>