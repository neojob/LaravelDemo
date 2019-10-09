@if(count($data) > 0)
    @foreach($data as $item)
    <tr>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->first_name }}</td>
        <td>{{ $item->last_name }}</td>
        <td>{{ $item->email }}</td>
        <td>
        <td>
            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Actions <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('adminUserDelete',['id'=>$item->id]) }}"><i class="fa fa-times"></i> Delete</a></li>
                </ul>
            </div>
        </td>
    </tr>
    @endforeach
@endif