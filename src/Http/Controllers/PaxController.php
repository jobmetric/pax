<?php

namespace JobMetric\Pax\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PaxController extends Controller
{
    /**
     * index pax
     *
     * @param Request $request
     *
     * @return View
     */
    public function index(Request $request): View
    {
        return view('pax::index');
    }
}
