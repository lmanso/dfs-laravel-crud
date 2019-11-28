@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-7">

        <form action="{{route('store')}}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="img">Img</label>
                    <input type="text" class="form-control" id="img" name="img" placeholder="img">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="race">Race</label>
                        <select id="race" class="form-control" name="race">
                            @foreach ($getAllRaces as $race)
                            <option value="{{$race->id}}"> {{$race->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="age">Age</label>
                        <input type="text" class="form-control" name="age" id="age">
                    </div>
                    <div class="form-group col-md-6">
                            <label for="gender">Gender</label>
                            <input type="text" class="form-control" name="gender" id="gender">
                        </div>
                        <div class="form-group col-md-6">
                                <label for="size">Size</label>
                                <input type="text" class="form-control" name="size" id="size">
                            </div>
                            <div class="form-group col-md-6">
                                    <label for="weight">Weigth</label>
                                    <input type="text" class="form-control" name="weight" id="weight">
                                </div>
                    <div class="form-group col-md-6">
                        <label for="about">about</label>
                        <input type="textarea" class="form-control" name="about" id="about">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection