<?php include "app/view/partials/header.php"; ?>
    <div class="row" style="direction: rtl; font-family: IRANYekanXFaNum">
        <div class="col-8 left ">
            <form method="post" class="form bg-light p-3 m-4">
                <div class="form-group"><label for="inputcat"> دسته بندی</label><input type="text" name="title"
                                                                                       class="form-control "
                                                                                       id="inputcat"
                                                                                       placeholder=" عنوان دسته بندی">
                </div>
                <div class="form-group"><label for="inputdec">توضیحات</label><input type="text" name="description"
                                                                                    class="form-control" id="inputdec "
                                                                                    placeholder="توضیحات"></div>
                <div class="form-group"><label for="inputid">شناسه دسته بندی</label><input type="text" name="catID"
                                                                                           class="form-control"
                                                                                           id="inputid"
                                                                                           placeholder="شناسه دسته بندی">
                </div>
                <button type="submit" name="submit" class="btn btn-primary mt-4"> ثبت</button>
            </form>
        </div>
    </div><?php include "app/view/partials/footer.php"; ?>