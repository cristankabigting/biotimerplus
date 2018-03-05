<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>BioTimer</title>
</head>

<body>
    <div class="row">
        <div class="col-md-3 col-md-offset-0 col-md-push-0" id="my_camera">Camera Here</div>
        <div class="col-md-6 col-md-offset-0 col-md-push-0">
                <h1 class="text-center text-success">DTR - REGULAR TIME</h1>
                <h3 class="text-center">Scan Code</h3>
                <div class="col-md-6 col-md-offset-0 col-md-push-3">
                    <div class="form-group">
                        <input class="form-control" type="text" name="scancode" id="scancode" placeholder="Scan your ID Card ..." autofocus="true">
                    </div>
                </div>
        </div>
        <div class="col-md-3"></div>
    </div>

    <script>

        jQuery(document).ready(function() {

            var shutter = new Audio();
            shutter.autoplay = false;
            shutter.src = navigator.userAgent.match(/Firefox/) ? "<?php echo base_url("assets/shutter.ogg"); ?>":"<?php echo base_url("assets/shutter.mp3"); ?>";


            Webcam.set({
                width: 320,
                height: 240,
                image_format: 'jpeg',
                jpeg_quality: 90
            });

            Webcam.attach('#my_camera');

            $('#btnIn').click(function(){
                shutter.play();
            });

            $('#scancode').on('change',function(){
                
                scancode = $(this).val();

                shutter.play();

                Webcam.snap( function(data_uri) {
                    
                    var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');
                    
                    $.post("<?php echo base_url("regulartime/logtime"); ?>",{scancode:scancode,image:raw_image_data},function(result){

                        obj = JSON.parse(result);
                        message = obj.message;
                        html = obj.html;

                        if(message == 'OK') {
                            alert('Log successfully recorded.');

                        } else {

                            alert(message);
                        }

                        $.post("<?php echo base_url("regulartime/messagestatus"); ?>",function(html){
                            $('#staffstatus').html(html);
                        });
                        
                        $('#scancode').val('');
                    });
                });
            });
            
            handleMessageStatus.init();           

        });
    </script>

</body>

</html>