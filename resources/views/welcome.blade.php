<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BRU botline</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('js/bootstrap.min.js')}}" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>

        <!-- Image and text -->
        <nav class="navbar navbar-light text-white" style="background: #1686a6"  >

            <div class="form-group row">

                <p>
                    <a class="navbar-brand" href="#">
                        <img src="https://www.bru.ac.th/wp-content/uploads/2018/06/bru-web-logo.svg" height="111" width="550">
                    </a>
                    <strong style="margin-right: 2rem;  font-size: 30px"></strong>
                </p>
            </div>

        </nav>
        <nav class="navbar navbar-light  text-white" style="background: #e5db7e">
            <a class="navbar-brand" style="background: #c9c0aa"></a>
            <form class="form-inline">
                @if (Route::has('login'))
                    <div class="nav-item">
                        @if (Auth::check())
                            <a class="btn btn-dark text-white" href="{{ url('/home') }}">หน้าหลัก</a>
                        @else
                            <a   class="btn btn-dark text-white" href="{{ url('/login') }}">สำหรับเจ้าหน้าที่  </a>
                            <a   class="btn btn-dark text-white" href="{{ url('/register') }}">สมัครสมาชิก  </a>
                        @endif
                    </div>
                @endif
            </form>
        </nav>
    </head>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="background: #fff399">
            <div class="container text-center " style="background: #fff399">
                <h3 class="font-family:courier;"> ยินดีตอนรับเข้าสู่ระบบ BRU botline </h3>
                <p style="font-family:courier;">บริการตอบคำถามและช่วยการค้นหาหนังสือนี้เป็นงานที่ต้องปฏิสัมพันธ์กับผู้ใช้โดยตรง  โดยจะทำหน้าที่ให้บริการค้นหาหนังสือ และช่วยให้มีการใช้ทรัพยากรสารสนเทศอย่างถูกต้องเหมาะสม การจัดดำเนินงานต่างๆ และเป็นไปอย่างรวดเร็วตรงกับความต้องการของผู้ใช้ ให้ผู้ใช้ได้รับข้อมูลที่ทันสมัย ครอบคลุมรายละเอียดตามเนื้อหาที่ต้องการ โดยมีเทคโนโลยีสารสนเทศเป็นเครื่องมือช่วยในการทำงานให้มีประสิทธิภาพในด้านความถูกต้อง ความรวดเร็ว และสามารถสืบค้นได้อย่างกว้างขวาง ทั้งจากรายการทรัพยากรที่ห้องสมุดมี ที่มีการพัฒนาและเผยแพร่มากมายอย่างรวดเร็วบนอินเตอร์เน็ต อ้างอิงจาก http://www.lib.bru.ac.th</p>
                <h4>สำหรับผู้ใช้</h4>
                <img src="https://qr-official.line.me/sid/M/536qxqim.png">
                <hr class="my-4" style="background: #fff399">
            </div>
        <!-- Footer -->
        <footer class="page-footer font-small blue" style="background: #1686a6" >
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3" >
                <h5 href="https://mdbootstrap.com/education/bootstrap/">อาคารบรรณราชนครินทร์(หอสมุด) มหาวิทยาลัยราชภัฎบุรีรัมย์</h5>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>

</html>
