@extends("layouts.admin")
@section("page_title", 'إضافة خبر جديد')
@section("page_header_title", "")
@section("page_level_styles")
<link href="{!! url('public/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') !!}" rel="stylesheet" type="text/css" />
@end
@section("page_level_script_plugins")
<script src="{!! url('public/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') !!}" type="text/javascript"></script>
<script src="{!! url('public/assets/global/plugins/jquery-validation/js/jquery.validate.min.js') !!}" type="text/javascript"></script>
<script src="{!! url('public/assets/global/plugins/jquery-validation/js/additional-methods.min.js') !!}" type="text/javascript"></script>
@stop
@section("page_level_scripts")
{{--  <script src="{!! url('public/assets/admin/pages/scripts/form-validation-md.min.js') !!}" type="text/javascript"></script>  --}}
<script src="{!! url('public/assets/mine/generic.js') !!}" type="text/javascript"></script>
@stop
@section("content")
<div class="row">
    <div class="col-md-12">
        <!-- Begin: life time stats -->
        <div class="portlet light portlet-fit portlet-datatable bordered">
            <div class="portlet-body">
                <div class="tabbable-line">
                    <ul class="nav nav-tabs nav-tabs-lg">
                        <li class="active">
                            <a href="#tab_1" data-toggle="tab"> Basic Data </a>
                        </li>
                        <li>
                            <a href="#tab_2" data-toggle="tab"> Contact us</a>
                        </li>
                        <li>
                            <a href="#tab_3" data-toggle="tab"> Social Media </a>
                        </li>
                    </ul>
                    @php($action = url('/admin/settings'))
                    <!-- BEGIN FORM   -->
                    <form action="{{ $action }}" enctype="multipart/form-data" class="form-horizontal" id="current_form" method="post">
                        {{ csrf_field() }}
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN VALIDATION STATES-->
                                    <div class="portlet light portlet-fit portlet-form bordered">
                                        <div class="portlet-body">
                                                <div class="form-body">
                                                    <div class="alert alert-danger display-hide">
                                                        <button class="close" data-close="alert"></button> لديك بعض المشاكل, من فضلك قم بالمراجعة أولا </div>
                                                    <div class="alert alert-success display-hide">
                                                        <button class="close" data-close="alert"></button> تم إدخال البيانات بصورة صحيحة  </div>

                                                    <div class="form-group form-md-line-input">
                                                        <label class="col-md-2 control-label" for="form_control_1">Site Title
                                                            <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" placeholder="" name="title" id="title" value="{{ $settings->title }}">
                                                            <div class="form-control-focus"> </div>
                                                            <span class="help-block">Title</span>
                                                        </div>
                                                    </div>


                                                    <div class="form-group form-md-line-input">
                                                        <label class="col-md-2 control-label" for="form_control_1">Logo
                                                            <span class="required"></span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                                                                <img src="{{ url('/public/uploads/settings/'.$settings->logo) }}" style="width: 200px;height: 150px;" alt="">
                                                                <div>
                                                                    <span class="btn red btn-outline btn-file">
                                                                        <span class="fileinput-new"> Choose photo </span>
                                                                        <span class="fileinput-exists"> Change </span>
                                                                        <input type="file" name="logo" id="logo" > </span>
                                                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group form-md-line-input">
                                                        <label class="col-md-2 control-label" for="form_control_1">Keywords
                                                            <span class="required"></span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control" placeholder="" name="keywords" id="keywords" rows="5">{{ $settings->keywords }}</textarea>
                                                            <div class="form-control-focus"> </div>
                                                            <span class="help-block">keywords</span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group form-md-line-input">
                                                        <label class="col-md-2 control-label" for="form_control_1">Description
                                                            <span class="required"></span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control" placeholder="" name="description" id="description" rows="5">{{ $settings->description }}</textarea>
                                                            <div class="form-control-focus"> </div>
                                                            <span class="help-block">description</span>
                                                        </div>
                                                    </div>

                                                </div>

                                            <!-- END FORM-->
                                        </div>
                                    </div>
                                    <!-- END VALIDATION STATES-->
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane" id="tab_2">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN VALIDATION STATES-->
                                    <div class="portlet light portlet-fit portlet-form bordered">
                                        <div class="portlet-body">
                                                <div class="form-body">
                                                    <div class="alert alert-danger display-hide">
                                                        <button class="close" data-close="alert"></button> لديك بعض المشاكل, من فضلك قم بالمراجعة أولا </div>
                                                    <div class="alert alert-success display-hide">
                                                        <button class="close" data-close="alert"></button> تم إدخال البيانات بصورة صحيحة  </div>

                                                    <div class="form-group form-md-line-input">
                                                        <label class="col-md-2 control-label" for="form_control_1">Phone
                                                            <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" value="{{ $settings->phone }}" placeholder="" name="phone" id="phone">
                                                            <div class="form-control-focus"> </div>
                                                            <span class="help-block">Phone</span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group form-md-line-input">
                                                        <label class="col-md-2 control-label" for="form_control_1">Fax
                                                            <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" placeholder="" value="{{ $settings->fax }}" name="fax" id="fax">
                                                            <div class="form-control-focus"> </div>
                                                            <span class="help-block">Fax</span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group form-md-line-input">
                                                        <label class="col-md-2 control-label" for="form_control_1">Email
                                                            <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" placeholder="" value="{{ $settings->email }}" name="email" id="email">
                                                            <div class="form-control-focus"> </div>
                                                            <span class="help-block">Email</span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group form-md-line-input">
                                                        <label class="col-md-2 control-label" for="form_control_1">Address
                                                            <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" placeholder="" value="{{ $settings->address }}" name="Address" id="address">
                                                            <div class="form-control-focus"> </div>
                                                            <span class="help-block">Address</span>
                                                        </div>
                                                    </div>

                                                </div>

                                            <!-- END FORM-->
                                        </div>
                                    </div>
                                    <!-- END VALIDATION STATES-->
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane" id="tab_3">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN VALIDATION STATES-->
                                    <div class="portlet light portlet-fit portlet-form bordered">
                                        <div class="portlet-body">
                                                <div class="form-body">
                                                    <div class="alert alert-danger display-hide">
                                                        <button class="close" data-close="alert"></button> لديك بعض المشاكل, من فضلك قم بالمراجعة أولا </div>
                                                    <div class="alert alert-success display-hide">
                                                        <button class="close" data-close="alert"></button> تم إدخال البيانات بصورة صحيحة  </div>

                                                    <div class="form-group form-md-line-input">
                                                        <label class="col-md-2 control-label" for="form_control_1">Facebook
                                                            <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" placeholder="" value="{{ $settings->facebook }}" name="facebook" id="facebook">
                                                            <div class="form-control-focus"> </div>
                                                            <span class="help-block">Facebook</span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group form-md-line-input">
                                                        <label class="col-md-2 control-label" for="form_control_1">Twitter
                                                            <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" placeholder="" value="{{ $settings->twitter }}" name="twitter" id="twitter">
                                                            <div class="form-control-focus"> </div>
                                                            <span class="help-block">Twitter</span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group form-md-line-input">
                                                        <label class="col-md-2 control-label" for="form_control_1">Youtube
                                                            <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" placeholder="" name="youtube" value="{{ $settings->youtube }}" id="youtube">
                                                            <div class="form-control-focus"> </div>
                                                            <span class="help-block">Youtube</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            <!-- END FORM-->
                                        </div>
                                    </div>
                                    <!-- END VALIDATION STATES-->
                                </div>
                            </div>
                        </div>



                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>


                    </div>
                </div>
            </div>
        </div>
        <!-- End: life time stats -->
    </div>
</div>
@stop
