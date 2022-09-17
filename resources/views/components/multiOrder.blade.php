<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <h4 class="card-title">New Multi-Order </h4>
    <div class="row">
        <div class="col-md-10">
            <div class="card">

                <div id="result"></div>
                <form class="form-horizontal" method="post" action="#" id="orderStore">
                    @csrf

                    <div class="row">

                        <h5>Customer Details</h5>

                        <div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <select name="Customer_select" id="Customer_select">
                                        <option value="0"> Select Customer </option>
                                        @foreach ($vendor as $i => $v)
                                            <option value="{{ $v->Name }}" data-name="{{ $v->Name }}"
                                                data-phone="{{ $v->Phone }}" data-address1="{{ $v->Address1 }}"
                                                data-address2="{{ $v->Address2 }}"data-State="{{ $v->State }}"data-City="{{ $v->City }}"data-Country="{{ $v->Country }}">
                                                {{ $v->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class=" form-group row">
                                <div class="col-sm-4">
                                    <label for="productQuantity" class="text-end control-label col-form-label"></label>
                                    <input type="text" class="form-control" id="customerPhone" name="customerPhone"
                                        placeholder="Customer Phone:98xxxxxx" />
                                </div>
                                <div class="col-sm-4">
                                    <label for="productQuantity" class=" text-end control-label col-form-label"></label>
                                    <input type="text" class="form-control" id="shippingAddress1"
                                        name="shippingAddress1" placeholder="Shipping address1" />
                                </div>

                                <div class="col-sm-4">
                                    <label for="productQuantity" class=" text-end control-label col-form-label"></label>
                                    <input type="text" class="form-control" id="shippingAddress2"
                                        name="shippingAddress2" placeholder="Shipping Address2" />
                                </div>
                            </div>

                            <div class=" form-group row">
                                <div class="col-sm-4">
                                    <label for="productQuantity" class="text-end control-label col-form-label"></label>
                                    <input type="text" class="form-control" id="State" name="State"
                                        placeholder="State " />
                                </div>
                                <div class="col-sm-4">
                                    <label for="productQuantity" class="text-end control-label col-form-label"></label>
                                    <input type="text" class="form-control" id="City" name="City"
                                        placeholder="City " />
                                </div>

                                <div class="col-sm-4">
                                    <label for="productQuantity" class="text-end control-label col-form-label"></label>
                                    <input type="text" class="form-control" id="Country" name="Country"
                                        placeholder="Country " />

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <h5>Product add</h5>
                        <div class="pro ">

                            <div class=" Product form-group row " id="append_clone">

                                <div class="col-sm-2">

                                    <select name="product_id[]" class="Product_name">
                                        <option class="product_append" value="">Select Product </option>
                                        @foreach ($product as $i => $p)
                                            <option class="product_rm" value="{{ $p->id }}"
                                                data-productPrice="{{ $p->productPrice }}"> {{ $p->productName }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <input type="number" class="form-control productQuantity" name="product_qty[]"
                                        placeholder="Quantity" />
                                </div>

                                <div class="col-sm-3">
                                    <input type="text" class="form-control productPrice" name="product_price[]"
                                        placeholder="Product Price" />
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control totalPrice" name="total_amt[]"
                                        placeholder="Total Price" />

                                </div>

                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-info btn-sm append" id="po">
                                        +
                                    </button>
                                    &nbsp;
                                    <button type="button" class="btn btn-danger btn-sm append_x">
                                        -
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="append_div">

                    </div>
                    <div class="form-group row">
                        <div style="float:right;">
                            <button type="button" id="addOrder" name="button"
                                class="btn btn-primary btn-lg btn-outline-success">
                                Order
                            </button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var productrefresh = function() {
        $(".modal.show").modal('hide');
        ajax("/createNewInvoice", data, "pageload", "get");
    }
    $("#addOrder").on("click", function() {
        var data = $("#orderStore").serialize();
        // data=JSON.stringify(data);
        console.log(data);
        // toastr.success("Your New Product added","Insertion Sucessfull!");             

        ajax("/orderStore", data, "result", "post", productrefresh);
    });
    // Customer data selected automatic
    $('#Customer_select').on('change', function() {

        $('#customerPhone').val($(this).find(':selected').attr('data-phone'));
        $('#shippingAddress1').val($(this).find(':selected').attr('data-address1'));
        $('#shippingAddress2').val($(this).find(':selected').attr('data-address2'));
        $('#State').val($(this).find(':selected').attr('data-State'));
        $('#City').val($(this).find(':selected').attr('data-City'));
        $('#Country').val($(this).find(':selected').attr('data-Country'));


    });

    // Product data seletion automatic

    $(document).off('change', '.Product_name').on('change', '.Product_name', function() {
        $(this).parent().parent().find('.productPrice').val($(this).find(':selected').attr(
            'data-productPrice'));
    });

    // clone of product for multiple times
    $(document).off('click', '.append').on('click', '.append', function() {

        var a = $('#append_clone').clone();
        $('.append_div').append(a);

        a.find(':input').val('');
        // console.log($('#append_clone').clone());

    });

    $(document).off('click', '.append_x').on('click', '.append_x', function() {

        $(this).parent().parent().remove();

    });

    $(document).off('blur', '.productQuantity').on('blur', '.productQuantity', function() {
        var qt = parseInt($(this).val());
        var price = Number($(this).parent().parent().find('.productPrice').val());
        // var dis=($("#discountAmount").val());
        var total = price * qt;
        // var tax = total * 0.13;  
        // var gt = total + tax;
        // $("#subtotalAmount").val(total);
        // $("#taxAmount").val(tax);
        // ($("#discountAmount").val(dis));
        $(this).parent().parent().find(".totalPrice").val((total).toFixed(0));

    });
    // $(document).off('blur', '#productQuantity').on('blur', '#productQuantity', function() {

    //     var price = parseInt($(this).parent().parent().find('.Product_name').attr('data-price'));
    //     var qt = parseInt($("#productQuantity").val());

    //     // var dis=($("#discountAmount").val());
    //     var total = price * qt;
    //     // var tax = total * 0.13;
    //     // var gt = total + tax;
    //     $("#subtotalAmount").val(total);
    //     $("#taxAmount").val(tax);
    //     // ($("#discountAmount").val(dis));
    //     $("#totalPrice").val((total).toFixed(0));

    // });
    // $("#productQuantity").on('blur', function() {
    //     var price = parseInt($("#productPrice").val());
    //     var qt = parseInt($("#productQuantity").val());

    //     // var dis=($("#discountAmount").val());
    //     var total = price * qt;
    //     var tax = total * 0.13;
    //     var gt = total + tax;
    //     $("#subtotalAmount").val(total);
    //     $("#taxAmount").val(tax);
    //     // ($("#discountAmount").val(dis));
    //     $("#totalPrice").val((gt).toFixed(0));

    // });
</script>
