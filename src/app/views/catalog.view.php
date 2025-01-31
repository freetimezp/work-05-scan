<?php
$isConditionMet = true;
$users = 'Log';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/catalog-style.css">

    <title>Project | Scan | Catalog</title>

</head>

<body>

    <div class="wrapper">
        <!-- Navbar start -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/cashier-workplace-master/src" . "/app/include/navbar.php" ?>
        <?php //include $_SERVER['DOCUMENT_ROOT'] . "/app/include/navbar.php" 
        ?>
        <!-- Navbar end -->

        <!-- Modal -->
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/cashier-workplace-master/src" . "/app/include/modal-input-barcode.php"; ?>

        <div class="content">
            <div class="search-box">
                <input type="text" placeholder="Search" class="form-control">
            </div>
            <div class="catalog">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="col">Артикул</th>
                            <th scope="col" class="col">Назва</th>
                            <th scope="col" class="col">Категорія</th>
                            <th scope="col" class="col">Характеристика</th>
                            <th scope="col" class="col">Вартість</th>
                        </tr>
                    </thead>
                    <tbody id="testRows">
                        <tr>
                            <td>ASD123</td>
                            <td>Кофе</td>
                            <td>Напій</td>
                            <td>Мелена кава</td>
                            <td>120 грн.</td>
                        </tr>
                        <tr>
                            <td>ASD123</td>
                            <td>Кофе</td>
                            <td>Напій</td>
                            <td>Мелена кава</td>
                            <td>120 грн.</td>
                        </tr>
                        <tr>
                            <td>ASD123</td>
                            <td>Кофе</td>
                            <td>Напій</td>
                            <td>Мелена кава</td>
                            <td>120 грн.</td>
                        </tr>
                        <tr>
                            <td>ASD123</td>
                            <td>Кофе</td>
                            <td>Напій</td>
                            <td>Мелена кава</td>
                            <td>120 грн.</td>
                        </tr>
                        <tr>
                            <td>ASD123</td>
                            <td>Кофе</td>
                            <td>Напій</td>
                            <td>Мелена кава</td>
                            <td>120 грн.</td>
                        </tr>
                        <tr>
                            <td>ASD123</td>
                            <td>Кофе</td>
                            <td>Напій</td>
                            <td>Мелена кава</td>
                            <td>120 грн.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</body>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        let tableBody = document.getElementById("testRows");
        //console.log(tableBody);

        if (tableBody) {
            let rows = tableBody.querySelectorAll("tr");

            rows.forEach((el, i) => el.addEventListener("click", () => {
                rows.forEach(row => row.classList.remove("active"));
                el.setAttribute("id", `row-${i}`);

                el.classList.add("active");

                el.scrollIntoView({
                    behavior: "smooth",
                    block: "center"
                });

                if (el.classList.contains("active")) {
                    el.setAttribute('tabindex', '-1');
                    el.focus();
                    el.removeAttribute('tabindex');
                }
            }));



            function autoClickRandomRow() {
                if (rows.length === 0) return;

                let randomIndex = Math.floor(Math.random() * rows.length);
                rows[randomIndex].click();

                console.log(`Auto-clicked row index: ${randomIndex}`);
            }

            //setInterval(autoClickRandomRow, 2000);
        }

    })
</script>

</html>