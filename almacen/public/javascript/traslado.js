$('#botonCrearProveedor').click(function () {
    $.post(Routing.generate('suppliers_new', {almacen: $('#almacen').val()}), $('form#crearProveedor').serialize(), function (data) {
        alert(data['mensaje']);
    });
});

$('#botonCrearProducto').click(function () {
    $.post(Routing.generate('products_new', {almacen: $('#almacen').val()}), $('form#crearProducto').serialize(), function (data) {
        alert(data['mensaje']);
    });
});

$('#referencia').keyup(function () {
    productosjs();
});

$('#categoria').on('select2:select', function () {
    productosjs();
});

$('#subcategoria').change(function () {
    productosjs();
});

$('#tipo').change(function () {
    productosjs();
});

function productosjs() {
    var referencia = document.getElementById("referencia").value;
    var categoria = document.getElementById("categoria").value;
    var subcategoria = document.getElementById("subcategoria").value;
    var tipo = document.getElementById("tipo").value;
    if ($('#referencia').val().length > 2) {
        $.post(Routing.generate('lots_search', {almacen: $('#almacen').val()}), {referencia: referencia, categoria: categoria, subcategoria: subcategoria, tipo: tipo}, function (respuesta) {
            if (respuesta['existe'] == 2) {
                $('#alerta-producto').show();
                document.getElementById("productos").innerHTML = "";
            } else {
                $('#alerta-producto').hide();
                var tabla = "";
                var i = 0;
                for (i = 0; i < respuesta.length; i++) {

                    if (respuesta[i].foto) {
                        var foto = Routing.generate('warehouse_products_photo', {almacen: $('#almacen').val(), id: respuesta[i].idp});
                    } else {
                        var foto = "/imagenes/noimagen.png";
                    }
                    
                    tabla += "<tr>\n\
                            <td><img width='80px' src='" + foto + "' /></td>\n\
                            <td>" + respuesta[i].nombre + "</td>\n\
                            <td>" + respuesta[i].lote + "</td>\n\
                            <td class='text-center align-self-center'>\n\
                            <button type='button' class='btn btn-warning btn-icon' name='boton' value='" + respuesta[i].id + "' id='productoBuscado'>\n\
                            <i class='las la-plus'></i>\n\
                            </button>\n\
                            </td>\n\
                            </tr>";
                }
                document.getElementById("productos").innerHTML = tabla;
                document.getElementById("tabla").style.display = "initial";


                $('[id^="productoBuscado"]').click(function () {
                    importacionjs($(this).val());
                });
            }
        });
    }
}

function importacionjs(id) {
    if (id == false) {
        alert("Debes seleccionar un producto.");
    } else {
        $.post(Routing.generate('lots_add', {almacen: $('#almacen').val()}), {id: id}, function (respuesta) {
            if (respuesta['existe'] == 2) {
                alert("No existe ese producto.");
            } else {
                var producto = document.getElementById("producto-" + respuesta['id']);
                if (producto) {
                } else {
                    if (respuesta['foto']) {
                        var foto = Routing.generate('warehouse_products_photo', {almacen: $('#almacen').val(), id: respuesta['idp']});
                    } else {
                        var foto = "/imagenes/noimagen.png";
                    }
                    var tabla = "<tr id='lote-" + respuesta['id'] + "'>\n\
                                    <td><img width='80px' src='" + foto + "' /></td>\n\
                                    <td>\n\
                                        " + respuesta['nombre'] + "\
                                    </td>\n\
                                    <td>\n\
                                        " + respuesta['lote'] + "\
                                        <input value='" + respuesta['id'] + "' type='hidden' name='lote[]'>\n\
                                    </td>\n\
                                    <td><input type='number' name='cantidad[]' value='1' min='1' max='" + respuesta['cantidad'] + "' class='form-control' required></td>\n\
                                    <td class='text-center align-self-center'>\n\
                                        <button type='button' class='btn btn-danger btn-icon quitar' onclick='quitarProducto(" + respuesta['id'] + ");'>\n\
                                            <i class='las la-trash'></i>\n\
                                        </button>\n\
                                    </td>\n\
                                </tr>";
                    document.getElementById("traslado").innerHTML += tabla;

                }
            }
        });
    }
}

function quitarProducto(id) {
    var element = document.getElementById('lote-' + id);
    element.parentNode.removeChild(element);
}