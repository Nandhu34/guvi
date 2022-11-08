
 $(document).ready("https://code.jquery.com/jquery-3.5.1.min.js")
 {
     
 }
/*
  alert("hihi");
  //var a = document.getElementById("first").value;
  //alert(a);
  //var b = document.getElementById("last").value;
  //alert(b);
  //var c = document.getElementById("gmail").value;
  //alert(c);
  //var d = document.getElementById("pass").value;
  //alert(d);
  //var e = document.getElementById("confpass").value;
  //alert(e);
  var a=10;
  var b=20;
  var c=40;
  var d=90;
  var e=90;
*/


 
$(document).ready(function(){
$("#submit").click(function(){
  var first=$("#first").val();
  var last=$("#last").val();
  var gmail=$("gmail").val();
  var pass=$("pass").val();
  var confpass=$("#confpass").val();

    
  var datastring='first1='+first+'&last1='+last+'&gmail1='+gmail+'&pass1='+pass;
    
  $.ajax({
      type:"post",
      url:"register.php",
      data:datastring,
      cache:false,
      success:function(result){
          alert(result);
      
  }
});
  return false;
    
});
}); 

/*
  if (d == e) {
      $(document).ready(function(){
    $.ajax({
      type: "POST",
      url: "register.php",
      data: { name: a, last: b, gmail: c, pass: d, confpass: e },
      success:function(response)
      {
          $('#result').html(response);
      }
    });
});*/


/*


$(document).ready(function(){
    $("#submit").click(function(){
        var first=$("#first").val();
        var last=$("#last").val();
        var gmail=$("gmail").val();
        var pass=$("pass").val();
        var confpass=$("#confpass").val();
        var datastring='first1='+first+'&last1='+last+'&gmail1='+gmail+'&pass1='+pass;
        $.ajax({
            type:"post",
            url:"register.php",
            data:dataTransfer,
            cache:false,
            success:function(result){
                alert(result);
            }
        });
        return false;
    });
}); 



*/
  