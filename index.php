<?php
require "conexion.php";
$administrador = mysqli_query($conexion, "SELECT * FROM administrador");
$total['administrador'] = mysqli_num_rows($administrador);
$clientes = mysqli_query($conexion, "SELECT * FROM cliente");
$total['clientes'] = mysqli_num_rows($clientes);
$articulos = mysqli_query($conexion, "SELECT * FROM articulo");
$total['articulos'] = mysqli_num_rows($articulos);
$ventas = mysqli_query($conexion, "SELECT * FROM tbl_ventas WHERE fecha > CURDATE()");
$total['ventas'] = mysqli_num_rows($ventas);
session_start();
include_once "includes/header.php";
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Administrador</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Administrador</li>
            </ol>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="fas fa-user fa-2x"></i>
                            </div>
                            <a href="administrador.php" class="card-category text-warning font-weight-bold">
                                administrador
                            </a>
                            <h3 class="card-title"><?php echo $total['administrador']; ?></h3>
                        </div>
                        <div class="card-footer bg-warning text-white">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="fas fa-users fa-2x"></i>
                            </div>
                            <a href="clientes.php" class="card-category text-success font-weight-bold">
                                Clientes
                            </a>
                            <h3 class="card-title"><?php echo $total['clientes']; ?></h3>
                        </div>
                        <div class="card-footer bg-secondary text-white">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-danger card-header-icon">
                            <div class="card-icon">
                                <i class="fab fa-product-hunt fa-2x"></i>
                            </div>
                            <a href="articulos.php" class="card-category text-danger font-weight-bold">
                                articulos
                            </a>
                            <h3 class="card-title"><?php echo $total['articulos']; ?></h3>
                        </div>
                        <div class="card-footer bg-primary">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-info card-header-icon">
                            <div class="card-icon">
                                <i class="fas fa-cash-register fa-2x"></i>
                            </div>
                            <a href="ventas.php" class="card-category text-info font-weight-bold">
                                Ventas
                            </a>
                            <h3 class="card-title"><?php echo $total['ventas']; ?></h3>
                        </div>
                        <div class="card-footer bg-danger text-white">
                        </div>
                    </div>
                </div>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- AREA CHART -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Area Chart</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart">
                                            <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->

                            </div>
                            <!-- /.col (LEFT) -->
                            <div class="col-md-6">
                                <!-- LINE CHART -->
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Line Chart</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart">
                                            <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->

                            </div>
                            <!-- /.col (RIGHT) -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
                <script>
                    <?php

                    include_once 'includes/footer.php';
                    ?>