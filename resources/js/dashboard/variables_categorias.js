let select_categorias = document.getElementById('categorias');
let title_categoria = document.getElementById('title_categoria')
let inputs_radio = document.querySelectorAll('#noticias_secundario input[type="radio"]');
let tipo_archivo = document.getElementById('tipo_archivo')
let tipo_archivo2 = document.getElementById('tipo_archivo2')
let form_video = document.getElementById('form_video')
let contenido_imagen = document.getElementById('contenido_imagen')
let contenido_imagen1 = document.getElementById('contenido_imagen1')
let contenido_imagen2 = document.getElementById('contenido_imagen2')
let contenido_imagen3 = document.getElementById('contenido_imagen3')
let hidden_principal = document.getElementById('hidden_principal')
let hidden_enlaces = document.getElementById('hidden_enlaces')
let hidden_content1 = document.getElementById('hidden_content1')
let hidden_content2 = document.getElementById('hidden_content2')
let hidden_content3 = document.getElementById('hidden_content3')
let hidden_video = document.getElementById('hidden_video')
let mensaje_video  = document.getElementById('mensaje_video')
let mensaje_principal = document.getElementById('mensaje_principal')
let mensaje_enlaces = document.getElementById('mensaje_enlaces')
let mensaje_imagen1  = document.getElementById('mensaje_imagen1')
let mensaje_imagen2 = document.getElementById('mensaje_imagen2')
let mensaje_imagen3 = document.getElementById('mensaje_imagen3')

/*CAMBIANDO A AJAX LA SUBIDA DE IMAGENES*/
let form_categoria_principal = document.getElementById('form_categoria_principal')
let form_enlaces = document.getElementById('form_enlaces')
/***/



export default {
    select_categorias:select_categorias,
    title_categoria:title_categoria,
    inputs_radio:inputs_radio,
    tipo_archivo:tipo_archivo,
    tipo_archivo2:tipo_archivo2,
    form_video:form_video,
    form_categoria_principal:form_categoria_principal,
    form_enlaces:form_enlaces,
    contenido_imagen:contenido_imagen,
    contenido_imagen1:contenido_imagen1,
    contenido_imagen2:contenido_imagen2,
    contenido_imagen3:contenido_imagen3,
    hidden_principal:hidden_principal,
    hidden_enlaces:hidden_enlaces,
    hidden_content1:hidden_content1,
    hidden_content2:hidden_content2,
    hidden_content3:hidden_content3,
    hidden_video:hidden_video,
    mensaje_video:mensaje_video,
    mensaje_principal:mensaje_principal,
    mensaje_enlaces:mensaje_enlaces,
    mensaje_imagen1:mensaje_imagen1,
    mensaje_imagen2:mensaje_imagen2,
    mensaje_imagen3:mensaje_imagen3
}
