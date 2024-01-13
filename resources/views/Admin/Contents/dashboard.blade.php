@extends('Admin.layouts.main')
@section('title')
    <title id="title">Dashboards</title>
@endsection
@section('css')
    <style>
        #tableRegion_paginate {
            margin: 20px;
        }

        .mepetIsi {
            padding-top: 0.1rem !important;
            padding-bottom: 0.1rem !important;
            padding-left: 5rem
                /* background-color: #0f9cf3 !important; */
        }
    </style>
@endsection
@section('container')
    <div class="content">
        <h1 class="text-center" id="title">Dashboards</h1>
        <br>
        <div class="row">
            <div class="col-sm-3">
                <div class="card border-success mb-3" style="max-width: 20rem;">
                    <div class="card-body text-success">
                        <h5 class="card-title" id="categories"></h5>
                    </div>
                    <div class="card-footer bg-transparent border-success">Footer</div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card border-success mb-3" style="max-width: 20rem;">
                    <div class="card-body text-success">
                        <h5 class="card-title" id="posts">Success card title</h5>
                    </div>
                    <div class="card-footer bg-transparent border-success">Footer</div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card border-success mb-3" style="max-width: 20rem;">
                    <div class="card-body text-success">
                        <h5 class="card-title" id="products">Success card title</h5>
                    </div>
                    <div class="card-footer bg-transparent border-success">Footer</div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card border-success mb-3" style="max-width: 20rem;">
                    <div class="card-body text-success">
                        <h5 class="card-title" id="aparaturs">Success card title</h5>
                    </div>
                    <div class="card-footer bg-transparent border-success">Footer</div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="{{ url('JS/Admin/dashboard.js') }}"></script>
    <script src="{{ url('assets/js/sweetallert2.js') }}"></script>
@endsection
