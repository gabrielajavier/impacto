import v_noticias from "./variables_noticias";
let inputs_noticias = document.querySelectorAll('#noticias_enlaces input[type="text"]')


let tabSelect = (tab_select) => {
    v_noticias.tabs.forEach(item =>{
        let data_tab = item.dataset.tab
        let element  = document.getElementById(data_tab)
        if(tab_select === data_tab){
             item.classList.add('active_link')
            element.classList.remove('hide')
        }else{
            item.classList.remove('active_link')
            element.classList.add('hide')
        }
    })
}


Array.prototype.forEach.call(v_noticias.tabs,(item)=>{
    item.onclick = (e) => {
         e.preventDefault()
         tabSelect(e.target.dataset.tab)
    }
})


v_noticias.noticia_content1.onclick = () => v_noticias.form_content1.classList.toggle('hide')
v_noticias.noticia_content2.onclick = () => v_noticias.form_content2.classList.toggle('hide')
v_noticias.noticia_content3.onclick = () => v_noticias.form_content3.classList.toggle('hide')








