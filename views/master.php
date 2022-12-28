<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>

<?php
include base_path('views/layouts/head.php') ;
?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
           include base_path('views/layouts/sidebar.php') ;
         ?>
        
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- start header -->
                <?php
                     include base_path('views/layouts/header.php') ;
                ?>
              
                <!-- End header -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                     <!-- start  tableau -->
                    
                  <?php
                     include base_path($page);
                  ?>
                    <!-- fin  tableau -->
                   

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            
                 <?php
                     include base_path('views/layouts/footer.php') ;
                ?>
           
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

     

    

</body>

</html>
<?php exit() ?>