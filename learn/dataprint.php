<?php include('../connection.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delux AC Room details</title>
    <style>
              *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

/* navbar */
.navbar{
    width: 100%;
    position: sticky;
    height: 100px;
    background-color: #fa9579;
    display: flex;
    align-items: center;
    justify-content: center;
      top: 0;
   
}
.left-nav{
    width: 20%;
}
.left-nav p{
    font-family: 'Baloo 2', cursive;
    font-size: 35px;
    
}

.right-nav{
    width: 100%;
    margin-top: 13px;

}
.right-nav ul{
  display: flex;
  justify-content: center;
}
.right-nav ul li{
   list-style: none;
   margin: 30px;
   
}
.right-nav ul li a{
    text-decoration: none;
    color: #222;
    font-family: 'Baloo 2', cursive;
  
    font-size: 26px;
    font-weight: 400;
    position: relative;
   
    }
.right-nav ul li a:hover{
    color: black;
    background: white;
    border-radius: 30px;
}
.right-nav ul .paste-button li{
    text-decoration: none;
    color: #222;
    font-family: 'Baloo 2', cursive;
    font-size: 26px;
    font-weight: 400;
    position: relative;
   
    }
.right-nav ul .paste-button li:hover{
    color: black;
    background: white;
    border-radius: 30px;
}
             
.paste-button {
    position: relative;
    display: inline-block;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }
  
  .button {
    background-color: #fa9579;
    color: black;
    font-size: 15px;
    border: 2px solid transparent;
    border-radius: 15px;
    cursor: pointer;
  }
  
  .dropdown-content {
    display: none;
    font-size: 13px;
    position: absolute;
    z-index: 1;


  }
  
  .dropdown-content a {
    color: #222;
    font-family: 'Baloo 2', cursive;
    font-size: 26px;
    font-weight: 400;
    text-decoration: none;
    display: block;
   width: 180px;
   height: 45px;
   border-radius: 5px;
  border: black solid 1px;
  text-align: center;
  background-color:white;
  
  }
  
  .dropdown-content a:hover {
   background-color:#fa9579;
 
  }
  
  .paste-button:hover button {
    background-color:white ;
  }
  
  .paste-button:hover .dropdown-content {
    display: block;
  }
  /* navbar */
  #detail-head
  {
    text-align: center;
    font-size: 29px;
    margin: 35px;
  }
.detail-table{
  width: 100%;

}
.detail-table table{
width: 80%;
margin: auto;
}
.detail-table table th{
font-size: 25px;
}
.detail-table table tr{
  height: 90px;

}
.detail-table table tr td{
text-align: center;
font-size: 19px;

}

#checkout-btn
{
  width: 80px;
  height: 35px;
  border: black solid 1px;
   background-color: red; 
  color: Black;
}
table,
        th,
        td {
            border: 3px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
/*  
        tr:nth-child(even) {
            background-color: #fa9579;
        } */
    </style>
</head>
<body>
<nav class="navbar">
    <div class="left-nav">
            <p>Room</p>
        </div>
        <div class="right-nav mt-4">
            <ul>
                <li class="item"><a href="aroom.php">Home</a></li>
         <div class="paste-button"> <li class="item">update </li>
          <div class="dropdown-content">
        <a id="first" href="adelux.php">Delux AC</a>
        <a id="second" href="aac.php">AC</a>
        <a id="third" href="anonac.php">Non AC</a>
      </div>
   </div>
                <!-- <li class="item"><a href="roomdetails.php">Rooms</a></li> -->
                <div class="paste-button"> <li class="item">Rooms</li>
          <div class="dropdown-content">
        <a id="first" href="deluxacdata.php">Delux AC</a>
        <a id="second" href="acdata.php">AC</a>
        <a id="third" href="nonacdata.php">Non AC</a>
      </div>
   </div>
                 <li class="item"><a href="roomstatus.php">Booked</a></li>
                 <li class="item"><a href="admin.php">Admin Panel</a></li>
          </ul>
        </div>
    </nav>
    
    <section>
      <h1 id="detail-head">Delux Ac Room</h1>
      <div class="detail-table">
        <table>
          <thead>
            <tr>
            <th scope="col">Room No</th>
            <th scope="col">Room Type</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
            <th scope="col">checkout</th>
</tr>
          </thead>
          <tbody>
            <?php
            $query="SELECT * FROM deluxac_room";
            $result=mysqli_query($con,$query);
           
            while($data=mysqli_fetch_assoc($result))
            {
              ?>
              <tr>
                <td><?php echo $data['room_no']; ?></td>
                
                <td><?php echo $data['room_type']; ?></td>
                <td><?php echo $data['price']; ?></td>
                <td><?php echo $data['status']; ?></td>
                <td>
                  <a href="codelux.php?rno=<?php echo $data['room_no'];?>"><button value="CheckOut" id="checkout-btn">CheckOut</button></a>
                </td>
              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </section>
</body>
</html>