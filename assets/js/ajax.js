
    function checkUniqueMail(str){
        if (str.length == 0){
            document.getElementById("email").innerHTML = "";
            return;
        }else{
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200){
                    document.getElementById("email").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "/mymemo/ajax/checkValid.php?r=email&q="+str, true);
            xmlhttp.send();
        }
    }

    function checkUniqueUser(str){
        if(str.length == 0){
            document.getElementById("user").innerHTML = "";
            return;
        }else{
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("user").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "/mymemo/ajax/checkValid.php?r=username&q="+str, true);
            xmlhttp.send();
        }
    }


