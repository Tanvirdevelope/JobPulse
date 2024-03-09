<section>
    <div class="mx-5">
        <div class="row">
            <div class="col-lg-12 m-auto">
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

                <div class="company-inner card mt-5">
                    <h1 class="text-center pt-4 pb-4 border-bottom">Create Employee</h1>
                    <form action="{{route('company-employee-store')}}" method="POST" enctype="multipart/form-data" class="row g-3 p-4">
                        @csrf
                       {{-- company_id --}}
                        <input value="1" name="company_id" type="hidden" class="form-control" id="company_id">
                         {{-- user_id --}}

                           <div class="col-md-6">
                            <label for="firstName" class="form-label">Full Name</label>
                            <input name="name" placeholder="Full Name" type="text" class="form-control" id="firstName">
                            @error('firstName')
                              <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div>

                           {{-- <div class="col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input name="lastName" placeholder="lastName" type="text" class="form-control" id="lastName">
                            @error('lastName')
                              <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div> --}}

                           <div class="col-md-6">
                            <label for="email" class="form-label">email</label>
                            <input name="email" placeholder="email" type="email" class="form-control" id="email">
                            @error('email')
                              <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div>

                           {{-- <div class="col-md-6">
                            <label for="phone" class="form-label">phone</label>
                            <input name="phone" placeholder="phone" type="number" class="form-control" id="phone">
                            @error('phone')
                              <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div> --}}

                           <div class="col-md-6">
                            <label for="password" class="form-label">password</label>
                            <input name="password" placeholder="password" type="password" class="form-control" id="password">
                            @error('password')
                              <span class="text-danger">{{$message}}</span>
                            @enderror
                          </div>

                           <div class="col-md-6">
                            <label for="inputState" class="form-label">company_role</label>
                            <select name="company_role" id="inputState" class="form-select">
                              <option value="" selected>Choose...</option>
                              {{-- @foreach ($allCatList as $category) --}}
                              <option value="Editor">Editor</option>
                              {{-- @endforeach --}}
                            </select>
                          </div>

                        <div class="col-md-6">
                          <label for="gender" class="form-label">gender</label>
                          <input name="gender" placeholder="gender" type="text" class="form-control" id="gender">
                          @error('gender')
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>

                        <div class="col-md-6">
                          <label for="address" class="form-label">address</label>
                          <input name="address" placeholder="address" type="text" class="form-control" id="address">
                          @error('address')
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>

                        <div class="col-md-6">
                          <label for="joining_date" class="form-label">joining_date</label>
                          <input name="joining_date" placeholder="joining_date" type="date" class="form-control" id="joining_date">
                          @error('joining_date')
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>

                        <div class="col-12">
                          <button id="liveToastBtn" type="submit" class="btn btn-primary">Create Employee</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</section>