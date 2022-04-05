<?php

    class Product{
        private $id;
        private $prod_name;
        private $prod_price;
        private $prod_desc;
        private $prod_img;
        private $prod_quantity;

        public function __construct($id,$prod_name,$prod_desc,$prod_price,$prod_img,$prod_quantity){
            $this->id = $id;
            $this->prod_name = $prod_name;
            $this->prod_desc = $prod_desc;
            $this->prod_price = $prod_price;
            $this->prod_img = $prod_img;
            $this->prod_quantity = $prod_quantity;
        }
        public function getId(){
            return $this->id;
        }
        public function getName(){
            return $this->prod_name;
        }
        public function getPrice(){
            return $this->prod_price;
        }
        public function getDesc(){
            return $this->prod_desc;
        }
        public function getImg(){
            return $this->prod_img;
        }
        public function getQuantity(){
            return $this->prod_quantity;
        }

        public function render(){
            echo '<div class="product-card">
                    <div class="product-card__img">
                        <img src='.$this->prod_img.' alt="product">
                    </div>
                    <div class="product-card__details">
                        <div class="product-desc">
                            <div class="product-desc__name">
                                '.$this->prod_name.'
                            </div>
                            <div class="product-desc__price">
                                '."$".$this->prod_price.'
                            </div>
                        </div>
                        <button type="button" name="cart">
                            '."Add To Cart".'
                        </button>
                    </div> 
                </div>';
        }

    }

?>