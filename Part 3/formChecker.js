
    function formChecker()
    {
        var bucket = document.getElementById("bucket").value;
        var umbrella = document.getElementById("umbrella").value;
        var boots = document.getElementById("boots").value;
        var user = document.getElementById("user").value;
        var pass = document.getElementById("pass").value;
        var validEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        if (bucket == "")
        {
            alert("Bucket value must be entered!");
            return false;
        }
        else if(bucket < 0)
        {
            alert("Bucket value must not be negative!");
            return false;
        }

        else if (umbrella == "")
        {
            alert("Umbrella value must be entered!");
            return false;
        }
        else if(umbrella < 0)
        {
            alert("Umbrella value must not be negative!");
            return false;
        }

        else if (boots == "")
        {
            alert("Boots value must be entered!");
            return false;
        }
        else if(boots < 0)
        {
            alert("Boots value must not be negative!");
            return false;
        }

        else if(user == "")
        {
            alert("Email value must be entered!")
            return false;
        }
        else if(pass == "")
        {
            alert("Password value must be entered!")
            return false;
        }
        else if(user.value.match(validEmail))
        {
            return true;
        }
        else
        {
            alert("Invalid email. Please try again!")
            return false;
        }
    }


