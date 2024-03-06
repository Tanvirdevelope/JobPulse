<section id="jobdetails">
    <div class="container bg-white my-4">
        <div class="col-md-12 p-3">
            <!-- Job Details Header Section -->
            <div class="jobdetails_header">
                <div class="row">
                    @if(session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger text-center">
                            {{ session('error') }}
                        </div>
                    @endif
                    
                    <div class="col-sm-6">
                        <h3 class="theme-color">{{ $job_details->organization_name }}</h3>
                        <h3>{{ $job_details->designation }}</h3>
                    </div>
                    <div class="col-sm-6 text-end">
                        <div class="company_logo">
                            <img src="{{asset('assets/img/common/Logo_Black.png')}}" alt="company_logo">
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 mb-5">
                    <p>Application Deadline: <span class="theme-color fw-bold">{{ $job_details->application_deadline }}</span></p>
                </div>
            </div>

            <!-- Job Details Summary Section -->
            <div class="jobdetails_summary">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="col-12 mb-4 summary_title">
                            <h5 class="theme-color">Summary</h5>
                        </div>
                        <div class="row summary_body">
                            <div class="col-md-4 col-sm-12">
                                <p class="mb-1">Vacency: <b>{{ $job_details->vacancy_count }}</b></p>
                                <p class="mb-1">Published: <b>{{ $job_details->published_date }}</b></p>
                                <!-- <p class="mb-1">Application Deadline: <b>{{ $job_details->application_deadline }}</b></p> -->
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <p class="mb-1">Location: <b>{{ $job_details->job_location }}</b></p>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <p class="mb-1">Minimum Salary: <b>Tk. {{ $job_details->minimum_salary }} (Monthly)</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Job Details Content Section -->
            <div class="jobdetails_content">
                <div class="card">
                    <div class="card-body">

                    <!-- Education -->
                    <div class="col-12 py-3 border-bottom jobdetails_content_body">
                            <div class="mb-2 jobdetails_content_title">
                                <h5 class="theme-color">Educational Qualification</h5>
                            </div>
                            <div class="jobdetails_content_text">
                            {{ $job_details->education }}
                            </div>
                        </div>

                    <!-- Job Experience -->
                    <div class="col-12 py-3 border-bottom jobdetails_content_body">
                        <div class="mb-2 jobdetails_content_title">
                            <h5 class="theme-color">Experience</h5>
                        </div>
                        <div class="jobdetails_content_text">
                        {{ $job_details->experience }}
                        </div>
                    </div>
                    <!-- Job Requirements -->
                        <div class="col-12 py-3 border-bottom jobdetails_content_body">
                            <div class="mb-2 jobdetails_content_title">
                                <h5 class="theme-color">Requirements</h5>
                            </div>
                            <div class="jobdetails_content_text">
                            {{ $job_details->requirements }}
                            </div>
                        </div>

                        <!-- Job Responsibility -->
                        <div class="col-12 border-bottom py-3 jobdetails_content_body">
                            <div class="mb-2 jobdetails_content_title">
                                <h5 class="theme-color">Responsibilities & Context</h5>
                            </div>
                            <div class="jobdetails_content_text">
                            {{ $job_details->responsibilities }}
                            </div>
                        </div>

                        <!-- Job Benefit -->
                        <div class="col-12 border-bottom py-3 jobdetails_content_body">
                            <div class="mb-2 jobdetails_content_title">
                                <h5 class="theme-color">Compensation & Other Benefits</h5>
                            </div>
                            <div class="jobdetails_content_text">
                            {{ $job_details->benefits }}
                            </div>
                        </div>

                        <!-- Job Employment -->
                        <div class="col-12 py-3 jobdetails_content_body">
                            <div class="mb-2 jobdetails_content_title">
                                <h5 class="theme-color">Employment Status</h5>
                            </div>
                            <div class="jobdetails_content_text">
                            {{ $job_details->employment_status }}
                            </div>
                        </div>

                        <!-- Job Location -->
                        <div class="col-12 py-3 jobdetails_content_body">
                            <div class="mb-2 jobdetails_content_title">
                                <h5 class="theme-color">Job Loacation</h5>
                            </div>
                            <div class="jobdetails_content_text">
                            {{ $job_details->job_location }}
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="d-flex justify-content-center align-items-center m-3">
            <a href="{{ route('apply-job', $job_details->id)}}" class="fs-5 fw-bold m-2 "><button class="btn btn-success px-3">Apply Now</button></a>
        </div>
    </div>
    
</section>