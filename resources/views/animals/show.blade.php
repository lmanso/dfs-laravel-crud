@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- <div class="col-lg-3"></div> -->
        <!-- <div class="col-lg-6 d-flex" style="flex-wrap: wrap;"> -->
        <div class="col-md-10 justify-content-center d-flex" style="flex-wrap: wrap; flex-basis: 800px;">
            @foreach($getAllAnimals as $animal)
            <div class="card" style="width: 18rem; margin: 10px; max-height: 650px; ">
                <img src="{{ $animal->img }}" class="card-img-top" style="max-height: 500px;" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $animal->name }}</h5>
                    <p class="card-text"> {{ $animal->gender }} -  {{ $animal->age }} ans -  {{ $animal->size }} cm -  {{ $animal->weight }} - {{ $animal->race->name }} <br>{{ $animal->about }}</p>
                    <a href="{{ route('edit', $animal->id)}}" class="btn btn-primary">Modifier</a>
                    <a href="{{ route('delete', $animal->id)}}" class="btn btn-danger">supprimer</a>

                </div>
            </div>
            @endforeach
        </div>
        <!-- <div class="col-lg-3"></div> -->
    </div>
</div>
@endsection