<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopping_List SMC</title>
    <link rel="stylesheet" href="../Lib/main.css" />
    <link rel="stylesheet" href="./css/index.css" />
</head>
<body>
<header>Shopping_List SMC</header>
    <div class="main__wrapper">
        <div class="upper__wrapper">
            <div class="left__wrapper">
                <div id="input_area">
                    <table id="input_table">
                        <thead>
                            <tr>
                                <th>Line</th>
                                <th>Create date</th>
                                <th>No.</th>
                                <th>Trans by</th>
                                <th>Product name</th>
                                <th>Product code</th>
                                <th>Quantity</th>
                                <th>Expected date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><select class="save-data need-clear no-input select-input" id="line_id"></select></td>
                                <td><input type="date" class="save-data need-clear text-input" id="po_created_at" /></td>
                                <td><input class="save-data need-clear text-input" id="po_name" /></td>
                                <td><select class="save-data no-input need-clear select-input" id="delivery_by_id"></select></td>
                                <td><input class="save-data no-input need-clear text-input" id="product_name" /></td>
                                <td><input class="save-data no-input need-clear text-input" id="product_code" /></td>
                                <td><input class="save-data no-input need-clear number-input" id="quantity" /></td>
                                <td><input type="date" class="save-data need-clear text-input" id="expect_date" /></td>
                            </tr>
                        </tbody>
                    </table>
                    <table id="input_table">
                        <thead>
                            <tr>
                                <th>Arrival date</th>
                                <th>Note</th>
                                <th>Vietnamese name</th>
                                <th>Material</th>
                                <th>Catalogue</th>
                                <th>Purpose</th>
                                <th>PIC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="date" class="save-data need-clear date-input" id="to_smc_date" /></td>
                                <td><input class="save-data need-clear text-input" id="note" /></td>
                                <td><input class="save-data need-clear text-input" id="product_vie_name" /></td>
                                <td><input class="save-data need-clear text-input" id="material"/></td>
                                <td><input class="save-data need-clear text-input" id="catalogue"/></td>
                                <td><input class="save-data need-clear text-input" id="perpose" /></td>
                                <td><select class="save-data need-clear select-input" id="requester_id"></select></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="right__wrapper">
                <div id="active_area">
                    <button id="save">Lưu mới</button>
                    <button id="update">Cập nhật</button>
                </div>
            </div>
        </div>
        <div class="lower__wrapper">
            <table id="summary__table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Create date</th>
                        <th>No.</th>
                        <th>Trans by</th>
                        <th>Product name</th>
                        <th>Product code</th>
                        <th>Quantity</th>
                        <th>Expected date</th>
                        <th>Arrival date</th>
                        <th>Note</th>
                        <th>Vietnamese name</th>
                        <th>Material</th>
                        <th>Catalogue</th>
                        <th>Purpose</th>
                        <th>PIC</th>
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