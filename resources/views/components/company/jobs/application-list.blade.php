<div class="content">
    <div class="page-header">
        <div class="page-title">
        <h4>Apllications List</h4>
        <h6>Manage your Apllications</h6>
        </div>
        {{-- <div class="page-btn">
        <a href="{{ route('job-create') }}" class="btn btn-added"><img src="{{asset('asset/assets/img/icons/plus.svg')}}" alt="img" class="me-1">Add New Job</a>
        </div> --}}
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
                            <th>Name</th>
                            <th>Address</th>
                            <th>Date of Birth</th>
                            <th>Company Review</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($applicantsLists as $details)  
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="#" class="product-img">
                                <img src="{{asset('asset/assets/img/customer/customer5.jpg')}}" alt="product">
                                </a>
                                <a href="#">{{ $details->first_name }} {{ $details->last_name }}</a>
                            </td>
                            <td>{{$details->address}}</td>
                            <td>{{$details->birth_date}}</td>
                            <td>
                                @if($details->status==1)
                                    {{ 'Pending' }}
                                @elseif($details->status==2)
                                    {{ 'Selected' }}
                                @elseif($details->status==3)
                                    {{ 'Rejected' }}
                                @endif
                            </td>
                                                 
                            <td>
                                <form action="{{ route('company_applicant.delete', $details->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a class="me-3" href="{{route('company_applicant_details', $details->id)}}">
                                    <img src="{{asset('asset/assets/img/icons/eye.svg')}}" alt="img">
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