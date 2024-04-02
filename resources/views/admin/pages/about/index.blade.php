@extends('admin.layouts.app')
@section('content')
    <!-- Javascript behaviour -->
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                    <span class="breadcrumb-item active">Site Content</span>
                    <span class="breadcrumb-item active">About Us</span>
                </div>

                <a href="#breadcrumb_elements"
                    class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                    data-bs-toggle="collapse">
                    <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="content">
        <!-- Javascript behaviour -->
        <div class="row">
            <div class="card">

                <div class="collapse show">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header d-flex flex-wrap">
                                        <h6 class="mb-0">About</h6>
                                        <div class="d-inline-flex ms-auto">
                                            @if (count($aboutUses) < 1)
                                                <a href="{{ route('admin.about-us.create') }}" type="button"
                                                    class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm">
                                                    <span class="btn-labeled-icon bg-success text-white">
                                                        <i class="ph-plus-circle ph-sm"></i>
                                                    </span>
                                                    Add
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr class="bg-secondary border-secondary text-white">
                                                            <th width="5%">#</th>
                                                            <th width="90%">Name</th>
                                                            <th class="text-center" width="5%">Action</th>
                                                        </tr>
                                                    </thead>

                                                    @php
                                                        $words = [
                                                            'one',
                                                            'two',
                                                            'three',
                                                            'four',
                                                            'five',
                                                            'six',
                                                            'seven',
                                                            'eight',
                                                            'nine',
                                                        ];
                                                    @endphp
                                                    <tbody>
                                                        @if (count($aboutUses) > 0)
                                                            @foreach ($aboutUses as $key => $item)
                                                                <td>{{ $item->id }}</td>
                                                                <td>{{ isset($words[$key]) ? 'Tamplate' . ' ' . Str::ucfirst($words[$key]) : 'Number out of range' }}
                                                                </td>
                                                                <td>
                                                                    <div class="d-inline-flex">
                                                                        <a href="{{ route('admin.about-us.edit', $item->id) }}"
                                                                            class="text-primary">
                                                                            <i class="ph-pen"></i>
                                                                        </a>
                                                                        <a href="{{ route('admin.about-us.destroy', [$item->id]) }}"
                                                                            class="text-danger mx-2 delete">
                                                                            <i class="ph-trash"></i>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            @endforeach
                                                        @else
                                                            <tr>
                                                                <td class="text-center" colspan="4">No Data Found</td>
                                                            </tr>
                                                        @endif
                                                    <tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
