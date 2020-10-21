<?php

declare(strict_types=1);

require __DIR__ . '/articles.php';
require __DIR__ . '/data.php';



function getArticle(array $articles): string
{
    foreach ($articles as $article)
        return ($article);
}

function getTitle(array $datas): string
{
    foreach ($datas as $data)
        return ($data['title'][0]); //Faulty
}





// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.
