<div class="table-responsive">
    <table class="table" id="services-table">
        <thead>
            <tr>
                <th>Payment Title</th>
        <th>Description</th>
        <th>Product Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($services as $services)
            <tr>
                <td>{{ $services->Payment_Title }}</td>
            <td>{{ $services->Description }}</td>
            <td>{{ $services->Product_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['services.destroy', $services->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('services.show', [$services->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('services.edit', [$services->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
