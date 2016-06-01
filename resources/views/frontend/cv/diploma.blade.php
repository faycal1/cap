<div class="form-group">
{!! Form::label('diploma', 'Diplôme', ['class' => 'col-lg-2 control-label']) !!}
<div class="col-lg-10">
    <table class="table" >
    	<thead>
	    	<tr>
	    		<th style="width:15%;" >Institution</th>
		    	<th style="width:15%;" >Date de Debut</th>
		    	<th style="width:15%;">Date de Fin</th>
		    	<th style="width:65%;">Diplôme(s) onbtenu(s)</th>
		    	<th style="width:5%;" ></th>
	    	</tr>
    	</thead>
    	<tbody id="diplomaBody">
	    	<tr class="diplomaClonnable" >
	    		<td>{!! Form::text('diploma[institution][]', null, ['required' => 'required' , 'class' => 'form-control diplomaInstitution', 'placeholder' => 'Institution']) !!}</td>
	    		<td>{!! Form::text('diploma[start][]', null, ['required' => 'required' , 'class' => 'form-control diplomastart', 'placeholder' => 'Date de Debut']) !!}</td>
	    		<td>{!! Form::text('diploma[end][]', null, ['required' => 'required' ,'class' => 'form-control displomaend', 'placeholder' => 'Date de Fin']) !!}</td>
	    		<td>{!! Form::text('diploma[content][]', null, ['required' => 'required' ,'class' => 'form-control diplomacontent', 'placeholder' => 'Diplôme(s) onbtenu(s)']) !!}</td>
	    		<td>
	    		<a class="addDiploma" href="#"><i class="fa fa-plus fa-2x" ></i></a>
	    		<a class="removeDiploma hide" href="#"><i class="fa fa-minus fa-2x" ></i></a>
	    		</td>
	    	</tr>	    	
    	</tbody>    	
    </table>
</div>
</div><!--form control-->