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
        border: 1px solid #00FF00;
        padding: 10px;
        border-radius: 5px;
        background-color: orange;
    }
    .User{
        font-size:29px;
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
.far fa-trash-alt{
    flo
}
    </style>

</head>
<body>
<div class="container-fluid">
<div class="left-align-image">
<img src="w3cms.png" float:height="150px">
<ul class="vertical-menu">
  <li><a href="users.php">Người dùng</a></li>
  <li><a href="group">Các nhóm</a></li>
  <li><a href="#">Quyền</a></li>
</ul>


</div>
        <div class="row">
                    <div>
                        <span class="User" > Các nhóm </span>
                        <span  class="fas fa-search" ></span>
                        <input type="text" placeholder="Tìm kiếm ở đây">
                        <hr>
                    </div>


                   

                <table class="table">
                    <h3> Quản lý nhóm </h3>
                    <hr>
                  <thead>
                    <tr>
                        <th scope="col">Tên nhóm</th>
                        <th scope="col">Số lượng người dùng</th>
                        <th scope="col">Số lượng quyền</th>
                        <th scope="col">Hoạt Động</th>
                       
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                        for ( $i = 0; $i<=4; $i++ ):
                            $tennhom= "Quản trị viên";
                            
                           
                    ?>
                    <tr>
                    <td>
                            <?=$tennhom?>
                       </td>
                       
                       </td>
                       <td>
                       </span><i class="fas fa-user"> 
                   
                       </td>
                       </td>
                       <td >
                       </span><i class="fas fa-user-lock">
                   
                       </td>
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