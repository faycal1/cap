
<div class="form-group">
{!! Form::label('matrix', 'Experience professionnelle', ['class' => 'col-lg-2 control-label']) !!}
<div class="col-lg-10">
    <table class="table" >
    	<thead>
	    	<tr>
		    	<th style="width:%;" >Domaine d'intenrvention</th>
		    	<th style="width:%;">Cadre d'intervention</th>
		    	<th style="width:%;">Période</th>
		    	<th style="width:%;">Société et personne de référence </th>
		    	<th style="width:%;">Appui  , Formation ,  Etudes <br></th>
		    	<th style="width:%;">Fileres Techniques</th>
		    	<th style="width:%;">Clients concérenés par mon intervention</th>
		    	<th style="width:%;" ></th>
	    	</tr>
    	</thead>
    	<tbody id="matrixBody">
	    	<tr class="matrixClonnable" >
	    		<td>{!! Form::text('matrix[domaine][]', null, ['required' => 'required' ,'class'=> 'form-control', 'placeholder' => "Domaine d'intenrvention"]) !!}</td>
	    		<td>{!! Form::text('matrix[cadre][]', null, ['required' => 'required' ,'class'=> 'form-control', 'placeholder' => 'Cadre d\'intervention']) !!}</td>
	    		<td>{!! Form::text('matrix[periode][]', null, ['required' => 'required' ,'class'=> 'form-control', 'placeholder' => 'Période)']) !!}</td>
	    		<td>{!! Form::text('matrix[reference][]', null, ['required' => 'required' ,'class'=> 'form-control', 'placeholder' => 'Société et personne de référence )']) !!}</td>
	    		<td>{!! Form::select('matrix[apui][]', ['appui'=>'Appui' , 'formation'=>'Formation' , 'etudes'=>'Etudes'], ['required' => 'required' ,'class'=> 'form-control', 'placeholder' => 'Institution/Entreprise']) !!}</td>
	    		<td>{!! Form::text('matrix[filieres][]', null, ['required' => 'required' , 'class' => 'form-control', 'placeholder' => 'Fileres Techniques']) !!}</td>
	    		<td>{!! Form::text('matrix[client][]', null, ['required' => 'required' , 'class' => 'form-control', 'placeholder' => 'Clients concérenés par mon intervention']) !!}</td>
	    		<td>
	    		<a class="addMatrix" href="#"><i class="fa fa-plus fa-2x" ></i></a>
	    		<a class="removeMatrix hide" href="#"><i class="fa fa-minus fa-2x" ></i></a>
	    		</td>
	    	</tr>
    	</tbody>    	
    </table>
</div>
</div><!--form control-->