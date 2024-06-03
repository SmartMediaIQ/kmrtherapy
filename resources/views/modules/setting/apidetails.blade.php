@extends('layouts.app-dashboard')

@section('title', 'API Details')

@section('content')
<div class="card">
  <div class="card-body">
    <div>
      <div class="row mb-3">
        <div class="col-xl-3 col-sm-6">
          <div class="mt-2">
            <h5>API Details</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-4">
      <form action="{{ route('setting.update') }}" method="POST" role="form">
        @csrf
        <div class="mb-3 row">
          <label for="fb_account_id" class="col-md-3 col-form-label">FB Account Id</label>
          <div class="col-md-9">
            <input class="form-control" type="text" placeholder="Enter FB account Id" id="fb_account_id" name="fb_account_id" value="{{ config('settings.fb_account_id') }}"/>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="fb_access_token" class="col-md-3 col-form-label">FB Access Token</label>
          <div class="col-md-9">
            <input class="form-control" type="text" placeholder="Enter FB access token" id="fb_access_token" name="fb_access_token" value="{{ config('settings.fb_access_token') }}"/>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="fb_app_id" class="col-md-3 col-form-label">FB APP Id</label>
          <div class="col-md-9">
            <input class="form-control" type="text" placeholder="Enter stripe key" id="fb_app_id" name="fb_app_id" value="{{ config('settings.fb_app_id') }}"/>
          </div>
        </div>

        <div class="mb-3 row">
          <label for="fb_app_secret" class="col-md-3 col-form-label">FB App Secret</label>
          <div class="col-md-9">
            <input class="form-control" type="text" placeholder="Enter FB App Secret" id="fb_app_secret" name="fb_app_secret" value="{{ config('settings.fb_app_secret') }}"/>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="ringba_access_token" class="col-md-3 col-form-label">Ringba Access Token</label>
          <div class="col-md-9">
            <input class="form-control" type="text" placeholder="Enter Ringba access token" id="ringba_access_token" name="ringba_access_token" value="{{ config('settings.ringba_access_token') }}"/>
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
