@extends('layouts.app')        

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Dashboard
                    </li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="col-md-8 mx-auto">
          <div class="jumbotron">
            <h1 class="display-4 text-primary">Welcome to Triad</h1>
            <p class="lead">Employees are valuable to us</p>
            <hr class="my-4">
            <p>Thanks for the contribution,
              @if ($employee->sex == 'Male')
                Mr. {{ $employee->first_name.' '.$employee->last_name }}
              @else
                Ms. {{ $employee->first_name.' '.$employee->last_name }}
              @endif
            </p>
          </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->

<!-- /.content-wrapper -->

@endsection
