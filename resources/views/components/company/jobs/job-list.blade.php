<div class="content">
    <div class="page-header">
        <div class="page-title">
        <h4>Job List</h4>
        <h6>Manage your Job</h6>
        </div>
        <div class="page-btn">
        <a href="{{ route('job-create') }}" class="btn btn-added"><img src="{{asset('asset/assets/img/icons/plus.svg')}}" alt="img" class="me-1">Add New Job</a>
        </div>
    </div>
        
    <div class="card">
        <div class="card-body">
            <div class="table-top">
                <div class="search-set">
                    <div class="search-path">
                        <a class="btn btn-filter" id="filter_search">
                        <img src="{{asset('asset/assets/img/icons/filter.svg')}}" alt="img">
                        <span><img src="{{asset('asset/assets/img/icons/closes.svg')}}" alt="img"></span>
                        </a>
                    </div>
                    <div class="search-input">
                        <a class="btn btn-searchset"><img src="{{asset('asset/assets/img/icons/search-white.svg')}}" alt="img"></a>
                    </div>
                </div>

                <div class="wordset">
                    <ul>
                    <li>
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="{{asset('asset/assets/img/icons/pdf.svg')}}" alt="img"></a>
                    </li>
                    <li>
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="{{asset('asset/assets/img/icons/excel.svg')}}" alt="img"></a>
                    </li>
                    <li>
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="{{asset('asset/assets/img/icons/printer.svg')}}" alt="img"></a>
                    </li>
                    </ul>
                </div>
            </div>
            
            
            <div class="table-responsive">
                <table class="table  datanew">
                    <thead>
                        <tr>
                            <th>
                                <label class="checkboxs">
                                    <input type="checkbox" id="select-all">
                                    <span class="checkmarks"></span>
                                </label>
                            </th>
                            <th>Company Name</th>
                            <th>Designation</th>
                            <th>Published Date </th>
                            <th>Application Deadline</th>
                            <th>Vacancy</th>
                            <th>Minimum Salary</th>
                            <th>Employment Status</th>
                            <th>Applicants List</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($jobs as $jobItem)  
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="#" class="product-img">
                                <img src="{{asset('asset/assets/img/product/product1.jpg')}}" alt="product">
                                </a>
                                <a href="#">{{$jobItem->organization_name}}</a>
                            </td>
                            <td>{{$jobItem->designation}}</td>
                            <td>{{$jobItem->published_date}}</td>
                            <td>{{$jobItem->application_deadline}}</td>
                            <td>{{$jobItem->vacancy_count}}</td>
                            <td>{{$jobItem->minimum_salary}}</td>
                            <td>{{$jobItem->employment_status}}</td>
                            <td>
                                <form action="{{route('user_applicants_list')}}" method="post">
                                    @csrf
                                    <input type="text" name="job_id" value="{{$jobItem->id}}" hidden>
                                    <input type="text" name="company_id" value="{{$jobItem->company_id}}" hidden>

                                    <button type="submit" class="btn btn-info">Click here</button>
                                </form>    
                            </td>   
                                                 
                            <td>
                                <form action="{{route('jobs.delete', $jobItem->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a class="me-3" href="{{route('jobs.show', $jobItem->id)}}">
                                    <img src="{{asset('asset/assets/img/icons/eye.svg')}}" alt="img">
                                    </a>

                                    <a class="me-3" href="{{route('jobs.edit', $jobItem->id)}}">
                                    <img src="{{asset('asset/assets/img/icons/edit.svg')}}" alt="img">
                                    </a>

                                    <button type="submit" class="border-0"><img src="{{asset('asset/assets/img/icons/delete.svg')}}" alt="img"></button>
                                </form>
                            </td>
                            
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    </div>