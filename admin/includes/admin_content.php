<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admn
                <small>Subheading</small>
            </h1>

            <?php 

            $user = new User();
            
            $user->username = "Sudent";
            $user->password = "sometingnweirfd";
            $user->first_name = "SOL";
            $user->last_name = "DOnt know";

            $user->create();

            // $user = User::find_user_by_id(43);
            
            // $user->username = "David45";
            // $user->password = "david1989";
            // $user->first_name = "David";
            // $user->last_name = "WILLIAMS";
            
            // $user->update();

            // $user = User::find_user_by_id(3);
            
            // $user->last_name = "WILLIAMS";

            // $user->update();

            // $user = User::find_user_by_id(2);
            // $user->delete();

            // $user = User::find_user_by_id(4);
            // $user->delete();

            // $user = User::find_user_by_id(1);
            // $user->username = "WHATEVER";
            // $user->save();

            // $user = User::find_user_by_id(23);
            // $user->delete();
            
            // $user = User::find_user_by_id(24);
            // $user->password = "justpassword";
            // $user->save(); 

            // $user = new User();
            // $user->username = "WHATEVER_2000";
            // $user->save();

            // $user = User::find_user_by_id(1);
            // $user->username = "mhabul";
            // $user->save();

            // $user = new User();
            // $user->username = "SUAVE";
            // $user->save();

            $users = User::find_all();
            foreach ($users as $user) {
                echo $user->username;
            }
            
            ?>

            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>