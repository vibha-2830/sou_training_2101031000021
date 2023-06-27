function demoExternalAlert()
        {
            alert("Internal Alert");
        }s

        function demoExternalConfirm(){
            if(confirm("Are you sure..??")){
                alert("yesss");
            }
            else
            {
                alert("NOOO");
            }
        }

        function demoExternalprompt(){
            var fName=prompt("Enter firstname here..");
            var lName=prompt("Enter Lastname here..");
            alert(fName+" "+lName);
        }