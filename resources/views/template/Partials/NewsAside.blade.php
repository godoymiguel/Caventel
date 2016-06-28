
<div class="sidebar">

    <!-- Sidebar Block -->
    <div class="sidebar-block">
        <h3 class="h3-sidebar-title sidebar-title">
            Noticias Recientes
        </h3>

        <div class="sidebar-content">
            <ul class="posts-list">
                @foreach($news_last as $item)
                    <li>
                        <div class="posts-list-thumbnail">
                            <img src="{{ asset('img/news/' . $item->img) }}" alt="webPage" width="54px"
                                 height="54px"/>
                        </div>
                        <div class="posts-list-content">
                            <a href="{{ route('user.shownews', $item->id) }}" class="posts-list-title">{{ $item->title }}</a>
                                                        <span class="posts-list-meta">
                                                            {{ $item->created_at->toFormattedDateString() }}
                                                        </span>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
    <!-- Sidebar Block -->
</div>