@extends('layout')

@section('content')


    @foreach ($posts as $post)
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
@endsection
