@extends('layouts.app-dashboard')

@section('title', 'Social Link')

@section('content')
<div class="card crd-1 p-0">
  <div class="card-body pt-5 border-bottom">
    <div>
      <div class="row mb-3">
        <div class="col-xl-3 col-sm-6">
          <div class="mt-2">
            <h5>Social Link</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-4">
      <form action="{{ route('setting.update') }}" method="POST" role="form">
        @csrf
        <div class="mb-3 row">
          <label for="google_analytics" class="col-md-3 col-form-label">Google Analytics Code</label>
          <div class="col-md-9">
            <textarea class="form-control" rows="4" id="google_analytics" name="google_analytics" placeholder="Enter google analytics code">{!! Config::get('settings.google_analytics') !!}</textarea>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="facebook_pixels" class="col-md-3 col-form-label">Facebook Pixel Code</label>
          <div class="col-md-9">
            <textarea class="form-control" rows="4" id="facebook_pixels" name="facebook_pixels" placeholder="Enter facebook pixel code">{{ Config::get('settings.facebook_pixels') }}</textarea>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="social_facebook" class="col-md-3 col-form-label">Facebook Profile</label>
          <div class="col-md-9">
            <input class="form-control" type="url" id="social_facebook" name="social_facebook"
            value="{{ config('settings.social_facebook') }}" placeholder="Enter facebook profile link">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="social_twitter" class="col-md-3 col-form-label">Twitter Profile</label>
          <div class="col-md-9">
            <input class="form-control" type="url" id="social_twitter" name="social_twitter"
            value="{{ config('settings.social_twitter') }}" placeholder="Enter twitter profile link">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="social_instagram" class="col-md-3 col-form-label">Instagram Profile</label>
          <div class="col-md-9">
            <input class="form-control" type="url" id="social_instagram" name="social_instagram" value="{{ config('settings.social_instagram') }}" placeholder="Enter instagram profile link"/>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="social_linkedin" class="col-md-3 col-form-label">LinkedIn Profile</label>
          <div class="col-md-9">
            <input class="form-control" type="url" id="social_linkedin" name="social_linkedin" value="{{ config('settings.social_linkedin') }}" placeholder="Enter linkedin profile link"/>
          </div>
        </div>
        <div class="mt-3 row float-end">
          <div class="d-flex flex-wrap">
            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
