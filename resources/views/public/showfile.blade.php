<!DOCTYPE html>
<html>
    <head>
        <title>EDU</title>
    </head>
    <body>
        <!--<iframe src='https://view.officeapps.live.com/op/embed.aspx?src=C:\\xampp\\htdocs\\P1\\a.pp' width='90%' height='600px' frameborder='0'>
        </iframe>-->

        <object data="assets/video.mp4" width="1200" height="800"></object>
        
        @foreach($lessons as $lesson)
            <iframe src="http://docs.google.com/gview?url={{ $lesson->filesrc }}&embedded=true" style="width:98%; height:600px;" frameborder="0"></iframe>
        @endforeach
        <!-- <iframe src='https://view.officeapps.live.com/op/embed.aspx?src=‪C:\xampp\htdocs\P1\c#.pdf' width='80%' height='565px' frameborder='0'> </iframe> -->
    </body>
</html>