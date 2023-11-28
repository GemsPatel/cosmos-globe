/*! This file is auto-generated */
!function(){"use strict";var e={d:function(t,n){for(var r in n)e.o(n,r)&&!e.o(t,r)&&Object.defineProperty(t,r,{enumerable:!0,get:n[r]})},o:function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r:function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})}},t={};e.r(t),e.d(t,{PreferenceToggleMenuItem:function(){return y},store:function(){return m}});var n={};e.r(n),e.d(n,{set:function(){return l},setDefaults:function(){return w},setPersistenceLayer:function(){return g},toggle:function(){return d}});var r={};e.r(r),e.d(r,{get:function(){return S}});var o=window.wp.element,c=window.wp.data,s=window.wp.components,i=window.wp.i18n,u=window.wp.primitives;var a=(0,o.createElement)(u.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,o.createElement)(u.Path,{d:"M16.7 7.1l-6.3 8.5-3.3-2.5-.9 1.2 4.5 3.4L17.9 8z"})),f=window.wp.a11y;const p=function(e){let t;return(n,r)=>{if("SET_PERSISTENCE_LAYER"===r.type){const{persistenceLayer:e,persistedData:n}=r;return t=e,n}const o=e(n,r);return"SET_PREFERENCE_VALUE"===r.type&&t?.set(o),o}}(((e={},t)=>{if("SET_PREFERENCE_VALUE"===t.type){const{scope:n,name:r,value:o}=t;return{...e,[n]:{...e[n],[r]:o}}}return e}));var E=(0,c.combineReducers)({defaults:function(e={},t){if("SET_PREFERENCE_DEFAULTS"===t.type){const{scope:n,defaults:r}=t;return{...e,[n]:{...e[n],...r}}}return e},preferences:p});function d(e,t){return function({select:n,dispatch:r}){const o=n.get(e,t);r.set(e,t,!o)}}function l(e,t,n){return{type:"SET_PREFERENCE_VALUE",scope:e,name:t,value:n}}function w(e,t){return{type:"SET_PREFERENCE_DEFAULTS",scope:e,defaults:t}}async function g(e){const t=await e.get();return{type:"SET_PERSISTENCE_LAYER",persistenceLayer:e,persistedData:t}}function S(e,t,n){const r=e.preferences[t]?.[n];return void 0!==r?r:e.defaults[t]?.[n]}const m=(0,c.createReduxStore)("core/preferences",{reducer:E,actions:n,selectors:r});function y({scope:e,name:t,label:n,info:r,messageActivated:u,messageDeactivated:p,shortcut:E,onToggle:d=(()=>null),disabled:l=!1}){const w=(0,c.useSelect)((n=>!!n(m).get(e,t)),[e,t]),{toggle:g}=(0,c.useDispatch)(m);return(0,o.createElement)(s.MenuItem,{icon:w&&a,isSelected:w,onClick:()=>{d(),g(e,t),(()=>{if(w){const e=p||(0,i.sprintf)((0,i.__)("Preference deactivated - %s"),n);(0,f.speak)(e)}else{const e=u||(0,i.sprintf)((0,i.__)("Preference activated - %s"),n);(0,f.speak)(e)}})()},role:"menuitemcheckbox",info:r,shortcut:E,disabled:l},n)}(0,c.register)(m),(window.wp=window.wp||{}).preferences=t}();