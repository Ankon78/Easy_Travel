function get(id){
    return document.getElementById(id);
}
// e value = given value
function search(e){
    if (e.value == ""){
        get("suggestions").innerHTML ="";
        return;
    }
    // calling ajax
    var xhr =new XMLHttpRequest();
    // open --> server connection open
    //requesed method-->GET,requested-->url,(true/false)asyinro naki syncro
    xhr.open("GET","../views/adminsearch.php?key="+e.value,true);
    xhr.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            get("suggestions").innerHTML = this.responseText;
        }
    }
    xhr.send();
};
