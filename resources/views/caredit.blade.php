@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form method="post" action="{{action('CarController@update', $id)}}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <label for="Carcompany">Car Company:</label>
                                <input type="text" class="form-control" name="carcompany" value="{{$car->carcompany}}">
                                @error('carcompany')
                                <div class="invalid-tooltip" style="display: block">
                                    This field is required.
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <label for="Model">Model:</label>
                                <input type="text" class="form-control" name="model" value="{{$car->model}}">
                                @error('model')
                                <div class="invalid-tooltip" style="display: block">
                                    This field is required.
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <label for="Price">Price:</label>
                                <input type="text" class="form-control" name="price" value="{{$car->price}}">
                                @error('price')
                                <div class="invalid-tooltip" style="display: block">
                                    This field is required.
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
