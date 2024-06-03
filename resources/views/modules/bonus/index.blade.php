@extends('layouts.app')

@section('title', 'Bonuses')

@section('content')
<div class="row">
    <div class="card crd-1 p-0 mb-0">
        <div class="card-body pt-5">
            <div class="clearfix">
                <h2 class="float-start pb-3">Bonuses</h2>
            </div>
            <ul class="nav nav-pills bg-light rounded" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab" aria-selected="true">
                        <span class="d-sm-block">Bonuses</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab" aria-selected="false" tabindex="-1">
                        <span class="d-sm-block">Medicare Referrals</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#messages1" role="tab" aria-selected="false" tabindex="-1">
                        <span class="d-sm-block">Broker Bonuses</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#settings1" role="tab" aria-selected="false" tabindex="-1">
                        <span class="d-sm-block">Associates</span>
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content hs-bonuses-tabs">
                <div class="tab-pane active show p-4" id="home1" role="tabpanel">
                    <h2 class="mt-4"><b>Referrals</b></h2>
                    <p class="clearfix">During SEP, we pay a S50 referral bonus. We pay up to $200 during OER</p>
                    <ul class="clearfix">
                        <li>Payment is issued after 60 days.</li>
                        <li>View or edit your referred carriers list on your <a href="#" class="text-decoration-underline">Carrier Settings</a></li>
                        <li>View terms and conditions for payment in your <a href="#" class="text-decoration-underline">JMA</a>.</li>
                    </ul>
                    <div class="pt-3 pb-2">
                        <a href="#" class="btn btn-outline-primary waves-effect waves-light">View disabled carriers</a>
                        <a href="#" class="btn btn-outline-primary waves-effect waves-light">View $25 payout carriers</a>
                    </div>
                    <a href="#" class="text-decoration-underline">View full program details</a>

                    <div class="row pt-5">
                        <div class="col-lg-6">
                            <div class="card hs-bg2">
                                <div class="card-body">
                                    <h4 class="card-title pb-2">Referrals setting</h4>
                                    <div class="btn-group" role="group" aria-label="radio toggle button group">
                                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off" checked="">
                                        <label class="btn btn-outline-primary" for="vbtn-radio1">On</label>
                                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off">
                                        <label class="btn btn-outline-primary" for="vbtn-radio2">Off</label>
                                    </div>
                                    <div class="card mt-3 mb-0">
                                        <div class="card-body">
                                            <p>You have 9 carriers set to refer:</p>
                                            <ul>
                                                <li>Aetna CVS Health (FL)</li>
                                                <li>Ambetter from Sunshine Health (FL)|</li>
                                                <li>AvMed (FL)</li>
                                                <li>Florida Blue (BlueCross BlueShield FL) (FL)</li>
                                                <li>Health First (L)|</li>
                                                <li>Humana (FL)|</li>
                                                <li><b>And 3 more</b></li>
                                            </ul>
                                            <a href="#" class="text-decoration-underline">Edit your list of referred carriers</a>
                                        </div>
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
                <div class="tab-pane p-4" id="messages1" role="tab">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic consectetur dolores quasi, numquam ut, maiores impedit vel atque fugit vitae recusandae nihil unde, at asperiores? Quibusdam id reprehenderit pariatur sit?
                    Iusto dolorum accusamus itaque corporis mollitia laboriosam reiciendis maiores tempore voluptate officia enim esse a voluptas quis, animi vero sit cumque earum maxime deserunt alias. Labore a distinctio quia quidem?
                    Commodi officiis laudantium blanditiis nisi esse! Eos dolor voluptatum magni asperiores! Tempore vero neque vel dolorem. Sed minus, excepturi est commodi exercitationem consequuntur! Odio itaque eaque quis facilis molestias possimus!
                    Similique veritatis culpa veniam qui iure ad, nostrum provident eos voluptatibus, earum unde, et facilis laborum quibusdam. Est consectetur deleniti nobis nemo, error veniam itaque, cumque optio consequatur sequi temporibus.
                    Voluptatibus, ab distinctio. Fugit reiciendis inventore nobis incidunt! Ipsa explicabo enim porro provident? Dolor culpa commodi, nihil quibusdam tempora blanditiis molestias vel impedit deleniti, sit debitis eos, vitae fuga. Sapiente?
                </div>
                <div class="tab-pane p-4" id="settings1" role="tab">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid ratione ipsum voluptates adipisci fugit reiciendis vero dolore quo incidunt. Sint illum quos cumque voluptates. Optio cum inventore repudiandae cumque ea!
                    Dicta vero officiis error nesciunt earum, animi id officia! Eveniet consequuntur quam minus odio adipisci corrupti accusantium? Dolorem voluptatibus voluptas nesciunt, eaque ut quaerat eos, amet quisquam pariatur beatae earum?
                    Vero earum suscipit laboriosam tempora? Illo aperiam sunt impedit modi eum est quos totam molestias commodi magnam, veritatis saepe, optio ipsa nostrum cum, maiores eveniet inventore deserunt at unde doloribus.
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
