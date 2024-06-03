@extends('layouts.app')

@section('title', 'Exports')

@section('content')
<div class="row">
    <div class="card crd-1 p-0 mb-0 hs-hgt">
        <div class="card-body pt-5">
            <div class="clearfix">
                <h2 class="float-start mb-4">Exports</h2>
            </div>
            <ul class="nav nav-pills bg-light rounded" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab" aria-selected="true">
                        <span class="d-sm-block">Quick Exports</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab" aria-selected="false" tabindex="-1">
                        <span class="d-sm-block">Exports History</span>
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content pt-3">
                <div class="tab-pane active show pt-5" id="home1" role="tabpanel">
                    <div class="row">
                        <p>These are short, targeted exports with pre-set information for the <b>current plan year.</b></p>
                        <div class="col-lg-6">
                            <div class="card hs-bg2">
                                <div class="card-body">
                                    <h4 class="card-title">AOR at-risk Clients</h4>
                                    <p class="card-text">Download a list of clients whom your AOR may be at risk. <a href="#" class="text-decoration-underline">Learn more.</a></p>
                                    <a href="javascript: void(0);" class="btn btn-primary hs-btn">Generate</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card hs-bg2">
                                <div class="card-body">
                                    <h4 class="card-title">EDE Permission Revoked Clients</h4>
                                    <p class="card-text">Download a list of applications with revoked EDE permission. <a href="#" class="text-decoration-underline">Learn more.</a></p>
                                    <a href="javascript: void(0);" class="btn btn-primary hs-btn">Generate</a>
                                </div>
                            </div>
                        </div>
                        <h3>Agency Administrator Exports</h3>
                        <div class="col-lg-6">
                            <div class="card hs-bg2">
                                <div class="card-body">
                                    <h4 class="card-title">Payouts awaiting consent upload</h4>
                                    <p class="card-text">Download a list of applications that require consent upload before referral payout.</p>
                                    <a href="javascript: void(0);" class="btn btn-primary hs-btn">Generate</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card hs-bg2">
                                <div class="card-body">
                                    <h4 class="card-title">All AOR at-risk Clients in your agency</h4>
                                    <p class="card-text">Download a list of clients whom your AOR may be at risk for all agents in your agency. <a href="#" class="text-decoration-underline">Learn more.</a></p>
                                    <a href="javascript: void(0);" class="btn btn-primary hs-btn">Generate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane pt-2" id="profile1" role="tabpanel">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic sit quisquam commodi quae earum quibusdam labore. Consectetur sed tempore explicabo iste magnam aut possimus facere nulla! Earum tenetur sint velit.
                    Accusamus quos dolore voluptatem, quisquam amet, beatae perspiciatis tempora officia sequi tenetur culpa vitae? Eveniet tenetur commodi consequuntur, esse perferendis iste, labore rem sunt molestias dolor perspiciatis et sapiente sit?
                    Omnis assumenda aspernatur atque at sunt in nam nemo? Neque quaerat sed quia recusandae ex voluptatem aspernatur mollitia accusamus aliquam, facere quae ullam itaque odio, similique vero quibusdam laudantium at!
                    Officia cupiditate voluptas illum possimus. Nam consectetur sunt cupiditate atque ratione inventore fugiat ipsum, animi libero blanditiis unde. Delectus ipsa voluptatum vel, numquam ex pariatur optio harum porro corporis accusantium.
                    Quod tenetur minima eaque incidunt fugiat tempora ea blanditiis optio nulla neque at iure velit omnis similique dicta adipisci odio fugit porro quasi, veniam nesciunt. Maxime consequuntur ex laboriosam odio?
                    Sed aspernatur vel pariatur natus unde rem deserunt magni laudantium. Recusandae pariatur laborum, eius nulla et quaerat perspiciatis odit veritatis veniam. Ea nostrum veniam rerum aspernatur similique soluta repellendus eius!
                    Ut inventore, quis culpa sed ad tempore ea ex fugit et saepe vero rerum porro itaque. Reiciendis in voluptatum illo consequatur quos quisquam, eius dignissimos ducimus omnis assumenda eos non.
                    Accusamus error veritatis architecto harum possimus tempora est natus, ut ad aspernatur rerum delectus, fuga sunt. Sunt aspernatur dignissimos officia error ab odio distinctio architecto, dolorem explicabo consequatur, laudantium nesciunt?
                    Expedita, hic esse ipsum, obcaecati animi earum fugit cumque dolor facilis, ipsa reiciendis veniam quae fugiat at? Recusandae at molestias laborum, ratione, optio neque consequatur facere laudantium accusantium quibusdam nam?
                    Sit veritatis fugit consectetur eveniet incidunt nam aperiam molestias culpa ex corporis beatae, quo aut exercitationem hic illum facere, voluptas ducimus? Vitae repellendus incidunt veritatis labore, dolorem enim esse illo.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic sit quisquam commodi quae earum quibusdam labore. Consectetur sed tempore explicabo iste magnam aut possimus facere nulla! Earum tenetur sint velit.
                        Accusamus quos dolore voluptatem, quisquam amet, beatae perspiciatis tempora officia sequi tenetur culpa vitae? Eveniet tenetur commodi consequuntur, esse perferendis iste, labore rem sunt molestias dolor perspiciatis et sapiente sit?
                        Omnis assumenda aspernatur atque at sunt in nam nemo? Neque quaerat sed quia recusandae ex voluptatem aspernatur mollitia accusamus aliquam, facere quae ullam itaque odio, similique vero quibusdam laudantium at!
                        Officia cupiditate voluptas illum possimus. Nam consectetur sunt cupiditate atque ratione inventore fugiat ipsum, animi libero blanditiis unde. Delectus ipsa voluptatum vel, numquam ex pariatur optio harum porro corporis accusantium.
                        Quod tenetur minima eaque incidunt fugiat tempora ea blanditiis optio nulla neque at iure velit omnis similique dicta adipisci odio fugit porro quasi, veniam nesciunt. Maxime consequuntur ex laboriosam odio?
                        Sed aspernatur vel pariatur natus unde rem deserunt magni laudantium. Recusandae pariatur laborum, eius nulla et quaerat perspiciatis odit veritatis veniam. Ea nostrum veniam rerum aspernatur similique soluta repellendus eius!
                        Ut inventore, quis culpa sed ad tempore ea ex fugit et saepe vero rerum porro itaque. Reiciendis in voluptatum illo consequatur quos quisquam, eius dignissimos ducimus omnis assumenda eos non.
                        Accusamus error veritatis architecto harum possimus tempora est natus, ut ad aspernatur rerum delectus, fuga sunt. Sunt aspernatur dignissimos officia error ab odio distinctio architecto, dolorem explicabo consequatur, laudantium nesciunt?
                        Expedita, hic esse ipsum, obcaecati animi earum fugit cumque dolor facilis, ipsa reiciendis veniam quae fugiat at? Recusandae at molestias laborum, ratione, optio neque consequatur facere laudantium accusantium quibusdam nam?
                        Sit veritatis fugit consectetur eveniet incidunt nam aperiam molestias culpa ex corporis beatae, quo aut exercitationem hic illum facere, voluptas ducimus? Vitae repellendus incidunt veritatis labore, dolorem enim esse illo.</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
