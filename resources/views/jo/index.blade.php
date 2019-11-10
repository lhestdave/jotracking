<style>
td.details-control {
    background: url('assets/images/details_open.png') no-repeat center center;
    cursor: pointer;
}
tr.shown td.details-control {
    background: url('assets/images/details_close.png') no-repeat center center;
}
</style>
@extends('layouts.app')

@section('content')

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Manage JOs</h4>

                <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">JO</li>
                        </ol>
                    </nav>
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

    <div class="card">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <div class="table-responsive">

            <table id="jotable" class="table table-striped table-hover table-bordered display">
                <!-- $alltasks -->

                <thead>
                    <tr>
                        <th scope="col" >JO#</th>
                        <th scope="col" >Company/Client Name</th>
                        <th scope="col" >Date Encoded</th>
                        <th scope="col" >Due Date &nbsp</th>
                        <th scope="col" >Assigned to</th>
                        <th scope="col" width="10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $perx = 0; ?>
                    @if(count($jos) > 0)
                        @foreach($jos as $jo)
                        <?php $perx = number_format($jo->sumofstatus/($jo->jcount*$jo->maxstate)*100); ?>
                    <tr id="tr">
                           <td>{{$jo->id}}</td>
                           <td data-table-header="clients">{{$jo->clientname}}


                           </td>
                           <td>{{$jo->created_at}}</td>
                           @if($jo->datedue == date("Y-m-d") && $perx < 100)
                           <td class="bg-white">{{$jo->datedue}}                            <?php if($perx == 100){ ?>
                        <div class="progress" style="height: 10px; margin-bottom:0px">
                        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="{{$perx}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$perx}}%">{{$perx}}%</div>                             
                        </div>
                        <?php }else{ ?>
                        <div class="progress" style="height: 10px; margin-bottom:0px">
                        <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" aria-valuenow="{{$perx}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$perx}}%">{{$perx}}%</div>
                        </div>
                        <?php } ?></td>
                           @elseif($jo->datedue < date("Y-m-d") && $perx < 100)
                           <td class="bg-danger">{{$jo->datedue}}                           <?php if($perx == 100){ ?>
                        <div class="progress" style="height: 10px; margin-bottom:0px">
                        <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" aria-valuenow="{{$perx}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$perx}}%">{{$perx}}%</div>                             
                        </div>
                        <?php }else{ ?>
                        <div class="progress" style="height: 10px; margin-bottom:0px">
                        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="{{$perx}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$perx}}%">{{$perx}}%</div>
                        </div>
                        <?php } ?></td>
                           @elseif($jo->datedue < date("Y-m-d") && $perx == 100)
                           <td class="bg-success">{{$jo->datedue}}                           <?php if($perx == 100){ ?>
                        <div class="progress" style="height: 10px; margin-bottom:0px">
                        <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" aria-valuenow="{{$perx}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$perx}}%">{{$perx}}%</div>                             
                        </div>
                        <?php }else{ ?>
                        <div class="progress" style="height: 10px; margin-bottom:0px">
                        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="{{$perx}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$perx}}%">{{$perx}}%</div>
                        </div>
                        <?php } ?></td>
                           @else
                           <td class="bg-warning">{{$jo->datedue}}                            <?php if($perx == 100){ ?>
                        <div class="progress" style="height: 10px; margin-bottom:0px">
                        <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" aria-valuenow="{{$perx}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$perx}}%">{{$perx}}%</div>                             
                        </div>
                        <?php }else{ ?>
                        <div class="progress" style="height: 10px; margin-bottom:0px">
                        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="{{$perx}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$perx}}%">{{$perx}}%</div>
                        </div>
                        <?php } ?></td>
                           @endif

                           <td>{{$jo->username}}</td>
                           <td class="details-control">
                           <!-- <p>
                             <button class="btn btn-primary btn-xs mb-2" type="button" id="viewtask" data-toggle="collapse" data-target="#collapse{{$jo->id}}" aria-expanded="false" aria-controls="collapse{{$jo->id}}" >
                             <i class=" fas fa-clipboard-list" aria-hidden="true"></i> View Task
                             </button>
                             @if(count($admin) > 0 && $perx != 100)
                             <button class="btn btn-secondary btn-xs" type="button" rel="tooltip" title="Transfer assignment" data-toggle="modal" data-target="#transferJOModal"
                                    onclick="getJoidTransfer({{$jo->id}})">
                               <i class="fas fa-address-book" aria-hidden="true"></i> Transfer
                             </button>
                             @endif
                             <button class="btn btn-primary btn-xs mt-2" type="button" rel="tooltip" title="Add Notes/Updates"  data-toggle="modal" id="addNotes" data-target="#addNoteJO" onClick="saveNotes({{$jo->id}})" >
                             <i class="far fa-newspaper" aria-hidden="true"></i> Add Notes
                             </button>
                           </p> -->
                         </td>
                    </tr>
                    @endforeach
                    @endif

                </tbody>
                <!-- <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot> -->
            </table>

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
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->




    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        // $('#jotable').DataTable();
        $('#jotable').DataTable( {
            "lengthMenu": [[10, 50, 100, 250, -1], [10, 50, 100, 250, "All"]]
        });
        /* Formatting function for row details - modify as you need */
        function format ( d ) {
            // `d` is the original data object for the row
            return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
                '<tr>'+
                    '<td>Full name:</td>'+
                    '<td>d.name</td>'+
                '</tr>'+
                '<tr>'+
                    '<td>Extension number:</td>'+
                    '<td>d.extn</td>'+
                '</tr>'+
                '<tr>'+
                    '<td>Extra info:</td>'+
                    '<td>And any further details here (images etc)...</td>'+
                '</tr>'+
            '</table>';
        }
        

            var table = $('#jotable').DataTable( {
                "ajax": "../ajax/data/objects.txt",
                "columns": [
                    {
                        "className":      'details-control',
                        "orderable":      false,
                        "data":           null,
                        "defaultContent": ''
                    },
                    { "data": "name" },
                    { "data": "position" },
                    { "data": "office" },
                    { "data": "salary" }
                ],
                "order": [[1, 'asc']]
            } );
            
    // Add event listener for opening and closing details
    $('#jotable tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );

        console.log(row);
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    } );



    </script>

@endsection
