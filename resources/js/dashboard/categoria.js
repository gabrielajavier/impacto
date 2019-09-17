import v_categorias from "./variables_categorias";
let id_categoria , texto_categoria


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

let formAjaxVideo = (data,action) => {
    fetch(action.action,{
        method:"POST",
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN':document.querySelector("meta[name=csrf-token]").content
        },
        body:JSON.stringify(data)
    }).then(response => response.json())
        .then(data => data===true ?
            v_categorias.mensaje_video.classList.remove('hide') : '' )
}





v_categorias.form_video.addEventListener('submit',function(e){
     e.preventDefault()
     console.log(v_categorias.form_video.tipo_archivo.value)
     formAjaxVideo({
        tipo_archivo:v_categorias.form_video.tipo_archivo.value,
        video_url:v_categorias.form_video.video_url.value,
        titulo_video:v_categorias.form_video.titulo_video.value,
        texto_video:v_categorias.form_video.texto_video.value
     },
     {
         action:v_categorias.form_video.action,
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
})
