// Widget de busqueda

const formularioBuscar = document.querySelector('.sidebar-widget .wp-block-search__inside-wrapper');

if (formularioBuscar) {
    const inputFormulario = formularioBuscar.querySelector('input');
    const submitFormulario = formularioBuscar.querySelector('button');

    inputFormulario.className += ' form-control ';
    submitFormulario.className += ' btn btn-primary';
}

// Widget de categorias
const listaWid = document.querySelector('.sidebar-widget ul');

if (listaWid) {
    listaWid.className += ' list-group';
    listaWid.querySelectorAll('li').forEach(item => {
        item.className += ' list-group-item';
    })

}

// Comentarios
const botonComentarios = document.querySelector('#commentform .form-submit #submit');
if (botonComentarios) {
    botonComentarios.className = ('btn btn-primary');
}

const inputTextArea = document.querySelector('.comment-form-comment textarea');
if (inputTextArea) {
    inputTextArea.className = 'form-control';
    inputTextArea.setAttribute('placeholder', 'Ingresa aquí tu comentario*');
}

const comentariosNuevos = document.querySelector('#commentform');
if (comentariosNuevos &&
    comentariosNuevos.querySelector('.comment-form-author label') &&
    comentariosNuevos.querySelector('.comment-form-author input') &&
    comentariosNuevos.querySelector('.comment-form-email label') &&
    comentariosNuevos.querySelector('.comment-form-email input') &&
    comentariosNuevos.querySelector('.comment-form-url label') &&
    comentariosNuevos.querySelector('.comment-form-url input')
) {

    comentariosNuevos.querySelector('.comment-form-author label').className = 'd-none';
    comentariosNuevos.querySelector('.comment-form-author input').className = 'form-control';
    comentariosNuevos.querySelector('.comment-form-author input').setAttribute('placeholder', 'Nombre*');

    comentariosNuevos.querySelector('.comment-form-email label').className = 'd-none';
    comentariosNuevos.querySelector('.comment-form-email input').className = 'form-control';
    comentariosNuevos.querySelector('.comment-form-email input').setAttribute('placeholder', 'Email*');

    comentariosNuevos.querySelector('.comment-form-url label').className = 'd-none';
    comentariosNuevos.querySelector('.comment-form-url input').className = 'form-control';
    comentariosNuevos.querySelector('.comment-form-url input').setAttribute('placeholder', 'Sitio Web*');
}

const botonEditarComentarios = document.querySelectorAll('.comment-edit-link');
if (botonEditarComentarios) {
    botonEditarComentarios.forEach(boton => {
        boton.className = 'btn btn-outline-warning btn-sm';
    })
}

const botonResponderComentarios = document.querySelectorAll('.comment-reply-link');
if (botonResponderComentarios) {
    botonResponderComentarios.forEach(boton => {
        boton.className = 'btn btn-outline-primary btn-sm';
    })
}