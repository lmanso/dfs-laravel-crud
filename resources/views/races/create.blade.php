@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-7">

        <form action="{{route('raceStore')}}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="life">Hope of life</label>
                    <input type="text" class="form-control" id="life" name="life" placeholder="life">
                </div>
                    <div class="form-group col-md-6">
                        <label for="class">classification</label>
                        <input type="text" class="form-control" name="class" id="class">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection