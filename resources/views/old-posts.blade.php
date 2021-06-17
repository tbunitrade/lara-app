
@include('header')
<div id="content">
    @if(true)
    @endif

    @unless(1)
        222 endunless
    @endunless
    @foreach ($posts as $post)
{{--        {{dd($loop)}}--}}
{{--        @dd($loop)--}}
    <article class="{{$loop->even ? 'md-6' : 'md-8'}}">
       <h3>
           (((
           <a href="/posts/{{$post->slug}}">
               {{ $post->title }}
           </a>

       </h3>
        <h4>
            {{ $post->excerpt }}
        </h4>
        <em>
            {{ $post->date }}
        </em>
        <div>
            <?= $post->body ?>
            22
            {!!  $post->body  !!}
        </div>
    </article>
    @endforeach
    @yield('content')
</div>
@include('footer')
