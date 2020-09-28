<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="searchform" id="searchform" method="POST" action="../alumni/search" class="form-inline d-flex justify-content-center md-form form-sm active-cyan active-cyan-2 mt-2">
    <i class="fas fa-search" aria-hidden="true"></i>
    <input name="itemname" id="itemname" value="" class="form-control form-control-sm ml-3 w-75" type="text" placeholder="ค้นหาศิษย์เก่า เช่น ชื่อ, รหัสนักศึกษา" aria-label="Search">
    <button type="button" style="display: none;" class="btn btn-primary" id="btnSearch">
        <span class="glyphicon glyphicon-search"></span>
        ค้นหา
    </button>
</form>

</body>
</html>