@include('admin/layouts/header')
    
      
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <div class="row">
               <h1 style="padding-right:50px;" class="m-0 text-dark">Contacts</h1>
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
                         Name
                      </th>
                      <th style="width: 10%">
                         Email
                      </th>
                         <th style="width: 10%">
                          Contact No
                      </th>
                         <th style="width: 20%">
                          Message
                      </th>
                   
                 
                      <th style="width: 30%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                  
                  @foreach($contact_admin as $row)
                   <tr>
                       <td>
                          {{$row->id}}
                       </td>
                       <td>
                       {{$row->name}}
                       </td>
                    
                        <td>
                         {{$row->email}}
                       </td>
                           <td>
                         
                              {{$row->contactNo}}
                           
                       </td>
                       
                         <td>
                         {{$row->msg}}
                       </td>

                       <td class="project-actions text-right">
 
                           <a onclick="return confirm('Do you want to delete the Message?')" class="btn btn-danger btn-sm" href="{{url('/delete_message/'.$row->id )}}">
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
                           Name
                        </th>
                        <th style="width: 10%">
                           Email
                        </th>
                           <th style="width: 10%">
                            Contact No
                        </th>
                           <th style="width: 20%">
                            Message
                        </th>
                     
                   
                        <th style="width: 30%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($contact_saloon as $row)
                     <tr>
                         <td>
                            {{$row->id}}
                         </td>
                         <td>
                         {{$row->name}}
                         </td>
                      
                          <td>
                           {{$row->email}}
                         </td>
                             <td>
                           
                                {{$row->contactNo}}
                             
                         </td>
                         
                           <td>
                           {{$row->msg}}
                         </td>
  
                         <td class="project-actions text-right">
   
                             <a onclick="return confirm('Do you want to delete the Message?')" class="btn btn-danger btn-sm" href="{{url('/delete_message/'.$row->id )}}">
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