@extends('layouts.app')

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <h4 class="page-title">CREATE JOB ORDER</h4> </div>
      <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <!-- <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro 2</a> -->       
        <ol class="breadcrumb">
            <li><a href="{{url('home')}}">Dashboard</a></li>
            <li class="active">Create Job Orders</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- ============================================================== -->
<!-- Different data widgets -->
<!-- ============================================================== -->
<!-- .row -->
<div class="row">
  @if(session('error'))
  <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error! </strong>{{session('error')}}
  </div>
  @endif
  <div class="col-sm-12">
        <div class="white-box analytics-info">
            <form id="joForm" action="{{url('/addjo')}}" method="post" onsubmit="return confirm('Do you really want to submit the form?');">
            {{ csrf_field() }}
            <div class="form-row">
              <div class="col-md-12 mb-3 form-row">
                <label for="clientid">Choose Company/Client</label>
                <select class="form-control" name="clientid" id="clientid" >
                  <!-- <option selected>Choose...</option> -->

                  @if(count($clients)>0)
                    @foreach($clients as $client)

                      @if( $_REQUEST['cid'] == $client->id)
                        <option value="{{$client->id}}" selected>{{$client->clientname}}</option>
                      @else
                        <option value="{{$client->id}}" >{{$client->clientname}} - [{{$client->branch}}] - [TIN:{{$client->tin}}]</option>
                      @endif
                    @endforeach
                  @endif
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="jodate">Due Date</label>
                <input type="date" class="form-control" name="jodate" id="jodate" required>
              </div>
              <div class="form-group col-md-6">
                <label for="assignedto">Assigned to</label>
                <select id="assignedto" name="assignedto" class="form-control" required>
                  <!-- <option selected>Choose....</option> -->
                  @if(count($users)>0)
                    @foreach($users as $user)
                      <option value="{{$user->id}}">{{$user->name}} [{{$user->email}}] </option>
                    @endforeach
                  @endif
                </select>
              </div>
              </div>
            <div class="card">
              <div class="card-header">
                <button type="button" class="btn btn-success btn-sm" id="addtask"> <span class="fa fa-plus"></span> Add New Task</button>
                <button type="button" class="btn btn-danger btn-sm" id="deletetask"> <span class="fa fa-times"></span> Remove Task</button>
              </div>
              <div class="card-body">
                <table>
                  <tbody>

                  </tbody>
                </table>
                <hr>
                TOTAL AMOUNT DUE: (Php) <p id="amountdue"></p>
                <button type="button" class="btn btn-success btn-sm" id="calcTask"> <span class="fa fa-calculator"></span> Calculate</button>
              </div>
            </div>
            <hr>
            @if(count($admin) > 0)
              <input type="checkbox" name="dateoverride" id="dateoverride" value="1" class="form-group"> Override Created Date  (For Existing JOs)
              <br>
              <div class="form-group col-md-3">
                <input type="date" class="form-control" name="createddate" id="createddate">
              </div>
            <br>
            @endif

            <button class="btn btn-gray" type="reset">Cancel</button>
            <button class="btn btn-primary" type="submit">Submit JO</button>
          </form>


            </div>
    </div>
</div>
<!--/.row -->

@endsection
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script src "https://cdn.datatables.net/plug-ins/1.10.15/sorting/stringMonthYear.js"></script>

<script type="text/javascript">
   jQuery(document).ready(function() {
     $("#createddate").hide();
     $("#dateoverride").click(function () {
       if ($(this).is(":checked")) {
           $("#createddate").show();
           $("#createddate").prop('required',true);
       } else {
           $("#createddate").hide();
           $("#createddate").prop('required',false);
       }
    });
   });
</script>