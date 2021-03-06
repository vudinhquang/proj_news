@if (count($itemsSlider) > 0)
    <div class="home">
        <!-- Home Slider -->
        <div class="home_slider_container">
            <div class="owl-carousel owl-theme home_slider">
                <!-- Slide -->
                @foreach ($itemsSlider as $key => $val)
                    @php
                        $name = $val['name'];
                        $description = $val['description'];
                        $link = $val['link'];
                        $thumb = url('/images/slider') . '/' . $val['thumb'];
                    @endphp
                    <div class="owl-item home_slider_item">
                        <div class="background_image"
                            style="background-image:url({{ asset('news/images/zendvn-frontend-master2.jpg') }})">
                        </div>
                        <div class="home_slider_content text-center">
                            <div class="home_slider_content_inner" data-animation-in="fadeIn"
                                data-animation-out="animate-out fadeOut">
                                <div class="home_category"><a href="category.html">technology</a></div>
                                <div class="home_title">Khóa học lập trình Frontend Master</div>
                                <div class="home_text">Khóa học sẽ giúp bạn trở thành một chuyên gia Frontend với
                                    đầy đủ
                                    các
                                    kiến thức về HTML, CSS, JavaScript, Bootstrap, jQuery, chuyển PSD thành HTML ...
                                </div>
                                <div class="home_button trans_200"><a href="#">read more</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @if (count($itemsSlider) > 1)
                <!-- Home Slider Navigation -->
                <div class="home_slider_nav home_slider_prev trans_200"><i class="fa fa-angle-left trans_200"
                        aria-hidden="true"></i></div>
                <div class="home_slider_nav home_slider_next trans_200"><i class="fa fa-angle-right trans_200"
                        aria-hidden="true"></i></div>
            @endif
        </div>
    </div>
@endif
