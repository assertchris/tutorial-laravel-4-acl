@extends("layout")
@section("content")
    {{ Form::open([
        "url"          => URL::full(),
        "autocomplete" => "off"
    ]) }}
        {{ Form::field([
            "name"        => "name",
            "label"       => "Name",
            "form"        => $form,
            "placeholder" => "new group",
            "value"       => $group->name
        ])}}
        @include("user/assign")
        @include("resource/assign")
        {{ Form::submit("save") }}
    {{ Form::close() }}
@stop
@section("footer")
    @parent
    <script src="//polyfill.io"></script>
@stop