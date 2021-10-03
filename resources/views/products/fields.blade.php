<!-- Product Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product_name', 'Product Name:') !!}
    {!! Form::text('Product_name', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Brand Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Brand_name', 'Brand Name:') !!}
    {!! Form::text('Brand_name', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Price Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Price_id', 'Price Id:') !!}
    {!! Form::number('Price_id', null, ['class' => 'form-control']) !!}
</div>