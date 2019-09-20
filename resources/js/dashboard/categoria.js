import v_categorias from "./variables_categorias";
import v_noticias from "./variables_noticias"
let id_categoria , texto_categoria
let inputs_enlaces = document.querySelectorAll("#form_enlaces input[type='text']")
let inputs_url = document.querySelectorAll("#form_enlaces input[type='url']")
let array_enlaces = []
let array_url = []


let radioSelect = (radio_select) => {
     let element = document.getElementById(radio_select)
     if(radio_select === "videos"){
         element.classList.remove('hide')
         document.getElementById('imagenes').classList.add('hide')
     }else{
         element.classList.remove('hide')
         document.getElementById('videos').classList.add('hide')
     }
}


/*PETICIONES AJAX**/
let formAjaxVideo = (data) => {
    let formData = new FormData();
    formData.append('idcontenido',data.idcontenido);
    formData.append('tipo_archivo',data.tipo_archivo);
    formData.append('video_url',data.video_url);
    formData.append('titulo_video',data.titulo_video);
    formData.append('texto_video',data.texto_video);
    fetch(data.action,{
        method:"POST",
        headers: {
            'X-CSRF-TOKEN':document.querySelector("meta[name=csrf-token]").content
        },
        body:formData
    }).then(response => response.json())
       .then(data => data===true ?
          v_categorias.mensaje_video.classList.remove('hide') : '' )
          v_categorias.form_video.reset();
    setTimeout(()=>{
        v_categorias.mensaje_video.classList.add('hide')
    },1000)
}


let formAjaxPrincipal = (data) => {
    let formData = new FormData();
    formData.append('idcategoria',data.idcategoria);
    formData.append('contenido_titulo',data.contenido_titulo);
    formData.append('contenido_main',data.contenido_main);
    formData.append("contenido_imagen", v_categorias.contenido_imagen.files[0]);
    fetch('/contenido/principal',{
        method:"POST",
        headers:{
            'X-CSRF-TOKEN':document.querySelector("meta[name=csrf-token]").content
        },
        body:formData
    }).then(response => response.json())
        .then(data => {
            if(data[0] === true){
                v_categorias.mensaje_principal.classList.remove('hide')
                v_categorias.form_enlaces.action = `/contenido/enlaces/${data[1]}`
                v_noticias.form_content1.action =  `/contenido/secundario/${data[1]}`
                v_noticias.form_content2.action = `/contenido/secundario2/${data[1]}`
                v_noticias.form_content3.action =  `/contenido/secundario3/${data[1]}`
                v_categorias.form_video.action = `/contenido/video/${data[1]}`
                v_categorias.hidden_enlaces.value = data[1]
                v_categorias.hidden_content1.value = data[1]
                v_categorias.hidden_content2.value = data[1]
                v_categorias.hidden_content3.value = data[1]
                v_categorias.hidden_video.value = data[1]
            }
        })
        v_categorias.form_categoria_principal.reset()
}

let formAjaxSecundario = (data) => {
    let formData = new FormData()
    formData.append('idcontenido',data.idcontenido);
    formData.append('titulo_imagen',data.titulo_imagen);
    formData.append('texto_imagen',data.texto_imagen);
    formData.append('tipo_archivo',data.tipo_archivo)
    formData.append("contenido_imagen", v_categorias.contenido_imagen1.files[0]);
    fetch(data.action,{
        method:"POST",
        headers:{
            'X-CSRF-TOKEN':document.querySelector("meta[name=csrf-token]").content
        },
        body:formData
    }).then(response => response.json())
        .then(data => data === true ? v_categorias.mensaje_imagen1.classList.remove('hide'): '')
    v_noticias.form_content1.reset()
    v_noticias.form_content1.classList.add('hide')
    setTimeout(()=>{
        v_categorias.mensaje_imagen1.classList.add('hide')
    },1000)
}


let formAjaxSecundario2 = (data) => {
    let formData = new FormData()
    formData.append('idcontenido',data.idcontenido);
    formData.append('titulo_imagen',data.titulo_imagen);
    formData.append('texto_imagen',data.texto_imagen);
    formData.append('tipo_archivo',data.tipo_archivo)
    formData.append("contenido_imagen", v_categorias.contenido_imagen2.files[0]);
    fetch(data.action,{
        method:"POST",
        headers:{
            'X-CSRF-TOKEN':document.querySelector("meta[name=csrf-token]").content
        },
        body:formData
    }).then(response => response.json())
        .then(data => data === true ? v_categorias.mensaje_imagen2.classList.remove('hide'): '')
    v_noticias.form_content2.reset()
    v_noticias.form_content2.classList.add('hide')
    setTimeout(()=>{
        v_categorias.mensaje_imagen2.classList.add('hide')
    },1000)
}


let formAjaxEnlaces = (data) => {
    let formData = new FormData();
    formData.append('idcontenido',data.idcontenido);
    formData.append('enlace',data.enlace);
    formData.append('url',data.url);
    fetch(data.action,{
        method:"POST",
        headers:{
            'X-CSRF-TOKEN':document.querySelector("meta[name=csrf-token]").content
        },
        body:formData
    }).then(response =>  response.json())
        .then(data => data === true ?
        v_categorias.mensaje_enlaces.classList.remove('hide') : '')
    v_categorias.form_enlaces.reset()
    array_enlaces = []
    array_url = []
    setTimeout(()=>{
        v_categorias.mensaje_enlaces.classList.add('hide')
    },1000)
}

let formAjaxSecundario3  = (data) => {
    let formData = new FormData()
    formData.append('idcontenido',data.idcontenido);
    formData.append('titulo_imagen',data.titulo_imagen);
    formData.append('texto_imagen',data.texto_imagen);
    formData.append('tipo_archivo',data.tipo_archivo)
    formData.append("contenido_imagen", v_categorias.contenido_imagen3.files[0]);
    fetch(data.action,{
        method:"POST",
        headers:{
            'X-CSRF-TOKEN':document.querySelector("meta[name=csrf-token]").content
        },
        body:formData
    }).then(response => response.json())
        .then(data => data === true ? v_categorias.mensaje_imagen3.classList.remove('hide'): '')
    v_noticias.form_content3.reset()
    v_noticias.form_content3.classList.add('hide')
    setTimeout(()=>{
        v_categorias.mensaje_imagen3.classList.add('hide')
    },1000)
}
/*****/




v_categorias.form_video.addEventListener('submit',function(e){
     e.preventDefault()
     formAjaxVideo({
        tipo_archivo:v_categorias.form_video.tipo_archivo.value,
        video_url:v_categorias.form_video.video_url.value,
        titulo_video:v_categorias.form_video.titulo_video.value,
        texto_video:v_categorias.form_video.texto_video.value,
        idcontenido:v_categorias.hidden_video.value,
        action:v_categorias.form_video.action
     })
})


Array.prototype.forEach.call(v_categorias.inputs_radio,(item) =>{
    item.onclick = (e) => {
        radioSelect(e.target.dataset.tab)
    }
});


v_categorias.select_categorias.addEventListener('change',(e) => {
    id_categoria = v_categorias.select_categorias.value
    texto_categoria = v_categorias.select_categorias.options[
        v_categorias.select_categorias.selectedIndex].innerText
    v_categorias.title_categoria.innerText = texto_categoria
    v_categorias.hidden_principal.value = id_categoria
})


v_categorias.form_enlaces.addEventListener('submit',(e) =>{
    e.preventDefault();
    inputs_enlaces.forEach(item => array_enlaces.push(item.value))
    inputs_url.forEach(item => array_url.push(item.value))
    formAjaxEnlaces({
        idcontenido:v_categorias.form_enlaces.idcontenido.value,
        enlace:array_enlaces,
        url:array_url,
        action:v_categorias.form_enlaces.action
    })
})


v_categorias.form_categoria_principal.addEventListener('submit',(e) => {
     e.preventDefault()
    formAjaxPrincipal({
         idcategoria:v_categorias.form_categoria_principal.idcategoria.value,
        contenido_titulo:v_categorias.form_categoria_principal.contenido_titulo.value,
        contenido_main:v_categorias.form_categoria_principal.contenido_main.value,
     })
})

v_noticias.form_content1.addEventListener('submit',(e) => {
     e.preventDefault()
     formAjaxSecundario({
         tipo_archivo:v_noticias.form_content1.tipo_archivo.value,
         titulo_imagen:v_noticias.form_content1.titulo_imagen.value,
         texto_imagen:v_noticias.form_content1.texto_imagen.value,
         idcontenido: v_categorias.hidden_content1.value,
         action:v_noticias.form_content1.action
     })
})


v_noticias.form_content2.addEventListener('submit',(e) => {
    e.preventDefault()
    formAjaxSecundario2({
        tipo_archivo:v_noticias.form_content2.tipo_archivo.value,
        titulo_imagen:v_noticias.form_content2.titulo_imagen.value,
        texto_imagen:v_noticias.form_content2.texto_imagen.value,
        idcontenido: v_categorias.hidden_content2.value,
        action:v_noticias.form_content2.action
    })
})

v_noticias.form_content3.addEventListener('submit',(e) => {
    e.preventDefault()
    formAjaxSecundario3({
        tipo_archivo:v_noticias.form_content3.tipo_archivo.value,
        titulo_imagen:v_noticias.form_content3.titulo_imagen.value,
        texto_imagen:v_noticias.form_content3.texto_imagen.value,
        idcontenido: v_categorias.hidden_content3.value,
        action:v_noticias.form_content3.action
    })
})
