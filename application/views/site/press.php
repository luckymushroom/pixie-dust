<div class="maincontent">

    <div class="col-1">
        <h4>Have a Questions ?</h4>
        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae itaque earum rerum hic tenetur a sapiente delectus voluptatibus maiores alias consequatur perferendis.</p>
                    
        <!-- begin of PRESS link -->   

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

        <!-- end of PRESS link -->

    </div>
    
    <!-- BEGIN OF SIDEBAR -->

    <!-- END OF SIDEBAR -->             

</div>
</div>            
<!-- END OF CONTENT -->