@extends('layouts.app')

@section('title', 'Agencies')

@section('content')
<div class="row">
    <div class="card crd-1 p-0">
        <div class="card-body pt-5 pb-3">
            <div class="clearfix">
                <div class="float-end">
                    <button type="button" class="btn btn-outline-primary waves-effect waves-light m-1" data-bs-toggle="modal" data-bs-target="#myModal">Export</button>
                    <button type="button" class="btn btn-outline-primary waves-effect waves-light m-1" data-bs-toggle="modal" data-bs-target="#hs-modal2">Export Off-Ex</button>
                    <button type="button" class="btn btn-outline-primary waves-effect waves-light m-1" data-bs-toggle="modal" data-bs-target="#hs-modal3">Invite agents</button>
                </div>
                <h2 class="float-start">Agency</h2>

                <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel"><b class="title">Agency Exports</b></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Export a .csv file with many additional data points. | <a href="#">Exports FAQ</a></p>
                                <h5 class="title"><b>Clients export</b></h5>
                                <p>First, specify a submission date range for your Clients Export</p>
                                <h5 class="title"><b>Exports Range *</b></h5>
                                <div class="input-group input-group-sm mt-2 mb-2">
                                    <div class="rounded-2 p-2 pt-1 pb-1" id="reportrange" style="background: #fff; cursor: pointer;border: 1px solid #ccc; width:220px;">
                                        <span></span><i class="bx bx-calendar-event float-end m-1"></i>
                                    </div>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="">
                                  <label class="form-check-label" for="">
                                    Include archived clients
                                  </label>
                                </div>
                                <div class="form-check mt-2">
                                  <input class="form-check-input" type="checkbox" value="" id="">
                                  <label class="form-check-label" for="">
                                    Include unsubmitted search & claimed applications
                                  </label>
                                </div>
                                <button class="btn btn-primary mt-4 mb-4" disabled="disabled">Export clients</button>
                                <div class="border-bottom border-top pt-4 pb-4">
                                    <h5 class="title"><b>Downline agent export</b></h5>
                                    <button class="btn btn-primary">Export agents</button>
                                </div>
                                <div class="pt-4 pb-2">
                                    <h5 class="title"><b>DMI follow-ups export</b></h5>
                                    <button class="btn btn-primary">Export DMIs</button>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary waves-effect waves-light">Done</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
                <div id="hs-modal2" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel"><b class="title">Agency Exports</b></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Export a .csv file with many additional data points. | <a href="#">Exports FAQ</a></p>
                                <h4 class="title">Clients export</h4>
                                <h5 class="title mt-2"><b>Exports Range *</b></h5>
                                <div class="input-group input-group-sm mt-2 mb-2">
                                    <div class="rounded-2 p-2 pt-1 pb-1" id="reportrange2" style="background: #fff; cursor: pointer;border: 1px solid #ccc; width:220px;">
                                        <span></span><i class="bx bx-calendar-event float-end m-1"></i>
                                    </div>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="">
                                  <label class="form-check-label" for="">
                                    Include archived clients
                                  </label>
                                </div>
                                <button class="btn btn-primary mt-2 mb-2" disabled="disabled">Export clients</button>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary waves-effect waves-light">Done</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
                <div id="hs-modal3" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel"><b class="title">Invite agents or agencies</b></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>This will email your agents a link to join the Smart Insurance IQ agency using your join code 6AFO. Once they sign up, you'll be able to view their accounts from the agency page.</p>
                                <div class="mb-3">
                                  <label for="" class="form-label"><b>Enter agent email addresses:</b> (Separate with commas or new lines)</label>
                                  <textarea class="form-control" name="" id="" rows="3"></textarea>
                                </div>
                                <h4 class="title"><b>Email preview</b></h4>
                                <div class="card text-start">
                                  <div class="border-bottom p-2">
                                    <div class="float-end"><i class="mdi mdi-email"></i></div>
                                  </div>
                                  <div class="card-body">
                                    <div class="mb-3">
                                      <label for="" class="form-label">Subject line:</label>
                                      <input type="text"
                                        class="form-control" value="Join the Smart Insurance IQ agency on HealthSherpa" name="" id="" aria-describedby="helpId" placeholder="">
                                    </div>
                                  </div>
                                  <div class="card-body border-top">
                                    <div class="mb-3">
                                      <div class="mb-3">
                                        <textarea class="form-control" name="" id="" rows="6">Greetings,
You're invited to join our Smart Insurance IQ agency account on HealthSherpa.
HealthSherpa is the fastest way for agents to quote, enroll, and track their ACA book.
Use the button below to sign up for an account with our agency's join code: 6AF0.
                                        </textarea>
                                        <a name="" id="" class="btn btn-primary mt-3 mb-2" href="#" role="button">Get your accou
                                            nt now</a>
                                            <p><b>Already have a HealthSherpa account? To join our agency,</b> just log in, go to your Settings page, and enter 6AF0 in the</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary waves-effect waves-light">Send email</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
            </div>

        </div>
        <div class="card-body pt-5 border-bottom">
            <div class="float-end p-5 pt-0 pb-0">
                <div class="p-4 pb-1 pt-0 text-center d-inline-block"><h1 class="display-1">1</h1><p>Agent</p></div>
                <div class="p-4 pb-1 pt-0 text-center d-inline-block"><h1 class="display-1">0</h1><p>Clients</p></div>
            </div>
        </div>
    <div class="card-body pt-5 pb-3" style="min-height:600px;">
        <div class="row">
                        <div class="col-12">
                            <h4 class="float-start">YOUR AGENTS</h4>
                            <div class="float-end pb-1">
                                <div class="hstack gap-2 mb-4">
                                    <input class="form-control me-auto" type="text" placeholder="Name or NPN" aria-label="Name or NPN">
                                    <button type="button" class="btn btn-secondary">Search</button>
                                </div>

                                <!-- Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->


                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-responsive align-middle nowrap">
                                <thead class="table-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Clients (All)</th>
                                        <th>Npn</th>
                                        <th>Override NPN</th>
                                        <th>Shared Book</th>
                                        <th>Full Book</th>
                                        <th>Admin</th>
                                        <th>Account</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">Brendon Thomas</a></td>
                                        <th>0</th>
                                        <td>17645651</td>
                                        <td><input class="form-check-input" type="checkbox"></td>
                                        <td><input class="form-check-input" type="checkbox"></td>
                                        <td><input class="form-check-input" type="checkbox"></td>
                                        <td>Primary Admin</td>
                                        <td><button type="button" class="btn btn-outline-secondary">View</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
        </div>

    </div>
</div>

</div>
@endsection
