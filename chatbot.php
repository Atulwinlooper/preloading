<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
body {
  padding: 0;
   width: 50px;
  position: center;
  margin-top: 50px;
  margin-left: 150px;
  margin-right: 150px;
  background-color: #42d451;
  background-image: linear-gradient(110deg, #42d451 0%, #1249eb 100%);


  }

.container1 {
  border: 2px solid #dedede;
  background-color: grey;
  border-radius: 10px;
  padding: 0px;
  height: 40px;
  width: 200px;
  position: center;
  margin-top: 120px;
  margin-left: 30px;
}

.darker {
  border-color: #fff;
  background-color: green;
}

.container1::after {
  content: "";
  clear: both;
  display: table;
}

.container1 img {
  float: left;
  max-width: 30px;
  margin-top: 5px;
  margin-left: -35px;
  border-radius: 50%;
}

.container1 img.right {
  float: right;
  width: 10px;
  margin-top: -10px;
  margin-right: -32px;
  border-radius: 50%;
}

.time-right {
  float: right;
  margin-top: -30px;
  margin-right: 15px;
  color: red;
}

.time-left {
  float: left;
  margin-top: -27px;
  margin-left: 7px;
  color: red;
}

div.sticky {
  position: -webkit-sticky;
  position: center;
  bottom: 0;
  margin-top: 220px;
  background-color: transparent;
  padding: 10px 0 0 10px;
  font-size: 20px;
}
.square {
  position: center;
  height: 620px;
  width: 500px;
  padding: 8px;
  margin-top: 50px;
  margin-left: 190px;
  margin-right: 150px;
  background-image: url("img/chatlogo.png");
   background-repeat: no-repeat;
  background-size: 120% 100%;
  border: 3px solid #000;
  border-radius: 10px;
  box-shadow: 5px 10px grey;
  
}
.button {
    height: 38px;
    padding: 0;
    margin: 0;
    vertical-align: top;
    width: 50px;
    border-radius: 10px;
    background-color: transparent;
    border: none;
}
</style>
</head>
<body bgcolor="black">

<span id="ref">
<div class="square">
<center><h2>Student Signup</h2></center>
<br/>
  <div class="container1" style="margin-right: 400px;">
    <div class="userphoto"><img src="img/stu.png" alt="Avatar" style="width:100%;"></div>
    
    <p id="message"><?php echo "Dectroit"?></p>
    <span class="time-right"><?php echo "Hi How Are You??"?></span>
  </div>
 
  <div class="container1 darker" style="margin-left: 250px; margin-top: 50px;">
    <div class="userpic">
    <img src="img/a.png" alt="Avatar" class="right" style="width:40px; height: 30px; margin-top:5px; ">
    </div>
    <p><?php echo "john"?></p>
    <span class="time-left"><?php echo "I am Fine,What about you?"?></span>
  </div>


<div class="sticky">
  <div class="row">
     <div class="col-md-12">
       <div class="input-group mb-3">
          <input type="text" class="form-control" id="msg">
            <div class="input-group-append">
                <button class="button" type="button" onclick="send()"><img src="img/send-btn.png" class="send_btn" style="height: 30px; width: 30px; padding: 0; margin: 0; border: 0;"></button>
            </div>
        </div>
   </div>
  </div>
</div>
</div>
</span>
<br/>

<script type="text/javascript">
  function send(){
    var text=$('#msg').val().toLowerCase();
    
     $.ajax({
                type:"post",
                url:"chatbot.php",
                data:{text:text},
                success:function(data){
                    //alert(data);
                    $('#ref').load(' #ref');
                }
      });
  }
</script>

</body>
</html>