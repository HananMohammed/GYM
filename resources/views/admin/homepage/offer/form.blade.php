<div class="row align-items-center">
    <div class="row">
        <div class="form-group col-lg-4 m-auto">
            <label><label class="text-danger">*</label>@lang('dashboard.image')</label>
            <div class=" row">
                <div class="col-lg-12 col-xl-12">
                    <div class="image-input image-input-outline" id="kt_contacts_edit_avatar" style="background-image: url({{asset_public('admin/media/gym_images/il_570xN.1580358345_5585.jpg')}}) ;width:300px;height: 220px;">
                        <div class="image-input-wrapper"  style="background-image:@if(!empty($offer->toArray()))url({{asset_public('storage/images/'.$offer->image()->pluck('image')[0])}})@else url({{asset_public('admin/media/gym_images/images.png')}}) @endif; width:300px;height: 220px;"></div>
                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                            <i class="fa fa-pen icon-sm text-muted"></i>
                            <input type="file" name="image">
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
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="content_en">@lang('dashboard.title_en')<label class="text-danger">*</label></label>
                <input type="text" name="title_en" id="content_en" value="{{old('title_en')??$offer->title_en}}" class="form-control"  placeholder="@lang('dashboard.enter-english-title')" >
                <div>{{ $errors->first('title_en') }}</div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="content_ar">@lang('dashboard.title_ar')<label class="text-danger">*</label></label>
                <input type="text" name="title_ar" id="content_ar" value="{{old('title_ar')??$offer->title_ar}}" class="form-control"  placeholder="@lang('dashboard.enter-arabic-title')" >
                <div>{{ $errors->first('title_ar') }}</div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="text_en">@lang('dashboard.text_en')<label class="text-danger">*</label></label>
                <textarea name="text_en" id="text_en" class="form-control summernote"  placeholder="@lang('dashboard.enter-english-text')" >
             {{old('text_en')??$offer->text_en}}
            </textarea>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="text_ar">@lang('dashboard.text_ar')<label class="text-danger">*</label></label>
                <textarea name="text_ar" id="text_ar" class="form-control summernote"  placeholder="@lang('dashboard.enter-arabic-text')" >
                {{old('text_ar')??$offer->text_ar}}
            </textarea>
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

            var initAvatar = function() {
                avatar = new KTImageInput('kt_contacts_edit_avatar');
            }

            return {
                // public functions
                init: function() {
                    initAvatar();
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
<h2 class="text-lg mt-4 mb-5 text-white">
    احجز مكانك معنا للحصول علي <span class="text-color">عرض صيفي 25% </span>خصم
</h2>
