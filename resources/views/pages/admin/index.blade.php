@extends('layouts.dashboard.admin.index')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->


      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h6><strong>no of employees</strong></h6>

                  <p><strong>No. of Employee </strong></p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
                <a href="#" class="small-box-footer"></a>
              </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h6>no of leaves</h6>

                  <p><strong>No. of Leave Application(s) </strong></p>
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
                <a href="#" class="small-box-footer"></a>
              </div>
            </div>
            <!-- ./col -->


        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h6>no of leave approved</h6>

              <p><strong>No. of Approved Leave </strong></p>
            </div>
            <div class="icon">
              <i class=""></i>
            </div>
            <a href="#" class="small-box-footer"></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h6>no of leave declined</h6>

              <p><strong>No. of Declined Leave </strong></p>
            </div>
            <div class="icon">
              <i class=""></i>
            </div>
            <a href="#" class="small-box-footer"></a>
          </div>
        </div>
        <!-- ./col -->



        <!-- Main row -->
        <div class="row">
            <!-- Left col --><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)--><!-- right col -->

          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
@endsection
