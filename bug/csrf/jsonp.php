<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
        <input type="text" name="name" id="username">
        <input type="test" name="num" id="usernum">
        <input type="submit" name="tijiao" id="btn">

</body>
</html>
<script type="text/javascript">



    var btnobj=document.getElementById("btn");
        btnobj.addEventListener("click",checkform,false);
        function checkform(){
            var usernameobj=document.getElementById('username').value;
        var usernumobj=document.getElementById('usernum').value;
        var data={username:usernameobj,usernum:usernumobj};
        var jsonobj=JSON.stringify(data);//将对象转换为JSON串，通过ajax进行传递
        url='/bug/csrf/test2.php?data='+jsonobj+"&r="+Math.random();
        var xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.send();
      }

            
   function ajaxResultdeal(response){            
      var tips=document.getElementById('tips');
      var json=JSON.parse(response);
      if(json['username']=="11"){
      tips.innerHTML="<h1>你输入的名字是："+json['username']+"</h1>";                 
      }
      else{
        tips.innerHTML="<h1>你输入的有误</h1>";
                    
      }            
               
}
</script>

