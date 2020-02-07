@include('admin/layouts/header')
 
    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <div class="row">
               <h1 style="padding-right:50px;" class="m-0 text-dark">Booking</h1>
                  <!--
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create_user">
  Edit Saloon Details
</button>

-->
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

      
<!-- Modal -->
<div class="modal fade" id="create_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Booking</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
        <form method="post" action="{{ url('/create_users') }}" id="user_register_form" role="form">
            {{ csrf_field() }}
      <div class="modal-body">    
        <div class="modal-body">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name">
        </div>
          
               <div class="modal-body">
    <label for="name">Email:</label>
    <input type="email" class="form-control" id="email" name="email">
        </div>

          
            <div class="modal-body">
    <label for="exampleFormControlSelect1">Role</label>
    <select class="form-control" name="role" id="exampleFormControlSelect1">
      <option value="1">Admin</option>
      <option value="2">Saloon Owner</option>
      <option value="3">User</option>
    </select>
  </div>
          

         
      </div>
      <div class="modal-footer">
        <button  type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" type="button" id="submitForm" class="btn btn-primary">Save</button>
      </div>
        </form>
        
    </div>      
  </div>
</div> 
      
      



      

      
      
      
      
     <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Booking</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
            
            
            <!--Saloon View -->
            
        @if(Auth::check() && Auth::user()->role_id == 2 )
            
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 15%">
                          Client Name
                      </th>
                      <th style="width: 15%">
                          Client Contact Number
                      </th>
                   
                      <th style="width: 8%" class="text-center">
                          Service
                      </th>
                    
                      
                      <th style="width: 8%" class="text-center">
                          Description
                      </th>
                      
                      <th style="width: 8%" class="text-center">
                          Date And Time
                      </th>
                       <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>    
                  @foreach($booking as $row)
                  <tr>
                      <td>
                         
                      </td>
                      <td>
                        {{$row->customer_name}}
                          
                      </td>
                      <td>
                      {{$row->contact_number}}
                      </td>
                  
                      <td class="project-state">
                       <p>{{$row->catergory}}</p>
                      </td>
                       <td class="project-state">
                          <p>{{$row->description}}</p>
                      </td>
                       <td class="project-state">
                         <p>{{$row->date}}</p>
                      </td>
                         <td class="project-state">
                        @if($row->status==1) 
                          <span class="badge badge-success">Active</span>
                        @endif
                         @if($row->status==0) 
                          <span class="badge badge-danger">Deactive</span>
                        @endif  
                      </td>
                      
                      <td class="project-actions text-right">
                          @if($row->status==0)
                          <a onclick="return confirm('Do you want to accept the booking?')" class="btn btn-primary btn-sm" href="{{url('/accept_booking/'.$row->id )}}">
                              Active
                          </a>
                          @endif
                          
                            @if($row->status==1)
                          <a onclick="return confirm('Do you want to Deactive the booking?')" class="btn btn-danger btn-sm" href="{{url('/deactive_booking/'.$row->id )}}">
                              Deactive
                          </a>
                          @endif
                          
                     
                          <a onclick="return confirm('Do you want to delete this User Role?')" class="btn btn-danger btn-sm" href="{{url('/delete_booking/'.$row->id )}}">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
         @endforeach
                  
              </tbody>
          </table>
            @endif 
            
            
            
            
            <!--User View -->
            
             @if(Auth::check() && Auth::user()->role_id == 3 )
            
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 15%">
                          Saloon Name
                      </th>
                      <th style="width: 15%">
                          Client Contact Number
                      </th>
                   
                      <th style="width: 8%" class="text-center">
                          Service
                      </th>
                    
                      
                      <th style="width: 8%" class="text-center">
                          Description
                      </th>
                      
                      <th style="width: 8%" class="text-center">
                          Date And Time
                      </th>
                       <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>    
                  @foreach($booking_user as $row)
                  <tr>
                      <td>
                         
                      </td>
                      <td>
                        {{$row->saloonName}}
                          
                      </td>
                      <td>
                      {{$row->contact_number}}
                      </td>
                  
                      <td class="project-state">
                       <p>{{$row->catergory}}</p>
                      </td>
                       <td class="project-state">
                          <p>{{$row->description}}</p>
                      </td>
                       <td class="project-state">
                         <p>{{$row->date}}</p>
                      </td>
                         <td class="project-state">
                        @if($row->status==1) 
                          <span class="badge badge-success">Active</span>
                        @endif
                         @if($row->status==0) 
                          <span class="badge badge-danger">Deactive</span>
                        @endif  
                      </td>
                      
                      <td class="project-actions text-right">
                          <a onclick="return confirm('Do you want to delete this User Role?')" class="btn btn-danger btn-sm" href="{{url('/delete_booking/'.$row->id )}}">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
         @endforeach
                  
              </tbody>
          </table>
            @endif 

            
            
            
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content --> 
   
  </div>  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
 @include('admin/layouts/footer');