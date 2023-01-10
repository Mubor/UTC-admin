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

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"translatePage\": () => (/* binding */ translatePage)\n/* harmony export */ });\n\nconst data = {\n    header: {\n        \"menu-button\" : {\n            eng: 'MENU',\n            ua: 'МЕНЮ',\n        },\n        \"link-1\": {\n            eng: 'HOME',\n            ua: 'ГОЛОВНА',\n        },\n        \"link-2\": {\n            eng: 'WORKS',\n            ua: 'РОБОТИ',\n        },\n        \"link-3\": {\n            eng: 'TEAM',\n            ua: 'КОМАНДА',\n        },\n        \"link-4\": {\n            eng: 'SERVICES',\n            ua: 'СЕРВІСИ',\n        },\n        \"link-5\": {\n            eng: 'CONTACTS',\n            ua: 'КОНТАКТИ',\n        },\n    },\n    home: {\n        \n    },\n    contacts: {\n        \"title-1\": {\n            eng: 'YOU CAN:',\n            ua: 'ТИ МОЖЕШ:',\n        },\n        \"title-2\": {\n            eng: `<span class=\"spec-violet\">~</span>TEXT U<span class=\"spec-orange\">$</span>`,\n            ua: `<span class=\"spec-violet\">~</span>НАПИСАТИ`,\n        },\n        \"title-3\": {\n            eng: `<span class=\"spec-violet\">~</span>C&commat;LL US`,\n            ua: `<span class=\"spec-violet\">~</span>ПОДЗВОНИТИ`,\n        },\n        \"text-1\": {\n            eng: 'OR YOU CAN JUST MEET US ON THE FUCKING AWESOME ROOF',\n            ua: 'АБО ПРОСТО ЗУСТРІТИСЯ З НАМИ НА ПРЕКРАСНОМУ ДАХУ',\n        },\n        \"text-2\": {\n            eng: `KOZHUMIATSKA 16B ST, KYIV, UKRAINE`,\n            ua: `КОЖУМ'ЯЦЬКА 16Б, КИЇВ, УКРАЇНА`,\n        },\n        \"btn-1\": {\n            eng: `invite for a date`,\n            ua: `побачення з UTC`,\n        },\n        \"btn-2\": {\n            eng: `invite for a date`,\n            ua: `побачення з UTC`,\n        },\n        \"form-close\": {\n            eng: `CLOSE`,\n            ua: `ЗАКРИТИ`,\n        },\n        \"form-text\": {\n            eng: `<span class=\"app-dialog__message\">HELLO! MY NAME IS</span>\n            <label for=\"fullname\">\n                <div class=\"placeholder\">input your full name</div>\n                <input type=\"text\" name=\"fullname\" id=\"fullname\" required><span class=\"error\"></span>.\n            </label>\n            <span class=\"app-dialog__message\"> YOUR WORKS SINCERELY BURNED INTO MY SOUL, SO I WILL LEAVE MY EMAIL</span>\n            <label for=\"email\">\n                <div class=\"placeholder\">input your email</div>\n                <input type=\"email\" name=\"email\" id=\"email\" required><span class=\"error\"></span>.\n            </label>\n            <span class=\"app-dialog__message\"> AND PHONE NUMBER  HERE</span>\n            <label for=\"phone\">\n                    <div class=\"placeholder\">input your phone number</div>\n                    <input type=\"tel\" name=\"phone\" id=\"phone\" ><span class=\"error\"></span>.\n                </label>\n                <span class=\"app-dialog__message\">SO WE CAN SCHEDULE A MEETING WITH THE UTC TEAM, ONLINE OR ON YOUR FUCKING AWESOME ROOF, AND DISCUSS ANY QUESTIONS I MAY HAVE. I WILL BE FREE</span>\n                <label for=\"time\">\n                    <div class=\"placeholder\">input date</div>\n                    <input type=\"datetime-local\" name=\"time\" id=\"time\" value=\"\" required><span class=\"error\"></span>.\n                </label>\n                <span class=\"app-dialog__message\">I'M LOOKING FORWARD TO! (YOUR FUTURE FRIEND)</span>\n                <label for=\"button\">\n                    <input type=\"submit\" value=\"Invite for a date\" id=\"button\">\n                </label>`,\n            ua: `<span class=\"app-dialog__message\">ПРИВІТ! МЕНЕ ЗВАТИ</span>\n            <label for=\"fullname\">\n                <div class=\"placeholder\">введіть повне ім'я</div>\n                <input type=\"text\" name=\"fullname\" id=\"fullname\" required><span class=\"error\"></span>.\n            </label>\n            <span class=\"app-dialog__message\"> ВАШІ РОБОТИ ЩИРО ПРИПАЛИ МЕНІ ДО ДУШІ, ТОЖ Я ЗАЛИШУ ТУТ СВІЙ ЕМЕЙЛ</span>\n            <label for=\"email\">\n                <div class=\"placeholder\">введіть вашу пошту</div>\n                <input type=\"email\" name=\"email\" id=\"email\" required><span class=\"error\"></span>.\n            </label>\n            <span class=\"app-dialog__message\"> ТА НОМЕР ТЕЛЕФОНУ</span>\n            <label for=\"phone\">\n                    <div class=\"placeholder\">введіть номер телефону</div>\n                    <input type=\"tel\" name=\"phone\" id=\"phone\" ><span class=\"error\"></span>.\n                </label>\n                <span class=\"app-dialog__message\">АБИ МИ МОГЛИ ЗАПЛАНУВАТИ ЗУСТРІЧ З КОМАНДОЮ UTC, ОНЛАЙН АБО НА ВАШОМУ ПРЕКРАСНОМУ ДАХУ, ТА ОБГОВОРИТИ МОЇ БУДЬ-ЯКІ ПИТАННЯ. МАТИМУ ВІЛЬНИЙ ЧАС</span>\n                <label for=\"time\">\n                    <div class=\"placeholder\">введіть дату</div>\n                    <input type=\"datetime-local\" name=\"time\" id=\"time\" value=\"\" required><span class=\"error\"></span>.\n                </label>\n                <span class=\"app-dialog__message\">З НЕТЕРПІННЯМ ЧЕКАЮ! (ВАШ МАЙБУТНІЙ ДРУГ)</span>\n                <label for=\"button\">\n                    <input type=\"submit\" value=\"Побачення з UTC\" id=\"button\">\n                </label>`,\n        },\n\n    },\n    services: {\n        \"desc-title-1\": {\n            eng: `<span>STRONG</span> <span>CRE@TIVE<span class=\"spec-violet\">±</span></span>`,\n            ua: `<span>КРЕ@ТИВНИЙ</span> <span>ЮНІТ<span class=\"spec-violet\">±</span></span>`,\n        },\n        \"desc-list-1\": {\n            eng: `<li>360° marketing campaign</li>\n            <li>Communication strategy</li>\n            <li>MultiChannel Experience</li>\n            <li>Product development</li>\n            <li>Branding and packaging</li>`,\n            ua: `<li>Рекламні кампанії 360°</li>\n            <li>Комунікаційна стратегія</li>\n            <li>Багатоканальний контент</li>\n            <li>Розробка продуктів</li>\n            <li>Брендинг та пакування</li>`,\n        },\n        \"desc-title-2\": {\n            eng: `<span class=\"description__title\">FULL <span class=\"spec-orange\">$</span>ERVICE</span>\n            <span class=\"description__title\">/VIDEO PRODUCTION</span>`,\n            ua: `<span class=\"description__title\">ВІДЕО ПРОДАКШН</span>\n            <span class=\"description__title\">/ПОВНОГО ЦИКЛУ</span>`,\n        },\n        \"desc-list-2\": {\n            eng: `<li>Films</li>\n            <li>Photo shots</li>\n            <li>2D/3D animation</li>\n            <li>Stop motion/Craft</li>\n            <li>Adaptation</li>`,\n            ua: `<li>Відеоролики</li>\n            <li>Фотозйомка</li>\n            <li>2D/3D animation</li>\n            <li>Стопмоушн/Крафт</li>\n            <li>Адаптація</li>`,\n        },\n\n        \"slogan\": {\n            eng: `Pimp your brand<span>,</span> du<span>uuu</span>de`,\n            ua: 'Змушуємо бренди кращати'\n        }\n        \n    },\n    works: {\n\n    },  \n    team: {\n\n    }\n}\n\nconst translateData = (dataset, lang) => {\n    const currentPageTexts = data[dataset];\n\n    for (const key in currentPageTexts) {\n\t\tlet elems = document.querySelectorAll(`[data-lang=${key}]`);\n        \n\t\tif (elems) {\n            for (const element of elems) {\n                element.innerHTML = currentPageTexts[key][lang];\n            }\n\t\t}\n\t}\n}\n\nconst translatePage = (pageName, lang) => {\n    translateData('header', lang);\n    translateData(pageName, lang);\n}\n\n//# sourceURL=webpack:///./assets/js/lib/translator.js?");

/***/ }),

/***/ "./assets/js/simple_page.js":
/*!**********************************!*\
  !*** ./assets/js/simple_page.js ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _lib_menu__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./lib/menu */ \"./assets/js/lib/menu.js\");\n/* harmony import */ var _lib_translator__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./lib/translator */ \"./assets/js/lib/translator.js\");\n\n\n\n\nconst currentLang = localStorage.getItem('lang');\nconsole.log(currentLang);\n\n(0,_lib_menu__WEBPACK_IMPORTED_MODULE_0__[\"default\"])('menu-button', 'header');\n\nwindow.onload = () => {\n    if(currentLang !== 'eng') {\n        (0,_lib_translator__WEBPACK_IMPORTED_MODULE_1__.translatePage)('services', currentLang);\n    }\n}\n\n//# sourceURL=webpack:///./assets/js/simple_page.js?");

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