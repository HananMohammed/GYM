<div class="row align-items-center">
    <div class="row">
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="title_en">@lang('dashboard.title_en')<label class="text-danger">*</label></label>
                <textarea type="text" class="form-control summernote" id="title_en" name="title_en"placeholder="@lang('dashboard.enter-english-title')" >
                   {{old('title_en')??$card->title_en}}
                </textarea>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="form-group">
                <label for="title_ar">@lang('dashboard.title_ar')<label class="text-danger">*</label></label>
                <textarea type="text" name="title_ar" class="form-control summernote" id="title_ar" placeholder="@lang('dashboard.enter-arabic-title')" >
                    {{old('title_ar')??$card->title_ar}}
                </textarea>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <label class="col-form-label text-right col-lg-4 col-sm-12 " >Select Icon<label class="text-danger">*</label></label><br>
            <select class="form-control select2 col-lg-12 col-sm-12" id="kt_select2_1" name="icon">
                <option value="">__('cards.select-icon')</option>
                @foreach($icons as $icon)
                    <option value="{{$icon->id}}"  @if(!empty($card->toArray())) @if($icon->id === $card->icon()->pluck('id')[0]) selected @endif @endif>{{$icon->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-12 col-sm-12">
            <div class="form-group">
                <label for="content_en">@lang('dashboard.text_en')<label class="text-danger">*</label></label>
                <textarea name="text_en" id="content_en" class="form-control summernote"  placeholder="@lang('dashboard.enter-english-text')" >
                     {{old('text_en')??$card->text_en}}
                </textarea>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12">
            <div class="form-group">
                <label for="content_en">@lang('dashboard.text_ar')<label class="text-danger">*</label></label>
                <textarea name="text_ar" id="content_en" class="form-control summernote"  placeholder="@lang('dashboard.enter-arabic-text')" >
                     {{old('text_ar')??$card->text_ar}}
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


