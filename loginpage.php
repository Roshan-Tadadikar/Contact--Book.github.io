<!DOCTYPE html>
<?php
session_start();
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
<style>
    @font-face {
  font-family: 'Product Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans'), local('OpenSans'), url(https://fonts.gstatic.com/s/productsans/v5/HYvgU2fE2nRJvZ5JFAumwegdm0LZdjqr5-oayXSOefg.woff2) format('woff2');
}

body{
    font-family: 'Product Sans';
}
</style>
        <body class=" body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0">
            <form action="loginpage.php" method="post" class="flex flex-col justify-center items-center w-1/2" >
                <div>
                    <svg class="absolute right-0" sxmlns="http://www.w3.org/2000/svg" width="733.82" height="503.768" viewBox="0 0 733.82 503.768">
                        <g id="Group_16" data-name="Group 16" transform="translate(-196.555 -165.086)">
                          <path id="Path_204" data-name="Path 204" d="M261.846,378.459a45.126,45.126,0,1,1,0-90.252H672.56a45.126,45.126,0,1,1,0,90.252Z" transform="translate(-20.165 -123.12)" fill="#e6e6e6"/>
                          <path id="Path_205" data-name="Path 205" d="M264.96,297.207a39.24,39.24,0,0,0,0,78.48H675.674a39.24,39.24,0,1,0,0-78.48Z" transform="translate(-23.279 -126.234)" fill="#fff"/>
                          <rect id="Rectangle_15" data-name="Rectangle 15" width="1.308" height="78.48" transform="translate(364.961 170.972)" fill="#e6e6e6"/>
                          <rect id="Rectangle_17" data-name="Rectangle 17" width="1.308" height="78.48" transform="translate(527.808 170.972)" fill="#e6e6e6"/>
                          <rect id="Rectangle_7" data-name="Rectangle 7" width="161.539" height="78.48" transform="translate(366.269 170.972)" fill="#00bfa6"/>
                          <path id="Path_198" data-name="Path 198" d="M276.268,206.815a24,24,0,1,0,24,24,24,24,0,0,0-24-24Zm0,7.2a7.2,7.2,0,1,1-7.2,7.2A7.2,7.2,0,0,1,276.268,214.016Zm0,34.662a17.484,17.484,0,0,1-14.4-7.685c.115-4.8,9.6-7.442,14.4-7.442s14.285,2.642,14.4,7.442a17.513,17.513,0,0,1-14.4,7.685Z" transform="translate(170.844 -20.53)" fill="#fff"/>
                          <path id="Path_200" data-name="Path 200" d="M620.7,206.815a24,24,0,1,0,24,24,24,24,0,0,0-24-24Zm0,7.2a7.2,7.2,0,1,1-7.2,7.2A7.2,7.2,0,0,1,620.7,214.015Zm0,34.662a17.484,17.484,0,0,1-14.4-7.685c.115-4.8,9.6-7.442,14.4-7.442s14.285,2.642,14.4,7.442a17.513,17.513,0,0,1-14.4,7.685Z" transform="translate(-336.439 -20.53)" fill="#e6e6e6"/>
                          <path id="Path_242" data-name="Path 242" d="M620.7,206.815a24,24,0,1,0,24,24,24,24,0,0,0-24-24Zm0,7.2a7.2,7.2,0,1,1-7.2,7.2A7.2,7.2,0,0,1,620.7,214.015Zm0,34.662a17.484,17.484,0,0,1-14.4-7.685c.115-4.8,9.6-7.442,14.4-7.442s14.285,2.642,14.4,7.442a17.513,17.513,0,0,1-14.4,7.685Z" transform="translate(-10.892 -20.53)" fill="#e6e6e6"/>
                          <rect id="Rectangle_9" data-name="Rectangle 9" width="56" height="56" rx="6" transform="translate(419.112 288.229)" fill="#00bfa6"/>
                          <ellipse id="Ellipse_29" data-name="Ellipse 29" cx="134.439" cy="18" rx="134.439" ry="18" transform="translate(661.497 632.854)" fill="#e6e6e6"/>
                          <rect id="Rectangle_12" data-name="Rectangle 12" width="56" height="56" rx="6" transform="translate(581.812 288.049)" fill="#e6e6e6"/>
                          <rect id="Rectangle_13" data-name="Rectangle 13" width="40.798" height="40.798" transform="translate(589.812 295.83)" fill="#fff"/>
                          <path id="Path_202" data-name="Path 202" d="M253.345,218.766l-7.075-9.1,4.114-3.2,3.35,4.307,11.318-11.946,3.785,3.585Z" transform="translate(191.14 106.158)" fill="#fff"/>
                          <path id="Path_203" data-name="Path 203" d="M425.345,218.766l-7.075-9.1,4.114-3.2,3.35,4.307,11.317-11.946,3.785,3.585Z" transform="translate(182.106 106.158)" fill="#e6e6e6"/>
                          <rect id="Rectangle_18" data-name="Rectangle 18" width="56" height="56" rx="6" transform="translate(256.265 288.049)" fill="#e6e6e6"/>
                          <rect id="Rectangle_19" data-name="Rectangle 19" width="40.798" height="40.798" transform="translate(264.265 295.83)" fill="#fff"/>
                          <path id="Path_243" data-name="Path 243" d="M425.345,218.766l-7.075-9.1,4.114-3.2,3.35,4.307,11.317-11.946,3.785,3.585Z" transform="translate(-143.441 106.158)" fill="#e6e6e6"/>
                          <g id="Group_15" data-name="Group 15">
                            <path id="Path_257" data-name="Path 257" d="M340.66,397.363H327.48l-6.268-50.837,19.452,0Z" transform="translate(545.904 239.259)" fill="#ffb8b8"/>
                            <path id="Path_258" data-name="Path 258" d="M320.6,387.355h25.418v16H304.6a16,16,0,0,1,16-16Z" transform="translate(543.364 245.5)" fill="#2f2e41"/>
                            <path id="Path_259" data-name="Path 259" d="M223.865,397.363h-13.18l-6.268-50.837,19.452,0Z" transform="translate(528.049 239.259)" fill="#ffb8b8"/>
                            <path id="Path_260" data-name="Path 260" d="M203.81,387.355h25.418v16H187.806a16,16,0,0,1,16-16Z" transform="translate(525.51 245.5)" fill="#2f2e41"/>
                            <path id="Path_261" data-name="Path 261" d="M487.471,249.585V243.82a37.18,37.18,0,0,1,37.18-37.18h0a37.18,37.18,0,0,1,37.18,37.18v5.764a26.8,26.8,0,0,1-26.8,26.8H514.275a26.8,26.8,0,0,1-26.8-26.8Z" transform="translate(308.465 9.946)" fill="#2f2e41"/>
                            <ellipse id="Ellipse_36" data-name="Ellipse 36" cx="28.316" cy="28.316" rx="28.316" ry="28.316" transform="translate(804.801 231.687)" fill="#ffb8b8"/>
                            <path id="Path_263" data-name="Path 263" d="M386.583,329.1a10.811,10.811,0,0,1,16.463,1.934l24.273-4.591,6.388,14.07-34.37,6A10.869,10.869,0,0,1,386.583,329.1Z" transform="translate(292.514 28.216)" fill="#ffb8b8"/>
                            <path id="Path_264" data-name="Path 264" d="M515.087,284.516l.317.481-39.8,26.221-67.164,21.447a4.044,4.044,0,0,0-2.781,4.31l1.465,12.62a4.036,4.036,0,0,0,4.854,3.48l63.212-13.549a22.833,22.833,0,0,0,8.5-3.742L528.4,303.969A11.5,11.5,0,0,0,515.4,285Z" transform="translate(295.954 21.634)" fill="#ccc"/>
                            <path id="Path_265" data-name="Path 265" d="M574.076,590.876a5.209,5.209,0,0,1-4.771-3.115l-60.421-149.3a1.729,1.729,0,0,0-3.238.182L456.351,583.993a5.189,5.189,0,0,1-6.781,3.333l-16.53-6.2a5.175,5.175,0,0,1-3.34-4.271c-7.437-64.782,57.413-228.3,58.069-229.946l.182-.455,59.116,13.077.123.134c23.585,25.73,42.971,188.012,46.618,220.283a5.163,5.163,0,0,1-3.425,5.472l-14.591,5.16a5.139,5.139,0,0,1-1.716.295Z" transform="translate(299.543 31.32)" fill="#2f2e41"/>
                            <path id="Path_266" data-name="Path 266" d="M515.547,375.9c-14.323,0-30.291-2.856-35.206-14.642l-.113-.271.153-.251c3.88-6.366,9.007-17.224,6.251-19.263-5.429-4.014-8.064-10.618-7.83-19.628.508-19.559,13.835-36.925,33.163-43.212h0a147.146,147.146,0,0,1,16.443-4.234,27.993,27.993,0,0,1,23.21,5.732,28.276,28.276,0,0,1,10.486,21.755c.2,20.9-3.015,50.015-19.5,70a5.128,5.128,0,0,1-3.036,1.765A140.9,140.9,0,0,1,515.547,375.9Z" transform="translate(307.138 20.219)" fill="#ccc"/>
                            <path id="Path_267" data-name="Path 267" d="M506.106,364.845a11.017,11.017,0,0,1,13.464-7.683,10.843,10.843,0,0,1,1.669.618l18.43-16.773,12.818,8.635L526.13,372.966a11,11,0,0,1-12.466,5.288,10.83,10.83,0,0,1-7.558-13.409Z" transform="translate(311.251 30.487)" fill="#ffb8b8"/>
                            <path id="Path_268" data-name="Path 268" d="M534.283,373.874A5.174,5.174,0,0,1,531,372.7l-7.268-5.939a5.188,5.188,0,0,1,.126-8.134l30.484-23.38a1.733,1.733,0,0,0,.327-2.415l-18.815-24.875a15.316,15.316,0,0,1,1.023-19.731h0a15.273,15.273,0,0,1,20.622-1.649l.119.126,19.647,28.133a17.515,17.515,0,0,1-.415,27.883l-39.481,30.134a5.2,5.2,0,0,1-3.088,1.017Z" transform="translate(313.718 21.67)" fill="#ccc"/>
                            <path id="Path_269" data-name="Path 269" d="M497.965,240.705V226.656L523.047,215.7l23.916,10.952v14.049a2.306,2.306,0,0,1-2.306,2.306H500.271a2.306,2.306,0,0,1-2.306-2.306Z" transform="translate(310.07 11.332)" fill="#2f2e41"/>
                            <circle id="Ellipse_30" data-name="Ellipse 30" cx="15.722" cy="15.722" r="15.722" transform="translate(838.852 199.377)" fill="#2f2e41"/>
                            <path id="Path_185" data-name="Path 185" d="M896.5,218.806a15.715,15.715,0,0,1,18.8-15.417,15.715,15.715,0,1,0-9.764,29.629,15.709,15.709,0,0,1-9.032-14.212Z" transform="translate(-56.438 -12.141)" fill="#2f2e41"/>
                          </g>
                        </g>
                      </svg>
                </div>
                <div>
                    <svg id="e59edb86-a3bc-4694-8aac-31e565ca5cfc" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="176" height="176" viewBox="0 0 676 676"><title>male_avatar</title><path d="M938,450a336.852,336.852,0,0,1-27.22,133.1L909.66,585.68A338.559,338.559,0,0,1,541.35,782.93q-3.045-.54-6.08-1.12a334.98111,334.98111,0,0,1-61.14-18.03q-4.815-1.935-9.56-4.01c-2.16-.94-4.32-1.91-6.46-2.91A338.41424,338.41424,0,0,1,262,450c0-186.67,151.33-338,338-338S938,263.33,938,450Z" transform="translate(-262 -112)" fill="#00bfa6"/><path d="M541.35,782.93q-3.045-.54-6.08-1.12c-1.32-38.31-5.85-116.94-21.30005-199.29C505.52,537.45,493.79,491.25,477.52,449.95a412.60387,412.60387,0,0,0-19.07-41.84c-16.44-31.05-36.38-57.19-60.56-74.9l3.56-4.86q30.165,22.11,54.22,62.08,7.215,11.97,13.86005,25.54,7.125,14.52,13.59,30.83,4.125,10.38,7.97,21.48,16.74,48.195,28.46,109.98,2.59506,13.65,4.94,27.97C536.6,680.2,540.25,748.59,541.35,782.93Z" transform="translate(-262 -112)" opacity="0.2"/><path d="M464.57,759.77c-2.16-.94-4.32-1.91-6.46-2.91-2.09-22.7-5.93-50.86-12.95-77.59A254.55666,254.55666,0,0,0,433.35,644.07c-8.01-18.75-18.38-34.69-31.79-44.52l3.56-4.85c14.04,10.28,24.87,26.53,33.24,45.54,9.43,21.42,15.72,46.35,19.91,70.17C461.38,728.1,463.34,745.19,464.57,759.77Z" transform="translate(-262 -112)" opacity="0.2"/><circle cx="102.26174" cy="190.98167" r="30.08857" opacity="0.2"/><circle cx="111.9514" cy="449.99083" r="30.08857" opacity="0.2"/><path d="M483.71449,353.52139c-6.38046,35.99732,7.70456,68.59225,7.70456,68.59225s24.42979-25.76825,30.81025-61.76557-7.70457-68.59225-7.70457-68.59225S490.09494,317.52407,483.71449,353.52139Z" transform="translate(-262 -112)" opacity="0.2"/><path d="M383.71766,438.97122c34.33494,12.555,68.83676,4.498,68.83676,4.498s-21.16612-28.41279-55.50106-40.96784-68.83675-4.498-68.83675-4.498S349.38272,426.41617,383.71766,438.97122Z" transform="translate(-262 -112)" opacity="0.2"/><path d="M377.89534,668.333c24.066,8.80008,48.28314,3.0594,48.28314,3.0594S411.37687,651.384,387.31086,642.5839s-48.28314-3.0594-48.28314-3.0594S353.82933,659.53292,377.89534,668.333Z" transform="translate(-262 -112)" opacity="0.2"/><circle cx="337.30608" cy="281.0788" r="131.77014" fill="#d0cde1"/><path d="M547.83337,493.96531s16.47127,78.23852,16.47127,86.47415,78.23852,45.296,78.23852,45.296L712.546,613.382,737.253,539.26129s-41.17817-61.76725-41.17817-86.47415Z" transform="translate(-262 -112)" fill="#d0cde1"/><path d="M910.78,583.1,909.66,585.68A338.559,338.559,0,0,1,541.35,782.93q-3.045-.54-6.08-1.12a334.98111,334.98111,0,0,1-61.14-18.03q-4.815-1.935-9.56-4.01c-2.16-.94-4.32-1.91-6.46-2.91a337.59273,337.59273,0,0,1-55.25-32.28l-15.62-45.31,8.78-6.69995,18.06-13.79,19.27-14.71,5.01-3.83,75.61-57.72,5.58-4.26,39.3-30,.01-.01s42.5,69.25,104.27,48.66,60.42-79.63,60.42-79.63Z" transform="translate(-262 -112)" fill="#2f2e41"/><path d="M485.03538,286.916s41.83653-90.64581,122.02321-69.72755,125.50958,52.29566,128.996,83.67306-1.74319,78.44348-1.74319,78.44348-8.716-64.498-64.498-50.55247-142.94147,3.48638-142.94147,3.48638L512.9264,457.74849s-15.6887-22.66145-33.12058-8.71594S429.25335,314.807,485.03538,286.916Z" transform="translate(-262 -112)" fill="#2f2e41"/><path d="M474.13,763.78q-4.815-1.935-9.56-4.01c-2.16-.94-4.32-1.91-6.46-2.91a338.835,338.835,0,0,1-87.59-58.7c9.19-12.52,16.72-18.89,16.72-18.89h61.77l9.26,31.14Z" transform="translate(-262 -112)" fill="#2f2e41"/><path d="M856.67,576.32l52.99,9.36A337.94434,337.94434,0,0,1,852.9,674.25Z" transform="translate(-262 -112)" fill="#2f2e41"/></svg>
                </div>
                <h2
                  class="my-8 font-display font-bold text-3xl text-gray-700 text-center">
                  Login 
                </h2>
                <div class="relative">
                  <i class="fa fa-user absolute text-primarycolor text-xl"></i>
                  <input name="email" type="email" placeholder="email" class="pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500  text-lg"/>
                </div>
                <div class="relative mt-8">
                    <i class="fa fa-user absolute text-primarycolor text-xl"></i>
                    <input name="username" type="text" placeholder="username" class="pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 text-lg"
                    />
                  </div>
                <div class="relative mt-8">
                  <i class="fa fa-lock absolute text-primarycolor text-xl"></i>
                  <input name="password"   type="password"   placeholder="password"   class="pl-8 border-b-2 font-display focus:outline-none focus:border-primarycolor transition-all duration-500 text-lg"
                  />
                </div>
                <input type="submit" name="Login" value="Login" class="bg-green-200 text-black py-3 px-20 bg-primarycolor rounded-full font-bold text-lg mt-4 transform hover:translate-y-1 transition-all duration-500 hover:bg-green-400">
                <a href="http://localhost/public/register.php"><input type="submit" name="Register" value="Regsiter" class="bg-black text-white py-3 px-20 bg-primarycolor rounded-full font-bold text-lg mt-4 transform hover:translate-y-1 transition-all duration-500 hover:bg-gray-400 hover:text-black"></a>
              </form>
              
              <?php
	if(isset($_POST['Login']))
			{
        @$email=$_POST['email'];
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				$query = "select * from user where email='$email' AND username='$username' AND password='$password'";
			
				$query_run = mysqli_query($con,$query);
		
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
          $_SESSION['email'] = $email;
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					header("Location: http://localhost/public/homepage.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
			else
			{
			}
		?>

              <script src="" async defer></script>
    </body>
</html>