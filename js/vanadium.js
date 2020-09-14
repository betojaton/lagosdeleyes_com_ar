Vanadium={},Vanadium.Version="0.1",Vanadium.CompatibleWithJQuery="1.3.2",Vanadium.Type="jquery",0!=jQuery().jquery.indexOf(Vanadium.CompatibleWithJQuery)&&window.console&&window.console.warn&&console.warn("This version of Vanadium is tested with jQuery "+Vanadium.CompatibleWithJQuery+" it may not work as expected with this version ("+jQuery().jquery+")"),Vanadium.each=jQuery.each,Vanadium.all_elements=function(){return jQuery("*")},Vanadium.partition=function(a,b){var c=[],d=[];return Vanadium.each(a,function(){b(this)?c.push(this):d.push(this)}),[c,d]};var HashMap=function(){this.initialize()};HashMap.hashmap_instance_id=0,HashMap.prototype={hashkey_prefix:"<#HashMapHashkeyPerfix>",hashcode_field:"<#HashMapHashcodeField>",initialize:function(){this.backing_hash={},this.code=0,HashMap.hashmap_instance_id+=1,this.instance_id=HashMap.hashmap_instance_id},hashcodeField:function(){return this.hashcode_field+this.instance_id},put:function(a,b){var c;if(a&&b){var d;d="number"==typeof a||"string"==typeof a?a:a[this.hashcodeField()],d?c=this.backing_hash[d]:(this.code+=1,d=this.hashkey_prefix+this.code,a[this.hashcodeField()]=d),this.backing_hash[d]=[a,b]}return void 0===c?void 0:c[1]},get:function(a){var b;if(a){var c;c="number"==typeof a||"string"==typeof a?a:a[this.hashcodeField()],c&&(b=this.backing_hash[c])}return void 0===b?void 0:b[1]},del:function(a){var b=!1;if(a){var c;if(c="number"==typeof a||"string"==typeof a?a:a[this.hashcodeField()]){var d=this.backing_hash[c];this.backing_hash[c]=void 0,void 0!==d&&(a[this.hashcodeField()]=void 0,b=!0)}}return b},each:function(a){var c;for(c in this.backing_hash)if(a.call(this.backing_hash[c][1],this.backing_hash[c][0],this.backing_hash[c][1])===!1)break;return this},toString:function(){return"HashMapJS"}},Vanadium.containers=new HashMap;var ContainerValidation=function(a){this.initialize(a)};ContainerValidation.prototype={initialize:function(a){this.html_element=a,this.elements=[]},add_element:function(a){this.elements.push(a)},decorate:function(){var a=null;for(var b in this.elements)if(void 0===this.elements[b].invalid)a=void 0;else{if(this.elements[b].invalid===!0){a=!1;break}this.elements[b].invalid===!1&&null===a&&(a=!0)}void 0===a?(jQuery(this.html_element).removeClass(Vanadium.config.invalid_class),jQuery(this.html_element).removeClass(Vanadium.config.valid_class)):a?(jQuery(this.html_element).removeClass(Vanadium.config.invalid_class),jQuery(this.html_element).addClass(Vanadium.config.valid_class)):(jQuery(this.html_element).removeClass(Vanadium.config.valid_class),jQuery(this.html_element).addClass(Vanadium.config.invalid_class))}};var VanadiumForm=function(a){this.initialize(a)};Vanadium.forms=new HashMap,VanadiumForm.add_element=function(a){var b=a.element.form;if(b){var c=Vanadium.forms.get(b);c?c.validation_elements.push(a):(c=new VanadiumForm(a),Vanadium.forms.put(b,c))}},VanadiumForm.prototype={initialize:function(a){this.validation_elements=[a],this.form=a.element.form;var b=this,c=function(){var a=b.validate(),c=!0;return a.each(function(a,b){for(var d in b)if(0==b[d].success){c=!1;break}return 0==c?!1:void 0}),c?c:(b.decorate(),!1)};jQuery(this.form).find(":submit").click(function(){return c()}),this.form.decorate=function(){b.decorate()}},validate:function(){var a=new HashMap;return Vanadium.each(this.validation_elements,function(){a.put(this,this.validate())}),a},decorate:function(a){0==arguments.length&&(a=this.validate()),a.each(function(a,b){a.decorate(b)})},validateAndDecorate:function(){this.decorate(this.validate())}},Vanadium.validators_types={},Vanadium.elements_validators_by_id={},Vanadium.all_elements_validators=[],Vanadium.created_advices=[],Vanadium.all_html_elements=new HashMap,Vanadium.config={valid_class:"vanadium-valid",invalid_class:"vanadium-invalid",message_value_class:"vanadium-message-value",advice_class:"vanadium-advice",prefix:":",separator:";",reset_defer_timeout:100},Vanadium.empty_advice_marker_class="-vanadium-empty-advice-",Vanadium.rules={},Vanadium.init=function(){this.setupValidatorTypes(),this.scan_dom()},Vanadium.addValidatorType=function(a,b,c,d,e){this.validators_types[a]=new Vanadium.Type(a,b,c,d,e)},Vanadium.addValidatorTypes=function(a){var b=this;Vanadium.each(a,function(){Vanadium.addValidatorType.apply(b,this)})},Vanadium.scan_dom=function(){Vanadium.each(Vanadium.all_elements(),function(a,b){var c=b.className.split(" ");if(Vanadium.is_input_element(b)){var d=new ElementValidation(b);b.id&&(Vanadium.elements_validators_by_id[b.id]=d),Vanadium.all_elements_validators.push(d),Vanadium.all_html_elements.put(b,d),VanadiumForm.add_element(d),Vanadium.each(c,function(){var a=Vanadium.parse_class_name(this);a&&(Vanadium.add_validation_instance(d,a),Vanadium.add_validation_modifier(d,a))}),Vanadium.each(Vanadium.get_rules(b.id),function(){var a=this;a&&(Vanadium.add_validation_instance(d,a),Vanadium.add_validation_modifier(d,a))}),d.setup()}else Vanadium.add_validation_container(b)})},Vanadium.add_validation_container=function(a){var b=a.className.split(" ");Vanadium.each(b,function(){var b=Vanadium.parse_class_name(this);return"container"==b[0]?(Vanadium.containers.put(a,new ContainerValidation(a)),!0):void 0}),Vanadium.each(Vanadium.get_rules(a.id),function(){var b=this;return"container"==b?(Vanadium.containers.put(a,new ContainerValidation(a)),!0):void 0})},Vanadium.get_rules=function(a){var b=function(a){return"string"==typeof a?[a]:Vanadium.isArray(a)?a:"object"==typeof a?[a.validator,a.parameter,a.advice]:void 0},c=[],d=Vanadium.rules[a];if("undefined"==typeof d)return[];if("string"==typeof d)c.push(d);else if(Vanadium.isArray(d))for(var e in d)c.push(b(d[e]));else"object"==typeof d&&c.push(b(d));return c},Vanadium.parse_class_name=function(a){if(0==a.indexOf(Vanadium.config.prefix)){var b=a.substr(Vanadium.config.prefix.length).split(Vanadium.config.separator);for(var c in b)""==b[c]&&(b[c]=void 0);return b}return[]},Vanadium.add_validation_instance=function(a,b){var c=b[0],d=b[1],e=b[2],f=Vanadium.validators_types[c];f&&a.add_validation_instance(f,d,e)},Vanadium.add_validation_modifier=function(a,b){var c=b[0],d=b[1];("only_on_blur"==c||"only_on_submit"==c||"wait"==c||"advice"==c)&&a.add_validation_modifier(c,d)},Vanadium.validate=function(){var a=new HashMap;return Vanadium.each(Vanadium.all_elements_validators,function(){a.put(this,this.validate())}),a},Vanadium.validateAndDecorate=function(a){if("undefined"==typeof a)Vanadium.decorate(Vanadium.validate());else if(1==a.nodeType){var b=Vanadium.all_html_elements.get(a)||Vanadium.forms.get(a);b&&b.validateAndDecorate(!1)}},Vanadium.decorate=function(a){if("object"==typeof a)if("HashMapJS"==a.toString())a.each(function(a,b){a.decorate(b)});else{var b;for(b in a){var c=Vanadium.elements_validators_by_id[b];c&&c.decorate(a[b])}}},Vanadium.reset=function(){Vanadium.each(Vanadium.all_elements_validators,function(){this.reset()})},Vanadium.isArray=function(a){return null!=a&&"object"==typeof a&&"splice"in a&&"join"in a},Vanadium.isFunction=function(a){return null!=a&&"[object Function]"===a.toString()},Vanadium.extend=function(){for(var b=[Vanadium],c=0;c<arguments.length;c++)b.push(arguments[c]);return jQuery.extend.apply(jQuery,b)},Vanadium.bind=function(a,b){return function(){return a.apply(b,arguments)}},Vanadium.extend({getElementType:function(a){switch(!0){case"TEXTAREA"==a.nodeName.toUpperCase():return Vanadium.TEXTAREA;case"INPUT"==a.nodeName.toUpperCase()&&"TEXT"==a.type.toUpperCase():return Vanadium.TEXT;case"INPUT"==a.nodeName.toUpperCase()&&"PASSWORD"==a.type.toUpperCase():return Vanadium.PASSWORD;case"INPUT"==a.nodeName.toUpperCase()&&"CHECKBOX"==a.type.toUpperCase():return Vanadium.CHECKBOX;case"INPUT"==a.nodeName.toUpperCase()&&"FILE"==a.type.toUpperCase():return Vanadium.FILE;case"SELECT"==a.nodeName.toUpperCase():return Vanadium.SELECT;case"INPUT"==a.nodeName.toUpperCase():throw new Error("Vanadium::getElementType - Cannot use Vanadium on an "+a.type+" input!");default:throw new Error("Vanadium::getElementType - Element must be an input, select, or textarea!")}},is_input_element:function(a){return"TEXTAREA"==a.nodeName.toUpperCase()||"INPUT"==a.nodeName.toUpperCase()&&"TEXT"==a.type.toUpperCase()||"INPUT"==a.nodeName.toUpperCase()&&"PASSWORD"==a.type.toUpperCase()||"INPUT"==a.nodeName.toUpperCase()&&"CHECKBOX"==a.type.toUpperCase()||"INPUT"==a.nodeName.toUpperCase()&&"FILE"==a.type.toUpperCase()||"SELECT"==a.nodeName.toUpperCase()},createAdvice:function(a,b,c){var d=document.createElement("span");d.id=b;var e=document.createTextNode(c);d.appendChild(e),a.parentNode.insertBefore(d,a.nextSibling),this.created_advices.push(d)},addValidationClass:function(a,b){a&&(this.removeValidationClass(a),a.className+=b?" "+Vanadium.config.valid_class:" "+Vanadium.config.invalid_class)},removeValidationClass:function(a){a&&(-1!=a.className.indexOf(Vanadium.config.invalid_class)&&(a.className=a.className.split(Vanadium.config.invalid_class).join(" ")),-1!=a.className.indexOf(Vanadium.config.valid_class)&&(a.className=a.className.split(Vanadium.config.valid_class).join(" ")))},TEXTAREA:1,TEXT:2,PASSWORD:3,CHECKBOX:4,SELECT:5,FILE:6}),ElementValidation=function(a){this.initialize(a)},ElementValidation.prototype={initialize:function(a){this.virgin=!0,this.element=a,this.validations=[],this.only_on_blur=!1,this.only_on_submit=!1,this.wait=100,this.created_advices=[],this.decorated=!1,this.containers=null,this.invalid=void 0,this.advice_id=void 0},add_validation_instance:function(a,b,c){this.validations.push(new Validation(this.element,a,b,c))},add_validation_modifier:function(a,b){if("only_on_blur"==a)this.only_on_blur=!0;else if("only_on_submit"==a)this.only_on_submit=!0;else if("wait"==a){var c=parseInt(b);0/0!=c&&"number"==typeof c&&(this.wait=c)}else if("advice"==a){var d=document.getElementById(b);d&&(this.advice_id=b)}},element_containers:function(){if(null===this.containers){this.containers=new HashMap;for(var a=this.element.parentNode;a!=document;){var b=Vanadium.containers.get(a);b&&(b.add_element(this),this.containers.put(a,b)),a=a.parentNode}}return this.containers},validate:function(a,b){var c=[];return Vanadium.each(this.validations,function(){c.push(this.validate(a,b))}),c},decorate:function(a,b){b||this.reset(),this.decorated=!0;var c=this,d=Vanadium.partition(a,function(a){return a.success}),e=d[0],f=d[1];f.length>0?(this.invalid=!0,Vanadium.addValidationClass(this.element,!1)):e.length>0&&!this.invalid?(this.invalid=!1,Vanadium.addValidationClass(this.element,!0)):this.invalid=void 0,this.element_containers().each(function(a,b){b.decorate()}),Vanadium.each(f,function(a,b){var d=void 0;if(c.advice_id&&(d=document.getElementById(c.advice_id)),d||b.advice_id)if(d=d||document.getElementById(b.advice_id)){jQuery(d).addClass(Vanadium.config.advice_class);var e=0==d.childNodes.length;(e||jQuery(d).hasClass(Vanadium.empty_advice_marker_class))&&(jQuery(d).addClass(Vanadium.empty_advice_marker_class),jQuery(d).append("<span>"+b.message+"</span>")),jQuery(d).show()}else d=c.create_advice(b);else d=c.create_advice(b);Vanadium.addValidationClass(d,!1)})},validateAndDecorate:function(a){a&&this.virgin||this.decorate(this.validate(this,this.decorate))},create_advice:function(a){var b=document.createElement("span");return this.created_advices.push(b),jQuery(b).addClass(Vanadium.config.advice_class),jQuery(b).html(a.message),jQuery(this.element).after(b),b},reset:function(){this.invalid=void 0;var a=document.getElementById(this.advice_id);a&&(jQuery(a).hasClass(Vanadium.empty_advice_marker_class)&&jQuery(a).empty(),jQuery(a).hide()),Vanadium.each(this.validations,function(){var a=document.getElementById(this.adviceId);a&&(jQuery(a).hasClass(Vanadium.empty_advice_marker_class)&&jQuery(a).empty(),jQuery(a).hide())});for(var b=this.created_advices.pop();void 0!==b;)jQuery(b).remove(),b=this.created_advices.pop();Vanadium.removeValidationClass(this.element)},deferValidation:function(){this.wait>=300&&this.reset();var a=this;a.timeout&&clearTimeout(a.timeout),a.timeout=setTimeout(function(){jQuery(a.element).trigger("validate")},a.wait)},deferReset:function(){var a=this;a.reset_timeout&&clearTimeout(a.reset_timeout),a.reset_timeout=setTimeout(function(){a.reset()},Vanadium.config.reset_defer_timeout)},setup:function(){var a=this;this.elementType=Vanadium.getElementType(this.element),this.form=this.element.form,this.element_containers(),this.only_on_submit||(this.observe(),jQuery(a.element).bind("validate",function(){a.validateAndDecorate.call(a,!0)}),jQuery(a.element).bind("defer_validation",function(){a.deferValidation.call(a)}),jQuery(a.element).bind("reset",function(){a.reset.call(a)}))},observe:function(){var a=this.element,b=Vanadium.getElementType(a),c=this;switch(jQuery(a).focus(function(){c.virgin=!1}),b){case Vanadium.CHECKBOX:jQuery(a).click(function(){c.virgin=!1,jQuery(c.element).trigger("validate")});break;case Vanadium.SELECT:case Vanadium.FILE:jQuery(a).change(function(){jQuery(a).trigger("validate")});break;default:jQuery(a).keydown(function(b){9!=b.keyCode&&jQuery(a).trigger("reset")}),this.only_on_blur||jQuery(a).keyup(function(b){9!=b.keyCode&&jQuery(a).trigger("defer_validation")}),jQuery(a).blur(function(){jQuery(a).trigger("validate")})}}};var Validation=function(a,b,c,d){this.initialize(a,b,c,d)};Validation.prototype={initialize:function(a,b,c,d){this.element=a,this.validation_type=b,this.param=c,this.adviceId=d;var e=document.getElementById(d);e&&jQuery(e).addClass(Vanadium.config.advice_class),this.validation_type.init&&this.validation_type.init(this)},emmit_message:function(a){return"string"==typeof a?a:"function"==typeof a?a.call(this,jQuery(this.element).val(),this.param):void 0},validMessage:function(){return this.emmit_message(this.validation_type.validMessage())||"ok"},invalidMessage:function(){return this.emmit_message(this.validation_type.invalidMessage())||"error"},test:function(a,b){return this.validation_type.validationFunction.call(this,jQuery(this.element).val(),this.param,this,a,b)},validate:function(a,b){var c={success:!1,message:"Received invalid return value."},d=this.test(a,b);return"boolean"==typeof d?{success:d,advice_id:this.adviceId,message:d?this.validMessage():this.invalidMessage()}:("object"==typeof d&&jQuery.extend.apply(c,d),c)}},Vanadium.Type=function(a,b,c,d,e){this.initialize(a,b,c,d,e)},Vanadium.Type.prototype={initialize:function(a,b,c,d,e){this.className=a,this.message=d,this.error_message=c,this.validationFunction=b,this.init=e},test:function(a){return this.validationFunction.call(this,a)},validMessage:function(){return this.message},invalidMessage:function(){return this.error_message},toString:function(){return"className:"+this.className+" message:"+this.message+" error_message:"+this.error_message},init:function(a){this.init&&this.init(a)}},Vanadium.setupValidatorTypes=function(){Vanadium.addValidatorType("empty",function(a){return null==a||0==a.length}),Vanadium.addValidatorTypes([["equal",function(a,b){return a==b},function(a,b){return'The value should be equal to <span class="'+Vanadium.config.message_value_class+'">'+b+"</span>."}],["equal_ignore_case",function(a,b){return a.toLowerCase()==b.toLowerCase()},function(a,b){return'The value should be equal to <span class="'+Vanadium.config.message_value_class+'">'+b+"</span>."}],["required",function(a){return!Vanadium.validators_types.empty.test(a)},"Campo Obligatorio."],["accept",function(a,b,c){return c.element.checked},"Must be accepted!"],["integer",function(a){if(Vanadium.validators_types.empty.test(a))return!0;var b=parseFloat(a);return!isNaN(b)&&b.toString()==a&&Math.round(b)==b},"Please enter a valid integer in this field."],["number",function(a){return Vanadium.validators_types.empty.test(a)||!isNaN(a)&&!/^\s+$/.test(a)},"Please enter a valid number in this field."],["float",function(a){return Vanadium.validators_types.empty.test(a)||!isNaN(a)&&!/^\s+$/.test(a)},"Please enter a valid number in this field."],["digits",function(a){return Vanadium.validators_types.empty.test(a)||!/[^\d]/.test(a)},"Please use numbers only in this field. please avoid spaces or other characters such as dots or commas."],["alpha",function(a){return Vanadium.validators_types.empty.test(a)||/^[a-zA-Z\u00C0-\u00FF\u0100-\u017E\u0391-\u03D6]+$/.test(a)},"Please use letters only in this field."],["asciialpha",function(a){return Vanadium.validators_types.empty.test(a)||/^[a-zA-Z]+$/.test(a)},"Please use ASCII letters only (a-z) in this field."],["alphanum",function(a){return Vanadium.validators_types.empty.test(a)||!/\W/.test(a)},"Please use only letters (a-z) or numbers (0-9) only in this field. No spaces or other characters are allowed."],["date",function(a){var b=new Date(a);return Vanadium.validators_types.empty.test(a)||!isNaN(b)},"Please enter a valid date."],["email",function(a){return Vanadium.validators_types.empty.test(a)||/\w{1,}[@][\w\-]{1,}([.]([\w\-]{1,})){1,3}$/.test(a)},"Direcci&oacute;n de email no valida."],["url",function(a){return Vanadium.validators_types.empty.test(a)||/^(http|https|ftp):\/\/(([A-Z0-9][A-Z0-9_-]*)(\.[A-Z0-9][A-Z0-9_-]*)+)(:(\d+))?\/?/i.test(a)},"Please enter a valid URL."],["date_au",function(a){if(Vanadium.validators_types.empty.test(a))return!0;var b=/^(\d{2})\/(\d{2})\/(\d{4})$/;if(!b.test(a))return!1;var c=new Date(a.replace(b,"$2/$1/$3"));return parseInt(RegExp.$2,10)==1+c.getMonth()&&parseInt(RegExp.$1,10)==c.getDate()&&parseInt(RegExp.$3,10)==c.getFullYear()},"Please use this date format: dd/mm/yyyy. For example 17/03/2006 for the 17th of March, 2006."],["currency_dollar",function(a){return Vanadium.validators_types.empty.test(a)||/^\$?\-?([1-9]{1}[0-9]{0,2}(\,[0-9]{3})*(\.[0-9]{0,2})?|[1-9]{1}\d*(\.[0-9]{0,2})?|0(\.[0-9]{0,2})?|(\.[0-9]{1,2})?)$/.test(a)},"Please enter a valid $ amount. For example $100.00 ."],["selection",function(a,b){return b.options?b.selectedIndex>0:!Vanadium.validators_types.empty.test(a)},"Please make a selection"],["one_required",function(a,b){var c=jQuery('input[name="'+b.name+'"]');return some(c,function(a){return getNodeAttribute(a,"value")})},"Please select one of the above options."],["length",function(a,b){return void 0===b?!0:a.length==parseInt(b)},function(a,b){return'The value should be <span class="'+Vanadium.config.message_value_class+'">'+b+"</span> characters long."}],["min_length",function(a,b){return void 0===b?!0:a.length>=parseInt(b)},function(a,b){return'The value should be at least <span class="'+Vanadium.config.message_value_class+'">'+b+"</span> characters long."}],["max_length",function(a,b){return void 0===b?!0:a.length<=parseInt(b)},function(a,b){return'The value should be at most <span class="'+Vanadium.config.message_value_class+'">'+b+"</span> characters long."}],["same_as",function(a,b){if(void 0===b)return!0;var c=document.getElementById(b);return c?a==c.value:!1},function(a,b){var c=document.getElementById(b);return c?'The value should be the same as <span class="'+Vanadium.config.message_value_class+'">'+(jQuery(c).attr("name")||c.id)+"</span> .":"There is no exemplar item!!!"},"",function(a){var b=document.getElementById(a.param);b&&jQuery(b).bind("validate",function(){jQuery(a.element).trigger("validate")})}],["ajax",function(a,b,c,d,e){return Vanadium.validators_types.empty.test(a)?!0:(d&&e&&jQuery.getJSON(b,{value:a,id:c.element.id},function(a){e.apply(d,[[a],!0])}),!0)}],["format",function(a,b){var c=b.match(/^\/(((\\\/)|[^\/])*)\/(((\\\/)|[^\/])*)$/);if(7!=c.length)return!1;var d=c[1],e=c[4];try{var f=new RegExp(d,e);return f.test(a)}catch(g){return!1}},function(a,b){var c=b.split("/");return 3==c.length&&""==c[0]?'The value should match the <span class="'+Vanadium.config.message_value_class+'">'+b.toString()+"</span> pattern.":'provided parameter <span class="'+Vanadium.config.message_value_class+'">'+b.toString()+"</span> is not valid Regexp pattern."}]]),"undefined"!=typeof VanadiumCustomValidationTypes&&VanadiumCustomValidationTypes&&Vanadium.addValidatorTypes(VanadiumCustomValidationTypes)},jQuery(document).ready(function(){"object"==typeof VanadiumConfig&&VanadiumConfig&&Vanadium.each(VanadiumConfig,function(a,b){Vanadium.config[a]=b}),"object"==typeof VanadiumRules&&VanadiumRules&&Vanadium.each(VanadiumRules,function(a,b){Vanadium.rules[a]=b}),Vanadium.init()});