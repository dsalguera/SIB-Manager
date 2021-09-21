<?php include('navigation.php'); ?>

<div class="chartjs-size-monitor">
    <div class="chartjs-size-monitor-expand">
        <div class=""></div>
    </div>
    <div class="chartjs-size-monitor-shrink">
        <div class=""></div>
    </div>
</div>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Productos</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="16" y1="2" x2="16" y2="6"></line>
                <line x1="8" y1="2" x2="8" y2="6"></line>
                <line x1="3" y1="10" x2="21" y2="10"></line>
            </svg>
            This week
        </button>
    </div>
</div>
<section>
    <div class="container"> 
        <div class="row row-cols-lg-2"> 
            <div class="col-lg-5"> 
                <form> 
                    <div class="mb-3"> 
                        <label class="form-label" for="inputSubject">Nombre Producto</label>                                             
                        <input type="text" id="nombre" class="form-control rounded-0" id="inputSubject" placeholder="Ejemplo: Bufanda Azul"> 
                    </div>
                    <div class="mb-3"> 
                        <label class="form-label" for="inputSubject">Tipo de Producto</label>                                             
                        <input type="text" class="form-control rounded-0" placeholder="Marca">
                        <div class="input-group mt-2"> 
                            <div class="col-md-6">
                                <div class="input-group">
                                    <select class="form-control rounded-0">
                                        <option>Categoría</option>                                                             
                                        <option>Alimentos</option>
                                        <option>Articulos del Hogar</option>                                                             
                                        <option>Ropa y Calzado</option>                                                             
                                        <option>Electricidad</option>                                                             
                                        <option>Electronica</option>                                                             
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <select class="form-control rounded-0">
                                        <option>Subcategoría</option>                                                             
                                        <option>Alimentos</option>
                                        <option>Articulos del Hogar</option>                                                             
                                        <option>Ropa y Calzado</option>                                                             
                                        <option>Electricidad</option>                                                             
                                        <option>Electronica</option>                                                             
                                    </select>
                                </div>
                            </div>                                                 
                        </div>
                    </div>
                    <div class="mb-3"> 
                        <label class="form-label" for="inputSubject">Precio Compra</label>                                             
                        <input type="text" class="form-control rounded-0" id="inputSubject" placeholder="Ejemplo: $10.00"> 
                    </div>
                    <div class="mb-3"> 
                        <label class="form-label" for="inputSubject">Precio Venta</label>                                             
                        <input type="text" class="form-control rounded-0" id="inputSubject" placeholder="Ejemplo: $15.00"> 
                    </div>
                    <div class="mb-3"> 
                        <label class="form-label" for="inputSubject">Existencias</label>                                             
                        <input type="number" class="form-control rounded-0" id="inputSubject" placeholder="Ejemplo: 3">
                    </div>
                    <div class="mb-3"> 
                        <label class="form-label" for="inputSubject">Estado del Producto</label>                                             
                        <select class="form-control rounded-0"> 
                            <option>Activo</option>                                                 
                            <option>Inactivo</option>                                                 
                        </select>
                    </div>
                    <div class="d-grid gap-2">
                        <div class="mb-3"> 
                            <button class="btn btn-primary" type="button">Nuevo</button>                                                 
                            <button class="btn btn-primary" type="button">Guardar</button>                                                 
                            <button class="btn btn-primary" type="button">Modificar</button>                                                 
                        </div>
                    </div>
                </form>                                     
            </div>                                 
            <div class="col-lg-7"> 
                <div class="mb-3"> 
                    <label class="form-label" for="inputSubject">Etiqueta del Producto</label>                                         
                    <div class="input-group">
                        <input type="text" id="cBarra" class="form-control rounded-0" placeholder="Código de Barra">
                        <button class="btn btn-primary" type="button" id="button-addon2">Guardar</button>
                    </div>
                </div>
                <div class="mb-3 p-3" id="divBarra" style="background-color:#E2E2E2;"> 
                    <img id="barcode"/>
                    <br><br>
                    <button class="btn btn-primary" type="button" id="saveBarra">Guardar Imagen</button>
                </div>
                <div class="mb-3"> 
                    <label class="form-label" for="inputTextarea">Descripción del Producto (Opcional)</label>                                         
                    <textarea class="form-control rounded-0" rows="6" id="inputTextarea" placeholder="Escriba aquí detalles adicionales del producto"></textarea> 
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Últimos Movimientos</th>
                                <th>Fecha Modificación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Se realizo una venta de 3 unidades de Desatornillador de Estrella / Truper / DES-001 </td>
                                <td>25/12/2021</td>
                            </tr>
                            <tr>
                                <td>Se ingresaron 7 unidades de Taladro Manual / Black & Decker / TAL-001</td>
                                <td>25/12/2021</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>                             
    </div>
</section>

<?php include('footer.php'); ?>

<script>

    $('#cBarra').on('input',function(e){

        var txt = $('#cBarra').val();
        //JsBarcode("#barcode", txt);
        // or with jQuery
        $("#barcode").JsBarcode(txt);
    });

    $('#saveBarra').click(function(){

        var txt = $('#nombre').val();

        domtoimage.toBlob(document.getElementById('barcode'))
        .then(function (blob) {
            window.saveAs(blob, txt+'_cbarra.png');
        });

    });

</script>