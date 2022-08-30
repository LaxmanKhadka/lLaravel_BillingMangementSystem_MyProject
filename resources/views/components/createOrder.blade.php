<style>
    .create_product {
        display: none;
    }
</style>

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <h4 class="card-title">Create New Order </h4>
    <div class="row">
        <div class="col-md-10">
            <div class="card">

                <div id="result"></div>
                <form class="form-horizontal" method="post" action="#" id="orderStore">
                    @csrf
                    <div class="card-body">

                        <div class="product create_product" style="display:block">
                            <div class="form-group row">


                                <div class="col-sm-12">
                                    <label for="lname" class="text-end control-label col-form-label">Product Category
                                    </label>
                                    <select name="productCategory" id="productCategory">
                                        <option value="0"> Select Product Category</option>
                                        <option value="FMG Product"> FMG product </option>
                                        <option value="Restro Product"> Restro product </option>
                                        <option value="Sanitary Product"> Sanitary product </option>
                                        <option value="Vegetables product"> Vegetables product </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="lname" class="text-end control-label col-form-label">Product Name
                                    </label>

                                    <select name="productName" id="productName">
                                        <option value="Select" class="product_append"> Select Product </option>
                                        @foreach ($product as $i => $p)
                                            <option class="product_rm" value="{{ $p->productName }}"
                                                data-productPrice="{{ $p->productPrice }}"> {{ $p->productName }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="productQuantity" class="text-end control-label col-form-label">Enter
                                        product Quantity</label>
                                    <input type="number" class="form-control" id="productQuantity"
                                        name="productQuantity" placeholder="" />
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="productQuantity" class="text-end control-label col-form-label">Product
                                        Price</label>
                                    <input type="text" class="form-control" id="productPrice" name="productPrice"
                                        placeholder="" />
                                </div>
                            </div>
                            <div class="btn btn-default prev">Previous</div>
                            <div class="btn btn-primary next">Next</div>

                        </div>
                        <!-- product end -->

                        <div class="cus create_product">
                            <div class="form-group row">


                                <div class="col-sm-12">
                                    <label for="lname" class=" text-end control-label col-form-label">Custmer
                                        Category </label> <br>

                                    <select name="Customer_select" id="Customer_select">
                                        <option value="0"> Select Customer </option>
                                        @foreach ($vendor as $i => $v)
                                            <option value="{{ $v->Name }}" data-name="{{ $v->Name }}"
                                                data-email="{{ $v->Email }}" data-phone="{{ $v->Phone }}"
                                                data-address1="{{ $v->Address1 }}"data-address2="{{ $v->Address2 }}"data-State="{{ $v->State }}"data-City="{{ $v->City }}"data-Country="{{ $v->Country }}">
                                                {{ $v->Name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="productQuantity" class="text-end control-label col-form-label">Customer
                                        Email</label>
                                    <input type="text" class="form-control" id="customerEmail" name="customerEmail"
                                        placeholder="" />
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="productQuantity" class="text-end control-label col-form-label">Customer
                                        Phone</label>
                                    <input type="text" class="form-control" id="customerPhone" name="customerPhone"
                                        placeholder="" />
                                </div>
                            </div>
                            <div class="btn btn-default prev">Previous</div>
                            <div class="btn btn-primary next">Next</div>

                        </div>
                        <!-- customer end -->

                        <div class="shipping create_product">
                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="productQuantity" class=" text-end control-label col-form-label">Shipping
                                        Address1</label>
                                    <input type="text" class="form-control" id="shippingAddress1"
                                        name="shippingAddress1" placeholder="" />
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="productQuantity"
                                        class=" text-end control-label col-form-label">Shipping Address2</label>
                                    <input type="text" class="form-control" id="shippingAddress2"
                                        name="shippingAddress2" placeholder="" />
                                </div>
                            </div>
                            <div class="address form-group row">


                                <div class="col-sm-4">
                                    <label for="productQuantity" class="text-end control-label col-form-label">State
                                    </label>
                                    <input type="text" class="form-control" id="State" name="State"
                                        placeholder="" />

                                </div>



                                <div class="col-sm-4">
                                    <label for="productQuantity" class="text-end control-label col-form-label">City
                                    </label>
                                    <input type="text" class="form-control" id="City" name="City"
                                        placeholder="" />

                                </div>


                                <div class="col-sm-4">
                                    <label for="productQuantity" class="text-end control-label col-form-label">Country
                                    </label>
                                    <input type="text" class="form-control" id="Country" name="Country"
                                        placeholder="" />

                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="productQuantity"
                                        class="text-end control-label col-form-label">Delivery date</label>
                                    <input type="date" class="form-control" id="deliveryDate" name="deliveryDate"
                                        placeholder="" />
                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="productQuantity"
                                        class="text-end control-label col-form-label">Delivery Instructions</label>
                                    <input type="text" class="form-control" id="deliveryInstructucions"
                                        name="deliveryInstructucions" placeholder="" />
                                </div>
                            </div>
                            <div class="btn btn-default prev">Previous</div>
                            <div class="btn btn-primary next">Next</div>

                        </div>

                        <!-- shipping end -->

                        <div class="summery create_product">
                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="productQuantity" class=" text-end control-label col-form-label">Sub
                                        Total Amount</label>
                                    <input type="text" class="form-control" id="subtotalAmount"
                                        name="subtotalAmount" placeholder="" />
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="productQuantity" class=" text-end control-label col-form-label">Tax
                                        Amount</label>
                                    <input type="text" class="form-control" id="taxAmount" name="taxAmount"
                                        placeholder="" />
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="productQuantity"
                                        class="text-end control-label col-form-label">Discount Amount</label>
                                    <input type="text" class="form-control" id="discountAmount"
                                        name="discountAmount" placeholder="" />
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="productQuantity" class="text-end control-label col-form-label">Total
                                        Amount</label>
                                    <input type="text" class="form-control" id="totalAmount" name="totalAmount"
                                        placeholder="" />
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="productQuantity" class="text-end control-label col-form-label">Paid
                                        By</label>
                                    <input type="text" class="form-control" id="paid_by" name="paid_by"
                                        placeholder="" />
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="productQuantity"
                                        class="text-end control-label col-form-label">Paid_Ref_No</label>
                                    <input type="text" class="form-control" id="Paid_Ref_No" name="Paid_Ref_No"
                                        placeholder="" />
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="productQuantity" class=" text-end control-label col-form-label">Bank
                                        Name</label>
                                    <input type="text" class="form-control" id="bankName" name="bankName"
                                        placeholder="" />
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="productQuantity"
                                        class="text-end control-label col-form-label">Invoice_no</label>
                                    <input type="text" class="form-control" id="Invoice_no" name="Invoice_no"
                                        placeholder="" />
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="productQuantity"
                                        class="text-end control-label col-form-label">Remarks</label>
                                    <textarea class="form-control" id="remarks" name="remarks"></textarea>

                                </div>
                            </div>

                            <div class="btn btn-default prev">Previous</div>
                            <button type="button" id="addOrder" name="button"
                                class="btn btn-primary btn-lg btn-outline-success">
                                Order
                            </button>
                        </div>
                        <!-- summery end -->

                </form>
            </div>
            <script>
                var productrefresh = function() {
                    ajax("/createNewInvoice", data, "result", "get");
                }
                $("#addOrder").on("click", function() {
                    var data = $("#orderStore").serialize();
                    // data=JSON.stringify(data);
                    console.log(data);
                    // toastr.success("Your New Product added","Insertion Sucessfull!");             
                    $("#productModelClose").click();
                    ajax("/orderStore", data, "result", "post", productrefresh);
                });

                $('#Customer_select').on('change', function() {
                    $('#customerEmail').val($(this).find(':selected').attr('data-email'));
                });
                $('#Customer_select').on('change', function() {
                    $('#customerPhone').val($(this).find(':selected').attr('data-phone'));
                });

                $('#Customer_select').on('change', function() {
                    $('#shippingAddress1').val($(this).find(':selected').attr('data-address1'));
                });

                $('#Customer_select').on('change', function() {
                    $('#shippingAddress2').val($(this).find(':selected').attr('data-address2'));
                });

                $('#Customer_select').on('change', function() {
                    $('#State').val($(this).find(':selected').attr('data-State'));
                });
                $('#Customer_select').on('change', function() {
                    $('#City').val($(this).find(':selected').attr('data-City'));
                });
                $('#Customer_select').on('change', function() {
                    $('#Country').val($(this).find(':selected').attr('data-Country'));
                });

                // product Price
                $('#productName').on('change', function() {
                    $('#productPrice').val($(this).find(':selected').attr('data-productPrice'));
                });

                var productList = function() {
                    $('.product_rm').remove();
                    console.log("fire from Model");
                    console.log(rep);
                    $.each(rep, function(idx, val) {
                        $('#productName').append(
                            `<option class="product_rm" value="${val.productName}" data-productPrice="${val.productPrice}"> ${val.productName} </option>`
                        );
                    });

                }

                // product Price
                $('#productCategory').on('change', function() {
                    var data = {
                        "cat": $(this).val()
                    };

                    ajax("/productCategory", data, "pageload2", "get", productList);

                });

                $('.next').on('click', function() {
                    $('.create_product').hide();
                    $(this).parent().next().show();
                })
                $('.prev').on('click', function() {
                    $('.create_product').hide();
                    $(this).parent().prev().show();
                })

                $("#productQuantity").on('blur', function() {
                    var price = parseInt($("#productPrice").val());
                    var qt = parseInt($("#productQuantity").val());

                    // var dis=($("#discountAmount").val());
                    var total = price * qt;
                    var tax = total * 0.13;
                    var gt = total + tax;
                    $("#subtotalAmount").val(total);
                    $("#taxAmount").val(tax);
                    // ($("#discountAmount").val(dis));
                    $("#totalAmount").val((gt).toFixed(0));

                });
            </script>
