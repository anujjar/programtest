function Validate(){
	this.check=function(source,items){
		for(var item in items){
			var rules=items[item];

			for(var rule in rules){
				var ruleValue=rules[rule];
				var value=source[item];
				var field=$("input[name='"+item+"']");
				var errorField=$("#"+item+"-error");
				//field.css('border','1px solid black');
				//errorField.text("");
				if(value=="" && rule=="required"){
					errorField.text("field is required").css('color','red');
					field.css('border','1px solid red');
				}else if(value !=""){
					switch(rule){
						case 'min':
							  if(value.length<ruleValue){
							  	field.css('border','1px solid red');
							  	errorField.text("field should have minimum"+ruleValue+"characters").css('color','red');
							  }
							  break;
						case 'max':
								field.css('border','1px solid red');
								if(value.length>ruleValue){
									errorField.text("The field should have maximum"+ruleValue+"characters").css('color','red');
								}
							  break;
						default:


					}
				}

			}
		}
	}
}