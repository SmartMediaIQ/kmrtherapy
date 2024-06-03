@extends('layouts.app')

@section('title', 'Clients')

@section('content')
<div class="row">
    <div class="card crd-1 p-0 mb-0">
        <div class="card-body pt-5">
            <div class="clearfix">
                <div class="float-end mb-3">
                    <div class="input-group input-group-sm">
                        <form class="app-search d-none d-lg-block p-0">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form>
                    </div>
                </div>
                <h2 class="float-start">Clients</h2>
            </div>
            <ul class="nav nav-pills bg-light rounded" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab" aria-selected="true">
                        <span class="d-sm-block">All clients</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab" aria-selected="false" tabindex="-1">
                        <span class="d-sm-block">At risk AOR</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#messages1" role="tab" aria-selected="false" tabindex="-1">
                        <span class="d-sm-block">Documents due</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#settings1" role="tab" aria-selected="false" tabindex="-1">
                        <span class="d-sm-block">EDE access revoked</span>
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content pt-3">
                <div class="tab-pane active show pt-5" id="home1" role="tabpanel">
                        <h2 class="float-start"><b>Take us </b></h2>
                        <div class="float-end"><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="bx bx-download"></i> Import</button></div>
                        <div class="clearfix p-3"></div>
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle nowrap">
                                <thead class="table-light">
                                    <tr>
                                        <th><input class="form-check-input" type="checkbox"></th>
                                        <th>Name</th>
                                        <th>Plan</th>
                                        <th>Premium</th>
                                        <th>Effective</th>
                                        <th>Created</th>
                                        <th>Documents</th>
                                        <th>Payment</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input class="form-check-input" type="checkbox"></td>
                                        <th scope="row"><a href="http://">Jane (Example client)</a></th>
                                        <td>HealthNet Silver HMO 2020</td>
                                        <td>$138</td>
                                        <td>07/01/2021</td>
                                        <td>06/29/2021</td>
                                        <td>Processing</td>
                                        <td>Action needed</td>
                                        <td><button type="button" class="btn btn-outline-primary waves-effect waves-light">View</button></td>
                                    </tr>
                                </tbody>
                                <tfoot class="table-light" style="display: none;">
                                    <tr>
                                        <th colspan="9"></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <p class="text-center">This is an example client — your clients will appear here after you've submitted or imported an application</p>
                    <div class="row pt-5">
                        <div class="col-xl-6">
                            <div class="card cardinr">
                                <div class="card-body">
                                    <button type="button" class="btn-close float-end" aria-label="Close"></button>
                                    <div class="row">
                                        <div class="col-sm-6"><h4><b class="mnclr">Test drive a demo of our application</b></h4></div>
                                        <div class="col-sm-6">
                                            <div class="card bg-primary-subtle mb-0 thmb-st">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-12 align-self-end">
                                                            <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card cardinr">
                                <div class="card-body">
                                    <button type="button" class="btn-close float-end" aria-label="Close"></button>
                                    <div class="row">
                                        <div class="col-sm-6"><h4><b class="mnclr">Watch our product overview video</b></h4></div>
                                        <div class="col-sm-6">
                                            <div class="card bg-primary-subtle mb-0 thmb-st">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-12 align-self-end">
                                                            <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div>
                        </div>
                        <div class="col-12 pt-3">
                            <div class="card cardinr">
                                <div class="card-body">
                                    <button type="button" class="btn-close float-end" aria-label="Close"></button>
                                    <div class="row">
                                        <h3 class="border-bottom pb-4 mb-4"><b>Ready to add your own clients?</b></h3>
                                        <div class="col-xl-6">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <img class="" src="assets/images/noteimg.png" alt="Generic placeholder image" width="70">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5>Find an existing application</h5>
                                                    <button type="button" class="btn btn-primary btn-md waves-effect waves-light mt-2 mb-3">Import from the Marketplace</button>
                                                    <p class="mb-0">Import apps from Healthcare.gov -- then view, edit, and service them right from HealthSherpa.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <img class="" src="assets/images/noteimg2.png" alt="Generic placeholder image" width="70">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5>Write a new application</h5>
                                                    <button type="button" class="btn btn-primary btn-md waves-effect waves-light mt-2 mb-3">Run Quote</button>
                                                    <button type="button" class="btn btn-outline-dark btn-md waves-effect waves-light mt-2 mb-3">Start application</button>
                                                    <p class="mb-0">Quote, then apply or apply, then quote -- either way works!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 pt-3">
                            <div class="card cardinr">
                                <div class="card-body">
                                    <button type="button" class="btn-close float-end" aria-label="Close"></button>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <h3 class="border-bottom pb-4 mb-4"><b>Resources</b></h3>
                                            <ul class="list-inline ftr-lnk">
                                                <li class="pb-3 mnclr"><i class="bx bxs-food-menu"></i> <a href="#" class="mnclr">Read the Getting Started Guide</a></li>
                                                <li class="pb-3 mnclr"><i class="bx bxs-home"></i> <a href="#" class="mnclr">Set up your client-facing enrollment site</a></li>
                                                <li class="pb-3 mnclr"><i class="bx bxs-inbox"></i> <a href="#" class="mnclr">Join an upcoming Webinar</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xl-6">
                                            <h3 class="border-bottom pb-4 mb-4"><b>Frequently asked questions</b></h3>
                                            <h5><b>What is your relationship to Healthcare.gov?</b></h5>
                                            <p class="pb-3">We're an official Healthcare.gov partner, with full integration. Updates made here will sync to Healthcare.gov, and updates made there will appear here.</p>
                                            <h5><b>How is this platform free?</b></h5>
                                            <p class="pb-3">We can offer our platform for free because some agents use our optional <a href="#" class="mnclr">Referrals</a> program.</p>
                                            <h5><b>If you have any other questions</b></h5>
                                            <p class="pb-3">Call us at (888) 684-1373, send us a chat, or email us at <a href="mailto:" class="mnclr">agents@healthsherpa.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane min-vh-100" id="profile1" role="tabpanel">
                    <h3 class="pt-4"><b>At risk AOR</b></h3>
                        <p class="card-title-desc">You may no longer be AOR for these clients. The list is sorted with the most recent entry first. <a href="#">Learn more.</a>
                        </p>

                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th>Clients</th>
                                <th>Federal exchange ID</th>
                                <th>Last synced at</th>
                            </tr>
                            </thead>


                            <tbody>
                            <tr>

                            </tr>
                            </tbody>
                        </table>
                </div>
                <div class="tab-pane min-vh-100" id="messages1" role="tabpanel">
                    <h3 class="pt-4"><b>Documents due</b></h3>
                        <p class="card-title-desc">These clients need to upload documents to secure their subsidy or coverage. The list is sorted with the most recent entry first. <a href="#">Learn more.</a>
                        </p>

                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th>Clients</th>
                                <th>Outstanding docs</th>
                                <th>StatUs</th>
                                <th>Earliest deadline</th>
                                <th>Last synced at</th>
                            </tr>
                            </thead>


                            <tbody>
                            <tr>

                            </tr>
                            </tbody>
                        </table>
                </div>
                <div class="tab-pane min-vh-100" id="settings1" role="tabpanel">
                    <h3 class="pt-4"><b>EDE access revoked</b></h3>
                    <p class="card-title-desc">These are clients that have had EDE access revoked. The list is sorted with the most recent entry first. <a href="#">Learn more.</a>
                    </p>
                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                        <tr>
                            <th>Clients</th>
                            <th>EDE Access Revoked</th>
                            <th>Last synced at</th>
                        </tr>
                        </thead>


                        <tbody>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
