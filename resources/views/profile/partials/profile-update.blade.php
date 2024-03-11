<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Profile</h4>
            <h6>User Profile</h6>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif

    @if (session('status') === 'profile-updated')
        <div class="alert alert-success" role="alert">
            {{ __('Profile Information Updated') }}
        </div>
    @endif
    @if (session('status') === 'password-updated')
        <div class="alert alert-success" role="alert">
            {{ __('Password Updated Successfully') }}
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
                            <input type="text" placeholder="{{ old('email', $user->email) }}" disabled>
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
            <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('put')
            <h2 class="mt-3">Update Password</h2>

            <div class="row col-lg-6">
              
           
                <div class="col-lg-12 col-sm-12">
                    <div class="form-group">
                        <label for="update_password_current_password">Current Password</label>
                        <div class="pass-group">
                            <input id="update_password_current_password" name="current_password" type="password" class=" pass-input" autocomplete="current-password">
                            @error('current_password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <span class="fas toggle-password fa-eye-slash"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12">
                    <div class="form-group">
                        <label for="update_password_password">New Password</label>
                        <div class="pass-group">
                            <input id="update_password_password" name="password" type="password" class=" pass-input" autocomplete="new-password">
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <span class="fas toggle-password fa-eye-slash"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12">
                    <div class="form-group">
                        <label for="update_password_password_confirmation">Confirm Password</label>
                        <div class="pass-group">
                            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class=" pass-input" autocomplete="new-password">
                            @error('password_confirmation')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <span class="fas toggle-password fa-eye-slash"></span>
                        </div>
                    </div>
                </div>

     

                <div class="col-12">
                    <button type="submit" class="btn btn-submit me-2">Save</button>
                </div>
            </div>
        </form>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h2>Delete Account</h2>
        </div>
        <div class="card-body">
           
            <h5>Are you sure you want to delete your account?</h5>
            <p><code>Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.</code></p>
            <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                @csrf
                @method('delete')
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="pass-group">
                            <input id="password" name="password" type="password" class=" pass-input" autocomplete="new-password">
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <span class="fas toggle-password fa-eye-slash"></span>
                        </div>
                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2 text-danger" />
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-danger mb-2">Delete Account</button>
            </form>
        </div>
    </div>
    
</div>