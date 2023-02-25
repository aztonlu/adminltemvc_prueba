<div class="content-wrapper" style="min-height:717px";>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>administrar usuarios</h1>
                    

                </div>

            </div>

        </div>


    </section>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <button type="button" class="btn btn-success crear-perfil" data-toggle="modal" data-target="#modal-crear-usuarios">crear nuevo usuario</button>
                            <br>

                        </div>
                        <!-- /.card header -->

                        <div class="card-body">
                            <table class="table table-bordere table-striped dt-responsive tableperfil" width="100%">
                                <thead>
                                    <tr>
                                        <th style="width:10px">#</th>
                                        <th>Nombre</th>
                                        <th>Usuario</th>
                                        <th>Foto</th>
                                        <th>Rol</th>
                                        <th>Acciones</th>
                                    </tr>

                                </thead>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>





    </section>




</div>

<!--modal crear usuarios -->
<div class="modal modal-default fade" id="modal-crear-usuarios">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="alert alert-success alert-dismissible">Agregar nuevo usuario</h4>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group has-feedback" bis_skin_checked="1">
                    <input type="text" class="form-control" name="nom_perfil" placeholder="nombre">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"> </span>
                </div>

                <div class="form-group has-feedback" bis_skin_checked="1">
                    <input type="text" class="form-control" name="nom_usuario" placeholder="usuario">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"> </span>
                </div>

                <div class="form-group has-feedback" bis_skin_checked="1">
                    <input type="text" class="form-control" name="pas_user" placeholder="password">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"> </span>
                </div>

                <div class="form-group has-feedback" bis_skin_checked="1">
                    <div class="btn btn-default btn-file" bis_skub_checked="1">
                        <i class="fas fa-paperclip"></i> Adjuntar imagen de perfil
                        <input type="file" name="subirImgPerfil">
                    </div>
                    <img class="previsualizarImgPerfil img-fluid py-2" width='200' height='200'>
                    <p class="help-block small"> Dimensiones: 480px * 382px | Peso Max. 2MB | Formato: JPG o PNG</p>
                </div>

                <div class="form-group has-feedback">
                    <label>Rol</label>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">cerrar</button>
                    <button type="submit" class="btn btn-primary">guardar</button>
                </div>


            </form>
        </div>


    </div>

</div>