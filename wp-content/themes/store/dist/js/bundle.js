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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/js/main.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/*! no static exports found */
/***/ (function(module, exports) {

var header = document.getElementById('header'),
    openSearchForm = document.getElementsByClassName('show-search-form')[0],
    headerFirstScreen = document.getElementsByClassName('header-main-first-screen')[0],
    headerSearchForm = document.getElementsByClassName('header-main-second-screen')[0],
    closeSearchForm = document.getElementsByClassName('head-search-close')[0];
openSearchForm.addEventListener('click', function (e) {
  e.preventDefault();
  headerFirstScreen.style.display = 'none';
  headerSearchForm.style.display = 'flex';
});
closeSearchForm.addEventListener('click', function (e) {
  e.preventDefault();
  headerFirstScreen.style.display = 'flex';
  headerSearchForm.style.display = 'none';
});

window.onscroll = function (e) {
  if (pageYOffset > 0) {
    header.style.top = '-26px';
    header.style.transitionDuration = '.3s';
  } else {
    header.style.top = 0;
    header.style.transitionDuration = '.1s';
  }
};

(function ($) {
  $(document).ready(function () {
    $(".slider-wrapper").slick({
      autoplay: true,
      arrows: false,
      autoplaySpeed: 3000,
      speed: 1000
    });
    $('.follow-us-slider').slick({
      autoplay: true,
      slidesToShow: 5,
      autoplaySpeed: 3000,
      speed: 1000
    });
  });
})(jQuery);

/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAiLCJ3ZWJwYWNrOi8vLy4vc3JjL2pzL21haW4uanMiXSwibmFtZXMiOlsiaGVhZGVyIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsIm9wZW5TZWFyY2hGb3JtIiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImhlYWRlckZpcnN0U2NyZWVuIiwiaGVhZGVyU2VhcmNoRm9ybSIsImNsb3NlU2VhcmNoRm9ybSIsImFkZEV2ZW50TGlzdGVuZXIiLCJlIiwicHJldmVudERlZmF1bHQiLCJzdHlsZSIsImRpc3BsYXkiLCJ3aW5kb3ciLCJvbnNjcm9sbCIsInBhZ2VZT2Zmc2V0IiwidG9wIiwidHJhbnNpdGlvbkR1cmF0aW9uIiwiJCIsInJlYWR5Iiwic2xpY2siLCJhdXRvcGxheSIsImFycm93cyIsImF1dG9wbGF5U3BlZWQiLCJzcGVlZCIsInNsaWRlc1RvU2hvdyIsImpRdWVyeSJdLCJtYXBwaW5ncyI6IjtBQUFBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOzs7QUFHQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0Esa0RBQTBDLGdDQUFnQztBQUMxRTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBLGdFQUF3RCxrQkFBa0I7QUFDMUU7QUFDQSx5REFBaUQsY0FBYztBQUMvRDs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsaURBQXlDLGlDQUFpQztBQUMxRSx3SEFBZ0gsbUJBQW1CLEVBQUU7QUFDckk7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQSxtQ0FBMkIsMEJBQTBCLEVBQUU7QUFDdkQseUNBQWlDLGVBQWU7QUFDaEQ7QUFDQTtBQUNBOztBQUVBO0FBQ0EsOERBQXNELCtEQUErRDs7QUFFckg7QUFDQTs7O0FBR0E7QUFDQTs7Ozs7Ozs7Ozs7O0FDbEZBLElBQUlBLE1BQU0sR0FBR0MsUUFBUSxDQUFDQyxjQUFULENBQXdCLFFBQXhCLENBQWI7QUFBQSxJQUNJQyxjQUFjLEdBQUdGLFFBQVEsQ0FBQ0csc0JBQVQsQ0FBZ0Msa0JBQWhDLEVBQW9ELENBQXBELENBRHJCO0FBQUEsSUFFSUMsaUJBQWlCLEdBQUdKLFFBQVEsQ0FBQ0csc0JBQVQsQ0FBZ0MsMEJBQWhDLEVBQTRELENBQTVELENBRnhCO0FBQUEsSUFHSUUsZ0JBQWdCLEdBQUdMLFFBQVEsQ0FBQ0csc0JBQVQsQ0FBZ0MsMkJBQWhDLEVBQTZELENBQTdELENBSHZCO0FBQUEsSUFJSUcsZUFBZSxHQUFHTixRQUFRLENBQUNHLHNCQUFULENBQWdDLG1CQUFoQyxFQUFxRCxDQUFyRCxDQUp0QjtBQU1BRCxjQUFjLENBQUNLLGdCQUFmLENBQWdDLE9BQWhDLEVBQXlDLFVBQUNDLENBQUQsRUFBTztBQUM1Q0EsR0FBQyxDQUFDQyxjQUFGO0FBQ0FMLG1CQUFpQixDQUFDTSxLQUFsQixDQUF3QkMsT0FBeEIsR0FBa0MsTUFBbEM7QUFDQU4sa0JBQWdCLENBQUNLLEtBQWpCLENBQXVCQyxPQUF2QixHQUFpQyxNQUFqQztBQUNILENBSkQ7QUFNQUwsZUFBZSxDQUFDQyxnQkFBaEIsQ0FBaUMsT0FBakMsRUFBMEMsVUFBQ0MsQ0FBRCxFQUFPO0FBQzdDQSxHQUFDLENBQUNDLGNBQUY7QUFDQUwsbUJBQWlCLENBQUNNLEtBQWxCLENBQXdCQyxPQUF4QixHQUFrQyxNQUFsQztBQUNBTixrQkFBZ0IsQ0FBQ0ssS0FBakIsQ0FBdUJDLE9BQXZCLEdBQWlDLE1BQWpDO0FBQ0gsQ0FKRDs7QUFNQUMsTUFBTSxDQUFDQyxRQUFQLEdBQWtCLFVBQUNMLENBQUQsRUFBTztBQUNyQixNQUFHTSxXQUFXLEdBQUcsQ0FBakIsRUFBb0I7QUFDaEJmLFVBQU0sQ0FBQ1csS0FBUCxDQUFhSyxHQUFiLEdBQW1CLE9BQW5CO0FBQ0FoQixVQUFNLENBQUNXLEtBQVAsQ0FBYU0sa0JBQWIsR0FBa0MsS0FBbEM7QUFDSCxHQUhELE1BR087QUFDSGpCLFVBQU0sQ0FBQ1csS0FBUCxDQUFhSyxHQUFiLEdBQW1CLENBQW5CO0FBQ0FoQixVQUFNLENBQUNXLEtBQVAsQ0FBYU0sa0JBQWIsR0FBa0MsS0FBbEM7QUFDSDtBQUNKLENBUkQ7O0FBVUEsQ0FBQyxVQUFTQyxDQUFULEVBQVk7QUFDVEEsR0FBQyxDQUFDakIsUUFBRCxDQUFELENBQVlrQixLQUFaLENBQWtCLFlBQVc7QUFDekJELEtBQUMsQ0FBQyxpQkFBRCxDQUFELENBQXFCRSxLQUFyQixDQUEyQjtBQUN2QkMsY0FBUSxFQUFFLElBRGE7QUFFdkJDLFlBQU0sRUFBRSxLQUZlO0FBR3ZCQyxtQkFBYSxFQUFFLElBSFE7QUFJdkJDLFdBQUssRUFBRTtBQUpnQixLQUEzQjtBQU9BTixLQUFDLENBQUMsbUJBQUQsQ0FBRCxDQUF1QkUsS0FBdkIsQ0FBNkI7QUFDekJDLGNBQVEsRUFBRSxJQURlO0FBRXpCSSxrQkFBWSxFQUFFLENBRlc7QUFHekJGLG1CQUFhLEVBQUUsSUFIVTtBQUl6QkMsV0FBSyxFQUFFO0FBSmtCLEtBQTdCO0FBTUgsR0FkRDtBQWVILENBaEJELEVBZ0JHRSxNQWhCSCxFIiwiZmlsZSI6ImJ1bmRsZS5qcyIsInNvdXJjZXNDb250ZW50IjpbIiBcdC8vIFRoZSBtb2R1bGUgY2FjaGVcbiBcdHZhciBpbnN0YWxsZWRNb2R1bGVzID0ge307XG5cbiBcdC8vIFRoZSByZXF1aXJlIGZ1bmN0aW9uXG4gXHRmdW5jdGlvbiBfX3dlYnBhY2tfcmVxdWlyZV9fKG1vZHVsZUlkKSB7XG5cbiBcdFx0Ly8gQ2hlY2sgaWYgbW9kdWxlIGlzIGluIGNhY2hlXG4gXHRcdGlmKGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdKSB7XG4gXHRcdFx0cmV0dXJuIGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdLmV4cG9ydHM7XG4gXHRcdH1cbiBcdFx0Ly8gQ3JlYXRlIGEgbmV3IG1vZHVsZSAoYW5kIHB1dCBpdCBpbnRvIHRoZSBjYWNoZSlcbiBcdFx0dmFyIG1vZHVsZSA9IGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdID0ge1xuIFx0XHRcdGk6IG1vZHVsZUlkLFxuIFx0XHRcdGw6IGZhbHNlLFxuIFx0XHRcdGV4cG9ydHM6IHt9XG4gXHRcdH07XG5cbiBcdFx0Ly8gRXhlY3V0ZSB0aGUgbW9kdWxlIGZ1bmN0aW9uXG4gXHRcdG1vZHVsZXNbbW9kdWxlSWRdLmNhbGwobW9kdWxlLmV4cG9ydHMsIG1vZHVsZSwgbW9kdWxlLmV4cG9ydHMsIF9fd2VicGFja19yZXF1aXJlX18pO1xuXG4gXHRcdC8vIEZsYWcgdGhlIG1vZHVsZSBhcyBsb2FkZWRcbiBcdFx0bW9kdWxlLmwgPSB0cnVlO1xuXG4gXHRcdC8vIFJldHVybiB0aGUgZXhwb3J0cyBvZiB0aGUgbW9kdWxlXG4gXHRcdHJldHVybiBtb2R1bGUuZXhwb3J0cztcbiBcdH1cblxuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZXMgb2JqZWN0IChfX3dlYnBhY2tfbW9kdWxlc19fKVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5tID0gbW9kdWxlcztcblxuIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGUgY2FjaGVcbiBcdF9fd2VicGFja19yZXF1aXJlX18uYyA9IGluc3RhbGxlZE1vZHVsZXM7XG5cbiBcdC8vIGRlZmluZSBnZXR0ZXIgZnVuY3Rpb24gZm9yIGhhcm1vbnkgZXhwb3J0c1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5kID0gZnVuY3Rpb24oZXhwb3J0cywgbmFtZSwgZ2V0dGVyKSB7XG4gXHRcdGlmKCFfX3dlYnBhY2tfcmVxdWlyZV9fLm8oZXhwb3J0cywgbmFtZSkpIHtcbiBcdFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgbmFtZSwgeyBlbnVtZXJhYmxlOiB0cnVlLCBnZXQ6IGdldHRlciB9KTtcbiBcdFx0fVxuIFx0fTtcblxuIFx0Ly8gZGVmaW5lIF9fZXNNb2R1bGUgb24gZXhwb3J0c1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5yID0gZnVuY3Rpb24oZXhwb3J0cykge1xuIFx0XHRpZih0eXBlb2YgU3ltYm9sICE9PSAndW5kZWZpbmVkJyAmJiBTeW1ib2wudG9TdHJpbmdUYWcpIHtcbiBcdFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgU3ltYm9sLnRvU3RyaW5nVGFnLCB7IHZhbHVlOiAnTW9kdWxlJyB9KTtcbiBcdFx0fVxuIFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgJ19fZXNNb2R1bGUnLCB7IHZhbHVlOiB0cnVlIH0pO1xuIFx0fTtcblxuIFx0Ly8gY3JlYXRlIGEgZmFrZSBuYW1lc3BhY2Ugb2JqZWN0XG4gXHQvLyBtb2RlICYgMTogdmFsdWUgaXMgYSBtb2R1bGUgaWQsIHJlcXVpcmUgaXRcbiBcdC8vIG1vZGUgJiAyOiBtZXJnZSBhbGwgcHJvcGVydGllcyBvZiB2YWx1ZSBpbnRvIHRoZSBuc1xuIFx0Ly8gbW9kZSAmIDQ6IHJldHVybiB2YWx1ZSB3aGVuIGFscmVhZHkgbnMgb2JqZWN0XG4gXHQvLyBtb2RlICYgOHwxOiBiZWhhdmUgbGlrZSByZXF1aXJlXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnQgPSBmdW5jdGlvbih2YWx1ZSwgbW9kZSkge1xuIFx0XHRpZihtb2RlICYgMSkgdmFsdWUgPSBfX3dlYnBhY2tfcmVxdWlyZV9fKHZhbHVlKTtcbiBcdFx0aWYobW9kZSAmIDgpIHJldHVybiB2YWx1ZTtcbiBcdFx0aWYoKG1vZGUgJiA0KSAmJiB0eXBlb2YgdmFsdWUgPT09ICdvYmplY3QnICYmIHZhbHVlICYmIHZhbHVlLl9fZXNNb2R1bGUpIHJldHVybiB2YWx1ZTtcbiBcdFx0dmFyIG5zID0gT2JqZWN0LmNyZWF0ZShudWxsKTtcbiBcdFx0X193ZWJwYWNrX3JlcXVpcmVfXy5yKG5zKTtcbiBcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KG5zLCAnZGVmYXVsdCcsIHsgZW51bWVyYWJsZTogdHJ1ZSwgdmFsdWU6IHZhbHVlIH0pO1xuIFx0XHRpZihtb2RlICYgMiAmJiB0eXBlb2YgdmFsdWUgIT0gJ3N0cmluZycpIGZvcih2YXIga2V5IGluIHZhbHVlKSBfX3dlYnBhY2tfcmVxdWlyZV9fLmQobnMsIGtleSwgZnVuY3Rpb24oa2V5KSB7IHJldHVybiB2YWx1ZVtrZXldOyB9LmJpbmQobnVsbCwga2V5KSk7XG4gXHRcdHJldHVybiBucztcbiBcdH07XG5cbiBcdC8vIGdldERlZmF1bHRFeHBvcnQgZnVuY3Rpb24gZm9yIGNvbXBhdGliaWxpdHkgd2l0aCBub24taGFybW9ueSBtb2R1bGVzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm4gPSBmdW5jdGlvbihtb2R1bGUpIHtcbiBcdFx0dmFyIGdldHRlciA9IG1vZHVsZSAmJiBtb2R1bGUuX19lc01vZHVsZSA/XG4gXHRcdFx0ZnVuY3Rpb24gZ2V0RGVmYXVsdCgpIHsgcmV0dXJuIG1vZHVsZVsnZGVmYXVsdCddOyB9IDpcbiBcdFx0XHRmdW5jdGlvbiBnZXRNb2R1bGVFeHBvcnRzKCkgeyByZXR1cm4gbW9kdWxlOyB9O1xuIFx0XHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQoZ2V0dGVyLCAnYScsIGdldHRlcik7XG4gXHRcdHJldHVybiBnZXR0ZXI7XG4gXHR9O1xuXG4gXHQvLyBPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGxcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubyA9IGZ1bmN0aW9uKG9iamVjdCwgcHJvcGVydHkpIHsgcmV0dXJuIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbChvYmplY3QsIHByb3BlcnR5KTsgfTtcblxuIFx0Ly8gX193ZWJwYWNrX3B1YmxpY19wYXRoX19cbiBcdF9fd2VicGFja19yZXF1aXJlX18ucCA9IFwiXCI7XG5cblxuIFx0Ly8gTG9hZCBlbnRyeSBtb2R1bGUgYW5kIHJldHVybiBleHBvcnRzXG4gXHRyZXR1cm4gX193ZWJwYWNrX3JlcXVpcmVfXyhfX3dlYnBhY2tfcmVxdWlyZV9fLnMgPSBcIi4vc3JjL2pzL21haW4uanNcIik7XG4iLCJsZXQgaGVhZGVyID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2hlYWRlcicpLFxyXG4gICAgb3BlblNlYXJjaEZvcm0gPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKCdzaG93LXNlYXJjaC1mb3JtJylbMF0sXHJcbiAgICBoZWFkZXJGaXJzdFNjcmVlbiA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ2hlYWRlci1tYWluLWZpcnN0LXNjcmVlbicpWzBdLFxyXG4gICAgaGVhZGVyU2VhcmNoRm9ybSA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ2hlYWRlci1tYWluLXNlY29uZC1zY3JlZW4nKVswXSxcclxuICAgIGNsb3NlU2VhcmNoRm9ybSA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ2hlYWQtc2VhcmNoLWNsb3NlJylbMF07XHJcbiAgICBcclxub3BlblNlYXJjaEZvcm0uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoZSkgPT4ge1xyXG4gICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG4gICAgaGVhZGVyRmlyc3RTY3JlZW4uc3R5bGUuZGlzcGxheSA9ICdub25lJztcclxuICAgIGhlYWRlclNlYXJjaEZvcm0uc3R5bGUuZGlzcGxheSA9ICdmbGV4JztcclxufSlcclxuXHJcbmNsb3NlU2VhcmNoRm9ybS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChlKSA9PiB7XHJcbiAgICBlLnByZXZlbnREZWZhdWx0KCk7XHJcbiAgICBoZWFkZXJGaXJzdFNjcmVlbi5zdHlsZS5kaXNwbGF5ID0gJ2ZsZXgnO1xyXG4gICAgaGVhZGVyU2VhcmNoRm9ybS5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnO1xyXG59KVxyXG5cclxud2luZG93Lm9uc2Nyb2xsID0gKGUpID0+IHtcclxuICAgIGlmKHBhZ2VZT2Zmc2V0ID4gMCkge1xyXG4gICAgICAgIGhlYWRlci5zdHlsZS50b3AgPSAnLTI2cHgnO1xyXG4gICAgICAgIGhlYWRlci5zdHlsZS50cmFuc2l0aW9uRHVyYXRpb24gPSAnLjNzJztcclxuICAgIH0gZWxzZSB7XHJcbiAgICAgICAgaGVhZGVyLnN0eWxlLnRvcCA9IDA7XHJcbiAgICAgICAgaGVhZGVyLnN0eWxlLnRyYW5zaXRpb25EdXJhdGlvbiA9ICcuMXMnO1xyXG4gICAgfVxyXG59XHJcblxyXG4oZnVuY3Rpb24oJCkge1xyXG4gICAgJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgJChcIi5zbGlkZXItd3JhcHBlclwiKS5zbGljayh7XHJcbiAgICAgICAgICAgIGF1dG9wbGF5OiB0cnVlLFxyXG4gICAgICAgICAgICBhcnJvd3M6IGZhbHNlLFxyXG4gICAgICAgICAgICBhdXRvcGxheVNwZWVkOiAzMDAwLFxyXG4gICAgICAgICAgICBzcGVlZDogMTAwMFxyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICAkKCcuZm9sbG93LXVzLXNsaWRlcicpLnNsaWNrKHtcclxuICAgICAgICAgICAgYXV0b3BsYXk6IHRydWUsXHJcbiAgICAgICAgICAgIHNsaWRlc1RvU2hvdzogNSxcclxuICAgICAgICAgICAgYXV0b3BsYXlTcGVlZDogMzAwMCxcclxuICAgICAgICAgICAgc3BlZWQ6IDEwMDBcclxuICAgICAgICB9KTtcclxuICAgIH0pXHJcbn0pKGpRdWVyeSk7Il0sInNvdXJjZVJvb3QiOiIifQ==