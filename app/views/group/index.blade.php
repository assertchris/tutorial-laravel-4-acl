@extends("layout")
@section("content")
    @if (count($groups))
        <table>
            <tr>
                <th>name</th>
                <th>&nbsp;</th>
            </tr>
            @foreach ($groups as $group)
                <tr>
                    <td>{{ $group->name }}</td>
                    <td>
                        @if (allowed("group/edit"))
                            <a href="{{ URL::route("group/edit") }}?id={{ $group->id }}">edit</a>
                        @endif
                        @if (allowed("group/delete"))
                            <a href="{{ URL::route("group/delete") }}?id={{ $group->id }}" class="confirm" data-confirm="Are you sure you want to delete this group?">delete</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <p>There are no groups.</p>
    @endif
    @if (allowed("group/add"))
        <a href="{{ URL::route("group/add") }}">add group</a>
    @endif
@stop
@section("footer")
    @parent
    <script src="/js/jquery.js"></script>
    <script src="/js/layout.js"></script>
@stop