
<?php  $hero = get_field('hero');?>
        <div class="contacts" id="contacts">
            <div class="wrapper">
                <div class="contacts__container">
                    <div class="contacts__top">
                        <div class="about__title">
                            Контакты
                        </div>
                    </div>
                    <div class="contacts__content">
                        <div class="contacts__left">
                                  <?php  echo $hero['address'];?>
                        </div>
                        <div class="contacts__right">
                            <a href="tel:+79150229615" class="contacts__phone"> <?php  echo $hero['telephone'];?></a>
                            <div class="contacts__soc">
                                <a href="#">
                                    <svg class="icon__fb" width="48px" height="49px">
                                        <use xlink:href="#fb"></use>
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg class="icon__inst" width="48px" height="49px">
                                        <use xlink:href="#inst"></use>
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg class="icon__youtube" width="48px" height="48px">
                                        <use xlink:href="#youtube"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="overlay">
            <div class="modal modal-news">
                <div class="modal-title"></div>
                <div class="modal-text">
                </div>
                <div class="modal-img">
                    <img src="" alt="Новости">
                </div>
                <div class="modal-date">

                </div>
                <div class="modal-close">&times;</div>
            </div>
        </div>
        <!-- Main scripts. You can replace it, but I recommend you to leave it here     -->
        <!-- <script src="  " type="text/javascript"></script> -->
<?php  wp_footer();?>

    </body>

</html>
