
@include('header')
<div id="content">
    <?php foreach ($posts as $post) : ?>
    <article>
       <h3>
           (((
           <a href="/posts/<?= $post->slug;?>">
               <?= $post->title; ?>
           </a>

       </h3>
        <h4>
            <?= $post->excerpt; ?>
        </h4>
        <em>
            <?= $post->date; ?>
        </em>
        <p>
            <?= $post->body; ?>
        </p>
    </article>
    <?php endforeach; ?>
    @yield('content')
</div>
@include('footer')
