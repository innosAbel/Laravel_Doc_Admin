@extends('adminlte::page')

@section('title', 'Show Project')

@section('content_header')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Show Project</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ websiteRedirectRoute('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ websiteRedirectRoute('project')}}">Project</a></li>
                    <li class="breadcrumb-item active">Show Project</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@stop

@section('content')


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Show Project</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <b>Project Name : </b>{{$project->name ?? ''}}
                            <br><br>
                            <b>Project Excerpt :</b> <br>
                            @if ($project->excerpt)
                            {!! $project->excerpt !!}
                            @endif
                        </div>
                        <div class="col-lg-6">
                            @if ($project->image)
                            <img src="{{asset($project->thumbnail('image','small'))}}" alt="{{$project->name}}"
                                class="img-fluid">
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        @if ($project->descripton)
                        <b>Project Description :</b>
                        <br>
                        {!! $project->description !!}
                        @endif
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
</section>
<!-- /.content -->
@stop

@section('css')
<link rel="stylesheet" href="{{asset('css/admin_custom.css')}}">
@stop

@section('js')
@include('website::layouts.project.scripts')
@stop