@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="text-start mt-4">
            <a class="btn btn-success" href="{{ route('admin.projects.index') }}">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
        </div>
        <h2 class="text-center">{{ $project->title }}</h2>
        <h4 class="mt-3">{{ $project->created_at }}</h4>
        <h5>Tipologia: {{ $project->type ? $project->type->name : 'Nessuna' }}</h5>
        <h5 class="d-inline-block">Tecnologie:
            @if ($project->technologies)
                @foreach ($project->technologies as $technology)
                    <h6 class="d-inline-block"> #{{ $technology->title }}</h6>
                @endforeach
            @else
                <h6>non specificate</h6>
            @endif
        </h5>
        {{-- <p class="mt-3">
            @forelse ($project->technologies as $technology)
                <span>#{{ $technology->title }} </span>
            @empty
                <span>Technologia non specificata</span>
            @endforelse
        </p> --}}
        @if ($project->cover_image)
            <div class="w-50 mt-3 mb-3">
                <img src="{{ asset('storage/' . $project->cover_image) }}" alt="">
            </div>
        @else
            <div class="w-25 py-5 text-center text-white bg-secondary">
                No Image
            </div>
        @endif

        <p>{{ $project->description }}</p>
    </div>
@endsection
