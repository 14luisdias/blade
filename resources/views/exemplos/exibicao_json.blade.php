<h1>Meus Posts</h1>
<ul>
    @foreach($posts as $post)
        <li>
            <h2>{{ $post['titulo'] }}</h2>
            <p>{{ $post['conteudo'] }}</p>
        </li>
    @endforeach
</ul>

<script>
    var posts = @json($posts);
    console.log(posts);
</script>
