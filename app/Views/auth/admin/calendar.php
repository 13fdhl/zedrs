<head>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/monthly.css">
    <style type="text/css">
        
        #mycalendar {
            width: 100%;
            margin: 2em auto 0 auto;
            max-width: 80em;
            border: 1px solid #666;
        }
    </style>
</head>

<body>
    <h1><?=$profile->first_name?> / <?=$profile->username?></h1>
    <p><br></p>
    <div class="monthly" id="mycalendar"></div>
    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/monthly.js"></script>
    <script type="text/javascript">
        var sampleEvents = {
            "monthly": [
                {
                "id": 1,
                "name": "placeholder",
                "startdate": "1970-01-01",
                "enddate": "",
                "starttime": "",
                "endtime": "",
                "color": "#ff0000",
                "url": ""
            },

            <?php if ($approval!=null) { ?>
                <?php
                $no=1;
                foreach($approval as $a):
                $no++;
                ?>
                {
                "id": <?=$no?>,
                "name": "<?=$a->perihal?>",
                <?php $sd= new DateTime($a->sdate);?>
                "startdate": "<?=$sd->format("Y-m-d")?>",
                <?php $ed= new DateTime($a->edate);?>
                "enddate": "<?=$ed->format("Y-m-d")?>",
                "starttime": "",
                "endtime": "",
                <?php if($a->perihal=="Cuti") {?>
                "color": "#99CCCC",
                <?php } ?>
                <?php if($a->perihal=="Sakit") {?>
                "color": "#FF5900",
                <?php } ?>
                <?php if($a->perihal=="Dinas") {?>
                "color": "#0004FF",
                <?php } ?>
                <?php if($a->perihal=="Pelatihan") {?>
                "color": "#8E008C",
                <?php } ?>
                "url": ""
                }, 
                <?php endforeach; ?>
            <?php }; ?>
            ]
        };

        $(window).load(function() {
            $('#mycalendar').monthly({
                mode: 'event',
                dataType: 'json',
                events: sampleEvents
            });
        });
    </script>
</body>