<?php

namespace App\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;
use App\Models\AngkaKemiskinan as AngkaKemiskinan;

class DataKemiskinan extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        // dd(Auth::user()->role);
        if(Auth::user()->role->name == 'admin'){
            $count = \App\Models\AngkaKemiskinan::count();
        }elseif(Auth::user()->role->name == 'desa'){
            $count = \App\Models\AngkaKemiskinan::dataKemiskinanDesa();
        }elseif(Auth::user()->role->name == 'kecamatan'){
            $count = \App\Models\AngkaKemiskinan::dataKemiskinanKecamatan();
        }

        $string = 'Data Kemiskinan';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-people',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.post_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('voyager::dimmer.post_link_text'),
                'link' => 'admin/angka-kemiskinans',
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(AngkaKemiskinan::class));
    }
}
