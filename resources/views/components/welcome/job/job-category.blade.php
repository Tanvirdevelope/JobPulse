<!-- Total Jobs By categories -->
<section class="serviceList-section-version-three bg-gray py-80"  id="joblist">
  

<div class="header-intro-version-three">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wrapper">
                    <div class="pop-text">
                        <h3>{{ $cat_id->category_name }}</h3>
                        <h2><span class="theme-color">Category</span> List</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
</section>
<!-- Job Details Section -->
<section id="joblist">
    <div class="container bg-white my-4">
        <div class="col-md-12 p-3">
            <!-- Job List Content Section -->
            <div class="joblist_content">
                <!-- Job List Item -->
                @forelse ($jobsList as $Jobs)
                <div class="joblist_item mb-2">

                    <div class="card mb-4">
                    <a href="{{ route('job-details', $Jobs->id)}}" target="_blank" class="fs-5 fw-bold">
                            <div class="card-body">
                                <div class="col-12">
                                    <a href="{{ route('job-details', $Jobs->id)}}" target="_blank"
                                        class="theme-color text-decoration-none fs-5 fw-bold">{{$Jobs->designation}}</a>
                                    <p class="fw-bold mb-3">{{$Jobs->organization_name}}</p>
                                    <p class="text-gray mb-1"><i class="fa-solid fa-location-dot"></i> {{$Jobs->job_location}}</p>
                                    <p class="mb-1"><i class="fa-solid fa-graduation-cap"></i>{{$Jobs->education}}</p>

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

                    <!-- For Empty -->
                    @empty
                    <div class="joblist_item mb-2">
                        <div class="card mb-4">
                                <div class="card-body">
                                    <div class="col-12">
                                        <p>No jobs found.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
        </div>
    </div>
</section>