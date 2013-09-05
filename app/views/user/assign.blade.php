<div class="assign">
    @foreach ($users as $user)
        <div class="checkbox">
            {{ Form::checkbox("user_id[]", $user->id, $group->users->contains($user->id)) }}
            {{ $user->username }}
        </div>
    @endforeach
</div>