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
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/dashboard/categoria.js":
/*!*********************************************!*\
  !*** ./resources/js/dashboard/categoria.js ***!
  \*********************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _variables_categorias__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./variables_categorias */ "./resources/js/dashboard/variables_categorias.js");

var id_categoria, texto_categoria;
Array.prototype.forEach.call(_variables_categorias__WEBPACK_IMPORTED_MODULE_0__["default"].inputs_radio, function (item) {
  item.onclick = function (e) {
    _variables_categorias__WEBPACK_IMPORTED_MODULE_0__["default"].tipo_archivo.value = e.target.value;
    _variables_categorias__WEBPACK_IMPORTED_MODULE_0__["default"].tipo_archivo2.value = e.target.value;
  };
});
_variables_categorias__WEBPACK_IMPORTED_MODULE_0__["default"].select_categorias.addEventListener('change', function (e) {
  id_categoria = _variables_categorias__WEBPACK_IMPORTED_MODULE_0__["default"].select_categorias.value;
  texto_categoria = _variables_categorias__WEBPACK_IMPORTED_MODULE_0__["default"].select_categorias.options[_variables_categorias__WEBPACK_IMPORTED_MODULE_0__["default"].select_categorias.selectedIndex].innerText;
  _variables_categorias__WEBPACK_IMPORTED_MODULE_0__["default"].title_categoria.innerText = texto_categoria;
});

/***/ }),

/***/ "./resources/js/dashboard/variables_categorias.js":
/*!********************************************************!*\
  !*** ./resources/js/dashboard/variables_categorias.js ***!
  \********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var select_categorias = document.getElementById('categorias');
var title_categoria = document.getElementById('title_categoria');
var inputs_radio = document.querySelectorAll('#noticias_secundario input[type="radio"]');
var tipo_archivo = document.getElementById('tipo_archivo');
var tipo_archivo2 = document.getElementById('tipo_archivo2');
/* harmony default export */ __webpack_exports__["default"] = ({
  select_categorias: select_categorias,
  title_categoria: title_categoria,
  inputs_radio: inputs_radio,
  tipo_archivo: tipo_archivo,
  tipo_archivo2: tipo_archivo2
});

/***/ }),

/***/ 4:
/*!***************************************************!*\
  !*** multi ./resources/js/dashboard/categoria.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\51920\Desktop\app_mmm\mmm\resources\js\dashboard\categoria.js */"./resources/js/dashboard/categoria.js");


/***/ })

/******/ });