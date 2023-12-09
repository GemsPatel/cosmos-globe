<ul class="thm-breadcrumb list-unstyled ml-0">
    <!-- Breadcrumb NavXT 7.2.0 -->
    <li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                title="Go to COSMOS Globe" href="{{route('home')}}" class="home"><span
                    property="name">Home</span></a>
            <meta property="position" content="1">
        </span>
    </li>
        @if ($breadcrumb)
            @foreach ($breadcrumb as $item)
                @if ($loop->last)
                    <li class="post post-page current-item"><span property="itemListElement" typeof="ListItem">
                        <span property="name" class="post post-page current-item">{{ $item['title'] }}</span>
                            <meta property="url" content="">
                            <meta property="position" content="2">     
                        </span>
                    </li>
                @else
                    <li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                        title="Go to COSMOS Globe" href="{{ $item['link'] }}" class="home"><span
                        property="name">{{ $item['title'] }}</span></a>
                            <meta property="position" content="1">
                        </span>
                    </li>
                
                @endif
            @endforeach
        @endif
       
</ul>