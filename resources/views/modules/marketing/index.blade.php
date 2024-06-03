@extends('layouts.app')

@section('title', 'Marketing')

@section('content')
<div class="row">
    <div class="card crd-1 p-0 mb-0">
        <div class="card-body pt-5">
            <div class="clearfix">
                <h2 class="float-start pb-3">Marketing</h2>
            </div>
            <ul class="nav nav-pills bg-light rounded" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab" aria-selected="true">
                        <span class="d-sm-block">Analytics tools</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab" aria-selected="false" tabindex="-1">
                        <span class="d-sm-block">Branding</span>
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content hs-bonuses-tabs">
                <div class="tab-pane active show pt-4" id="home1" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-11">
                            <div class="card hs-bg2" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="card-header">
                                    <h4 class="float-start p-1 mb-0"><b>Your free, custom ACA Marketing site</b></h4>
                                    <button type="button" class="btn-close float-end" data-bs-dismiss="hs-bg2" aria-label="Close"></button>
                                </div>
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-md-4">
                                            <img class="card-img img-fluid" src="assets/images/small/img-6.jpg" alt="Card image">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Let clients self-enroll</h5>
                                                <p class="card-text">Clients can shop and enroll on their own. Scale your business online by sharing your link via email, social media, or ads.</p>
                                                <h5 class="card-title">UTM tag generator</h5>
                                                <p class="card-text">You can easily add UTM parameters to your direct link and use them to track your traffic.</p>
                                                <h5 class="card-title">Track their progress</h5>
                                                <p class="card-text">Your Leads list tracks shoppers on your site. Any shoppers who enroll appear on your Clients list.</p>
                                                <h5 class="card-title">Custom to you</h5>
                                                <p class="card-text">All enrollments use your NPN, so you get commission.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="pt-4">UTM tag generator</h3>
                            <p>You can define UTM parameters to customize your direct link and use them to track your traffic. Learn more.</p>
                            <div class="card hs-bg2 col-md-9">
                                <div class="card-body">
                                    <h4 class="pb-3"><b>Add UTM parameters</b></h4>
                                    <div class="mb-3">
                                      <label for="" class="form-label">Base URL</label>
                                      <input class="form-control" type="url" value="https://www.healthsherpa.com/?_agent_id=smartinsuranceiq" placeholder="Enter URL" id="example-url-input">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Source</label>
                                        <input class="form-control" type="text" value="" id="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Medium</label>
                                        <input class="form-control" type="text" value="" id="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Campaign Name</label>
                                        <input class="form-control" type="text" value="" id="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label d-block">Language</label>
                                        <div class="btn-group" role="group" aria-label="radio toggle button group">
                                            <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off" checked="">
                                            <label class="btn btn-outline-primary" for="vbtn-radio1">On</label>
                                            <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off">
                                            <label class="btn btn-outline-primary" for="vbtn-radio2">Off</label>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body row">
                                            <div class="col-md-7">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Campaign Name</label>
                                                    <input class="form-control" type="text" value="" id="">
                                                    <a href="javascript: void(0);" class="btn btn-primary hs-btn mt-3">Generate</a>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="mb-3 text-center">
                                                    <img src="assets/images/qrImg.png" alt="" srcset="" class="w-50">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pt-5 pb-5 mt-3 border-top border-bottom">
                                    <h3>Your direct link</h3>
                                    <p>You can edit the link to your landing page using letters, numbers, dashes, and underscores to customize.</p>
                                    <p><b>WARNING:</b> Your previous link will no longer work once you take this action. You might also notice that navigating backwards in your current browser window will throw an error. We highly recommend opening a new tab or window after updating your link.</p>
                                    <div class="card hs-bg2 col-md-12 col-lg-6 col-xl-6">
                                        <div class="card-body">
                                            <a href="#" class="text-decoration-underline">https://www.healthsherpa.com/?agentid=smartinsuranceiq</a>
                                            <div class="col-12">
                                                <a href="javascript: void(0);" class="btn btn-primary hs-btn mt-1">Copy</a>
                                            <a href="javascript: void(0);" class="btn btn-outline-secondary waves-effect mt-1">Edit</a>
                                            <a href="javascript: void(0);" class="btn btn-outline-secondary waves-effect mt-1">Convert to Spanish</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="pt-4">Your direct link</h3>
                                    <div class="mb-3">
                                      <label for="" class="form-label"><b>Enter just the code, ex: IJA-123456-1 , and not the entire script.</b></label>
                                      <input type="text"
                                        class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                      <small id="helpId" class="form-text text-muted"></small>
                                      <button type="button" class="btn btn-primary hs-btn mt-3" disabled>Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane p-4" id="profile1" role="tab">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat nihil ipsam, vel aut inventore fugiat cum laborum fuga nemo exercitationem aliquam temporibus, id amet ex vitae iste accusantium eaque excepturi.
                    Illum eos tempora optio dolorem eaque iste, necessitatibus quia, minus tempore quo ratione quas ut rerum enim, voluptatum odit voluptatibus minima harum rem. Quo suscipit nostrum tenetur odio quos nesciunt!
                    Laborum laudantium aliquid maiores voluptate at magnam dolor minima laboriosam eaque ipsam earum quia necessitatibus, voluptatum numquam fuga sunt neque tenetur ad voluptatibus officiis? Ipsum nam similique doloribus voluptatum soluta.
                    Aliquid, ullam cum ipsa, quam explicabo autem necessitatibus omnis ut facilis mollitia consequatur esse similique laborum odio magni? At sapiente distinctio quae doloribus velit, voluptate ea incidunt asperiores magni suscipit.
                    Vitae ad harum corporis a voluptate omnis amet nulla dolore tempora! Veniam, a. At sapiente unde suscipit modi voluptate dignissimos voluptates quasi eveniet dolores. Delectus repudiandae eius officiis ab! Suscipit.
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
