

{!! Form::open(['route' => 'cv.store', 'files'=>true, 'id'=>'formCv', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) !!}

<div class="form-group">
{!! Form::label('name', 'Nom', ['class' => 'col-lg-2 control-label']) !!}
<div class="col-lg-10">
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom' , 'required' => 'required'] ) !!}
</div>
</div><!--form control-->

<div class="form-group">
{!! Form::label('pername', 'Prénom', ['class' => 'col-lg-2 control-label']) !!}
<div class="col-lg-10">
    {!! Form::text('pername', null, ['required' => 'required' ,'class' => 'form-control', 'placeholder' => 'Prénom']) !!}
</div>
</div><!--form control-->

<div class="form-group">
{!! Form::label('birthday', 'Date de naissance', ['class' => 'col-lg-2 control-label']) !!}
<div class="col-lg-10">
    {!! Form::text('birthday', null, [ 'required' => 'required' ,'id'=>"birthday" ,'class' => 'form-control', 'placeholder' => 'Date de naissance']) !!}
</div>
</div><!--form control-->

<div class="form-group">
{!! Form::label('email', 'Email', ['class' => 'col-lg-2 control-label']) !!}
<div class="col-lg-10">
    {!! Form::email('email', null, [ 'required' => 'requiredl' ,'id'=>"email" ,'class' => 'form-control', 'placeholder' => 'Email']) !!}
</div>
</div><!--form control-->

<div class="form-group">
{!! Form::label('phone', 'Téléphone', ['class' => 'col-lg-2 control-label']) !!}
<div class="col-lg-10">
    {!! Form::text('phone', null, ['required' => 'required' , 'class' => 'form-control', 'placeholder' => 'Téléphone']) !!}
</div>
</div><!--form control-->

<div class="form-group">
{!! Form::label('adress', 'Adresse', ['class' => 'col-lg-2 control-label']) !!}
<div class="col-lg-10">
    {!! Form::textarea('adress', null, ['required' => 'required' , 'size' => '30x3' ,'class' => 'form-control', 'placeholder' => 'Adresse']) !!}
</div>
</div><!--form control-->

 @include('frontend.cv.diploma')
 @include('frontend.cv.lang')

<div class="form-group">
{!! Form::label('affilation', 'Affiliation à une organisation professionnelle', ['class' => 'col-lg-2 control-label']) !!}
<div class="col-lg-10">
    {!! Form::textarea('affilation', null, ['required' => 'required' , 'size' => '30x3' ,'class' => 'form-control', 'placeholder' => 'Affiliation à une organisation professionnelle']) !!}
</div>
</div>

<div class="form-group">
{!! Form::label('otheskills', 'Autre compétences', ['class' => 'col-lg-2 control-label']) !!}
<div class="col-lg-10">
    {!! Form::textarea('otheskills', null, ['required' => 'required' ,'size' => '30x3' ,'class' => 'form-control', 'placeholder' => 'Autre compétences']) !!}
</div>
</div>

<div class="form-group">
{!! Form::label('currentsituation', 'Situation actuelle', ['class' => 'col-lg-2 control-label']) !!}
<div class="col-lg-10">
    {!! Form::textarea('currentsituation', null, ['required' => 'required' ,'size' => '30x3' ,'class' => 'form-control', 'placeholder' => 'Situation actuelle']) !!}
</div>
</div>

<div class="form-group">
{!! Form::label('anciente', "Années d'ancienneté auprés de l'employeur", ['class' => 'col-lg-2 control-label']) !!}
<div class="col-lg-10">
    {!! Form::select('anciente', [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20], ['required' => 'required' , 'class' => 'form-control', 'placeholder' => 'Ecrit']) !!}
</div>
</div>

<div class="form-group">
{!! Form::label('qualification', 'Qualifications principales', ['class' => 'col-lg-2 control-label']) !!}
<div class="col-lg-10">
    {!! Form::textarea('qualification', null, ['required' => 'required' , 'size' => '30x3' ,'class' => 'form-control', 'placeholder' => 'Qualifications principales']) !!}
</div>
</div>

@include('frontend.cv.expirience')
<div class="form-group">
{!! Form::label('otherinformation', 'Autre Informations pertinenetes', ['class' => 'col-lg-2 control-label']) !!}
<div class="col-lg-10">
    {!! Form::textarea('otherinformation', null, ['size' => '30x3' ,'class' => 'form-control', 'placeholder' => 'Autre Informations pertinenetes (ex: références de publications)']) !!}
</div>
</div>

@include('frontend.cv.matrix')

<div class="well">
            <div class="pull-right">
                <input type="submit" name="enregistrer" class="btn btn-success btn-xs" value="Enregistrer" /> 
            </div>
            <div class="clearfix"></div>
</div><!--well--> 

{!! Form::close() !!}