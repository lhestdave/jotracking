@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Manage Users</div>

                <div class="card-body">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Roles</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($users as $user)
                          <tr>
                            <th>{{$user->name}}</th>
                            <th>{{$user->email}}</th>
                            <th>{{implode(', ', $user->roles()->get()->pluck('name')->toArray())}}</th>
                            <th>
                              <a href="{{route('superadmin.users.edit',$user->id)}}">
                                <button type="button" name="button" class="btn btn-primary btn-sm">Edit</button>
                              </a>
                            </th>
                          </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
