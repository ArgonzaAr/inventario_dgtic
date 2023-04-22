//Constantes para el contenedor y el identificador de agregar
const contenedor = document.querySelector('#diplomaedDynamic');
const agregar = document.querySelector('#addInput');

//función listener para agregar elementos
agregar.addEventListener('click', e => {
    let input = document.createElement('div');
    input.classList.add('row')
    input.innerHTML ='<div class="col"><input class="form-control text-container mt-2 addInput" type="text" name="diplomaedInput" placeholder="Ingresa el diplomado" required></div><div class="col"><input class="form-control text-container mt-2 addInput" type="text" name="emisionInput" placeholder="Ingresa la emisión" required></div><div class="col"><select class="form-select form-select-lg mt-2" name="estado" aria-label="" required><option selected disabled value="">Selecciona estado</option><option value="1">Activo</option><option value="0">Inhabilitado</option></select></div><button id="crearSede" type="button" class="btn btn-primary btn-tablaAdd">Crear diplomado</button><button id="deleteSede" type="button" class="btn btn-danger btn-tablaAdd" onclick = "eliminar(this)">X</button>'

    contenedor.appendChild(input);
    agregar.setAttribute("disabled", "");
});

/**
* Método para eliminar el elemento de input
* @param {this} e
*/

const eliminar = (e) => {
    const elementoTd = e.parentNode;
    contenedor.removeChild(elementoTd);
    agregar.removeAttribute("disabled")
}