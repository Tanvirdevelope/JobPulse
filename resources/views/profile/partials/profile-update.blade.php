<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Profile</h4>
            <h6>User Profile</h6>
        </div>
    </div>
    @if (session('status') === 'profile-updated')
    <div class="alert alert-success" role="alert">
        {{ __('Profile Information Updated') }}
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('profile.update') }}" class="mt-4">
                @csrf
                @method('patch')
            <div class="profile-set">
                <div class="profile-head">                    
                </div>
                <h2 class="mt-3">Profile Information</h2>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="name" value="{{ old('name', $user->name) }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="{{ old('email', $user->email) }}">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="ms-auto">
                    <button type="submit" class="btn btn-submit me-2">Save</button>
                </div>
            </div>
        </form>

            
        </div>
    </div>

    <div class="card">
        <div class="card-body">
         
            <h2 class="mt-3">Profile Information</h2>

            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" placeholder="William">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" placeholder="Castilo">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" placeholder="william@example.com">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" placeholder="+1452 876 5432">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" placeholder="+1452 876 5432">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group">
                        <label>Password</label>
                        <div class="pass-group">
                            <input type="password" class=" pass-input">
                            <span class="fas toggle-password fa-eye-slash"></span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                    <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
                </div>
            </div>
        </div>
    </div>
    
</div>