<div class="content container-fluid">

    <div class="page-header">
        <div class="page-title">
            <h4>Applicant Information</h4>
            <h6>Manage Applicant Information</h6>
            </div>
            {{-- <div class="page-btn">
            <a href="{{ route('job-list') }}" class="btn btn-added"><img src="{{asset('asset/assets/img/icons/plus.svg')}}" alt="img" class="me-1">Applicant List</a>
            </div> --}}
    </div>
    @if (Session::has('fail'))
    <div class="alert alert-danger" role="alert">
        {{ Session::get('fail') }}
    </div>
    @endif

    {{-- Success Message Start --}}
    @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
        
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                <h2 class="bold">Applicant Name: <span class="h3">{{ $applicantsinfo->first_name }} {{ $applicantsinfo->last_name }}</span></h2>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Gender:</label>
                        <div class="col-md-10">
                            <h4>{{$applicantsinfo->gender}}</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Date of birth:</label>
                        <div class="col-md-10">
                            <h4>{{$applicantsinfo->birth_date}}</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Address:</label>
                        <div class="col-md-10">
                            <h4>{{$applicantsinfo->address}}</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Photo:</label>
                        <div class="col-md-10">
                            <h4>{{$applicantsinfo->image}}</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">CV:</label>
                        <div class="col-md-10">
                            <h4>{{$applicantsinfo->cv}}</h4>
                        </div>
                    </div>

                    <form action="{{route('applicants_update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="id" value="{{$applicantsinfo->id}}" hidden>
                        <div class="col-md-6 form-group">
                            <label for="company_role" class="form-label">Give Feedback:</label>
                            <select name="status" id="company_role" class="select">
                                <option value="1">Pending</option>
                                <option value="2">Selected</option>
                                <option value="3">Rejected</option>
                            </select>
                          </div>
                        <div class="col-12 mt-3">
                            <button id="liveToastBtn" type="submit" class="btn btn-primary">Update Job</button>
                        </div>
                    </form>
                   
                   
                </div>
            </div>
        </div>
    </div>
</div>