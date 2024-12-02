<?php

include "app/view/partials/header.php";
?>

<body class="row" style="font-family: IRANYekanXFaNum">
    <div class="col-8 left">
        <div class="table-section">
            <button>
                <a href=<?php echo "http://" .$_SERVER["HTTP_HOST"]."/mvc%20project/category/creator/" ;?> >اضافه کردن دسته بندی جدید </a>
            </button>
        </div>
        <?php
        include "app/view/partials/sidebar.php";
        ?>

        <table class="table">
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
                        <a href="" class="bg-danger  text-light p-2 m-2" >حذف</a>
                        <a href="" class="bg-success  text-light p-2 m-2" >ویرایش</a>
                    </div>
                </th>
                <td>Mark</td>
                <td>Otto</td>
                <td>1</td>
            </tr>
            <tr class="m-3">
                <th scope="row" >
                    <div class="actions">
                        <a href="" class="bg-danger  text-light p-2 m-2" >حذف</a>
                        <a href="" class="bg-success  text-light p-2 m-2" >ویرایش</a>
                    </div>
                </th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>2</td>
            </tr>
            <tr>
                <th scope="row">
                    <div class="actions">
                        <a href="" class="bg-danger  text-light p-2 m-2" >حذف</a>
                        <a href="" class="bg-success  text-light p-2 m-2" >ویرایش</a>
                    </div>
                </th>
                <td>Larry the Bird</td>
                <td>xxxx</td>
                <td>3</td>
            </tr>
            </tbody>
        </table>
    </div>
</body>

<?php
include "app/view/partials/footer.php";
?>

