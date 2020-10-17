<div class="row align-items-center">
    <div class="row">
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="title_en">@lang('dashboard.title_en')<label class="text-danger">*</label></label>
                <textarea type="text" class="form-control summernote" id="title_en" name="title_en"placeholder="@lang('dashboard.enter-english-title')" >
                   {{old('title_en')??$about->title_en}}
                </textarea>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="title_ar">@lang('dashboard.title_ar')<label class="text-danger">*</label></label>
                <textarea type="text" name="title_ar" class="form-control summernote" id="title_ar" placeholder="@lang('dashboard.enter-arabic-title')" >
                    {{old('title_ar')??$about->title_ar}}
                </textarea>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="year">@lang('about.year')<label class="text-danger">*</label></label>
                <input type="text"  name="year"  value=" {{old('year')??$about->year}}" class="form-control " id="year"  placeholder="@lang('about.enter-establish-year')" >
            </div>
        </div>
        <div class="col-lg-12 col-sm-12">
            <div class="form-group">
                <label for="content_en">@lang('dashboard.text_en')<label class="text-danger">*</label></label>
                <textarea name="text_en" id="content_en" class="form-control summernote"  placeholder="@lang('dashboard.enter-english-text')" >
                     {{old('text_en')??$about->text_en}}
                </textarea>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12">
            <div class="form-group">
                <label for="content_en">@lang('dashboard.text_ar')<label class="text-danger">*</label></label>
                <textarea name="text_ar" id="content_en" class="form-control summernote"  placeholder="@lang('dashboard.enter-arabic-text')" >
                     {{old('text_ar')??$about->text_ar}}
                </textarea>
            </div>
        </div>
        <div class="form-group col-lg-6 m-auto">
            <label><label class="text-danger">*</label>@lang('dashboard.image')</label>
            <div class=" row">
                <div class="col-lg-12 col-xl-12">
                    <div class="image-input image-input-outline" id="kt_contacts_edit_avatar1" style="background-image:url({{asset_public('admin/media/gym_images/il_570xN.1580358345_5585.jpg')}}) ;width:300px;height: 220px;">
                        <div class="image-input-wrapper"  style="background-image: @if(!empty($about)) url({{asset_public('storage/images/'.$about->image()->pluck('image')[0])}})@else url({{asset_public('admin/media/gym_images/images.png')}}) @endif ; width:300px;height: 220px;"></div>
                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                            <i class="fa fa-pen icon-sm text-muted"></i>
                            <input type="file" name="image[]">
                        </label>
                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>
                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group col-lg-6 m-auto">
            <label><label class="text-danger">*</label>@lang('dashboard.image')</label>
            <div class=" row">
                <div class="col-lg-12 col-xl-12">
                    <div class="image-input image-input-outline" id="kt_contacts_edit_avatar2" style="background-image: url({{asset_public('admin/media/gym_images/il_570xN.1580358345_5585.jpg')}}) ;width:300px;height: 220px;">
                        <div class="image-input-wrapper"  style="  width:300px;height: 220px; background-image:@if(!empty($about)) url({{asset_public('storage/images/'.$about->image()->pluck('image')[1])}}) @else url({{asset_public('admin/media/gym_images/images.png')}}); @endif"></div>
                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                            <i class="fa fa-pen icon-sm text-muted"></i>
                            <input type="file" name="image[]">
                        </label>
                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>
                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')
    /*editor*/
    <script src="{{ asset_public('admin/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
    <script src="{{ asset_public('admin/plugins/js/pages/crud/forms/editors/ckeditor-classic.js') }}"></script>
    <script>
        "use strict";

        // Class definition
        var KTContactsEdit = function () {
            // Base elements
            var avatar;

            var initAvatar1 = function() {
                avatar = new KTImageInput('kt_contacts_edit_avatar1');
            }
            var initAvatar2 = function() {
                avatar = new KTImageInput('kt_contacts_edit_avatar2');
            }
            return {
                // public functions
                init: function() {
                    initAvatar1();
                    initAvatar2();
                }
            };
        }();


        jQuery(document).ready(function() {
            KTContactsEdit.init();
        });
    </script>

    <script>
        // Class definition

        var KTSummernoteDemo = function () {
            // Private functions
            var demos = function () {
                $('.summernote').summernote({
                    height: 150
                });
            }

            return {
                // public functions
                init: function() {
                    demos();
                }
            };
        }();

        // Initialization
        jQuery(document).ready(function() {
            KTSummernoteDemo.init();
        });
    </script>
    @if(session()->has('success'))
        <script>Swal.fire("Good Job", "{{session()->get('success')}}", "success");</script>
    @endif
@endsection


