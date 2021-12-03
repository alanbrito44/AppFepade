<?php
include('layout/header.php');
include('layout/navbar.php');
?>
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <p class="mb-0">Your business dashboard template</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Components</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ingreso de activo nuevo</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" id="step-form-horizontal" class="step-form-horizontal">
                            <div>
                                <h4>Informacion de activo</h4>
                                <section>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Referencia*</label>
                                                <input type="number" name="referencia" class="form-control" placeholder="12345678" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Codigo Contabilidad*</label>
                                                <input type="text" name="codContabilidad" class="form-control" placeholder="123456">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Codigo para proyectos*</label>
                                                <input type="text" name="codProyectos" class="form-control" placeholder="123456">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Numero de serie*</label>
                                                <input type="text" name="serie" class="form-control" placeholder="123456">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Codigo Automatico*</label>
                                                <input type="text" name="codAutomatico" class="form-control" placeholder="123456" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 mb-4">
                                            <div class="form-group">
                                                <label for="party">Fecha de adquisicion</label>
                                                <input id="party" type="datetime-local" name="fecha" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Numero de factura*</label>
                                                <input type="text" name="numFactura" class="form-control" placeholder="123456">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Tipo de activo*</label>
                                                <select class="form-control" name="tipo" required>
                                                    <option selected></option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">IP*</label>
                                                <input type="text" name="ip" class="form-control" placeholder="192.168.137.1" required>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h4>Descripcion del activo</h4>
                                <section>
                                <div class="row">
                                        <div class="col-lg-6 col-sm-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Referencia*</label>
                                                <input type="number" name="referencia" class="form-control" placeholder="12345678" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Codigo Contabilidad*</label>
                                                <input type="text" name="codContabilidad" class="form-control" placeholder="123456">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h4>Business Hours</h4>
                                <section>
                                    <div class="row">
                                        <div class="col-4 col-sm-3 mb-4">
                                            <h4>Monday *</h4>
                                        </div>
                                        <div class="col-4 col-sm-3 mb-4">
                                            <div class="form-group">
                                                <input class="form-control" value="9.00" type="number" name="input1" id="input1">
                                            </div>
                                        </div>
                                        <div class="col-4 col-sm-3 mb-4">
                                            <div class="form-group">
                                                <input class="form-control" value="6.00" type="number" name="input2" id="input2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 col-sm-3 mb-4">
                                            <h4>Tuesday *</h4>
                                        </div>
                                        <div class="col-4 col-sm-3 mb-4">
                                            <div class="form-group">
                                                <input class="form-control" value="9.00" type="number" name="input3" id="input3">
                                            </div>
                                        </div>
                                        <div class="col-4 col-sm-3 mb-4">
                                            <div class="form-group">
                                                <input class="form-control" value="6.00" type="number" name="input4" id="input4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 col-sm-3 mb-4">
                                            <h4>Wednesday *</h4>
                                        </div>
                                        <div class="col-4 col-sm-3 mb-4">
                                            <div class="form-group">
                                                <input class="form-control" value="9.00" type="number" name="input5" id="input5">
                                            </div>
                                        </div>
                                        <div class="col-4 col-sm-3 mb-4">
                                            <div class="form-group">
                                                <input class="form-control" value="6.00" type="number" name="input6" id="input6">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 col-sm-3 mb-4">
                                            <h4>Thrusday *</h4>
                                        </div>
                                        <div class="col-4 col-sm-3 mb-4">
                                            <div class="form-group">
                                                <input class="form-control" value="9.00" type="number" name="input7" id="input7">
                                            </div>
                                        </div>
                                        <div class="col-4 col-sm-3 mb-4">
                                            <div class="form-group">
                                                <input class="form-control" value="6.00" type="number" name="input8" id="input8">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 col-sm-3 mb-4">
                                            <h4>Friday *</h4>
                                        </div>
                                        <div class="col-4 col-sm-3 mb-4">
                                            <div class="form-group">
                                                <input class="form-control" value="9.00" type="number" name="input9" id="input9">
                                            </div>
                                        </div>
                                        <div class="col-4 col-sm-3 mb-4">
                                            <div class="form-group">
                                                <input class="form-control" value="6.00" type="number" name="input10" id="input10">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h4>Email Setup</h4>
                                <section>
                                    <div class="row emial-setup">
                                        <div class="col-sm-3 col-6">
                                            <div class="form-group">
                                                <label for="mailclient11" class="mailclinet mailclinet-gmail">
                                                    <input type="radio" name="emailclient" id="mailclient11">
                                                    <span class="mail-icon">
                                                        <i class="mdi mdi-google-plus" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="mail-text">I'm using Gmail</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-6">
                                            <div class="form-group">
                                                <label for="mailclient12" class="mailclinet mailclinet-office">
                                                    <input type="radio" name="emailclient" id="mailclient12">
                                                    <span class="mail-icon">
                                                        <i class="mdi mdi-office" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="mail-text">I'm using Office</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-6">
                                            <div class="form-group">
                                                <label for="mailclient13" class="mailclinet mailclinet-drive">
                                                    <input type="radio" name="emailclient" id="mailclient13">
                                                    <span class="mail-icon">
                                                        <i class="mdi mdi-google-drive" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="mail-text">I'm using Drive</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-6">
                                            <div class="form-group">
                                                <label for="mailclient14" class="mailclinet mailclinet-another">
                                                    <input type="radio" name="emailclient" id="mailclient14">
                                                    <span class="mail-icon">
                                                        <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="mail-text">Another Service</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="skip-email text-center">
                                                <p>Or if want skip this step entirely and setup it later</p>
                                                <a href="javascript:void()">Skip step</a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->
<?php
include('layout/footer.php');
?>