<section class="slideshow">
    <div class="slideshow__container">
        <?php
            $slideShowData = '{ 
                "slide1":{
                    "img": "../images/beds/bed_1.png",
                    "text": "20% off"
                },
                "slide2":{
                    "img": "../images/beds/bed_2.png",
                    "text": "SALE"
                },
                "slide3":{
                    "img": "../images/beds/bed_3.png",
                    "text": "Free Home Delivery"
                },
                "slide4":{
                    "img": "../images/beds/bed_4.png",
                    "text": "Download our App"
                }
            }';
            $slidesArray = json_decode($slideShowData);
            $slideShowImgs = ["../images/beds/bed_1.png","../images/beds/bed_2.png","../images/beds/bed_3.png","../images/beds/bed_4.png"];
            foreach($slidesArray as $slides){
                echo '<div class="slide">
                        <img src='.$slides->img.' alt="product">
                        <div class="desc-text">
                            '.$slides->text.'
                        </div>
                    </div>';
            }
        ?>
    </div>
</section>