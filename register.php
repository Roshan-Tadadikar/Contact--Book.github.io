<!DOCTYPE html>
<?php
require_once('C:\xampp\htdocs\public\db-config\config.php');
ob_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
</head>
        <body class=" body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
            <div >
        <svg id="ed709b15-984e-4c6b-b13e-799af1de279c" class="float-right" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="729.65135" height="748.85377" viewBox="0 0 829.65135 548.85377"><polygon points="609.397 522.909 591.573 522.909 591.573 349.531 632.082 348.721 609.397 522.909" fill="#ffb8b8"/><polygon points="695.276 522.909 713.1 522.909 713.1 349.531 672.591 348.721 695.276 522.909" fill="#ffb8b8"/><path d="M786.20753,722.59773l-37.92441-.34756a12.32726,12.32726,0,0,1-15.28541-11.96706v0a12.32725,12.32725,0,0,1,6.98373-11.10891l8.65094-4.16122,28.11492-19.21538,20.25445,5.67124,3.87928,17.45677A19.93089,19.93089,0,0,1,786.20753,722.59773Z" transform="translate(-185.17433 -175.57311)" fill="#2f2e41"/><path d="M888.28991,722.38279l-37.92441-.34756a12.32726,12.32726,0,0,1-15.28541-11.96706v0a12.32728,12.32728,0,0,1,6.98373-11.10892l8.65094-4.16121,28.11493-19.21539,20.25444,5.67125,3.87928,17.45677A19.9309,19.9309,0,0,1,888.28991,722.38279Z" transform="translate(-185.17433 -175.57311)" fill="#2f2e41"/><path d="M903.1164,553.521l-55.84164-4.98586-7.35222-65.4996-16.46518,63.373-56.4508-5.04025c2.08122-38.80639,6.55935-71.177,17.01373-87.49918l118.28593-21.06462Z" transform="translate(-185.17433 -175.57311)" fill="#2f2e41"/><circle cx="661.50714" cy="44.43856" r="30.17247" fill="#ffb8b8"/><path d="M870.70929,282.92165l-52.66154-6.48142c6.69979-14.26707,9.71936-27.58928,4.86106-38.88853h40.50888C857.155,248.72733,862.75547,265.29021,870.70929,282.92165Z" transform="translate(-185.17433 -175.57311)" fill="#ffb8b8"/><path d="M902.30622,434.42486C865.25088,461.59539,824.81,470.8654,780.77958,461.16073c26.71529-60.99181,22.90017-121.10524,0-180.66961l42.12923-17.82391c11.81285,11.52291,25.36038,11.77355,40.50888,1.62035l41.31906,8.912C897.17892,332.62125,894.64514,387.81381,902.30622,434.42486Z" transform="translate(-185.17433 -175.57311)" fill="#3f3d56"/><path d="M824.42185,193.67369l-5.095-2.03974S829.98,179.90553,844.8018,180.92541l-4.16871-4.58946s10.19-4.07942,19.45353,6.62912c4.8697,5.62926,10.50394,12.24615,14.01633,19.7h5.45636l-2.27731,5.01433,7.97049,5.01432-8.18095-.90071a27.74665,27.74665,0,0,1-.77378,12.98655l.21927,3.96332s-9.48288-14.67194-9.48288-16.71167v5.09933s-5.095-4.58937-5.095-7.649l-2.77909,3.56953-1.38951-5.60928-17.1376,5.60928,2.779-4.58937-10.65308,1.52983,4.16871-5.60929s-12.04264,6.62913-12.5059,12.23842-6.48443,12.74829-6.48443,12.74829l-2.779-5.09933S810.98975,201.32266,824.42185,193.67369Z" transform="translate(-185.17433 -175.57311)" fill="#2f2e41"/><path d="M909.695,498.57311h-183a7.00818,7.00818,0,0,1-7-7v-28a7.00818,7.00818,0,0,1,7-7h183a7.00849,7.00849,0,0,1,7,7v28A7.00848,7.00848,0,0,1,909.695,498.57311Z" transform="translate(-185.17433 -175.57311)" fill="#6c63ff"/><path id="e6024a0c-b89c-4e07-9a96-496d93fbcaea" data-name="Path 40" d="M754.05455,471.62709a5.94683,5.94683,0,0,0,0,11.892H882.14028a5.94683,5.94683,0,0,0,.19525-11.892q-.09762-.00165-.19525,0Z" transform="translate(-185.17433 -175.57311)" fill="#fff"/><path d="M799.41366,449.81824l9.30188,16.58162a14.72369,14.72369,0,0,1-9.12458,21.45048h0a14.7237,14.7237,0,0,1-18.43755-14.53l.43638-22.69193c-6.98857-40.33626-12.66139-78.52713-11.34248-105.32309h32.4071L796.173,376.09208Z" transform="translate(-185.17433 -175.57311)" fill="#ffb8b8"/><path d="M906.35711,453.86913l-6.81339,11.35565a13.12027,13.12027,0,0,1-21.86138.96664v0a13.12027,13.12027,0,0,1,2.98483-18.39338l11.91693-8.51209,17.01373-70.48545-10.53231-29.1664L928.2319,334.773C941.9262,366.42278,928.13221,408.61539,906.35711,453.86913Z" transform="translate(-185.17433 -175.57311)" fill="#ffb8b8"/><path d="M809.946,351.78675l-42.93941-2.43054,2.95-46.0097a29.01218,29.01218,0,0,1,21.58069-28.70543l5.44591-1.44156Z" transform="translate(-185.17433 -175.57311)" fill="#3f3d56"/><path d="M931.47261,337.20355l-39.6987,9.72213V270.769l1.63817-.10568a27.25692,27.25692,0,0,1,28.40675,21.48925Z" transform="translate(-185.17433 -175.57311)" fill="#3f3d56"/><rect x="223.55555" y="546.85377" width="606.0958" height="2" fill="#e6e6e6"/><path d="M211.81176,663.40936a215.89074,215.89074,0,0,0,10.08483,59.67913c.14051.44835.28775.89.43495,1.3384h37.63577c-.04015-.40155-.08034-.8499-.12049-1.3384-2.5095-28.84918-16.97757-204.43348.32124-234.46046C258.65566,491.06393,208.89407,571.74251,211.81176,663.40936Z" transform="translate(-185.17433 -175.57311)" fill="#e6e6e6"/><path d="M214.63576,723.08849c.31455.44835.64245.8967.977,1.3384H243.8463c-.21415-.38145-.46175-.8298-.7495-1.3384-4.66434-8.41853-18.46987-33.58708-31.285-59.67913-13.77212-28.03944-26.40659-57.14288-25.34255-67.67606C186.14131,598.109,176.61193,670.5296,214.63576,723.08849Z" transform="translate(-185.17433 -175.57311)" fill="#e6e6e6"/><path d="M567.0571,399.892h-307a7.00818,7.00818,0,0,1-7-7v-171a7.00818,7.00818,0,0,1,7-7h307a7.00849,7.00849,0,0,1,7,7v171A7.00848,7.00848,0,0,1,567.0571,399.892Z" transform="translate(-185.17433 -175.57311)" fill="#6c63ff"/><path d="M570.85508,724.42689H255.85459a5.00589,5.00589,0,0,1-5-5V219.4513a5.00588,5.00588,0,0,1,5-5H570.85508a5.00589,5.00589,0,0,1,5,5V719.42689A5.00589,5.00589,0,0,1,570.85508,724.42689ZM255.85459,216.4513a3.00328,3.00328,0,0,0-3,3V719.42689a3.00328,3.00328,0,0,0,3,3H570.85508a3.00328,3.00328,0,0,0,3-3V219.4513a3.00328,3.00328,0,0,0-3-3Z" transform="translate(-185.17433 -175.57311)" fill="#e6e6e6"/><circle cx="107.88278" cy="306.31893" r="11" fill="#e6e6e6"/><path d="M525.0571,502.892h-183a7.00818,7.00818,0,0,1-7-7v-28a7.00818,7.00818,0,0,1,7-7h183a7.00849,7.00849,0,0,1,7,7v28A7.00848,7.00848,0,0,1,525.0571,502.892Z" transform="translate(-185.17433 -175.57311)" fill="#e6e6e6"/><path d="M532.0571,503.892h-197a1,1,0,0,1,0-2h197a1,1,0,0,1,0,2Z" transform="translate(-185.17433 -175.57311)" fill="#3f3d56"/><circle cx="107.88278" cy="372.31893" r="11" fill="#e6e6e6"/><path d="M525.0571,568.892h-183a7.00818,7.00818,0,0,1-7-7v-28a7.00818,7.00818,0,0,1,7-7h183a7.00849,7.00849,0,0,1,7,7v28A7.00848,7.00848,0,0,1,525.0571,568.892Z" transform="translate(-185.17433 -175.57311)" fill="#e6e6e6"/><path d="M532.0571,569.892h-197a1,1,0,0,1,0-2h197a1,1,0,0,1,0,2Z" transform="translate(-185.17433 -175.57311)" fill="#3f3d56"/><circle cx="107.88278" cy="438.31893" r="11" fill="#e6e6e6"/><path d="M418.0571,634.892h-76a7.00818,7.00818,0,0,1-7-7v-28a7.00818,7.00818,0,0,1,7-7h76a7.00849,7.00849,0,0,1,7,7v28A7.00848,7.00848,0,0,1,418.0571,634.892Z" transform="translate(-185.17433 -175.57311)" fill="#e6e6e6"/><path d="M425.0571,635.892h-90a1,1,0,0,1,0-2h90a1,1,0,0,1,0,2Z" transform="translate(-185.17433 -175.57311)" fill="#3f3d56"/><path d="M525.0571,634.892h-76a7.00818,7.00818,0,0,1-7-7v-28a7.00818,7.00818,0,0,1,7-7h76a7.00849,7.00849,0,0,1,7,7v28A7.00848,7.00848,0,0,1,525.0571,634.892Z" transform="translate(-185.17433 -175.57311)" fill="#e6e6e6"/><path d="M532.0571,635.892h-90a1,1,0,0,1,0-2h90a1,1,0,0,1,0,2Z" transform="translate(-185.17433 -175.57311)" fill="#3f3d56"/><path id="aa22f97a-b0c4-48a0-9697-8e710bb4cd75" data-name="Path 40" d="M293.41662,268.446a5.94683,5.94683,0,0,0,0,11.89205H533.50234a5.94683,5.94683,0,1,0,.19525-11.89205q-.09762-.00165-.19525,0Z" transform="translate(-185.17433 -175.57311)" fill="#fff"/><path id="a17c1cae-a14a-457b-86dc-2629628de1d6" data-name="Path 40" d="M293.41662,301.446a5.94683,5.94683,0,0,0,0,11.89205H533.50234a5.94683,5.94683,0,0,0,.19525-11.89205q-.09762-.00165-.19525,0Z" transform="translate(-185.17433 -175.57311)" fill="#fff"/><path id="b5ca973b-c484-402e-90b9-a33cbeee2455" data-name="Path 40" d="M293.41662,334.446a5.94683,5.94683,0,0,0,0,11.89205H533.50234a5.94683,5.94683,0,0,0,.19525-11.89205q-.09762-.00165-.19525,0Z" transform="translate(-185.17433 -175.57311)" fill="#fff"/><path d="M522.85434,684.18928l-2.51654-2.5166a.5845.5845,0,0,0-.41351-.17126H518.6998a.58471.58471,0,0,0-.41333.99829l1.39307,1.39233H508.5571a1,1,0,0,0,0,2h11.12244l-1.25092,1.25024a.66793.66793,0,0,0,.47217,1.14039h.989a.6676.6676,0,0,0,.47235-.19568l2.49218-2.49219A.99384.99384,0,0,0,522.85434,684.18928Z" transform="translate(-185.17433 -175.57311)" fill="#6c63ff"/><path d="M516.05735,700.89245a16,16,0,1,1,16-16A16.01833,16.01833,0,0,1,516.05735,700.89245Zm0-30a14,14,0,1,0,14,14A14.01572,14.01572,0,0,0,516.05735,670.89245Z" transform="translate(-185.17433 -175.57311)" fill="#3f3d56"/></svg>
          </div>
              <form action="register.php" method="post">
              <div class="mt-10 px-12 sm:px-24 md:px-48 lg:px-12 lg:mt-16 xl:px-24 xl:max-w-2xl ">
                              <h2 class="text-center text-4xl text-indigo-900 font-display font-semibold lg:text-left xl:text-5xl
                              xl:text-bold">Register</h2>
                              <div class="mt-12">
                                      <div>
                                          <div class="text-sm font-bold text-gray-700 tracking-wide">Email</div>
                                          <input class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="email" name="email" placeholder="Example@example.com" required>
                                      </div>

                                      <div class="text-sm font-bold text-gray-700 tracking-wide mt-4">Username</div>
                                      <input class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="text" name="username" placeholder="username" required>
                                  </div>

                                      <div class="mt-8">
                                          <div class="flex justify-between items-center">
                                              <div class="text-sm font-bold text-gray-700 tracking-wide">
                                                  Password
                                              </div>
                                          </div>
                                          <input class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="password" name="password" placeholder="Enter your password" required>
                                      </div>
          
                                      <div class="mt-8">
                                          <div class="flex justify-between items-center">
                                              <div class="text-sm font-bold text-gray-700 tracking-wide">
                                                 Confirm Password
                                              </div>
                                          </div>
                                          <input class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="password" name="cpassword" placeholder="Repeat your password" required>
                                      </div>
          
                                      <div class="mt-10">
                                          <input type="submit" name="Register" value="Register" class="text-center bg-indigo-500 text-gray-100 p-4 w-full rounded-full tracking-wide
                                          font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-indigo-600
                                          shadow-lg">
                                      </div>
          
                                      <div class="mt-10">
                                          <a href="http://localhost/dist/loginpage.php"><input type="submit" name="back" value="Back" class="text-center bg-purple-500 text-gray-100 p-4 w-full rounded-full tracking-wide
                                          font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-purple-600
                                          shadow-lg"></a>
                                      </div>
                                  
                              </div>
                          </div>
                      </div>
                </form>
                <?php

if(isset($_POST['Register']))
{
    @$email = $_POST['email'];
    @$username = $_POST['username'];
    @$password = $_POST['password'];
    @$cpassword = $_POST['cpassword'];

if($password==$cpassword)
{

  $query = "select * from user WHERE username='$username'";
  $query_run = mysqli_query($con,$query);


  if($query_run)
          {
              if(mysqli_num_rows($query_run)>0)
              {
                  echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
              }
              else
              {
                  $query = "insert into user values('$email','$username','$password')";
                  $query_run = mysqli_query($con,$query);
                  if($query_run)
                  {
                      echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
                      $_SESSION['email'] = $email;
                      $_SESSION['username'] = $username;
                      $_SESSION['password'] = $password;
                      header( "Location: loginpage.php");
                  }
                  else
                  {
                      echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
                  }
              }
          }
          else
          {
              echo '<script type="text/javascript">alert("DB error")</script>';
          }
      }
      else
      {
          echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
      }
      
  }
  else
  {
  }
?>

                
              <script src="" async defer></script>
        <script src="" async defer></script>
    </body>
</html>