<?php
$images = [
    "examples\\1\\1.jpg",
    "examples/1/2.jpg",
    "examples/1/3.jpg",
    "examples/2/1.jpg",
    "examples/2/2.jpg",
    "examples/2/3.jpg",
    "examples/2/4.jpg",
    "examples/2/5.jpg",
    "examples/2/6.jpg",
    "examples/2/7.jpg",

    "examples/pasha/door.jpg",
    "examples/pasha/door1.jpg",
    "examples/pasha/door2.jpg",
    "examples/pasha/door3.jpg",
    "examples/pasha/door4.jpg",
    "examples/pasha/door5.jpg",
    "examples/pasha/door6.jpg",
    "examples/pasha/door7.jpg",
    "examples/pasha/door8.jpg",
    "examples/pasha/door9.jpg",
    "examples/pasha/door10.jpg",

    "examples/pasha/window.jpg",
    "examples/pasha/window1.jpg",
    "examples/pasha/window2.jpg",
    "examples/pasha/window3.jpg",

    "examples/pasha/balcony.jpg",
    "examples/pasha/balcony1.jpg",
    "examples/pasha/balcony2.jpg",
];
?>

<section class="actions-carousel js-actions-carousel">
    <h2 class="h2 section-header">Примеры наших работ</h2>
    <div class="inner-container full-width actions-carousel__container js-certif-slider">
        <div class="swiper swiper-action js-actions-carousel-swiper actions-carousel__content swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="swiper-wrapper actions-carousel__wrapper"
                 style="transform: translate3d(0px, 0px, 0px);">

                <?php foreach ($images as $index => $image): ?>
                    <div class="swiper-slide actions-carousel__item swiper-slide-next">
                        <div class="simple-card simple-card--article">
                            <div class="simple-card__img main-portfolio-img">
                                <a href="#" data-certif-modal="#modal-zoom-porfolio-<?= $index ?>">
                                    <img alt="1" src="<?= IMG ?><?= $image ?>" class="img action-slide-img lazyload"
                                         width="400" height="200">
                                </a>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>

        <div class="arrow-box arrow-box--right arrow-box--blue js-arrow-right">
            <div class="arrow-ico"></div>
        </div>
        <div class="arrow-box arrow-box--left arrow-box--blue js-arrow-left swiper-button-disabled">
            <div class="arrow-ico arrow-ico--left"></div>
        </div>
    </div>

    <?php foreach ($images as $index => $image): ?>
        <div class="hystmodal" id="modal-zoom-porfolio-<?= $index ?>" aria-hidden="true">
            <div class="hystmodal__wrap">
                <div class="certif-slider__modal-slider swiper js-certif-slider-window">
                    <div class="certif-slider__modal-content swiper-wrapper">
                        <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"
                             aria-modal="true">
                            <div class="certif-slider__zoom-img">
                                <img alt="" class="img lazyload" data-src="<?= IMG ?><?= $image ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</section>




<!--<div class="hystmodal" id="modal-zoom-porfolio-0" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img">-->
<!--                        <img alt="" class="img lazyload" data-src="--><?php //= IMG ?><!--examples/1/1.jpg">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="hystmodal" id="modal-zoom-porfolio-1" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img">-->
<!--                        <img alt="" class="img lazyload" data-src="examples/pasha/balcony.jpg">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<div class="hystmodal" id="modal-zoom-porfolio-2" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!---->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img"><img alt="" class="img lazyload"-->
<!--                                                              data-src="/upload/resize_cache/webp/iblock/039/65wzmd4ukqb53rbxstmbfq8h4j9itos8.webp">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<!--<div class="hystmodal" id="modal-zoom-porfolio-3" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!---->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img"><img alt="" class="img lazyload"-->
<!--                                                              data-src="/upload/resize_cache/webp/iblock/9d9/l9wxdn25rfyah2aqdp1cmd65c48gcf9o.webp">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<!--<div class="hystmodal" id="modal-zoom-porfolio-4" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!---->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img"><img alt="" class="img lazyload"-->
<!--                                                              data-src="/upload/resize_cache/webp/iblock/d7e/6n0adejmszwky063adkjscsqnoigaynm.webp">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<!--<div class="hystmodal" id="modal-zoom-porfolio-5" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!---->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img"><img alt="" class="img lazyload"-->
<!--                                                              data-src="/upload/resize_cache/webp/iblock/e99/44cg66423ny8m0reg3diq2c92vqsnrko.webp">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<!--<div class="hystmodal" id="modal-zoom-porfolio-6" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!---->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img"><img alt="" class="img lazyload"-->
<!--                                                              data-src="/upload/resize_cache/webp/iblock/12e/f9jjnxsh78c1naa0j2zquaduamm4eo6z.webp">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<!--<div class="hystmodal" id="modal-zoom-porfolio-7" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!---->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img"><img alt="" class="img lazyload"-->
<!--                                                              data-src="/upload/resize_cache/webp/iblock/e7e/8eoln92jyw9ql9b7hkrw0nhsu6wp7z9e.webp">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<!--<div class="hystmodal" id="modal-zoom-porfolio-8" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!---->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img"><img alt="" class="img lazyload"-->
<!--                                                              data-src="/upload/resize_cache/webp/iblock/fb8/zl5rn9s5zm5h7r2tziag4xlnzmhxwus6.webp">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<!--<div class="hystmodal" id="modal-zoom-porfolio-9" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!---->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img"><img alt="" class="img lazyload"-->
<!--                                                              data-src="/upload/resize_cache/webp/iblock/2b1/da2af0jo0rolnig3fmkpllitv3bw61sq.webp">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<!--<div class="hystmodal" id="modal-zoom-porfolio-10" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!---->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img"><img alt="" class="img lazyload"-->
<!--                                                              data-src="/upload/resize_cache/webp/iblock/fbd/gcqrj01zu6ltqs1axac97e8mihlsz875.webp">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<!--<div class="hystmodal" id="modal-zoom-porfolio-11" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!---->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img"><img alt="" class="img lazyload"-->
<!--                                                              data-src="/upload/resize_cache/webp/iblock/c3c/4b021ifiakbrq7gz95ed911j6n2ywo75.webp">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<!--<div class="hystmodal" id="modal-zoom-porfolio-12" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!---->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img"><img alt="" class="img lazyload"-->
<!--                                                              data-src="/upload/resize_cache/webp/iblock/3e9/2iksk0vtd5oio30j07onid2zc9nv39qj.webp">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<!--<div class="hystmodal" id="modal-zoom-porfolio-13" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!---->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img"><img alt="" class="img lazyload"-->
<!--                                                              data-src="/upload/resize_cache/webp/iblock/9d5/53erpjfdsyudhtfvom1pvlig3czmenuy.webp">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<!--<div class="hystmodal" id="modal-zoom-porfolio-14" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!---->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img"><img alt="" class="img lazyload"-->
<!--                                                              data-src="/upload/resize_cache/webp/iblock/9d5/53erpjfdsyudhtfvom1pvlig3czmenuy.webp">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<!--<div class="hystmodal" id="modal-zoom-porfolio-15" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!---->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img"><img alt="" class="img lazyload"-->
<!--                                                              data-src="/upload/resize_cache/webp/iblock/068/vxixcddw29896cr4ee8xhd8i3chplebz.webp">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<!--<div class="hystmodal" id="modal-zoom-porfolio-16" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!---->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img"><img alt="" class="img lazyload"-->
<!--                                                              data-src="/upload/resize_cache/webp/iblock/df8/cr9ly6r5a2r37016pydka1qij5cjoqtt.webp">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<!--<div class="hystmodal" id="modal-zoom-porfolio-17" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!---->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img"><img alt="" class="img lazyload"-->
<!--                                                              data-src="/upload/resize_cache/webp/iblock/755/4n4sfiz4365oaekl5d9s5npwijmcbkcw.webp">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<!--<div class="hystmodal" id="modal-zoom-porfolio-18" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!---->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img"><img alt="" class="img lazyload"-->
<!--                                                              data-src="/upload/resize_cache/webp/iblock/f85/u297q8f2vlulpmyq5pe78svs5byqr4w5.webp">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<!--<div class="hystmodal" id="modal-zoom-porfolio-19" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!---->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img"><img alt="" class="img lazyload"-->
<!--                                                              data-src="/upload/resize_cache/webp/iblock/e56/wbue56fis26k4azg29y3ry7jgd8qzb9p.webp">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<!--<div class="hystmodal" id="modal-zoom-porfolio-20" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!---->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img"><img alt="" class="img lazyload"-->
<!--                                                              data-src="/upload/resize_cache/webp/iblock/200/vrqwo4p4vmze5ga2cmdm5gmnvrzoaxaa.webp">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<!--<div class="hystmodal" id="modal-zoom-porfolio-21" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!---->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img"><img alt="" class="img lazyload"-->
<!--                                                              data-src="/upload/resize_cache/webp/iblock/200/vrqwo4p4vmze5ga2cmdm5gmnvrzoaxaa.webp">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<!--<div class="hystmodal" id="modal-zoom-porfolio-22" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!---->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img"><img alt="" class="img lazyload"-->
<!--                                                              data-src="/upload/resize_cache/webp/iblock/e28/1c8wzq8disf3opoi8hf0es3yg7lmlbdo.webp">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<!--<div class="hystmodal" id="modal-zoom-porfolio-23" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!---->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img"><img alt="" class="img lazyload"-->
<!--                                                              data-src="/upload/resize_cache/webp/iblock/242/q674rt6kneddog25lcj7110s6d815s38.webp">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<!--<div class="hystmodal" id="modal-zoom-porfolio-24" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!---->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img"><img alt="" class="img lazyload"-->
<!--                                                              data-src="/upload/resize_cache/webp/iblock/993/jiyk8giz74h1otu66km8zr3t0ubmvu0a.webp">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->
<!--<div class="hystmodal" id="modal-zoom-porfolio-25" aria-hidden="true">-->
<!--    <div class="hystmodal__wrap">-->
<!--        <div class="certif-slider__modal-slider swiper js-certif-slider-window">-->
<!--            <div class="certif-slider__modal-content swiper-wrapper">-->
<!---->
<!--                <div class="certif-slider__window swiper-slide hystmodal__window" role="dialog"-->
<!--                     aria-modal="true">-->
<!--                    <div class="certif-slider__zoom-img"><img alt="" class="img lazyload"-->
<!--                                                              data-src="/upload/resize_cache/webp/iblock/032/0xwe4s3abwwcjhogfadxszvlxev48zyb.webp">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->



<!--                -->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-0">-->
<!--                                <img alt="1" src="--><?php //=IMG?><!--examples/1/1.jpg" class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-1">-->
<!--                                <img alt="1"-->
<!--                                     src="--><?php //=IMG?><!--examples/1/2.jpg"-->
<!--                                     class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-2">-->
<!--                                <img alt="1"-->
<!--                                     src="--><?php //=IMG?><!--examples/1/3.jpg"-->
<!--                                     class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-3">-->
<!--                                <img alt="1"-->
<!--                                     src="--><?php //=IMG?><!--examples/2/1.jpg"-->
<!--                                     class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-4">-->
<!--                                <img alt="1"-->
<!--                                     src="--><?php //=IMG?><!--examples/2/2.jpg"-->
<!--                                     class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-5">-->
<!--                                <img alt="1"-->
<!--                                     src="--><?php //=IMG?><!--examples/2/3.jpg"-->
<!--                                     class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-6">-->
<!--                                <img alt="1"-->
<!--                                     src="--><?php //=IMG?><!--examples/2/4.jpg"-->
<!--                                     class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-7">-->
<!--                                <img alt="1"-->
<!--                                     src="--><?php //=IMG?><!--examples/2/5.jpg"-->
<!--                                     class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-8">-->
<!--                                <img alt="1"-->
<!--                                     src="--><?php //=IMG?><!--examples/2/6.jpg"-->
<!--                                     class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-9">-->
<!--                                <img alt="1"-->
<!--                                     src="--><?php //=IMG?><!--examples/2/7.jpg"-->
<!--                                     class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-10">-->
<!--                                <img alt="1"-->
<!--                                     src="--><?php //=IMG?><!--examples/pasha/door.jpg"-->
<!--                                     class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-11">-->
<!--                                <img alt="1"-->
<!--                                     src="--><?php //=IMG?><!--examples/pasha/door1.jpg"-->
<!--                                     class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-12">-->
<!--                                <img alt="1"-->
<!--                                     src="--><?php //=IMG?><!--examples/pasha/door2.jpg"-->
<!--                                     class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-13">-->
<!--                                <img alt="1"-->
<!--                                     src="--><?php //=IMG?><!--examples/pasha/door3.jpg"-->
<!--                                     class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-14">-->
<!--                                <img alt="1"-->
<!--                                     src="--><?php //=IMG?><!--examples/pasha/door4.jpg"-->
<!--                                     class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-15">-->
<!--                                <img alt="1"-->
<!--                                     src="--><?php //=IMG?><!--examples/pasha/door5.jpg"-->
<!--                                     class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-16">-->
<!--                                <img alt="1"-->
<!--                                     src="--><?php //=IMG?><!--examples/pasha/door6.jpg"-->
<!--                                     class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-17">-->
<!--                                <img alt="1"-->
<!--                                     src="--><?php //=IMG?><!--examples/pasha/door7.jpg"-->
<!--                                     class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-18">-->
<!--                                <img alt="1"-->
<!--                                     src="--><?php //=IMG?><!--examples/pasha/door8.jpg"-->
<!--                                     class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-19">-->
<!--                                <img alt="1"-->
<!--                                     src="--><?php //=IMG?><!--examples/pasha/door9.jpg"-->
<!--                                     class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-20">-->
<!--                                <img alt="1"-->
<!--                                     src="--><?php //=IMG?><!--examples/pasha/door10.jpg"-->
<!--                                     class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-21">-->
<!--                                <img alt="1"-->
<!--                                     src="--><?php //=IMG?><!--examples/pasha/window.jpg"-->
<!--                                     class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-22">-->
<!--                                <img alt="1"-->
<!--                                     src="--><?php //=IMG?><!--examples/pasha/window1.jpg"-->
<!--                                     class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-23">-->
<!--                                <img alt="1"-->
<!--                                     src="--><?php //=IMG?><!--examples/pasha/window2.jpg"-->
<!--                                     class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide actions-carousel__item swiper-slide-next">-->
<!--                    <div class="simple-card simple-card--article">-->
<!--                        <div class="simple-card__img main-portfolio-img">-->
<!--                            <a href="#" data-certif-modal="#modal-zoom-porfolio-24">-->
<!--                                <img alt="1"-->
<!--                                     src="--><?php //=IMG?><!--examples/pasha/balcony.jpg"-->
<!--                                     class="img action-slide-img lazyload" width="400" height="200">-->
<!--                            </a>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--                           </div>-->