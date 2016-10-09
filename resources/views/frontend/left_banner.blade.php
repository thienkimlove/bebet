<div id="outer">
    <div id="adv">
        <div id="slideads">
            @foreach ($leftBanners as $k => $banner)
            <div class="slideads{{$k+1}}" id="slideads{{$k+1}}">
                <ul>
                    <li>
                        <a rel="nofollow" href="{{$banner->url}}" title="Banner chạy dọc bên trái" target="_blank">
                            <img width="120" height="410" src="{{url('img/cache/120x410', $banner->image)}}" alt="Banner">
                        </a>
                    </li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</div>