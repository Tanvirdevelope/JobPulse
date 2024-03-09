<section>
    <div class="container  mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="company-table card">
                    <h4 class="text-center p-3 border-bottom">All Employee Lists </h4>
                <table class="table">
                    <thead>
                      <tr>

                        <th scope="col">Id</th>
                        <th scope="col">Company Role</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Address</th>
                        <th scope="col">Joining Date</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                       @php
                           $i= 0;
                       @endphp
                     @foreach ($empl_list as $employeeList)
                     @php
                         $i++;
                     @endphp
                     <tr>
                        <th scope="row">
                            {{$i}}
                        </th>
                        <th scope="row">{{$employeeList->company_role}}</th>
                        <td>{{$employeeList->gender}}</td>
                        <td>{{$employeeList->address}}</td>
                        <td>{{$employeeList->joining_date}}</td>
                        <td class="d-flex gap-1">

                             <div class="edit-btn ">
                             {{-- edit button --}}
                             <a href="{{ route('company-employee.edit', $employeeList->id) }}" class="btn btn-primary btn-sm">Edit</a>

                           </div>

                          <div class="delete-btn">
                            {{-- delete button --}}
                            {{-- <form action="{{ route('company-employee.destroy', $employeeList->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                          </form> --}}

                          <form action="{{ route('company-employee.destroy', $employeeList->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                          </form>
                          {{-- <a href="{{ url('employee/employee-delete/' . $employeeList->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')" data-id="{{ $employeeList->id }}">Delete</a> --}}


                          </div>
                        </td>
                      </tr>
                     @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</section>