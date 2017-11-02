<div class="panel panel-primary">
<div class="panel-heading">
    Articles <small>({{ $articles->count() }})</small>
</div>
<div class="panel-body">
    <div class="row">
        <div class="container">
            <form action="{{ url('search') }}" method="get">
                <div class="form-group">
                    <input
                            type="text"
                            name="q"
                            class="form-control"
                            placeholder="Search..."
                            value="{{ request('q') }}"
                    />
                </div>
            </form>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <button type="submit" name="btn-upload">Upload File</button>
	            <input type="file" name="file" />   
	        </form>

        </div>
    </div>

    <div class="row">
        <div class="container">
            @forelse ($articles as $article)
                <article>
                    <h2>{{ $article->title }}</h2>

                    <!-- <p>{{ $article->body }}</p> -->

                    <p class="well"> <h3> Tags:
                        {{ implode(', ', $article->tags ?: []) }}
                    </p>
                </article>
            @empty
                <p>No articles found</p>
            @endforelse
        </div>
    </div>
</div>
</div>