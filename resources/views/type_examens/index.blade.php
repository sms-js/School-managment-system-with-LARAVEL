@extends('layouts.app')

@section('content')
<div class="blank"> 
    <h2>Gestion des types d'examens</h2>
    <section class="content-header"> 
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('typeExamens.create') !!}"><i class="fa fa-plus-circle"></i> Ajouter un type</a>
        </h1>
    </section>
    <div class="blankpage-main">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('type_examens.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
</div>
@endsection

