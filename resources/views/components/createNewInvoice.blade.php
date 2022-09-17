<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->

    <div class="row">
        <h1> Sales Order</h1>
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <div style=" float:right">
                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                            data-bs-target="#myModal1">
                            Multi order
                        </button>
                        {{-- <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">
                           Create order
                      </button> --}}
                        <!-- <button type="button" class="btn btn-success btn-sm text-white">
                          Edit
                        </button> -->
                        <button type="button" class="btn btn-danger btn-sm text-white" onClick="orderexport()">
                            Export
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <h5 class="card-title">Order Table</h5>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-3 col-md-3">
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
                                    <div class="col-sm-3 col-md-3">
                                        <div id="zero_config_filter" class="dataTables_filter">

                                            <label> Start Date: <input type="date" class="dateSearch"
                                                    name="start_date" value="{{ request('start_date') }}"
                                                    style="display: flex"></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-md-3">
                                        <div id="zero_config_filter" class="dataTables_filter">
                                            <label> End Date:
                                                <input type="date" class="dateSearch" name="end_date"
                                                    value="{{ request('end_date') }}" style="display: flex"></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-md-3">
                                        <div id="zero_config_filter" class="dataTables_filter">
                                            <label>Search:<input id="ordertableSearch" type="search"
                                                    class="form-control form-control-sm" placeholder=""
                                                    aria-controls="zero_config" value="{{ request('search') }}"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="zero_config" class="table table-striped table-bordered dataTable"
                                        role="grid" aria-describedby="zero_config_info">
                                        <thead>

                                            <tr role="row">
                                                <H2>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="ID: activate to sort column descending"
                                                        style="width:150px; font-weight:bold;text-align:center;">
                                                        Order Date </th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="width:70px; font-weight:bold;text-align:center;">
                                                        Invoice#</th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="width:250px;font-weight:bold;text-align:center;">
                                                        Customer Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="width:200px;font-weight:bold;text-align:center;">
                                                        Customer Phone</th>
                                                    {{-- <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Office: activate to sort column ascending"
                                                            style="width:58.565px;font-weight:bold;">Product Name</th>
                                                        <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Age: activate to sort column ascending"
                                                            style="width: 24.9219px;font-weight:bold;">Product Quantity
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Start date: activate to sort column ascending"
                                                            style="width:24.9219px;font-weight:bold;">Product Price</th>
                                                        <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Start date: activate to sort column ascending"
                                                            style="width:68.0781px;font-weight:bold;">Sub Total
                                                            Amount(NPR)</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="zero_config" rowspan="1" colspan="1"
                                                            aria-label="Start date: activate to sort column ascending"
                                                            style="width:68.0781px;font-weight:bold;">Tax Amount</th>
                                                        <th class="sorting" tabindex="0"
                                                            aria-controls="zero_config" rowspan="1" colspan="1"
                                                            aria-label="Start date: activate to sort column ascending"
                                                            style="width:68.0781px;font-weight:bold;">Discount Amount
                                                        </th> --}}
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Start date: activate to sort column ascending"
                                                        style="width:200px;font-weight:bold;text-align:center;">
                                                        Total Amount
                                                        (NPR)</th>
                                                    {{-- <th class="sorting" tabindex="0"
                                                            aria-controls="zero_config" rowspan="1" colspan="1"
                                                            aria-label="Start date: activate to sort column ascending"
                                                            style="width:68.0781px;font-weight:bold;">Remarks</th> --}}
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Salary: activate to sort column ascending"
                                                        style="width:200px;font-weight:bold;text-align:center;">
                                                        Action</th>
                                                </H2>
                                            </tr>

                                        </thead>
                                        <tbody>

                                            @foreach ($order as $i => $o)
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1" style="text-align:center">
                                                        {{ date('d/m/y', strtotime($o->created_at)) }} </td>
                                                    <td style="text-align:center">{{ str_pad($o->id, 5, '0') }}
                                                    </td>
                                                    <td style="text-align:center">{{ $o->Customer_select }}</td>
                                                    <td style="text-align:center">{{ $o->customerPhone }}</td>
                                                    {{-- <td>{{ $o->productName }}</td> --}}
                                                    {{-- <td>{{ $o->productQuantity }}</td> --}}
                                                    {{-- <td>{{ number_format($o->productPrice, 2) }}</td> --}}
                                                    {{-- <td>{{ number_format($o->subtotalAmount, 2) }}</td> --}}
                                                    {{-- <td>{{ number_format($o->taxAmount, 2) }}</td> --}}
                                                    {{-- <td>{{ number_format($o->discountAmount, 2) }}</td> --}}
                                                    <td style="text-align:center">
                                                        {{ number_format($o->totalAmount, 2) }}</td>
                                                    {{-- <td>{{ $o->remarks }}</td> --}}
                                                    <td style="text-align:center">
                                                        <div style=" float:center">
                                                            <button type="button" data-id="{{ $o->id }}"
                                                                class="btn btn-primary btn-sm text-white invoice"
                                                                data-bs-toggle="modal" data-bs-target="#myModal2">
                                                                Action
                                                            </button>
                                                            <button type="button" data-id="{{ $o->id }}"
                                                                class="btn btn-danger btn-sm text-white delete"
                                                                data-bs-toggle="modal" data-bs-target="#myModal3">
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
                                    <div class="dataTables_paginate paging_simple_numbers" id="zero_config_paginate">
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

<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title"></h4>
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

<!--  Model for only multi-order   -->
<div class="modal" id="myModal1">
    <div class="modal-dialog" style="width: 900px;">
        <div class="modal-content" style="width:900px;">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title"></h4>
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
{{-- Model for only action --}}
<div class="modal" id="myModal2">
    <div class="modal-dialog" style="width: 700px;">
        <div class="modal-content" style="width:700px;">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title"></h4>
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
{{-- model for delete only --}}
<div class="modal" id="myModal3">
    <div class="modal-dialog" style="width: 700px;">
        <div class="modal-content" style="width:700px;">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" id="mmmmm">
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
    // Invoice
    var productrefresh = function() {
        ajax("/createNewInvoice", data, "pageload", "get");
    }

    $(".invoice").on("click", function() {

        var v = $(this).attr("data-id");
        var data = {
            id: v
        };

        ajax("/invoiceFormat", data, "mmmm", "get");

        $("#myModal2").modal("show");
    });

    $('.delete').on("click", function() {
        var v = $(this).attr("data-id");
        var data = {
            id: v
        };
        ajax("/orderDeleted", data, "mmmm", "post", productrefresh)
        $("#myModal3").modal("hide");
    });

    // get product
    var data = {};
    // ajax("/createOrder", data, "mm", "get");

    ajax("/multiOrder", data, "mmm", "get");

    function export2(url) {
        window.open("/csvExport?type=" + url, "_blank");
    }

    $(document).off('keyup', '#ordertableSearch').on('keyup', '#ordertableSearch', function(e) {

        let start_date = $('.dateSearch[name="start_date"]').val();
        let end_date = $('.dateSearch[name="end_date"]').val();

        ajax("/createNewInvoice", {
            search: $(this).val(),
            start_date,
            end_date
        }, "pageload", "get");

    });

    $(document).off('change', '.dateSearch').on('change', '.dateSearch', function() {
        let start_date = $('.dateSearch[name="start_date"]').val();
        let end_date = $('.dateSearch[name="end_date"]').val();

        ajax("/createNewInvoice", {
            search: $('#ordertableSearch').val(),
            start_date,
            end_date
        }, "pageload", "get");
    });

    function orderexport() {

        let start_date = $('.dateSearch[name="start_date"]').val();
        let end_date = $('.dateSearch[name="end_date"]').val();
        let search = $('#ordertableSearch').val();
        toastr.success("Generating report of orders");
        export2(`order&search${search}&start_date=${start_date}&end_date=${end_date}`)

    }
</script>
