@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">
                        <a href="{{route('addNewUser')}}" class="btn btn-success">Add New User</a>
                    </th>
                    <th scope="col">User Name</th>
                    <th scope="col">User Address</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Nationality</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post )
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->username}}</td>
                        <td>{{$post->address}}</td>
                        <td>{{$post->gender}}</td>
                        <td>{{$post->nationality}}</td>
                        <td>{{$post->dateOfBirth}}</td>
                        <td>
                            <a href="{{route('updateUser',$post->id)}}" class="btn btn-dark btn-sm m-2" style="width: 100%;">Update User Details</a><br>
                            <a href="{{route('deleteUser',$post->id)}}" class="btn btn-danger btn-sm m-2" style="width: 100%;">Delete User</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
