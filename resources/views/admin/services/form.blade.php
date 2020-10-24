<div class="row align-items-center">
    <div class="row">
        <div class="form-group col-lg-12 m-auto">
            <label><label class="text-danger">*</label>@lang('services.image')</label>
            <div class=" row">
                <div class="col-lg-12 col-xl-12 mb-3">
                    <div class="image-input image-input-outline" id="kt_contacts_edit_avatar" style="background-image: url({{asset_public('admin/media/gym_images/il_570xN.1580358345_5585.jpg')}}) ;width:300px;height: 220px;">
                        <div class="image-input-wrapper"  style="background-image:@if(!empty($service->toArray())) url({{asset_public('storage/images/'.$service->image()->pluck('image')[0])}}) @else url({{asset_public('admin/media/gym_images/images.png')}}) @endif; width:300px;height: 220px;"></div>
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
                        <div>{{ $errors->first('image') }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="title_en">@lang('dashboard.title_en')<label class="text-danger">*</label></label>
                <input type="text" class="form-control" value="{{old('title_en')??$service->title_en}}" id="title_en" name="title_en" placeholder="@lang('dashboard.enter-english-title')" >
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="title_ar">@lang('dashboard.title_ar')<label class="text-danger">*</label></label>
                <input type="text" name="title_ar"value="{{old('title_ar')??$service->title_ar}}" class="form-control" id="title_ar" placeholder="@lang('dashboard.enter-arabic-title')" >
            </div>
        </div>
         <div class="col-lg-4 col-sm-12">
             <label class="col-form-label text-right col-lg-4 col-sm-12 " >@lang('services.category')<label class="text-danger">*</label></label><br>
            <select class="form-control select2 col-lg-12 col-sm-12" id="kt_select2_1" name="category">
                <option value="">@lang('services.category')</option>
            @foreach($categories as $category)
                    <option value="{{$category->id}}" @if(!empty($service->toArray()))@if($service->category == $category->id) selected @endif @endif>{{$category->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-12 col-sm-12">
            <div class="form-group">
                <label for="content_en">@lang('dashboard.text_en')<label class="text-danger">*</label></label>
                <textarea name="text_en" id="content_en" class="form-control summernote"  placeholder="@lang('dashboard.enter-english-text')" >
                     {{old('text_en')??$service->text_en}}
                </textarea>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12">
            <div class="form-group">
                <label for="content_en">@lang('dashboard.text_ar')<label class="text-danger">*</label></label>
                <textarea name="text_ar" id="content_en" class="form-control summernote"  placeholder="@lang('dashboard.enter-arabic-text')" >
                     {{old('text_ar')??$service->text_ar}}
                </textarea>
            </div>
        </div>
    </div>
</div
@section('scripts')
    /*editor*/
    <script src="{{ asset_public('admin/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
    <script src="{{ asset_public('admin/plugins/js/pages/crud/forms/editors/ckeditor-classic.js') }}"></script>
    <script src="{{ asset_public('admin/js/pages/crud/forms/widgets/select2.js')}}"></script>
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
    var KTSelect2 = function() {
        // Private functions
        var demos = function() {
            // basic
            $('#kt_select2_1').select2({
                placeholder: "Select a Service Category"
            });
        }
        // Public functions
        return {
            init: function() {
                demos();
            }
        };
    }();

    // Initialization
    jQuery(document).ready(function() {
        KTSelect2.init();
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


