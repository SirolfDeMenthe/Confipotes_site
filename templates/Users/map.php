<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div id="mapid"></div>
<div>
    <?= $this->Form->create(null,['url'=>['action'=>'add']]) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('nom');
            echo $this->Form->control('adresse');
            echo $this->Form->control('latitude');
            echo $this->Form->control('longitude');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<script>
let geojsonArray = <?= json_encode($geoArray);?>;
console.log(geojsonArray);
let mymap = L.map('mapid').setView([51.505, -0.09], 13);
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(mymap);

let pointLayer = L.geoJSON().addTo(mymap);
pointLayer.addData(geojsonArray);

</script>