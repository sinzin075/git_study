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
                    <h2 class="titel">{{$post->title}}</h2>
                    <p class="body">{{$post->body}}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{$posts->links()}}
        </div>
    </body>
</html>