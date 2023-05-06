@extends('base.master')
@section('content')

    @include('components.panel-page-title', array('title'=>'داشبورد'))

    <div class="col-xl-4 col-md-9 col-12 content-body"><!-- Basic Inputs start -->
        <section id="basic-input">
            <div class="row card card-content card-body">
                <form action="" method="get" enctype="multipart/form-data">@csrf
                    <div class="form-row mt-2">
                        <div class="position-relative has-icon-left col-md-12">
                            @include('components.input-text', array('title'=>'نام','name'=>'first_name','icon'=>'bx-user','length'=>'50','edit'=>''))
                        </div>
                        <div class="col-md-12">
                            @include('components.loading-button', array('text'=>'جستجو','loading'=>'ىر حال جستجو ... ','color'=>'btn-danger'))
                        </div>
                        <div class="col-md-12">
                            @include('components.input-price', array('title'=>'قیمت درهم','name'=>'dirham_price','edit'=>'','icon'=>'bx-dollar-circle','length'=>'50','type'=>'درهم'))
                        </div>
                        <div class="position-relative has-icon-left d-inline">

                            @include('components.input-image', array('title'=>'تست','id'=>'first_name','name'=>'img','src'=>'logo.png'))
                        </div>
                    </div>

                </form>
            </div>
        </section>
    </div>


@endsection


