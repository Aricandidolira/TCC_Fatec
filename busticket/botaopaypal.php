<?php
	include "visao/cabec.php";
?>
<section class="introducao_botao">
	<div class="container">
			<div class="grid-4 intro_start">
				<h3></h3>			
			</div>
<!--<form action="https://www.paypal.com/cgi-bin/webscr" method="post">


	    <input type="hidden" name="cmd" value="_xclick" />

	  

	    <input type="hidden" name="business" value="thsferrer@gmail.com" />

	    <input type="hidden" name="return" value="http://201.55.33.89/si/2017/si2017p9/tcc-certo/" />

	    <input type="hidden" name="cancel" value="http://201.55.33.89/si/2017/si2017p9/tcc-certo/" />

	    <input type="hidden" name="notify_url" value="http://201.55.33.89/si/2017/si2017p9/tcc-certo/" />



	    <input type="hidden" name="charset" value="utf-8" />

	    <input type="hidden" name="lc" value="BR" />

	    <input type="hidden" name="country_code" value="BR" />

	    <input type="hidden" name="currency_code" value="BRL" />



	    <input type="hidden" name="amount" value="" />

	    <input type="hidden" name="item_name" value="Passagem" />

	    <input type="hidden" name="quantity" value="" />
		
	    <input type="image" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_buynowCC_LG.gif" border="0" />
	</form>-->
	<form class="botao grid-8" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
		<h2 class="subtitulo">Compre com o PayPal!</h2>
				<p>Para finalizar a compra clique no botão, assim realizara o pagamento!</p>
				<br>
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="3ESE44UJKFE72">
		<input type="image" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">
		<img alt="" border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1">
	</form>
	
	<div class="grid-4 intro_end">
					<h3></h3>
		</div>
	</div>
</section>  

<!--
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="tha.ferrer@hotmail.com">
<input type="hidden" name="lc" value="BR">
<input type="hidden" name="item_name" value="Passagem">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="BRL">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.sandbox.paypal.com/pt_BR/BR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/pt_BR/i/scr/pixel.gif" width="1" height="1">
</form>-->
</html>
<?php
	include "visao/rodape.html";
?>