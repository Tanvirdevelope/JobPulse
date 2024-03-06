    <!-- Inner Card Items -->
<section class="contact-version-one bg-white pt-80">
    <!-- Header Intro Version One -->
    <div class="header-intro-version-one">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 col-xl-7">
                    <div class="wrapper">
                        <div class="pop-text">
                            <h3>Apply Online</h3>
                            <div class="shape-img">
                                <img src="{{asset('./assets/img/shape/Union-1.svg')}}" alt="">
                            </div>
                        </div>
                                                
                        <div class="inner-text">
                            <h3><span class="theme-color">{{$job_details->organization_name}}</span></h3>
                        
                            <h4>Software Developer</h4>
                            <p>Application Deadline: <span class="theme-color fw-bold">12-02-2024</span></p>
                        </div>

                        
                    </div>
                </div>
            </div>
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
  
    <!-- Inner Card Items -->
    <div class="contact-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="wrapper">

                        <form action="{{route('application-store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-field">
                                <div class="field">
                                    <div class="wrapper">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="col-12 py-3 jobdetails_content_body">
                                                    <div class="mb-2 ">
                                                        <h4 class="theme-color"><span class="theme-color">{{auth()->user()->name}}</span></h4>
                                                        <h5 class="">{{auth()->user()->email}}</h5>
                                                    </div>
                                                </div>

                                                <div class="input-inner">

                                                    <div class="d-md-flex access gap-3">
                                                        <input name="job_id" type="text" required title="Field must be a number."
                                                            aria-required="true" value="{{$job_details->id}}" hidden>
                                                    </div>

                                                    <div class="d-md-flex access gap-3">
                                                        <input name="first_name" type="text" placeholder="First Name : "
                                                            required title="Field must be a number."
                                                            aria-required="true">
                                                        <input name="last_name" type="date" placeholder="Last Name"
                                                            required>
                                                    </div>
                                                    
                                                    <div class="d-md-flex access gap-3 mt-15">
                                                        <input name="address" type="text" placeholder="Address : "
                                                            required>
                                                            <label class="pt-2" for="floatingSelectGrid">Gender: </label>
                                                                <select class="form-select" name="gender" id="floatingSelectGrid" aria-label="Floating label select example" required>                                                                
                                                                    <option selected>Choose an Item</option>
                                                                    <option value="male">Male</option>
                                                                    <option value="female">Female</option>
                                                                    <option value="others">Others</option>
                                                                </select>
                                                    </div>

                                                    <div class="d-md-flex access gap-3 mt-15">
                                                        <input name="birth_date" type="text" placeholder="Date of Birth : "
                                                            required title="Field must be a number."
                                                            aria-required="true">
                                                            <p>Image Upload:</p>
                                                            <input name="image" type="file" placeholder="Image : ">
                                                    </div>

                                                    <div class="mt-15 d-md-flex access gap-3 mt-15">
                                                        <p>Signature Upload:</p>
                                                        <input name="signature" type="file" placeholder="Image : ">
                                                        <p>CV Upload:</p>
                                                        <input name="cv" type="file" placeholder="Image : ">
                                                    </div>
                                              
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="row summary_body">
                                                <div class="col-md-6 col-sm-12">
                                                    <h5 class="theme-color">Please read before apply *</h5>
                                                    <p class="mb-1">Job Pulse Limited will not be responsible for any financial transactions or fraud by the company after applying through the website. The company only connects companies and job seekers.</p>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="flexCheckIndeterminate">
                                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                                            I have read the above warning message.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="main-btn">
                                            <a href="{{ route('jobs')}}" class="fs-5 fw-bold m-2 "><button class="btn btn-secondary px-3">Close</button></a>
                                            <button type="submit" class="btn btn-success px-3"><span>Apply</span></button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                
                <div class="col-lg-4">
                    <div class="right-side">
                        <div class="intro">
                            <h2>Get in touch with us</h2>
                            <p>The present state of construction is complex. There is a wide range of building
                                products and systems which are aimed primarily. </p>
                        </div>
                        <div class="list-data">
                            <ul>
                                <li>
                                    <div>
                                        <span><i class="fa-solid fa-phone-rotary"></i></span>
                                    </div>
                                    <div>
                                        <h4>Have any question?</h4>
                                        <p>Call 996-963-55-025</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span><i class="fa-solid fa-phone-rotary"></i></span>
                                    </div>
                                    <div>
                                        <h4>Need to email?</h4>
                                        <p>demo@info.com</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span><i class="fa-solid fa-map-location-dot"></i></span>
                                    </div>
                                    <div>
                                        <h4>Need location?</h4>
                                        <p>1072 Poling Farm Road
                                            Pender, <br> NE 68047</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

