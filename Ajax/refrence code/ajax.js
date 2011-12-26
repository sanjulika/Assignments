var http = createRequestObject();
function createRequestObject() {
   var objAjax;
   var browser = navigator.appName;
   if(browser == "Microsoft Internet Explorer"){
      objAjax = new ActiveXObject("Microsoft.XMLHTTP");
   }else{
      objAjax = new XMLHttpRequest();
   }
   return objAjax;
}

function getNewContent(){
   http.open('get','newcontent.php',true);
   http.onreadystatechange = updateNewContent;
   http.send();
   return false;
}

function updateNewContent(){
   if(http.readyState == 4 && http.status==200){
      document.getElementById('mySentence').innerHTML = http.responseText;
   }
}
