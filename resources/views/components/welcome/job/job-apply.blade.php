<section id="jobdetails">
    <div class="container bg-white my-4">
        <div class="col-md-12 p-3">
            <!-- Job Details Header Section -->
            <div class="jobdetails_header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Apply Online</h3>
                        <h3 class="theme-color">Company Name</h3>
                        <h4>Software Developer</h4>
                    </div>
                    <div class="col-sm-6 text-end">
                        <div class="company_logo">
                            <img src="{{asset('assets/img/common/Logo_Black.png')}}" alt="company_logo">
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 mb-5">
                    <p>Application Deadline: <span class="theme-color fw-bold">12-02-2024</span></p>
                </div>
            </div>

           

      
            <!-- Job Details Content Section -->
            <div class="jobdetails_content">
                <div class="card">
                    <div class="card-body">

                    <!-- Education -->
                    <div class="col-12 py-3 border-bottom jobdetails_content_body">
                            <div class="mb-2 jobdetails_content_title">
                                <h4 class="theme-color">User Name</h4>
                                <h5 class="">user@gmail.com</h5>
                                <h5 class="">+88 01711234566</h5>
                            </div>
                            <div class="jobdetails_content_text">
                            
                            </div>
                        </div>

                    <!-- Job Experience -->
                    <div class="col-12 py-3 border-bottom jobdetails_content_body">
                        <div class="mb-2 jobdetails_content_title">
                            <h5 class="">Your Expected salary (Monthly)*</h5>
                            <div class=" mt-15">
                                <input name="sellary" type="text">
                            </div>
                        </div>
                        <div class="jobdetails_content_text">
                       
                        </div>
                    </div>

                     <!-- Job Details Summary Section -->
            <div class="jobdetails_summary">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="col-12 mb-4 summary_title">
                            <h5 class="theme-color">Please read before apply *</h5>
                        </div>
                        <div class="row summary_body">
                            <div class="col-md-4 col-sm-12">
                                <p class="mb-1">Bdjobs.com Limited will not be responsible for any financial transactions or fraud by the company after applying through the website. The company only connects companies and job seekers.</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                        I have read the above warning message.
                                    </label>
                                  </div>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="d-flex justify-content-center align-items-center m-3">
            <a href="{{ route('jobs')}}" class="fs-5 fw-bold m-3"><button class="btn btn-secondary px-3">Close</button></a>
            <a href="{{ route('apply')}}" class="fs-5 fw-bold"><button class="btn btn-success px-3">Apply</button></a>
        </div>
    </div>
    
</section>