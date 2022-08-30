<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <div style=" float:right">
                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">
                            Add Product
                        </button>
                        <!-- <button type="button" class="btn btn-success btn-sm text-white">
                          Edit
                        </button> -->
                        <button type="button" class="btn btn-danger btn-sm text-white" onClick="export2('product')">
                            Export
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <h5 class="card-title">Product Details</h5>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="zero_config_length"><label>Show <select
                                                    name="zero_config_length" aria-controls="zero_config"
                                                    class="form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select>
                                                <b>Entries</b></label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="zero_config_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="form-control form-control-sm"
                                                    placeholder="" aria-controls="zero_config"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="zero_config" class="table table-striped table-bordered dataTable"
                                            role="grid" aria-describedby="zero_config_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="ID: activate to sort column descending"
                                                        style="width: 10.25px;font-weight:bold;"> ID </th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="width: 58.565px;font-weight:bold;"> Product Category</th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="width: 58.565px;font-weight:bold;"> Vendors Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="width: 58.565px;font-weight:bold;">Product Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Age: activate to sort column ascending"
                                                        style="width: 24.9219px;font-weight:bold;">Product Code</th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Age: activate to sort column ascending"
                                                        style="width: 24.9219px;font-weight:bold;">Product Quantity</th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Start date: activate to sort column ascending"
                                                        style="width: 24.9219px;font-weight:bold;">Product Price</th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Start date: activate to sort column ascending"
                                                        style="width: 68.0781px;font-weight:bold;">Product Description
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Salary: activate to sort column ascending"
                                                        style="width: 76.0781px;font-weight:bold;"> Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                @foreach ($product as $i => $p)
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">{{ $p->id }} </td>
                                                        <td>{{ $p->productCategory }}</td>
                                                        <td>{{ $p->vendorCategory }}</td>
                                                        <td>{{ $p->productName }}</td>
                                                        <td> {{ $p->productCode }}</td>
                                                        <td>{{ $p->productQuantity }}</td>
                                                        <td>{{ $p->productPrice }}</td>
                                                        <td>{{ $p->productDescription }}</td>
                                                        <td></button>
                                                            <div style=" float:right">
                                                                <button type="button" data-id="{{ $p->id }}"
                                                                    data-bs-toggle="modal" data-bs-target="#myModal1"
                                                                    class="btn btn-success btn-sm text-white productEdit">
                                                                    Edit
                                                                </button>


                                                                <button type="button" data-id="{{ $p->id }}"
                                                                    data-bs-toggle="modal" data-bs-target="#myModal2"
                                                                    class="btn btn-danger btn-sm text-white productDelete">
                                                                    Delete
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="zero_config_info" role="status"
                                            aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="zero_config_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="zero_config_previous"><a href="#"
                                                        aria-controls="zero_config" data-dt-idx="0" tabindex="0"
                                                        class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="zero_config" data-dt-idx="1" tabindex="0"
                                                        class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="zero_config" data-dt-idx="2" tabindex="0"
                                                        class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="zero_config" data-dt-idx="3" tabindex="0"
                                                        class="page-link">3</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="zero_config" data-dt-idx="4" tabindex="0"
                                                        class="page-link">4</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="zero_config" data-dt-idx="5" tabindex="0"
                                                        class="page-link">5</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="zero_config" data-dt-idx="6" tabindex="0"
                                                        class="page-link">6</a></li>
                                                <li class="paginate_button page-item next" id="zero_config_next"><a
                                                        href="#" aria-controls="zero_config" data-dt-idx="7"
                                                        tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>

<!-- only for Add product model    -->
<div class="modal" id="myModal">
    <div class="modal-dialog" style="width:600px;">
        <div class="modal-content" style="width:600px; text-align:justify;">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add New Product</h4>
                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" id="mm">
                Modal body..
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                    id="productModelClose">Close</button>
            </div>

        </div>
    </div>
</div>

<!-- only for Edit product    -->
<div class="modal" id="myModal1">
    <div class="modal-dialog" style="width:600px;">
        <div class="modal-content" style="width:600px;">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" style="font-weight:bold">Edit Product </h4>
                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" id="mmm">
                Modal body..
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                    id="productModelClose">Close</button>
            </div>

        </div>
    </div>
</div>
{{-- modal for Delete product --}}
<div class="modal" id="myModal2">
    <div class="modal-dialog" style="width:600px;">
        <div class="modal-content" style="width:600px;">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" style="font-weight:bold">Delete Product</h4>
                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" id="mmmm">
                Modal body..
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                    id="productModelClose">Close</button>
            </div>

        </div>
    </div>
</div>
<script>
    // product Edit
    $(".productEdit").on("click", function() {

        var v = $(this).attr("data-id");
        var data = {
            id: v
        };

        ajax("/productEdit", data, "mmm", "get");

        $("#myModal1").modal("show");
    });

    // product Delete Function

    $(".productDelete").on("click", function() {

        var v = $(this).attr("data-id");
        var data = {
            id: v
        };

        ajax("/productDelete", data, "mmmm", "get");

        $("#myModal2").modal("show");
    });

    // get product
    var data = {};
    ajax("/AddNewProduct", data, "mm", "get");

    function export2(url) {
        window.open("/csvExport?type=" + url, "_blank");
    }
</script>
