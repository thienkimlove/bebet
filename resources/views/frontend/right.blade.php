<div class="col-right">
    @if ($featureVideos->count() > 0)
        <div class="box-video">
            <h3 class="global-title"><a href="{{url('video')}}">Góc videos</a></h3>
            @if ($firstVideo = $featureVideos->shift())
                <div class="data">
                    <iframe width="100%" height="315" src="{{$firstVideo->url}}" frameborder="0" allowfullscreen></iframe>
                </div>
            @endif
            @if ($featureVideos->count() > 0)
                <ul class="listVideo">
                    @foreach ($featureVideos as $video)
                      <li><a href="{{url('video/'.$video->slug)}}">{{$video->title}}</a></li>
                    @endforeach
                </ul>
            @endif
        </div>
    @endif
    @foreach ($rightBanners as $banner)
        <div class="box-adv">
            <a href="{{$banner->url}}">
                <img src="{{url('files/'.$banner->image)}}" alt="Tiền liệt vương">
            </a>
        </div>
    @endforeach
    
    
    <!-- /endHot -->
    <div class="Social">
        <div class="fb-page" data-href="https://www.facebook.com/tienlietvuong.vn/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/tienlietvuong.vn/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/tienlietvuong.vn/">Tiền Liệt Vương</a></blockquote>
        </div>
      </div>

        @if ($page != 'phan-phoi' && $page != 'lien-he')
            <div class="boxHot cf" id="sidebar">
                <h3 class="global-title"><a href="{{url('tin-tuc')}}">Tin nổi bật</a></h3>
                @foreach ($rightNews as $post)
                    <div class="item cf">
                        <a href="{{url($post->slug.'.html')}}" class="thumb">
                            <img src="{{url('img/cache/100x80/'.$post->image)}}" alt="hot" width="100" height="80">
                        </a>
                        <h4>
                            <a href="{{url($post->slug.'.html')}}">{{$post->title}}</a>
                        </h4>
                    </div>
                @endforeach
            </div>

        @endif

</div><!--//col-right-->