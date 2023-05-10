<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Check</title>
    <link rel="stylesheet" href="../Lib/main.css" />
    <link rel="stylesheet" href="./css/index.css" />
</head>
<body>
<header>Shopping_List</header>
    <div class="main__wrapper">
        <div class="upper__wrapper">
            <div class="left__wrapper">
                <div id="input_area">
                    
                </div>
            </div>
            <div class="right__wrapper">
                <div id="active_area">
                    <button id="save">Lưu mới</button>
                    <button id="update">Cập nhật</button>
                    <button id="add_same">Mua thêm</button>
                </div>
            </div>
        </div>
        <div class="lower__wrapper">
            <table id="summary__table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th class="sticky-col c1">PO No.</th>
                        <th class="sticky-col c2">Imprort Wharehouse</th>
                        <th class="sticky-col c3">PR SAP</th>
                        <th class="sticky-col c4">Shoping cart</th>
                        <th class="sticky-col c5">PO Shopping cart</th>
                        <th class="sticky-col c6">Ringi No.</th>
                        <th class="sticky-col c7">Approved No.</th>
                        <th class="sticky-col c8">Product EN Name</th>
                        <th>Product Vie Name</th>
                        <th>Product ID</th>
                        <th>Maker</th>
                        <th>Supplier</th>
                        <th>Product Category ID</th>
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
                        <th>Quotation Request Date</th>
                        <th>Type</th>
                        <th>Using position</th>
                        <th>Ringi Date</th>
                        <th>note</th>
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