@extends('layouts.app-dashboard')

@section('title', 'Manage User')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">User List</h4>
            <div class="page-title-right">

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body border-bottom">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <div class="search-box me-2 mb-2 d-inline-block">
                            <div class="" id="dtbuttons"></div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="float-end addnew">
                            <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary waves-effect waves-light" id="create-new11-user">
                                <i class="mdi mdi-plus me-1"></i> Add New
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table id="user_datatable" data-name="user" class="table align-middle table-nowrap table-hover">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 70px;">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Status</th>
                                <th scope="col">last Login</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>

                <!--end row-->
            </div>


            <div class="modal fade" id="ajax-user-modal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="userCrudModal"></h4>
                        </div>
                        <div class="modal-body">
                            <form id="userForm" name="userForm" class="form-horizontal" enctype="multipart/form-data">
                                <input type="hidden" name="user_id" id="user_id">
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Tilte" value="" maxlength="50" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label">Product Code</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="product_code" name="product_code" placeholder="Enter Tilte" value="" maxlength="50" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description" value="" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Image</label>
                                    <div class="col-sm-12">
                                        <input id="image" type="file" name="image" accept="image/*" onchange="readURL(this);">
                                        <input type="hidden" name="hidden_image" id="hidden_image">
                                    </div>
                                </div>
                                <img id="modal-preview" src="https://placehold.co/150" alt="Preview" class="form-group hidden" width="100" height="100">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" id="btn-save" value="create">Save changes
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('page-specific-style')
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('page-specific-script')
<script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
  <script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
  <script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
  <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
  <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>


  <script>
    var SITEURL = '{{URL::to('')}}';
    $(document).ready( function () {
        var elem = document.getElementById('user_datatable');
        var datatablename=elem.getAttribute('data-name');
        var today = new Date();
        var date = today.getFullYear()+''+(today.getMonth()+1)+''+today.getDate();
        var time = today.getHours() + "" + today.getMinutes();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var table=$('#user_datatable').DataTable({
            stateSave: true,
            stateDuration: 60 * 60 * 24,
            processing: true,
            serverSide: true,
            autoWidth: false,
            // scrollY: "500px",
            language: {
                'paginate': {
                    'previous': '<i class="mdi mdi-chevron-left"></i>',
                    'next': '<i class="mdi mdi-chevron-right"></i>'
                }
            },
            columnDefs: [
                { width: 40, targets: 0 },
                { width: 52, targets: -1 }
            ],
            lengthMenu: [[25, 50, 100, -1], [25, 50, 100, "All"]],
            dom:"B<'row'<'col-sm-5'l><'col-sm-7'f>>" + "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            // dom: 'lfrtip',

            ajax: {
                url: SITEURL + "/user",
                type: 'GET',
            },
            columns: [
                {data: 'avatar', name: 'avatar', orderable: false},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'roles', name: 'roles'},
                {data: 'status', name: 'status'},
                {data: 'lastLogin', name: 'lastLogin'},
                {data: 'action', name: 'action', orderable: false},
            ],
            buttons:[
                {
                    extend: 'collection',
                    text: '<i class="fa fa-download"></i> Export <i class="fa fa-caret-down"></i>',
                    className: 'btn btn-sm btn-success waves-effect waves-light',
                    buttons: [
                        {
                            extend: 'csv',
                            title: datatablename+'_'+date+'_'+time,
                            exportOptions: {
                                columns: [1, 2,3,4,5]
                            },
                            className: 'btn btn-sm btn-success waves-effect waves-light',
                        },
                        {
                            extend: 'excel',
                            title: datatablename+'_'+date+'_'+time,
                            exportOptions: {
                                columns: [1, 2,3,4,5]
                            },
                            className: 'btn btn-sm btn-success waves-effect waves-light',
                        },
                        {
                            extend: 'pdf',
                            title: datatablename+'_'+date+'_'+time,
                            exportOptions: {
                                columns: [1, 2,3,4,5]
                            },
                            className: 'btn btn-sm btn-success waves-effect waves-light',
                        },
                    ],
                    dropup: true
                },
                {
                    extend: 'print',
                    text: '<i class="bx bx-printer font-size-16"></i>',
                    exportOptions: {
                        columns: [1, 2,3,4,5]
                    },
                    className: 'btn btn-sm btn-success waves-effect waves-light',
                    customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');
                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                },
                {
                    extend: 'colvis',
                    text: '<i class="fa fa-cog"></i>  <i class="fa fa-caret-down"></i>',
                    className: 'btn btn-sm btn-success waves-effect waves-light',
                },
                {
                    text: '<i class="fa fa-sync fa-fw"></i>',
                    className: 'btn btn-sm btn-success waves-effect waves-light btnReload',
                },
            ],
            order: [[0, 'desc']]
        }).buttons().container().appendTo("#dtbuttons");

        $('.btnReload').click(function() {

            $('#user_datatable').DataTable().ajax.reload();
        });

        $('.dataTables_paginate ul').addClass('pagination-rounded float-end');

        /*  When user click add user button */
        $('#create-new-user').click(function () {
            $('#btn-save').val("create-user");
            $('#user_id').val('');
            $('#userForm').trigger("reset");
            $('#userCrudModal').html("Add New User");
            $('#ajax-user-modal').modal('show');
            $('#modal-preview').attr('src', 'https://via.placeholder.com/150');
        });
        // /* When click edit user */
        $('body').on('click', '.edit-user', function () {
            var user_id = $(this).data('id');
            $.get('user/edit/' + user_id, function (data) {
                $('#title-error').hide();
                $('#product_code-error').hide();
                $('#description-error').hide();
                $('#productCrudModal').html("Edit Product");
                $('#btn-save').val("edit-product");
                $('#ajax-product-modal').modal('show');
                $('#product_id').val(data.id);
                $('#title').val(data.title);
                $('#product_code').val(data.product_code);
                $('#description').val(data.description);
                $('#modal-preview').attr('alt', 'No image available');
                if(data.image){
                    $('#modal-preview').attr('src', SITEURL +'public/user/'+data.image);
                    $('#hidden_image').attr('src', SITEURL +'public/user/'+data.image);
                }
            })
        });
    });
    </script>
@endsection
