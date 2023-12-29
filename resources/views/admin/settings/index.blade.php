@extends('admin.master')

@section('title', 'Settings')
@section('setting-active', 'active')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span>Settings</h4>

    <div class="">
        <div class="card mb-4">
            {{-- <h5 class="card-header">Setting</h5> --}}
            <div class="card-body">
                @livewire('admin.settings.update-settings')
            </div>
        </div>
    </div>
</div>

@endsection