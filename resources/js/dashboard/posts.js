import operations from './posts_operations'

let table__posts = document.querySelectorAll('#table__posts a')
let uimodal,url,hide_input,a_urls=[],a_titulos=[],a_hiddens=[];
let form_principal = document.getElementById('form_principal')
let form_enlaces = document.getElementById('form_enlaces')
let input_titulos = document.querySelectorAll('.enlaces input[type="text"]')
let input_urls = document.querySelectorAll('.enlaces input[type="url"]')
let input_hiddens = document.querySelectorAll('.enlaces input[type="hidden"]')
let btns_main = document.querySelectorAll('#edit_principal button')


let viewModal = (modal,idContenido) =>{
   uimodal = document.getElementById(`modal_${modal}`)
   hide_input = document.getElementById(`hide_${modal}`)
   uimodal.classList.add('is-active')
   hide_input.value = idContenido
   url = `/panel/misposts/${modal}/${idContenido}`
   fetchDataPosts(url,modal)
}

let fetchDataPosts = (url,form) => {
    fetch(url)
        .then(response => response.json())
        .then(data => {
            fillData(data,form)
        })
}

let fillData = (data,form) => {
        if(form === "principal"){
            fillDataPrincipal(data,form)
        }else if(form === "enlaces"){
            fillDataEnlaces(data)
        }
}

let fillDataPrincipal = (data,form) => {
   let fr_main = document.getElementById(`form_${form}`)
   let edit_main = document.getElementById(`editor_${form}`)
   fr_main.select_posts.value = data[0].categoria_id;
   fr_main.titulo.value = data[0].contenidotitulo;
   edit_main.innerHTML = data[0].contenidomain;
}


let fillDataEnlaces = (data) =>{
    fillInputs(data,input_titulos,input_urls,input_hiddens)
}

let fillInputs = (data,titulos,urls,hiddens) => {
    for (let i = 0; i < titulos.length; i++) {
        hiddens[i].value = data[i].id
        titulos[i].value = data[i].enlace_titulo
        urls[i].value = data[i].enlace_url
    }
}

let editorCommandExecute = (cmd) =>{
    document.execCommand(cmd);
}


form_enlaces.addEventListener('submit',(e)=>{
    e.preventDefault()
    input_titulos.forEach(item => a_titulos.push(item.value))
    input_urls.forEach(item => a_urls.push(item.value))
    input_hiddens.forEach(item => a_hiddens.push(item.value))
    operations.updateFormEnlaces({
        hiddens:a_hiddens,
        titulos:a_titulos,
        urls:a_urls
    })
    form_enlaces.reset()
})


form_principal.addEventListener('submit',function(e){
        e.preventDefault();
        let editor_main = document.getElementById('editor_principal')
        operations.updateFormPrincipal({
            idcontenido:form_principal.idcontenido.value,
            idcategoria:form_principal.select_posts.value,
            titulo:form_principal.titulo.value,
            contenido:editor_main.innerHTML
        })
        form_principal.reset()
        editor_main.innerHTML = ""
})

document.getElementById('md_close_main').addEventListener('click',(e) =>{
    e.preventDefault()
    let modal = document.getElementById('modal_principal')
    modal.classList.remove('is-active')
})

document.getElementById('md_close_enlaces').addEventListener('click',(e) =>{
    e.preventDefault()
    let modal = document.getElementById('modal_enlaces')
    modal.classList.remove('is-active')
    location.reload()
})

btns_main.forEach((btn) =>{
    btn.onclick = (e) => {
        editorCommandExecute(e.target.dataset.editor)
    }
})

table__posts.forEach(item => {
    item.onclick = (e) =>{
        viewModal(e.target.dataset.btn,
            e.target.dataset.postid)
    }
})

