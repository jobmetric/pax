<?php

namespace JobMetric\Pax\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use JobMetric\Panelio\Http\Controllers\Controller;

class PaxController extends Controller
{
    /**
     * index pax
     *
     * @param Request $request
     *
     * @return View
     */
    public function index(Request $request)
    {
        DomiTitle(trans('pax::base.dashboard.title'));

        return view('pax::dashboard');
    }
}
