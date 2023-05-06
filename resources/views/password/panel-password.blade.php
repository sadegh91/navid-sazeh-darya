@extends('base.master')
@section('content')

    @include('components.panel-page-title', array('title'=>'تغییر رمز عبور'))


    <div class="col-xl-4 col-md-9 col-12 content-body">
        <section id="basic-input">
            <div class="row card card-content card-body">
                <form action="{{route('panel.password.update')}}" method="post" enctype="multipart/form-data">@csrf
                    <div class="form-row">
                        <div class="position-relative has-icon-left col-md-12">
                            @include('components.input-password', array('title'=>'رمز عبور','name'=>'password','icon'=>'bxs-lock','length'=>'16'))
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="position-relative has-icon-left col-md-12">
                            @include('components.input-password', array('title'=>'تکرار رمز عبور','name'=>'retry_password','icon'=>'bxs-lock','length'=>'16'))
                        </div>
                    </div>
                    <div class="form-row mt-2">
                        <div class="position-relative has-icon-left col-md-12">
                            @include('components.loading-button', array('text'=>'ویرایش','loading'=>'ىر حال ویرایش ... ','color'=>'btn-primary'))
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

@endsection
