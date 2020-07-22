
<!-- HOME -->
<div id="home">
    <!-- container -->
    <div class="container">
        <!-- home wrap -->
        <div class="home-wrap">
            <!-- home slick -->
            <div id="home-slick">
                <!-- banner -->
                @foreach ( $sliders as $slider )    
                    <div class="banner banner-1">
                  <img src="{{ asset('uploads/slider/'.$slider->image)}}" width="650" height="489" alt="">
                  <div class="banner-caption text-center">
                      <h1>{{$slider->name}}</h1>
                      <h3 class="white-color font-weak">Up to 50% Discount</h3>
                      <button class="primary-btn">{{$slider->button_title}}</button>
                  </div>
                </div>
                  @endforeach
                <!-- /banner -->

                {{-- <!-- banner -->
                <div class="banner banner-1">
                    <img src="{{ asset('assets/img/banner02.jpg')}}" alt="">
                    <div class="banner-caption">
                        <h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>
                        <button class="primary-btn">Shop Now</button>
                    </div>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="banner banner-1">
                    <img src="{{ asset('assets/img/banner03.jpg')}}" alt="">
                    <div class="banner-caption">
                        <h1 class="white-color">New Product <span>Collection</span></h1>
                        <button class="primary-btn">Shop Now</button>
                    </div>
                </div>
                <!-- /banner --> --}}
            </div>
            <!-- /home slick -->
        </div>
        <!-- /home wrap -->
    </div>
    <!-- /container -->
</div>
<!-- /HOME -->