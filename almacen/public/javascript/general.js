$('[id^="kt_flatpickr"]').flatpickr({
    dateFormat: 'd-m-Y',
    locale: {
        firstDayOfWeek: 1,
        weekdays: {
            shorthand: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
            longhand: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        },
        months: {
            shorthand: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Оct', 'Nov', 'Dic'],
            longhand: ['Enero', 'Febreo', 'Мarzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        }
    }
}
);

$(document).ready(function () {
    $('[select2^="categoria"]').select2({
        dropdownParent: $('[id="kt_crearProducto"]')
    });
});

$(document).ready(function () {
    if ($('[id="kt_crearImportacion"]').length != 0) {
        $('[select2^="categoria2"]').select2({
            dropdownParent: $('[id="kt_crearImportacion"]')
        });
    } else if ($('[id="kt_crearTraslado"]').length != 0) {
        $('[select2^="categoria2"]').select2({
            dropdownParent: $('[id="kt_crearTraslado"]')
        });
    } else if ($('[id="kt_crearAsignacion"]').length != 0) {
        $('[select2^="categoria2"]').select2({
            dropdownParent: $('[id="kt_crearAsignacion"]')
        });
    }

});

function categoriajs() {
    document.getElementById('subcategoria').selectedIndex = 0;
    $("#subcategoria option").each(function () {
        if ($(this).attr("data-categoria") != $("#categoria").val() && $(this).attr("data-categoria") != 0) {
            $(this).prop("hidden", true);
        } else {
            $(this).prop("hidden", false);
        }
    });
}

$('#categoria').on('select2:select', function () {
    categoriajs();
});