$(function(){var a=/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;$(".boton").click(function(){return $(".error").fadeOut().remove(),""==$(".nombre").val()?($(".nombre").focus().after('<span class="error">Ingrese su nombre</span>'),!1):""!=$(".email").val()&&a.test($(".email").val())?""==$(".asunto").val()?($(".asunto").focus().after('<span class="error">Ingrese un asunto</span>'),!1):""==$(".mensaje").val()?($(".mensaje").focus().after('<span class="error">Ingrese un mensaje</span>'),!1):void 0:($(".email").focus().after('<span class="error">Ingrese un email correcto</span>'),!1)}),$(".nombre, .asunto, .mensaje").bind("blur keyup",function(){return""!=$(this).val()?($(".error").fadeOut(),!1):void 0}),$(".email").bind("blur keyup",function(){return""!=$(".email").val()&&a.test($(".email").val())?($(".error").fadeOut(),!1):void 0})});