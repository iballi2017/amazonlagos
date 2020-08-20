<!-- header -->
<?php include_once '../components/header.php'; ?>

<div id="user_weekly_shopping_list">


    <div class="container my-3">
        <div class="flex_align_center">
            <button class="bo_back_history border-0" onclick="goBack()">
                <i class="fas fa-long-arrow-alt-left fa-2x"></i></button>
            <h4 class="m-0 text_capital">Weekly</h3>
        </div>
    </div>

    <section>
        <div class="shopping_form_wrapper m-3">
            <div class="bg-white p-5 inner">
                <form action="#">
                    <div class="table_wrapper">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="sticky-col first-col border-right number_cell">S/N</th>
                                    <th scope="col" class="name_cell">Product Name</th>
                                    <th scope="col" class="brand_cell">Brand/Manufacturer</th>
                                    <th scope="col" class="qty_cell">Quantity</th>
                                    <th scope="col" class="info_cell">Color/Size/Other Info</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="sticky-col first-col border-right number_cell">1</th>
                                    <td class="name_cell">
                                        <input type="text" class="shopping_list_form_input border-0">
                                    </td>
                                    <td class="brand_cell">
                                        <input type="text" class="shopping_list_form_input border-0">
                                    </td>
                                    <td class="qty_cell">
                                        <input type="number" class="shopping_list_form_input border-0">
                                    </td>
                                    <td class="info_cell">
                                        <input type="text" class="shopping_list_form_input border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="sticky-col first-col border-right number_cell">2</th>
                                    <td class="name_cell">
                                        <input type="text" class="shopping_list_form_input border-0">
                                    </td>
                                    <td class="brand_cell">
                                        <input type="text" class="shopping_list_form_input border-0">
                                    </td>
                                    <td class="qty_cell">
                                        <input type="number" class="shopping_list_form_input border-0">
                                    </td>
                                    <td class="info_cell">
                                        <input type="text" class="shopping_list_form_input border-0">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="sticky-col first-col border-right number_cell">3</th>
                                    <td class="name_cell">
                                        <input type="text" class="shopping_list_form_input border-0">
                                    </td>
                                    <td class="brand_cell">
                                        <input type="text" class="shopping_list_form_input border-0">
                                    </td>
                                    <td class="qty_cell">
                                        <input type="number" class="shopping_list_form_input border-0">
                                    </td>
                                    <td class="info_cell">
                                        <input type="text" class="shopping_list_form_input border-0">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="form_grp mb-3 text-left">
                        <button class="py-2 px-5 my-2 light_grn_btn rounded">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<!-- footer -->
<?php include_once '../components/footer.php'; ?>