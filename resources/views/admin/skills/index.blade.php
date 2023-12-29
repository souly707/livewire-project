@extends('admin.master')

@section('title', 'Skills')
@section('skills-active', 'active')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="mt-3">
        <h4 class="fw-bold py-3 mb-4 d-inline-block"><span>Skills</h4>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-sm mb-2 mx-2" data-bs-toggle="modal"
            data-bs-target="#createModal">
            Add New
        </button>
        @livewire('admin.skills.skills-create')

    </div>

    <div class="card mb-4">
        {{-- <h5 class="card-header">Setting</h5> --}}
        <div class="card-body">
            @livewire('admin.skills.skills-data')
        </div>
    </div>

    @livewire('admin.skills.skills-update')
</div>

@endsection