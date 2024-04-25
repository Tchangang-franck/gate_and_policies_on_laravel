@extends('layouts.app')

@section('content')
<div class="container">
    <h3>{{ Auth::user->name}}</h3>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">User</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post )
                        <tr>
                            <th scope=row>{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->user->name }}</td>
                            <td>
                                <div class="btn-group btn-group-horizontal" role="group">
                                    <a href="#" class="btn btn-primary m-1">View</a>
                                    <a href="#" class="btn btn-success m-1">modify</a>
                                    <a href="#" class="btn btn-danger m-1">Delete</a>
                                </div>
                              
                            </td>
                        </tr>
                </tbody>    
                    @endforeach
                </tbody>
            </table>
        </div> 
    </div>       
</div>
@endsection
