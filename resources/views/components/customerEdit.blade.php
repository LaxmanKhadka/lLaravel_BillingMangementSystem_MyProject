<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-10">
            <div class="card">

                <div id="result"></div>

                <form class="form-horizontal" method="post" action="#" id="customerEdit">

                    @csrf
                    <input type="hidden" value="{{ $v->id }}" name="id" id="id">
                    <div class="card-body">
                        <div class="editCudtomer" style="display: block">

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="name" class="text-end control-label col-form-label">Name
                                        </span></label>
                                    <input type="text" class="form-control require" id="Name"
                                        value="{{ $v->Name }}" name="Name" placeholder="" />
                                </div>
                                <span class="req" style="color:red"></span>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="Email" class="text-end control-label col-form-label">Email</label>
                                    <input type="email" class="form-control require" id="email" name="Email"
                                        value="{{ $v->Email }}" placeholder="" />
                                </div>
                                <span class="req" style="color:red"></span>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">

                                    <label for="Phone" class="text-end control-label col-form-label">Phone</label>
                                    <input type="number" class="form-control require" id="phone" name="Phone"
                                        value="{{ $v->Phone }}" placeholder="" />
                                </div>
                                <span class="req" style="color:red"></span>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="address" class="text-end control-label col-form-label">Address
                                        1</label>
                                    <input type="text " class="form-control require" id="Adress1" name="Address1"
                                        value="{{ $v->Address1 }}" placeholder="" />
                                </div>
                                <span class="req" style="color:red"></span>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="address" class="text-end control-label col-form-label">Address
                                        2</label>
                                    <input type="text " class="form-control require" id="Adress2" name="Address2"
                                        value="{{ $v->Address2 }}" placeholder="" />
                                </div>
                                <span class="req" style="color:red"></span>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="address" class="text-end control-label col-form-label">State</label>
                                    <input type="text " class="form-control require" id="State" name="State"
                                        value="{{ $v->State }}" placeholder="" />
                                </div>
                                <span class="req" style="color:red"></span>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="address" class="text-end control-label col-form-label">City</label>
                                    <input type="text " class="form-control require" id="City" name="City"
                                        value="{{ $v->City }}" placeholder="" />
                                </div>
                                <span class="req" style="color:red"></span>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="lname" class="text-end control-label col-form-label">Country
                                    </label>
                                    @php
                                        $dat = ['Nepal', 'India', 'China', 'Bhutan', 'Bnagladesh', 'Shree Lanka', 'Other Countries'];
                                    @endphp
                                    <select name="Country" id="Country" class="require">
                                        @foreach ($dat as $i => $va)
                                            <option value="{{ $va }}"
                                                @if ($va == $v->Country) selected @endif> {{ $va }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                                <span class="req" style="color:red"></span>
                            </div>
                            <div class="border-top">
                                <div class="card-body" style="float:right">
                                    <button type="button" class="btn btn-primary btn-lg btn-outline-success"
                                        name="addCustomer" id="Edit">
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
    var productreferesh = function() {
        ajax("/customerDetails", data, "pageload", "get");
    }
    $("#Edit").on("click", function() {
        // console.log("laxman");
        var check = 0;

        $("#customerEdit .require").each(function(index, value) {

            if ($(this).val() == "") {
                $(this).css("border", "1px solid red");

                // $(".req").html(" *This filed is required !");

                check = 1;

            } else {
                $(this).css("border", "1px solid gray");
                // $(".req").html("");
            }
        });
        // check =0
        // var v = $("#email").val();

        // if (!validateEmail(v)) {
        //     check = 1;
        //     $("#email").css("border", "1px solid red");
        // } else {
        //     $("#email").css("border", "1px solid gray");

        // }

        if (check == 0) {
            var data = $("#customerEdit").serialize();

            console.log(data);

            $("#productModelClose1").click();

            toastr.success("Customer edited successfully !");

            ajax("/customerEdited", data, "result", "post", productreferesh);
        }
    });
</script>
