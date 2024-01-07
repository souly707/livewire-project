@extends('admin.master')

@section('title', 'Services')
@section('services-active', 'active')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="mt-3">
        <h4 class="fw-bold py-3 mb-4 d-inline-block"><span>Services</h4>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-sm mb-2 mx-2" data-bs-toggle="modal"
            data-bs-target="#createModal">
            Add New
        </button>
        @livewire('admin.services.services-create')
    </div>

    <div class="card mb-4">
        {{-- <h5 class="card-header">Setting</h5> --}}
        <div class="card-body">
            @livewire('admin.services.services-data')
        </div>
    </div>

    @livewire('admin.services.services-update')
    @livewire('admin.services.services-delete')
    @livewire('admin.services.services-show')
</div>

@endsection
