let menu_icon = document.getElementById('menu_icon')
let menu_close = document.getElementById('menu_close')
let menu_items = document.querySelectorAll('.panel__categories--item a')


menu_icon.onclick = () => {
    menu_close.classList.toggle('show')
}


fetch("/mantenimiento/menu")
    .then(response => response.json())
    .then(data => {
       data.forEach((item,index) => {
           menu_items[index].id = item.id
           menu_items[index].text = item.nombre_categoria
    })})



