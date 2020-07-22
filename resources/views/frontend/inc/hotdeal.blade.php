<!-- section -->
<div class="section section-grey">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- banner -->
            <div class="col-md-8">
                @foreach ($hotDeals as $hotdeal )
                    
                <div class="banner banner-1">
                    <img src="{{ asset('uploads/banner/'.$hotdeal->image)}}" width="750" height="563" alt="">
                    <div class="banner-caption text-center">
                        <h1 class="primary-color">{{$hotdeal->name}}<br><span class="white-color font-weak">{{$hotdeal->offer}}</span></h1>
                        <button class="primary-btn">{{$hotdeal->button_title}}</button>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- /banner -->
            <!-- banner -->
            @foreach ($hotDealsTwo as $hotTwo )  
            <div class="col-md-4 col-sm-6">
                <a class="banner banner-1" href="#">
                    <img src="{{ asset('uploads/banner/'.$hotTwo->image)}}" width="360" height="270" alt="">
                    <div class="banner-caption text-center">
                        <h2 class="white-color">{{$hotTwo->name}}</h2>
                    </div>
                </a>
            </div>
            @endforeach
            <!-- /banner -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->