@extends('layouts.admin')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
                <th scope="col">Type</th>
                <th scope="col">Tecnology</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Image Original Name</th>
                <th scope="col">Link</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $project->name }}</td>
                <td>{{ $project->date }}</td>
                <td>{{ $project->type?->name ?? '-' }}</td>
                <td>
                    @forelse ($project->tecnologies as $tecnology)
                        {{ $tecnology->name }}
                    @empty
                        -
                    @endforelse
                </td>
                <td>{!! $project->description !!}</td>
                <td>
                    <a href="{{ $project->link }}">{{ $project->link }}</a>
                </td>
                <td>
                    @include('admin.partials.edit')
                    @include('admin.partials.delete', [
                        'route' => route('admin.projects.destroy', $project),
                        'message' => 'Vuoi cancellare questo progetto?',
                    ])
                </td>

            </tr>
        </tbody>
    </table>
    <div scope="col"><img class="img-fluid" src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->image }}">
    </div>
    <div>{{ $project->image_original_name }}</div>
@endsection
