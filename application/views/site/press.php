<div class="maincontent">

    <div class="col-1">
        <h4>What are people saying about MFarm ?</h4>
        <p>What guys are talking about globally and on the interwebs.</p>
                    
        <!-- begin of PRESS link -->   
        <?php if ($links): ?>
        <?php foreach ($links as $row): ?>
            <div class="ask"><?=$row->title;?></div>
            <div class="question">
                <?php if ($row->visual): ?>
                    <img src="<?=base_url('media/site/images/author.jpg');?>" alt="" class="imgcenter" />
                <?php endif ?>
                <h5></h5>
                <p><?=$row->body;?></p>
                <p><?=auto_link($row->external_link);?></p>
            </div>
        <?php endforeach ?>
        <?php endif ?>


        <!-- end of PRESS link -->

    </div>
    
    <!-- BEGIN OF SIDEBAR -->

    <!-- END OF SIDEBAR -->             

</div>
</div>            
<!-- END OF CONTENT -->