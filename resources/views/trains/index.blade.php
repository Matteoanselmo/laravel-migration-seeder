@extends('layouts.main')

@section('main-content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>List of trains </h1>
                    @foreach ($trains as $train)
                        @if (!$train->deleted)
                            <div class="col-3">
                                <div class="card mb-3 p-3 text-dark" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$train->agency}}</h5>
                                        <h6 class="card-subtitle mb-2 ">il treno in partenza da: {{$train->departure_station}}, delle ore:  {{$train->departure_time}}</h6>
                                        <h6 class="card-subtitle mb-2 ">in arrivo a: {{$train->arrival_station}}, alle ore: {{$train->arrival_time}}</h6>
                                        <p class="card-text">codice treno: {{$train->train_code}}, numero di carrozze: {{$train->number_of_carriages}}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
