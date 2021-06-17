
@include('header')
<div id="content">
    <article>
        <h1> <?= $post->title ?></h1>
        <hr>
        <?= $post->date ?>
        <div>
            1
            <?= $post->body ?>
            2
            {!! $post->body !!}
            3
            {{ $post->body }}
        </div>
        test   

        <a href="/">go back</a>
    </article>



    @yield('content')
</div>
@include('footer')
