<?php
$title = "<h1>文章列表</hi>";

$posts_html = '';
foreach ($posts as $post) {
    $posts_html .=<<<html
        <li>
            <a href="/read?id={$post['id']}">
                {$post['title']}
            </a>
        </li>
html;
}

$content =<<<html
    <ul>
        $posts_html
    </ul>
html;

require 'layout.php';
