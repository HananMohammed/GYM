@extends('admin.layouts.app')

@section('title', 'Classes Features')

@section('content')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">@lang('classes.features')</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.dashboard')}}" class="text-muted">@lang('dashboard.dashboard')</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.features.index')}}" class="text-muted">@lang('classes.features')</a>
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
    <!-- Start Modal create -->
    <div class="modal fade" id="featuresCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">@lang('classes.new-feature')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.features.store')}}">
                        @csrf
                       <div class="row">
                           <div class="form-group col-lg-6">
                               <label for="category">@lang('classes.category')<label class="text-danger">*</label></label>
                               <select name="category"value="{{old('category')}}" class="form-control category" id="category">
                                   <option selected disabled>@lang('classes.categories')</option>
                                   @foreach($categories as $category)
                                       <option value="{{$category->id}}">{{$category->name}}</option>
                                   @endforeach
                               </select>
                           </div>
                           <div class="form-group col-lg-6">
                               <label for="course">@lang('classes.courses')<label class="text-danger">*</label></label>
                               <select name="course" value="{{old('course')}}" class="form-control course" id="course">
                                   <option selected disabled>@lang('classes.courses')</option>
                               </select>
                           </div>
                           <div class="form-group col-lg-6">
                               <label for="kt_touchspin_4">@lang('classes.duration')<label class="text-danger">*</label></label>
                               <input id="kt_touchspin_4" name="duration" type="text" class="form-control bootstrap-touchspin-vertical-btn" value="{{old('duration')}}" placeholder="@lang('classes.num-days')" style="padding: 25px;"/>
                           </div>
                           <div class="form-group col-lg-6">
                               <label for="kt_touchspin_4">@lang('classes.students')<label class="text-danger">*</label></label>
                               <input id="kt_touchspin_4" name="students" type="text" class="form-control bootstrap-touchspin-vertical-btn" value="{{old('studenets')}}"placeholder="@lang('classes.num-students')" style="padding: 25px;"/>
                           </div>
                           <div class="form-group col-lg-6">
                               <label for="kt_touchspin_3">@lang('classes.price')<label class="text-danger">*</label></label>
                               <input id="kt_touchspin_3" type="text" class="form-control" value="{{old('price')}}" name="price" placeholder="@lang('classes.enter-price')"/>
                           </div>
                           <div class="form-group col-lg-6">
                               <label for="shift">@lang('classes.shift')<label class="text-danger">*</label></label>
                               <select name="shift" value="{{old('shift')}}" class="form-control" id="shift">
                                   <option selected disabled>@lang('classes.select-shift')</option>
                                   <option value="morning">@lang('classes.morning')</option>
                                   <option value="evening">@lang('classes.evening')</option>
                               </select>
                           </div>
                       </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary font-weight-bold">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Create-->
    <!-- Start Modal Edit-->
    <div class="modal fade" id="featuresCategoryEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">@lang('classes.new-feature')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="formEdit">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="categoryEdit">@lang('classes.category')<label class="text-danger">*</label></label>
                                <select name="category" class="form-control category" id="categoryEdit">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="courseEdit">@lang('classes.courses')<label class="text-danger">*</label></label>
                                <select name="course"  class="form-control course" id="courseEdit">
                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="kt_touchspin_4">@lang('classes.duration')<label class="text-danger">*</label></label>
                                <input id="kt_touchspin_4" name="duration" type="text" class="form-control bootstrap-touchspin-vertical-btn durationEdit" placeholder="@lang('classes.num-days')" style="padding: 25px;"/>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="kt_touchspin_4">@lang('classes.students')<label class="text-danger">*</label></label>
                                <input id="kt_touchspin_4" name="students" type="text" class="form-control bootstrap-touchspin-vertical-btn studentEdit" placeholder="@lang('classes.num-students')" style="padding: 25px;"/>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="kt_touchspin_3">@lang('classes.price')<label class="text-danger">*</label></label>
                                <input id="kt_touchspin_3" type="text" class="form-control priceEdit" name="price" placeholder="@lang('classes.enter-price')"/>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="shiftEdit">@lang('classes.shift')<label class="text-danger">*</label></label>
                                <select name="shift" class="form-control" id="shiftEdit">
                                    <option value="morning">@lang('classes.morning')</option>
                                    <option value="evening">@lang('classes.evening')</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary font-weight-bold">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Edit-->
    <div class="d-flex flex-column-fluid mt-5" id="kt_content">
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
            <!--begin::Card-->
            <div class="card card-custom gutter-b" style="width: 100%;">
                <div class="card-header flex-wrap py-3">
                    <div class="card-title">
                        <h3 class="card-label">@lang('classes.features')</h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="javascript:void(0)" class="btn btn-primary font-weight-bolder d-flex" data-toggle="modal" data-target="#featuresCategory" >
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <circle fill="#000000" cx="9" cy="15" r="6"></circle>
                                <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"></path>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>@lang('classes.new-feature')</a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-checkable " id="kt_datatable">
                                    <thead>
                                    <tr role="row">
                                        <th>@lang('dashboard.id')</th>
                                        <th>@lang('classes.categories')</th>
                                        <th>@lang('classes.courses')</th>
                                        <th>@lang('classes.duration')</th>
                                        <th>@lang('classes.students')</th>
                                        <th>@lang('classes.shift')</th>
                                        <th>@lang('classes.price')</th>
                                        <th>@lang('dashboard.created-by')</th>
                                        <th>@lang('dashboard.actions')</th>
                                    </tr>
                                    </thead>

                                    @if(count($features)>0)
                                        <tbody>
                                        @foreach($features as $feature)
                                            <tr>
                                                <td>{{$feature->id}}</td>
                                                @if(app()->getLocale()=="en")
                                                    <td>{{$feature->category()->pluck("name_en")[0]}}</td>
                                                    <td>{{$feature->courses()->pluck("name_en")[0]}}</td>
                                                @else
                                                    <td>{{$feature->category()->pluck("name_ar")[0]}}</td>
                                                    <td>{{$feature->courses()->pluck("name_ar")[0]}}</td>
                                                @endif
                                                <td>{{$feature->duration}}</td>
                                                <td>{{$feature->students}}</td>
                                                <td>{{$feature->shift}}</td>
                                                <td>{{$feature->price}}</td>
                                                <td>{{$feature->user->name}}</td>
                                                <td nowrap="nowrap">{{ $feature->id }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection
@section('scripts')
    <script src="{{asset_public('admin/js/pages/crud/forms/widgets/bootstrap-touchspin.js')}}"></script>
    <script>
     $(".category").on("change", function (event) {
        event.preventDefault();
        let category_id = this.value ;
         $.ajax({
             type: "GET",
             url: '{{route('admin.features.create')}}',
             data: {
                 id: category_id
             }
         }).done(function( courses ) {

             $(".course").find("option")
                         .remove()
                         .end()
                         .append(`<option selected disabled>@lang('classes.select-course')</option>`);

             courses.forEach(function (item ,index) {
                 $(".course").append(`<option value="${item.id}">${item.name}</option>`)
             })

         });
     })
    </script>
    <script>
        $('#featuresCategoryEdit').on('show.bs.modal', function (event) {
            let feature_id = event.relatedTarget.getAttribute('data-featureId') ;
            let actionUrl = currentLocation+"/"+feature_id
            let editUrl = currentLocation+"/"+feature_id+"/edit"
            let formAction = currentLocation+"/"+feature_id

            $.ajax({
                type: "GET",
                url: editUrl,
                data: {
                    id:feature_id
                }
            }).done(function( msg ) {

                  $("#categoryEdit").attr("value" ,msg.category )
                                    .append(`<option value="${msg.category}" selected >${msg.category}</option>`)

                  $("#courseEdit").attr("value" ,msg.course )
                                  .append(`<option value="${msg.course}" selected>${msg.course}</option>`)
                  $("#shiftEdit").attr("value" ,msg.data[0].shift)
                                 .prepend(`<option value="${msg.data[0].shift}" selected>${msg.data[0].shift}</option>`)

                  $(".durationEdit").val(msg.data[0].duration)
                  $(".studentEdit").val(msg.data[0].students)
                  $(".priceEdit").val(msg.data[0].price)
                  $("#formEdit").attr("action",formAction)


            });
        })

    </script>
    <script src="{{ asset_public('admin/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script type="text/javascript">
        $( document ).ready(function() {

// begin first table
            var table = $('#kt_datatable');
            table.DataTable({
                responsive: true,
                retrieve: true,
                paging: true,
                // DOM Layout settings
                dom: `<'row'<'col-sm-12'tr>>
<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,

                lengthMenu: [5, 10, 25, 50],

                pageLength: 10,

                language: {
                    'lengthMenu': 'Display _MENU_',
                },

                // Order settings
                order: [[1, 'desc']],

                headerCallback: function(thead, data, start, end, display) {
                    thead.getElementsByTagName('th')[0].innerHTML = `
    <label class="checkbox checkbox-single">
        <input type="checkbox" value="" class="group-checkable"/>
        <span></span>
    </label>`;
                },
                columnDefs: [
                    {
                        targets: 0,
                        title: 'ID',
                        width: '30px',
                        className: 'dt-left',
                        orderable: false,
                        render: function(data, type, full, meta) {
                            return `
        <label class="checkbox checkbox-single">
            <input type="checkbox" value="" class="checkable"/>
            <span></span>
        </label>`;
                        },
                    },
                    {
                        targets: -1,
                        orderable: false,
                        width: '125px',
                        render: function(data, type, full, meta) {
                            return `
                    <a href= "javascript:void(0)" class="btn btn-sm btn-clean btn-icon mr-2" data-featureId="${data}" data-toggle="modal" data-target="#featuresCategoryEdit" title="Edit details">
                    <span class="svg-icon svg-icon-md">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                        </g>
                    </svg>
                </span>
            </a>

            <a href="${currentLocation}/features/${data}"class="btn btn-sm btn-clean btn-icon" title="Delete" onclick="event.preventDefault();
                        document.getElementById('delete-operator-form-${data}').submit();">
                <span class="svg-icon svg-icon-md">
                    <svg class="delete" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                        </g>
                    </svg>
                </span>
                <form id="delete-operator-form-${data}" action="${currentLocation}/${data}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
                        </a>`;
                        },
                    },
                    {
                        targets: 2,
                        // title:'Title' ,
                        width: '75px',
                        render: function(data, type, full, meta) {
                            var status = {
                                0: {'title': 'No', 'class': ' label-light-danger'},
                                1: {'title': 'Yes', 'class': ' label-light-primary'},
                            };
                            if (typeof status[data] === 'undefined') {
                                return data;
                            }
                            return '<span class="label label-lg font-weight-bold' + status[data].class + ' label-inline">' + status[data].title + '</span>';
                        },
                    },
                ],
            });

        });
    </script>
    @if(session()->has('success'))
        <script>Swal.fire("Good Job", "{{session()->get('success')}}", "success");</script>
    @endif
@endsection
