<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Titan+One&display=swap" rel="stylesheet">
    <style>
        *{margin: 0;padding: 0;box-sizing: border-box;font-family: 'Fredoka One', cursive;}

section
{
  width: 100%;
 min-height: 100vh;
  display:flex;
  justify-content:center;
  align-items:center;
  background:#2b2024;
 

}
.container
{
    width:550px ;
  min-height: 300px;
  background:#2b2024;
    box-shadow:10px 10px 10px rgba(0,0,0,0.5),
                -5px -5px 5px rgba(225,225,225,.2);
  display: flex;
  flex-direction:column;
  padding: 2px;
  border-radius:10px;
  
}

.container .container_input
{
    

  flex: 3;padding: 2%;
  display:flex;
  flex-direction:row;
  

}
.input_one
{
    flex:1.5;
   

    margin:3px;
    display:flex;
   justify-content:center;
   padding:10px;
    box-shadow:5px 5px 5px rgba(0,0,0,0.3),
                -3px -3px 3px rgba(225,225,225,0.1);
                border-radius:10px;
   flex-direction:column;
   margin-left:30px;
   min-height:120px;
   margin-top:50px;
   
    }
    .input_one h1
    {
        font-size:30px;
        margin-top:3px;
        color:#82002B;
        margin-left:10px;
        letter-spacing:2px;
        font-family: 'Titan One', cursive;
        animation :animate 1s linear infinite;
    }

    @keyframes animate{
        0%
        {
            transform:scale(1,1);
            color:#fd0054;
        }
        100%
        {
            transform:scale(.8,.8);
           
           
        }
    }
    
   
.input_two
{
    flex:2; margin:3px;
   

    display:flex;
    justify-content:flex-end;
    
    
    }
    .first_number
    {
        
       margin:34px 15px 0px 0px;
       padding:5px;
    }
    .input_1,.input_2
    {
        outline:none;
     border-top:none;
     border-left:none;
     border-right:none;
       background:#2b2024;
      border-bottom:none;
      color:#a80038;
      box-shadow:5px 5px 5px rgba(0,0,0,0.3),
                -5px -5px 5px rgba(225,225,225,0.1);
            border-radius:2px;
       text-align:center;
      padding:5px;
      font-weight:bold;
 
    }
    .input_1::placeholder ,.input_2::placeholder
    {
        color:#fbf9fa;
        letter-spacing:.5px;
        opacity:.2;
       
    }
    .second_number
    {
        
       margin-top:10px; padding:5px;
    }
   

    .select
    {
        margin:20px 0px 0px 6px;
    }
    .option
    {

        padding-right:10px;
        text-transform:uppercase;
        color:#a80038;
        ouline:none;
        padding-top:5px;
        cursor:pointer;
        background:#2b2024;
        outline:none;
        margin-left:20px;
        border:none;
        padding-left:25px;
        box-shadow:5px 5px 5px rgba(0,0,0,0.3),
                -5px -5px 5px rgba(225,225,225,0.1);
    }
    .button
    {
      
      margin-top:30px;
      
            }
            button
            {
                
                background:#fd0054;
                outline:none;
                border:none;
                padding:10px;
                border-radius:5px;
                color:#fbf9fa;
                cursor:pointer;
                letter-spacing:1px;
                background:#2b2024;
        outline:none;
        margin-left:20px;
        box-shadow:5px 5px 5px rgba(0,0,0,0.3),
                -5px -5px 5px rgba(225,225,225,0.1);
        border:none;
            }
            button:hover
            {
                background:#82002B;
            }

  
.container .container_output
{
   
  flex: 1;
}
.output_one
{
    
    display:flex;
    justify-content:center;
   
}
.output_one p
{
   padding:15px 0px 15px 0px;
   color:#fbf9fa;
   word-spacing:2px;
   letter-spacing:.4px;
}
@media screen and (max-width:575px){
    .container
    {
        width:500px;
    }
    .container .container_input
    {
        display:flex;
        flex-direction:column;
    }
    .input_one 
    {
        flex-direction:row;
        justify-content:center;
        align-items:center;
        font-size:27px;
    }
    .input_two
    {
        justify-content:center;
    }
    .input_1,.input_2,.option
    {
        padding:10px;
    }
    .button
    {
        margin-left:10px;
    }
}
        </style>
  
   
</head>
<body>
    <section>
        <div class="container">
            <div class="container_input">
                <div class="input_one">
                    <h1>PHP </h1>
                    <h1>CACULATOR</h1>
                </div>
                <div class="input_two">
                    <form method="POST">
                        <div class="first_number">
                            <input type="text" name="num1" placeholder="Enter Number" class="input_1" autofocus="on">
                          
                        </div>
                        <div class="second_number">
                            <input type="text" name="num2" placeholder="Enter Number" class="input_2">
                          
                        </div>
                        <div class="select">
                            <select name="operation" class="option">
                                <option value="add">add</option>
                                <option value="sub">sub</option>
                                <option value="mul">mul</option>
                                <option value="div">divide</option>
                            
                            </select>
                        </div>
                        <div class="button">
                            <button type="submit" name="submit">SUBMIT</button>
                        </div>
                    
                    </form>
            
            
            </div>
        </div>
        <div class="container_output">
            <div class="output_one">
                <p>
                    <?php

                        if(isset($_POST["submit"]))
                        {
                            $num1=$_POST["num1"];
                            $num2=$_POST["num2"];

                            $operation=$_POST["operation"];

                            switch($operation)
                            {
                                case "add":
                                    {
                                        $sum=$num1+$num2;
                                        echo "The Addition of two number is ".$sum ;
                                        break;
                                    }
                                case "sub":
                                    {
                                        $sub=$num1-$num2;
                                        echo "The Substraction of two number is ".$sub;
                                    break;
                                    }
                                case "mul":
                                {
                                    $mul=$num1*$num2;
                                    echo "The Multiplication of two number is"  .$mul;
                                break;
                                }
                                case "div":
                                {
                                    $div=$num1/$num2;
                                    echo "The Division of two number is" .$div;
                                    break;
                                }
                            }
                        }


                    ?>
                </p>
            </div>
        </div>

    </div>
        
    </section>
</body>
</html>