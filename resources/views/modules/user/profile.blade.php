@extends('layouts.app-dashboard')

@section('page-specific-style')
<link href="{{ asset('assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card mx-n4 mt-n4 bg-info bg-soft">
            <div class="card-body">
                <div class="text-center mb-4">
                    @if(Auth::user()->image)
                    <img src="{{ url('storage/photos').'/'.$user->image }}" class="rounded-circle avatar-lg" alt="profile-image">

                    @else
                    <div class="avatar-xs d-inline-flex">
                        <span class="avatar-title rounded-circle">{{ Auth::user()->getInitials() }} </span>
                    </div>
                    @endif
                    <h5 class="mt-3 mb-1">{{ Auth::user()->name}}</h5>
                    <p class="text-muted mb-3">{{ Auth::user()->roles[0]->name}}</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Personal Information</h4>
                <div class="table-responsive">
                    <table class="table table-nowrap mb-0">
                        <tbody>
                            <tr>
                                <th scope="row">Full Name :</th>
                                <td>{{ Auth::user()->name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Mobile :</th>
                                <td>{{ Auth::user()->contact_number ?? ''}}</td>
                            </tr>
                            <tr>
                                <th scope="row">E-mail :</th>
                                <td>{{ Auth::user()->email}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--end col-->
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Update Information</h4>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#profile1" role="tab" aria-selected="false" tabindex="-1">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#changepassword1" role="tab" aria-selected="false" tabindex="-1">
                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                            <span class="d-none d-sm-block">Change Password</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active show" id="profile1" role="tabpanel">
                        <form method="post" action="{{ route('profile.update', Auth::user()->id) }}" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <input type="hidden" name="id" value={{ $user->id}} />
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="name">Name</label>
                                        <input id="name" name="name" type="text" value="{{ $user->name }}" class="form-control" placeholder="Name">
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone">Contact No.</label>
                                        <input id="phone" name="phone" type="text" value="{{ $user->contact_number ?? '' }}" class="form-control" placeholder="Contact No.">
                                    </div>

                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="email">Email</label>
                                        <input id="email" name="email" type="text" value="{{ $user->email }}" class="form-control" placeholder="Email" disabled>
                                    </div>
                                    <div class="col-sm-6 imgUp">
                                        <div class="imagePreview" @if ($user->image) != null) style="background-image: url({{ url('storage/photos').'/'.$user->image }});background-size: contain; background-position: center; height: 150px;" @endif>
                                        </div>
                                        <label class="btn btn-primary btn-sm bg-dark float-start" for="image" style="width: 100%;">
                                            Upload Profile Pic.
                                            <input type="file" id="image" class="uploadFile img" name="image" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                        </label>
                                    </div>

                                </div>
                            </div>

                            <div class="d-flex flex-wrap gap-2 float-right" style="justify-content: end;">
                                <button type="submit" class="btn btn-primary bg-dark float-start">Save Changes</button>

                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="changepassword1" role="tabpanel">
                        <form method="post" action="{{ route('profile.changepassword', Auth::user()->id) }}" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <input type="hidden" name="id" value={{ $user->id}} />
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="password">New Password</label>
                                        <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="confirm-password">Confirm Password</label>
                                        <input id="confirm-password" name="confirm-password" type="password" class="form-control" placeholder="Confirm Password">
                                    </div>

                                </div>
                            </div>

                            <div class="d-flex flex-wrap gap-2 float-right" style="justify-content: end;">
                                <button type="submit" class="btn btn-primary bg-dark float-start">Save Changes</button>

                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>

    </div><!--end col-->
</div><!--end row-->

@endsection


@push('page-specific-script')
<script src="{{ asset('assets/libs/select2/js/select2.min.js') }}"></script>

<script src="{{ asset('assets/js/pages/file-manager.init.js') }}"></script>

<!-- init js -->
<script src="{{ asset('assets/js/pages/ecommerce-select2.init.js') }}"></script>
<script>
    $(".imgAdd").click(function() {
        $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-2 imgUp"><div class="imagePreview"></div><label class="btn btn-primary">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>');
    });

    $(document).on("click", "i.del", function() {
        $(this).parent().remove();
    });

    $(function() {
        $(document).on("change", ".uploadFile", function() {
            var uploadFile = $(this);
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

            if (/^image/.test(files[0].type)) { // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function() { // set image data as background of div
                    //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                    uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url(" + this.result + ")");
                    uploadFile.closest(".imgUp").find('.imagePreview').css("background-color", "#0000001c");

                }
            }
        });
    });
</script>
@endpush
