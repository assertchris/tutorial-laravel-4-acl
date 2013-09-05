@extends("layout")
@section("content")
    {{ Form::open([
        "route"        => "group/add",
        "autocomplete" => "off"
    ]) }}
        {{ Form::field([
            "name"        => "name",
            "label"       => "Name",
            "form"        => $form,
            "placeholder" => "new group"
        ])}}
        {{ Form::submit("save") }}
    {{ Form::close() }}
@stop
@section("footer")
    @parent
    <script src="//polyfill.io"></script>
@stop