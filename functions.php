<?php

declare(strict_types=1);

require __DIR__ . '/articles.php';
require __DIR__ . '/authors.php';
require __DIR__ . '/data.php';

// TODO : Functions 'working' but not really working.
// You know what I mean? Hmm? Good.

function getAuthor(array $authors)
{
    foreach ($authors as $author)
        return $author;
}

// TODO: Fix proper function here you fucking twat.
function getTitle(array $data): array
{
    foreach ($data['titles'] as $title)
        return $title[0];
}

function getArticle(array $articles)
{
    foreach ($articles as $article)
        return $article;
}














// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.
