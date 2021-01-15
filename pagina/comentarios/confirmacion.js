function confirmacion(e) {
    if (confirm("¿Está seguro que desea eliminar este registro?")) {
        return true;
    } else {
        e.preventDefault();
    }
}

let linkDelete = document.querySelectorAll(".tabla_item_link");

for(var i = 0; i < linkDelete.length; i++) {
    linkDelete[i].addEventListener('click', confirmacion);
}