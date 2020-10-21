<?php

require __DIR__ . '/header.php';

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

?>


<box class="container">

    <header>
        <h1>Fake News n' stuff yo!</h1>
    </header>


    <article>

        <?php include __DIR__ . '/functions.php';

        echo getArticle($articles);
        ?>

    </article>





















    <footer>
        <small>Derp</small>
    </footer>


































    <?php require __DIR__ . '/footer.php'; ?>