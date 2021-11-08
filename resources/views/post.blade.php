<?php
use App\Models\Post;
/** @var Post $post */
?>
<x-layout>
    <article>
        <h1>
            {{ $post->title }}
        </h1>
        <div>
            {!! $post->body !!}
        </div>
    </article>
    <a href="/" >Go Back</a>
</x-layout>
