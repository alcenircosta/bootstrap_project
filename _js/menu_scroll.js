$(function(){
    /*
    **Funcao para dar scroll ate o menu selecionado e
    **mudar o item selcionado do menu sem atualizar a pagina
    */
	$('nav a').click(function(){
		var href = $(this).attr('href');
		var offSetTop = $(href).offset().top;
        $('html,body').animate({'scrollTop':offSetTop},1500);
        $('nav ul li').removeClass('active');
		$(this).parent().addClass('active');    
		return false;
    });

});