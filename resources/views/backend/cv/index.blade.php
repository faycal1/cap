@extends('backend.layouts.master')

@section('page-header')
    <h1>
        Cv
        <small>Gestion des Cv</small>
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">{{ trans('strings.backend.WELCOME') }} {!! auth()->user()->name !!}!</h3>
          <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>

           <div class="box-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Date de naissance</th>
                        <th>Téléphone</th>
                        <th>Adresse</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($cvs as $cv)
                        <tr>
                            <td>{!! $cv->name !!} {!! $cv->pername !!}</td>                         
                            <td>{!! $cv->birthday !!}</td>
                            <td>{!! $cv->phone !!}</td>
                            <td>{!! $cv->adress !!}</td>
                            <td>
                              <a href="{!! route('admin.cv.download', [$cv->id])  !!}" class="btn btn-xs btn-success"><i class="fa fa-download" data-toggle="tooltip" data-placement="top"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="pull-right">
               {!! $cvs->render() !!}
            </div>

            <div class="pull-left">
              {{ $cvs->total() }} Cv
            </div>

            <div class="clearfix"></div>
        </div><!-- /.box-body -->
        </div><!-- /.box-header -->
        <div class="box-body">
           
        </div><!-- /.box-body -->
    </div><!--box box-success-->
@endsection