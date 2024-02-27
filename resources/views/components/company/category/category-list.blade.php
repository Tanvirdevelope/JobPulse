<div class="content">
    <div class="page-header">
    <div class="page-title">
    <h4>Job Category</h4>
    <h6>New job category list</h6>
    </div>
    <div class="page-btn">
    <a class="btn btn-added" data-bs-toggle="modal" data-bs-target="#addpayment"><img src="asset/assets/img/icons/plus.svg" alt="img" class="me-1">Add New Category</a>
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
                            <th>Category name</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>
                                <label class="checkboxs">
                                <input type="checkbox">
                                <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td>{{$category->category_name}}</td>

                            <form action="{{route('category.delete', $category->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                                <td class="text-end">
                                <a class="me-3" href="{{route('category.edit', $category->id)}}" data-bs-toggle="modal" data-bs-target="#editpayment">
                                <img src="asset/assets/img/icons/edit.svg" alt="img">
                                </a>
                                    <button type="submit" class="border-0"><img src="asset/assets/img/icons/delete.svg" alt="img"></button>
                                </td>
                            </form>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>