<!DOCTYPE html>
<?php
session_start();
require_once('C:\xampp\htdocs\public\db-config\config.php');
include('security.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
      <script type="text/javascript" src="javascript/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="javascript/myjs.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    @font-face {
  font-family: 'Product Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans'), local('OpenSans'), url(https://fonts.gstatic.com/s/productsans/v5/HYvgU2fE2nRJvZ5JFAumwegdm0LZdjqr5-oayXSOefg.woff2) format('woff2');
}

#h1{
    background: #9575CD
}

body{
    font-family: 'Product Sans';
}


.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}
th{
  border-style:none;
  background-color:#7E57C2
}

tr{
  border:none;
}

tr:nth-child(even) {background-color: #f2f2f2}
}

</style>
        <body class=" box-border">
      <div class="relative min-h-screen md:flex">
        <div class="bg-gray-800 text-gray-100 flex justify-between md:hidden">
          <a href="#" class="block p-4 text-white font-bold">Contact Book</a>
          <button class="mobile-menu-button p-4 focus:outline-none focus:bg-gray-700">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
        <!-- sidebar -->
        <div class="sidebar bg-purple-950 text-purple-100 w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out fixed z-10">
          <!-- logo -->
          <a href="#" class="text-white flex items-center space-x-2 px-4">
            <span class="text-2xl font-extrabold"> <i class="fa fa-address-book text-white" style="font-size:24px"></i>   Contact Book</span>
          </a>
          <!-- nav -->
          <nav>
          <nav>
          <a href="http://localhost/public/homepage.php" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-purple-700 hover:text-white">
              <i class="fa fa-user" style="font-size:24px"></i>
              <?php echo $_SESSION['username']?>
            </a>
            <a href="http://localhost/public/add.php" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-purple-700 hover:text-white">
              <i class="fa fa-book"></i>Add
            </a>
            <a href="http://localhost/public/search.php" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-purple-700 hover:text-white">
              <i class="fa fa-book"></i> Bulk-Delete
            </a>
            <a href="" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-purple-700 hover:text-white">
              <i class="fa fa-calendar"></i> <?php echo $_date = date("Y/m/d") ?>
            </a>
            <a href="logout.php" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-purple-700 hover:text-white">
              <i class="fa fa-sign-out" style="font-size:24px"></i>Logout
             </a>
          </nav>
        </div>
            <!--Content-->
   <div class="flex-1">
    <h1 class="bg-purple-100 p-8"><input class="bg-purple-400 text-black p-2 hover:bg-purple-700 rounded hover:text-white"  type="submit" name="add" id="add-user" value="Add user" data-toggle="modal" onclick="myFunction()"></h1>
    <!--modal--> 
    <div class="bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center modal" id="overlay"  >
        <form action="db-config/actions.php" method="post">
          <div class="pt-8 px-20 pb-8 bg-gray-200 rounded-md">
                          <h2 class="text-center text-4xl text-indigo-900 font-display font-bold lg:text-left xl:text-5xl
                          xl:text-bold">Add user</h2>
                          <p class="text-red-400" id="message"></p>
                          <div class="mt-12">
                                  <div>
                                      <div class="text-sm font-bold text-gray-700 tracking-wide">Name</div>
                                      <input class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="text" name="Name" placeholder="Your Name" id="name">
                                  </div>

                                  <div class="text-sm font-bold text-gray-700 tracking-wide mt-4">Address</div>
                                  <input class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="text" name="Address" placeholder="Your Address" id="address">
                              </div>

                                  <div class="mt-8">
                                      <div class="flex justify-between items-center">
                                          <div class="text-sm font-bold text-gray-700 tracking-wide">
                                             Phone Number
                                          </div>
                                      </div>
                                      <input class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="number" name="pnumber" placeholder="Phone Number" id="number">
                                  </div>
      
                                  <div class="mt-8">
                                      <div class="flex justify-between items-center">
                                          <div class="text-sm font-bold text-gray-700 tracking-wide">
                                             Email
                                          </div>
                                      </div>
                                      <input class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="email" name="email" placeholder="Example@example.com" id="email" required>
                                  </div>
      
                                  <div class="mt-10">
                                      <input type="submit" name="Add" value="Add" class="text-center bg-indigo-500 text-gray-100 p-4 w-full rounded-full tracking-wide
                                      font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-indigo-600
                                      shadow-lg" id="add-btn">
                                  </div>
                                  </form>
                                  <div class="mt-10">
                                      <input type="submit" name="close" value="close" class="text-center bg-red-500 text-gray-100 p-4 w-full rounded-full tracking-wide
                                      font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-red-600
                                      shadow-lg" id="close">
                                  </div>
                          </div>  
           
          </div>
          <div>
          <h1 class="text-gray-600 text-2xl mt-8 mb-8">All Profiles</h1>
          <p></p>
          <?php
                $query = "SELECT Id, Name, Address, Phone_Number, Email FROM persons";
                $query_run = mysqli_query($con, $query);
            ?>
          <table class="content-table mx-auto border-none" id="dataTable" width="100%" gap="1">
                    <thead>
                        <tr>
                        <th>ID</th>
                            <th>Name </th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                            <td><?php  echo $row['Id']; ?></td>
                            <td><?php  echo $row['Name']; ?></td>
                                <td><?php  echo $row['Address']; ?></td>
                                <td><?php  echo $row['Phone_Number']; ?></td>
                                <td><?php  echo $row['Email']; ?></td>
                                <td>
                                    <form action="add-edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['Id']; ?>">
                                        <button type="submit" name="update_btn" class="bg-green-600 p-1 text-white rounded hover:bg-green-400 hover:text-black"> Update</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="db-config/actions.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['Id']; ?>">
                                        <button type="submit" name="delete_btn" class="bg-red-600 p-1 text-white rounded hover:gb-red-200 hover:text-black" id="delete-confm" onclick="myfunction()"> DELETE</button>
                                    </form>
                                </td>
                            </tr>
                            <script language="javascript">
                        function myfunction(delid){
                          if(confirm("DO you want to delete?")){
                            window.location.href='delete.php?del_id=' + delid+'';
                          }
                        }
                        </script>
                     <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
               
                        ?>
                    </tbody>
                </table>
                </div>
                </div>
      
          </div>



        <script src="" async defer>


        </script>
    </body>
</html>