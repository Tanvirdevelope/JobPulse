<div class="content">
    <div class="page-header">
    <div class="page-title">
    <h4>Staffs List</h4>
    <h6>Manage your Staffs</h6>
    </div>
    <div class="page-btn">
    <a href="{{route('company-employee-create')}}" class="btn btn-added">
    <img src="{{asset('asset/assets/img/icons/plus.svg')}}" alt="img" class="me-2"> Add Staffs
    </a>
    </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

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
                            <th>Employee Name</th>
                            <th>Designation</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Joining Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($empl_list as $employeeList)
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td>{{ $employeeList->user->name }}</td>
                            <td>
                                @if ($employeeList->company_role == 1)
                                    <span class="badges bg-lightgreen">{{ 'Manager' }}</span>                                    
                                @else
                                    <span class="badges bg-lightyellow">{{ 'Editor' }}</span>
                                @endif
                            </td>
                            <td>{{$employeeList->contact}}</td>
                            <td>{{$employeeList->address}}</td>
                            <td>{{$employeeList->joining_date}}</td>
                            <td>
                                <form action="{{ route('company-employee.delete', $employeeList->id) }}" method="POST" id="deleteForm">
                                    @csrf
                                    @method('DELETE')
                                <a class="me-3" href="{{ route('company-employee.edit', $employeeList->id) }}">
                                    <img src="{{asset('asset/assets/img/icons/edit.svg')}}" alt="img">
                                </a>
                                    
                                <button type="button" class="border-0" onclick="confirmDelete()">
                                    <img src="{{ asset('asset/assets/img/icons/delete.svg') }}" alt="Delete">
                                </button>
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

{{-- <td><span class="badges bg-lightyellow">Ordered</span></td> --}}

<script>
    function confirmDelete() {
        if (window.confirm('Are you sure you want to delete this employee?')) {
            document.getElementById('deleteForm').submit();
        }
    }
</script>