@include('main/layouts/page_header')

    @if(count($salons)>0)
    @foreach($salons as $user)


  {{-- <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <div class="row">
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create_user">
  Edit Saloon Details
</button>
              </div>
           
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Modal -->
<div class="modal fade" id="create_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Saloon</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
        <form method="post" action="{{ url('/add_saloon') }}" id="user_register_form" role="form">
            {{ csrf_field() }}
        <div class="modal-body">    
        <div class="modal-body">
            
            
   
      <div class="modal-footer">
        <button  type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" type="button" id="submitForm" class="btn btn-primary">Save</button>
      </div>
        </form>
        
    </div>      
  </div>
</div> 

  
  </div>   --}}
    
 
                  <!-- CONTACT US SECTION END  --> 
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
                                              
                                                {!! Form::open(['action' => 'PostsController@store', 'method'=>'POST', 'class'=>'cons-contact-form2 form-transparent']) !!}
                                                <div class="form-group">
                                                    {{Form::label('name','Name')}}
                                                    {{Form::text('name','',['class'=>'form-control','placeholder'=>'Name'])}}
                                                </div>
                                            
                                                <div class="form-group">
                                                    {{Form::label('body','Body')}}
                                                    {{Form::text('post','',['class'=>'form-control','placeholder'=>'Body'])}}
                                                </div>
                                                
                                                {{Form::submit('Submit',['class'=>'btn btn-primary site-button-secondry radius-sm'])}}
                                             
                                                {!! Form::close() !!}
                                                
                                            </div>                             
                                      </div>
                                  </div>                        
                                <div class="col-md-7 col-sm-7 contact-home4-right p-t130 p-b50" >
                                    <div class="section-content">
                                        <div class="opening-block bdr-5 bdr-primary p-a40 text-right">
                                            <a href="services-2.html" class="bg-primary book-now-btn p-tb5 p-lr15 text-uppercase font-16 font-weight-500">All Services</a>
                                              <h2 class="text-uppercase  text-secondry m-tb0">Best Services</h2>
                                              <span class="font-60 font-weight-600 text-uppercase text-primary">{{$user->salon_name}}</span>
                                              <p>Description</p>
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
                          
                      </div>
                      
                  </div> 
                  <!-- CONTACT US OFFER SECTION END  -->      
        @endforeach
        {{-- {{$user->links()}} --}}
        
    @endif
       
            
    
@include('main/layouts/page_footer')