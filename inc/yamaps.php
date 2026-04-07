<section class="yarmaps">

    <div class="map">

        <div id="map" style="width: 90%; height: 400px;margin-inline:10px "></div>

        <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
        <script>
           ymaps.ready(function () {
              var myMap = new ymaps.Map('map', {
                 center: [59.2183, 39.8845],
                 zoom: 17,
              });

              var myPlacemark = new ymaps.Placemark([59.2183, 39.8845], {
                 hintContent: 'Октябрьская 27',
                 balloonContent: 'г. Вологда, ул. Октябрьская, 27',
              });

              myMap.geoObjects.add(myPlacemark);
           });
        </script>
    </div>
    <div class="address">
        <h4><?=CONF['city']?></h4>
        <p><?=CONF['street']?>, ул. <?=CONF['house']?></p>
        <p><?=CONF['phone']?></p>
        <p><?=CONF['work_days']?> : <?=CONF['work_from']?> - <?=CONF['work_to']?></p>
    </div>

</section>
