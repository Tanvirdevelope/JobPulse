<section>
    <div class="container">
        <div class="row card">
            <div class="col-lg-12">
                <div class="cmn-header pt-5 d-flex justify-content-between">
                    <h4 class="pb-3 border-bottom ">Applicant Information</h4>
                      {{-- Error Message Start --}}
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
                </div>
                <div class="job-details">
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="border p-3"><strong>Applicant Name:</strong> {{ $applicantsinfo->first_name }} {{ $applicantsinfo->last_name }}</p>
                            <p class="border p-3"><strong>Gendert:</strong> {{$applicantsinfo->gender}}</p>
                        </div>
                        <div class="col-lg-6">
                            <p class="border p-3"><strong>Date of birth:</strong> {{$applicantsinfo->birth_date}}</p>
                            <p class="border p-3"><strong>Address:</strong> {{$applicantsinfo->address}}</p>
                        </div>
                        <div class="col-lg-12">
                            <p class="border p-3"><strong>Photo:</strong> {{$applicantsinfo->image}}</p>
                            <p class="border p-3"><strong>Signature:</strong> {{$applicantsinfo->signature}}</p>
                            <p class="border p-3"><strong>CV:</strong> {{$applicantsinfo->cv}}</p>
                        </div>
                        {{-- <form action="{{route('applicants_update')}}" method="POST" enctype="multipart/form-data"> --}}
                        @csrf
                        <input type="text" name="id" value="{{$applicantsinfo->id}}" hidden>
                        <div class="col-md-6">
                            <label for="company_role" class="form-label">Give Feedback</label>
                            <select name="status" id="company_role" class="form-select">
                                <option value="1">Pending</option>
                                <option value="2">Viewed</option>
                                <option value="3">Selected</option>
                                <option value="4">Rejected</option>
                            </select>
                          </div>
                        <div class="col-12">
                            <button id="liveToastBtn" type="submit" class="btn btn-primary">Update Job</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>