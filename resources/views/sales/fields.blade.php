<!-- Wholesale Qty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Wholesale_qty', 'Wholesale Qty:') !!}
    {!! Form::number('Wholesale_qty', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Description', 'Description:') !!}
    {!! Form::text('Description', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Product Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product_id', 'Product Id:') !!}
    {!! Form::number('Product_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Price_id', 'Price Id:') !!}
    {!! Form::number('Price_id', null, ['class' => 'form-control']) !!}
</div>