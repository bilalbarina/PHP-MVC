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

const first_name = document.getElementById('first_name');
const last_name = document.getElementById('last_name');
const email = document.getElementById('email');
const password = document.getElementById('password');

form.addEventListener('submit', (e) => {
let messages = []
if (first_name.value === '' || first_name.value == null) {
messages.push('Name is required')
}
if (messages.length > 0) {
e.preventDefault()
errorElement.innerText = messages.join(',')
}
})
</script>