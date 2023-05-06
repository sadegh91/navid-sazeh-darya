@extends('base.master')
@section('content')

    @include('components.panel-page-title', array('title'=>'لیست كاربران'))


    <div class="col-xl-4 col-md-9 col-12 content-body">
        <section id="basic-input">
            <div class="row card card-content card-body">
                <form action="{{route('panel.user.insert')}}" method="post" enctype="multipart/form-data">@csrf
                    <div class="form-row">
                        <div class="position-relative has-icon-left col-md-12">
                            @include('components.input-number', array('title'=>'کد ملی','name'=>'national_code','edit'=>'','icon'=>'bxs-barcode','length'=>'10'))
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="position-relative has-icon-left col-md-12">
                            @include('components.input-text', array('title'=>'نام','name'=>'first_name','edit'=>'','icon'=>'bxs-user','length'=>'50'))
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="position-relative has-icon-left col-md-12">
                            @include('components.input-text', array('title'=>'نام خانوادکی','name'=>'last_name','edit'=>'','icon'=>'bxs-user','length'=>'50'))
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="position-relative has-icon-left col-md-12">
                            @include('components.input-radio', array('title'=>'ادمین','name'=>'role','value'=>'admin','edit'=>'','color'=>'radio-primary','checked'=>''))
                            @include('components.input-radio', array('title'=>'اپراتور','name'=>'role','value'=>'operator','edit'=>'','color'=>'radio-dark','checked'=>''))
                            @if ($errors->has('role'))
                                @foreach ($errors->get('role') as $error)
                                    <p class="text-danger" style="font-size: 14px">*&nbsp;{{ $error }}</p>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="form-row mt-2">
                        <div class="position-relative has-icon-left col-md-12">
                            @include('components.loading-button', array('text'=>'ثبت','loading'=>'ىر حال ثبت ... ','color'=>'btn-primary'))
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{'جدول كاركنان'}}</h4>
                </div>
                <div class="card-content">
                    <!-- table bordered -->
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                            <tr>
                                <th>ردیف</th>
                                <th>کد ملی</th>
                                <th>نام و نام خانوادگی</th>
                                <th>وضعیت ادمین</th>
                                <th>بازیابی رمز کاربر</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr @if($loop->iteration % 2 == 0)class="table-light" @endif>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$user->national_code}}</td>
                                    <td>{{$user->first_name.' '.$user->last_name}}</td>
                                    <td>
                                        <form action="{{route('panel.user.status',$user->id)}}" method="post"
                                              enctype="multipart/form-data">@csrf
                                            <div class="form-row">
                                                <div class="position-relative has-icon-left col-md-12">
                                                    <ul class="list-unstyled mb-0" style="margin-top: 8px">
                                                        @if($user->status == 'active')
                                                            @include('components.input-radio', array('title'=>'فعال','name'=>'status_'.$user->id,'value'=>'active_'.$user->id,'edit'=>'','color'=>'radio-primary','checked'=>'checked'))
                                                            @include('components.input-radio', array('title'=>'غیر فعال','name'=>'status_'.$user->id,'value'=>'inactive_'.$user->id,'edit'=>'','color'=>'radio-danger','checked'=>''))
                                                        @else
                                                            @include('components.input-radio', array('title'=>'فعال','name'=>'status_'.$user->id,'value'=>'active_'.$user->id,'edit'=>'','color'=>'radio-primary','checked'=>''))
                                                            @include('components.input-radio', array('title'=>'غیر فعال','name'=>'status_'.$user->id,'value'=>'inactive_'.$user->id,'edit'=>'','color'=>'radio-danger','checked'=>'checked'))
                                                        @endif
                                                        @if ($errors->has('status'))
                                                            @foreach ($errors->get('status') as $error)
                                                                <p class="text-danger" style="font-size: 14px">
                                                                    *&nbsp;{{ $error }}</p>
                                                            @endforeach
                                                        @endif
                                                    </ul>
                                                </div>
                                            </div>
                                            @include('components.loading-button', array('text'=>'ثبت','loading'=>'ىر حال ثبت ... ','color'=>'btn-primary'))
                                        </form>
                                    </td>
                                    <td><a href="{{route('panel.user.password',$user->id)}}"  onclick="return confirm('آیا از بازیابی رمز کاربر اطمینان دارید؟')" ><i class="badge-circle badge-circle-light-danger bx bx-trash font-medium-1"></i></a></td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
