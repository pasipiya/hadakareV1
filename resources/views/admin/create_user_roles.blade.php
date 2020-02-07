@include('admin/layouts/header')
    
      
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <div class="row">
              <h1 style="padding-right:50px;" class="m-0 text-dark">Create User Roles</h1>
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create_user">
                 
  Create User
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
            <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      
      </div>
        
        <form method="post" action="{{ url('/create_user_roles') }}" id="user_register_form" role="form">
            {{ csrf_field() }}
      <div class="modal-body">    
        <div class="modal-body">
    <label for="name">Role:</label>
    <input type="text" class="form-control" id="name" name="name">
        </div>
              <div class="modal-body">
    <label for="name">Description:</label>
    <input type="text" class="form-control" id="description" name="description">
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
          <h3 class="card-title">User Roll</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          User Role
                      </th>
                      <th style="width: 30%">
                          Avater
                      </th>
                   
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                  
                  @foreach($roles as $row)
                  <tr>
                      <td>
                          #
                      </td>
                      <td>
                         
                              {{$row->name}}
                          
                       
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="admin/dist/img/avatar.png">
                              </li>
                          </ul>
                      </td>
                  
                      <td class="project-state">
                          <span class="badge badge-success">Success</span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a onclick="return confirm('Do you want to delete this User Role?')" class="btn btn-danger btn-sm" href="{{url('/delete_user_role/'.$row->id )}}">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  @endforeach
                  
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content --> 
   
  </div> 







@section('content')
<section class="content">
<div class="card">
<div class="card-header">
<h2 class="card-title">Create User</h2>    
</div>   
<div class="card-body">
<table class="table table-striped table-borded table-hover">
    <thead>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>Email</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <td>1</td>
        <td>Pasindu</td>
        <td>piyathilaka10@gmail.com</td>
        <td>Edit/Delete</td>
    
    
    
    </tbody>
    
</table>    
    
    
</div>
    
    
    

    
    
</div>






</section>





@endsection



    
    
    
    
    
    
    
    
@include('admin/layouts/footer');