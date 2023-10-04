function change(){
    var login = document.getElementById("login");
    var singup = document.getElementById("singup");

    login.classList.toggle("d-none");
    singup.classList.toggle("d-none");
}

function singup(){

    var un = document.getElementById("username");
    var em = document.getElementById("email");
    var pw1 = document.getElementById("password");
    var pw2 = document.getElementById("confirm-password");


//    alert(un.value);
//    alert(em.value);
//    alert(pw1.value);
//    alert(pw2.value);


   var form = new FormData();

   form.append("un",un.value);
   form.append("em",em.value);
   form.append("pw1",pw1.value);
   form.append("pw2",pw2.value);


   var r = new XMLHttpRequest();
   r.onreadystatechange = function(){
   if(r.readyState == 4){
    var t = r.responseText;
    alert(t);
   }
   }
   r.open("POST", "userSingUpProcess.php", true);
   r.send(form);
}


function login(){
    var em = document.getElementById("email1");
    var pwd = document.getElementById("password1");
    var cm = document.getElementById("cm");
 
 //    alert(e2.value);
 //    alert(p2.value);
 //    alert(cm.checked);
 
 var f = new FormData();
    f.append("em",em.value);
    f.append("pwd",pwd.value);
    f.append("cm",cm.checked);
 
    var rq = new XMLHttpRequest();
    rq.onreadystatechange = function(){
     if(rq.readyState == 4){
         var t = rq.responseText;
         if(t == "success"){
             window.location="userPortral.php";
         }else{
             alert(t);
         }
     }
    }
 rq.open("POST", "userSingInProcess.php",true);
 rq.send(f);
 }


 function addDonationPost(){
 
    var cause = document.getElementById("cause");
    var title = document.getElementById("title");
    var description = document.getElementById("description");
    var st_day = document.getElementById("st_day");
    var cl_day = document.getElementById("cl_day");
    var goalAmount = document.getElementById("goalAmount");



//    alert(cause.value);
//    alert(title.value);
//    alert(description.value);
//    alert(st_day.value);
//    alert(cl_day.value);
//    alert(goalAmount.value);


   var form = new FormData();

form.append("cause",cause.value);
form.append("title",title.value);
form.append("description",description.value);
form.append("st_day",st_day.value);
form.append("cl_day",cl_day.value);
form.append("goalAmount",goalAmount.value);

   var r = new XMLHttpRequest();
   r.onreadystatechange = function(){
   if(r.readyState == 4){
    var t = r.responseText;
    alert(t);
   }
   }
   r.open("POST", "donationProcess.php", true);
   r.send(form); 

 }

 function logout(){
    var r = new XMLHttpRequest();
    r.onreadystatechange = function(){
        if(r.readyState == 4){
            var t = r.responseText;
            if(t == "success"){
                window.location.reload();
            }else{
                alert(t);
            }
        }
    }

    r.open("GET", "logout.php", true);
    r.send();
}
