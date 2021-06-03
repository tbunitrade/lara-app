
@include('header')
<div id="content">
    <article>
    <?= $post; ?>

        <a href="/">go back</a>
    </article>



    @yield('content')
</div>
@include('footer')
