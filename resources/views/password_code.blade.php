<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Access Code</title>
        <style>
            body {
                    font-family: "Open Sans";
                    background: #2c3e50;
                    color: #ecf0f1;
                    line-height: 1.618em;
                    }

                    .row-fluid {
                        margin-top: 5%;
                        margin-left: 40%;
                        margin-right: auto;
                    }

                    .button1 {
                        margin-left: 43%;
                    }

                    label {
                        font: normal 18px Georgia,serif;
                    }

                    .button2 {
                        display: none;
                        margin-left: 41%;
                        width: 120px;
                    }   
        </style>
        <link rel="stylesheet" href="css/style.css"> 
        <script  src="js/script.js"></script>
      </head>
      <body>
                  <!-- This section contains the input box for the user to enter the code for access. --> 
                <div class="row-fluid">
                        <label>SOLICITE EL CODIGO AL PSICOLOGO</label><br />
                        <input type="password" name="password" maxlength="4" class="span7" id="password" placeholder="" required/>
                </div>    
                  @foreach ($numero as $numeros)

                <input type="hidden" name="valor" id="valor" value="{{$numeros->numero}}">
                   

      
                @endforeach
                
      <!-- This is the "Submit" button that will call the "onSubmit" function on the javascript page. -->
      <button class="button1" id="button1" onclick="onSubmit()">Enviar</button>
      <br><br>
      
      <!-- This is the second button, it's hidden until the correct code is entered in the input text box from above. --> 
      <button class="button2" id="button2"><a href="{{url('welcome')}}" target="_blank">test</a></button>
      <script>
          function onSubmit() {

    if (document.getElementById('password').value == document.getElementById('valor').value) {window.button2.style.display="block"; }else{ alert('El codigo es incorrecto');}
}
      </script>
        </body>
      
      </html>