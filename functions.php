<?php

declare(strict_types=1);


require __DIR__ . '/data.php';

function getArticleById(array $articles, int $id): array
{
    foreach ($articles as $article) {
        if ($article['id'] === $id) {
            return $article;
        }
    }
}

function date_compare(array $element1, array  $element2): int
{
    $datetime1 = strtotime($element1['published_date']);
    $datetime2 = strtotime($element2['published_date']);
    return $datetime2 - $datetime1;
}

function shortenText(string $text, $chars = 400): string
{
    $text = $text . " ";
    $text = substr($text, 0, $chars);
    $text = substr($text, 0, strrpos($text, ' '));
    $text = $text . "...";
    return $text;
}
