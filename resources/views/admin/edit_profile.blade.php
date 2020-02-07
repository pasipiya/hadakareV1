@include('admin/layouts/header')
    
    
    
    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Profile</h1>
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


    

       <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                    @foreach($users as $user)
                  
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{ asset('images/'. $user->userPic)}}"
                       alt="User profile picture">
                      
                </div>

                <h3 class="profile-username text-center">{{$user->name}}</h3>

                <p class="text-muted text-center">{{$user->email}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                    @if($user->role_id==1)
                  <li class="list-group-item">
                    <b>User Role</b> <a class="float-right"><span class="badge badge-success">Admin</span></a>
                  </li>
                    @endif
                    
                         @if($user->role_id==2)
                  <li class="list-group-item">
                    <b>User Role</b> <a class="float-right"><span class="badge badge-success">Saloon Owner</span></a>
                  </li>
                    @endif
                    
                         @if($user->role_id==3)
                  <li class="list-group-item">
                    <b>User Role</b> <a class="float-right"><span class="badge badge-success">Customer</span></a>
                  </li>
                    @endif
                    
                    
          
                </ul>
 
              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <!--
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>
-->
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>

                <p class="text-muted">{{$user->address}}</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Contact Number</strong>

                <p class="text-muted">
                  {{$user->contact}}
                </p>

                <hr>
                  
<!--
                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                  -->
                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
            @endforeach 
            
            
            
            
            
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                    
                  <li class="nav-item"><a class="nav-link active" href="#view" data-toggle="tab">View</a></li>
                 
                    
                  <li class="nav-item"><a class="nav-link" href="#edit" data-toggle="tab">Edit</a></li>
                </ul>
              </div><!-- /.card-header -->
              
                <div class="card-body">
                <div class="tab-content">
                    
       
                    
                    <div class="tab-pane" id="view">
         @foreach($users as $user)   
                    
                <div class="col-md-12">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <h3 class="widget-user-username">{{$user->name}}</h3>
                  @if($user->role_id==1)
                <h5 class="widget-user-desc"><span class="badge badge-success">Admin</span></h5>
                  @endif
                     @if($user->role_id==2)
                <h5 class="widget-user-desc"><span class="badge badge-success">Saloon Owner</span></h5>
                  @endif
                     @if($user->role_id==3)
                <h5 class="widget-user-desc"><span class="badge badge-success">Customer</span></h5>
                  @endif
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="{{ asset('images/' . $user->userPic)}}" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">Contact Number</h5>
                      <span class="description-text">{{$user->contact}}</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">Saloon Name</h5>
                      <span class="description-text">{{$user->saloon_name}}</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  @endforeach 
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">Available Bookings</h5>
                      <span class="description-text">{{session('bookingNO')}}</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
                    
                  
                        
                        
                        
                        
                  </div>
                    
                    
                    
                    
@foreach($users as $user)

                  <div class="tab-pane" id="edit">
                    <form class="form-horizontal"  method="post" action="{{ url('/user_update/'.$user->id) }}" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        <input hidden value="{{$user->id}}" name="id">
                        
                        
                        
                      <div class="form-group row">
                        <label for="inputImage" class="col-sm-2 col-form-label">Profile Picture</label>
                        <div class="col-sm-10">
                          <input type="file" name="image" class="form-control">
                        </div>
                      </div>
                        
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" value="{{$user->name}}" class="form-control" id="name" name="name" placeholder="{{$user->name}}">
                        </div>
                      </div>
                        <!--
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                      </div>
-->
                      <div class="form-group row">
                        <label for="Address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" value="{{$user->address}}" class="form-control" id="address" name="address" placeholder="{{$user->address}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Contact Number</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="contact" value="{{$user->contact}}" name="contact" placeholder="{{$user->contact}}">
                        </div>
                      </div>
                        <!--
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                      </div>
-->
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                          
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                    
              @endforeach       
                    
                    
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
                
                
                
                
                
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
 
  </div>
    
    
    
    
    
@include('admin/layouts/footer')