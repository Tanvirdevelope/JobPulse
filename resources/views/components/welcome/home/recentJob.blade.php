

<!-- Total Jobs By categories -->
<section class="serviceList-section-version-three bg-gray py-80" id="joblist">
        <!-- Header Intro Version Three -->
    <div class="header-intro-version-three">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrapper">
                        <div class="pop-text">
                            <h3>JOB CATEGORY</h3>
                            <h2>All <span class="theme-color">Jobs</span> Category</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container bg-white my-4">
        <div class="row">
            <!-- Card View -->
            @foreach ($jobPublished as $jp)
            <div class="col-md-3 joblist_item mb-2 mt-2">
            <a href="{{ route('alljobs-by-category', $jp->category_id)}}" class="text-decoration-none fs-5 fw-bold">
                <div class="card">
                    <div class="card-body">
                        <!-- Card content goes here -->
                        <div class="">
                            <p class="fw-bold mb-3">{{$jp->category_name}} [ {{$jp->total_jobs}} ]</p>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    
</section>
<!-- Job Details Section -->

<!-- Service List Section version three start -->
 <section class="serviceList-section-version-three bg-gray py-80" id="joblist">
    <!-- Header Intro Version Three -->
    <div class="header-intro-version-three">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrapper">
                        <div class="pop-text">
                            <h3>JOB LIST</h3>
                            @if (request()->is('/'))
                                <h2>Recent <span class="theme-color">Published</span> Jobs</h2>
                            @else
                                <h2>All <span class="theme-color">Published</span> Jobs</h2>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Inner Card Items -->
    <div class="inner-card-items">
        <div class="container bg-white my-4">
            <div class="col-md-12 p-3">
                <!-- Job List Content Section -->
                <div class="joblist_content">
                    <!-- Job List Item -->
                    @foreach ($jobList as $Jobs)
                    <div class="joblist_item mb-2">
    
                        <div class="card mb-4">
                        <a href="{{ route('job-details', $Jobs->id)}}" class="fs-5 fw-bold">
                            <div class="card-body">
                                <div class="col-12">
                                    <a href="{{ route('job-details', $Jobs->id)}}"
                                        class="theme-color text-decoration-none fs-5 fw-bold">{{$Jobs->designation}}</a>
                                    <p class="fw-bold mb-3">{{$Jobs->organization_name}}</p>
                                    <p class="text-gray mb-1"><i class="fa-solid fa-location-dot"></i> {{$Jobs->job_location}}</p>
                                    <p class="mb-1"><i class="fa-solid fa-graduation-cap"></i> {{$Jobs->education}}</p>

                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <p class="mb-1"><i class="fa-solid fa-briefcase"></i> {{$Jobs->experience}}</p>
                                    </div>

                                    <div class="col-6 text-end">
                                        <p class="mb-1"><i class="fa fa-calendar theme-color"></i> <span class="theme-color">Deadline:</span> <b>{{$Jobs->application_deadline}}</b></p>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                      
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    @if (request()->is('/'))
    <div class="btn-section text-center">
        <a href="{{ url('/jobs') }}">
            <span class="btn-shape-normal-outline">
                <span>More Job</span>
            </span>
        </a>
    </div>
    @else
        <div class="btn-section text-center">
            <div class="theme-color h5">
                <span >{{ $jobList->links('pagination::simple-tailwind') }}</span>
            </div>
        </div>
    @endif


</section>
<!-- Service List Section version three End -->
