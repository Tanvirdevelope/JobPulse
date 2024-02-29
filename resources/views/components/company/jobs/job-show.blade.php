<div class="content container-fluid">

    <div class="page-header">
        <div class="page-title">
            <h4>Job Details</h4>
            <h6>Manage your Job</h6>
            </div>
            <div class="page-btn">
            <a href="{{ route('job-list') }}" class="btn btn-added"><img src="{{asset('asset/assets/img/icons/plus.svg')}}" alt="img" class="me-1">Job List</a>
            </div>
    </div>
        
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                <h2 class="bold">Company Name: <span class="h3">{{$jobs->organization_name}}</span></h2>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Designation</label>
                        <div class="col-md-10">
                            <h4>{{$jobs->designation}}</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Job Location</label>
                        <div class="col-md-10">
                            <h4>{{$jobs->job_location}}</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Job Responsibilities</label>
                        <div class="col-md-10">
                            <h4>{{$jobs->responsibilities}}</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Employment Status</label>
                        <div class="col-md-10">
                            <h4>{{$jobs->employment_status}}</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Vacancy Count</label>
                        <div class="col-md-10">
                            <h4>{{$jobs->vacancy_count}}</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Job Requirements</label>
                        <div class="col-md-10">
                            <h4>{{$jobs->requirements}}</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Job Benefits</label>
                        <div class="col-md-10">
                            <h4>{{$jobs->benefits}}</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Minimum Salary</label>
                        <div class="col-md-10">
                            <h4>{{$jobs->minimum_salary}}</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Published Deadline</label>
                        <div class="col-md-10">
                            <h4>{{$jobs->published_date}}</h4>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Application Deadline</label>
                        <div class="col-md-10">
                            <h4>{{$jobs->application_deadline}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>