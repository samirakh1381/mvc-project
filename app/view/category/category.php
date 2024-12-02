<?php
include "app/view/partials/header.php";
?>

<body class="row">
    <div class="col-8 left">
        <div class="table-section">
            <button>
                <a href="app/view/category/creatot">اضافه کردن دسته بندی جدید</a>ک
            </button>
        </div>
<table class="table table-light">
    <?php
    include "app/view/partials/sidebar.php";
    ?>
    <thead>
    <tr>
        <th scope="col">عملیات</th>
        <th scope="col">توضیحات</th>
        <th scope="col">نام دوره</th>
        <th scope="col">شناسه</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">
                <div class="actions">
                    <a href="" class="bg-danger  text-light" >حذف</a>
                    <a href="" class="bg-success  text-light" >ویرایش</a>
                </div>
            </th>
            <td></td>
            </th></tr>
    </tbody>
</table>
    </div>
</body>

<?php
include "app/view/partials/footer.php";
?>

