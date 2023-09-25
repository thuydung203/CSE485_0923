<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3CMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
   

<style>
    .left-align-image {
        float: left;
    }

    .right-align-text {
        text-align: right;
        font-size: 20px;
    }
    .right-align {

        float: right;
        border: 1px;
        padding: 10px;
        border-radius: 5px;
        background-color: pink;
    }
    .User{
        font-size:20px;
        font-weight: bold;
    }
    .row{
        padding: 10px;
    }
    .vertical-menu {
  list-style-type: none;
  padding: 0;
  margin: 0;
  width: 200px;
  background-color:pink;
}

.vertical-menu li {
  padding-top:15px;
  
}

.vertical-menu li a {
  display: block;
  color: #333;
  padding: 8px 16px;
  text-decoration: none;
}

.vertical-menu li a:hover {
  background-color: #ddd;
}
    </style>

</head>
<body>
<div class="container-fluid">
<div class="left-align-image">
<img src="w3cms.png" float:height="150px">
<ul class="vertical-menu">
  <li><a href="users.php">Người dùng</a></li>
  <li><a href="group.php">Các nhóm</a></li>
  <li><a href="#">Quyền</a></li>
</ul>


</div>
        <div class="row">
                    <div>
                        <span class="User" > Users </span>
                        <button class="right-align"> Add User</button>
                        <span class="right-align">Delete</span> 
                <table class="table">
                  <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">FULLNAME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">PHONE</th>
                        <th scope="col">CITY</th>
                        <th scope="col">ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                        for ( $i = 0; $i<=10; $i++ ):
                            $fullname = "Nguyễn Thị Trang";
                            $phone = "1900186819001868";
                            $email = "email123@gmail.com";
                            $city= "Hà Nội";
                    ?>
                    <tr>
                       <th scope="row">
                       <input type="checkbox" id="myCheckbox" name="myCheckbox">
                       <label for="myCheckbox"></label>
                       </th>
                       
                       <td class="d-flex align-items-center">
                            <span class="flex-grow-1"><?=$fullname?></span>
                       </td>
                       <td>
                            <?=$email?>
                       </td>
                       <td style="background-color:white ;">
                            <?=$phone?>
                       </td>
                
                       <td>
                            <?=$city?>
                       </td>
                       <td class="d-flex align-items-center justify-content-around">
                       <span class="fa-solid fa-pen" ></span><i class="far fa-trash-alt"> 
                   
                       </td>
                    </tr>
                  </tbody>
                  <?php endfor ?>
                </table>
            </div>
        </div>
     </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>