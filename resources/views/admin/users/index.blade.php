@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
 
                    <table class="table table-hover">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Email</th>
                              <th scope="col">Role</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($users as $user)
                                <tr>
                                  <th scope="row">{{ $user->id}}</th>
                                  <td>{{ $user->name}}</td>
                                  <td>{{ $user->email}}</td>
                                  <td>{{ implode(' , ',$user->roles()->get()->pluck('name')->toArray())}}</td>
                                  <td>
                                      <a href="{{ route('admin.users.edit', $user->id) }}"><button type="button" class="btn btn-warning">Edit</button></a>
                                      <!--
                                      <a href="{{ route('admin.users.destroy', $user->id) }}"><button type="button" class="btn btn-warning">Delete</button></a> -->
                                  </td>
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
