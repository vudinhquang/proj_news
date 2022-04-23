@extends('admin.main')
@php
use App\Helpers\Form as FormTemplate;
use App\Helpers\Template as Template;

$formInputAttr = config('zvn.template.form_input');
$formLabelAttr = config('zvn.template.form_label');

$statusValue = ['default' => 'Select status',
                  'active' => config('zvn.template.status.active.name'),
                  'inactive' => config('zvn.template.status.inactive.name')];
$inputHiddenID = Form::hidden('id', $item['id']);
$inputHiddenThumb = Form::hidden('thumb_current', $item['thumb']);

$elements = [
    [
      'label'   => Form::label('name', 'Name', $formLabelAttr),
      'element' => Form::text('name', $item['name'], $formInputAttr)
    ],
    [
      'label'   => Form::label('description', 'Description', $formLabelAttr),
      'element' => Form::text('description', $item['description'], $formInputAttr)
    ],
    [
      'label' => Form::label('status', 'Status', $formLabelAttr),
      'element' => Form::select('status', $statusValue, $item['status'], $formInputAttr)
    ],
    [
      'label' => Form::label('link', 'Link', $formLabelAttr),
      'element' => Form::text('link', $item['link'], $formInputAttr)
    ],
    [
      'element' => $inputHiddenID . $inputHiddenThumb . Form::submit('Save', ['class' => 'btn btn-success']),
      'type' => 'btn-submit'
    ]
];

@endphp
@section('content')

    @include('admin.templates.page_header', ['pageIndex' => false])

    <!--box-lists-->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                @include('admin.templates.x_title', ['title' => 'Form'])
                <div class="x_content">
                    {{ Form::open([
                        'method'         => 'POST',
                        'url'            => route("$controllerName/save"),
                        'accept-charset' => 'UTF-8',
                        'enctype'        => 'multipart/form-data',
                        'class'          => 'form-horizontal form-label-left',
                        'id'             => 'main-form'
                      ]) }}
                        {!! FormTemplate::show($elements); !!}
                        {{-- <div class="form-group">
                            <label for="thumb" class="control-label col-md-3 col-sm-3 col-xs-12">Thumb</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control col-md-6 col-xs-12" name="thumb" type="file" id="thumb">
                                <p style="margin-top: 50px;"><img src="/images/slider/LWi6hINpXz.jpeg"
                                        alt="Ưu đãi học phí" class="zvn-thumb"></p>
                            </div>
                        </div> --}}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
