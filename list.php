<?php
function get_title() {
	return "<h1>文章列表</h1>";
}

function get_content($posts) {
	
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

	return $posts_html;
}

$title = get_title();
$content = get_content($posts);
$content =<<<html
    <ul>
        $content
    </ul>
html;

require '/templates/layout.php';
