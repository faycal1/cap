<div class="form-group">
{!! Form::label('expirience', 'Experience professionnelle', ['class' => 'col-lg-2 control-label']) !!}
<div class="col-lg-10">
    <table class="table" >
    	<thead>
	    	<tr>
		    	<th style="width:15%;" >Date de Debut</th>
		    	<th style="width:15%;">Date de Fin</th>
		    	<th style="width:15%;">Lieu</th>
		    	<th style="width:15%;">Institution/Entreprise</th>
		    	<th style="width:10%;">Position</th>
		    	<th style="width:25%;">Description</th>
		    	<th style="width:5%;" ></th>
	    	</tr>
    	</thead>
    	<tbody id="expirienceBody">
	    	<tr class="expirienceClonnable" >
	    		<td>{!! Form::text('expirience[start][]', null, ['required' => 'required' ,'class' => 'form-control expiriencestart', 'placeholder ' => 'Date de Debut']) !!}</td>
	    		<td>{!! Form::text('expirience[end][]', null, ['required' => 'required' , 'class'=> 'form-control expirienceend', 'placeholder' => 'Date de Fin']) !!}</td>
	    		<td>{!! Form::text('expirience[location][]', null, ['required' => 'required' , 'class'=> 'form-control', 'placeholder' => 'Lieu)']) !!}</td>
	    		<td>{!! Form::text('expirience[company][]', null, ['required' => 'required' , 'class'=> 'form-control', 'placeholder' => 'Institution/Entreprise']) !!}</td>
	    		<td>{!! Form::text('expirience[position][]', null, ['required' => 'required' , 'class'=> 'form-control', 'placeholder' => 'Position']) !!}</td>
	    		<td>{!! Form::text('expirience[denscription][]', null, ['required' => 'required' , 'class'=> 'form-control', 'placeholder' => 'Description']) !!}</td>
	    		<td>
	    		<a class="addExpirience" href="#"><i class="fa fa-plus fa-2x" ></i></a>
	    		<a class="removeExpirience hide" href="#"><i class="fa fa-minus fa-2x" ></i></a>
	    		</td>
	    	</tr>
    	</tbody>    	
    </table>
</div>
</div><!--form control-->