
<html>
				Quantidade: <input type="text" id="q" name="quant" style="width:80px" onblur="multi();">
                Valor Unit: <input type="text" id="valor" name="valor" style="width:80px" onblur="multi();">
                Total: <input type="text" id="total" name="total" style="width:80px" readonly="readonly"></td>  
        </tr>
	<script>
	// função para multiplicar dois valores
	function multi(){
			v1=document.getElementById("q").value;
			v2=document.getElementById("valor").value;
		if((v1!="") && (v2!="")){
			total.value=parseInt(v1)*parseInt(v2);
		}
	}
	</script>
</html>