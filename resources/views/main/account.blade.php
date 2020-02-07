@include('main/layouts/page_header')
@if(count($saloons)>0)
        @foreach($saloons as $user)
                <!-- ABOUT SECTION START -->
            <div class="section-full p-tb100 bg-bottom-center bg-full-width bg-no-repeat">
                <div class="container ">
                    <div class="section-content about4-section">
                      <div class="row">
                          <div class="col-md-5 col-sm-5">
                              <div class="about4-section-pic ">
                                  <div class="wt-media">
                                      <img src="main/images/slid-2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-7">
                              <div class="about4-content">
                                    <h2><span class="text-primary">Welcome to </span> {{$user->saloon_name}} </h2>
                                    <p> {{$user->description}} </p>
                                    <div class="text-right p-b30">
                                      <img src="main/images/sign.png" alt="">
                                    </div>    
                                    <div>
                                        <form class="radius-sm" action="appoinment">
                                                                    
                                                    <button class="site-button font-weight-700 inline-block text-uppercase p-lr15" value="{{$user->salon_id}}" name="appoinment" type="submit">Book now>><i class="fa fa-angle-double-right"></i></button>
                                                
                                        </form> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>	
                </div>
            </div>   
            <!-- ABOUT COMPANY SECTION END -->
  
              <!-- GALLERY STYLE-2 -->
              <div class="section-full p-t80 p-b80 bg-white" id="content1">
                <div class="container">
                     <!-- TITLE START-->
                     <div class="section-head text-center">
                        <h2><span class="text-primary">Our</span> Gallery</h2>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>                            
                        </div>
                        <p>Description 1</p>
                    </div>
                     <!-- TITLE END-->
                                              
                     <!-- PAGINATION START -->
                    <div class="filter-wrap p-a15 our-gallery  m-tb30">
                        <ul class="masonry-filter link-style  text-uppercase center-block m-t0">
                            <li class="active"><a data-filter="*" href="#">All</a></li>
                            <li><a data-filter=".cat-filter-1" href="#">Hair cut</a></li>
                            <li><a data-filter=".cat-filter-2" href="#">Foot</a></li>
                            <li><a data-filter=".cat-filter-3" href="#">Body</a></li>
                            <li><a data-filter=".cat-filter-4" href="#">Massage</a></li>
                            <li><a data-filter=".cat-filter-5" href="#">Face massage</a></li>
                        </ul>
                    </div>
                    <!-- PAGINATION END -->
                   
                    <div class="portfolio-wrap mfp-gallery  no-col-gap">
                            <div class="row">
                                <div class="masonry-item cat-filter-1 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="wt-gallery-bx">
                                        <div class="wt-thum-bx wt-img-effect wt-img-overlay7">
                                        
                                            <a href="javascript:void(0);">
                                                <img src="main/images/gallery/portrait/pic5.jpg"  alt="">
                                            </a>
                                            
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <a href="javascript:void(0);">
                                                        <i class="fa fa-link wt-icon-box-xs"></i>
                                                    </a>
                                                    <a href="main/images/gallery/portrait/pic5.jpg" class="mfp-link">
                                                        <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="masonry-item cat-filter-2 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="wt-gallery-bx">
                                        <div class="wt-thum-bx wt-img-effect wt-img-overlay7">
                                        
                                            <a href="javascript:void(0);">
                                                <img src="main/images/gallery/portrait-half/pic1.jpg"  alt="">
                                            </a>
                                            
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <a href="javascript:void(0);">
                                                        <i class="fa fa-link wt-icon-box-xs"></i>
                                                    </a>
                                                    <a href="main/images/gallery/portrait-half/pic1.jpg" class="mfp-link">
                                                        <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="masonry-item cat-filter-3 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="wt-gallery-bx">
                                        <div class="wt-thum-bx wt-img-effect wt-img-overlay7">
                                        
                                            <a href="javascript:void(0);">
                                                <img src="main/images/gallery/portrait/pic6.jpg"  alt="">
                                            </a>
                                            
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <a href="javascript:void(0);">
                                                        <i class="fa fa-link wt-icon-box-xs"></i>
                                                    </a>
                                                    <a href="main/images/gallery/portrait/pic6.jpg" class="mfp-link">
                                                        <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="masonry-item cat-filter-4 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="wt-gallery-bx">
                                        <div class="wt-thum-bx wt-img-effect wt-img-overlay7">
                                        
                                            <a href="javascript:void(0);">
                                                <img src="main/images/gallery/portrait-half/pic2.jpg"  alt="">
                                            </a>
                                            
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <a href="javascript:void(0);">
                                                        <i class="fa fa-link wt-icon-box-xs"></i>
                                                    </a>
                                                    <a href="images/gallery/portrait-half/pic2.jpg" class="mfp-link">
                                                        <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="masonry-item cat-filter-5 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="wt-gallery-bx">
                                        <div class="wt-thum-bx wt-img-effect wt-img-overlay7">
                                        
                                            <a href="javascript:void(0);">
                                                <img src="main/images/gallery/portrait-half/pic3.jpg"  alt="">
                                            </a>
                                            
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <a href="javascript:void(0);">
                                                        <i class="fa fa-link wt-icon-box-xs"></i>
                                                    </a>
                                                    <a href="main/images/gallery/portrait-half/pic3.jpg" class="mfp-link">
                                                        <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="masonry-item cat-filter-1 col-lg-8 col-md-8 col-sm-8 col-xs-6">
                                    <div class="wt-gallery-bx">
                                        <div class="wt-thum-bx wt-img-effect wt-img-overlay7">
                                        
                                            <a href="javascript:void(0);">
                                                <img src="main/images/gallery/landscape-half/pic1.jpg"  alt="">
                                            </a>
                                            
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <a href="javascript:void(0);">
                                                        <i class="fa fa-link wt-icon-box-xs"></i>
                                                    </a>
                                                    <a href="main/images/gallery/landscape-half/pic1.jpg" class="mfp-link">
                                                        <i class="fa fa-picture-o wt-icon-box-xs"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
            <!-- GALLERY STYLE-2 End --> 
  
            <!-- PRICING SECTION START  -->
            <div class="section-full bg-gray p-t80 p-b120">
              <div class="container">
                  <!-- TITLE START-->
                  <div class="section-head text-center">
                      <h2><span class="text-primary">Our</span> Services</h2>
                      <div class="wt-separator-outer">
                          <div class="wt-separator style-icon">
                              <i class="fa fa-leaf text-black"></i>
                              <span class="separator-left bg-primary"></span>
                              <span class="separator-right bg-primary"></span>
                          </div>                            
                      </div>
                      <p>Discription</p>
                  </div>
                  <!-- TITLE END-->
                  <div class="section-content">
                      <div class="owl-carousel our-pricing-carousel owl-btn-vertical-center owl-btn-hover nav nav-tabs">
                        
                          <!-- Block 1 -->
                          <div class="item active-arrow active">
                              <div data-toggle="tab" data-target="#pricing-item1" class="tab-block">
                                  <div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
                                      <div class="wt-icon-box-wraper center  p-lr10">
                                        <div class="icon-lg m-b5">
                                              <span class="icon-cell  text-black"><i class="flaticon-people"></i></span>
                                          </div>
                                          <div class="icon-content">
                                              <span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Spa</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- Block 2 -->
                          <div class="item">
                              <div data-toggle="tab" data-target="#pricing-item2" class="tab-block">
                                  <div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
                                      <div class="wt-icon-box-wraper center  p-lr10">
                                          <div class="icon-lg m-b5">
                                              <span class="icon-cell  text-black"><i class="flaticon-eye"></i></span>
                                          </div>
                                          <div class="icon-content">
                                              <span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Hair Makeup</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- Block 3 -->
                          <div class="item">
                              <div data-toggle="tab" data-target="#pricing-item3" class="tab-block">
                                  <div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
                                      <div class="wt-icon-box-wraper center  p-lr10">
                                        <div class="icon-lg m-b5">
                                              <span class="icon-cell  text-black"><i class="flaticon-female-hairs"></i></span>
                                          </div>
                                          <div class="icon-content">
                                              <span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Waxing</span>
                                          </div>    
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- Block 4 -->
                          <div class="item">
                              <div data-toggle="tab" data-target="#pricing-item4" class="tab-block">
                                  <div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
                                      <div class="wt-icon-box-wraper center  p-lr10">
                                          <div class="icon-lg m-b5">
                                              <span class="icon-cell  text-black"><i class="flaticon-mirror"></i></span>
                                          </div>
                                          <div class="icon-content">
                                              <span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Facial</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- Block 5 -->
                          <div class="item">
                              <div data-toggle="tab" data-target="#pricing-item5" class="tab-block">
                                  <div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
                                      <div class="wt-icon-box-wraper center  p-lr10">
                                          <div class="icon-lg m-b5">
                                              <span class="icon-cell  text-black"><i class="flaticon-spray-bottle"></i></span>
                                          </div>
                                          <div class="icon-content">
                                              <span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Massage</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- Block 6 -->
                          <div class="item">
                              <div data-toggle="tab" data-target="#pricing-item6" class="tab-block">
                                  <div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
                                      <div class="wt-icon-box-wraper center  p-lr10">
                                        <div class="icon-lg m-b5">
                                              <span class="icon-cell  text-black"><i class="flaticon-people"></i></span>
                                          </div>
                                          <div class="icon-content">
                                              <span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Spa</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- Block 7 -->
                          <div class="item">
                              <div data-toggle="tab" data-target="#pricing-item7" class="tab-block">
                                  <div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
                                      <div class="wt-icon-box-wraper center  p-lr10">
                                          <div class="icon-lg m-b5">
                                              <span class="icon-cell  text-black"><i class="flaticon-eye"></i></span>
                                          </div>
                                          <div class="icon-content">
                                              <span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Hair Makeup</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          
                      </div>
                  </div>
                      
                  <div class="tab-content">
                      <!-- Block 1 -->
                      <div id="pricing-item1" class="pricing-tab-content-block tab-pane active active-arrow">
                          <div class="section-content p-t50">
                                  <!-- TABS DEFAULT NAV LEFT -->
                                  <div class="wt-tabs vertical bg-tabs">
                                      <ul class="nav nav-tabs">
                                          <li class="active"><a data-toggle="tab" href="#pricing-tab1-1">Bridals</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab1-2">Facials</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab1-3">Hair cuts</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab1-4">Nail arts</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab1-5">Body Wraps</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab1-6">Waxing & Cosmetics</a></li>
                                      </ul>
                                      <div class="tab-content p-l50">
                                      
                                          <div id="pricing-tab1-1" class="tab-pane active">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s1.jpg" alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Massage Therapy </h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Description
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab1-2" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s2.jpg" alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Facials </h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Descriction
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab1-3" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s3.jpg" alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Pedicures </h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Descriction
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab1-4" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s4.jpg" alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Manicures</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Descriction
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab1-5" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s5.jpg" alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Body Wraps</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Descriction
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab1-6" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s6.jpg" alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Waxing & Cosmetics</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Descriction
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                      </div>
                                  </div>
                              </div>
                      </div>
                      <!-- Block 2 -->
                      <div id="pricing-item2" class="pricing-tab-content-block tab-pane">
                          <div class="section-content p-t50">
                                  <!-- TABS DEFAULT NAV LEFT -->
                                  <div class="wt-tabs vertical bg-tabs">
                                      <ul class="nav nav-tabs">
                                          <li class="active"><a data-toggle="tab" href="#pricing-tab2-1">Hair Color</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab2-2">Braids & Twist</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab2-3">Corrective Color</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab2-4">Hair Extension</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab2-5">Hair Cut</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab2-6">Partial Foil</a></li>
                                      </ul>
                                      <div class="tab-content p-l50">
                                      
                                          <div id="pricing-tab2-1" class="tab-pane active">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s2.jpg" alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Hair Color </h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Descriction
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab2-2" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s3.jpg" alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Braids & Twist </h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Descriction
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab2-3" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s4.jpg" alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Corrective Color</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Descriction
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab2-4" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s5.jpg" alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Hair Extension</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Descriction
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab2-5" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s6.jpg" alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Hair Cut</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Descriction
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab2-6" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s1.jpg"  alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Partial Foil</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Descriction
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                      </div>
                                  </div>
                              </div>
                      </div>
                      <!-- Block 3 -->
                      <div id="pricing-item3" class="pricing-tab-content-block tab-pane">
                          <div class="section-content p-t50">
                                  <!-- TABS DEFAULT NAV LEFT -->
                                  <div class="wt-tabs vertical bg-tabs">
                                      <ul class="nav nav-tabs">
                                          <li class="active"><a data-toggle="tab" href="#pricing-tab3-1">Eye Brows </a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab3-2">Lips </a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab3-3">Eye Brow & Lips</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab3-4">Chin & Lips </a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab3-5">Side of Face</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab3-6">Lower Leg</a></li>    
                                      </ul>
                                      <div class="tab-content p-l50">
                                      
                                          <div id="pricing-tab3-1" class="tab-pane active">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s3.jpg"  alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Eye Brows </h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Descriction
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab3-2" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s4.jpg"  alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Lips </h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Descriction
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab3-3" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s5.jpg"  alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Eye Brow & Lips </h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Descriction
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab3-4" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s6.jpg"  alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Chin & Lips </h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Descriction
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab3-5" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s1.jpg"  alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Side of Face</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Descriction
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab3-6" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s2.jpg"  alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Lower Leg</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Descriction
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                      </div>
                                  </div>
                              </div>
                      </div>
                      <!-- Block 4 -->
                      <div id="pricing-item4" class="pricing-tab-content-block tab-pane">
                          <div class="section-content p-t50">
                                  <!-- TABS DEFAULT NAV LEFT -->
                                  <div class="wt-tabs vertical bg-tabs">
                                      <ul class="nav nav-tabs">
                                          <li class="active"><a data-toggle="tab" href="#pricing-tab4-1">Hand-On Facial </a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab4-2">Electrotherapy </a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab4-3">Clean up</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab4-4">Anti Ageing </a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab4-5">Glow & Radiance</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab4-6">Normal Wash</a></li>
                                      </ul>
                                      <div class="tab-content p-l50">
                                      
                                          <div id="pricing-tab4-1" class="tab-pane active">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s4.jpg"  alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Hand-On Facial</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Descriction
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab4-2" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s5.jpg"  alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Electrotherapy </h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Descriction
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab4-3" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s6.jpg"  alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Clean up</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Descriction
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab4-4" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s1.jpg"  alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Anti Ageing </h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Descriction
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab4-5" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s2.jpg"  alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Glow & Radiance</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Descriction
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab4-6" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s3.jpg"  alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Normal Wash</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Descriction
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                      </div>
                                  </div>
                              </div>
                      </div>
                      <!-- Block 5 -->
                      <div id="pricing-item5" class="pricing-tab-content-block tab-pane">
                          <div class="section-content p-t50">
                                  <!-- TABS DEFAULT NAV LEFT -->
                                  <div class="wt-tabs vertical bg-tabs">
                                      <ul class="nav nav-tabs">
                                          <li class="active"><a data-toggle="tab" href="#pricing-tab5-1">Head</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab5-2">Back</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab5-3">Foot</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab5-4">Aromatherapy</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab5-5">Scrub</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab5-6">Tissue</a></li>
                                      </ul>
                                      <div class="tab-content p-l50">
                                      
                                          <div id="pricing-tab5-1" class="tab-pane active">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s5.jpg"  alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Head</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                              when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                              remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                              text of the printing and eentially unchanged.
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab5-2" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s6.jpg"  alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Back </h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                              when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                              remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                              text of the printing and eentially unchanged.
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab5-3" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s1.jpg"  alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Foot</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                              when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                              remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                              text of the printing and eentially unchanged.
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab5-4" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s2.jpg"  alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Aromatherapy</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                              when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                              remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                              text of the printing and eentially unchanged.
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab5-5" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s3.jpg"  alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Scrub</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                              when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                              remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                              text of the printing and eentially unchanged.
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab5-6" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s4.jpg"  alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Tissue</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                              when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                              remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                              text of the printing and eentially unchanged.
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                      </div>
                                  </div>
                              </div>
                      </div>
                      <!-- Block 6 -->
                      <div id="pricing-item6" class="pricing-tab-content-block tab-pane ">
                          <div class="section-content p-t50">
                                  <!-- TABS DEFAULT NAV LEFT -->
                                  <div class="wt-tabs vertical bg-tabs">
                                      <ul class="nav nav-tabs">
                                          <li class="active"><a data-toggle="tab" href="#pricing-tab6-1">Massage Therapy</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab6-2">Facials </a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab6-3">Pedicures</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab6-4">Manicures</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab6-5">Body Wraps</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab6-6">Waxing & Cosmetics</a></li>
                                      </ul>
                                      <div class="tab-content p-l50">
                                      
                                          <div id="pricing-tab6-1" class="tab-pane active">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s6.jpg" alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Massage Therapy </h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                              when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                              remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                              text of the printing and eentially unchanged.
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab6-2" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s1.jpg" alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Facials</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                              when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                              remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                              text of the printing and eentially unchanged.
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab6-3" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s2.jpg" alt="">
  
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Pedicures</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                              when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                              remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                              text of the printing and eentially unchanged.
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab6-4" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s4.jpg" alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Manicures</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                              when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                              remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                              text of the printing and eentially unchanged.
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab6-5" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s4.jpg" alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Body Wraps</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                              when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                              remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                              text of the printing and eentially unchanged.
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab6-6" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s5.jpg" alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Waxing & Cosmetics</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                              when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                              remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                              text of the printing and eentially unchanged.
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                      </div>
                                  </div>
                              </div>
                      </div>
                      <!-- Block 7 -->
                      <div id="pricing-item7" class="pricing-tab-content-block tab-pane">
                          <div class="section-content p-t50">
                                  <!-- TABS DEFAULT NAV LEFT -->
                                  <div class="wt-tabs vertical bg-tabs">
                                      <ul class="nav nav-tabs">
                                          <li class="active"><a data-toggle="tab" href="#pricing-tab7-1">Hair Color</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab7-2">Braids & Twist</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab7-3">Corrective Color</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab7-4">Hair Extension</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab7-5">Hair Cut</a></li>
                                          <li><a data-toggle="tab" href="#pricing-tab7-6">Partial Foil</a></li>
                                      </ul>
                                      <div class="tab-content p-l50">
                                      
                                          <div id="pricing-tab7-1" class="tab-pane active">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s1.jpg" alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Hair Color</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                              when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                              remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                              text of the printing and eentially unchanged.
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab7-2" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s2.jpg" alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Braids & Twist</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                              when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                              remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                              text of the printing and eentially unchanged.
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab7-3" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s3.jpg" alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Corrective Color</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                              when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                              remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                              text of the printing and eentially unchanged.
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab7-4" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s4.jpg" alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Hair Extension</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                              when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                              remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                              text of the printing and eentially unchanged.
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab7-5" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s5.jpg" alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Hair Cut</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                              when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                              remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                              text of the printing and eentially unchanged.
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div id="pricing-tab7-6" class="tab-pane">
                                              <div class="pricing-tab-inner">
                                                  <div class="row">
                                                      <div class="col-md-6">
                                                          <div class="wt-media">
                                                              <img src="main/images/our-services/large/s6.jpg"  alt="">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <div class="wt-tilte">
                                                              <h3 class="font-26 p-b20 font-weight-400">Partial Foil</h3>
                                                              <h4 class="text-primary">$40 - $80</h4>
                                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                              when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                              remaining essentially unchanged. It was popularised in the with theLorem Ipsum is simply dummy
                                                              text of the printing and eentially unchanged.
                                                              </p>
                                                              <a href="#" class="site-button skew-icon-btn radius-sm">
                                                                <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span> 
                                                              </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                      </div>
                                  </div>
                              </div>
                      </div>
                      
                  </div>
                  
              </div>
          </div>
          <!-- PRICING SECTION END  -->   
          
            {{-- <!-- CONTACT US SECTION END  --> 
              <div class="section-full overlay-wraper bg-parallax" data-stellar-background-ratio="0.2" style="background-image:url(main/images/background/bg-11.jpg);">
          <div class="overlay-main bg-white opacity-07"></div>
            <div class="container">
  
                    <div class="row conntact-home">
                        <div class="col-md-5 col-sm-5 contact-home4-left">
                          <div class="section-content p-tb30 overlay-wraper">
                              <div class="overlay-main bg-primary opacity-09"></div>	
                                  <div class="p-a30" style="z-index:1; position:relative">
                                    <h3 class="font-weight-400 text-white m-b5">Make an</h3>
                                    <h2 class="text-white m-t0"  style="font-family: 'Crete Round', serif;"><i>Appointment</i></h2>
                                    <form  class="cons-contact-form2 form-transparent" method="post" action="http://thewebmax.com/spa/form-handler2.php">
                                      <div class="form-group">
                                            <input name="username" type="text" required class="form-control" placeholder="Neme">
                                        </div>
                                        <div class="form-group">
                                            <input name="email" type="text" class="form-control" required placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input name="phone" type="text" class="form-control" required placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
                                            </div>
                                        <button type="submit" class="site-button-secondry radius-sm">
                                          <span class="font-weight-700 inline-block text-uppercase p-lr15">Submit</span> 
                                        </button>    
                                    </form>
                                  </div>                             
                            </div>
                        </div>                        
                      <div class="col-md-7 col-sm-7 contact-home4-right p-t130 p-b50" >
                          <div class="section-content">
                              <div class="opening-block bdr-5 bdr-primary p-a40 text-right">
                                  <a href="services-2.html" class="bg-primary book-now-btn p-tb5 p-lr15 text-uppercase font-16 font-weight-500">All Services</a>
                                    <h2 class="text-uppercase  text-secondry m-tb0">Best Services</h2>
                                    <span class="font-60 font-weight-600 text-uppercase text-primary">Open Hours</span>
                                    <p>If you feel tired and stressed after a working day, we are happy to give you an enjoyable and healthy solution to find your balance again.</p>
                                    <div class="clearfix">
                                        <ul class="list-unstyled m-b0">
                                            <li><div class="clearfix"><span class="opening-date">Mon-Fri:</span><span class="opening-time">9 AM - 6 PM</span></div></li>
                                            <li><div class="clearfix"><span class="opening-date">Saturday:</span> <span class="opening-time">9 AM- 6 PM</span></div></li>
                                            <li><div class="clearfix"><span class="opening-date">Sunday:</span> <span class="opening-time">Closed</span></div></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>                               
                        </div>
                    </div>
                
            </div> --}}
            
        </div> 
        <!-- CONTACT US OFFER SECTION END  --> 
            @endforeach
            {{-- {{$user->links()}} --}}
            
        @endif
            
        @include('main/layouts/page_footer')