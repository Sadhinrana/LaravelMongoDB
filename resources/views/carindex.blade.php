@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-10">
                        <h4 class="card-title">Cars</h4>
                    </div>
                    <div class="col-md-2 text-right">
                        <a href="{{ route('cars.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                    </div>
                    <div class="col-12">
                        <hr>
                    </div>
                </div>

                <div class="card-body">
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <p>{{ \Session::get('success') }}</p>
                        </div><br />
                    @endif
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Company</th>
                            <th>Model</th>
                            <th>Price</th>
                            <th colspan="2">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($cars as $car)
                            <tr>
                                <td>{{$car->id}}</td>
                                <td>{{$car->carcompany}}</td>
                                <td>{{$car->model}}</td>
                                <td>{{$car->price}}</td>
                                <td><a href="{{action('CarController@edit', $car->id)}}" class="btn btn-warning">Edit</a></td>
                                <td>
                                    <form action="{{action('CarController@destroy', $car->id)}}" method="post">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
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
