@extends('layouts.app-dashboard')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <h1 class="mt-3 mb-5 mnclr text-center hs-heading">Welcome to Smart Insurance, <span>Brendon!</span></h1>
    <h4 class="mb-5 mnclr">Your notifications</h4>
    <h3 class="mb-3 mnclr"><b>Resources</b></h3>
    <div class="mdl-content row clearfix justify-content-center">
        <h2 class="mt-4 mb-4 text-center"><b class="mnclr">Ready to add your own clients?</b></h2>
        <div class="card col-lg-4 col-md-12 col-sm-12 feature-block m-3 rounded-5 text-center p-5">
            <div class="card-body text-center">
                <div class="mt-4 mt-md-0 text-center">
                    <img class="avatar-xl" alt="200x200" src="assets/images/extapp.png" data-holder-rendered="true">
                </div>
                <hr>
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <h5>Find an existing application</h5>
                        <button type="button" class="btn btn-primary btn-md btn-rounded waves-effect waves-light mt-2 mb-3 hs-btn">Import from Marketplace</button>
                        <p class="mb-0">Import apps from Healthcare.gov -- then view, edit, and service them right from Smart Insurance.</p>
                    </div>
                </div>
            </div><!-- end card-body -->
        </div>

        <div class="card col-lg-4 col-md-12 col-sm-12 feature-block m-3 rounded-5 text-center p-5">
            <div class="card-body text-center">

                <div class="mt-4 mt-md-0 text-center">
                    <img class="avatar-xl" alt="200x200" src="assets/images/icnCrt.png" data-holder-rendered="true">
                </div>
                <hr>
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <h5>Write a new a application</h5>
                        <button type="button" class="btn btn-primary btn-md btn-rounded waves-effect waves-light mt-2 mb-3 hs-btn">Run Quote</button>
                        <button type="button" class="btn btn-outline-dark btn-md btn-rounded waves-effect waves-light mt-2 mb-3">Start application</button>
                        <p class="mb-0">Quote, then apply or apply, then quote -- either way works!</p>
                    </div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
        <div class="col-lg-8 col-md-12 col-sm-12 feature-block m-3 rounded-4 mt-5 mt-5">
                <div class="row">
                    <div class="col-sm-12 p-0 text-center"><h2 class="mb-4"><b class="mnclr">Test drive a demo of our application</b></h2></div>
                    <div class="col-sm-8 offset-2 p-0">
                        <div class="card bg-primary-subtle mb-0 thmb-st h-100 rounded-5">
                            <div>
                                <div class="row">
                                    <div class="col-10 offset-1">
                                        <img src="{{asset('assets/images/5-Best-App-Demo-Videos-Done-Right-Examples-Tips.png')}}" alt="" class="img-fluid" style="mix-blend-mode: darken;margin-top: 20px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div><!-- end card -->
        <div class="col-lg-8 col-md-12 col-sm-12 feature-block m-3 rounded-4 mt-5 mt-5">
                <div class="row">
                    <div class="col-sm-12 p-0 text-center"><h2 class="mb-4"><b class="mnclr">Watch our product overview video</b></h2></div>
                    <div class="col-sm-8 offset-2 p-0">
                        <div class="card mb-0 thmb-st bg-secondary-subtle bg-secondary h-100 rounded-5">
                            <div>
                                <div class="row">
                                    <div class="col-10 offset-1">
                                        <img src="{{asset('assets/images/5f40b876cd7d0925fc8f8209_VF-Blog-Cover-Product-demo-video-guide.jpg')}}" alt="" class="img-fluid" style="mix-blend-mode:color-burn;margin-top:30px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div><!-- end card -->
        <div class="col-lg-8 col-md-12 col-sm-12 feature-block m-3 rounded-4 mt-5 hs-clr">
                <div class="row">
                    <h2 class="pb-3 mnclr"><b>Additional Resources</b></h2>
                    <ul class="list-inline ftr-lnk">
                        <li class="pb-3 mnclr"><i class="bx bxs-food-menu"></i> <a href="#" class="mnclr">Read the Getting Started Guide</a></li>
                        <li class="pb-3 mnclr"><i class="bx bxs-home"></i> <a href="#" class="mnclr">Set up your client-facing enrollment site</a></li>
                        <li class="pb-3 mnclr"><i class="bx bxs-inbox"></i> <a href="#" class="mnclr">Join an upcoming Webinar</a></li>
                    </ul>
                    <h2 class="pb-3 mnclr"><b>Frequently Asked Questions</b></h2>
                    <h4><b>What is your relationship to Healthcare.gov?</b></h4>
                    <p class="pb-3">We're an official Healthcare.gov partner, with full integration. Updates made here will sync to Healthcare.gov, and updates made there will appear here.</p>
                    <h4><b>How is this platform free?</b></h4>
                    <p class="pb-3">We can offer our platform for free because some agents use our optional <a href="#" class="mnclr">Referrals</a> program.</p>
                    <h4><b>If you have any other questions</b></h4>
                    <p class="pb-3">Call us at (888) 684-1373, send us a chat, or email us at <a href="mailto:" class="mnclr">agents@Smart Insurance.com</a></p>
                </div>
        </div>
    </div>
</div>
@endsection


@section('page-specific-style')
<style>

</style>
@endsection
