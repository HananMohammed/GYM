<div class="row align-items-center">
    <div class="row">
        <div class="col-lg-3 col-sm-12">
            <div class="form-group">
                <label for="name_en">@lang('dashboard.name_en')<label class="text-danger">*</label></label>
                <input type="text" class="form-control" value="{{old('name_en')??$opinion->name_en}}" id="name_en" name="name_en" placeholder="@lang('dashboard.enter-english-name')" >
            </div>
        </div>
        <div class="col-lg-3 col-sm-12">
            <div class="form-group">
                <label for="name_ar">@lang('dashboard.name_ar')<label class="text-danger">*</label></label>
                <input type="text" name="name_ar"value="{{old('name_ar')??$opinion->name_ar}}" class="form-control" id="name_ar" placeholder="@lang('dashboard.enter-arabic-name')" >
            </div>
        </div>
        <div class="col-lg-3 col-sm-12">
            <div class="form-group">
                <label for="role_en">@lang('dashboard.role_en')<label class="text-danger">*</label></label>
                <input type="text" class="form-control" value="{{old('role_en')??$opinion->role_en}}" id="role_en" name="role_en" placeholder="@lang('dashboard.enter-english-role')" >
            </div>
        </div>
        <div class="col-lg-3 col-sm-12">
            <div class="form-group">
                <label for="role_ar">@lang('dashboard.role_ar')<label class="text-danger">*</label></label>
                <input type="text" name="role_ar"value="{{old('role_ar')??$opinion->role_ar}}" class="form-control" id="role_ar" placeholder="@lang('dashboard.enter-arabic-role')" >
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="title_en">@lang('dashboard.title_en')<label class="text-danger">*</label></label>
                <input type="text" class="form-control" value="{{old('title_en')??$opinion->title_en}}" id="title_en" name="title_en" placeholder="@lang('dashboard.enter-english-title')" >
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="title_ar">@lang('dashboard.title_ar')<label class="text-danger">*</label></label>
                <input type="text" name="title_ar"value="{{old('title_ar')??$opinion->title_ar}}" class="form-control" id="title_ar" placeholder="@lang('dashboard.enter-arabic-title')" >
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="counter">@lang('dashboard.counter')<label class="text-danger">*</label></label>
                <input type="number" name="counter"value="{{old('counter')??$opinion->counter}}" class="form-control" id="counter" placeholder="@lang('dashboard.enter-counter')" >
            </div>
        </div>
         <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="content_en">@lang('dashboard.text_en')<label class="text-danger">*</label></label>
                <textarea name="text_en" id="content_en" class="form-control summernote"  placeholder="@lang('dashboard.enter-english-text')" >
                     {{old('text_en')??$opinion->text_en}}
                </textarea>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="content_en">@lang('dashboard.text_ar')<label class="text-danger">*</label></label>
                <textarea name="text_ar" id="content_en" class="form-control summernote"  placeholder="@lang('dashboard.enter-arabic-text')" >
                     {{old('text_ar')??$opinion->text_ar}}
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
        // Class definition
        var KTSelect2 = function() {
            // Private functions
            var demos = function() {
                // basic
                $('#kt_select2_1').select2({
                    placeholder: "Select a state"
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
        });    </script>

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


