let tabs = document.querySelectorAll(' #noticias_list a')
let noticia_content1 = document.getElementById('noticia_content_1')
let noticia_content2 = document.getElementById('noticia_content_2')
let noticia_content3 = document.getElementById('noticia_content_3')
let form_content1 = document.getElementById('form_content1')
let form_content2 = document.getElementById('form_content2')
let form_content3 = document.getElementById('form_content3')


let tabSelect = (tab_select) => {
    tabs.forEach(item =>{
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

Array.prototype.forEach.call(tabs,(item)=>{
    item.onclick = (e) => {
        e.preventDefault()
        tabSelect(e.target.dataset.tab)
    }
})

noticia_content1.onclick = () => form_content1.classList.toggle('hide')
noticia_content2.onclick = () => form_content2.classList.toggle('hide')
noticia_content3.onclick = () => form_content3.classList.toggle('hide')


