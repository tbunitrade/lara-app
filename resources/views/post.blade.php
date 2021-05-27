
@include('header')
<div id="content">
    <article>
    <?= $post; ?>
        
        <a href="/posts">go back</a>
    </article>
    
   
    
    @yield('content')
</div>
@include('footer')
