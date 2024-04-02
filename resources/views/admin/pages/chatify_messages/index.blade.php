@extends('admin.layouts.app')
@section('content')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="javascript:void(0);" class="breadcrumb-item">CRM</a>
                    <span class="breadcrumb-item active">One to One Chats</span>
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
            <div class="col-lg-8 offset-2">
                <div class="container">
                    <div class="row d-flex justify-content-between bg-white pt-2">
                        <div class="col-lg-6">
                            <div class="text-success">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#entity_type_add"
                                    class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm">
                                    <span class="btn-labeled-icon bg-success text-white">
                                        <i class="ph-plus-circle ph-sm"></i>
                                    </span>
                                    Add
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-end form_title">
                                <h5 class="ms-1 mb-0 text-uppercase text-secondary">One to One Chats</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card rounded-0 border-0 shadow-none">
                            <div class="card-body p-0">
                                <table
                                    class="entity_table table datatable-responsive table-bordered table-striped table-hover">
                                    <thead>
                                        <tr class="bg-secondary border-secondary text-white">
                                            <th width="5%">#</th>
                                            <th width="60%">Chat Between</th>
                                            {{-- <th width="40%">Chat</th> --}}
                                            <th width="10%">Status</th>
                                            <th class="text-center" width="5%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($conversations as $key => $conversation)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $conversation->participant1_name }} &
                                                    {{ $conversation->participant2_name }}
                                                </td>
                                                <td>
                                                    @if ($conversation->status == 'active')
                                                        <span class="badge bg-success">Active</span>
                                                    @else
                                                        <span class="badge bg-danger">In Active</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-inline-flex">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#entity_typeEdit{{ $conversation->id }}"
                                                            class="text-primary">
                                                            <i class="ph-pen"></i>
                                                        </a>
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#chatShow{{ $key }}"
                                                            class="text-primary ms-2">
                                                            <i class="ph-eye"></i>
                                                        </a>
                                                        <a href="{{ route('admin.entity_type.index') }}"
                                                            class="text-danger mx-2 delete">
                                                            <i class="ph-trash"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    @foreach ($conversations as $key => $conversation)
        <div id="chatShow{{ $key }}" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Messages between {{ $conversation->participant1_name }} and
                            {{ $conversation->participant2_name }}</h5>
                        <button type="button" class="btn-close text-black" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="list-group">
                            @foreach ($conversation->messages as $message_body)
                                <li class="list-group-item d-flex justify-content-between message-item">
                                    <p>{{ $message_body->body }} - {{ $message_body->created_at }}</p>
                                    <p>{{ $message_body->getSenderName() }}</p>
                                    <a href="javascript:void(0);" class="text-danger">
                                        <i class="ph-trash delete-message" data-message-id="{{ $message_body->id }}"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Delete message using AJAX
            $('.delete-message').click(function() {
                var messageId = $(this).data('message-id');
                // alert(messageId);
                var listItem = $(this).closest('.message-item');

                $.ajax({
                    url: '{{ route("admin.delete.message") }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        message_id: messageId
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            // Remove the message from the list
                            listItem.remove();
                        } else {
                            console.error(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });

        $('.entity_table').DataTable({
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
    </script>
@endpush
