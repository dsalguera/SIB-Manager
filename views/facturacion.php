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
    <h1 class="h2">Facturación</h1>
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
                        <label class="form-label" for="inputSubject">Cliente</label>                                             
                        <input type="text" class="form-control rounded-0" id="inputSubject" placeholder="Ejemplo: Juan Pérez"> 
                    </div>
                    <div class="mb-3"> 
                        <label class="form-label" for="inputSubject">Tipo de Documento</label>                                             
                        <div class="input-group"> 
                            <div class="col-lg-5 col-md-6">
                                <input type="text" class="form-control rounded-0" placeholder="# de Documento">
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <select class="form-control rounded-0"> 
                                        <option>Cédula</option>                                                             
                                        <option>Residencia</option>                                                             
                                        <option>Pasaporte</option>                                                             
                                    </select>
                                    <button class="btn btn-primary" type="button" id="button-addon2">Buscar</button>
                                </div>
                            </div>                                                 
                        </div>
                    </div>
                    <div class="mb-3"> 
                        <label class="form-label" for="inputSubject">Correo Electrónico</label>                                             
                        <input type="text" class="form-control rounded-0" id="inputSubject" placeholder="Ejemplo: jperez@gmail.com"> 
                    </div>
                    <div class="mb-3"> 
                        <label class="form-label" for="inputTextarea">Detalles Adicionales</label>                                             
                        <textarea class="form-control rounded-0" rows="6" id="inputTextarea" placeholder="Escriba aquí detalles adicionales de la compra"></textarea> 
                    </div>                                         
                    <div class="text-end">
                        <button class="btn btn-primary" type="button">
                            <span class="align-middle">Imprimir Factura</span>
                        </button>
                    </div>                                         
                </form>                                     
            </div>                                 
            <div class="col-lg-7"> 
                <div class="mb-3"> 
                    <label class="form-label" for="inputSubject">Producto</label>                                         
                    <div class="input-group">
                        <input type="text" class="form-control rounded-0" placeholder="Código de Barra">
                        <button class="btn btn-primary" type="button" id="button-addon2">Buscar</button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Cantidad</th>
                                <th>Descripción</th>
                                <th>Precio Unitario</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>Producto Generico</td>
                                <td>25.00</td>
                                <td>50.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>                             
    </div>
</section>

<?php include('footer.php'); ?>