<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <div style=" float:right">
                        <button type="button" class="btn btn-info btn-sm" class="btn btn-info btn-sm"
                            data-bs-toggle="modal" data-bs-target="#myModal">
                            Add Vendor
                        </button>
                        <button type="button" class="btn btn-success btn-sm text-white">
                            Export
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <h5 class="card-title">Vendor Details</h5>
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
                                                        style="width: 58.565px;font-weight:bold;">Type</th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="width: 58.565px;font-weight:bold;"> Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="width: 40.565px;font-weight:bold;">Email </th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Age: activate to sort column ascending"
                                                        style="width: 24.9219px;font-weight:bold;">Phone</th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Start date: activate to sort column ascending"
                                                        style="width: 34.9219px;font-weight:bold;">Address 1</th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Start date: activate to sort column ascending"
                                                        style="width: 24.9219px;font-weight:bold;">Address 2</th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Start date: activate to sort column ascending"
                                                        style="width: 24.9219px;font-weight:bold;">State</th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Start date: activate to sort column ascending"
                                                        style="width: 40.0781px;font-weight:bold;">City</th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Start date: activate to sort column ascending"
                                                        style="width: 40.0781px;font-weight:bold;"> Country </th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Salary: activate to sort column ascending"
                                                        style="width: 76.0781px;font-weight:bold;"> Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($vendor as $i => $v)
                                                    <tr role="row" class="odd">

                                                        <td class="sorting_1">{{ $v->id }} </td>
                                                        <td>{{ $v->Type }} </td>
                                                        <td> {{ $v->Name }}</td>
                                                        <td> {{ $v->Email }}</td>
                                                        <td> {{ $v->Phone }}</td>
                                                        <td> {{ $v->Address1 }}</td>
                                                        <td> {{ $v->Address2 }}</td>
                                                        <td> {{ $v->State }}</td>
                                                        <td> {{ $v->City }}</td>
                                                        <td> {{ $v->Country }}</td>
                                                        <td>
                                                            <div style=" float:right">
                                                                <button type="button" data-id="{{ $v->id }}"
                                                                    data-bs-toggle="modal" data-bs-target="#myModal1"
                                                                    class="btn btn-success btn-sm text-white vendorEdit">
                                                                    Edit
                                                                </button>
                                                                <button type="button" data-id="{{ $v->id }}"
                                                                    data-bs-toggle="modal" data-bs-target="#myModal2"
                                                                    class="btn btn-danger btn-sm text-white vendorDelete">
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
</div>
{{-- Add vendor Modol --}}
<div class="modal" id="myModal">
    <div class="modal-dialog" style="width:600px;">
        <div class="modal-content" style="width:600px;">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title"> Add Vendor</h4>
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
{{-- Modal for Vendor Edit --}}
<div class="modal" id="myModal1">
    <div class="modal-dialog" style="width:600px;">
        <div class="modal-content" style="width:600px;">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Vendor Edit</h4>
                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" id="mm1">
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
{{-- Vendor Delete modal --}}
<div class="modal" id="myModal2">
    <div class="modal-dialog" style="width:600px;">
        <div class="modal-content" style="width:600px;">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title"> Vendor Delete</h4>
                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" id="mm2">
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
    // vendor Edited
    $(".vendorEdit").on("click", function() {

        var v = $(this).attr("data-id");
        var data = {
            id: v
        };

        ajax("/vendorEdit", data, "mm1", "get");

        $("#myModal1").modal("show");
    });

    // vendor Deleted 
    $(".vendorDelete").on("click", function() {

        var v = $(this).attr("data-id");
        var data = {
            id: v
        };

        ajax("/vendorDelete", data, "mm2", "get");

        $("#myModal2").modal("show");
    });

    var data = {};
    ajax("/addNewBuyer", data, "mm", "get");
</script>
