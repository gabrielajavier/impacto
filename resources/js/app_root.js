import variables_noticias from "./dashboard/variables_noticias";
let menu_icon = document.getElementById('menu_icon')
let menu_close = document.getElementById('menu_close')
let menu_items = document.querySelectorAll('.panel__categories--item a')


menu_icon.onclick = () => {
    menu_close.classList.toggle('show')
}



/*fetch("/mantenimiento/menu")
    .then(response => response.json())
    .then(data => {
        //let noticiaId = data[0].id
        //variables_noticias.form_noticias_principal.action = `/panel/noticias/${noticiaId}`
        data.forEach((item,index) => {
           menu_items[index].href = `${menu_items[index].href}/${item.id}`
           menu_items[index].id = item.id
           menu_items[index].text = item.nombre_categoria
    })})*/



