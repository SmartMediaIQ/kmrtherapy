<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Traits\UploadAble;

class SettingController extends Controller
{
    use UploadAble;

    public function general()
    {
        return view('modules.setting.index');
    }

    public function update(Request $request)
    {
        if ($request->has('site_full_logo') && ($request->file('site_full_logo') instanceof UploadedFile)) {

            if (config('settings.site_full_logo') != null) {
                $this->deleteOne(config('settings.site_full_logo'));
            }
            $logo = $this->uploadOne($request->file('site_full_logo'), 'img/setting');
            Setting::set('site_full_logo', $logo);

        }
        if ($request->has('site_small_logo') && ($request->file('site_small_logo') instanceof UploadedFile)) {

            if (config('settings.site_small_logo') != null) {
                $this->deleteOne(config('settings.site_small_logo'));
            }
            $site_small_logo = $this->uploadOne($request->file('site_small_logo'), 'img/setting');
            Setting::set('site_small_logo', $site_small_logo);

        }

        if ($request->has('site_favicon') && ($request->file('site_favicon') instanceof UploadedFile)) {

            if (config('settings.site_favicon') != null) {
                $this->deleteOne(config('settings.site_favicon'));
            }
            $favicon = $this->uploadOne($request->file('site_favicon'), 'img/setting');
            Setting::set('site_favicon', $favicon);

        }

        $keys = $request->except(['_token','site_full_logo','site_small_logo','site_favicon']);
        //$keys = $request->except('_token');

        foreach ($keys as $key => $value)
        {
            Setting::set($key, $value);
        }

        return redirect()->back()->with('success', 'Settings updated successfully.');
    }

    public function sociallink()
    {
        return view('modules.setting.sociallink');
    }

    public function apidetails()
    {
        return view('modules.setting.apidetails');
    }
}
