import variables from './variables.js'
let index_input_radio


variables.btn_user_create.onclick = () => {
    variables.attributesUser({
            clase: 'is-active',
            title: 'Crear Usuario',
            action: "add",
            button: "Crear Usuario"
        })
}

variables.btn_user_close.onclick = (e) => {
    e.preventDefault()
    variables.modal_user.classList.remove('is-active')
    variables.message_create_user.classList.add('hide__message--user')
    location.reload()
}

variables.modal_background.onclick = () => {
    variables.modal_user.classList.remove('is-active')
    location.reload()
}


let formAjaxPostUser  = (data) => {
   if(data.action === "add"){
       fetch("/mantenimiento",{
           method:"POST",
           headers: {
               'Accept': 'application/json',
               'Content-Type': 'application/json',
               'X-CSRF-TOKEN':document.querySelector("meta[name=csrf-token]").content
           },
           body:JSON.stringify(data)
       }).then(response => response.json())
           .then(data  =>  data === true ?
               variables.message_create_user.classList.remove('hide__message--user') : '')
       variables.form_user.reset()
   }else if(data.action === "edit"){
       fetch(`/mantenimiento/${data.id}`,{
           method:"POST",
           headers: {
               'Accept': 'application/json',
               'Content-Type': 'application/json',
               'X-CSRF-TOKEN':document.querySelector("meta[name=csrf-token]").content
           },
           body:JSON.stringify(data)
       }) .then(response => response.json())
             .then(data  =>  data === true ?
               variables.message_edit_user.classList.remove('hide__message--user') : '')
       variables.form_user.reset()
   }
}


let formAjaxGetEditUser = (id) => {
    variables.attributesUser({
        clase: 'is-active',
        title: 'Editar Usuario',
        action: "edit",
        button: "Editar Usuario"
    })

    fetch(`/mantenimiento/${id}`)
       .then(response => response.json())
       .then(data => {
               fillFormData(...data)
       })
}


let fillFormData = ({nombres,apellidos,usuario,email,clave,estado,id}) => {
        variables.form_user.action = `/mantenimiento/${id}`
        variables.form_user.nombres.value = nombres
        variables.form_user.apellidos.value = apellidos
        variables.form_user.usuario.value = usuario
        variables.form_user.correo.value = email
        variables.form_user.clave.value = clave
        variables.form_user.idAction.value = id
        index_input_radio  = estado === true ? 0 : 1
        variables.form_user.estado[index_input_radio].checked = true
}




Array.prototype.forEach.call(variables.buttons_edit_user,(input) =>{
   input.onclick = (e) => {
       e.preventDefault()
       formAjaxGetEditUser(e.target.dataset.id)
   }
})

variables.form_user.addEventListener('submit',function(e){
    e.preventDefault()
    formAjaxPostUser({
        nombres:variables.form_user.nombres.value,
        apellidos:variables.form_user.apellidos.value,
        usuario:variables.form_user.usuario.value,
        correo:variables.form_user.correo.value,
        clave:variables.form_user.clave.value,
        estado:variables.form_user.estado.value,
        action:variables.form_user.actionType.value,
        id:variables.form_user.idAction.value
    })
})


