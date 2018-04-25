<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once 'backend-search.php';
?>

<!--doctype html -->
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Parque!</title>
  <style type="text/css">
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
    </style>
</head>
<body>
    <div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search country..." />
        <div class="result"></div>
    </div>

              <script src="custom.js"></script>

              <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
              <script type="text/javascript">
            $(document).ready(function(){
                $('.search-box input[type="text"]').on("keyup input", function(){
                  // Get input value on change
                  var inputVal = $(this).val();
                  var resultDropdown = $(this).siblings(".result");
                  if (inputVal.length) {
                    $.get("backend-search.php", {term:inputVal}).done(function(data){
                      //display the returned data in browser
                      resultDropdown.html(data);
                    });
                  }else {
                    resultDropdown.empty();
                  }
                });

                $(document).on("click", ".result p", function(){
                  $(this).parent(".search-box").find('input[type="text"]').val($(this).text());
                  $(this).parent(".result").empty();
                });
              });

              </script>
              </body>
              </html>
