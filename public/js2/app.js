/****************************************/
/*************    General    ************/
/****************************************/
    
/* Set Base Url to be used wherever we want */
window.baseUrl = 'http://localhost/zf/public';
    
/* Prevent links with href="#" to append a '#' to the URL */
$(document).on("click", "a[href='#']", function(e) {
    e.preventDefault();
});

/****************************************/
/**************** Plugins ***************/
/****************************************/

/* Response 0.7.5 @link responsejs.com @author ryanve @license MIT  */
(function(e,t,n){var r=e.jQuery||e.Zepto||e.ender||e.elo;"undefined"!=typeof module&&module.exports?module.exports=n(r):e[t]=n(r)})(this,"Response",function(e){function t(e){throw new TypeError(e?O+"."+e:O)}function n(e){return"string"==typeof e?s(e.split(" ")):I(e)?s(e):[]}function r(e,t,n){if(null==e)return e;for(var r=0,i=e.length;r<i;)t.call(n||e[r],e[r],r++,e);return e}function i(e,t,n){var r=[],i=e.length,s=0,o;t=t||"";for(n=n||"";s<i;)o=e[s++],null==o||r.push(t+o+n);return r}function s(e,t,n){var r,i=0,s=0,o,u=[],a,f="function"==typeof t;if(!e)return u;n=(a=!0===n)?null:n;for(r=e.length;s<r;s++)o=e[s],a===!(f?t.call(n,o,s,e):t?typeof o===t:o)&&(u[i++]=o);return u}function o(e,t){if(!e||!t)return e;var n,r=t.length;if("function"!=typeof t&&"number"==typeof r&&r===r){for(n=0;n<r;n++)void 0===t[n]||(e[n]=t[n]);e.length>n||(e.length=n)}else for(n in t)q.call(t,n)&&void 0!==t[n]&&(e[n]=t[n]);return e}function u(e,t,n){if(null==e)return e;"object"==typeof e&&!e.nodeType&&"number"==typeof e.length&&e.length===e.length?r(e,t,n):t.call(n||e,e);return e}function a(e){return function(t,n){var r,i=e();r=i>=(t||0);return!n?r:r&&i<=n}}function f(e){var t=D.devicePixelRatio;if(null==e)return t||(f(2)?2:f(1.5)?1.5:f(1)?1:0);if(!isFinite(e))return!1;if(t&&0<t)return t>=e;e="only all and (min--moz-device-pixel-ratio:"+e+")";return pt(e).matches?!0:!!pt(e.replace("-moz-","")).matches}function l(e){return e.replace(ft,"$1").replace(at,function(e,t){return t.toUpperCase()})}function c(e){return"data-"+(e?e.replace(ft,"$1").replace(ut,"$1-$2").toLowerCase():e)}function h(e){var t;return!e||"string"!=typeof e?e:"true"===e?!0:"false"===e?!1:"undefined"===e?t:"null"===e?null:(t=parseFloat(e))===+t?t:e}function p(e){return!e?!1:1===e.nodeType?e:e[0]&&1===e[0].nodeType?e[0]:!1}function d(e,t){var n=arguments.length,i=p(this),s={},o=!1,u;if(n){I(e)&&(o=!0,e=e[0]);if("string"===typeof e){e=c(e);if(1===n)return s=i.getAttribute(e),o?h(s):s;if(this===i||2>(u=this.length||1))i.setAttribute(e,t);else for(;u--;)u in this&&d.apply(this[u],arguments)}else if(e instanceof Object)for(u in e)e.hasOwnProperty(u)&&d.call(this,u,e[u]);return this}if(i.dataset&&DOMStringMap)return i.dataset;r(i.attributes,function(e){if(e&&(u=String(e.name).match(ft)))s[l(u[1])]=e.value});return s}function v(e){this&&"string"===typeof e&&(e=n(e),u(this,function(t){r(e,function(e){e&&t.removeAttribute(c(e))})}));return this}function m(e,t,n){return d.apply(e,R.call(arguments,1))}function g(e,t){return v.call(e,t)}function y(e){for(var t,n=[],r=0,i=e.length;r<i;)(t=e[r++])&&n.push("["+c(t.replace(ot,"").replace(".","\\."))+"]");return n.join()}function b(e,t){var n=e.getBoundingClientRect?e.getBoundingClientRect():{};t="number"==typeof t?t||0:0;return{top:(n.top||0)-t,left:(n.left||0)-t,bottom:(n.bottom||0)+t,right:(n.right||0)+t}}function w(e,t){var n=b(p(e),t);return!!n&&0<=n.bottom&&n.top<=gt()&&0<=n.right&&n.left<=dt()}function E(e){var t={img:1,input:1,source:3,embed:3,track:3,iframe:5,audio:5,video:5,script:5}[e.tagName.toLowerCase()]||-1;return 4>t?t:"string"===typeof e.getAttribute("src")?5:-5}function S(e,n,r){var i;(!e||null==n)&&t("store");r="string"==typeof r&&r;u(e,function(e){i=r?e.getAttribute(r):0<E(e)?e.getAttribute("src"):e.innerHTML;null==i?g(e,n):m(e,n,i)});return A}function x(e,t){var i=[];e&&t&&r(n(t),function(t){i.push(m(e,t))},e);return i}function T(e){j.on("resize",e);return A}function N(e){u(e,function(e){"object"==typeof e||t("create @args");var n=lt(V).configure(e),i,s=n.verge;e=n.breakpoints;var o=ct("scroll"),u=ct("resize");e.length&&(i=e[0]||e[1]||!1,B(function(){function e(){n.reset();r(n.$e,function(e,t){n[t].decideValue().updateDOM()}).trigger(a)}function t(){r(n.$e,function(e,t){w(n[t].$e,s)&&n[t].updateDOM()})}var a=ht.allLoaded,f=!!n.lazy;r(n.target().$e,function(e,t){n[t]=lt(n).prepareData(e);(!f||w(n[t].$e,s))&&n[t].updateDOM()});n.dynamic&&(n.custom||i<nt)&&T(e,u);f&&(j.on(o,t),n.$e.one(a,function(){j.off(o,t)}))}))});return A}function C(e,t){if("function"==typeof e&&e.fn){if(t||void 0===e.fn.dataset)e.fn.dataset=d;if(t||void 0===e.fn.deletes)e.fn.deletes=v;var n=e.fn;r(["inX","inY","inViewport"],function(r){(t||!n[r])&&(n[r]=function(t,n){return e(s(this,function(e){return!!e&&!n===A[r](e,t)}))})})}return A}if("function"!=typeof e)try{console.log("Response was unable to run due to missing dependency.")}catch(k){}var L=this,A,O="Response",M=L[O],_="init"+O,D=window,P=document,H=P.documentElement,B=e.domReady||e,j=e(D),F=D.screen,I=Array.isArray||function(e){return e instanceof Array},q={}.hasOwnProperty,R=[].slice,U=[].concat,z=[].map,W=z?function(e,t,n){return z.call(e,t,n)}:function(e,t,n){var r,i=e.length,s=[];for(r=0;r<i;r++)r in e&&(s[r]=t.call(n,e[r],r,e));return s},X={width:[0,320,481,641,961,1025,1281],height:[0,481],ratio:[1,1.5,2]},V,$,J,K={},Q={},G={},Y={all:[]},Z=1,et=F.width,tt=F.height,nt=et>tt?et:tt,rt=et+tt-nt,F=function(){return et},it=function(){return tt},st=/[^a-z0-9_\-\.]/gi,ot=/^[\W\s]+|[\W\s]+$|/g,ut=/([a-z])([A-Z])/g,at=/-(.)/g,ft=/^data-(.+)$/,lt=Object.create||function(e){function t(){}t.prototype=e;return new t},ct=function(e,t){t=t||O;return e.replace(ot,"")+"."+t.replace(ot,"")},ht={allLoaded:ct("allLoaded"),crossover:ct("crossover")},pt=($=D.matchMedia||D.msMatchMedia)||function(){return{}},dt,vt=D;J=H.clientWidth;var mt=vt.innerWidth;dt=$&&J<mt&&!0===$("(min-width:"+mt+"px)").matches?function(){return vt.innerWidth}:function(){return H.clientWidth};var gt,yt=D;J=H.clientHeight;mt=yt.innerHeight;gt=$&&J<mt&&!0===$("(min-height:"+mt+"px)").matches?function(){return yt.innerHeight}:function(){return H.clientHeight};$=a(dt);J=a(gt);K.band=a(F);K.wave=a(it);var bt=function(e){return"string"==typeof e?e.toLowerCase().replace(st,""):""},wt=ht.crossover,Et=Math.min;V={$e:0,mode:0,breakpoints:null,prefix:null,prop:"width",keys:[],dynamic:null,custom:0,values:[],fn:0,verge:null,newValue:0,currValue:1,aka:null,lazy:null,i:0,uid:null,reset:function(){for(var e=this.breakpoints,t=e.length,n=0;!n&&t--;)this.fn(e[t])&&(n=t);n!==this.i&&(j.trigger(wt).trigger(this.prop+wt),this.i=n||0);return this},configure:function(e){o(this,e);var u,a,f=!0;u=this.prop;this.uid=Z++;this.verge=isFinite(this.verge)?this.verge:Et(nt,500);this.fn=Q[u]||t("create @fn");"boolean"!=typeof this.dynamic&&(this.dynamic="device"!==u.substring(0,6));this.custom=G[u];a=this.prefix?s(W(n(this.prefix),bt)):["min-"+u+"-"];e=1<a.length?a.slice(1):0;this.prefix=a[0];a=this.breakpoints;I(a)?(r(a,function(e){if(!e&&0!==e)throw"invalid breakpoint";f=f&&isFinite(e)}),a=f?a.sort(function(e,t){return e-t}):a,a.length||t("create @breakpoints")):a=X[u]||X[u.split("-").pop()]||t("create @prop");this.breakpoints=f?s(a,function(e){return e<=nt}):a;this.keys=i(this.breakpoints,this.prefix);this.aka=null;if(e){a=[];for(u=e.length;u--;)a.push(i(this.breakpoints,e[u]));this.aka=a;this.keys=U.apply(this.keys,a)}Y.all=Y.all.concat(Y[this.uid]=this.keys);return this},target:function(){this.$e=e(y(Y[this.uid]));S(this.$e,_);this.keys.push(_);return this},decideValue:function(){for(var e=null,t=this.breakpoints,n=t.length,r=n;null==e&&r--;)this.fn(t[r])&&(e=this.values[r]);this.newValue="string"===typeof e?e:this.values[n];return this},prepareData:function(t){this.$e=e(t);this.mode=E(t);this.values=x(this.$e,this.keys);if(this.aka)for(t=this.aka.length;t--;)this.values=o(this.values,x(this.$e,this.aka[t]));return this.decideValue()},updateDOM:function(){if(this.currValue===this.newValue)return this;this.currValue=this.newValue;0<this.mode?this.$e[0].setAttribute("src",this.newValue):null==this.newValue?this.$e.empty&&this.$e.empty():this.$e.html?this.$e.html(this.newValue):(this.$e.empty&&this.$e.empty(),this.$e[0].innerHTML=this.newValue);return this}};Q.width=$;Q.height=J;Q["device-width"]=K.band;Q["device-height"]=K.wave;Q["device-pixel-ratio"]=f;A={deviceMin:function(){return rt},deviceMax:function(){return nt},noConflict:function(e){L[O]===A&&(L[O]=M);"function"==typeof e&&e.call(L,A);return A},chain:function(t,n){t=arguments.length?t:e;return C(t,n)},bridge:C,create:N,addTest:function(e,t){"string"==typeof e&&"function"==typeof t&&(Q[e]=t,G[e]=1);return A},datatize:c,camelize:l,render:h,store:S,access:x,target:function(t){return e(y(n(t)))},object:lt,crossover:function(e,t){var n,r=ht.crossover;"function"==typeof e&&(n=t,t=e,e=n);j.on(e?""+e+r:r,t);return A},action:function(e){u(e,function(e){B(e);T(e)});return A},resize:T,ready:B,affix:i,sift:s,dpr:f,deletes:g,scrollX:function(){return window.pageXOffset||H.scrollLeft},scrollY:function(){return window.pageYOffset||H.scrollTop},deviceW:F,deviceH:it,device:K,inX:function(e,t){var n=b(p(e),t);return!!n&&0<=n.right&&n.left<=dt()},inY:function(e,t){var n=b(p(e),t);return!!n&&0<=n.bottom&&n.top<=gt()},route:u,merge:o,media:pt,wave:J,band:$,map:W,each:r,inViewport:w,dataset:m,viewportH:gt,viewportW:dt};B(function(){var t,n=m(P.body,"responsejs");n&&((t=!!D.JSON&&JSON.parse)?n=t(n):e.parseJSON&&(n=e.parseJSON(n)),n&&n.create&&N(n.create));H.className=H.className.replace(/(^|\s)(no-)?responsejs(\s|$)/,"$1$3")+" responsejs "});return A})

/* Parsley dist/parsley.min.js build version 1.1.16 */
/* Parsley dist/parsley.min.js build version 1.1.16 http://parsleyjs.org */
!function(d){var h=function(a){this.messages={defaultMessage:"This value seems to be invalid.",type:{email:"This value should be a valid email.",url:"This value should be a valid url.",urlstrict:"This value should be a valid url.",number:"This value should be a valid number.",digits:"This value should be digits.",dateIso:"This value should be a valid date (YYYY-MM-DD).",alphanum:"This value should be alphanumeric.",phone:"This value should be a valid phone number."},notnull:"This value should not be null.",
notblank:"This value should not be blank.",required:"This value is required.",regexp:"This value seems to be invalid.",min:"This value should be greater than or equal to %s.",max:"This value should be lower than or equal to %s.",range:"This value should be between %s and %s.",minlength:"This value is too short. It should have %s characters or more.",maxlength:"This value is too long. It should have %s characters or less.",rangelength:"This value length is invalid. It should be between %s and %s characters long.",
mincheck:"You must select at least %s choices.",maxcheck:"You must select %s choices or less.",rangecheck:"You must select between %s and %s choices.",equalto:"This value should be the same."};this.init(a)};h.prototype={constructor:h,validators:{notnull:function(a){return 0<a.length},notblank:function(a){return"string"===typeof a&&""!==a.replace(/^\s+/g,"").replace(/\s+$/g,"")},required:function(a){if("object"===typeof a){for(var b in a)if(this.required(a[b]))return!0;return!1}return this.notnull(a)&&
this.notblank(a)},type:function(a,b){var c;switch(b){case "number":c=/^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/;break;case "digits":c=/^\d+$/;break;case "alphanum":c=/^\w+$/;break;case "email":c=/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i;
break;case "url":a=/(https?|s?ftp|git)/i.test(a)?a:"http://"+a;case "urlstrict":c=/^(https?|s?ftp|git):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i;
break;case "dateIso":c=/^(\d{4})\D?(0[1-9]|1[0-2])\D?([12]\d|0[1-9]|3[01])$/;break;case "phone":c=/^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$/;break;default:return!1}return""!==a?c.test(a):!1},regexp:function(a,b,c){return RegExp(b,c.options.regexpFlag||"").test(a)},minlength:function(a,b){return a.length>=b},maxlength:function(a,b){return a.length<=b},rangelength:function(a,b){return this.minlength(a,b[0])&&this.maxlength(a,b[1])},
min:function(a,b){return Number(a)>=b},max:function(a,b){return Number(a)<=b},range:function(a,b){return a>=b[0]&&a<=b[1]},equalto:function(a,b,c){c.options.validateIfUnchanged=!0;return a===d(b).val()},remote:function(a,b,c){var f={},g={};f[c.$element.attr("name")]=a;"undefined"!==typeof c.options.remoteDatatype&&(g={dataType:c.options.remoteDatatype});var m=function(a,b){"undefined"!==typeof b&&("undefined"!==typeof c.Validator.messages.remote&&b!==c.Validator.messages.remote)&&d(c.ulError+" .remote").remove();
c.updtConstraint({name:"remote",valid:a},b);c.manageValidationResult()},n=function(a){if("object"===typeof a)return a;try{a=d.parseJSON(a)}catch(b){}return a},e=function(a){return"object"===typeof a&&null!==a?"undefined"!==typeof a.error?a.error:"undefined"!==typeof a.message?a.message:null:null};d.ajax(d.extend({},{url:b,data:f,type:c.options.remoteMethod||"GET",success:function(a){a=n(a);m(1===a||!0===a||"object"===typeof a&&null!==a&&"undefined"!==typeof a.success,e(a))},error:function(a){a=n(a);
m(!1,e(a))}},g));return null},mincheck:function(a,b){return this.minlength(a,b)},maxcheck:function(a,b){return this.maxlength(a,b)},rangecheck:function(a,b){return this.rangelength(a,b)}},init:function(a){var b=a.validators;a=a.messages;for(var c in b)this.addValidator(c,b[c]);for(c in a)this.addMessage(c,a[c])},formatMesssage:function(a,b){if("object"===typeof b){for(var c in b)a=this.formatMesssage(a,b[c]);return a}return"string"===typeof a?a.replace(/%s/i,b):""},addValidator:function(a,b){this.validators[a]=
b},addMessage:function(a,b,c){if("undefined"!==typeof c&&!0===c)this.messages.type[a]=b;else if("type"===a)for(var d in b)this.messages.type[d]=b[d];else this.messages[a]=b}};var j=function(a,b,c){this.options=b;this.Validator=new h(b);if("ParsleyFieldMultiple"===c)return this;this.init(a,c||"ParsleyField")};j.prototype={constructor:j,init:function(a,b){this.type=b;this.valid=!0;this.element=a;this.validatedOnce=!1;this.$element=d(a);this.val=this.$element.val();this.isRequired=!1;this.constraints=
{};"undefined"===typeof this.isRadioOrCheckbox&&(this.isRadioOrCheckbox=!1,this.hash=this.generateHash(),this.errorClassHandler=this.options.errors.classHandler(a,this.isRadioOrCheckbox)||this.$element);this.ulErrorManagement();this.bindHtml5Constraints();this.addConstraints();this.hasConstraints()&&this.bindValidationEvents()},setParent:function(a){this.$parent=d(a)},getParent:function(){return this.$parent},bindHtml5Constraints:function(){if(this.$element.hasClass("required")||this.$element.prop("required"))this.options.required=
!0;"undefined"!==typeof this.$element.attr("type")&&RegExp(this.$element.attr("type"),"i").test("email url number range")&&(this.options.type=this.$element.attr("type"),RegExp(this.options.type,"i").test("number range")&&(this.options.type="number","undefined"!==typeof this.$element.attr("min")&&this.$element.attr("min").length&&(this.options.min=this.$element.attr("min")),"undefined"!==typeof this.$element.attr("max")&&this.$element.attr("max").length&&(this.options.max=this.$element.attr("max"))));
"string"===typeof this.$element.attr("pattern")&&this.$element.attr("pattern").length&&(this.options.regexp=this.$element.attr("pattern"))},addConstraints:function(){for(var a in this.options){var b={};b[a]=this.options[a];this.addConstraint(b,!0)}},addConstraint:function(a,b){for(var c in a)c=c.toLowerCase(),"function"===typeof this.Validator.validators[c]&&(this.constraints[c]={name:c,requirements:a[c],valid:null},"required"===c&&(this.isRequired=!0),this.addCustomConstraintMessage(c));"undefined"===
typeof b&&this.bindValidationEvents()},updateConstraint:function(a,b){for(var c in a)this.updtConstraint({name:c,requirements:a[c],valid:null},b)},updtConstraint:function(a,b){this.constraints[a.name]=d.extend(!0,this.constraints[a.name],a);"string"===typeof b&&(this.Validator.messages[a.name]=b);this.bindValidationEvents()},removeConstraint:function(a){a=a.toLowerCase();delete this.constraints[a];"required"===a&&(this.isRequired=!1);this.hasConstraints()?this.bindValidationEvents():"ParsleyForm"===
typeof this.getParent()?this.getParent().removeItem(this.$element):this.destroy()},addCustomConstraintMessage:function(a){var b=a+("type"===a&&"undefined"!==typeof this.options[a]?this.options[a].charAt(0).toUpperCase()+this.options[a].substr(1):"")+"Message";"undefined"!==typeof this.options[b]&&this.Validator.addMessage("type"===a?this.options[a]:a,this.options[b],"type"===a)},bindValidationEvents:function(){this.valid=null;this.$element.addClass("parsley-validated");this.$element.off("."+this.type);
this.options.remote&&!/change/i.test(this.options.trigger)&&(this.options.trigger=!this.options.trigger?"change":" change");var a=(!this.options.trigger?"":this.options.trigger)+(/key/i.test(this.options.trigger)?"":" keyup");this.$element.is("select")&&(a+=/change/i.test(a)?"":" change");a=a.replace(/^\s+/g,"").replace(/\s+$/g,"");this.$element.on((a+" ").split(" ").join("."+this.type+" "),!1,d.proxy(this.eventValidation,this))},generateHash:function(){return"parsley-"+(Math.random()+"").substring(2)},
getHash:function(){return this.hash},getVal:function(){return this.$element.data("value")||this.$element.val()},eventValidation:function(a){var b=this.getVal();if("keyup"===a.type&&!/keyup/i.test(this.options.trigger)&&!this.validatedOnce||"change"===a.type&&!/change/i.test(this.options.trigger)&&!this.validatedOnce||!this.isRadioOrCheckbox&&b.length<this.options.validationMinlength&&!this.validatedOnce)return!0;this.validate()},isValid:function(){return this.validate(!1)},hasConstraints:function(){for(var a in this.constraints)return!0;
return!1},validate:function(a){var b=this.getVal(),c=null;if(!this.hasConstraints())return null;if(this.options.listeners.onFieldValidate(this.element,this)||""===b&&!this.isRequired)return this.reset(),null;if(!this.needsValidation(b))return this.valid;c=this.applyValidators();("undefined"!==typeof a?a:this.options.showErrors)&&this.manageValidationResult();return c},needsValidation:function(a){if(!this.options.validateIfUnchanged&&null!==this.valid&&this.val===a&&this.validatedOnce)return!1;this.val=
a;return this.validatedOnce=!0},applyValidators:function(){var a=null,b;for(b in this.constraints){var c=this.Validator.validators[this.constraints[b].name](this.val,this.constraints[b].requirements,this);!1===c?(a=!1,this.constraints[b].valid=a,this.options.listeners.onFieldError(this.element,this.constraints,this)):!0===c&&(this.constraints[b].valid=!0,a=!1!==a,this.options.listeners.onFieldSuccess(this.element,this.constraints,this))}return a},manageValidationResult:function(){var a=null,b;for(b in this.constraints)!1===
this.constraints[b].valid?(this.manageError(this.constraints[b]),a=!1):!0===this.constraints[b].valid&&(this.removeError(this.constraints[b].name),a=!1!==a);this.valid=a;return!0===this.valid?(this.removeErrors(),this.errorClassHandler.removeClass(this.options.errorClass).addClass(this.options.successClass),!0):!1===this.valid?(this.errorClassHandler.removeClass(this.options.successClass).addClass(this.options.errorClass),!1):a},ulErrorManagement:function(){this.ulError="#"+this.hash;this.ulTemplate=
d(this.options.errors.errorsWrapper).attr("id",this.hash).addClass("parsley-error-list")},removeError:function(a){a=this.ulError+" ."+a;var b=this;this.options.animate?d(a).fadeOut(this.options.animateDuration,function(){d(this).remove();b.ulError&&0===d(b.ulError).children().length&&b.removeErrors()}):d(a).remove();this.ulError&&0===d(this.ulError).children().length&&this.removeErrors()},addError:function(a){for(var b in a){var c=d(this.options.errors.errorElem).addClass(b);d(this.ulError).append(this.options.animate?
d(c).html(a[b]).hide().fadeIn(this.options.animateDuration):d(c).html(a[b]))}},removeErrors:function(){this.options.animate?d(this.ulError).fadeOut(this.options.animateDuration,function(){d(this).remove()}):d(this.ulError).remove()},reset:function(){this.valid=null;this.removeErrors();this.validatedOnce=!1;this.errorClassHandler.removeClass(this.options.successClass).removeClass(this.options.errorClass);for(var a in this.constraints)this.constraints[a].valid=null;return this},manageError:function(a){d(this.ulError).length||
this.manageErrorContainer();if(!("required"===a.name&&null!==this.getVal()&&0<this.getVal().length)&&(!this.isRequired||!("required"!==a.name&&(null===this.getVal()||0===this.getVal().length)))){var b=a.name,c=!1!==this.options.errorMessage?"custom-error-message":b,f={};a=!1!==this.options.errorMessage?this.options.errorMessage:"type"===a.name?this.Validator.messages[b][a.requirements]:"undefined"===typeof this.Validator.messages[b]?this.Validator.messages.defaultMessage:this.Validator.formatMesssage(this.Validator.messages[b],
a.requirements);d(this.ulError+" ."+c).length||(f[c]=a,this.addError(f))}},manageErrorContainer:function(){var a=this.options.errorContainer||this.options.errors.container(this.element,this.isRadioOrCheckbox),b=this.options.animate?this.ulTemplate.show():this.ulTemplate;"undefined"!==typeof a?d(a).append(b):!this.isRadioOrCheckbox?this.$element.after(b):this.$element.parent().after(b)},addListener:function(a){for(var b in a)this.options.listeners[b]=a[b]},destroy:function(){this.$element.removeClass("parsley-validated");
this.reset().$element.off("."+this.type).removeData(this.type)}};var l=function(a,b,c){this.initMultiple(a,b);this.inherit(a,b);this.Validator=new h(b);this.init(a,c||"ParsleyFieldMultiple")};l.prototype={constructor:l,initMultiple:function(a,b){this.element=a;this.$element=d(a);this.group=b.group||!1;this.hash=this.getName();this.siblings=this.group?'[data-group="'+this.group+'"]':'input[name="'+this.$element.attr("name")+'"]';this.isRadioOrCheckbox=!0;this.isRadio=this.$element.is("input[type=radio]");
this.isCheckbox=this.$element.is("input[type=checkbox]");this.errorClassHandler=b.errors.classHandler(a,this.isRadioOrCheckbox)||this.$element.parent()},inherit:function(a,b){var c=new j(a,b,"ParsleyFieldMultiple"),d;for(d in c)"undefined"===typeof this[d]&&(this[d]=c[d])},getName:function(){if(this.group)return"parsley-"+this.group;if("undefined"===typeof this.$element.attr("name"))throw"A radio / checkbox input must have a data-group attribute or a name to be Parsley validated !";return"parsley-"+
this.$element.attr("name").replace(/(:|\.|\[|\])/g,"")},getVal:function(){if(this.isRadio)return d(this.siblings+":checked").val()||"";if(this.isCheckbox){var a=[];d(this.siblings+":checked").each(function(){a.push(d(this).val())});return a}},bindValidationEvents:function(){this.valid=null;this.$element.addClass("parsley-validated");this.$element.off("."+this.type);var a=this,b=(!this.options.trigger?"":this.options.trigger)+(/change/i.test(this.options.trigger)?"":" change"),b=b.replace(/^\s+/g,
"").replace(/\s+$/g,"");d(this.siblings).each(function(){d(this).on(b.split(" ").join("."+a.type+" "),!1,d.proxy(a.eventValidation,a))})}};var k=function(a,b,c){this.init(a,b,c||"parsleyForm")};k.prototype={constructor:k,init:function(a,b,c){this.type=c;this.items=[];this.$element=d(a);this.options=b;var f=this;this.$element.find(b.inputs).each(function(){f.addItem(this)});this.$element.on("submit."+this.type,!1,d.proxy(this.validate,this))},addListener:function(a){for(var b in a)if(/Field/.test(b))for(var c=
0;c<this.items.length;c++)this.items[c].addListener(a);else this.options.listeners[b]=a[b]},addItem:function(a){if(d(a).is(this.options.excluded))return!1;a=d(a).parsley(this.options);a.setParent(this);this.items.push(a)},removeItem:function(a){a=d(a).parsley();for(var b=0;b<this.items.length;b++)if(this.items[b].hash===a.hash)return this.items[b].destroy(),this.items.splice(b,1),!0;return!1},validate:function(a){var b=!0;this.focusedField=!1;for(var c=0;c<this.items.length;c++)if("undefined"!==typeof this.items[c]&&
!1===this.items[c].validate()&&(b=!1,!this.focusedField&&"first"===this.options.focus||"last"===this.options.focus))this.focusedField=this.items[c].$element;this.focusedField&&!b&&this.focusedField.focus();this.options.listeners.onFormSubmit(b,a,this);return b},isValid:function(){for(var a=0;a<this.items.length;a++)if(!1===this.items[a].isValid())return!1;return!0},removeErrors:function(){for(var a=0;a<this.items.length;a++)this.items[a].parsley("reset")},destroy:function(){for(var a=0;a<this.items.length;a++)this.items[a].destroy();
this.$element.off("."+this.type).removeData(this.type)},reset:function(){for(var a=0;a<this.items.length;a++)this.items[a].reset()}};d.fn.parsley=function(a,b){function c(c,g){var e=d(c).data(g);if(!e){switch(g){case "parsleyForm":e=new k(c,f,"parsleyForm");break;case "parsleyField":e=new j(c,f,"parsleyField");break;case "parsleyFieldMultiple":e=new l(c,f,"parsleyFieldMultiple");break;default:return}d(c).data(g,e)}return"string"===typeof a&&"function"===typeof e[a]?(e=e[a](b),"undefined"!==typeof e?
e:d(c)):e}var f=d.extend(!0,{},d.fn.parsley.defaults,"undefined"!==typeof window.ParsleyConfig?window.ParsleyConfig:{},a,this.data()),g=null;d(this).is("form")?g=c(d(this),"parsleyForm"):d(this).is(f.inputs)&&!d(this).is(f.excluded)&&(g=c(d(this),!d(this).is("input[type=radio], input[type=checkbox]")?"parsleyField":"parsleyFieldMultiple"));return"function"===typeof b?b():g};d.fn.parsley.Constructor=k;d.fn.parsley.defaults={inputs:"input, textarea, select",excluded:"input[type=hidden], :disabled",
trigger:!1,animate:!0,animateDuration:300,focus:"first",validationMinlength:3,successClass:"parsley-success",errorClass:"parsley-error",errorMessage:!1,validators:{},showErrors:!0,messages:{},validateIfUnchanged:!1,errors:{classHandler:function(){},container:function(){},errorsWrapper:"<ul></ul>",errorElem:"<li></li>"},listeners:{onFieldValidate:function(){return!1},onFormSubmit:function(){},onFieldError:function(){},onFieldSuccess:function(){}}};d(window).on("load",function(){d('[data-validate="parsley"]').each(function(){d(this).parsley()})})}(window.jQuery||
window.Zepto);



/****************************************/
/********* Plugin Initialization ********/
/****************************************/
    
/* Enable Twitter Bootstrap Tooltips */
$(document).on("mouseover", "a[data-toggle='tooltip']", function() {
    $(this).tooltip('show');
});

/* Set Response breakpoints */
Response.create({
    prop: "width"  // "width" "device-width" "height" "device-height" or "device-pixel-ratio"
            ,
    prefix: "min-width- r src"  // the prefix(es) for your data attributes (aliases are optional)
            ,
    breakpoints: [1281, 1025, 961, 641, 481, 320, 0] // min breakpoints (defaults for width/device-width)
            ,
    lazy: true // optional param - data attr contents lazyload rather than whole page at once
});


/****************************************/
/*************** Sidemenu ***************/
/****************************************/
$(document).on('click', '.sidemenu > li > a', function(event) {
 
    // Disable header links
    if ($(this).attr('href') == '#') {
        event.preventDefault();
    }
            
    // Show and hide the tabs on click
    if ($(this).attr('class') == 'active'){
        $(this).next().slideUp('normal');
        $(this).next().stop(true,false).slideToggle('normal');
        $(this).removeClass('active');
    } else {
        $('.sub-menu').slideUp('normal');
        $(this).next().stop(true,true).slideToggle('normal');
        // $('.sidemenu li > .sub-menu').removeClass('active');
        $('.sidemenu > li > a.active').removeClass('active');
        $(this).addClass('active');
    }
 
});


   
/******* Event Handlers *******/
    
/****************************************/
/**************** Moment ****************/
/****************************************/

/******* Language *******/
var monthsShortWithDots = "jan._feb._mrt._apr._mei_jun._jul._aug._sep._okt._nov._dec.".split("_"),
    monthsShortWithoutDots = "jan_feb_mrt_apr_mei_jun_jul_aug_sep_okt_nov_dec".split("_");

moment.lang('nl', {
    week : {
        dow : 1, // Monday is the first day of the week.
        doy : 4  // The week that contains Jan 4th is the first week of the year.
    }
});

$(document).ready(function() {
    
    /* === Bootstrap Select Picker (plugin) initialisation === */
    $('.selectpicker').selectpicker({});
    
    /* === Bootstrap Tooltip initialisation === */
    $("[data-toggle='tooltip']").tooltip({});
    
    /* === Bootstrap Popover initialisation === */
    $("[data-toggle='popover']").popover({});
    
    /*********************  Responsive Sidebar *********************/

    if (Response.viewportW() >= '979') {
        $('#sidebar').addClass("active");
        $('#sidebar').show();
        $('#sidebar-toggle').hide();
        $('#sidebar-toggle').removeClass('active');
        $('.content').css('margin-left', '201px');
    } else {
        $('#sidebar').removeClass("active");
        $('#sidebar').hide();
        $('#sidebar-toggle').show();
        $('.content').css('margin-left', '0');
    }

    $(window).resize(function() {
        if (Response.viewportW() >= '979') {
            $('#sidebar').addClass("active");
            $('#sidebar').show();
            $('#sidebar-toggle').hide();
            $('#sidebar-toggle').removeClass('active');

            $('.content').css('margin-left', '201px');
        } else {
            $('#sidebar').removeClass("active");
            $('#sidebar').hide();
            $('#sidebar-toggle').show();

            $('.content').css('margin-left', '0');
        }
    });

    // Show/Hide Sidebar Toggle
    $(document).on("click", "#sidebar-toggle", function() {

        if ($('#sidebar').hasClass("active")) {
            $('#sidebar').removeClass("active");
            $('#sidebar').hide();
            $('#sidebar-toggle').removeClass('active');
            $('.content').css('margin-left', '0');
        } else {
            $('#sidebar').addClass("active");
            $('#sidebar').show();
            $('#sidebar-toggle').addClass('active');
            $('.content').css('margin-left', '201px');
        }
    });
    
});