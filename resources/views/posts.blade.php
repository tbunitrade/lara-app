
@include('header')
<div id="content">
    <?php foreach ($posts as $post) : ?>
    <article>
       <?= $post; ?>
    </article>
    <?php endforeach; ?>
    @yield('content')
</div>
@include('footer')
