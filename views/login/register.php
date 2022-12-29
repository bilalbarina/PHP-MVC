<?php
 include base_path('views/layouts/head.php');
?>

</body>
<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6" >
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Créez un compte!</h1>
                            </div>
                            <form name="myform"  onsubmit="return validate()"  action="./register" method='post'  class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input  name='first_name' type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder=" Nom">
                                    </div>
                                    <p style="color: #ff000080; " id="first_name">
                                </p>
                                <!--  -->
                                    
                                   
                                    <div class="col-sm-6">
                                        <input name='last_name'  type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Prenom">
                                    </div>
                                                   <!-- message eruur -->
                                <p style="color: #ff000080; "id="last_name">
                                </p>
                                <!--  -->
                                </div>
                                <div class="form-group">
                                    <input   name='email' type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="L'Adresse E-Mail">
                                </div>
                                             <!-- message eruur -->
                                <p style="color: #ff000080; "id="email">
                                </p>
                                <!--  -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name ='password' type="password" class="form-control form-control-user"
                                            id="Password" placeholder="mot de passe">
                                    </div>
                                    <!-- message eruur -->
                                    <p style="color: #ff000080; "id="password">
                                </p>  
                                <!--  -->
                            </div>
                                <button class="btn btn-primary btn-user btn-block">
                                Inscrire
                                </button>
                                
                            </form>
                            <hr>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</body>
</html>

<script>

function validate(e) {

 var name = document.forms["myform"]["last_name"].value;
 if(name==""){
    
 alert( "Please enter the name");
 return false;
 }
 var email = document.forms["myform"]["email"].value;
 if(email==""){
 alert("Please enter the email");
 return false;
 }else{
 var re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
 var x=re.test(email);
 if(x){
 }else{
 alert("Email id not in correct format");
 return false;
 } 
 }  
 var first_name = document.forms["myform"]["fist_name"].value;
 if(first_name==""){
 alert("Please enter the first_name");
 return false;
 }
}
</script>