@extends('panelio::layout.layout')

@section('body')
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <div class="col-md-4">
            <div class="card card-flush h-xl-100" style="background-color: #F6E5CA">
                <div class="card-header flex-nowrap pt-5">
                    <h3 class="card-title w-100 d-flex justify-content-between align-items-center">
                        <span class="card-label fw-bold fs-4 text-gray-800">Bitcoin</span>
                        <span class="fw-semibold fs-7">36,668 USD for 1 BTC</span>
                    </h3>
                </div>
                <div class="card-body text-center pt-5">
                    <img src="{{ asset('assets/vendor/pax/shapes/bitcoin.svg') }}" class="h-125px mb-5" alt="Bitcoin"/>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="d-block fw-bold fs-1 text-gray-800">0.44554576 BTC</span>
                        <span class="mt-1 fw-semibold fs-3">19,335,45 USD</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-flush h-xl-100" style="background-color: #F3D6EF">
                <div class="card-header flex-nowrap pt-5">
                    <h3 class="card-title w-100 d-flex justify-content-between align-items-center">
                        <span class="card-label fw-bold fs-4 text-gray-800">Etherium</span>
                        <span class="fw-semibold fs-7">325,035 USD for 1 ETH</span>
                    </h3>
                </div>
                <div class="card-body text-center pt-5">
                    <img src="{{ asset('assets/vendor/pax/shapes/ethereum.svg') }}" class="h-125px mb-5" alt="Etherium"/>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="d-block fw-bold fs-1 text-gray-800">29.33460000 ETH</span>
                        <span class="mt-1 fw-semibold fs-3">7,336,00 USD</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-flush h-xl-100" style="background-color: #BFDDE3">
                <div class="card-header flex-nowrap pt-5">
                    <h3 class="card-title w-100 d-flex justify-content-between align-items-center">
                        <span class="card-label fw-bold fs-4 text-gray-800">Dogecoin</span>
                        <span class="mt-1 fw-semibold fs-7">0.12,045 USD for 1 DOGE</span>
                    </h3>
                </div>
                <div class="card-body text-center pt-5">
                    <img src="{{ asset('assets/vendor/pax/shapes/dogecoin.svg') }}" class="h-125px mb-5" alt="Dogecoin"/>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="d-block fw-bold fs-1 text-gray-800">4703.7589 DOGE</span>
                        <span class="mt-1 fw-semibold fs-3">503,005,56 USD</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-5 g-xl-10">
        <div class="col-xxl-8">
            <div class="card card-flush h-xl-100">
                <div class="card-header pt-7">
                    <h4 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">Latest Activity</span>
                        <span class="text-gray-400 mt-1 fw-semibold fs-7">Updated 37 minutes ago</span>
                    </h4>
                    <div class="card-toolbar">
                        <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
                            <div class="text-gray-600 fw-bold">Loading date range...</div>
                            <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                            </i>
                        </div>
                    </div>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive">
                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                            <thead>
                            <tr class="border-bottom-0">
                                <th class="p-0 w-50px"></th>
                                <th class="p-0 min-w-175px"></th>
                                <th class="p-0 min-w-175px"></th>
                                <th class="p-0 min-w-150px"></th>
                                <th class="p-0 min-w-150px"></th>
                                <th class="p-0 min-w-50px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="symbol symbol-40px">
                                        <span class="symbol-label bg-light-info">
                                            <i class="ki-duotone ki-abstract-24 fs-2x text-info">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                    </div>
                                </td>
                                <td class="ps-0">
                                    <a href="javascript:void(0)" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Insurance</a>
                                    <span class="text-muted fw-semibold d-block fs-7">Personal Health</span>
                                </td>
                                <td>
                                    <span class="text-dark fw-bold d-block fs-6">BTC Wallet</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-7">Personal Account</span>
                                </td>
                                <td>
                                    <span class="text-dark fw-bold d-block fs-6">23 Jan, 22</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-7">Last Payment</span>
                                </td>
                                <td>
                                    <span class="text-dark fw-bold d-block fs-6">-0.0024 BTC</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-7">Balance</span>
                                </td>
                                <td class="text-end">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-duotone ki-arrow-right fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="symbol symbol-40px">
                                        <span class="symbol-label bg-light-success">
                                            <i class="ki-duotone ki-flask fs-2x text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                    </div>
                                </td>
                                <td class="ps-0">
                                    <a href="javascript:void(0)" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
                                    <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                </td>
                                <td>
                                    <span class="text-dark fw-bold d-block fs-6">ETH Wallet</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-7">Personal Account</span>
                                </td>
                                <td>
                                    <span class="text-dark fw-bold d-block fs-6">04 Feb, 22</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-7">Last Payment</span>
                                </td>
                                <td>
                                    <span class="text-dark fw-bold d-block fs-6">-0.346 ETH</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-7">Balance</span>
                                </td>
                                <td class="text-end">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-duotone ki-arrow-right fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="symbol symbol-40px">
                                        <span class="symbol-label bg-light-danger">
                                            <i class="ki-duotone ki-abstract-33 fs-2x text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                    </div>
                                </td>
                                <td class="ps-0">
                                    <a href="javascript:void(0)" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                    <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                </td>
                                <td>
                                    <span class="text-dark fw-bold d-block fs-6">BTC Wallet</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-7">Personal Account</span>
                                </td>
                                <td>
                                    <span class="text-dark fw-bold d-block fs-6">18 Feb, 22</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-7">Last Payment</span>
                                </td>
                                <td>
                                    <span class="text-dark fw-bold d-block fs-6">-0.00081 BTC</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-7">Balance</span>
                                </td>
                                <td class="text-end">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-duotone ki-arrow-right fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="symbol symbol-40px">
                                        <span class="symbol-label bg-light-primary">
                                            <i class="ki-duotone ki-abstract-47 fs-2x text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                    </div>
                                </td>
                                <td class="ps-0">
                                    <a href="javascript:void(0)" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
                                    <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                </td>
                                <td>
                                    <span class="text-dark fw-bold d-block fs-6">DOGE Wallet</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-7">Personal Account</span>
                                </td>
                                <td>
                                    <span class="text-dark fw-bold d-block fs-6">01 Apr, 22</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-7">Last Payment</span>
                                </td>
                                <td>
                                    <span class="text-dark fw-bold d-block fs-6">-456.34 DOGE</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-7">Balance</span>
                                </td>
                                <td class="text-end">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-duotone ki-arrow-right fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="symbol symbol-40px">
                                        <span class="symbol-label bg-light-warning">
                                            <i class="ki-duotone ki-technology-2 fs-2x text-warning">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                    </div>
                                </td>
                                <td class="ps-0">
                                    <a href="javascript:void(0)" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
                                    <span class="text-muted fw-semibold d-block fs-7">Zuid Area</span>
                                </td>
                                <td>
                                    <span class="text-dark fw-bold d-block fs-6">BTC Wallet</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-7">Personal Account</span>
                                </td>
                                <td>
                                    <span class="text-dark fw-bold d-block fs-6">26 May, 22</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-7">Last Payment</span>
                                </td>
                                <td>
                                    <span class="text-dark fw-bold d-block fs-6">-0.000039 BTC</span>
                                    <span class="text-gray-400 fw-semibold d-block fs-7">Balance</span>
                                </td>
                                <td class="text-end">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-duotone ki-arrow-right fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4">
            <div class="card card-flush h-xl-100">
                <div class="card-header pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">Mining Status</span>
                        <span class="text-gray-400 mt-1 fw-semibold fs-6">8k social visitors</span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="javascript:void(0)" class="btn btn-sm btn-light">All Courses</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-stack">
                        <div class="d-flex align-items-center me-5">
                            <div class="symbol symbol-40px me-3">
                                <span class="symbol-label bg-light-info">
                                    <i class="ki-duotone ki-abstract-24 fs-2x text-info">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                            </div>
                            <div class="me-5">
                                <a href="javascript:void(0)" class="text-gray-800 fw-bold text-hover-primary fs-6">GPUs mining</a>
                                <span class="fw-semibold fs-7 d-block text-start text-success ps-0">Running</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="d-flex flex-center">
                                <div class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input h-20px w-30px" type="checkbox" value="" id="flexSwitchChecked" checked="checked" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-4"></div>
                    <div class="d-flex flex-stack">
                        <div class="d-flex align-items-center me-5">
                            <div class="symbol symbol-40px me-3">
                                <span class="symbol-label bg-light-success">
                                    <i class="ki-duotone ki-flask fs-2x text-success">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                            </div>
                            <div class="me-5">
                                <a href="javascript:void(0)" class="text-gray-800 fw-bold text-hover-primary fs-6">GPUs mining</a>
                                <span class="fw-semibold fs-7 d-block text-start text-success ps-0">Running</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="d-flex flex-center">
                                <div class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input h-20px w-30px" type="checkbox" value="" id="flexSwitchChecked" checked="checked" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-4"></div>
                    <div class="d-flex flex-stack">
                        <div class="d-flex align-items-center me-5">
                            <div class="symbol symbol-40px me-3">
                                <span class="symbol-label bg-light-danger">
                                    <i class="ki-duotone ki-abstract-33 fs-2x text-danger">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                            </div>
                            <div class="me-5">
                                <a href="javascript:void(0)" class="text-gray-800 fw-bold text-hover-primary fs-6">Est. daily USD</a>
                                <span class="fw-semibold fs-7 d-block text-start text-gray-400 ps-0">$48.02</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="d-flex flex-center">
                                <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px">
                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-4"></div>
                    <div class="d-flex flex-stack">
                        <div class="d-flex align-items-center me-5">
                            <div class="symbol symbol-40px me-3">
                                <span class="symbol-label bg-light-primary">
                                    <i class="ki-duotone ki-abstract-47 fs-2x text-primary">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                            </div>
                            <div class="me-5">
                                <a href="javascript:void(0)" class="text-gray-800 fw-bold text-hover-primary fs-6">Team Members</a>
                                <span class="fw-semibold fs-7 d-block text-start text-gray-400 ps-0">6</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="d-flex flex-center">
                                <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px">
                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer mx-auto pt-0">
                    <a href="javascript:void(0)" class="btn btn-primary btn-sm me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">Add PC</a>
                    <a href="javascript:void(0)" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Buy GPU</a>
                </div>
            </div>
        </div>
    </div>
@endsection
