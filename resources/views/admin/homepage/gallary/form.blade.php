<!-- Modal-->
<div class="modal fade" id="gallaryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang('gallary.upload')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-custom card-stretch">
                    <div class="card-body"><form method="post" action="{{route('admin.gallaries.store')}}" enctype="multipart/form-data">
                                @csrf
                        <div class="form-group">
                            <label for="name">@lang('gallary.name')<label class="text-danger">*</label></label>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control " id="name" placeholder="@lang('gallary.name')" >
                         </div>
                        <div class="form-group " type="file" name="image">
                            <label class="col-form-label text-lg-left">@lang('gallary.image')<label class="text-danger">*</label>  </label>
                            <div  style="width:80%;height: auto;">
                                <label for="upload-photo" style="cursor: pointer;"  class="w-100">
                                    <div class="dropzone dropzone-default">
                                        {{--                                        @if( empty($offer) )--}}
                                        <div class="dropzone-msg2 dz-message">
                                            <h3 class="dropzone-msg-title">@lang('gallary.zone-click')</h3>
                                            <span class="dropzone-msg-desc">@lang('gallary.zone-select')</span>
                                        </div>
                                        <img id="outputImage" width="200" height="150px" style="border-radius: 2%;display: none" />
                                        {{--                                        @else--}}
                                        {{--                                            <img id="outputImage" width="200" src="{{asset_public('image/'.$offer->single_image)}}"  height="150px" style="border-radius: 2%;" />--}}
                                        {{--                                        @endif--}}
                                    </div>
                                </label>
                                <input type="file"  name="image" id="upload-photo"  onchange="loadFile(event)" hidden>
                            </div>
                        </div>
                        <div class="modal-footer m-auto">
                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">@lang('dashboard.close')</button>
                            <input type="submit" class="btn btn-primary font-weight-bold" value="@lang('dashboard.submit')">
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
