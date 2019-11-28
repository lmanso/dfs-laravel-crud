@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-7">


            <form action="{{route('update', $animal->id)}}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="{{$animal->name}}">
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
                        <input type="text" class="form-control" name="age" id="age" placeholder="{{$animal->age}}">
                    </div>
                    <div class="form-group col-md-6">
                            <label for="gender">Gender</label>
                            <input type="text" class="form-control" name="gender" id="gender" placeholder="{{$animal->gender}}">
                        </div>
                        <div class="form-group col-md-6">
                                <label for="size">Size</label>
                                <input type="text" class="form-control" name="size" id="size" placeholder="{{$animal->size}}">
                            </div>
                            <div class="form-group col-md-6">
                                    <label for="weight">Weigth</label>
                                    <input type="text" class="form-control" name="weight" id="weight" placeholder="{{$animal->weight}}">
                                </div>
                    <div class="form-group col-md-6">
                        <label for="about">about</label>
                        <input type="textarea" class="form-control" name="about" id="about" placeholder="{{$animal->about}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection


