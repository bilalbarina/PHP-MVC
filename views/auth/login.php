<?php
 include base_path('views/layouts/head.php');
?>
<body class="bg-gradient-primary">
<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

           <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div style="justify-content: space-around" class="row">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Connectez-vous </h1>
                                    </div>
                                    <form action="./login" method='post'class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Entrez L'Adresse E-Mail..." name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Entrez le mot de passe" name="password" required>
                                        </div>
                                        <div class="text-center">
                                        <p class="small" style="color:red"><?= isset($_SESSION['loginError']) ?   $_SESSION['loginError']: " "  ?> </p>
                                       </div>
                                       
                                       <div class="text-center">
                                        <a class="small" href="./forgotPasswordSubmit">Mot de passe oublié?</a>
                                    </div>
                                </br>
                                        <button class="btn btn-primary btn-user btn-block">
                                        Connexion
                                        </button>
                                       
                                    </form>
                                    <hr>
                                    
                                    
                                    <div class="text-center">
                                    
                                            <a href="./formRegister" class="small" >Créez un compte!</a>
                                   
                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>
</html>
<?php  

unset($_SESSION["loginError"]);

?>