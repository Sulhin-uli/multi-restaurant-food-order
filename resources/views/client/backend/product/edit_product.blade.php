@extends('client.client_dashboard')
@section('client')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

 <div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Edit Product</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Product</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">

                    <div class="card-body p-4">
                        <form id="myForm" method="POST" action="{{ route('product.update') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="id">

                            <div class="row">
                                <div class="col-xl-4 col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="example-text-input" class="form-label">Category Name</label>
                                            <select name="category_id" class="form-select">
                                                <option selected="" disabled="" >Select</option>
                                                @foreach ($category as $cat)
                                                    <option value="{{ $cat->id }}" {{ $cat->id == $product->category_id ? 'selected' : '' }}>{{ $cat->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>         
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="example-text-input" class="form-label">Menu Name</label>
                                            <select name="menu_id" class="form-select">
                                                <option selected="" disabled="" >Select</option>
                                                @foreach ($menu as $men)
                                                    <option value="{{ $men->id }}"  {{ $men->id == $product->menu_id ? 'selected' : '' }}>{{ $men->menu_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>         
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="example-text-input" class="form-label">City Name</label>
                                            <select name="city_id" class="form-select">
                                                <option selected="" disabled="" >Select</option>
                                                @foreach ($city as $cit)
                                                    <option value="{{ $cit->id }}" {{ $cit->id == $product->city_id ? 'selected' : '' }}>{{ $cit->city_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>         
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="example-text-input" class="form-label">Product Name</label>
                                            <input class="form-control" name="name" type="text" value="{{ $product->name }}">
                                        </div>         
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="example-text-input" class="form-label">Price</label>
                                            <input class="form-control" name="price" type="text" value="{{ $product->price }}">
                                        </div>         
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="example-text-input" class="form-label">Discount Price</label>
                                            <input class="form-control" name="discount_price" type="text" value="{{ $product->discount_price }}">
                                        </div>         
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="example-text-input" class="form-label">Size</label>
                                            <input class="form-control" name="size" type="text" value="{{ $product->size }}">
                                        </div>         
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="example-text-input" class="form-label">Product QTY</label>
                                            <input class="form-control" name="qty" type="text" value="{{ $product->qty }}">
                                        </div>         
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="example-text-input" class="form-label">Product Image</label>
                                            <input class="form-control" name="image" type="file" id="image">
                                        </div>         
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <img id="showImage" src="{{ asset($product->image) }}" alt="" class="rounded-circle p-1 bg-primary" width="110">
                                        </div>         
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" name="best_seller" type="checkbox" id="formCheck2" value="1" {{ $product->best_seller == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="formCheck2">
                                        Best Seller
                                    </label>
                                </div>

                                <div class="form-check mt-2">
                                    <input class="form-check-input" name="most_populer" type="checkbox" id="formCheck3" value="1" {{ $product->most_populer == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="formCheck3">
                                        Most Populer
                                    </label>
                                </div>

                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                                </div>
 
                            </div>
                        </form>
                    </div>

                </div>

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->
        
    </div> <!-- container-fluid -->
</div>


<script type="text/javascript">

    $(document).ready(function(){

        $('#image').change(function(e){

            var reader = new FileReader();

            reader.onload = function(e){

                $('#showImage').attr('src', e.target.result);

            }

            reader.readAsDataURL(e.target.files['0']);

        })

    })

</script>

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                name: {
                    required : true,
                }, 
                menu_id: {
                    required : true,
                },
                category_id: {
                    required : true,
                },
                city_id: {
                    required : true,
                },
                price: {
                    required : true,
                },
                discount_price: {
                    required : true,
                },
                size: {
                    required : true,
                },
                qty: {
                    required : true,
                },
            },
            messages :{
                name: {
                    required : 'Please Enter Product Name',
                }, 
                menu_id: {
                    required : 'Please Select One Menu',
                },
                category_id: {
                    required : 'Please Select One Category',
                },
                city_id: {
                    required : 'Please Select One City',
                },
                price: {
                    required : 'Please Enter Product Name',
                },
                discount_price: {
                    required : 'Please Enter Discount Price',
                },
                size: {
                    required : 'Please Enter Size',
                },
                qty: {
                    required : 'Please Enter Product QTY',
                },
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
</script>

@endsection