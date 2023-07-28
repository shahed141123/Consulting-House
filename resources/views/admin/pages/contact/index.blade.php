@extends('admin.layouts.app')
@section('content')

    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                    <span class="breadcrumb-item active">CRM</span>
                    <span class="breadcrumb-item active">Contact Messages</span>
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
                <div class="card-header d-flex flex-wrap align-items-center p-1">
                    <h6 class="mb-0 text-center">Contact Messages</h6>
                    <div class="d-inline-flex ms-auto">
                        <a class="text-body" data-card-action="collapse">
                            <i class="ph-caret-down"></i>
                        </a>
                        <a class="text-body mx-2" data-card-action="reload">
                            <i class="ph-arrows-clockwise"></i>
                        </a>
                    </div>
                </div>
                <div class="collapse show">
                    <div class="card-body">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="contactDT table table-bordered text-center">
                                    <thead>
                                        <tr class="bg-secondary border text-white">
                                            <th width="6%">Sl No.</th>
                                            <th width="20%">Name</th>
                                            <th width="20%">Email</th>
                                            <th width="42%">Message</th>
                                            <th class="text-center" width="12%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($contacts)
                                            @foreach ($contacts as $contact)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $contact->name }}</td>
                                                    <td>{{ $contact->email }}</td>
                                                    <td>{{ $contact->message }}</td>
                                                    <td>
                                                        <div class="d-inline-flex">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#contactreplyModal{{ $contact->id }}"
                                                                class="text-primary">
                                                                <i class="ph-airplane-takeoff"></i>
                                                            </a>

                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#contactEditModal{{ $contact->id }}"
                                                                class="text-primary mx-2">
                                                                <i class="ph-pen"></i>
                                                            </a>

                                                            <a href="{{ route('admin.contact.destroy', $contact->id) }}"
                                                                class="text-danger delete">
                                                                <i class="ph-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($contacts as $contact)
        <div id="contactreplyModal{{ $contact->id }}" class="modal fade" data-bs-keyboard="false"
            data-bs-backdrop="static" tabindex="-1">
            <div class="modal-dialog  modal-dialog-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Reply To Contact Message
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <form action="{{ route('admin.contact.update', $contact->id) }}"
                        method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Email To </label>
                                        <input id="name" name="email_id" value="{{ $contact->email }}"
                                            type="text" class="form-control form-control-sm" disabled
                                            placeholder="Enter Client Type Category Name" maxlength="100">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Subject</label>
                                        <input id="name" name="email_subject"
                                            type="text" class="form-control form-control-sm"
                                            placeholder="Enter Client Type Category Name" maxlength="100">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-2">
                                        <label for="email_body" class="form-label">Email Body</label>
                                        <textarea class="form-control" id="email_body" name="email_body" rows="5"></textarea>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="form-label">Attachment</label>
                                        <input id="name" name="email_attachment"
                                            type="file" class="form-control form-control-sm"
                                            placeholder="Enter Client Type Category Name">
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary ">Save
                                changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection


@push('scripts')
    <script>
        $(document).ready(function() {
            $('.contactDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
                autoWidth: false,
                responsive: true,
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    // width: 100,
                    targets: [0, 1, 2, 3, 4],
                }, ],


            });
        });
    </script>
@endpush
