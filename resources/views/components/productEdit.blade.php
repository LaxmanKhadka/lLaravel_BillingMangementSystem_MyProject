<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->

    <div class="row">
        <div class="col-md-10">
            <div class="card">

                <div id="result"></div>
                <form class="form-horizontal" method="post" action="#" id="productEdit">
                    @csrf

                    <input type="hidden" value="{{ $p->id }}" name="id" id="id">
                    <div class="card-body">

                        <div class="productEdit" style="display:block">

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="lname" class=" text-end control-label col-form-label">Product
                                        Category </label>
                                    @php
                                        $data = ['FMG product', 'Restro product', 'Sanitary product', 'Vegetables product'];
                                    @endphp
                                    <select name="productCategory" id="productCategory">
                                        @foreach ($data as $i => $pa)
                                            <option value="{{ $pa }}"
                                                @if ($pa == $p->productCategory) selected @endif>{{ $pa }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="lname" class=" text-end control-label col-form-label">Vendor
                                        Category
                                    </label>
                                    <select name="vendorCategory" id="vendorCategory">
                                        <option value="{{ $p->vendorCategory }}"
                                            @if ($p->vendorCategory) selected @endif>{{ $p->vendorCategory }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="productName" class=" text-end control-label col-form-label">Product
                                        Name
                                    </label>
                                    <input type="text" name="productName" class="form-control"
                                        value="{{ $p->productName }}" id="ProductName" placeholder="Product name...." />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="productQuantity" class=" text-end control-label col-form-label">Product
                                        Code </label>
                                    <input type="text" class="form-control" id="productCode"
                                        value="{{ $p->productCode }}" name="productCode" placeholder="product code" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="productQuantity" class=" text-end control-label col-form-label">Enter
                                        product Quantity</label>
                                    <input type="number" class="form-control" id="productQuantity"
                                        name="productQuantity" value="{{ $p->productQuantity }}" placeholder="" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="productPrice" class=" text-end control-label col-form-label">Product
                                        Price </label>
                                    <input type="number" class="form-control" id="productPrice" name="productPrice"
                                        value="{{ $p->productPrice }}" placeholder="0.00" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="cono1" class=" text-end control-label col-form-label">Product
                                        Description</label>
                                    <textarea class="form-control" id="productDescription" name="productDescription" value="{{ $p->productDescription }}">{{ $p->productDescription }}</textarea>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body" style="float:right">
                                    <button type="button" id="editProduct" name="button"
                                        class="btn btn-primary btn-lg btn-outline-success">
                                        Edit
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

<script>
    var productrefresh = function() {
        ajax("/productDetails", data, "pageload", "get");
    }


    $("#editProduct").on("click", function() {


        var data = $("#productEdit").serialize();
        // data=JSON.stringify(data);
        console.log(data);

        // toastr.success("Your New Product added","Insertion Sucessfull!");

        $("#productModelClose").click();
        ajax("/productEdited", data, "result", "post", productrefresh);

    });
</script>
