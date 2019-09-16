/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app_root.js":
/*!**********************************!*\
  !*** ./resources/js/app_root.js ***!
  \**********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _dashboard_variables_noticias__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./dashboard/variables_noticias */ "./resources/js/dashboard/variables_noticias.js");

var menu_icon = document.getElementById('menu_icon');
var menu_close = document.getElementById('menu_close');
var menu_items = document.querySelectorAll('.panel__categories--item a');

menu_icon.onclick = function () {
  menu_close.classList.toggle('show');
};
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

/***/ }),

/***/ "./resources/js/dashboard/variables_noticias.js":
/*!******************************************************!*\
  !*** ./resources/js/dashboard/variables_noticias.js ***!
  \******************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var tabs = document.querySelectorAll(' #noticias_list a');
var noticia_content1 = document.getElementById('noticia_content_1');
var noticia_content2 = document.getElementById('noticia_content_2');
var noticia_content3 = document.getElementById('noticia_content_3');
var form_content1 = document.getElementById('form_content1');
var form_content2 = document.getElementById('form_content2');
var form_content3 = document.getElementById('form_content3');
/* harmony default export */ __webpack_exports__["default"] = ({
  tabs: tabs,
  noticia_content1: noticia_content1,
  noticia_content2: noticia_content2,
  noticia_content3: noticia_content3,
  form_content1: form_content1,
  form_content2: form_content2,
  form_content3: form_content3
});

/***/ }),

/***/ 1:
/*!****************************************!*\
  !*** multi ./resources/js/app_root.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\51920\Desktop\app_mmm\mmm\resources\js\app_root.js */"./resources/js/app_root.js");


/***/ })

/******/ });