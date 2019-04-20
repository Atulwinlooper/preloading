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
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
  background-image:linear-gradient(110deg, #009900 50%,  #000033 50%);
}

.container1 {
  border: 2px solid #dedede;
  background-color: #000033;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #009900;
}

.container1::after {
  content: "";
  clear: both;
  display: table;
}

.container1 img {
  float: left;
  max-width: 50px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container1 img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}

div.sticky {
  position: -webkit-sticky;
  position: sticky;
  bottom: 0;
  margin-top: 200px;
  background-color: #ddd;
  padding: 10px 0 0 10px;
  font-size: 20px;
}
.square {
  height: auto;
  width: 1010px;
  padding: 8px;
  background-color: transparent;
  border: 2px solid #dedede;
  
}
</style>
</head>
<body bgcolor="yellow">

<span id="ref">
<div class="square">
<center><h2>STUDENT SIGNUP</h2></center>
<br/>
  <div class="container1" style="margin-right: 400px;">
    <img src="user/user.jpg" alt="Avatar" style="width:100%;">
    <p id="message"><?php echo "name"?></p>
    <span class="time-right"><?php echo "abc"?></span>
  </div>
 
  <div class="container1 darker" style="margin-left: 400px;">
    <img src="img/stu.png" alt="Avatar" class="right" style="width:12%; margin-top:12px">
    <p><?php echo "hello"?></p>
    <span class="time-left"><?php echo "go"?></span>
  </div>


<div class="sticky">
  <div class="row">
     <div class="col-md-12">
       <div class="input-group mb-3">
          <input type="text" class="form-control" id="msg">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" onclick="send()">Send</button>
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
                url:"mysearch.php",
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