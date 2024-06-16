<!DOCTYPE html>
<html lange="{{ str_replace('_','-',app()->getLocale())}}">
    <head>
        <meta charset="utg-8">
        <titel>Blog</titel>
        <!-- Fonts -->
        <link href="https://fonts.googlepis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class="posts">
            @foreach ($posts as $post)
                <div class="post">

                    <h2 class = "title">
                        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                    </h2>
                    <P class= "body">{{$post->body}}</P>
                    <a href="/categories/{{$post->category->id}}">{{$post->category->name}}</a>
                </div>
            @endforeach
        </div>
        <a href='/posts/create'>create</a>
        <div class='paginate'>
            {{$posts->links()}}
        </div>
        <script>
            function deletePost(id){
                'use strict'
                
                if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>
