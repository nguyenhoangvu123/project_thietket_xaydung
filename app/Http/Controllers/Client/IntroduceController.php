<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Models\Admin\Setting;
use App\Models\Admin\ConfigLayout;
use App\Http\Controllers\Controller;

class IntroduceController extends Controller
{
    public function __construct(
        protected Setting $setting,
        protected ConfigLayout $configLayout
    ) {
    }

    public function index()
    {
        $configLayout = $this->configLayout
            ->with([
                'posts',
                'category' => function ($q) {
                    $q->with('posts');
                }
            ])
            ->where('config_status', $this->configLayout::CONFIG_SHOW)
            ->where("config_image", "<>", "")
            ->orderBy('config_postion', 'DESC')
            ->first();
        $slugConfigLayout = $configLayout->config_slug;
        $introduce = $this->setting->where("key", $this->setting::KEY_SETTING_INTRODUCE)->first();
        return view("client.pages.introduce", [
            "introduce" => $introduce,
            "configLayout" => $configLayout,
            "slugConfigLayout" => $slugConfigLayout
        ]);
    }
}
