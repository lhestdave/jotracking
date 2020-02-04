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
                  <form class="form-horizontal" id="clientProfile">
                      <div class="card-body">
                          <h4 class="card-title"></h4>
                          <div class="form-group row">
                              <label for="fname" class="col-sm-3 text-right control-label col-form-label">Name</label>
                              <div class="col-sm-9">
                                  <input type="text" id="cid" name="cid" value="{{$c->id}}" hidden>
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
                              <label for="lname" class="col-sm-3 text-right control-label col-form-label">Taxpayer Class.</label>
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
                        <h5 class="card-title">Files &nbsp  <button type="button" class="btn btn-primary btn-sm" id="uploadFile" data-toggle="modal" data-target="#addFileModal" >
                           <i class="fas fa-file-alt"></i>&nbsp Upload</button> </h5>
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>

<!-- Modal -->
<div class="modal fade" id="addFileModal" tabindex="-1" role="dialog" aria-labelledby="newClientModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card">
        <div class="card-body">
            <div class="form-group row">
                <label class="col-md-3" for="disabledTextInput">Applicable Date</label>
                <div class="col-md-9">
                    <input type="date" id="applicableDate" class="form-control" placeholder="Applicable Date" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 m-t-15">Form Type</label>
                <div class="col-md-9">
                    <select class="select2 form-control custom-select" id="formType" style="width: 100%; height:36px;">
                            
                    </select>
                </div>
            </div>
            <input type="text" id="filename" name="filename">
            <div class="form-group row">
                <label class="col-md-3">File Upload</label>
                <div class="col-md-9">
                <form method="post" action="{{url('dropzone/store')}}" enctype="multipart/form-data"
                class="dropzone form-group" id="dropzone">
                @csrf
                </form>
                </div>
            </div>
        </div>
        <div class="border-top">
            <div class="card-body">
                <center><button type="submit" class="btn btn-primary" id="fileuploadsubmit">Save</button></center>
            </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/dropzone.js"></script>


<script>
// console.log($( "#cid" ).val());

$(document).ready(function() {
    var isFormLoaded = false;

    if(isFormLoaded === false){
        $("#uploadFile").click(function(){
            $('#formType').find('option').remove();
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
            type: 'POST',
            url: '/getformlist',
            data: {
                '_token': $('input[name=_token]').val(),
            },
            success: function(data){
                //console.log("Data." , data.length);
                for(var i = 0; i < data.length; i++){
                    $("#formType").append('<option value="'+data[i].id+'">'+data[i].code + ' '+ data[i].description +'</option>');
                }
                isFormLoaded = true;
            },
            error:function(data)
            {
                console.log(data);
                isFormLoaded = false;
            }
            });
        });
    }
    //     //***********************************//
    // // For select 2
    // //***********************************//
    // $(".select2").select2({
    //     placeholder: 'Select a Form Type'
    // });
    // $('select:not(.normal)').each(function () {
    //     $(this).select2({
    //         dropdownParent: $(this).parent()
    //     });
    // });
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();

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
                // console.log(isEdit, $( "#clientname" ).val() );
                var cid = $( "#cid" ).val();
                var cname = $( "#clientname" ).val();
                var branch = $( "#branch" ).val();
                var busadd = $( "#busadd" ).val();
                var businessID = $( "#businessID" ).val();
                var contactno = $( "#contactno" ).val();
                var email  = $( "#email" ).val();
                var tin = $( "#tin" ).val();
                var rdo = $( "#rdo" ).val();
                var tax_class  = $( "#tax_class" ).val();
                var tax_type = $( "#tax_type" ).val();
                var date_r = $( "#date_registered" ).val();
                var cperson = $( "#cperson" ).val();

                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                type: 'POST',
                url: '/clients/update',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'cid' : cid,
                    'cname' : cname,
                    'branch' : branch,
                    'busadd' : busadd,
                    'businessID' : businessID,
                    'contactno' : contactno,
                    'email' : email,
                    'tin' : tin,
                    'rdo' : rdo,
                    'tax_class' : tax_class,
                    'tax_type' : tax_type,
                    'date_r' : date_r,
                    'cperson' : cperson
                },
                success: function(data){
                    console.log("Data saved." , data);
                },
                error:function(data)
                {
                    console.log(data);
                }
                });

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
                // console.log(isEdit, $( "#branch" ).val() );
                isEdit = true;

            }
        }); 

        $('#fileuploadsubmit').click(function() {
            var appDate = $('#applicableDate').val();
            var formType = $( "#formType option:selected" ).val();
            var filename = $('#filename').val();
            
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
            type: 'POST',
            url: '/clients/update',
            data: {
                '_token': $('input[name=_token]').val(),
                'filename' : filename
            },
            success: function(data){
                console.log("Data saved." , data);
            },
            error:function(data)
            {
                console.log(data);
            }
            });


            alert(formType);
        });

});
Dropzone.options.dropzone =
{
    maxFilesize: 30,
    renameFile: function (file) {
        // var dt = new Date();
        // var time = dt.getTime();
        // return time + file.name;
        return file.name;
    },
    acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf,.doc,.docx",
    addRemoveLinks: true,
    timeout: 60000,
    success: function (file, response) {
        console.log(response);
    },
    error: function (file, response) {
        $('#filename').val();
        return false;
    },
    maxFiles: 1,
    accept: function(file, done) {
        $('#filename').val(file.name);
        console.log(file.name);
        done();
    },
    init: function() {
        this.on("maxfilesexceeded", function(file){
            alert("No more files please! Only one (1) file is allowed.");
        });
    }
};

</script>

@endsection

