@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
            {{-- messaggio per post aggiunto correttamente --}}
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
            <h2 class="mb-3">
                {{ $project->title }}
            </h2>
            <h5>
                Anno del viaggio: 
                {{ $project->date }}
            </h5>
            <img src="{{  $project->photo_link }}" alt="{{ $project->title }}">
            <p>
                {{ $project->content }}
            </p>
        </div>
    </div>
</div>
@endsection