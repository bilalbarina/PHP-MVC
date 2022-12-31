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
                                <h1 class="h4 text-gray-900 mb-4">forgot password</h1>
                            </div>
                            <form name="myform" action="./forgotPassword" method='post'  class="user">
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
                               
                                <button class="btn btn-primary btn-user btn-block">
                                Inscrire
                                </button>
                                
                            </form>
                            <hr>
                            <?php echo isset( $_SESSION['forgotPasswordErr']) ? $_SESSION['forgotPasswordErr']: ""  ?>

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</body>
</html>
<?php  

unset($_SESSION["forgotPasswordErr"]);

?>