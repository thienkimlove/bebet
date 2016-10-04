<div class="contentRight">
    <div class="boxAdv">
        @foreach ($rightBanners as $banner)
            <h3 class="globalTitle">
                <a href="{{$banner->url}}">
                    <img src="{{url('files', $banner->image)}}" alt="">
                </a>
            </h3>
        @endforeach
    </div>
    <div class="boxVideo">
        <h3 class="globalTitle">
            <a href="{{url('video')}}">Góc Video</a>
        </h3>
        @if ($featureVideos->count() > 0)
           <div class="content">
               @if ($firstVideo = $featureVideos->shift())
                   <iframe width="100%" height="250" src="{{$firstVideo->url}}" frameborder="0" allowfullscreen></iframe>
               @endif
                   @if ($featureVideos->count() > 0)
                    @foreach ($featureVideos as $video)
                    <div class="item clearFix">
                        <a href="{{url('video/'.$video->slug)}}" class="moreVideo">
                            <img src="{{url('img/cache/100x60', $video->image)}}" alt="" width="100" height="60">
                        </a>
                        <p>
                            {{$video->title}}
                        </p>
                    </div>
                    @endforeach
                   @endif
        </div>
        @endif
    </div>
    <!-- /endVideo -->
    <div class="boxSale">
        <h3 class="globalTitle">
            <a href="{{env('FB_LINK')}}">Cộng đồng mẹ thông thái</a>
        </h3>
        <div class="Social">
            <div class="fb-page"
                 data-href="{{env('FB_LINK')}}"
                 data-width="100%"
                 data-small-header="false"
                 data-adapt-container-width="true"
                 data-hide-cover="false"
                 data-show-facepile="true">
                <div class="fb-xfbml-parse-ignore">
                    <blockquote cite="{{env('FB_LINK')}}">
                        <a href="https://www.facebook.com/Be-Birth-331454547206717/">{{env('SITE_NAME')}}</a>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <!-- /endSale -->
</div>