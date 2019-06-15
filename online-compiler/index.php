<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Online Compiler</title>
            <link rel="icon" type="image/png" href="imgs/logo.jpg">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" href="css/normalize.css">
            <link rel="stylesheet" href="css/main.css">
            <link rel="stylesheet" href="css/style.css">
            <script src="js/vendor/modernizr-2.8.3.min.js"></script>
            <script src="js/vendor/jquery-1.12.0.min.js"></script>
            
        </head>
        <body>
<div class="row log">
    <div class="col-sm-10">
        
        <div class="" style="color: #222222;"><h3 style="text-align:center;"><span class="btn-danger">Online Compiler</span></h3></div>
           <div class="row cspace">
             <div class="col-sm-10">
              <div class="form-group">
                <form id = "form" method="POST" action="compile.php" >
                    <label>Select Language </label>
                    <select class="form-control"name="language" style="margin-bottom: 10px;margin-top: 10px; ">
                      <option value="cpp">C++</option>
                        <!--<option value="c">C</option>-->
                        <option value="java">JAVA</option>
                    </select></br>
                    <label>Write Your Code here</label>
                    <textarea class="form-control"placeholder="// Enter your code here. (* The Class Name MUST Be code *)" name="code" rows="16" cols="80" ></textarea>
                    </br></br>
                    <label style="margin-bottom: 10px;margin-top: 10px; ">Input </label></br></br>
                    <textarea class="form-control" placeholder="// Enter your inputs here." name="input" rows="10" cols="80"></textarea>
                    </br>
                    </br><input class="btn btn-success"id = "st"type="submit" name="run" value="run code" style="font-size: 18px;">
                        <script type="text/javascript">
                          
                          $(document).ready(function(){
                        
                             $("#st").click(function(){
                          
                                   $("#div").html(" Loading ......");
                        
                        
                             });
                        
                          });
                        
                        
                        </script>
                </br></br>
                <label style="margin-bottom: 10px;margin-top: 10px; ">Output </label></br></br>
                <textarea class="form-control" id="div" placeholder="// The result is :"  rows="10" cols="80""></textarea>
                </form>
              </div>
            </div>
     </div>
    </div>
</div>
            <script>
            //wait for page load to initialize script
            $(document).ready(function(){
                //listen for form submission
                $('#form').on('submit', function(e){
                  //prevent form from submitting and leaving page
                  e.preventDefault();
            
                  // AJAX 
                  $.ajax({
                        type: "POST", //type of submit
                        cache: false, //important or else you might get wrong data returned to you
                        url: "compile.php", //destination
                        datatype: "html", //expected data format from process.php
                        data: $('#form').serialize(), //target your form's data and serialize for a POST
                        success: function(result) { // data is the var which holds the output of your process.php
            
                            // locate the div with #result and fill it with returned data from process.php
                            $('#div').html(result);
                        }
                    });
                });
            });
            </script>
            <script>
                $(function(){
                    $('textarea').linenumbers({col_widh : '25px'});
                }
                  
                  );
            </script>
        </body>
    </html>
   <div class="area">
<div class="well foot">
<div class="row area">
<div class="col-sm-3">

</div>

<div class="col-sm-5">


<div class="fm">

<b><span class="btn-danger">Beta</span>  Version V2.0.0</b><br>
<b><span class="btn-danger">Developed By </span>  |  <a href="https://www.facebook.com/iam.ok.1999" target="_blank"style="font-size: 16px;" >Mohamed Ahmed Dawood</a>
& <span class="btn-danger">Designed By </span>  |  <a href="https://www.facebook.com/iam.ok.1999" target="_blank" style="font-size: 18px;">انا بردوا يعم </a></b>

</div>
</div>


<div class="col-sm-4">

</div>
</div>
</div>
</div>