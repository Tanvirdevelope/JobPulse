<div class="content">
    <div class="page-header">
    <div class="page-title">
    <h4>Edit Job</h4>
    <h6>Create Edit Job</h6>
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
  
   
    
    <div class="card">
        <div class="card-body">
            <form action="{{route('jobs.update')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="organization_name">
                        </div>
                    </div>
                    

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Desgignation</label>
                            <input type="text" name="designation">
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Published Date</label>
                            <div class="input-groupicon">
                                <input type="date" placeholder="Choose Date" name="published_date">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Application Deadline</label>
                            <div class="input-groupicon">
                                <input type="date" placeholder="Choose Date" name="application_deadline">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label> Company Logo</label>
                            <div class="image-upload">
                                <input type="file" name="company_logo">
                                <div class="image-uploads">
                                    <img src="{{asset('asset/assets/img/icons/upload.svg')}}" alt="img">
                                    <h4>Drag and drop a file to upload</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Vacancy</label>
                            <input type="text" name="vacancy_count">
                            <x-input-error :messages="$errors->get('vacancy_count')" class="mt-2 text-danger" />
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Job Location</label>
                            <input type="text" name="job_location">
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Minimum Salary</label>
                            <input type="text" name="minimum_salary">
                            <x-input-error :messages="$errors->get('minimum_salary')" class="mt-2 text-danger" />
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Job Requirments</label>
                            <input type="text" name="requirements">
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Job Responsibilities</label>
                            <input type="text" name="responsibilities">
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Job Benefits</label>
                            <input type="text" name="benefits">
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Employment Status</label>
                            <input type="text" name="employment_status">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-submit me-2">Update</button>
                        <button class="btn btn-cancel">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    </div>