<div class="panel-body" id="load"  style="position: relative;">
    <table class="table">
        <thead>
        <tr>
            <th>#ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->first_name }}</td>
                <td>{{ $item->last_name }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Actions <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('adminUserDelete').'/'.$item->id }}"><i class="fa fa-times"></i> Delete</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pagination-numbers-list">{{ $data->links('vendor.pagination.admin-default') }}</div>
</div>