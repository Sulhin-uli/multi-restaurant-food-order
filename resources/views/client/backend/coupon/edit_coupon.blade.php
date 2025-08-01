@extends('client.client_dashboard')
@section('client')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

 <div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Add Coupon</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add Coupon</li>
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
                        <form id="myForm" method="POST" action="{{ route('coupon.update') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $coupon->id }}">

                            <div class="row">

                                <div class="col-xl-6 col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="example-text-input" class="form-label">Coupon Name</label>
                                            <input class="form-control" name="coupon_name" value="{{ $coupon->coupon_name }}" type="text" id="example-text-input">
                                        </div>         
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="example-text-input" class="form-label">Coupon Desc</label>
                                            <input class="form-control" name="coupon_desc" value="{{ $coupon->coupon_desc }}" type="text" id="example-text-input">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="example-text-input" class="form-label">Coupon Discount</label>
                                            <input class="form-control" name="discount" value="{{ $coupon->discount }}" type="text" id="example-text-input">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <div>
                                        <div class="form-group mb-3">
                                            <label for="example-text-input" class="form-label">Coupon Validity</label>
                                            <input class="form-control" name="validity" value="{{ $coupon->validity }}" type="date" id="example-text-input" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
                                        </div>         
                                    </div>
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
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                coupon_name: {
                    required : true,
                },
                image: {
                    required : true,
                },
            },
            messages :{
                coupon_name: {
                    required : 'Please Enter Coupon Name',
                },
                image: {
                    required : 'Please Select Image',
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