<?php

require('../Model/model.php');

    function products(){

        $query = getMyProducts();

        require('../View/ProductsView.php');
    }

    function mySelf(){

        $query = getMyself();

        require('../View/MyselfView.php');
    }

    function adresses(){

        $query = getMyAdresses();

        require('../View/AdressesView.php');

    }

    function orders(){

        $query = getMyOrders();

        require('../View/OrdersView.php');
    }

    function payOptions(){

        require('../View/PayOptionsView.php');
    }

    function promoCode(){

        require('../View/PromoCodeView.php');
    }
?>