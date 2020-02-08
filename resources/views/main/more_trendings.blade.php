@include('main/layouts/page_header')

<div class="page-content">
                <div class="wt-bnr-inr overlay-wraper" style="background-image:url(main/images/banner/haircut_banner.jpg);">
                    <div class="overlay-main bg-black opacity-07"></div>
                    <div class="container">
                        <div class="wt-bnr-inr-entry">
                            <h1 class="text-white">Hair Cut</h1>
                            <h2><font face="freestyle script" color="white">Enjoy With New trends......</font></h2>
                        </div>
                    </div>
                </div>
</div>


<!-- BANNER START -->
   
                <div class="bg-gray-light p-tb20">
                    <div class="container">
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-trending"></i>Trending</a></li>
                            <li>Trending category</li>
                        </ul>
                    </div>
                </div>
<!-- BANNER END -->
<!--DISCRIPTION-->
<div class="container">
                    <div class="row">
                        <p>
                            Want to know which hairstyles, cuts and colors are trend right now? Then this is exactly where you need to be. Between our panel of expert stylists and scouring the red carpets, we bring you today’s freshest new looks…
                        </p>
                    </div>
</div>
<!--DISCRIPTION END-->

<!-- TREND CAT start -->
<div class="container">
    @if(count($trendings)>0)
                            @foreach($trendings as $category)
                        <div class="row">

                            <!-- COLUMNS 4 -->
                            
                            <div class="col-md-4 col-sm-4 p-tb15">
                                    <div class="wt-team-one bg-white">
                                        <div class="wt-team-media">
                                            <div class="wt-box">
                                                <div class="wt-thum-bx wt-img-effect side-pan">
           
                        <a href="javascript:void(0);"><img style="width:100%; height:240px;" src="main/images/{{$category->trendig_pic}}"" class="" alt=""></a>
                                                </div>
                                            </div>
    
                                        </div>
                                        <div class="wt-team-info text-center bg-white p-a10">
           
                                        <h4 class="wt-team-title"><a href="javascript:void(0);">{{$category->trendig_name}}</a></h4>
                                        
                                           
                                        </div>
                                    </div>
                                </div>
                        </div>

                            @endforeach
                            @endif
                        </div>
                    {{-- <div class="row">

                        <div class="col-md-4 col-sm-6">
                            <div class="flip-container vertical">
                                 <div class="wt-box">
                                      <div class="wt-thum-bx">
                                      <img src="main/images/hair_cut.jpg" alt="">	
                                      </div>
                                <div class="wt-info bg-gray text-center p-a20">
                                <h3 class="text-uppercase">TRENDING</h3>
                                <p>Get ready to be inspired for your next edgy look. Whether you want to have shaved sides and longer hair on top or an edgy pattern underneath your hair, you'll find a cool undercut look for you.</p>
                                </div>
                                </div>
                           </div>
                           
                            
                       
    </div>
</div> --}}
<!-- TREND CAT END -->




@include('main/layouts/page_footer')