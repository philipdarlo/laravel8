<!doctype html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">

<?php
use App\Models\Post;
/** @var Post $post */
?>

<body>
<article>
    <h1>
        <?= $post->title ?>
    </h1>
    <div>
        <?= $post->body ?>
    </div>
</article>

    <a href="/" >Go Back</a>
</body>
