@extends('frontend.layouts.master')

@section('content')
	<div class="row"> 
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading"><i class="fa fa-home"></i> Veuillez Remplir Les Champs ci-dessous Soigneusement, Merci !!!</div>
                        <div class="panel-body">
                            @include('frontend.cv.form')
                        </div>
                    </div><!-- panel -->
                </div><!-- col-md-10 -->
	</div><!-- row -->
@endsection

@section('after-scripts-end')
	<script>
		//Being injected from FrontendController
		// console.log(test);
	</script>
@stop