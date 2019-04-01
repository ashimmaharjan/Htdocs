<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

<form method="post" action=" {{route('product.store')}} " enctype="multipart/form-data">
    {!! csrf_field() !!}

    <div class="row">
        <div class="col-md-6 form-group">
            <label for="name">Name</label> 
            <input type="text" class="form-control" name="name">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 form-group">
            <label for="price">Price</label> 
            <input type="number" class="form-control" name="price">
        </div>
    </div>
        
    <div class="row">
        <div class="col-md-6 form-group">
            <label for="image">Image</label> 
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="image">
                <label class="custom-file-label">Choose Image</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button type="submit" name="submit" class="btn btn-primary" style="font-size:20px">
            <i class="fa fa-sign-in" aria-hidden="true"></i> &nbsp; Submit
            </button>
        </div>
    </div>
</form>
