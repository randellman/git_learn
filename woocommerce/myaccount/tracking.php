<?php if(isset($tracking['data']['items'][0]['origin_info']['trackinfo']) && $tracking['data']['items'][0]['origin_info']['trackinfo']){ ?>
    <?php foreach($tracking['data']['items'][0]['origin_info']['trackinfo'] as $item){ ?>
        <?php echo $item['Date']; ?>
        <br>
        <?php echo $item['StatusDescription']; ?>
        <br>
        <?php echo $item['Details']; ?>
        <hr>
    <?php } ?>
<?php }else{ ?>
    Tracking data not available
<?php } ?>
