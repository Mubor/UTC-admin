/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/js/lib/menu.js":
/*!*******************************!*\
  !*** ./assets/js/lib/menu.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n\nconst menuActivator = (buttonSelector, moveDownElementSelector) => {\n    const menuButton = document.getElementById(buttonSelector);\n    const header = document.querySelector(moveDownElementSelector);\n\n    const switchMenu = () => {\n        header.classList.toggle('open');\n        document.body.classList.toggle('overflow');\n        \n        if (header.classList[header.classList.length-1] === 'open') {\n            menuButton.innerHTML = localStorage.getItem('lang') === 'ua'\n                ? 'закрити меню' : 'close menu';\n        }\n        else {\n            menuButton.innerHTML = localStorage.getItem('lang') === 'ua'\n                ? 'меню' : 'menu';\n        }\n    }\n\n    menuButton.addEventListener('click', switchMenu);\n}\n\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (menuActivator);\n\n\n\n\n\n\n//# sourceURL=webpack:///./assets/js/lib/menu.js?");

/***/ }),

/***/ "./assets/js/lib/translator.js":
/*!*************************************!*\
  !*** ./assets/js/lib/translator.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"translatePage\": () => (/* binding */ translatePage)\n/* harmony export */ });\n\r\nconst data = {\r\n    header: {\r\n        \"menu-button\" : {\r\n            eng: 'MENU',\r\n            ua: 'МЕНЮ',\r\n        },\r\n        \"link-1\": {\r\n            eng: 'HOME',\r\n            ua: 'ГОЛОВНА',\r\n        },\r\n        \"link-2\": {\r\n            eng: 'WORKS',\r\n            ua: 'РОБОТИ',\r\n        },\r\n        \"link-3\": {\r\n            eng: 'TEAM',\r\n            ua: 'КОМАНДА',\r\n        },\r\n        \"link-4\": {\r\n            eng: 'SERVICES',\r\n            ua: 'СЕРВІСИ',\r\n        },\r\n        \"link-5\": {\r\n            eng: 'CONTACTS',\r\n            ua: 'КОНТАКТИ',\r\n        },\r\n    },\r\n    home: {\r\n        \r\n    },\r\n    contacts: {\r\n        \"title-1\": {\r\n            eng: 'YOU CAN:',\r\n            ua: 'ТИ МОЖЕШ:',\r\n        },\r\n        \"title-2\": {\r\n            eng: `<span class=\"spec-violet\">~</span>TEXT U<span class=\"spec-orange\">$</span>`,\r\n            ua: `<span class=\"spec-violet\">~</span>НАПИСАТИ`,\r\n        },\r\n        \"title-3\": {\r\n            eng: `<span class=\"spec-violet\">~</span>C&commat;LL US`,\r\n            ua: `<span class=\"spec-violet\">~</span>ПОДЗВОНИТИ`,\r\n        },\r\n        \"text-1\": {\r\n            eng: 'OR YOU CAN JUST MEET US ON THE FUCKING AWESOME ROOF',\r\n            ua: 'АБО ПРОСТО ЗУСТРІТИСЯ З НАМИ НА ПРЕКРАСНОМУ ДАХУ',\r\n        },\r\n        \"text-2\": {\r\n            eng: `KOZHUMIATSKA 16B ST, KYIV, UKRAINE`,\r\n            ua: `КОЖУМ'ЯЦЬКА 16Б, КИЇВ, УКРАЇНА`,\r\n        },\r\n        \"btn-1\": {\r\n            eng: `invite for a date`,\r\n            ua: `побачення з UTC`,\r\n        },\r\n        \"btn-2\": {\r\n            eng: `invite for a date`,\r\n            ua: `побачення з UTC`,\r\n        },\r\n        \"form-close\": {\r\n            eng: `CLOSE`,\r\n            ua: `ЗАКРИТИ`,\r\n        },\r\n        \"form-text\": {\r\n            eng: `<span class=\"app-dialog__message\">HELLO! MY NAME IS</span>\r\n            <label for=\"fullname\">\r\n                <div class=\"placeholder\">input your full name</div>\r\n                <input type=\"text\" name=\"fullname\" id=\"fullname\" required><span class=\"error\"></span>.\r\n            </label>\r\n            <span class=\"app-dialog__message\"> YOUR WORKS SINCERELY BURNED INTO MY SOUL, SO I WILL LEAVE MY EMAIL</span>\r\n            <label for=\"email\">\r\n                <div class=\"placeholder\">input your email</div>\r\n                <input type=\"email\" name=\"email\" id=\"email\" required><span class=\"error\"></span>.\r\n            </label>\r\n            <span class=\"app-dialog__message\"> AND PHONE NUMBER  HERE</span>\r\n            <label for=\"phone\">\r\n                    <div class=\"placeholder\">input your phone number</div>\r\n                    <input type=\"tel\" name=\"phone\" id=\"phone\" ><span class=\"error\"></span>.\r\n                </label>\r\n                <span class=\"app-dialog__message\">SO WE CAN SCHEDULE A MEETING WITH THE UTC TEAM, ONLINE OR ON YOUR FUCKING AWESOME ROOF, AND DISCUSS ANY QUESTIONS I MAY HAVE. I WILL BE FREE</span>\r\n                <label for=\"time\">\r\n                    <div class=\"placeholder\">input date</div>\r\n                    <input type=\"datetime-local\" name=\"time\" id=\"time\" value=\"\" required><span class=\"error\"></span>.\r\n                </label>\r\n                <span class=\"app-dialog__message\">I'M LOOKING FORWARD TO! (YOUR FUTURE FRIEND)</span>\r\n                <label for=\"button\">\r\n                    <input type=\"submit\" value=\"Invite for a date\" id=\"button\">\r\n                </label>`,\r\n            ua: `<span class=\"app-dialog__message\">ПРИВІТ! МЕНЕ ЗВАТИ</span>\r\n            <label for=\"fullname\">\r\n                <div class=\"placeholder\">введіть повне ім'я</div>\r\n                <input type=\"text\" name=\"fullname\" id=\"fullname\" required><span class=\"error\"></span>.\r\n            </label>\r\n            <span class=\"app-dialog__message\"> ВАШІ РОБОТИ ЩИРО ПРИПАЛИ МЕНІ ДО ДУШІ, ТОЖ Я ЗАЛИШУ ТУТ СВІЙ ЕМЕЙЛ</span>\r\n            <label for=\"email\">\r\n                <div class=\"placeholder\">введіть вашу пошту</div>\r\n                <input type=\"email\" name=\"email\" id=\"email\" required><span class=\"error\"></span>.\r\n            </label>\r\n            <span class=\"app-dialog__message\"> ТА НОМЕР ТЕЛЕФОНУ</span>\r\n            <label for=\"phone\">\r\n                    <div class=\"placeholder\">введіть номер телефону</div>\r\n                    <input type=\"tel\" name=\"phone\" id=\"phone\" ><span class=\"error\"></span>.\r\n                </label>\r\n                <span class=\"app-dialog__message\">АБИ МИ МОГЛИ ЗАПЛАНУВАТИ ЗУСТРІЧ З КОМАНДОЮ UTC, ОНЛАЙН АБО НА ВАШОМУ ПРЕКРАСНОМУ ДАХУ, ТА ОБГОВОРИТИ МОЇ БУДЬ-ЯКІ ПИТАННЯ. МАТИМУ ВІЛЬНИЙ ЧАС</span>\r\n                <label for=\"time\">\r\n                    <div class=\"placeholder\">введіть дату</div>\r\n                    <input type=\"datetime-local\" name=\"time\" id=\"time\" value=\"\" required><span class=\"error\"></span>.\r\n                </label>\r\n                <span class=\"app-dialog__message\">З НЕТЕРПІННЯМ ЧЕКАЮ! (ВАШ МАЙБУТНІЙ ДРУГ)</span>\r\n                <label for=\"button\">\r\n                    <input type=\"submit\" value=\"Побачення з UTC\" id=\"button\">\r\n                </label>`,\r\n        },\r\n\r\n    },\r\n    services: {\r\n        \"desc-title-1\": {\r\n            eng: `<span>STRONG</span> <span>CRE@TIVE<span class=\"spec-violet\">±</span></span>`,\r\n            ua: `<span>КРЕ@ТИВНИЙ</span> <span>ЮНІТ<span class=\"spec-violet\">±</span></span>`,\r\n        },\r\n        \"desc-list-1\": {\r\n            eng: `<li>360° marketing campaign</li>\r\n            <li>Communication strategy</li>\r\n            <li>MultiChannel Experience</li>\r\n            <li>Product development</li>\r\n            <li>Branding and packaging</li>`,\r\n            ua: `<li>Рекламні кампанії 360°</li>\r\n            <li>Комунікаційна стратегія</li>\r\n            <li>Багатоканальний контент</li>\r\n            <li>Розробка продуктів</li>\r\n            <li>Брендинг та пакування</li>`,\r\n        },\r\n        \"desc-title-2\": {\r\n            eng: `<span class=\"description__title\">FULL <span class=\"spec-orange\">$</span>ERVICE</span>\r\n            <span class=\"description__title\">/VIDEO PRODUCTION</span>`,\r\n            ua: `<span class=\"description__title\">ВІДЕО ПРОДАКШН</span>\r\n            <span class=\"description__title\">/ПОВНОГО ЦИКЛУ</span>`,\r\n        },\r\n        \"desc-list-2\": {\r\n            eng: `<li>Films</li>\r\n            <li>Photo shots</li>\r\n            <li>2D/3D animation</li>\r\n            <li>Stop motion/Craft</li>\r\n            <li>Adaptation</li>`,\r\n            ua: `<li>Відеоролики</li>\r\n            <li>Фотозйомка</li>\r\n            <li>2D/3D animation</li>\r\n            <li>Стопмоушн/Крафт</li>\r\n            <li>Адаптація</li>`,\r\n        },\r\n\r\n        \"slogan\": {\r\n            eng: `Pimp your brand<span>,</span> du<span>uuu</span>de`,\r\n            ua: 'Змушуємо бренди кращати'\r\n        }\r\n        \r\n    },\r\n    works: {\r\n\r\n    },  \r\n    team: {\r\n\r\n    }\r\n}\r\n\r\nconst translatePage = (dataset, lang) => {\r\n    const eng = [...document.querySelectorAll('[data-lang=\"eng\"]')];\r\n    const ua = [...document.querySelectorAll('[data-lang=\"ua\"]')];\r\n    const texts = {\r\n        eng, \r\n        ua\r\n    }\r\n    \r\n    for (const key in texts) {\r\n        const arr = texts[key];\r\n        if(key === lang) {\r\n            arr.forEach( e => {\r\n                e.style.display = 'block';\r\n            });\r\n        }\r\n        else {\r\n            arr.forEach( e => {\r\n                e.style.display = 'none';\r\n            });\r\n        }\r\n    }\r\n   \r\n}\r\n\n\n//# sourceURL=webpack:///./assets/js/lib/translator.js?");

/***/ }),

/***/ "./assets/js/simple_page.js":
/*!**********************************!*\
  !*** ./assets/js/simple_page.js ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _lib_menu__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./lib/menu */ \"./assets/js/lib/menu.js\");\n/* harmony import */ var _lib_translator__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./lib/translator */ \"./assets/js/lib/translator.js\");\n\r\n\r\n\r\n\r\nconst currentLang = localStorage.getItem('lang');\r\nconsole.log(currentLang);\r\n\r\n(0,_lib_menu__WEBPACK_IMPORTED_MODULE_0__[\"default\"])('menu-button', 'header');\r\n\r\nwindow.onload = () => {\r\n    if(currentLang !== 'eng') {\r\n        (0,_lib_translator__WEBPACK_IMPORTED_MODULE_1__.translatePage)('services', currentLang);\r\n    }\r\n}\n\n//# sourceURL=webpack:///./assets/js/simple_page.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./assets/js/simple_page.js");
/******/ 	
/******/ })()
;