<?php

if (!isset($page)) {
   $page = 'views/task/create.php';
   include base_path('views/master.php');
}
?>
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Insérer</h6>
                        </div>
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Ajouter tache</h1>
                            </div>
                            <form action="./store" method="post" class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input  name="name" type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder=" Titre">
                                    </div>
                                   
                                </div>
                            
                               
                                <button class="btn btn-primary col-sm-2 mb-3 mb-sm-0">
                                    Ajouter
                               </button>
                                
                                
                            </form>
                            
                            
                        </div>
</div>


