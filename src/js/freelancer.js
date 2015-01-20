/*!
 * Start Bootstrap - Freelancer Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        console.debug($($anchor.attr('href')));
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Floating label headings for the contact form
$(function() {
    $("body").on("input propertychange", ".floating-label-form-group", function(e) {
        $(this).toggleClass("floating-label-form-group-with-value", !! $(e.target).val());
    }).on("focus", ".floating-label-form-group", function() {
        $(this).addClass("floating-label-form-group-with-focus");
    }).on("blur", ".floating-label-form-group", function() {
        $(this).removeClass("floating-label-form-group-with-focus");
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

// Ajax

// Consultar Status do Serviço //
$('.btn-consult').click(function (e) {
    var codigoServico = $('#codigoServico').val();
    e.preventDefault();

    $.ajax({
        url:'statusServico.php',
        type:'POST',
        data:{codigoServico:codigoServico},
        beforeSend:function(){
            $(".btn-consult").html("<span class=\"glyphicon glyphicon-refresh glyphicon-refresh-animate\"></span> Carregando ...");
        },
        success:function(response){
            console.log(response);

            var data = JSON.parse(response);
            var text = 'Senhor(a) <span>' + data.cliente + '</span>' +
                ' o seu equipamento: <span>' + data.equipamento + '</span><br/>' +
                ' com entrada em: <span>'+ data.dataEntrada + '</span>' +
                ' encontra-se: <br /><span>' + data.status;
            if(data.valor && data.referente){
                var textCont = ' no valor de '+ data.valor +' R$'+ '<br />' +
                    'referente a: ' + data.referente + '<br />';
                var botao = $("#autorizarServico");
                botao.attr('cs',codigoServico);
                if(data.aprovado){

                }else{
                    botao.show();
                }
                var out = text.concat(textCont);
                $('.content-consult').html(out);
                $(".btn-consult").html("Consultar Status");
            }else{
                $('.content-consult').html(text);
                $(".btn-consult").html("Consultar Status");
            }

        }
    });
});

$("#autorizarServico").on("click", function () {
    var codigoServico = $(this).attr('cs');
    alertify.confirm().set({
        'title':'Confirmação',
        'labels':{ok:'Sim',cancel:'Agora não'}
    });
    alertify.confirm("Autorizar o serviço ? *Essa ação não pode ser desfeita.",
        function(){
            var botao = $("#autorizarServico");
           var codigoOrcamento =  botao.attr('cs');
            $.post('setOrcamento.php',{codigoOrcamento:codigoOrcamento}, function (result) {
               console.debug(result);
            });
            alertify.success('Serviço autorizado');
            botao.hide();
        },
        function(){
            alertify.error('Estamos aguardando sua autorização');
        });


});

//-- Gallery
$(function () {
    $("#gallery").least();
});

















