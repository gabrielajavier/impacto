import v_categorias from "./variables_categorias";

let id_categoria , texto_categoria




Array.prototype.forEach.call(v_categorias.inputs_radio,(item) =>{
    item.onclick = (e) => {
        v_categorias.tipo_archivo.value = e.target.value
        v_categorias.tipo_archivo2.value = e.target.value
    }
});



v_categorias.select_categorias.addEventListener('change',(e) => {
    id_categoria = v_categorias.select_categorias.value
    texto_categoria = v_categorias.select_categorias.options[
        v_categorias.select_categorias.selectedIndex].innerText
    v_categorias.title_categoria.innerText = texto_categoria
})
