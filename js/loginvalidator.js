function validate() {
    if(document.getElementById('username').value == "patrick_kröller" && document.getElementById('password').value == "patkro0205"){
        window.location.href = "account.php";
    }
    else{
        document.getElementById('loginerror').style.visibility = "visible"
    }
}