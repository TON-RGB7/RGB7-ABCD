<script type="text/javascript" src="<?= $_SERVER['SERVER'];?>/js/crop_img/jquery.js"></script>
    <script type="text/javascript" src="<?= $_SERVER['SERVER'];?>/js/crop_img/jquery.nailthumb.1.1.js"></script>
    <link href="<?= $_SERVER['SERVER'];?>/js/crop_img/jquery.nailthumb.1.1.css" type="text/css" rel="stylesheet" />
    <style type="text/css" media="screen">
        .square-thumb {
            width: 220px;
            height: 112px;
        }
    </style>
    
     <style type="text/css" media="screen">
        .small-thumb {
            width: 220px;
            height: 96px;
        }
    </style>
        
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('.nailthumb-container').nailthumb();
        });
    </script>
    
      <div class="nailthumb-container square-thumb">
        <img src="car1.jpg" alt="18520F201200731425IMG_2999" width="" height="" />
    </div>
    <div class="nailthumb-container small-thumb">
        <img src="car1.jpg" alt="18520F201200731425IMG_2999" width="" height="" />
    </div>