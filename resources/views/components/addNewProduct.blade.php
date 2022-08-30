<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->

    <div class="row">
        <div class="col-md-10">
            <div class="card">

                <div id="result"></div>
                <form class="form-horizontal" method="post" action="#" id="productStore">
                    @csrf
                    <div class="card-body">

                        <div class="productAdd" style="display:block">
                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="lname" class="text-end control-label col-form-label">Product Category
                                    </label>

                                    <select name="productCategory" id="productCategory">
                                        <option value="FMG Product"> FMG product </option>
                                        <option value="Restro Product"> Restro product </option>
                                        <option value="Sanitary Product"> Sanitary product </option>
                                        <option value="Vegetables Product"> Vegetables product </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="lname" class=" text-end control-label col-form-label">Vendor Category
                                    </label>

                                    <select name="vendorCategory" id="vendorCategory">
                                        <option value="0"> Select Vendor </option>
                                        @foreach ($vendor as $i => $v)
                                            <option value="{{ $v->Name }}"> {{ $v->Name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="productName" class=" text-end control-label col-form-label">Product Name
                                    </label>
                                    <input type="text" name="productName" class="form-control" id="ProductName"
                                        placeholder="Product name...." />
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="productQuantity" class=" text-end control-label col-form-label">Product
                                        Code </label>
                                    <input type="text" class="form-control" id="productCode" name="productCode"
                                        placeholder="product code" />
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="productQuantity" class=" text-end control-label col-form-label">Enter
                                        product Quantity</label>
                                    <input type="number" class="form-control" id="productQuantity"
                                        name="productQuantity" placeholder="" />
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="productPrice" class=" text-end control-label col-form-label">Product
                                        Price Per Unit/Kg </label>
                                    <input type="number" class="form-control" id="productPrice" name="productPrice"
                                        placeholder="0.00" />
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="cono1" class=" text-end control-label col-form-label">Product
                                        Description</label>
                                    <textarea class="form-control" id="productDescription" name="productDescription"></textarea>
                                </div>
                            </div>
                            <div class="border-top">

                                <div class="card-body" style="float: right">
                                    <button type="button" id="addProduct" name="button"
                                        class="btn btn-primary btn-lg btn-outline-success">
                                        Add
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- product end -->
<script>
    var productrefresh = function() {
        ajax("/productDetails", data, "pageload", "get");
    }

    $("#addProduct").on("click", function() {
        var data = $("#productStore").serialize();
        // data=JSON.stringify(data);
        console.log(data);

        // toastr.success("Your New Product added","Insertion Sucessfull!");


        $("#productModelClose").click();
        ajax("/productStore", data, "result", "post", productrefresh);

    });
</script>
