<hr width="100%">
    <section class="app-container">
        <p>Tải ứng dụng IVY moda</p>
        <div class="app-google">
            <img src="https://pubcdn.ivymoda.com/ivy2/images/appstore.png" alt="">
            <img src="https://pubcdn.ivymoda.com/ivy2/images/googleplay.png" alt="">
        </div>
        <p>Nhận bản tin IVY moda</p>
        <input type="text" placeholder="Nhập email của bạn...">

    </section>

    
    <!-- footer -->
    <section class="footer">
    <div class="footer-top">
        <li><a href=""><img src="https://pubcdn.ivymoda.com/ivy2/images/img-congthuong.png" alt=""></a></li>
        <li><a href="">Liên hệ</a></li>
        <li><a href="">Tuyển dụng</a></li>
        <li><a href="">Giới thiệu</a></li>
        <li>
            <a href="" class="fab fa-facebook"></a>
            <a href="" class="fab fa-twitter"></a>
            <a href="" class="fab fa-youtube"></a>
        </li>
    </div>
    <div class="footer-center">
        <p>Công ty Cổ phần Dự Kim với số đăng ký kinh doanh: 0105777650<br>
            Địa chỉ đăng ký: Tổ dân phố Tháp, P.Đại Mỗ, Q.Nam Từ Liêm, TP.Hà Nội, Việt Nam <br>
            Số điện thoại: <b>0243 205 2222/ 090 589 8683</b> <br>
            Email: <b>cskh@ivy.com.vn</b> 
        </p>
    </div>
    <div class="footer-bottom">
        ©IVYmoda All rights reserved
    </div>
    </section>
</body>
<script>
    const header = document.querySelector("header")
    window.addEventListener("scroll", function(){
        x = window.pageYOffset
        if(x > 0){
            header.classList.add("sticky")
        }
        else {
            header.classList.remove("sticky")
        }
    })


    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
    const imgContainer = document.querySelector(".aspect-ratio-169")
    let imgNuber = imgPosition.length
    let index = 0
    //console.log(imgPosition)
    imgPosition.forEach(function(image,index){
        image.style.left = index*100 + "%"
    })
     function imgSlide (){
        index++;
        console.log(index)
        if (index >= imgNuber) {index=0}

        imgContainer.style.left = "-" +index*100+ "%"

     }
     setInterval(imgSlide,5000)
</script>
</html>
