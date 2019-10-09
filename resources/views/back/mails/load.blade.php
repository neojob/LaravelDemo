<div class="panel-body" id="load"  style="position: relative;">
    <table class="table">
        <thead>
        <tr>
            <th>#ID</th>
            <th>Email</th>
            <th>Company</th>
            <th>Body</th>
            <th>Visited</th>
            <th>Created</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->email }}</td>
                <td>{{ $item->company }}</td>
                <td>{{ $item->body }}</td>
                <td><strong>{{ $item->status == 1 ? 'Visited' : 'Not Visited'}}</strong></td>
                <td>{{ $item->created_at }}</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Actions <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('adminMailsDetails',['id'=>$item->id]) }}"><i class="fa fa-pencil"></i> Details</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('adminMailsDelete',['id'=>$item->id]) }}"><i class="fa fa-times"></i> Delete</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pagination-numbers-list">{{ $data->links('vendor.pagination.admin-default') }}</div>
</div>