<!DOCTYPE html>
<?php
include ('php/login.php');
 ?>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quest up</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- CSS Bootstrap -->
      <link rel="stylesheet" href="css/bootstrap.css">
      <!-- CSS Our-->
      <link rel="stylesheet" href="css/design.css">
      <!-- CSS animations-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- jQuery and theamJQuery comented-->
    <!--link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /-->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <!-- Animation JS-->
    <script src="js/anime/anime.js"></script>
    <script src="js/anime/anime.min.js"></script>

</head>

<body style="background-color:#6443b6">
	<div class="container">
		<div class="row">
			<div class="container col-xs-12 col-sm-6 col-sm-offset-3">

        <h1 id="lineDrawing"> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 381.11 115.07">
          <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-width="1" class="lines">
            <path fill="none" stroke="#E64C3C" stroke-width="4" stroke-miterlimit="10" d="M47.707,28.746v56.279H36.308v-5.29
            c-2.508,4.277-6.231,6.866-11.323,6.866c-9.955,0-18.162-12.944-18.162-29.715c0-16.771,8.207-29.715,18.162-29.715
            c5.091,0,8.815,2.589,11.323,6.866v-5.29H47.707z M36.308,56.885c0-8.442-3.799-13.732-9.043-13.732s-9.043,5.29-9.043,13.732
            c0,8.442,3.799,13.732,9.043,13.732S36.308,65.328,36.308,56.885z"/>
            <path fill="none" stroke="#ECF0F1" stroke-width="4" stroke-miterlimit="10" d="M95.045,56.885
            c0,16.771-8.208,29.715-18.162,29.715c-5.092,0-8.815-2.588-11.323-6.866v27.802H54.162V28.746h11.399v5.29
            c2.508-4.277,6.231-6.866,11.323-6.866C86.838,27.17,95.045,40.114,95.045,56.885z M83.646,56.885
            c0-8.442-3.799-13.732-9.042-13.732s-9.042,5.29-9.042,13.732c0,8.442,3.799,13.732,9.042,13.732S83.646,65.328,83.646,56.885z"/>
            <path fill="none" stroke="#ECF0F1" stroke-width="4" stroke-miterlimit="10" d="M140.483,56.885
            c0,16.771-8.207,29.715-18.162,29.715c-5.091,0-8.815-2.588-11.323-6.866v27.802H99.599V28.746h11.399v5.29
            c2.508-4.277,6.232-6.866,11.323-6.866C132.276,27.17,140.483,40.114,140.483,56.885z M129.084,56.885
            c0-8.442-3.799-13.732-9.042-13.732s-9.043,5.29-9.043,13.732c0,8.442,3.8,13.732,9.043,13.732S129.084,65.328,129.084,56.885z"/>
            <path fill="none" stroke="#F0C419" stroke-width="4" stroke-miterlimit="10" d="M167.835,27.62v19.135
            c-4.711-1.126-11.398,1.688-11.398,12.832v25.438h-11.399V28.746h11.399v10.018C157.957,31.222,163.048,27.62,167.835,27.62z"/>
            <path fill="none" stroke="#ECF0F1" stroke-width="4" stroke-miterlimit="10" d="M189.416,71.518c3.116,0,5.775-1.801,7.294-4.277
            l9.118,7.767c-3.722,7.654-9.347,11.593-16.564,11.593c-12.995,0-21.05-12.944-21.05-29.715c0-16.771,8.207-29.715,20.213-29.715
            c11.094,0,19.302,12.719,19.302,29.715c0,2.364-0.152,4.615-0.456,6.754h-26.978C181.74,69.492,185.235,71.518,189.416,71.518z
            M196.406,51.033c-1.215-6.529-4.635-8.893-8.055-8.893c-4.331,0-7.218,3.152-8.283,8.893H196.406z"/>
            <path fill="none" stroke="#ECF0F1" stroke-width="4" stroke-miterlimit="10" d="M248.762,50.469v34.556h-11.399V52.946
            c0-6.979-2.964-10.243-6.612-10.243c-4.178,0-7.066,3.602-7.066,11.593v30.729h-11.399V28.746h11.399v5.29
            c2.053-4.165,5.853-6.866,10.866-6.866C242.226,27.17,248.762,35.274,248.762,50.469z"/>
            <path fill="none" stroke="#4FBA6F" stroke-width="4" stroke-miterlimit="10" d="M269.121,44.954v19.923
            c0,4.84,2.812,5.29,7.828,4.84v15.308c-14.894,2.251-19.226-4.39-19.226-20.148V44.954h-6.081V28.746h6.081V18.053l11.397-5.065
            v15.758h7.828v16.208H269.121z"/>
            <path fill="none" stroke="#ECF0F1" stroke-width="4" stroke-miterlimit="10" d="M280.366,13.663c0-5.516,3.116-10.13,6.84-10.13
            s6.839,4.615,6.839,10.13s-3.115,10.13-6.839,10.13S280.366,19.179,280.366,13.663z M281.504,28.746h11.401v56.279h-11.401V28.746z
            "/>
            <path fill="none" stroke="#ECF0F1" stroke-width="4" stroke-miterlimit="10" d="M297.464,56.885
            c0-16.771,8.587-29.715,20.135-29.715c7.373,0,13.907,5.74,17.176,14.408l-9.955,8.555c-1.29-3.94-4.029-6.304-7.371-6.304
            c-4.939,0-8.587,5.291-8.587,13.057c0,7.767,3.647,13.057,8.587,13.057c3.342,0,6.155-2.363,7.371-6.303l9.955,8.441
            c-3.269,8.78-9.727,14.52-17.176,14.52C306.051,86.601,297.464,73.657,297.464,56.885z"/>
            <path fill="none" stroke="#3B97D3" stroke-width="4" stroke-miterlimit="10" d="M355.974,71.518c3.116,0,5.774-1.801,7.293-4.277
            l9.119,7.767c-3.722,7.654-9.348,11.593-16.564,11.593c-12.994,0-21.051-12.944-21.051-29.715c0-16.771,8.209-29.715,20.215-29.715
            c11.093,0,19.302,12.719,19.302,29.715c0,2.364-0.152,4.615-0.457,6.754h-26.977C348.298,69.492,351.793,71.518,355.974,71.518z
            M362.964,51.033c-1.216-6.529-4.635-8.893-8.055-8.893c-4.332,0-7.221,3.152-8.284,8.893H362.964z"/>
          </g>
        </svg>
      </h1>

				<div id="login" class="option animated  bounceInUp" style="background-color:white; text-align:center" >

          <h2> Log in </h2>
          <br>
          <form  method="post">
						<div class="form-group">

							<div class="input-group">
								<span class="input-group-addon"><i class="material-icons" style="font-size:1em;">email</i></span>
								<input placeholder="Enter your Email address" class="form-control" name="username" type="text"/>
							</div>
						</div>
						</br>
						<div class="form-group">

							<div class="input-group">
								<span class="input-group-addon"><i class="material-icons" style="font-size:1em;">lock</i></span>
								<input placeholder="Enter your Password" class="form-control" name="password" type="password"/>
							</div>
						</div>
						</br>
						<input class="btn btn-primary btn-lg btn-block shadow login-button" type="submit" value="Login" />
					</form><br>
				</div>
			</div>
		</div>
	</div>
      <script type="text/javascript">
        var lineDrawing = anime({
          targets: '#lineDrawing .lines path',
          strokeDashoffset: [anime.setDashoffset, 0],
          easing: 'easeInOutSine',
          duration: 1500,
          delay: function(el, i) { return i * 250 },
          direction: 'alternate',
          loop: false
        });
      </script>

    <!-- JS for Bootstrap -->
  <script src="js/bootstrap.js"></script>
</body>
</html>
