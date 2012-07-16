 $(document).ready(function(){
	$(".errorMsg").hide();
	$("#loginImg").click(login);
	
	var isSubmit = true;
	
//	if(!checUserName(userName)){
//		$('#userNameError').html('用户名错误');
//		isSubmit = false;
//	}
	
//	if(!checkEmail(email)){
//		$('#emailError').html('邮箱错误');
//		isSubmit = false;
//	}
//	
	//点击注册图片开始注册
	$("#registerImg").click(register);
	
	//更新验证码
	$("#verifyImg").click(function(){
		$(this).attr('src', './common/checkcode.php?round=' + Math.random());
		return false;
	});
});


 function getType(o) {//或者去变量类型
   var _t; return ((_t = typeof(o)) == "object" ? Object.prototype.toString.call(o).slice(8,-1):_t).toLowerCase();
 }
 
 function getLength(str){ //获取字节长度
	 var i,sum=0; 
	 for(i=0;i<str.length;i++){ 
		 if((str.charCodeAt(i)>=0) && (str.charCodeAt(i)<=255)) 
			 sum=sum+1; 
		 else 
			 sum=sum+2; 
	 } 
	 return sum; 
} 
 
//去掉字符串的头空格（左空格）
 function LTrim(str){ 
     var i;
     for(i=0;i<str.length; i++) {
         if(str.charAt(i)!=" ") break;
     }
     str = str.substring(i,str.length);
     return str;
 }
 
 // 去掉字符串的尾空格（右空格）
 function RTrim(str){
     var i;
     for(i=str.length-1;i>=0;i--){
         if(str.charAt(i)!=" ") break;
     }
     str = str.substring(0,i+1);
     return str;
 }
 
 // 去掉字符串的头尾空格（左右空格）
 function Trim(str){
     return LTrim(RTrim(str));
 }
 
 
function login(){
	userName = document.getElementById('username').value;
	passWord = document.getElementById('password').value;
	
	if(userName.length == 0 || passWord.length == 0){
		alert("请输入用户名或密码！");
	}else{
		$.ajax({
			url:"index.php?action=user&method=login",
			type:"POST",
			data:"username=" + userName + "&password=" + passWord,
			success: function(data){
				data = $.trim(data);
				data = eval(data);
				$(data).each(function(index){
					if(data[index] == '0'){
						$('.errorMsg').show();
						$('.errorMsg').html("用户名或密码错误！");
					} 
					if(data[index] == '1'){
						//window.location.href="index.php?action=article&method=article";
					}
				});
				
			},
			error: function(){
				$('.errorMsg').show();
				$('.errorMsg').html("请求错误！");
			}
		});
	}
	return false;
}

function register(){
	userName = document.getElementById('username').value;
	passWord = document.getElementById('password').value;
	passWord1= document.getElementById('password').value;
	email    = document.getElementById('email').value;
	
	
		$.ajax({
			url:"index.php?action=user&method=register",
			type:"POST",
			data:"username=" + userName + "&password=" + passWord + "&email=" + email,
			success: function(data){
				alert(data);
				data = $.trim(data);
				//data = eval(data);
				$(data).each(function(index){
					if(data[index] == '0'){
						$('.errorMsg').show();
						$('.errorMsg').html("用户名或密码错误！");
					} 
					if(data[index] == '1'){
//						alert("登录成功");
						$('.reg').html(data);
						//location.href="index.php?action=article&method=article";
					}
				});
				
			},
			error: function(){
				$('.errorMsg').show();
				$('.errorMsg').html("请求错误！");
			}
		});
	
	return false;
}