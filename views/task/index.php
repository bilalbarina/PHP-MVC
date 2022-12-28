<?php
if (!isset($page)) {
   $page = 'views/task/index.php';
   include base_path('views/master.php');
}
?>
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <!-- <h6 class="m-0 font-weight-bold text-primary">Gestion des taches</h6> -->
      <a href="create" class="btn btn-primary ">Ajouter task</a>
   </div>
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php foreach ($tasks as  $value) {
               ?>
                  <tr>
                     <td><?php echo $value['id'] ?></td>
                     <td><?php echo $value['Task'] ?></td>
                     <td>
                        <form action="edit" method="post">
                           <input type="hidden" value="<?php echo $value['id'] ?>" name="id">
                           <button class="btn btn-warning">edit</button>
                        </form>
                        <form action="delete" method="post">
                           <input type="hidden" value="<?php echo $value['id'] ?>" name="id">
                           <button class="btn btn-danger">delete</button>
                        </form>
                     </td>

                  </tr>
               <?php } ?>

            </tbody>
         </table>
      </div>
   </div>
</div>