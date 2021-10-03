<!-- Payment Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Payment_Title', 'Payment Title:') !!}
    {!! Form::text('Payment_Title', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Description', 'Description:') !!}
    {!! Form::text('Description', null, ['class' => 'form-control','maxlength' => 200,'maxlength' => 200]) !!}
</div>

<!-- Product Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product_id', 'Product Id:') !!}
    {!! Form::number('Product_id', null, ['class' => 'form-control']) !!}
</div>