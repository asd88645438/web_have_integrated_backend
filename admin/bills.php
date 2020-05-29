<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bills Managerment</title>

    <!-- favicon for webpage -->
    <link rel="shortcut icon" href="../img/favicon/favicon.ico">
    <!-- <link rel="shortcut icon" type="image/png" href="img/favicon/favicon.png"> -->
    <!-- /favicon for webpage -->

    <!-- Responsive library -->
    <link rel="stylesheet" href="../assets/css/gridLibrary.css">
    <!-- /Responsive library -->

    <!-- main style admin css -->
    <link rel="stylesheet" href="../assets/css/admin.css">
    <!-- /main style admin css -->

    <!-- base style css -->
    <link rel="stylesheet" href="../assets/css/base.css">
    <!-- base style css -->

    <!-- google font trademark -->
    <link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@100;200;300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;562;600;700&display=swap" rel="stylesheet">
    <!-- /google font trademark-->

    <!-- google font default -->
    <link href="https://fonts.googleapis.com/css2?family=Manuale:wght@400;500;562;600;700&display=swap" rel="stylesheet">
    <!-- /google font default -->

    <style>
        a.delete-product {
            width: 100%;
            height: 100%;
            display: block;
            color: red;
            text-align: center;
        }

        a.delete-product:hover {
            opacity: 0.7;
        }

        a.delete-product svg {
            width: 26px;
            height: 26px;
        }

        div.status {
            height: 4rem;
            line-height: 4rem;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            flex-direction: row;
            margin-top: 1.2rem;
            padding: 0.6rem 0;
            width: 100%;
        }

        label.label-form.label-status {
            flex-basis: 80%;
            height: 4rem;
            line-height: 1.6rem;
            font-size: 1.8rem;
            font-weight: bold;
        }

        input.input.input-status {
            flex-basis: 20%;
            height: 3rem;
        }
    </style>
</head>
<body>
    <header class="header grid">
        <nav class="header-navbar grid wide">
            <div class="header-navbar-menu c-1">
                <input type="checkbox" hidden id="input-navbar">
                <label for="input-navbar" class="overlay"></label>
                <label for="input-navbar" class="header-navbar__mobile">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
                    </svg>
                </label>

                <nav class="navbar-menu-left">
                    <div class="navbar-menu__header">
                        <a href="../index.html" class="header-link">
                            <img src="../img/logo/logo.png" alt="">
                        </a>
                        <label for="input-navbar" class="header-close">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
                                <path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
                            </svg>
                        </label>
                    </div>
        
                    <ul class="menu-left__list">
                        <li class="menu-left__item">
                            <a href="../index.html" class="menu-left__item-link">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="home" class="svg-inline--fa fa-home fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor" d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path>
                                </svg>
                                Home
                            </a>
                        </li>
                        <li class="menu-left__item">
                            <a href="admin.html" class="menu-left__item-link">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="apple" class="svg-inline--fa fa-apple fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path fill="currentColor" d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"></path>
                                </svg>
                                Products
                            </a>
                        </li>
                        <li class="menu-left__item">
                            <a href="bills.html" class="menu-left__item-link">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-invoice-dollar" class="svg-inline--fa fa-file-invoice-dollar fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path fill="currentColor" d="M377 105L279.1 7c-4.5-4.5-10.6-7-17-7H256v128h128v-6.1c0-6.3-2.5-12.4-7-16.9zm-153 31V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zM64 72c0-4.42 3.58-8 8-8h80c4.42 0 8 3.58 8 8v16c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8V72zm0 80v-16c0-4.42 3.58-8 8-8h80c4.42 0 8 3.58 8 8v16c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8zm144 263.88V440c0 4.42-3.58 8-8 8h-16c-4.42 0-8-3.58-8-8v-24.29c-11.29-.58-22.27-4.52-31.37-11.35-3.9-2.93-4.1-8.77-.57-12.14l11.75-11.21c2.77-2.64 6.89-2.76 10.13-.73 3.87 2.42 8.26 3.72 12.82 3.72h28.11c6.5 0 11.8-5.92 11.8-13.19 0-5.95-3.61-11.19-8.77-12.73l-45-13.5c-18.59-5.58-31.58-23.42-31.58-43.39 0-24.52 19.05-44.44 42.67-45.07V232c0-4.42 3.58-8 8-8h16c4.42 0 8 3.58 8 8v24.29c11.29.58 22.27 4.51 31.37 11.35 3.9 2.93 4.1 8.77.57 12.14l-11.75 11.21c-2.77 2.64-6.89 2.76-10.13.73-3.87-2.43-8.26-3.72-12.82-3.72h-28.11c-6.5 0-11.8 5.92-11.8 13.19 0 5.95 3.61 11.19 8.77 12.73l45 13.5c18.59 5.58 31.58 23.42 31.58 43.39 0 24.53-19.05 44.44-42.67 45.07z"></path>
                                </svg>
                                Bills
                            </a>
                        </li>
                        <li class="menu-left__item">
                            <a href="users.html" class="menu-left__item-link">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="users" class="svg-inline--fa fa-users fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <path fill="currentColor" d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path>
                                </svg>
                                Users
                            </a>
                        </li>
                        <li class="menu-left__item">
                            <a href="statistical.html" class="menu-left__item-link">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chart-line" class="svg-inline--fa fa-chart-line fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M496 384H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM464 96H345.94c-21.38 0-32.09 25.85-16.97 40.97l32.4 32.4L288 242.75l-73.37-73.37c-12.5-12.5-32.76-12.5-45.25 0l-68.69 68.69c-6.25 6.25-6.25 16.38 0 22.63l22.62 22.62c6.25 6.25 16.38 6.25 22.63 0L192 237.25l73.37 73.37c12.5 12.5 32.76 12.5 45.25 0l96-96 32.4 32.4c15.12 15.12 40.97 4.41 40.97-16.97V112c.01-8.84-7.15-16-15.99-16z"></path>
                                </svg>
                                Statistical
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <ul class="navbar-author__list">
                <li class="navbar-author__item item-name">Dương Bắc Đông</li>
                <li class="navbar-author__item item-signup"><a href="" class="auth-signup">Sign up</a></li>
            </ul>
        </nav>
    </header>

    <main class="container grid">
        <section class="container-main grid wide">
            <section class="container-product row">
                <section class="main-product c-12 l-7 m-12">
                    <h4 class="product-title">Bill List</h4>
                    <table border="1" class="table-product">
                        <thead class="table-head">
                            <th class="head-title">Serial</th>
                            <th class="head-title img">Surname</th>
                            <th class="head-title">Name</th>
                            <th class="head-title">Order Date</th>
                            <th class="head-title">Price</th>
                            <th class="head-title">Status</th>
                        </thead>

                        <tbody class="table-body">
                            <tr class="table-row">
                                <td class="table-column">1</td>
                                <td class="table-column img">Dương Bắc</td>
                                <td class="table-column">Đông</td>
                                <td class="table-column">25-04-2020</td>
                                <td class="table-column price">$974</td>
                                <td class="table-column active" style="color: red">Unconfirm</td>
                            </tr>
                            <tr class="table-row">
                                <td class="table-column">2</td>
                                <td class="table-column img">Dương Bắc</td>
                                <td class="table-column">Đông</td>
                                <td class="table-column">25-04-2020</td>
                                <td class="table-column price">$974</td>
                                <td class="table-column active" style="color: blue;">Confirmed</td>
                            </tr>
                            <tr class="table-row">
                                <td class="table-column">3</td>
                                <td class="table-column img">Dương Bắc</td>
                                <td class="table-column">Đông</td>
                                <td class="table-column">25-04-2020</td>
                                <td class="table-column price">$974</td>
                                <td class="table-column active">Unconfirm</td>
                            </tr>
                            <tr class="table-row">
                                <td class="table-column">4</td>
                                <td class="table-column img">Dương Bắc</td>
                                <td class="table-column">Đông</td>
                                <td class="table-column">25-04-2020</td>
                                <td class="table-column price">$974</td>
                                <td class="table-column active">Unconfirm</td>
                            </tr>
                            <tr class="table-row">
                                <td class="table-column">5</td>
                                <td class="table-column img">Dương Bắc</td>
                                <td class="table-column">Đông</td>
                                <td class="table-column">25-04-2020</td>
                                <td class="table-column price">$974</td>
                                <td class="table-column active">Unconfirm</td>
                            </tr>
                            <tr class="table-row">
                                <td class="table-column">6</td>
                                <td class="table-column img">Dương Bắc</td>
                                <td class="table-column">Đông</td>
                                <td class="table-column">25-04-2020</td>
                                <td class="table-column price">$974</td>
                                <td class="table-column active">Unconfirm</td>
                            </tr>
                            <tr class="table-row">
                                <td class="table-column">7</td>
                                <td class="table-column img">Dương Bắc</td>
                                <td class="table-column">Đông</td>
                                <td class="table-column">25-04-2020</td>
                                <td class="table-column price">$974</td>
                                <td class="table-column active">Unconfirm</td>
                            </tr>
                            <tr class="table-row">
                                <td class="table-column">8</td>
                                <td class="table-column img">Dương Bắc</td>
                                <td class="table-column">Đông</td>
                                <td class="table-column">25-04-2020</td>
                                <td class="table-column price">$974</td>
                                <td class="table-column active">Unconfirm</td>
                            </tr>
                            <tr class="table-row">
                                <td class="table-column">9</td>
                                <td class="table-column img">Dương Bắc</td>
                                <td class="table-column">Đông</td>
                                <td class="table-column">25-04-2020</td>
                                <td class="table-column price">$974</td>
                                <td class="table-column active">Unconfirm</td>
                            </tr>
                            <tr class="table-row">
                                <td class="table-column">10</td>
                                <td class="table-column img">Dương Bắc</td>
                                <td class="table-column">Đông</td>
                                <td class="table-column">25-04-2020</td>
                                <td class="table-column price">$974</td>
                                <td class="table-column active">Unconfirm</td>
                            </tr>
                            <tr class="table-row">
                                <td class="table-column">11</td>
                                <td class="table-column img">Dương Bắc</td>
                                <td class="table-column">Đông</td>
                                <td class="table-column">25-04-2020</td>
                                <td class="table-column price">$974</td>
                                <td class="table-column active">Unconfirm</td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <div class="pagination">
                        <ul class="pagination-list">
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link active">1</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">2</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">3</a>
                            </li>
                        </ul>
                    </div>
                </section>

                <section class="main-active c-11 l-4 m-12">
                    <section class="active-search-product">
                        <h4 class="product-title">Search Bill</h4>
                        <form action="" method="" class="form-search">
                            <label for="" class="title-input">Name</label>
                            <input type="text" class="input-form" placeholder="Enter name your search...">
                            <span class="error">Bill is not found!</span>

                            <label for="" class="title-input">Order Date</label>
                            <input type="date" class="input-form" placeholder="Enter date your search...">
                            <span class="error">Bill is not found!</span>

                            <label for="" class="title-input">Status</label>
                            <select name="category-search" id="bill-search">
                                <option selected value="unconfirm">Unconfirm</option>
                                <option value="confirmed">Comfirmed</option>
                            </select>
                            <span class="error">Bill is not found!</span>

                            <button type="submit" class="btn-submit">Search</button>
                        </form>
                    </section>
                </section>
            </section>
        </section>
    </main>
</body>
</html>