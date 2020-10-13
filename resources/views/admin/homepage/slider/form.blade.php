<div class="row align-items-center">
    <div class="row">
        <div class="form-group col-lg-8 m-auto">
            <label><label class="text-danger">*</label>@lang('slider.image')</label>
            <div class=" row">
                <div class="col-lg-12 col-xl-12">
                    <div class="image-input image-input-outline" id="kt_contacts_edit_avatar" style="background-image: url({{asset_public('admin/media/gym_images/il_570xN.1580358345_5585.jpg')}}) ;width:300px;height: 220px;">
                        <div class="image-input-wrapper"  style="background-image: @if(!empty($slider))url({{asset_public('storage/images/'.$slider->image()->pluck('image')[0])}}) @else url({{asset_public('admin/media/gym_images/images.png')}})@endif; width:300px;height: 220px;"></div>
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
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="content_en">@lang('slider.title_en')<label class="text-danger">*</label></label>
                <textarea name="title_en" id="content_en" class="form-control "  placeholder="@lang('slider.enter-english-content')" >
             {{old('title_en')??$slider->title_en}}
            </textarea>
                <div>{{ $errors->first('title_en') }}</div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="content_ar">@lang('slider.title_ar')<label class="text-danger">*</label></label>
                <textarea name="title_ar" id="content_ar" class="form-control"  placeholder="@lang('slider.enter-arabic-content')" >
             {{old('title_ar')??$slider->title_ar}}
            </textarea>
                <div>{{ $errors->first('title_ar') }}</div>
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
/*editor*/
// Class definition
var KTCkeditor1 = function () {
// Private functions
    var demos1 = function () {
        ClassicEditor.create( document.querySelector( '#content_ar' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    }
    var demos2 = function () {
        ClassicEditor.create( document.querySelector( '#content_en' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    }

    return {
        // public functions
        init: function() {
            demos1();
            demos2();
        }
    };
}();
// Initialization
jQuery(document).ready(function() {
    KTCkeditor1.init();
});
</script>
@endsection
