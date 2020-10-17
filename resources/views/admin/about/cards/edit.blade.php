@extends('admin.layouts.app')
@section('title' ,'Edit Card')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">@lang('cards.card-edit')</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.dashboard')}}" class="text-muted">@lang('dashboard.dashboard')</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascrpit:;" class="text-muted">@lang('cards.card-edit')</a>
                            </li>
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                @if(!empty($errors->any()))
                    <div class="alert alert-custom alert-light-danger fade show mb-5" role="alert">
                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                        <div class="alert-text">
                            <ol>
                                @if($errors->any())
                                    {!! implode('',$errors->all('<li>:message</li>')) !!}
                                @endif
                            </ol>
                        </div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                            </button>
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">@lang('cards.card-edit')</h3>
                            </div>
                            <!--begin::Form-->
                            <form action="{{route('admin.cards.update' ,$card->id) }}" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    @csrf
                                    @method('put')
                                    @include('admin.about.cards.form')
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary mr-2">@lang('dashboard.submit')</button>
                                    <a href="{{route('admin.dashboard')}}" class="btn btn-secondary">@lang('dashboard.close')</a>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
@endsection
