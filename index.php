<?php
require __DIR__ . '/header.php';
require __DIR__ . '/functions.php';

?>

<main class="container">

    <nav class="navbar">
        <p>
            <a href="https://jagtrycktefelju.nu/quiz.html"> - - Dagens quiz!</a>
            - - Slut på olja i Norge! - - Olof Palme funnen vid liv! - -
        </p>

    </nav>
    <h1 class="header">
        <img src="header2.png"></img>
    </h1>
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
            <br><br>
            <button class="button">Read more</button>
            <!---Perhaps link to full article and img?--->

            <br></br>

            <div class="author">
                <?= $author; ?>
                <?= $date; ?>
                <?= $image; ?>
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