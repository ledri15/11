<?php
session_start();
include_once "config.php";
if(empty($_SESSION['products'])){
    header('Location:login.php');
}

$sql = "SELECT * FROM users";
$selectUsers =$conn -> prepare($sql);
$selectUsers ->execute();

$users_data =$selectUsers ->fetchAll();
?>


<?php include("header.php")?>

<style>
    table,tr,th,td{
        border:1px solid black;
    }

    table,tr,td{
        border-collapse:collapse;
    }

    td{
        padding:15px;
    }
</style>





<?php include("header.php")?>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Welcome <i><?php echo $_SESSION['username']?></i></a>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="logout.php">Sign out</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="dashboard.php">
                <span data-feather="home"></span>
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <?php foreach ($users_data as $user_data) { ?>
                <a class="nav-link" href="profile.php?id=<?= $user_data['id']; ?>">
                  <?php } ?>
                  <span data-feather="file"></span>
                  Edit Profile
                </a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <?php
        include_once "config.php";
        $getUsers=$conn ->prepare("SELECT * FROM users");
        $getUsers ->execute();
        $users =$getUsers -> fetchAll();
        ?>

              <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>title</th>
              <th>description</th>
              <th>quantity</th>
              <th>price</th>
              <th>Update</th>
            </tr>
          </thead>
          <?php
            foreach ($users as $user ) {
          ?>
          <tbody>
            <tr> 
              <td> <?= $user['id'] ?> </td>
              <td> <?= $user['title'] ?> </td>
              <td> <?= $user['description']  ?> </td> 
              <td> <?= $user['quantity']  ?> </td> 
              <td> <?= $user['price']  ?> </td>
              <td> <?= "<a href='delete.php?id=$user[id]'> Delete</a>| <a href='profile.php?id=$user[id]'> Update </a>"?></td>
            </tr>
          
            <?php 
              }
            ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


<?php include("footer.php"); ?>
