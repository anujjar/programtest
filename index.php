<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		li:nth-child(even){
			margin-bottom:10px;
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<form id="register" action="http://localhost/programtest/index.php" method="post">
		<ul type="none">
			<li>First Name:</li>
			<li><input type="text" name="firstname"><span id="firstname-error"></span></li>
			<li>Last Name:</li>
			<li><input type="text" name="lastname"><span id="lastname-error"></span></li>
			<li>Email:</li>
			<li><input type="text" name="email"><span id="email-error"></span></li>
			<li>Password:</li>
			<li><input type="Password" name="password"><span id="password-error"></span></li>
			<li>Mobile:</li>
			<li><input type="tel" name="phone"><span id="phone-error"></span></li>
			<li><input type="submit" value="submit"></li>
		</ul>
	</form>
	<script>
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

	 $("#register").submit(function(e){
	 	e.preventDefault();
	 	var that=$(this),
	        action=that.attr('action'),
            method=that.attr('method'),
	 	    data={};
	 	that.find('[name]').each(function(){
	 		var that=$(this),
	 	    name=that.attr('name');
	 	    value=that.val();
	 	    data[name]=value;
	 	});
	 	var validate=new Validate();
	 	validate.check(data,{
	 		firstname:{
	 			required:true,
	 			min:1,
	 			max:50
	 		},
	 	    lastname:{
	 			required:true,
	 			min:1,
	 			max:50
	 		},
	 		email:{
	 		    required:true,
	 			min:5,
	 			max:10,

	 		},
	 		password:{
	 			required:true,
	 			min:6,
	 			max:12
	 		},
	 		phone:{
	 		   required:true,
	 			min:5,
	 			max:15
	 		}
	 	});
	 	return false;
	 });
	</script>
</body>
</html>
