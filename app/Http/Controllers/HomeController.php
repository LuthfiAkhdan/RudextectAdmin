<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Untuk data tinggal di sesuaikan dengan Database. (termasuk chart)
        return view('home', [
            'page'                  => $this,
            'total_cost'            => 31868,
            'earnings_chart'        => json_encode(array(251,176)),

            /* Set Breadcrumb */
            $this->breadcrumbs = [
                [
                    'url'     => '', 
                    'title'   => 'Dashboard',
                ],
            ],

            /* Set Menu  */
            $this->menu = [
                'menu'    => 'Dashboard',
                'submenu' => '',
                'title'   => 'Marketing Dashboard'
            ],
        ]);
    }
}
