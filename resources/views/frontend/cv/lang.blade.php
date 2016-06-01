<div class="form-group">
{!! Form::label('lang', 'Connaissance linguistigue', ['class' => 'col-lg-2 control-label']) !!}
<div class="col-lg-10">
    <table class="table" >
    	<thead>
	    	<tr>
		    	<th style="width:65%;" >Langue</th>
		    	<th style="width:8%;">Lu</th>
		    	<th style="width:8%;">Parlé</th>
		    	<th style="width:8%;">Ecrit</th>
		    	<th style="width:7%;" ></th>
	    	</tr>
    	</thead>
    	<tbody id="langBody">
	    	<tr class="langClonnable" >
	    		<td>{!! Form::text('lang[lang][]', null, ['required' => 'required' , 'class' => 'form-control', 'placeholder' => 'Langue']) !!}</td>
	    		<td>{!! Form::select('lang[r][]', [0,1,2,3,4,5], ['required' => 'required' ,'class' => 'form-control', 'placeholder' => 'Lu']) !!}</td>
	    		<td>{!! Form::select('lang[s][]', [0,1,2,3,4,5], ['required' => 'required' ,'class' => 'form-control', 'placeholder' => 'Parlé']) !!}</td>
	    		<td>{!! Form::select('lang[w][]', [0,1,2,3,4,5], ['required' => 'required' ,'class' => 'form-control', 'placeholder' => 'Ecrit']) !!}</td>
	    		<td>
	    		<a class="addLang" href="#"><i class="fa fa-plus fa-2x" ></i></a>
	    		<a class="removeLang hide" href="#"><i class="fa fa-minus fa-2x" ></i></a>
	    		</td>
	    	</tr>
    	</tbody>    	
    </table>
</div>
</div><!--form control-->