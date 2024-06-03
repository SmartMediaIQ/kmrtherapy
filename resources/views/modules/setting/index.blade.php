@extends('layouts.app-dashboard')

@section('title', 'General Setting')

@section('page-specific-style')
{{-- <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" /> --}}
@endsection

@section('content')
<div class="card">
    <div class="card-body">
      <div>
        <div class="row mb-3">
          <div class="col-xl-4 col-sm-6">
            <div class="mt-2">
              <h5>GENERAL SETTING</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-4">
        <form action="{{ route('setting.update') }}" method="POST" role="form" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-sm-6">
              <div class="mb-3">
                <label for="site_name">Enter site name</label>
                <input id="site_name" name="site_name" type="text" class="form-control" placeholder="Enter site name" value="{{ config('settings.site_name') }}" />
              </div>
              <div class="mb-3">
                <label for="default_email_address">Default Email Address</label>
                <input id="default_email_address" name="default_email_address" type="text" class="form-control" placeholder="Default Email Address" value="{{ config('settings.default_email_address') }}" />
              </div>
              <div class="mb-3">
                <label for="currency_code">Currency Code</label>
                <input id="currency_code" name="currency_code" type="text" class="form-control" placeholder="Enter currency code" value="{{ config('settings.currency_code') }}" />
              </div>
              <div class="mb-3">
                <label for="footer_copyright_text">Footer Copyright Text</label>
                <div>
                  <textarea id="footer_copyright_text" name="footer_copyright_text" class="form-control" rows="3" placeholder="Enter footer copyright text">{{ config('settings.footer_copyright_text') }}</textarea>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="mb-3">
                <label for="site_title">Site Title</label>
                <input id="site_title" name="site_title" type="text" class="form-control" placeholder="Site Title" value="{{ config('settings.site_title') }}" />
              </div>
              <div class="mb-3">
                <label for="contact_no">Contact No.</label>
                <input id="contact_no" name="contact_no" type="text" class="form-control" placeholder="contact_no" value="{{ config('settings.contact_no') }}"/>
              </div>
              <div class="mb-3">
                <label for="currency_symbol">Currency Symbol</label>
                <input id="currency_symbol" name="currency_symbol" type="text" class="form-control" placeholder="Enter currency symbol" value="{{ config('settings.currency_symbol') }}" />
              </div>
              <div for="seo_meta_title">
                <label class="form-label">SEO Meta Description</label>
                <div>
                  <textarea id="seo_meta_title" name="seo_meta_title" class="form-control" rows="3" placeholder="Enter seo meta description">{{ config('settings.seo_meta_title') }}
                  </textarea>
                </div>
              </div>
            </div>
            <div class="col-sm-12 mb-4">
              <div for="seo_meta_title">
                <label class="form-label" for="seo_meta_description">SEO Meta Keywords</label>
                <textarea id="seo_meta_description" name="seo_meta_description" class="form-control" rows="3" placeholder="Enter seo meta keywords">{{ config('settings.seo_meta_description') }}
                </textarea>
              </div>
            </div>
          </div>
          <div class="row gap-6">
            <div class="col-sm-3 imgUp">
              <div class="imagePreview" @if (config('settings.site_full_logo') != null) style="background-image: url({{ asset('storage/'.config('settings.site_full_logo')) }});background-size: contain; background-position: center;" @endif>
              </div>
              <label class="btn btn-sm btn-primary">
                Upload Full Logo<input type="file" class="uploadFile img" name="site_full_logo" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
              </label>
            </div>
            <div class="col-sm-3 imgUp">
              <div class="imagePreview" @if (config('settings.site_small_logo') != null) style="background-image: url({{ asset('storage/'.config('settings.site_small_logo')) }});background-size: auto; background-position: center;" @endif>
              </div>
              <label class="btn btn-sm btn-primary">
                Upload Small Logo<input type="file" class="uploadFile img" name="site_small_logo" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
              </label>
            </div>
            <div class="col-sm-3 imgUp">
              <div class="imagePreview" @if (config('settings.site_favicon') != null) style="background-image: url({{ asset('storage/'.config('settings.site_favicon')) }});background-size: auto; background-position: center;" @endif>
              </div>
              <label class="btn btn-sm btn-primary">
                Upload Favicon<input type="file" class="uploadFile img" name="site_favicon" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
              </label>
            </div>
          </div>
          <div class="d-flex flex-wrap mt-3 float-end">
            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
          </div>
        </form>
      </div>
    </div>
</div>

@endsection

@section('page-specific-script')
<script src="{{ asset('assets/js/pages/file-manager.init.js') }}"></script>
@endsection
