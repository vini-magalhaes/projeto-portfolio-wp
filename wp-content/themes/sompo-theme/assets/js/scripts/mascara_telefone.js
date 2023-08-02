/***
## Mascara de campos
requisitos: jquery;
Telefone - [ add 2020-04-01 ] 
	.lr_mask_phone | phone 
celular - [ add 2020-04-01 ]
	.lr_mask_celular | Celular
***/
jQuery(function($){
	$(".lr_mask_phone").on('keyup',function(){
		lr_mask(this,'phone');	
	});
	$(".lr_mask_celular").on('keyup',function(){
		lr_mask(this,'celular');
	});
	$(".lr_mask_cep").on('keyup',function(){
		lr_mask(this,'cep');
	});
	$(".lr_mask_cpf").on('keyup',function(){
		lr_mask(this,'cpf');
	});
});
function lr_mask($this,$mask){
	var ddd;
	var pre;
	var pos;
	$=jQuery;
	var $this=$($this);
	var content=$this.val();
	content=content.replace(/\D/g, "");
	var length=content.length;
	var filtred = '';
	switch($mask){
		case "cpf":
			if(length<3){
				filtred=content;	
			}else if(length==3){
				filtred=content+".";	
			}else if(length<6){
				filtred=content.substring(0,3)+"."+content.substring(3,6);		
			}else if(length==6){
				filtred=content.substring(0,3)+"."+content.substring(3,6)+".";		
			}else if(length<9){
				filtred=content.substring(0,3)+"."+content.substring(3,6)+"."+content.substring(6,9);		
			}else if(length==9){
				filtred=content.substring(0,3)+"."+content.substring(3,6)+"."+content.substring(6,9)+"-";		
			}else if(length>9){
				filtred=content.substring(0,3)+"."+content.substring(3,6)+"."+content.substring(6,9)+"-"+content.substring(9,11);		
			}
			break;
		case "cep":
			if(length<5){
				filtred=content;	
			}
			else if(length==5){
				filtred=content+"-";		
			}
			else if(length>5){
				filtred=content.substring(0,5)+"-"+content.substring(5,8);		
			}

			break;
		case "celular":
		case "phone":
			if(length==1){
				filtred='('+content;	
			}
			else if(length==2){
				filtred='('+content+') ';	
			}
			else if(length<7){
				ddd=content.substring(0,2);
				pre=content.substring(2,6);
				filtred='('+ddd+') '+pre;	
			}
			else if(length<11 && $mask == "phone"){
				ddd=content.substring(0,2);
				pre=content.substring(2,6);
				pos=content.substring(6,10);
				filtred='('+ddd+') '+pre+'-'+pos;		
			}
			else{
				ddd=content.substring(0,2);
				pre=content.substring(2,7);
				pos=content.substring(7,11);
				filtred='('+ddd+') '+pre+'-'+pos;		
			}
	}
	$this.val(filtred);
}