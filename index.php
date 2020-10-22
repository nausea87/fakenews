<?php

require __DIR__ . '/header.php';
include __DIR__ . '/functions.php';

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

?>


<div class="container">
    <header>
        <h2>Man finds worlds largest mushroom</h2>
    </header>
    <article>
        Av: <?php echo getArticle($authors); ?>
        <div class="text-placeholder">

            <?php echo getArticle($articles); ?>


        </div>
    </article>
</div>

<div class="container">
    <header>
        <h2>Man finds worlds largest mushroom</h2>
    </header>
    <article>
        <div class="text-placeholder">
            <?php echo getArticle($articles); ?>
        </div>
    </article>
</div>









<?php require __DIR__ . '/footer.php'; ?>