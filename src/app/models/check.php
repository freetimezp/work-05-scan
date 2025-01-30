<?php //include $_SERVER["DOCUMENT_ROOT"] . "/controllers/check.php"; 
?>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/cashier-workplace-master/src" .  "/controllers/check.php"; ?>


<div class="wrapper">
    <!-- Navbar start -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/cashier-workplace-master/src" . "/app/include/navbar.php" ?>
    <?php //include $_SERVER['DOCUMENT_ROOT'] . "/app/include/navbar.php" 
    ?>
    <!-- Navbar end -->

    <div id="main-content">
        <!-- Content start -->
        <div id="content">
            <div class="content-single">
                <div class="single-top">
                    <span
                        class="name"><?= isset($string_id) && isset($_SESSION['cart'][$string_id]['full_name']) ? $_SESSION['cart'][$string_id]['full_name'] : 'Відскануйте товар' ?></span>
                    <span class="btn-trash-wrapper">
                        <i class="bi bi-trash"
                            onclick="sendData({deleteStringInCheck: '<?= isset($string_id) ? addslashes($string_id) :  null ?>'})"></i>
                    </span>
                </div>
                <div class="single-bottom">
                    <div class="cost">
                        <input type="text" disabled
                            placeholder="<?= isset($string_id) && isset($_SESSION['cart'][$string_id]['price']) ? $_SESSION['cart'][$string_id]['price'] : 0 ?>"
                            value="<?= isset($string_id) && isset($_SESSION['cart'][$string_id]['price']) ? $_SESSION['cart'][$string_id]['price'] : 0 ?>">
                        <span>грн.</span>
                    </div>
                    <div class="weight">
                        <span class="weight-minus"
                            onclick="adjustCounter('minus', <?= isset($string_id) && isset($_SESSION['cart'][$string_id]['price']) ? $_SESSION['cart'][$string_id]['id'] : 0 ?>)">-</span>
                        <input type="text" disabled placeholder="1"
                            value="<?php if (isset($string_id)) {
                                        echo isset($string_id) && isset($_SESSION['cart'][$string_id]['quantity']) ? $_SESSION['cart'][$string_id]['quantity'] : 1;
                                    } ?>">
                        <span class="weight-plus"
                            onclick="adjustCounter('plus',<?= isset($string_id) && isset($_SESSION['cart'][$string_id]['price']) ? $_SESSION['cart'][$string_id]['id'] : 0 ?>)">+</span>
                        <!-- <span class="weight-basket">
                 <i class="bi bi-basket"></i> 
            </span> -->
                    </div>
                    <div class="discount">
                        <span class="text">Знижка</span>
                        <input type="text" placeholder="0,00" value="0,00" disabled>
                        <i class="bi bi-percent discount-percent"></i>
                        <span class="choose-btn">грн.</span>
                    </div>
                    <div class="sum">
                        <span>Усього:</span>
                        <input type="text" placeholder="0" disabled
                            value="<?php if (isset($string_id) && isset($_SESSION['cart'])) {
                                        echo $_SESSION['cart'][$string_id]['price'] * $_SESSION['cart'][$string_id]['quantity'];
                                    } else {
                                        echo "0";
                                    } ?>">
                    </div>
                </div>
            </div>
            <div class="content-items" id="index">
                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col" class="col">#</th>
                            <th scope="col" class="col">Назва</th>
                            <th scope="col" class="col">Вартість</th>
                            <th scope="col" class="col">Кількість</th>
                            <th scope="col" class="col" style="text-align: right;">Загальна вартість</th>
                        </tr>
                    </thead>

                    <tbody id="testActiveRows">
                        <?php if (isset($_SESSION['cart'])): ?>
                            <?php $_SESSION['total_amount'] = 0; ?>
                            <?php for ($i = 0; $i < count($_SESSION['cart']); $i++):  ?>
                                <?php $_SESSION['total_amount'] =  $_SESSION['total_amount'] + $_SESSION['cart'][$i]['price'] * $_SESSION['cart'][$i]['quantity']; ?>
                                <?php if (isset($string_id) && $i == $string_id) {
                                    $active = 'active';
                                } else {
                                    $active = '';
                                } ?>
                                <tr class="<?= $active ?>" onclick="sendActiveProduct(<?= $i ?>)">
                                    <td id="id" scope="row"><?= $i + 1 ?></td>
                                    <td id="name"><?= $_SESSION['cart'][$i]['name'] ?></td>
                                    <td id="price"><?= $_SESSION['cart'][$i]['price'] ?></td>
                                    <td id="quantity"><span><?= $_SESSION['cart'][$i]['quantity'] ?></span> шт.</td>
                                    <td id="sum" style="font-weight: 600; text-align: right;">
                                        <?= $_SESSION['cart'][$i]['price'] * $_SESSION['cart'][$i]['quantity'] ?>
                                    </td>
                                </tr>
                            <?php endfor ?>

                        <?php
                        endif ?>

                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td style="font-weight: 600; text-align: right;">12</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Modal -->
            <?php //include $_SERVER['DOCUMENT_ROOT'] . "/app/include/modal-input-barcode.php"; 
            ?>
        </div>
        <!-- Content end -->

        <!-- Sidebar start -->
        <div id="sidebar">
            <div class="sidebar-top">
                <div class="sidebar-row">
                    <span>Без знижки:</span>
                    <span class="text-end" id="no_discount"><?= isset($_SESSION['total_amount']) ?
                                                                $_SESSION['total_amount'] : '0' ?>
                        грн.</span>
                </div>
                <div class="sidebar-row">
                    <span>Знижка:</span>
                    <span class="text-end" id="discount">0,00
                        грн.</span>
                </div>

                <hr style="opacity: 0.2;">

                <div class="sidebar-row top-2">
                    <span>Всього:</span>
                    <span class="text-end"
                        id="total_pay"><?= isset($_SESSION['total_amount']) ? $_SESSION['total_amount'] : '' ?>
                        грн.</span>
                </div>
                <div class="sidebar-row top-2">
                    <span>Здача:</span>
                    <span class="text-end" id="rest_money">0,00
                        грн.</span>
                </div>

                <hr style="opacity: 0.2;">

                <div class="sidebar-btns">
                    <button>
                        <span>F7</span>
                        <span>Готівка</span>
                    </button>
                    <button>
                        <span>F6</span>
                        <span>Карта</span>
                    </button>
                </div>

                <div class="sidebar-inputs">
                    <div class="sidebar-row">
                        <span>Готівка:</span>
                        <div>
                            <input type="text" placeholder="5 000,00" value="5 000,00">
                            <i class="bi bi-trash"></i>
                        </div>
                    </div>
                    <div class="sidebar-row">
                        <span>Карта:</span>
                        <div>
                            <input type="text" placeholder="18 648,00" value="18 648,00">
                            <i class="bi bi-trash"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sidebar-bottom">
                <div class="sidebar-checkout-btns">
                    <div class="sidebar-user-btn">
                        <i class="bi bi-person-fill"></i>
                        <div class="sidebar-user-check-btn">
                            <i class="bi bi-check"></i>
                            <span></span>
                        </div>
                    </div>
                    <button>
                        Отримати чек
                    </button>
                </div>
            </div>
        </div>
        <!-- Sidebar end -->
    </div>
</div>