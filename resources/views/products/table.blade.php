<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
            <tr>
                <th>Product Name</th>
        <th>Brand Name</th>
        <th>Price Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $products)
            <tr>
                <td>{{ $products->Product_name }}</td>
            <td>{{ $products->Brand_name }}</td>
            <td>{{ $products->Price_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['products.destroy', $products->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('products.show', [$products->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('products.edit', [$products->id]) }}" class='btn btn-default btn-xs'>
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
