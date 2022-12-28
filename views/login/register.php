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
                            <form action="./register" method='post'  class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input  name='name' type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder=" Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input name='prenom'  type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Prenom">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input   name='email' type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name ='password' type="password" class="form-control form-control-user"
                                            id="Password" placeholder="Password">
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Register
                                </button>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
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