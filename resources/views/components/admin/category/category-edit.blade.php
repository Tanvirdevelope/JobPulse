
    <div class="content">
        <div class="page-header">
        <div class="page-title">
        <h4>Edit Category</h4>
        <h6>Job Category Edit</h6>
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
                <form action="{{route('category.update', $categories->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" name="category_name" value="{{$categories->category_name}}">
                            </div>
                        </div>
                         
    
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-submit me-2">Update</button>
                            <button class="btn btn-cancel">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        </div>