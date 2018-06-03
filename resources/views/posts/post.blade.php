 <div class="blog-post">

            <h2 class="blog-post-title">
                <a href="/posts/{{$post->id}}">{{ $post->title }}</a>
            </h2>


            <p class="blog-post-meta">

                <a href="#">posted at {{ $post->created_at->toFormattedDateString()}}</a>
                <p> {{ $post->body }}</p>
                
            </p>

           
  </div><!-- /.blog-post -->
