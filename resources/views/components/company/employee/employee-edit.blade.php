<div class="content">
    <div class="page-header">
      <div class="page-title">
      <h4>Employee Update</h4>
      <h6>Manage Employee Info</h6>
      </div>
    </div>

  
    {{-- error and success message --}}
    @if (Session::has('fail'))
    <div class="alert alert-danger" role="alert">
        {{ Session::get('fail') }}
    </div>
    @endif
  
    @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
  
   
    
    <div class="card">
        <div class="card-body">
            <form action="{{route('company-employee.update',$emplEdit->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <h4>{{$emplEdit->user->name}}</h4>
                            <label>Company Role</label>
                            <select class="select" name="company_role" required>        
                                <option value="1">Manager</option>                                    
                                <option value="2">Editor</option>  
                            </select>
                        </div>
                    </div>
  
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-submit me-2">Update Employee</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
  </div>