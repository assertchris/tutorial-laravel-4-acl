<div class="assign">
    @foreach ($resources as $resource)
        <div class="checkbox">
            {{ Form::checkbox("resource_id[]", $resource->id, $group->resources->contains($resource->id)) }}
            {{ $resource->name }}
        </div>
    @endforeach
</div>