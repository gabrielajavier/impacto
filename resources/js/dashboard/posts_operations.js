let updateFormPrincipal = ({idcontenido,idcategoria,titulo,contenido}) => {
    let formData = new FormData()
    formData.append('idcategoria',idcategoria);
    formData.append('titulo',titulo);
    formData.append('contenido',contenido);
    fetch(`/panel/misposts/principal/${idcontenido}`,{
        method:"POST",
        headers:{
            'X-CSRF-TOKEN':document.querySelector("meta[name=csrf-token]").content
        },
        body:formData
    }).then(response => response.json())
        .then(data =>   messageAlert(data,'principal'))
}

let updateFormEnlaces = ({hiddens,titulos,urls}) =>{
   let formData = new FormData();
    formData.append('hiddens',hiddens);
    formData.append('titulos',titulos);
    formData.append('urls',urls);
    fetch(`/panel/misposts/enlaces/`,{
        method:"POST",
        headers:{
            'X-CSRF-TOKEN':document.querySelector("meta[name=csrf-token]").content
        },
        body:formData
    }).then(response => response.json())
        .then(data =>   messageAlert(data,'enlaces'))
}



let messageAlert = (data,mensaje) => {
    let message = document.getElementById(`message_${mensaje}`)
    if(data){
        message.classList.remove('hide')
        setTimeout(() => {
            message.classList.add('hide')
        }, 2000)
    }
}






module.exports = {
    updateFormPrincipal,
    updateFormEnlaces
}
