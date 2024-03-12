<div class="content">
  <div class="page-header">
    <div class="page-title">
    <h4>Employee Add</h4>
    <h6>Create new Employee</h6>
    </div>
  </div>

  {{-- @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
      </ul>
  </div>
  @endif --}}

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
          <form action="{{route('company-employee-store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row">

                  {{-- User id --}}
                  <input value="{{$company_infos->id}}" name="company_id" type="text" class="form-control" id="company_id" hidden>


                  <div class="col-lg-3 col-sm-6 col-12">
                      <div class="form-group">
                          <label>Staff Name</label>
                          <input type="text" name="name" required>
                          @error('name')
                              <span class="text-danger">{{$message}}</span>
                          @enderror
                      </div>
                  </div>
                  

                  <div class="col-lg-3 col-sm-6 col-12">
                      <div class="form-group">
                          <label>Phone No.</label>
                          <input type="text" name="contact" required>
                          @error('contact')
                              <span class="text-danger">{{$message}}</span>
                          @enderror
                      </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-12">
                      <div class="form-group">
                          <label>Address</label>
                          <input type="text" name="address" required>
                          @error('address')
                              <span class="text-danger">{{$message}}</span>
                          @enderror
                      </div>
                  </div>
                  
                  <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                      <label>Gender</label>
                      <select class="select" name="gender" required>             
                          <option>Male</option>                                    
                          <option>Female</option>  
                          <option>Others</option>  
                      </select>
                  </div>
                </div>



                  <div class="col-lg-12">
                      <div class="form-group">
                            <label> Employee Image</label>
                            <div class="image-upload">
                                <input type="file" name="photo" required>
                                <div class="image-uploads">
                                    <img src="{{asset('asset/assets/img/icons/upload.svg')}}" alt="img">
                                    <h4>Drag and drop a file to upload</h4>
                                </div>
                            </div>
                            @error('photo')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                      </div>
                  </div>
                  
                  <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" required>
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="form-group">
                      <label>Password</label>
                      <div class="pass-group">
                          <input name="password" type="password" class="pass-input">
                          @error('password')
                              <div class="text-danger">{{ $message }}</div>
                          @enderror
                          <span class="fas toggle-password fa-eye-slash"></span>
                      </div>
                  </div>
              </div>

               <div class="col-lg-3 col-sm-6 col-12">
                      <div class="form-group">
                          <label>Company Role</label>
                          <select class="select" name="company_role" required>        
                              <option value="1">Manager</option>                                    
                              <option value="2">Editor</option>  
                          </select>
                      </div>
                  </div>

                  <div class="col-lg-3 col-sm-6 col-12">
                      <div class="form-group">
                          <label>Joining Date </label>
                          <div class="input-groupicon">
                              <input type="text" name="joining_date" placeholder="DD-MM-YYYY" class="datetimepicker" required>
                              <div class="addonset">
                              <img src="{{asset('asset/assets/img/icons/calendars.svg')}}" alt="img">
                              </div>
                          </div>
                          @error('joining_date')
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                      </div>
                  </div>

                  
                  <div class="col-lg-12">
                      <button type="submit" class="btn btn-submit me-2">Create Employee</button>
                  </div>
              </div>
          </form>
      </div>
  </div>
  
</div>