<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
      <div class="container">
        <div class="row">
            <div class="col-md-6">
                <select name="" id="department">
                    <option value="0">-- Chọn phòng ban --</option>
                    <!-- Giá trị cần có ở đây lấy từ CSDL -->
                    <?php
                    require("config.php");
                    // 2. Khai bao truy van
                    $sql = "SELECT * FROM department";
                    mysqli_set_charset($conn,'UTF8');
                    $result = mysqli_query($conn,$sql);
                    // 3. Xu ly ket qua
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<option value='".$row['id']."' >".$row['depart_name']."</option>";
                    }

                    ?>
                </select>
            </div>
            <div class="col-md-6">
            <select name="" id="staff">
                    <option value="0">-- Danh sách nhân viên --</option>
                    <!-- Giá trị cần có ở đây lấy từ CSDL nhưng tương ứng với Phòng ban được chọn-->
            </select>
            </div>
        </div>
      </div>
      <!-- <a href="" id="lienKet">Click Here</a> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>