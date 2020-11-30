<div class="row align-items-center">
    <div class="row">
        <div class="form-group col-lg-12 m-auto">
            <label><label class="text-danger">*</label>@lang('classes.image')</label>
            <div class=" row">
                <div class="col-lg-12 col-xl-12 mb-3">
                    <div class="image-input image-input-outline" id="kt_contacts_edit_avatar" style="background-image: url({{asset_public('admin/media/gym_images/il_570xN.1580358345_5585.jpg')}}) ;width:300px;height: 220px;">
                        <div class="image-input-wrapper"  style="background-image:@if(!empty($course->toArray())) url({{asset_public('storage/images/'.$course->image()->pluck('image')[0])}}) @else url({{asset_public('admin/media/gym_images/images.png')}}) @endif; width:300px;height: 220px;"></div>
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
                <label for="name_en">@lang('dashboard.name_en')<label class="text-danger">*</label></label>
                <input type="text" class="form-control" value="{{old('name_en')??$course->name_en}}" id="name_en" name="name_en" placeholder="@lang('dashboard.enter-english-name')" >
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="name_ar">@lang('dashboard.name_ar')<label class="text-danger">*</label></label>
                <input type="text" name="name_ar"value="{{old('name_ar')??$course->name_ar}}" class="form-control" id="name_ar" placeholder="@lang('dashboard.enter-arabic-name')" >
            </div>
        </div>
         <div class="col-lg-4 col-sm-12" style="margin-top: -12px;">
             <label class="col-form-label text-right col-lg-4 col-sm-12 " >@lang('classes.category')<label class="text-danger">*</label></label><br>
            <select class="form-control" name="category">
                <option selected disabled>@lang('classes.category')</option>
            @foreach($categories as $category)
                    <option value="{{$category->id}}" @if(!empty($course->toArray()))@if($course->category == $category->id) selected @endif @endif>{{ $category->name }}</option>
            @endforeach
            </select>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="hours">@lang('classes.hours')<label class="text-danger">*</label></label>
                <input type="text" name="hours"value="{{old('hours')??$course->hours}}" class="form-control" id="hours" placeholder="@lang('classes.enter-hours')" >
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="calories">@lang('classes.calories')<label class="text-danger">*</label></label>
                <input type="number" name="calories"value="{{old('calories')??$course->calories}}" class="form-control" id="calories" placeholder="@lang('classes.enter-calories')" >
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="workout_intensity">@lang('classes.workout_intensity')<label class="text-danger">*</label></label>
                <input type="number" name="workout_intensity"value="{{old('workout_intensity')??$course->workout_intensity}}" class="form-control" id="workout_intensity" placeholder="@lang('classes.enter_workout_intensity')" >
            </div>
        </div>
        <h5 class="col-sm-12">@lang('classes.select-schedule')</h5>
        <div class="dateTime">
            <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                    <label for="kt_select2_3">@lang('classes.day')<label class="text-danger">*</label></label>
                    <div style="width: 300px!important;">
                        <select class="form-control select2 select2-hidden-accessible" value="{{old('day')}}" id="kt_select2_3" name="day[]" multiple="" data-select2-id="kt_select2_3" tabindex="-1" aria-hidden="true">
                            <optgroup label="Select Schedule days">
                                @if(isset($course->day))
                                    @foreach(json_decode($course->day , true) as $day)
                                        <option value="{{$day}}" selected>{{$day}}</option>
                                    @endforeach
                                @endif
                                <option value="saturday">Saturday</option>
                                <option value="sunday">Sunday</option>
                                <option value="monday">Monday</option>
                                <option value="tuesday">Tuesday</option>
                                <option value="wednesday">Wednesday</option>
                                <option value="thursday">Thursday</option>
                                <option value="friday">Friday</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <label for="kt_timepicker_2">@lang('classes.time_start')<label class="text-danger">*</label></label>
            <div class="form-group">
                <div class="input-group timepicker">
                    <input class="form-control" name="time_start" value="{{old('time_start')??$course->time_start}}" id="kt_timepicker_2" readonly placeholder="Select time start" type="text"/>
                    <div class="input-group-append">
                           <span class="input-group-text">
                            <i class="la la-clock-o"></i>
                           </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="kt_timepicker_2">@lang('classes.time_end')<label class="text-danger">*</label></label>
                <div class="input-group timepicker">
                    <input class="form-control" name="time_end" value="{{old('time_end')??$course->time_end}}" id="kt_timepicker_2" readonly placeholder="Select time end" type="text"/>
                    <div class="input-group-append">
                       <span class="input-group-text">
                        <i class="la la-clock-o"></i>
                       </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="mentor_ar">@lang('classes.mentor_ar')<label class="text-danger">*</label></label>
                <input type="text" name="mentor_ar"value="{{old('mentor_ar')??$course->mentor_ar}}" class="form-control" id="mentor_ar" placeholder="@lang('classes.enter-arabic-mentor')" >
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="mentor_en">@lang('classes.mentor_en')<label class="text-danger">*</label></label>
                <input type="text" name="mentor_en"value="{{old('mentor_en')??$course->mentor_en}}" class="form-control" id="mentor_en" placeholder="@lang('classes.enter-english-mentor')" >
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="content_en">@lang('dashboard.text_en')<label class="text-danger">*</label></label>
                <textarea name="text_en" id="content_en" class="form-control summernote"  placeholder="@lang('dashboard.enter-english-text')" >
                     {{old('text_en')??$course->text_en}}
                </textarea>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="content_en">@lang('dashboard.text_ar')<label class="text-danger">*</label></label>
                <textarea name="text_ar" id="content_en" class="form-control summernote"  placeholder="@lang('dashboard.enter-arabic-text')" >
                     {{old('text_ar')??$course->text_ar}}
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
    <script src="{{asset_public("admin/js/pages/crud/forms/widgets/bootstrap-timepicker.js")}}"></script>

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
<script>
    // Class definition
    var KTSelect2 = function() {
    // Private functions
    var demos = function() {

    // multi select
    $('#kt_select2_3').select2({
    placeholder: "Select a state",
    });

    }

    // Public functions
    return {
    init: function() {
    demos();
    modalDemos();
    }
    };
    }();

    // Initialization
    jQuery(document).ready(function() {
    KTSelect2.init();
    });
</script>
@endsection


