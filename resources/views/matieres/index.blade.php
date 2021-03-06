@extends('layouts.app')

@section('content')
<div class="blank"> 
    <h2>Gestion des matière</h2>
    <section class="content-header"> 
        <h1 class="pull-right">
        @can('Ajouter une matière')
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('matieres.create') !!}"><i class="fa fa-plus-circle"></i> Ajouter une matière</a>
        @endcan
        </h1>
    </section>
    <div class="blankpage-main">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('matieres.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
</div>
@endsection

