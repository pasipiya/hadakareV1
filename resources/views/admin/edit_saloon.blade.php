@include('admin/layouts/header')
    
      
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <div class="row">
               <h1 style="padding-right:50px;" class="m-0 text-dark">Saloon Customization</h1>
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create_user">
  Add New Saloon
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

    <?php
      $user_id = Auth::user()->id;
      ?>
            
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
        <h5 class="modal-title" id="exampleModalLabel">Add Saloon</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
        <form method="post" action="{{ url('/add_saloon') }}" id="user_register_form" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}
            
            

     
 
             <div class="modal-body">
<label for="name">Logo:</label>
   <input type="file" name="image" class="form-control">
    </div>       
            
            
       
        <div class="modal-body">
<label for="name">Saloon Name:</label>
    <input type="text" class="form-control" id="name" name="name">
            <input hidden type="text" class="form-control" value='<?php echo $user_id ?>' id="saloon_id" name="saloon_id">
    </div>
          

  
          
  <div class="modal-body">
    <label for="exampleFormControlSelect">City</label><br>
    <select class="form-control js-example-basic-single" name="city" id="js-example-basic-single">
      <option value="Kurunegala">Kurunegala</option>
      <option value="Colombo">Colombo</option>
      <option value="Galle">Galle</option>
    </select>
  </div>    

          
               <div class="modal-body">
    <label for="address">Address:</label>
    <input type="text" class="form-control" id="address" name="address">
        </div>

          
          
          
 <!--         
            <div class="modal-body">
    <label for="exampleFormControlSelect1">Role</label>
    <select class="form-control" name="role" id="exampleFormControlSelect1">
      <option value="1">Admin</option>
      <option value="2">Saloon Owner</option>
      <option value="3">User</option>
    </select>
  </div>
    -->      

         
    
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
          <h3 class="card-title">Saloons</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
            
            
            
            
                         @if(Auth::check() && Auth::user()->role_id == 1 )
            
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          Saloon Name
                      </th>
                      <th style="width: 10%">
                          Logo
                      </th>
                         <th style="width: 10%">
                          City
                      </th>
                         <th style="width: 20%">
                          Address
                      </th>
                   
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 30%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                  
                 @foreach($allSaloon as $row)
                  <tr>
                      <td>
                         {{$row->id}}
                      </td>
                      <td>
                      {{$row->saloon_name}}
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="{{ asset('images/' . $row->logo)}}">
                              </li>
                          </ul>
                      </td>
                   <td>{{$row->city}}</td>
                          <td>
                          <ul class="list-inline">
                             {{$row->address}}
                          </ul>
                      </td>
                      
                        <td class="project-state">
                        @if($row->status==1) 
                          <span class="badge badge-success">Active</span>
                        @endif
                         @if($row->status==0) 
                          <span class="badge badge-danger">Deactive</span>
                        @endif 
                      <td class="project-actions text-right">
                          
                          
                          @if($row->status==0)
                          <a onclick="return confirm('Do you want to accept the Saloon?')" class="btn btn-primary btn-sm" href="{{url('/accept_saloon/'.$row->id )}}">
                              Active
                          </a>
                          @endif
                          
                            @if($row->status==1)
                          <a onclick="return confirm('Do you want to Deactive the Saloon?')" class="btn btn-danger btn-sm" href="{{url('/deactive_saloon/'.$row->id )}}">
                              Deactive
                          </a>
                          @endif
                          
                          
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a onclick="return bootbox.confirm('This is the default confirm!', function(result){ 
});" class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          
                          <a onclick="return confirm('Do you want to delete the saloon?')" class="btn btn-danger btn-sm" href="{{url('/delete_saloon/'.$row->id )}}">
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
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
             @if(Auth::check() && Auth::user()->role_id == 2 )
            
          <table class="table table-striped projects">
              <thead>
                          <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          Saloon Name
                      </th>
                      <th style="width: 10%">
                          Logo
                      </th>
                         <th style="width: 5%">
                          City
                      </th>
                         <th style="width: 20%">
                          Address
                      </th>
                   
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 30%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                  
                 @foreach($saloon_data as $row)
                  <tr>
                      <td>
                         {{$row->id}}
                      </td>
                      <td>
                      {{$row->saloon_name}}
                      </td>
                        <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="{{ asset('images/' . $row->logo)}}">
                              </li>
                          </ul>
                      </td>
                       <td>
                        {{$row->city}}
                      </td>
                          <td>
                          <ul class="list-inline">
                             {{$row->address}}
                          </ul>
                      </td>
                      
                        <td class="project-state">
                        @if($row->status==1) 
                          <span class="badge badge-success">Active</span>
                        @endif
                         @if($row->status==0) 
                          <span class="badge badge-danger">Deactive</span>
                        @endif 
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a onclick="return bootbox.confirm('This is the default confirm!', function(result){ 
});" class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          
                          <a onclick="return confirm('Do you want to delete the saloon?')" class="btn btn-danger btn-sm" href="{{url('/delete_saloon/'.$row->id )}}">
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
    
    
    
    
    
    
<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
    
    
    
@include('admin/layouts/footer')