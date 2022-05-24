// function get(id){
//     return document.getElementById(id);
// }
// function search(e){
//     if (e.value == ""){
//         get("suggestions").innerHTML ="";
//         return;
//     }
//     var xhr =new XMLHttpRequest();
//     xhr.open("GET","../views/touristsearch.php?key="+e.value,true);
//     xhr.onreadystatechange = function(){
//         if(this.readyState == 4 && this.status == 200){
//             get("suggestions").innerHTML = this.responseText;
//         }
    
   
//     }
//     xhr.send();
// };

function checkadmin(e){
    var xhr =new XMLHttpRequest();
      xhr.open("GET","../views/newadminchange.php?adminusername="+e.value,true);
       xhr.onreadystatechange = function(){
             if(this.readyState == 4 && this.status == 200){
                 if(this.responseText.trim() =="Invalid"){
                         alert("Already Used Id")
                 }
                }

};
xhr.send();
}
