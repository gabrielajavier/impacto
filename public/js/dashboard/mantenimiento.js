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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/dashboard/mantenimiento.js":
/*!*************************************************!*\
  !*** ./resources/js/dashboard/mantenimiento.js ***!
  \*************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _variables_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./variables.js */ "./resources/js/dashboard/variables.js");
function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance"); }

function _iterableToArray(iter) { if (Symbol.iterator in Object(iter) || Object.prototype.toString.call(iter) === "[object Arguments]") return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = new Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } }


var index_input_radio;

_variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].btn_user_create.onclick = function () {
  _variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].attributesUser({
    clase: 'is-active',
    title: 'Crear Usuario',
    action: "add",
    button: "Crear Usuario"
  });
};

_variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].btn_user_close.onclick = function (e) {
  e.preventDefault();
  _variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].modal_user.classList.remove('is-active');
  _variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].message_create_user.classList.add('hide__message--user');
  location.reload();
};

_variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].modal_background.onclick = function () {
  _variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].modal_user.classList.remove('is-active');
  location.reload();
};

var formAjaxPostUser = function formAjaxPostUser(data) {
  if (data.action === "add") {
    fetch("/mantenimiento", {
      method: "POST",
      headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector("meta[name=csrf-token]").content
      },
      body: JSON.stringify(data)
    }).then(function (response) {
      return response.json();
    }).then(function (data) {
      return data === true ? _variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].message_create_user.classList.remove('hide__message--user') : '';
    });
    _variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].form_user.reset();
  } else if (data.action === "edit") {
    fetch("/mantenimiento/".concat(data.id), {
      method: "POST",
      headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector("meta[name=csrf-token]").content
      },
      body: JSON.stringify(data)
    }).then(function (response) {
      return response.json();
    }).then(function (data) {
      return data === true ? _variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].message_edit_user.classList.remove('hide__message--user') : '';
    });
    _variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].form_user.reset();
  }
};

var formAjaxGetEditUser = function formAjaxGetEditUser(id) {
  _variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].attributesUser({
    clase: 'is-active',
    title: 'Editar Usuario',
    action: "edit",
    button: "Editar Usuario"
  });
  fetch("/mantenimiento/".concat(id)).then(function (response) {
    return response.json();
  }).then(function (data) {
    console.log(data);
    fillFormData.apply(void 0, _toConsumableArray(data));
  });
};

var fillFormData = function fillFormData(_ref) {
  var usuario = _ref.usuario,
      email = _ref.email,
      clave = _ref.clave,
      estado = _ref.estado,
      id = _ref.id;
  _variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].form_user.action = "/mantenimiento/".concat(id);
  _variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].form_user.usuario.value = usuario;
  _variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].form_user.correo.value = email;
  _variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].form_user.clave.value = clave;
  _variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].form_user.idAction.value = id;
  index_input_radio = estado === true ? 0 : 1;
  _variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].form_user.estado[index_input_radio].checked = true;
};

Array.prototype.forEach.call(_variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].buttons_edit_user, function (input) {
  input.onclick = function (e) {
    e.preventDefault();
    formAjaxGetEditUser(e.target.dataset.id);
  };
});
_variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].form_user.addEventListener('submit', function (e) {
  e.preventDefault();
  formAjaxPostUser({
    usuario: _variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].form_user.usuario.value,
    correo: _variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].form_user.correo.value,
    clave: _variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].form_user.clave.value,
    estado: _variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].form_user.estado.value,
    action: _variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].form_user.actionType.value,
    id: _variables_js__WEBPACK_IMPORTED_MODULE_0__["default"].form_user.idAction.value
  });
});

/***/ }),

/***/ "./resources/js/dashboard/variables.js":
/*!*********************************************!*\
  !*** ./resources/js/dashboard/variables.js ***!
  \*********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var modal_user = document.getElementById('modal_user');
var modal_background = document.getElementById('modal_background');
var btn_user_close = document.getElementById('modal_close');
var btn_user_create = document.getElementById('btn_user');
var form_user = document.getElementById('form_user');
var message_create_user = document.getElementById('message_create_user');
var message_edit_user = document.getElementById('message_edit_user');
var buttons_edit_user = document.querySelectorAll('#btn__edit--user');
var form_actionType = document.getElementById('form__actionType');
var action_hidden = document.getElementById('action_hidden');
var id_hidden = document.getElementById('id_hidden');
var button_action_user = document.getElementById('button__action--user');
/* harmony default export */ __webpack_exports__["default"] = ({
  /*variables*/
  modal_user: modal_user,
  modal_background: modal_background,
  btn_user_close: btn_user_close,
  btn_user_create: btn_user_create,
  form_user: form_user,
  message_create_user: message_create_user,
  message_edit_user: message_edit_user,
  buttons_edit_user: buttons_edit_user,
  form_actionType: form_actionType,
  action_hidden: action_hidden,
  button_action_user: button_action_user,
  id_hidden: id_hidden,

  /*Funciones*/
  attributesUser: function attributesUser(_ref) {
    var clase = _ref.clase,
        title = _ref.title,
        action = _ref.action,
        button = _ref.button;
    modal_user.classList.add(clase);
    form_actionType.innerHTML = title;
    action_hidden.value = action;
    button_action_user.textContent = button;
  }
});

/***/ }),

/***/ 2:
/*!*******************************************************!*\
  !*** multi ./resources/js/dashboard/mantenimiento.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\51920\Desktop\app_mmm\mmm\resources\js\dashboard\mantenimiento.js */"./resources/js/dashboard/mantenimiento.js");


/***/ })

/******/ });