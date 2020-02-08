
@include('main/layouts/page_header')

        
        
        <!-- CONTENT START -->
        <div class="page-content">
        
             <!-- BREADCRUMB ROW -->                            
            <div class="bg-gray-light p-tb20">
            	<div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END --> 
             
  <!-- Alert Section -->
  @if(session('success'))
      <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-check"></i> Alert!</h5>
                   {{session('success')}}
                </div>
      @endif

      @if(session('delete'))
      <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                 {{session('delete')}}
                </div>
      @endif

            <!-- SECTION CONTENT --> 
            <div class="section-full p-t80 p-b50">
                <div class="container-fluid">
                    <div class="wt-box col-md-6">
                        <h4 class="text-uppercase">Contact Detail </h4>
                        <div class="wt-separator-outer m-b30">
                           <div class="wt-separator style-icon">
                               <i class="fa fa-leaf text-black"></i>
                               <span class="separator-left bg-primary"></span>
                               <span class="separator-right bg-primary"></span>
                           </div>                            
                       </div>
                        <div class="row">
                        
                            <div class="col-md-6 col-sm-6 m-b30">
                                <div class="wt-icon-box-wraper bx-style-1 p-a15 left clearfix">
                                    <div class="wt-icon-box-sm bg-primary">
                                        <span class="icon-cell text-white">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase">Phone</h5>
                                        <p>+91 564 548 4854</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-sm-6 m-b30">
                                <div class="wt-icon-box-wraper bx-style-1 p-a15 left clearfix">
                                    <div class="wt-icon-box-sm bg-primary">
                                        <span class="icon-cell text-white">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase">Email</h5>
                                        <p>demo@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-sm-6 m-b30">
                                <div class="wt-icon-box-wraper bx-style-1 p-a15 left clearfix">
                                    <div class="wt-icon-box-sm bg-primary">
                                        <span class="icon-cell text-white">
                                            <i class="fa fa-fax"></i>
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase">Fax</h5>
                                        <p>+91 564 548 4854</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-sm-6 m-b30">
                                <div class="wt-icon-box-wraper bx-style-1 p-a15 left clearfix">
                                    <div class="wt-icon-box-sm bg-primary">
                                        <span class="icon-cell text-white">
                                            <i class="fa fa-map-marker"></i>
                                        </span>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase">Address</h5>
                                        <p>252 W 43rd St New York, NY</p>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    <div class="wt-box col-md-6">
                        <h4 class="text-uppercase">Contact Form </h4>
                        <div class="wt-separator-outer m-b30">
                           <div class="wt-separator style-icon">
                               <i class="fa fa-leaf text-black"></i>
                               <span class="separator-left bg-primary"></span>
                               <span class="separator-right bg-primary"></span>
                           </div>                            
                        </div>
                      
      <form method="post" action="{{ url('/submit_msg') }}" id="user_register_form" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}
                        
                            <div class="row">
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input name="name" type="text" required class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input name="email" type="text" class="form-control" required placeholder="Email">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <input name="contactNo" type="text" class="form-control" required placeholder="Telephone No">
                                        </div>
                                    </div>
                                </div>
                                <input name="role_id" type="hidden" value="1">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon v-align-m"><i class="fa fa-pencil"></i></span>
                                            <textarea name="msg" rows="4" class="form-control Message" required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 text-right">
                                    <button name="submit" type="submit" value="Submit" class="site-button  m-r15">Submit  <i class="fa fa-angle-double-right"></i></button>
                                    <button name="Resat" type="reset" value="Reset"  class="site-button " >Reset  <i class="fa fa-angle-double-right"></i></button>
                                </div>

                            </div>

                        </form>
                        
                    </div>
                </div>
            </div>
            <!-- SECTION CONTENT END -->
           
   
            
       </div>
        <!-- CONTENT END -->
        








































@include('main/layouts/page_footer')














