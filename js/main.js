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