@extends('adminlte::page')

@section('title', 'Show Service')


@section('content_header')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Landing Page Service</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a
                            href="{{ url(config('landing.prefix','admin').'/'.'dashboard') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a
                            href="{{ url(config('landing.prefix','admin').'/'.'service') }}">Landing
                            Service</a>
                    </li>
                    <li class="breadcrumb-item active">Landing Page Service</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@stop

@section('content')

<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Services of {{$landing->landing_name ?? 'Doctype Admin Landing Page'}}
                        </h3>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#create-service">
                            Create App Service
                        </button>
                    </div>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="datatable" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Service Name</th>
                                <th>Service Icon</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if (count($services) > 0)
                            @foreach ($services as $service)
                            <tr>
                                <td>{{$service->id}}</td>
                                <td>{{$service->service_name}}</td>
                                <td>
                                    <i class="{{$service->service_icon}}" style="font-size: 5em"></i>
                                </td>

                                <td class="d-flex justify-content-around">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#show-service-{{$service->id}}">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#edit-service-{{$service->id}}">
                                        <i class="fas fa-edit"></i>
                                    </button>

                                    {{-- Edit Service Model --}}
                                    @include('landing::backend.layouts.landing_service.edit_model')
                                    {{-- End Edit Service Model --}}
                                    {{-- Show Service Model --}}
                                    @include('landing::backend.layouts.landing_service.show_model')
                                    {{-- End Show Service Model --}}

                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#service-{{$service->id}}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    {{-- Delete Model --}}
                                    @include('landing::backend.layouts.landing_service.confirm_delete')
                                    <!-- /.modal -->
                                </td>

                            </tr>
                            @endforeach
                            @endif

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>id</th>
                                <th>Service Name</th>
                                <th>Service Icon</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>

{{-- Create Service Model --}}
@include('landing::backend.layouts.landing_service.create_model')
{{-- End Create Service Model --}}



@stop

@section('css')
<link rel="stylesheet" href="{{asset('css/admin_custom.css')}}">
@stop

@section('js')
<script>
    $(function () {
        //Intialize Summernote Text Editor
            $('.textarea').summernote();
        // Datatable
    $("#datatable").DataTable({
      "responsive": true,
      "autoWidth": true,
      "ordering": true,
      "info": true,
    });
  });
</script>
@stop