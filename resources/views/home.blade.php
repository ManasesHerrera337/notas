@extends('layouts.app')

@section('content')    


<!-- page content -->
<div class="right_col" role="main"> 
  <!-- top tiles -->
  <div class="row tile_count">
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Usuarios</span>
      <div class="count">    </div>
      <span class="count_bottom"><i class="green"> </i> Usuarios Registrados</span>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-clock-o"></i> Fecha</span>
      <div class="count"></div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Alumnos</span>
      <div class="count green"></div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i> Alumnos Inscritos</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Profesores</span>
      <div class="count"></div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i> Profesores Registrados</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-file-text-o"></i> Total Carreras</span>
      <div class="count"></div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>  </i> Carreras Impartidas</span>
    </div>
    <div class="col-md-1 col-sm-4 col-xs-6 tile_stats_count">
      <span class="count_top"><i class="fa fa-file-text-o"></i> Asignaturas</span>
      <div class="count"></div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> </i> Asignaturas Impartidas</span>
    </div>
  </div>
  <!-- /top tiles -->
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Principal</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Buscar</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">


        <div class="x_panel">
          <div class="x_title">
            <h2>Total Visitas</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a >Settings 1</a>
                  </li>
                  <li><a >Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">


             <canvas id="myChart" width="400px" height="100px"></canvas>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->






@endsection
