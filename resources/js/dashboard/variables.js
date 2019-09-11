let modal_user = document.getElementById('modal_user')
let modal_background = document.getElementById('modal_background')
let btn_user_close = document.getElementById('modal_close')
let btn_user_create =  document.getElementById('btn_user')
let form_user = document.getElementById('form_user')
let message_create_user  = document.getElementById('message_create_user')
let message_edit_user = document.getElementById('message_edit_user')
let buttons_edit_user = document.querySelectorAll('#btn__edit--user');
let form_actionType = document.getElementById('form__actionType')
let action_hidden = document.getElementById('action_hidden')
let id_hidden = document.getElementById('id_hidden')
let button_action_user  = document.getElementById('button__action--user')



export default {
    /*variables*/
    modal_user:modal_user,
    modal_background: modal_background,
    btn_user_close: btn_user_close,
    btn_user_create: btn_user_create,
    form_user: form_user,
    message_create_user:message_create_user,
    message_edit_user:message_edit_user,
    buttons_edit_user:buttons_edit_user,
    form_actionType:form_actionType,
    action_hidden:action_hidden,
    button_action_user:button_action_user,
    id_hidden:id_hidden,

    /*Funciones*/
    attributesUser: function({ clase,title,action,button }){
        modal_user.classList.add(clase)
        form_actionType.innerHTML = title
        action_hidden.value = action
        button_action_user.textContent = button
    }
}








