<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html prefix="og: https://ogp.me/ns#">
    <head>
        <title>Upload Your Files!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:image" content="https://cdn.sappy.ga/img/saplogo.png" />

		<meta property="og:description" content="Upload your images to the web." />

		<meta property="og:url"content="http://cdn.sappy.ga/" />

		<meta property="og:title" content="Sappy's CDN Upload " />
        <style>
            body {
                background-color: #404040;
                color: white;
                text-align: center;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
            .mainContent {
                padding: 170px 0px;
            }
            input[type=button],input[type=submit],input[type=reset] {
              background-color: #FF0000;
              border: none;
              color: white;
              padding: 16px 32px;
              text-decoration: none;
              margin: 4px 2px;
              cursor: pointer;
                
              transition: 250ms;
            }
            input[type=file] {
                display: none;
            }
            .uploadButton:hover {
              background-color: #333;
            }
            .uploadButton {
                background-color: #555;
                border: none;
                color: white;
                padding: 16px 32px;
                text-decoration: none;
                margin: 10px 2px;
                cursor: pointer;
                min-width: %100;
                    
                transition: 250ms;
            }
            .inputButton:hover {
                background-color: brown;
            }
            .loginButton{
                padding: 5px 10px;
                background-color: #007bff;
                border-radius: 2px;
                color: white;
                text-decoration: none;
                transition: 500ms;
            }
            .loginButton:hover{
                background-color: #0069d9;
            }
        </style>
    </head>
    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
       	<div class="mainContent">
            <h1>Sappy's Premium CDN Document Upload</h1>
	    <h2>Allowed Formats: pdf, docx, doc</h2>
	    <br><br>
            <form action="pupload.php" method="post" enctype="multipart/form-data">
                <label for="fileToUpload" class="uploadButton">Select Your PDF To Upload!</label>
                <input type="file" name="fileToUpload" id="fileToUpload"><br><br>File Name:<br><br>
                <img id="blah" src="#" alt="" style="max-width: 200px; max-height: 200px;"/>
                <br><br>
                <input class="inputButton" type="submit" value="Upload PDF" name="submit">
            </form>
       </div>
        <script>function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#fileToUpload").change(function() {
  readURL(this);
});</script>
    </body>
</html>