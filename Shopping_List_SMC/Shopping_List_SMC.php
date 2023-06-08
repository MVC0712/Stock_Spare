<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopping_List</title>
    <link rel="stylesheet" href="../Lib/main.css" />
    <link rel="stylesheet" href="./css/index.css" />
</head>
<body>
<header>Shopping_List</header>
    <div class="main__wrapper">
        <div class="upper__wrapper">
            <div class="left__wrapper">
                <div id="input_area">
                    <table id="input_table">
                        <thead>
                            <tr>
                                <th>Line</th>
                                <th>PO No.</th>
                                <th>Imprort Wharehouse</th>
                                <th>PR SAP</th>
                                <th>Shoping cart</th>
                                <th>PO Shopping cart</th>
                                <th>Ringi No.</th>
                                <th>Approved No.</th>
                                <th>Product EN Name</th>
                                <th>Product Vie Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><select class="save-data need-clear no-input select-input" id="line_id"></select></td>
                                <td><input class="save-data need-clear text-input" id="po_no" /></td>
                                <td><input class="save-data need-clear text-input" id="imprort_harehouse" /></td>
                                <td><input class="save-data need-clear text-input" id="pr_sap" /></td>
                                <td><input class="save-data need-clear text-input" id="shoping_cart" /></td>
                                <td><input class="save-data need-clear text-input" id="po_shopping_cart" /></td>
                                <td><input class="save-data need-clear text-input" id="ringi_no" /></td>
                                <td><input class="save-data need-clear text-input" id="approved_no" /></td>
                                <td><input class="save-data need-clear no-input text-input" id="product_en_name" /></td>
                                <td><input class="save-data need-clear no-input text-input" id="product_vie_name" /></td>
                            </tr>
                        </tbody>
                    </table>
                    <table id="input_table">
                        <thead>
                            <tr>
                                <th>Product ID</th>
                                <th>Maker</th>
                                <th>Supplier</th>
                                <th>Product CategoryID</th>
                                <th>Stock/Non-Stock</th>
                                <th>Quantity</th>
                                <th>Units</th>
                                <th>Currency Unit</th>
                                <th>Unit Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input class="save-data need-clear no-input text-input" id="product_id" /></td>
                                <td><input class="save-data need-clear text-input" id="maker" /></td>
                                <td><input class="save-data need-clear text-input" id="supplier" /></td>
                                <td><select class="save-data need-clear no-input select-input" id="category_id"></select></td>
                                <td><select class="save-data need-clear no-input select-input" id="stock_nonstock_id"></select></td>
                                <td><input class="save-data need-clear no-input number-input" id="quantity" /></td>
                                <td><select class="save-data need-clear no-input select-input" id="unit_id"></select></td>
                                <td><select class="save-data need-clear select-input" id="currency_unit_id"></select></td>
                                <td><input class="save-data need-clear text-input" id="unit_price" /></td>
                                <td><input class="save-data need-clear text-input" id="total" /></td>
                            </tr>
                        </tbody>
                    </table>
                    <table id="input_table">
                        <thead>
                            <tr>
                                <th>Order date</th>
                                <th>Deliery date</th>
                                <th>To SMC date</th>
                                <th>Person incharge</th>
                                <th>Requester</th>
                                <th>Quotation Date</th>
                                <th>Type</th>
                                <th>Using position</th>
                                <th>Ringi Date</th>
                                <th>Note</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="date" class="save-data need-clear text-input" id="order_date" /></td>
                                <td><input type="date" class="save-data need-clear text-input" id="deliery_date" /></td>
                                <td><input type="date" class="save-data need-clear text-input" id="to_smc_date" /></td>
                                <td><select class="save-data need-clear select-input" id="person_incharge_id"></select></td>
                                <td><select class="save-data need-clear no-input select-input" id="requester_id"></select></td>
                                <td><input type="date" class="save-data need-clear no-input date-input" id="quotation_request_date" /></td>
                                <td><input class="save-data need-clear text-input" id="type_id"></td>
                                <td><input class="save-data need-clear text-input" id="using_position" /></td>
                                <td><input type="date" class="save-data need-clear text-input" id="ringi_date" /></td>
                                <td><input class="save-data need-clear text-input" id="note" /></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="right__wrapper">
                <div id="active_area">
                    <button id="save">Lưu mới</button>
                    <button id="update">Cập nhật</button>
                    <!-- <button id="add_same">Mua thêm</button> -->
                </div>
            </div>
        </div>
        <div class="lower__wrapper">
            <table id="summary__table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th class="sticky-col c1">PO No.</th>
                        <th class="sticky-col c2">Imt Wharehouse</th>
                        <th class="sticky-col c3">PR SAP</th>
                        <th class="sticky-col c4">Shoping cart</th>
                        <th class="sticky-col c5">POShopping cart</th>
                        <th class="sticky-col c6">Ringi No.</th>
                        <th class="sticky-col c7">Approved No.</th>
                        <th class="sticky-col c8"><input id="search_input" placeholder="Search"/></th>
                        <th>Vie Name</th>
                        <th>Product ID</th>
                        <th>Maker</th>
                        <th>Supplier</th>
                        <th>Category ID</th>
                        <th>Stock/Non-Stock</th>
                        <th>Quantity</th>
                        <th>Units</th>
                        <th>Currency Unit</th>
                        <th>Unit Price</th>
                        <th>Total</th>
                        <th>Order date</th>
                        <th>Deliery date</th>
                        <th>To SMC date</th>
                        <th>Person incharge</th>
                        <th>Requester</th>
                        <th>Quotation Date</th>
                        <th>Type</th>
                        <th>Using position</th>
                        <th>Ringi Date</th>
                        <th>Note</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
    <script src="../Lib/jquery.min.js"></script>
    <script src="./scr/index.js"></script>
</body>

</html>