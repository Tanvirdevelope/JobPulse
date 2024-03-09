<div class="content">
    <div class="page-header">
    <div class="page-title">
    <h4>Job Add</h4>
    <h6>Create new Job</h6>
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
            <form action="{{route('job-store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    {{-- User id --}}
                    <input value="{{$company_infos->id}}" name="company_id" type="text" class="form-control" id="company_id" hidden>

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Job Category</label>
                            <select class="select" name="job_category_id" required>
                                <option>Choose Category</option>
                                @foreach ($categories as $key => $category)
                                <option value="{{$key}}"> {{$category}}</option>                                    
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="organization_name" required>
                        </div>
                    </div>
                    

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Desgignation</label>
                            <input type="text" name="designation" required>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Job Location</label>
                            <input type="text" name="job_location" required>
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <div class="form-group">
                            <label> Company Logo</label>
                            <div class="image-upload">
                                <input type="file" name="company_logo" required>
                                <div class="image-uploads">
                                    <img src="asset/assets/img/icons/upload.svg" alt="img">
                                    <h4>Drag and drop a file to upload</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Published Date</label>
                            <div class="input-groupicon">
                                <input type="date" placeholder="DD-MM-YYYY" name="published_date">
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Published Date </label>
                            <div class="input-groupicon">
                                <input type="text" name="published_date" placeholder="DD-MM-YYYY" class="datetimepicker" required>
                                <div class="addonset">
                                <img src="{{asset('asset/assets/img/icons/calendars.svg')}}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Application Deadline </label>
                            <div class="input-groupicon">
                                <input type="text" name="application_deadline" placeholder="DD-MM-YYYY" class="datetimepicker" required>
                                <div class="addonset">
                                <img src="{{asset('asset/assets/img/icons/calendars.svg')}}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Vacancy</label>
                            <input type="text" name="vacancy_count" required>
                            <x-input-error :messages="$errors->get('vacancy_count')" class="mt-2 text-danger" />
                        </div>
                    </div>


                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Minimum Salary</label>
                            <input type="text" name="minimum_salary" required>
                            <x-input-error :messages="$errors->get('minimum_salary')" class="mt-2 text-danger" />
                        </div>
                    </div>

                    {{-- <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Job Requirments</label>
                            <input type="text" name="requirements">
                        </div>
                    </div> --}}

                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Job Requirments</label>
                            <textarea name="requirements" class="form-control" required></textarea>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Job Responsibilities</label>
                            <textarea name="responsibilities" class="form-control" required></textarea>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Education</label>
                            <input type="text" name="education" required>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Experience</label>
                            <input type="text" name="experience" required>
                        </div>
                    </div>

                   

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Job Benefits</label>
                            <input type="text" name="benefits" required>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Employment Status</label>
                            <input type="text" name="employment_status" required>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-submit me-2">Submit</button>
                        <button class="btn btn-cancel">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    </div>