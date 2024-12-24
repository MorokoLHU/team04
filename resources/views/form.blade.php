<div class="form-group">
    {!! Form::label('farm_name', '農場別:', ['class' => 'bg']) !!}
    {!! Form::text('farm_name', null, ['class' => 'form-control white-bg']) !!}
</div>
<div class="form-group">
    {!! Form::label('plain_forest_area_hectares', '平地造林面積公頃:', ['class' => 'bg']) !!}
    {!! Form::text('plain_forest_area_hectares', null, ['class' => 'form-control white-bg']) !!}
</div>
<div class="form-group">
    {!! Form::label('public_forest_area_hectares', '全民造林面積公頃:', ['class' => 'bg']) !!}
    {!! Form::text('public_forest_area_hectares', null, ['class' => 'form-control white-bg']) !!}
</div>
<div class="form-group">
    {!! Form::label('self_funded_forest_area_hectares', '自費造林面積公頃:', ['class' => 'bg']) !!}
    {!! Form::text('self_funded_forest_area_hectares', null, ['class' => 'form-control white-bg']) !!}
</div>
<div class="form-group">
    {!! Form::label('eco_forest_park_area_hectares', '環保林園大道面積公頃:', ['class' => 'bg']) !!}
    {!! Form::text('eco_forest_park_area_hectares', null, ['class' => 'form-control white-bg']) !!}
</div>
<div class="form-group">
    {!! Form::label('total_area_hectares', '合計面積公頃:', ['class' => 'bg']) !!}
    {!! Form::text('total_area_hectares', null, ['class' => 'form-control white-bg']) !!}
</div>
<div>
    <br>
    {!! Form::submit($submit_text, ['class' => 'bth bth-primary form-control'])!!}
</div>