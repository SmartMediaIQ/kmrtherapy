@extends('layouts.app')

@section('title', 'Leads')

@section('page-specific-style')
    <link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="row">
    <div class="card crd-1 p-0">
        <div class="card-body pt-5 border-bottom">
            <div class="clearfix">
                <div class="float-end">
                    <div class="input-group input-group-sm">
                        <form class="app-search d-none d-lg-block p-0">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form>
                    </div>
                </div>
                <h2 class="float-start">Leads</h2>
            </div>

        </div>
        <div class="card-body pt-5 border-bottom">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3">
                    <div class="mb-3">
                        <label class="form-label"><b>Carrier</b></label><br>
                        <select class="select2 form-control select2-multiple hs-select"
                            multiple="multiple" data-placeholder="Select">
                                <option>Option 1</option>
                                <option>Option 2</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3">
                    <div class="mb-3">
                        <label class="form-label"><b>State</b></label><br>
                        <select class="select2 form-control select2-multiple hs-select"
                            multiple="multiple" data-placeholder="Select">
                                <option>Option 1</option>
                                <option>Option 2</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3">
                    <div class="mb-3">
                        <label class="form-label"><b>Status</b></label><br>
                        <select class="select2 form-control select2-multiple hs-select"
                            multiple="multiple" data-placeholder="Select">
                                <option>Option 1</option>
                                <option>Option 2</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3">
                    <div class="mb-3">
                        <label class="form-label"><b>Exchange</b></label><br>
                        <select class="select2 form-control select2-multiple hs-select"
                            data-placeholder="Select">
                                <option>Option 1</option>
                                <option>Option 2</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 col-xxl-3">
                    <div class="mb-3">
                        <label class="form-label"><b>Archived status</b></label><br>
                        <select class="select2 form-control hs-select" data-placeholder="Select">
                                <option>Option 1</option>
                                <option>Option 2</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    <div class="card-body pt-5 pb-3">
        <div class="row">
                        <div class="col-12">
                            <p class="float-start"><b>1-3</b> of 3</p>

                            <div class="float-end pb-3">
                                <button type="button" class="btn btn-outline-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modalId2">
                                    <i class="bx bx-import"></i> Import
                                </button>
                                <button type="button" class="btn btn-outline-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modalId">
                                    <i class="bx bx-export"></i> Export
                                </button>

                                <!-- Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitleId">Exports</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                               <a href="#"><h5 class="pb-3">Exports FAQ</h5></a>
                                               <h5 class="pb-3">We'll email you a link to download this export soon.</h5>
                                               <h5 class="pb-3">The export will contain <b>Personal Identifiable Information (PII)</b>, which may be protected under federal and/or state law. It's your responsibility to protect this PII — only share it with authorized persons.</h5>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Done</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="modalId2" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitleId">Import your leads to HealthSherpa</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                               <p class="border-bottom">Here is where you can import your leads to HealthSherpa. We'll save these to your
                                                leads' list in your dashboard. You'll then be able to track and process these leads onHealthSherpa.</p>
                                                <p><b>Step 1:</b> Download the HealthSherpa leads import template</p>
                                                <button type="button" class="btn btn-outline-dark">Download CSV template</button>
                                                <p class="pt-3 pb-3"><b>Step 2:</b> Fill in all the required information per lead. If you do not fill in all of the information, the lead can not be imported.</p>
                                                <p><b>Tips:</b></p>
                                                <ul class="">
                                                    <li>1. Remove the sample lead from the sheet before uploading.</li>
                                                    <li>2. After completing the template, do not send the completed file using insecure methods (e.g. email).</li>
                                                    <li>3. Required fields are first name, last name, and either phone number OR email.</li>
                                                </ul>
                                                <h5><b>Step 3:</b> Import the completed CSV file.</h5>
                                                <div class="mb-3 col-4">
                                                  <label for="" class="form-label">Choose file</label>
                                                  <input type="file" class="form-control" name="" id="" placeholder="" aria-describedby="fileHelpId">
                                                  <div id="fileHelpId" class="form-text">Help text</div>
                                                </div>
                                                <p class="border-bottom"></p>
                                                <p class="border-bottom">Here is where you can import your leads to HealthSherpa. We'll save these to your
                                                    leads' list in your dashboard. You'll then be able to track and process these leads onHealthSherpa.</p>
                                                    <p><b>Step 1:</b> Download the HealthSherpa leads import template</p>
                                                    <button type="button" class="btn btn-outline-dark">Download CSV template</button>
                                                    <p class="pt-3 pb-3"><b>Step 2:</b> Fill in all the required information per lead. If you do not fill in all of the information, the lead can not be imported.</p>
                                                    <p><b>Tips:</b></p>
                                                    <ul class="">
                                                        <li>1. Remove the sample lead from the sheet before uploading.</li>
                                                        <li>2. After completing the template, do not send the completed file using insecure methods (e.g. email).</li>
                                                        <li>3. Required fields are first name, last name, and either phone number OR email.</li>
                                                    </ul>
                                                    <h5><b>Step 3:</b> Import the completed CSV file.</h5>
                                                    <div class="mb-3 col-4">
                                                      <label for="" class="form-label">Choose file</label>
                                                      <input type="file" class="form-control" name="" id="" placeholder="" aria-describedby="fileHelpId">
                                                      <div id="fileHelpId" class="form-text">Help text</div>
                                                    </div>
                                                    <p class="border-bottom"></p>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Done</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Optional: Place to the bottom of scripts -->
                                <script>
                                    // const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)

                                </script>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-responsive align-middle nowrap">
                                <thead class="table-light">
                                    <tr>
                                        <th><input class="form-check-input" type="checkbox"></th>
                                        <th>Lead</th>
                                        <th>Plan</th>
                                        <th>Gross</th>
                                        <th>Net</th>
                                        <th>Last active</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input class="form-check-input" type="checkbox"></td>
                                        <th scope="row"><a href="#">Brendon Thomas <br> (561) 713-5600</a></th>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>4/18/2024</td>
                                        <td>Shopping</td>
                                        <td width="200">
                                            <div class="dropdown float-end">
                                            <button class="btn border-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                Resume <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                            </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input class="form-check-input" type="checkbox"></td>
                                        <th scope="row"><a href="#">Sheana Garbutt <br>(954) 873-1634</a></th>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>8/27/2022</td>
                                        <td>Confirming</td>
                                        <td width="200">
                                            <div class="dropdown float-end">
                                            <button class="btn border-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                Resume <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                            </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input class="form-check-input" type="checkbox"></td>
                                        <th scope="row"><a href="#">Margaret <br> (973) 2194975</a></th>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>4/9/2021</td>
                                        <td>Shopping</td>
                                        <td width="200">
                                            <div class="dropdown float-end">
                                            <button class="btn border-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                Resume <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                            </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot class="table-light">
                                    <tr>
                                        <th colspan="8">
                                            <div class="float-start">
                                                <select class="form-select form-select-sm float-start" style="width:60px;">
                                                    <option selected>10</option>
                                                    <option value="">20</option>
                                                    <option value="">30</option>
                                                    <option value="">100</option>
                                                </select>
                                                <span class="p-lg-2 hs-unbld"> per page</span>
                                            </div>
                                            <div class="float-end">
                                                <i class="bx bx-arrow-back p-lg-2"></i>
                                                <button type="button" class="btn btn-primary waves-effect waves-light">1</button>
                                                <i class="bx bx-right-arrow-alt p-lg-2"></i>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
        </div>

    </div>
    <div class="card-body pt-5 pb-5">
        <div class="col-xl-12">
            <div class="card cardinr">
                <div class="card-body">
                    <button type="button" class="btn-close float-end" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-sm-12">
                            <h4><b>Track and resume our Leads</b></h4>
                            <p>Tracks a leads progress, and pick up where you left off later. After submission. the Lead becomes a Client.</p>
                        </div>
                        <div class="row pt-3">
                            <div class="col-md-4">
                                <h6><b>Save a quote as a Lead</b></h6>
                                <p>When you're <a href="#">quoting</a>, press the "Save Lead" button at any time.</p>
                            </div>
                            <div class="col-md-4">
                                <h6><b>Applications auto-save as Leads</b></h6>
                                <p>When you're writing an application, a Lead is automatically created.</p>
                            </div>
                            <div class="col-md-4">
                                <h6><b>Your custom link creates Leads</b></h6>
                                <p>If clients use your <a href="#">custom Marketing link</a> to shop, they'll become a Lead too.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- end card-body -->
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-specific-script')
    {{-- <script src="{{asset('assets/libs/select2/js/select2.min.js')}}"></script> --}}
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });

        const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
    </script>
@endsection
