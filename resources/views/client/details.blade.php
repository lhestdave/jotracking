@extends('layouts.app')

@section('content')

            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                    <div class="row">
                        <div class="col-12 d-flex no-block align-items-center">
                            <h4 class="page-title">Clients Profile</h4>
                           &nbsp &nbsp <button type="button" class="btn btn-primary btn-sm" id="editBtn">
                           <i class="fas fa-edit"></i> Edit Info
                            </button> &nbsp
                            <div class="ml-auto text-right">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                @if(session('success'))
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success! </strong>{{session('success')}}
                </div>
                @endif
                <div class="row">
                <div class="col-md-6">
                <div class="card">
                @if(count($clients) > 0)
                    @foreach($clients as $c)
                  <form class="form-horizontal">
                      <div class="card-body">
                          <h4 class="card-title"></h4>
                          <div class="form-group row">
                              <label for="fname" class="col-sm-3 text-right control-label col-form-label">Name</label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control" id="clientname" name="clientname" value="{{$c->clientname}}" disabled>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="fname" class="col-sm-3 text-right control-label col-form-label">Other Info</label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control" id="branch" name="branch" value="{{$c->branch}}" disabled>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="lname" class="col-sm-3 text-right control-label col-form-label">Location</label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control" id="busadd" name="busadd" value="{{$c->busadd}}" disabled>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="email1" class="col-sm-3 text-right control-label col-form-label">Business ID</label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control" id="businessID" name="businessID" value="{{$c->businessID}}" disabled>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control" id="contactno" name="contactno" value="{{$c->contactno}}" disabled>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Email Address</label>
                              <div class="col-sm-9">
                                  <input type="email" class="form-control" id="email" name="email" value="{{$c->email}}" disabled>
                              </div>
                          </div>
                      </div>
                      <!-- <div class="border-top">
                          <div class="card-body">
                              <button type="button" class="btn btn-primary">Update</button>
                          </div>
                      </div> -->
                  </form>
              </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                  <form class="form-horizontal">
                      <div class="card-body">
                          <h4 class="card-title"></h4>
                          <div class="form-group row">
                              <label for="lname" class="col-sm-3 text-right control-label col-form-label">BIR TIN</label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control" id="tin" name="tin" value="{{$c->tin}}" disabled>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="fname" class="col-sm-3 text-right control-label col-form-label">RDO</label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control" id="rdo" name="rdo" value="{{$c->RDO}}"  disabled>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="lname" class="col-sm-3 text-right control-label col-form-label">Taxpayer Classification</label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control" id="tax_class" name="tax_class" value="{{$c->tax_class}}" disabled>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="lname" class="col-sm-3 text-right control-label col-form-label">Tax Type</label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control" id="tax_type" name="tax_type" value="{{$c->tax_type}}" disabled>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Date Registered</label>
                              <div class="col-sm-9">
                                  <input type="date" class="form-control" id="date_registered" name="date_registered" value="{{$c->date_registered}}" disabled>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Contact Person</label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control" id="cperson" name="cperson" value="{{$c->cperson}}" disabled>
                              </div>
                          </div>
                          <!-- <div class="form-group row">
                              <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Message</label>
                              <div class="col-sm-9">
                                  <input name="vdn_number" type="hidden" id="vdn_number"  class="form-control input-large custom-select" required=""  />
                              </div>
                          </div> -->
                      </div>
                      <!-- <div class="border-top">
                          <div class="card-body">
                              <button type="button" class="btn btn-primary">Update</button>
                          </div>
                      </div> -->
                  </form>
                  @endforeach
                @endif
              </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Files</h5>
                        <table id="client-table" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID#</th>
                                    <th>Year</th>
                                    <th>Form</th>
                                    <th>Office/Agency</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>fff</td>
                                    <td>vffg</td>
                                    <td>Engr</td>
                                    <td>Engr</td>
                                    <td>Engr</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>

<!-- Modal -->
<div class="modal fade" id="addFileModal" tabindex="-1" role="dialog" aria-labelledby="newClientModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Client</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Form Elements</h5>
                                <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Single Select</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                            <option>Select</option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Radio Buttons</label>
                                    <div class="col-md-9">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation1" name="radio-stacked" required>
                                            <label class="custom-control-label" for="customControlValidation1">First One</label>
                                        </div>
                                         <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                            <label class="custom-control-label" for="customControlValidation2">Second One</label>
                                        </div>
                                         <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                                            <label class="custom-control-label" for="customControlValidation3">Third One</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Checkboxes</label>
                                    <div class="col-md-9">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing1">
                                            <label class="custom-control-label" for="customControlAutosizing1">First One</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
                                            <label class="custom-control-label" for="customControlAutosizing2">Second One</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing3">
                                            <label class="custom-control-label" for="customControlAutosizing3">Third One</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">File Upload</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3" for="disabledTextInput">Disabled input</label>
                                    <div class="col-md-9">
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
    </div>
  </div>
</div>
<!-- End Modal -->

    
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
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{url('../../assets/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{url('../../assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{url('../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{url('../../assets/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src="{{url('../../dist/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{url('../../dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{url('../../dist/js/custom.min.js')}}"></script>
<!-- this page js -->
<script src="{{url('../../assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
<script src="{{url('../../assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
<script src="{{url('../../assets/extra-libs/DataTables/datatables.min.js')}}"></script>
<script src="{{url('../../assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{url('../../assets/libs/select2/dist/js/select2.min.js')}}"></script>
<script>
    //***********************************//
    // For select 2
    //***********************************//
    $(".select2").select2({
        placeholder: 'Select a Form Type'
    });
    $('select:not(.normal)').each(function () {
        $(this).select2({
            dropdownParent: $(this).parent()
        });
    });
    $("#vdn_number").select2({
        placeholder: "00000",
        minimumInputLength: 2,
        ajax: {
            url: "getAjaxData/",
            dataType: 'json',
            type: "POST",
            data: function (term, page) {
                return {
                    q: term, // search term
                    col: 'vdn'
                };
            },
            results: function (data) { // parse the results into the format expected by Select2.
                // since we are using custom formatting functions we do not need to alter remote JSON data
                return {results: data};
            }
        }
    });
$(document).ready(function() {
        var isEdit = false;

        $("#editBtn").click(function(){
            if(isEdit){
                $("#editBtn").html('<i class="fas fa-edit"></i> Edit Info');
                $( "#clientname" ).prop( "disabled", isEdit );
                $( "#branch" ).prop( "disabled", isEdit );
                $( "#busadd" ).prop( "disabled", isEdit );
                $( "#businessID" ).prop( "disabled", isEdit );
                $( "#contactno" ).prop( "disabled", isEdit );
                $( "#email" ).prop( "disabled", isEdit );
                $( "#tin" ).prop( "disabled", isEdit );
                $( "#rdo" ).prop( "disabled", isEdit );
                $( "#tax_class" ).prop( "disabled", isEdit );
                $( "#tax_type" ).prop( "disabled", isEdit );
                $( "#date_registered" ).prop( "disabled", isEdit );
                $( "#cperson" ).prop( "disabled", isEdit );



                isEdit = false;

            }else{
                $("#editBtn").html('<i class="fas fa-save"></i> Save and Exit Edit Mode');
                $( "#clientname" ).prop( "disabled", isEdit );
                $( "#branch" ).prop( "disabled", isEdit );
                $( "#busadd" ).prop( "disabled", isEdit );
                $( "#businessID" ).prop( "disabled", isEdit );
                $( "#contactno" ).prop( "disabled", isEdit );
                $( "#email" ).prop( "disabled", isEdit );
                $( "#tin" ).prop( "disabled", isEdit );
                $( "#rdo" ).prop( "disabled", isEdit );
                $( "#tax_class" ).prop( "disabled", isEdit );
                $( "#tax_type" ).prop( "disabled", isEdit );
                $( "#date_registered" ).prop( "disabled", isEdit );
                $( "#cperson" ).prop( "disabled", isEdit );
                isEdit = true;
            }
        }); 




});

</script>

@endsection

