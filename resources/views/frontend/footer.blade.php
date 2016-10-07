<footer class="footer" id="footer">
    <div class="container">
        <div class="boxFooter clearFix">
            <div class="areaSocial">
                <ul class="listSocial clearFix">
                    <li><a href="#" class="se">Search</a></li>
                    <li><a href="https://www.youtube.com/playlist?list=PL6cgnq2l30jLstXzMQVkIvaSpmqy_85la" class="yu">Youtube</a></li>
                    <li><a href="https://www.facebook.com/tienlietvuong.vn" class="sk">Skype</a></li>
                    <li><a href="#" class="go">googleplus</a></li>
                </ul>
            </div>
            <div class="areaLink">
                <ul class="listCategory clearFix">
                    <li><a href="{{url('/')}}">Trang chủ</a></li>
                    @foreach ($footerCategories as $category)
                        <li><a href="{{url($category->slug)}}">{{$category->name}}</a></li>
                    @endforeach
                    <li><a href="{{url('cau-hoi-thuong-gap')}}">CÂU HỎI THƯỜNG GẶP</a></li>
                    <li><a href="{{url('lien-he')}}">LIÊN HỆ</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyRight">
        <div class="container">
            <p class="copy">Giảm tiểu đêm - dịu êm tiền liệt tuyến<br />
 @ 2016 TIENLIETVUONG.VN. VUI LÒNG GHI RÕ NGUỒN KHI SỬ DỤNG NỘI DUNG TỪ WEBSITE NÀY.</p>
      </div>
    </div>
</footer>