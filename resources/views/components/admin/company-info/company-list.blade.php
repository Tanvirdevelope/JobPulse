<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Company List</h4>
            <h6>Manage Company Permissions</h6>
        </div>
        <div class="page-btn">
            <a class="btn btn-added" href="createpermission.html"><img src="asset/assets/img/icons/plus.svg" alt="img" class="me-1">Add Company List</a>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body">
            <div class="table-top">
                    <div class="search-set">
                    <div class="search-input">
                    <a class="btn btn-searchset"><img src="asset/assets/img/icons/search-white.svg" alt="img"></a>
                    </div>
                </div>
                <div class="wordset">
                    <ul>
                    <li>
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="asset/assets/img/icons/pdf.svg" alt="img"></a>
                    </li>
                    <li>
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="asset/assets/img/icons/excel.svg" alt="img"></a>
                    </li>
                    <li>
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="asset/assets/img/icons/printer.svg" alt="img"></a>
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
                        <input type="checkbox">
                        <span class="checkmarks"></span>
                        </label>
                        </th>
                        <th>Company Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companylist as $cl)
                        <tr>
                        <td>
                        <label class="checkboxs">
                        <input type="checkbox">
                        <span class="checkmarks"></span>
                        </label>
                        </td>
                        <td>{{  $cl->company_name }}</td>
                        <td>{{  $cl->company_email }}</td>
                        <td>{{  $cl->company_contact }}</td>
                        <td>{{  $cl->company_address }}</td>
                        <td>
                            <div class="status-toggle d-flex justify-content-between align-items-center">
                            <input type="checkbox" id="user2" class="check" checked="">
                            <label for="user2" class="checktoggle">checkbox</label>
                            </div>
                        </td>
                        <td class="text-end">
                        <a class="me-3" href="editpermission.html">
                        <img src="asset/assets/img/icons/edit.svg" alt="img">
                        </a>
                        <a class="me-3 confirm-text" href="javascript:void(0);">
                        <img src="asset/assets/img/icons/delete.svg" alt="img">
                        </a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>