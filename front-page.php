<?php  get_header();?>
        <div class="first">
            <div class="swiper-container first-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="m-bg-cont first__bg">
                            <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/first-bg.jpg">
                        </div>

                        <!-- place for advenced custom fields php -->
<?php  $hero = get_field('hero');?>

                        <div class="wrapper">
                            <div class="first__container">
                                <div class="first__title">
                                    <?php  echo $hero['main_title'];?>
                                </div>
                                <a href="mailto:info.agrex168@gmail.com" class="first__button">

                                <?php  echo $hero['link_text'];?>

                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="m-bg-cont first__bg">
                            <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/first-bg.jpg">
                        </div>
                        <div class="wrapper">
                            <div class="first__container">
                                <div class="first__title">
                                    Опыт трейдерства
                                </div>
                                <div class="first__button">
                                    Написать нам
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="m-bg-cont first__bg">
                            <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/first-bg.jpg">
                        </div>
                        <div class="wrapper">
                            <div class="first__container">
                                <div class="first__title">
                                    Опыт трейдерства
                                </div>
                                <div class="first__button">
                                    Написать нам
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-button slider-button-prev">

                    <svg class="icon__back" width="443.52px" height="443.52px">
                        <use xlink:href="#back"></use>
                    </svg>

                </div>
                <div class="slider-button slider-button-next">

                    <svg class="icon__back" width="443.52px" height="443.52px">
                        <use xlink:href="#back"></use>
                    </svg>

                </div>
            </div>
        </div>

<!-- area for php code -->
              <?php  $subhero = get_field('subhero'); ?>

        <div class="about more-content" id="about">
            <div class="wrapper">
                <div class="about__container">
                    <div class="about__title">
                        <?php  echo $subhero['main_title'];?>
                    </div>
                    <div class="about__content">
                        <div class="about__left">
                            <!--  <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/about-img.jpg"> -->
                                  <?php  echo $subhero['image'];?>
<img data-src="<?php  echo bloginfo('url');?>/wp-content/uploads/2020/10/arch.png">
                        </div>
                        <div class="about__right">
                            <p>
                                 <?php  echo $subhero['main_text'];?>
                            </p>

                            <div class="about__right-button more-button">
                                Подробнее
                                <svg class="icon__next" width="36px" height="36px">
                                    <use xlink:href="#next"></use>
                                </svg>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="more-text">
                <div class="wrapper">
                    <div class="more-text-container">
                        <p>
                             <?php  echo $subhero['sub_text'];?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="about" id="production">
            <div class="wrapper">
                <div class="about__container">
                    <div class="about__title">
                        ПРОДУКЦИЯ
                    </div>
                    <div class="prod">
                        <div class="prod__items">
                            <div class="prod__item">
                                <div class="prod__img m-bg-cont">


                                </div>
                                <div class="prod__item-content">
                                    <div class="prod__item-title">
                                        mega
                                    </div>
                                    <div class="prod__item-button">


                                        <svg class="icon__prod-button" width="37px" height="37px">
                                            <use xlink:href="#prod-button"></use>
                                        </svg>

                                    </div>
                                </div>
                                <div class="prod__item-images">
                                    <div class="prod__tab-image">
                                        <!--  <img data-src="<?php  bloginfo('template_directory');?>/static/arch.png">  -->
                                    </div>
                                     <div class="prod__tab-image">
                                        <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prod-gal-image.jpg">
                                    </div>
                                    <div class="prod__tab-image">
                                        <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prod-gal-image.jpg">
                                    </div>
                                    <div class="prod__tab-image">
                                        <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prod-gal-image.jpg">
                                    </div>
                                    <div class="prod__tab-image">
                                        <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prod-gal-image.jpg">
                                    </div>
                                    <div class="prod__tab-image">
                                        <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prod-gal-image.jpg">
                                    </div>
                                </div>
                                <div class="prod__item-desc">
                                    <h3>

                                        Feets

                                </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi esse, reiciendis vel sequi error autem omnis iste veritatis temporibus repellat, doloremque itaque? Sint, suscipit qui, consequatur perferendis nam fugiat assumenda ipsa repellat placeat illo
                                        debitis non, molestiae eius temporibus unde at blanditiis magnam enim praesentium. Corporis in omnis ea cupiditate reprehenderit molestias tempora eligendi, voluptatibus labore vitae ducimus velit pariatur illum
                                        id, nihil molestiae suscipit vel modi ipsum facilis eum quos illo aspernatur! Laudantium sed quo ducimus beatae aperiam, ipsam, cupiditate deleniti vitae eaque, error cum totam assumenda provident iusto dolorem
                                        facere. A iste nesciunt qui eos delectus. Minima, distinctio?
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi esse, reiciendis vel sequi error autem omnis iste veritatis temporibus repellat, doloremque itaque? Sint, suscipit qui, consequatur perferendis nam fugiat assumenda ipsa repellat placeat illo
                                        debitis non, molestiae eius temporibus unde at blanditiis magnam enim praesentium. Corporis in omnis ea cupiditate reprehenderit molestias tempora eligendi, voluptatibus labore vitae ducimus velit pariatur illum
                                        id, nihil molestiae suscipit vel modi ipsum facilis eum quos illo aspernatur! Laudantium sed quo ducimus beatae aperiam, ipsam, cupiditate deleniti vitae eaque, error cum totam assumenda provident iusto dolorem
                                        facere. A iste nesciunt qui eos delectus. Minima, distinctio?
                                    </p>
                                </div>
                            </div>
                            <div class="prod__item">
                                <div class="prod__img m-bg-cont">
                                    <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prod-1.jpg">
                                </div>
                                <div class="prod__item-content">
                                    <div class="prod__item-title">
                                        mega
                                    </div>
                                    <div class="prod__item-button">

                                        <svg class="icon__prod-button" width="37px" height="37px">
                                            <use xlink:href="#prod-button"></use>
                                        </svg>

                                    </div>
                                </div>
                                <div class="prod__item-images">
                                    <div class="prod__tab-image">
                                        <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prod-gal-image.jpg">
                                    </div>
                                    <div class="prod__tab-image">
                                        <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prod-gal-image.jpg">
                                    </div>
                                    <div class="prod__tab-image">
                                        <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prod-gal-image.jpg">
                                    </div>
                                </div>
                                <div class="prod__item-desc">
                                    <h3>

                                    Feets 2

                                </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi esse, reiciendis vel sequi error autem omnis iste veritatis temporibus repellat, doloremque itaque? Sint, suscipit qui, consequatur perferendis nam fugiat assumenda ipsa repellat placeat illo
                                        debitis non, molestiae eius temporibus unde at blanditiis magnam enim praesentium. Corporis in omnis ea cupiditate reprehenderit molestias tempora eligendi, voluptatibus labore vitae ducimus velit pariatur illum
                                        id, nihil molestiae suscipit vel modi ipsum facilis eum quos illo aspernatur! Laudantium sed quo ducimus beatae aperiam, ipsam, cupiditate deleniti vitae eaque, error cum totam assumenda provident iusto dolorem
                                        facere. A iste nesciunt qui eos delectus. Minima, distinctio?
                                    </p>
                                </div>
                            </div>
                            <div class="prod__item">
                                <div class="prod__img m-bg-cont">
                                    <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prod-1.jpg">
                                </div>
                                <div class="prod__item-content">
                                    <div class="prod__item-title">
                                        Feets
                                    </div>
                                    <div class="prod__item-button">

                                        <svg class="icon__prod-button" width="37px" height="37px">
                                            <use xlink:href="#prod-button"></use>
                                        </svg>

                                    </div>
                                </div>
                                <div class="prod__item-images">
                                    <div class="prod__tab-image">
                                        <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prod-gal-image.jpg">
                                    </div>
                                    <div class="prod__tab-image">
                                        <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prod-gal-image.jpg">
                                    </div>
                                </div>
                                <div class="prod__item-desc">
                                    <h3>

                                    Feets 3

                                </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi esse, reiciendis vel sequi error autem omnis iste veritatis temporibus repellat, doloremque itaque? Sint, suscipit qui, consequatur perferendis nam fugiat assumenda ipsa repellat placeat illo
                                        debitis non, molestiae eius temporibus unde at blanditiis magnam enim praesentium. Corporis in omnis ea cupiditate reprehenderit molestias tempora eligendi, voluptatibus labore vitae ducimus velit pariatur illum
                                        id, nihil molestiae suscipit vel modi ipsum facilis eum quos illo aspernatur! Laudantium sed quo ducimus beatae aperiam, ipsam, cupiditate deleniti vitae eaque, error cum totam assumenda provident iusto dolorem
                                        facere. A iste nesciunt qui eos delectus. Minima, distinctio?
                                    </p>
                                </div>
                            </div>
                            <div class="prod__item">
                                <div class="prod__img m-bg-cont">
                                    <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prod-1.jpg">
                                </div>
                                <div class="prod__item-content">
                                    <div class="prod__item-title">
                                        Feets
                                    </div>
                                    <div class="prod__item-button">

                                        <svg class="icon__prod-button" width="37px" height="37px">
                                            <use xlink:href="#prod-button"></use>
                                        </svg>

                                    </div>
                                </div>
                                <div class="prod__item-images">
                                    <div class="prod__tab-image">
                                        <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prod-gal-image.jpg">
                                    </div>
                                </div>
                                <div class="prod__item-desc">
                                    <h3>

                                    Feets 4

                                </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi esse, reiciendis vel sequi error autem omnis iste veritatis temporibus repellat, doloremque itaque? Sint, suscipit qui, consequatur perferendis nam fugiat assumenda ipsa repellat placeat illo
                                        debitis non, molestiae eius temporibus unde at blanditiis magnam enim praesentium. Corporis in omnis ea cupiditate reprehenderit molestias tempora eligendi, voluptatibus labore vitae ducimus velit pariatur illum
                                        id, nihil molestiae suscipit vel modi ipsum facilis eum quos illo aspernatur! Laudantium sed quo ducimus beatae aperiam, ipsam, cupiditate deleniti vitae eaque, error cum totam assumenda provident iusto dolorem
                                        facere. A iste nesciunt qui eos delectus. Minima, distinctio?
                                    </p>
                                </div>
                            </div>

                            <div class="prod__tab-container">
                                <div class="prod__tab">
                                    <div class="prod__tab-left">
                                    </div>
                                    <div class="prod__tab-right">
                                        <div class="prod__text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prod__items">
                            <div class="prod__item">
                                <div class="prod__img m-bg-cont">
                                    <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prod-1.jpg">
                                </div>
                                <div class="prod__item-content">
                                    <div class="prod__item-title">
                                        Feets
                                    </div>
                                    <div class="prod__item-button">

                                        <svg class="icon__prod-button" width="37px" height="37px">
                                            <use xlink:href="#prod-button"></use>
                                        </svg>

                                    </div>
                                </div>
                                <div class="prod__item-images">
                                    <div class="prod__tab-image">
                                        <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prod-gal-image.jpg">
                                    </div>
                                </div>
                                <div class="prod__item-desc">
                                    <h3>

                                    Feets 5

                                </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi esse, reiciendis vel sequi error autem omnis iste veritatis temporibus repellat, doloremque itaque? Sint, suscipit qui, consequatur perferendis nam fugiat assumenda ipsa repellat placeat illo
                                        debitis non, molestiae eius temporibus unde at blanditiis magnam enim praesentium. Corporis in omnis ea cupiditate reprehenderit molestias tempora eligendi, voluptatibus labore vitae ducimus velit pariatur illum
                                        id, nihil molestiae suscipit vel modi ipsum facilis eum quos illo aspernatur! Laudantium sed quo ducimus beatae aperiam, ipsam, cupiditate deleniti vitae eaque, error cum totam assumenda provident iusto dolorem
                                        facere. A iste nesciunt qui eos delectus. Minima, distinctio?
                                    </p>
                                </div>
                            </div>
                            <div class="prod__item">
                                <div class="prod__img m-bg-cont">
                                    <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prod-1.jpg">
                                </div>
                                <div class="prod__item-content">
                                    <div class="prod__item-title">
                                        Feets
                                    </div>
                                    <div class="prod__item-button">

                                        <svg class="icon__prod-button" width="37px" height="37px">
                                            <use xlink:href="#prod-button"></use>
                                        </svg>

                                    </div>
                                </div>
                                <div class="prod__item-images">
                                    <div class="prod__tab-image">
                                        <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prod-gal-image.jpg">
                                    </div>
                                </div>
                                <div class="prod__item-desc">
                                    <h3>

                                    Feets 6

                                </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi esse, reiciendis vel sequi error autem omnis iste veritatis temporibus repellat, doloremque itaque? Sint, suscipit qui, consequatur perferendis nam fugiat assumenda ipsa repellat placeat illo
                                        debitis non, molestiae eius temporibus unde at blanditiis magnam enim praesentium. Corporis in omnis ea cupiditate reprehenderit molestias tempora eligendi, voluptatibus labore vitae ducimus velit pariatur illum
                                        id, nihil molestiae suscipit vel modi ipsum facilis eum quos illo aspernatur! Laudantium sed quo ducimus beatae aperiam, ipsam, cupiditate deleniti vitae eaque, error cum totam assumenda provident iusto dolorem
                                        facere. A iste nesciunt qui eos delectus. Minima, distinctio?
                                    </p>
                                </div>
                            </div>
                            <div class="prod__item">
                                <div class="prod__img m-bg-cont">
                                    <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prod-1.jpg">
                                </div>
                                <div class="prod__item-content">
                                    <div class="prod__item-title">
                                        Feets
                                    </div>
                                    <div class="prod__item-button">

                                        <svg class="icon__prod-button" width="37px" height="37px">
                                            <use xlink:href="#prod-button"></use>
                                        </svg>

                                    </div>
                                </div>
                                <div class="prod__item-images">
                                    <div class="prod__tab-image">
                                        <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prod-gal-image.jpg">
                                    </div>
                                </div>
                                <div class="prod__item-desc">
                                    <h3>

                                    Feets 7

                                </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi esse, reiciendis vel sequi error autem omnis iste veritatis temporibus repellat, doloremque itaque? Sint, suscipit qui, consequatur perferendis nam fugiat assumenda ipsa repellat placeat illo
                                        debitis non, molestiae eius temporibus unde at blanditiis magnam enim praesentium. Corporis in omnis ea cupiditate reprehenderit molestias tempora eligendi, voluptatibus labore vitae ducimus velit pariatur illum
                                        id, nihil molestiae suscipit vel modi ipsum facilis eum quos illo aspernatur! Laudantium sed quo ducimus beatae aperiam, ipsam, cupiditate deleniti vitae eaque, error cum totam assumenda provident iusto dolorem
                                        facere. A iste nesciunt qui eos delectus. Minima, distinctio?
                                    </p>
                                </div>
                            </div>
                            <div class="prod__item">
                                <div class="prod__img m-bg-cont">
                                    <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prod-1.jpg">
                                </div>
                                <div class="prod__item-content">
                                    <div class="prod__item-title">
                                        Feets
                                    </div>
                                    <div class="prod__item-button">

                                        <svg class="icon__prod-button" width="37px" height="37px">
                                            <use xlink:href="#prod-button"></use>
                                        </svg>

                                    </div>
                                </div>
                                <div class="prod__item-images">
                                    <div class="prod__tab-image">
                                        <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prod-gal-image.jpg">
                                    </div>
                                </div>
                                <div class="prod__item-desc">
                                    <h3>

                                    Feets 8

                                </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi esse, reiciendis vel sequi error autem omnis iste veritatis temporibus repellat, doloremque itaque? Sint, suscipit qui, consequatur perferendis nam fugiat assumenda ipsa repellat placeat illo
                                        debitis non, molestiae eius temporibus unde at blanditiis magnam enim praesentium. Corporis in omnis ea cupiditate reprehenderit molestias tempora eligendi, voluptatibus labore vitae ducimus velit pariatur illum
                                        id, nihil molestiae suscipit vel modi ipsum facilis eum quos illo aspernatur! Laudantium sed quo ducimus beatae aperiam, ipsam, cupiditate deleniti vitae eaque, error cum totam assumenda provident iusto dolorem
                                        facere. A iste nesciunt qui eos delectus. Minima, distinctio?
                                    </p>
                                </div>
                            </div>

                            <div class="prod__tab-container">
                                <div class="prod__tab">
                                    <div class="prod__tab-left">

                                    </div>
                                    <div class="prod__tab-right">
                                        <div class="prod__text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about" id="brand">
            <div class="wrapper">
                <div class="about__container">
                    <div class="about__title">
                        Наш бренд
                    </div>
                </div>
            </div>
        </div>

        <div class="more-content">
            <div class="brand">
                <div class="brand__bg m-bg-cont">
                    <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prof-bg.jpg">
                </div>
                <div class="wrapper">
                    <div class="brand__container">
                        <div class="brand__right">
                            <div class="about__right">
                                <p>
                                    <b>ООО «Агроэкспорт 168»</b> является динамично развивающейся компанией. Имея давние партнерские отношения с рядом крупнейших российских производителей мяса птицы и свинины, ООО «Агроэкспорт 168» участвует в совместных
                                    с ними проектах на площадках в различных регионах РФ. Мы активно презентуем продукцию на азиатском рынке. Для этого разработан и продвигается собственный бренд компании AE-168. Компания представляет широкий ассортимент
                                    и гарантированно высокое качество, выпускаемой под нашим брендом продукции.
                                </p>
                                <div class="about__right-button more-button">
                                    Подробнее
                                    <svg class="icon__next" width="36px" height="36px">
                                        <use xlink:href="#next"></use>
                                    </svg>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-text">
                <div class="wrapper">
                    <div class="more-text-container">
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod exercitationem totam dolor sit similique omnis iste laborum, praesentium sed error tenetur doloremque beatae nostrum reprehenderit aperiam veniam itaque quaerat modi necessitatibus! Quo accusantium
                            repellat est similique error ab eos tempore voluptatibus quibusdam commodi incidunt nisi nihil quasi, consequuntur, sed expedita, repudiandae veniam nam ipsa iste suscipit? Vero nemo dignissimos nobis blanditiis tempore est
                            esse quasi! Velit aliquid iste minus aliquam qui accusamus dicta corrupti nulla rem quae deserunt, numquam, omnis possimus dolorum cumque quisquam similique optio. Sequi consectetur, praesentium, labore modi corrupti porro
                            numquam impedit harum incidunt ut iste itaque eum maiores reprehenderit laboriosam accusamus. Vitae nam, soluta dolor molestiae ullam deleniti laboriosam, suscipit asperiores dolorum illum voluptate temporibus nemo quae quod
                            ab. Quos voluptates ut at voluptatum facilis quo accusantium odio rerum nobis rem? Provident quo doloremque nam libero assumenda? Modi iusto nobis excepturi ab voluptates. Beatae numquam cupiditate consectetur quo. Voluptatibus
                            cupiditate sapiente doloremque, voluptatum quod voluptates quas temporibus quisquam esse aspernatur iste cumque eveniet omnis repudiandae dolor qui recusandae sed labore hic exercitationem repellendus? Doloremque laboriosam
                            sapiente iure voluptates cumque est architecto maiores repellendus, eveniet fuga soluta, maxime repudiandae voluptatem quis voluptatibus consequuntur asperiores necessitatibus porro vero!
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="about" id="clients">
            <div class="wrapper">
                <div class="about__container">
                    <div class="about__title">
                        Клиентам
                    </div>
                    <div class="about__right">
                        <p>
                            <span>Lorem ipsum dolor sit</span> amet consectetur adipisicing elit. Mollitia, sequi sed porro ex quae dolorem velit modi vitae iusto vel alias dignissimos debitis incidunt nobis repellat culpa doloribus impedit aspernatur
                            dolore, deserunt maiores? Dolore doloribus natus illum aspernatur eveniet voluptas minima consequatur in, dolorem blanditiis quam laudantium! Ipsam cum non in, tempore consectetur porro laboriosam nostrum alias laudantium repudiandae
                            dolorum iusto corrupti ducimus dolores vero adipisci nobis perspiciatis mollitia quasi natus libero sunt aut! Sunt eaque dolorem, dignissimos impedit officia nostrum doloremque, placeat minima ducimus animi, eligendi optio
                            labore at ipsa maxime quae veritatis adipisci. Perferendis officia eveniet explicabo iure?
                        </p>
                    </div>

                    <div class="client">
                        <div class="client__item">
                            <div class="client__img">

                                <svg class="icon__client-1" width="103px" height="69px">
                                    <use xlink:href="#client-1"></use>
                                </svg>

                            </div>
                            <div class="client__text">
                                Гарантия высокого качества
                            </div>
                        </div>
                        <div class="client__item">
                            <div class="client__img">

                                <svg class="icon__client-2" width="79px" height="72px">
                                    <use xlink:href="#client-2"></use>
                                </svg>

                            </div>
                            <div class="client__text">
                                Гарантия высокого качества
                            </div>
                        </div>
                        <div class="client__item">
                            <div class="client__img">

                                <svg class="icon__client-3" width="88px" height="88px">
                                    <use xlink:href="#client-3"></use>
                                </svg>

                            </div>
                            <div class="client__text">
                                Гарантия высокого качества
                            </div>
                        </div>
                        <div class="client__item">
                            <div class="client__img">

                                <svg class="icon__client-4" width="80px" height="89px">
                                    <use xlink:href="#client-4"></use>
                                </svg>

                            </div>
                            <div class="client__text">
                                Гарантия высокого качества
                            </div>
                        </div>
                        <div class="client__item">
                            <div class="client__img">

                                <svg class="icon__client-4" width="80px" height="89px">
                                    <use xlink:href="#client-4"></use>
                                </svg>

                            </div>
                            <div class="client__text">
                                Гарантия высокого качества
                            </div>
                        </div>
                        <div class="client__item">
                            <div class="client__img">

                                <svg class="icon__client-4" width="80px" height="89px">
                                    <use xlink:href="#client-4"></use>
                                </svg>

                            </div>
                            <div class="client__text">
                                Гарантия высокого качества
                            </div>
                        </div>
                        <div class="client__item">
                            <div class="client__img">

                                <svg class="icon__client-4" width="80px" height="89px">
                                    <use xlink:href="#client-4"></use>
                                </svg>

                            </div>
                            <div class="client__text">
                                Гарантия высокого качества
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about" id="partners">
            <div class="wrapper">
                <div class="about__container">
                    <div class="about__title">
                        Партнерство
                    </div>

                    <div class="prtnr">
                        <div class="prtnr__item">
                            <div class="prtnr__item-img">
                                <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prtnr-1.png">
                            </div>
                            <div class="prtnr__title">
                                Выгодная цена закупки
                            </div>
                            <div class="prtnr__desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt natus labore atque magni aspernatur. Delectus accusamus ipsam dolorum deleniti suscipit!
                            </div>
                        </div>
                        <div class="prtnr__item">
                            <div class="prtnr__item-img">
                                <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prtnr-2.png">
                            </div>
                            <div class="prtnr__title">
                                Экспорт под ключ
                            </div>
                            <div class="prtnr__desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt natus labore atque magni aspernatur. Delectus accusamus ipsam dolorum deleniti suscipit!
                            </div>
                        </div>
                        <div class="prtnr__item">
                            <div class="prtnr__item-img">
                                <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prtnr-3.png">
                            </div>
                            <div class="prtnr__title">
                                Умное партнерство
                            </div>
                            <div class="prtnr__desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt natus labore atque magni aspernatur. Delectus accusamus ipsam dolorum deleniti suscipit!
                            </div>
                        </div>
                        <div class="prtnr__item">
                            <div class="prtnr__item-img">
                                <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/prtnr-3.png">
                            </div>
                            <div class="prtnr__title">
                                Умное партнерство
                            </div>
                            <div class="prtnr__desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt natus labore atque magni aspernatur. Delectus accusamus ipsam dolorum deleniti suscipit!
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="z1">
            <div class="wrapper">
                <div class="z1__container">
                    <div class="z1__item">
                        <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/z-1.jpg">
                    </div>
                    <div class="z1__item">
                        <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/z-2.png">
                    </div>
                    <div class="z1__item">
                        <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/z-3.png">
                    </div>
                    <div class="z1__item">
                        <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/z-4.png">
                    </div>
                    <div class="z1__item">
                        <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/z-5.png">
                    </div>
                    <div class="z1__item">
                        <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/z-5.png">
                    </div>
                </div>
            </div>
        </div>

        <div class="news more-content" id="news">
            <div class="news__top">
                <div class="m-bg-cont">
                    <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/news-bg.jpg">
                </div>
                <div class="about__title">
                    Новости
                </div>
            </div>
            <div class="wrapper">
                <div class="swiper-container news__container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide news__item">
                            <div class="news__content">
                                <div class="m-bg-cont">
                                    <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/news-1.jpg">
                                </div>
                            </div>
                            <div class="news__item-top">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, repellendus.
                            </div>
                            <div class="news__item-desc">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates iste soluta dignissimos hic dolor repellendus perferendis esse. Velit, reprehenderit, consequatur at nobis provident sit fugiat laudantium a est voluptatibus, aspernatur impedit. Dignissimos
                                aut debitis, deserunt ipsam veniam dolorum doloremque aliquid a eius optio. Minima natus saepe sint rerum perspiciatis, veritatis non odit animi nobis velit ratione dolores sapiente quisquam maxime totam nesciunt quod quam
                                cum? Adipisci nesciunt cum distinctio, soluta, nulla iusto, consequatur expedita quis quae maxime hic aut suscipit ex quibusdam dolor ab voluptate veniam vero? Autem inventore accusantium laborum mollitia corrupti, distinctio
                                odio neque exercitationem laboriosam beatae pariatur.
                            </div>
                            <div class="news__item-date">07.09.2020 - сегодня</div>
                        </div>
                        <div class="swiper-slide news__item">
                            <div class="news__content">
                                <div class="m-bg-cont">
                                    <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/news-2.jpg">
                                </div>
                            </div>
                            <div class="news__item-top">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, repellendus.
                            </div>
                            <div class="news__item-desc">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates iste soluta dignissimos hic dolor repellendus perferendis esse. Velit, reprehenderit, consequatur at nobis provident sit fugiat laudantium a est voluptatibus, aspernatur impedit. Dignissimos
                                aut debitis, deserunt ipsam veniam dolorum doloremque aliquid a eius optio. Minima natus saepe sint rerum perspiciatis, veritatis non odit animi nobis velit ratione dolores sapiente quisquam maxime totam nesciunt quod quam
                                cum? Adipisci nesciunt cum distinctio, soluta, nulla iusto, consequatur expedita quis quae maxime hic aut suscipit ex quibusdam dolor ab voluptate veniam vero? Autem inventore accusantium laborum mollitia corrupti, distinctio
                                odio neque exercitationem laboriosam beatae pariatur.
                            </div>
                            <div class="news__item-date">07.09.2020 - сегодня</div>
                        </div>
                        <div class="swiper-slide news__item">
                            <div class="news__content">
                                <div class="m-bg-cont">
                                    <img data-src="<?php  bloginfo('template_directory');?>/static/img/content/news-2.jpg">
                                </div>
                            </div>
                            <div class="news__item-top">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, repellendus.
                            </div>
                            <div class="news__item-desc">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates iste soluta dignissimos hic dolor repellendus perferendis esse. Velit, reprehenderit, consequatur at nobis provident sit fugiat laudantium a est voluptatibus, aspernatur impedit. Dignissimos
                                aut debitis, deserunt ipsam veniam dolorum doloremque aliquid a eius optio. Minima natus saepe sint rerum perspiciatis, veritatis non odit animi nobis velit ratione dolores sapiente quisquam maxime totam nesciunt quod quam
                                cum? Adipisci nesciunt cum distinctio, soluta, nulla iusto, consequatur expedita quis quae maxime hic aut suscipit ex quibusdam dolor ab voluptate veniam vero? Autem inventore accusantium laborum mollitia corrupti, distinctio
                                odio neque exercitationem laboriosam beatae pariatur.
                            </div>
                            <div class="news__item-date">07.09.2020 - сегодня</div>
                        </div>
                    </div>
                </div>

                <div class="slider-button news-prev">

                    <svg class="icon__back" width="443.52px" height="443.52px">
                        <use xlink:href="#back"></use>
                    </svg>

                </div>
                <div class="slider-button news-next">

                    <svg class="icon__back" width="443.52px" height="443.52px">
                        <use xlink:href="#back"></use>
                    </svg>

                </div>
                <div class="news__pagination"></div>
            </div>
            <div class="more-text">
                <div class="wrapper">
                    <div class="more-text-container">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod exercitationem totam dolor sit similique omnis iste laborum, praesentium sed error tenetur doloremque beatae nostrum reprehenderit aperiam veniam itaque quaerat modi necessitatibus! Quo accusantium
                        repellat est similique error ab eos tempore voluptatibus quibusdam commodi incidunt nisi nihil quasi, consequuntur, sed expedita, repudiandae veniam nam ipsa iste suscipit? Vero nemo dignissimos nobis blanditiis tempore est esse
                        quasi! Velit aliquid iste minus aliquam qui accusamus dicta corrupti nulla rem quae deserunt, numquam, omnis possimus dolorum cumque quisquam similique optio. Sequi consectetur, praesentium, labore modi corrupti porro numquam impedit
                        harum incidunt ut iste itaque eum maiores reprehenderit laboriosam accusamus. Vitae nam, soluta dolor molestiae ullam deleniti laboriosam, suscipit asperiores dolorum illum voluptate temporibus nemo quae quod ab. Quos voluptates
                        ut at voluptatum facilis quo accusantium odio rerum nobis rem? Provident quo doloremque nam libero assumenda? Modi iusto nobis excepturi ab voluptates. Beatae numquam cupiditate consectetur quo. Voluptatibus cupiditate sapiente
                        doloremque, voluptatum quod voluptates quas temporibus quisquam esse aspernatur iste cumque eveniet omnis repudiandae dolor qui recusandae sed labore hic exercitationem repellendus? Doloremque laboriosam sapiente iure voluptates
                        cumque est architecto maiores repellendus, eveniet fuga soluta, maxime repudiandae voluptatem quis voluptatibus consequuntur asperiores necessitatibus porro vero!
                    </div>
                </div>
            </div>
        </div>

        <img src="http://localhost/wordpress/wp-content/themes/task/static/img/arch.png">


<?php  get_footer();?>
