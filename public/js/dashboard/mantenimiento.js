!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=56)}({56:function(e,t,n){e.exports=n(60)},60:function(e,t,n){"use strict";n.r(t);var r,o=document.getElementById("modal_user"),a=document.getElementById("modal_background"),u=document.getElementById("modal_close"),i=document.getElementById("btn_user"),c=document.getElementById("form_user"),s=document.getElementById("message_create_user"),d=document.getElementById("message_edit_user"),l=document.querySelectorAll("#btn__edit--user"),m=document.getElementById("form__actionType"),f=document.getElementById("action_hidden"),_=document.getElementById("id_hidden"),y=document.getElementById("button__action--user"),p={modal_user:o,modal_background:a,btn_user_close:u,btn_user_create:i,form_user:c,message_create_user:s,message_edit_user:d,buttons_edit_user:l,form_actionType:m,action_hidden:f,button_action_user:y,id_hidden:_,attributesUser:function(e){var t=e.clase,n=e.title,r=e.action,a=e.button;o.classList.add(t),m.innerHTML=n,f.value=r,y.textContent=a}};function v(e){return function(e){if(Array.isArray(e)){for(var t=0,n=new Array(e.length);t<e.length;t++)n[t]=e[t];return n}}(e)||function(e){if(Symbol.iterator in Object(e)||"[object Arguments]"===Object.prototype.toString.call(e))return Array.from(e)}(e)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance")}()}p.btn_user_create.onclick=function(){p.attributesUser({clase:"is-active",title:"Crear Usuario",action:"add",button:"Crear Usuario"})},p.btn_user_close.onclick=function(e){e.preventDefault(),p.modal_user.classList.remove("is-active"),p.message_create_user.classList.add("hide__message--user"),location.reload()},p.modal_background.onclick=function(){p.modal_user.classList.remove("is-active"),location.reload()};var b=function(e){var t=e.usuario,n=e.email,o=e.clave,a=e.estado,u=e.id;p.form_user.action="/mantenimiento/".concat(u),p.form_user.usuario.value=t,p.form_user.correo.value=n,p.form_user.clave.value=o,p.form_user.idAction.value=u,r=!0===a?0:1,p.form_user.estado[r].checked=!0};Array.prototype.forEach.call(p.buttons_edit_user,function(e){e.onclick=function(e){var t;e.preventDefault(),t=e.target.dataset.id,p.attributesUser({clase:"is-active",title:"Editar Usuario",action:"edit",button:"Editar Usuario"}),fetch("/mantenimiento/".concat(t)).then(function(e){return e.json()}).then(function(e){console.log(e),b.apply(void 0,v(e))})}}),p.form_user.addEventListener("submit",function(e){var t;e.preventDefault(),"add"===(t={usuario:p.form_user.usuario.value,correo:p.form_user.correo.value,clave:p.form_user.clave.value,estado:p.form_user.estado.value,action:p.form_user.actionType.value,id:p.form_user.idAction.value}).action?(fetch("/mantenimiento",{method:"POST",headers:{Accept:"application/json","Content-Type":"application/json","X-CSRF-TOKEN":document.querySelector("meta[name=csrf-token]").content},body:JSON.stringify(t)}).then(function(e){return e.json()}).then(function(e){return!0===e?p.message_create_user.classList.remove("hide__message--user"):""}),p.form_user.reset()):"edit"===t.action&&(fetch("/mantenimiento/".concat(t.id),{method:"POST",headers:{Accept:"application/json","Content-Type":"application/json","X-CSRF-TOKEN":document.querySelector("meta[name=csrf-token]").content},body:JSON.stringify(t)}).then(function(e){return e.json()}).then(function(e){return!0===e?p.message_edit_user.classList.remove("hide__message--user"):""}),p.form_user.reset())})}});