@include('admin/layouts/header')
    
      
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <div class="row">
               <h1 style="padding-right:50px;" class="m-0 text-dark">Saloon Package Customization</h1>
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create_category">
  Add New Pacakge
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
<div class="modal fade" id="create_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Package</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
      <form method="post" action="{{ url('/add_package') }}" id="user_register_form" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}
      <div class="modal-body">    
        <div class="modal-body">
        <input hidden type="text" class="form-control" value='<?php echo $user_id ?>' id="user_id" name="user_id">             
            
 <label for="address">Package Image:</label>
    <input type="file" name="image" class="form-control">
        </div>

        <div class="modal-body">
    <label for="name">Package Name:</label>
    <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="modal-body">
    <label for="price">Package Price: $</label>
    <input type="text" class="form-control" id="price" name="price">
        </div>

        <div class="modal-body">
    <label for="address">Saloon:</label><br>
    <select class="form-control js-example-basic-single" name="saloon_name" id="saloon_name">
    @foreach($saloon_data as $row)
      <option value="{{$row->saloon_name}}">{{$row->saloon_name}}</option>
      @endforeach
    </select>       
        </div>  



        <div class="modal-body">
    <label for="address">Category:</label><br>
    <select class="form-control js-example-basic-single" id="category_name" name="category_name">
    @foreach($category_data as $row)
      <option value="{{$row->category_name}}">{{$row->category_name}}</option>
      @endforeach
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
          <h3 class="card-title">Saloon Packages</h3>

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
              
                      <th style="width: 10%">
                          Package Image
                      </th>
                      <th style="width: 10%">
                          Package Name
                      </th>
                        <th style="width: 10%">
                          Price
                      </th>
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 30%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                  
                 @foreach($allPackage as $row)
                  <tr>
                      <td>
                         {{$row->id}}
                      </td>
              
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="{{ asset('images/' . $row->pic)}}">
                              </li>
                          </ul>
                      </td>
                   
                      <td>
                      {{$row->package_name}}
                      </td>
                          <td>
                      {{$row->price}}
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
                          <a onclick="return confirm('Do you want to accept the Package?')" class="btn btn-primary btn-sm" href="{{url('/accept_package/'.$row->id )}}">
                              Active
                          </a>
                          @endif
                          
                            @if($row->status==1)
                          <a onclick="return confirm('Do you want to Deactive the Package?')" class="btn btn-danger btn-sm" href="{{url('/deactive_package/'.$row->id )}}">
                              Deactive
                          </a>
                          @endif                          
                          
                          <a onclick="return confirm('Do you want to delete this Package?')" class="btn btn-danger btn-sm" href="{{url('/delete_package/'.$row->id )}}">
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
              
                      <th style="width: 10%">
                          Package Image
                      </th>
                      <th style="width: 10%">
                          Package Name
                      </th>
                        <th style="width: 10%">
                          Price
                      </th>
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 30%">
                      </th>
                  </tr>
                </thead>
                <tbody>
                    
                   @foreach($package_data as $row)
                    <tr>
                        <td>
                           {{$row->id}}
                        </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="{{ asset('images/' . $row->pic)}}">
                              </li>
                          </ul>
                      </td>
                   
                      <td>
                      {{$row->package_name}}
                      </td>
                          <td>
                      {{$row->price}}
                      </td>
                      
                          <td class="project-state">
                          @if($row->status==1) 
                            <span class="badge badge-success">Active</span>
                          @endif
                           @if($row->status==0) 
                            <span class="badge badge-danger">Deactive</span>
                          @endif 
                        <td class="project-actions text-right">
                            
                            

                            
                            
         
               
                            <a onclick="return confirm('Do you want to delete this Package?')" class="btn btn-danger btn-sm" href="{{url('/delete_package/'.$row->id )}}">
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