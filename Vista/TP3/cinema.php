<?php
include_once "../Estructura/cabecera.php";
?>

<div class="row justify-content-center">
    <div class="col-sm-12 col-md-8">
        <div class="card">
        <div class="card-header">
    cinema
  </div>
            <div class="card-body p-4">
                <form action="accionCinema.php" method="post" id="cinema" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label class="form-label" for="titulo">Titulo</label>
                                <input class="form-control" type="text" name="titulo" id="titulo" />
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="director">Director</label>
                                <input class="form-control" type="text" name="director" id="director" />
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label class="form-label" for="actores">Actores</label>
                                <input class="form-control" type="text" name="actores" id="actores" />
                            </div>
                            <div class="form-group">
    
                                <label class="form-label" for="guion">Guion</label>
                                <input class="form-control" type="text" name="guion" id="guion" />
    
                            </div>
                        </div>
    
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label class="form-label" for="produccion">Produccion</label>
                                <input class="form-control" type="text" name="produccion" id="produccion" />
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="nacionalidad">Nacionalidad</label>
                                <input class="form-control" type="text" name="nacionalidad" id="nacionalidad" />
                            </div>
                        </div>
    
    
    
                        <div class="col-md-6 mt-2">
                            <div class="form-group">
                                <label class="form-label" for="anio">Año</label>
                                <input class="form-control" type="text" name="anio" id="anio" />
                            </div>
                            <div class="form-group mt-2 p-auto">
                                <label class="form-label" for="genero">Genero</label>
                                <select class="form-select" name="genero" id="genero">
                                    <option value="">Opciones</option>
                                    <option value="terror">Terror</option>
                                    <option value="accion">Accion</option>
                                    <option value="drama">Drama</option>
                                    <option value="suspenso">Suspenso</option>
                                </select>
                            </div>
                        </div>
    
                        <div class="col-md-4 mt-2">
                            <div class="form-group">
                                <label class="form-label" for="duracion">Duracion</label>
                                <input class="form-control" type="text" name="duracion" id="duracion" />
                            </div>
                        </div>
                        <div class="col-md-8 mt-2">
                            <div class="form-group">
                                <div><label class="form-label" for="restriccion">Restrinccion de edad</label></div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="restriccion" id="1" value="1">
                                    <label class="form-check-label" for="1">Apto para todo publico</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="restriccion" id="2" value="2">
                                    <label class="form-check-label" for="2">Mayor de 7 años</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="restriccion" id="3" value="3">
                                    <label class="form-check-label" for="3">Mayores de 18</label>
                                </div>
    
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="form-label" for="sinopsis">Sinopsis</label>
                            <textarea class="form-control" name="sinopsis" id="sinopsis"></textarea>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="form-label" for="nameImage">Subir Imagen</label>
                            <input class="form-control" type="file" name="upload" id="upload">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mt-2">
                            <input class="btn btn-primary" type="submit" value="Enviar">
                            <input class="btn btn-secondary" type="reset" value="Borrar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>