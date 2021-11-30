<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./_css/bootstrap.min.css">
    <script src="./_js/jquery.min.js"></script>
    <script src="./_js/popper.min.js"></script>
    <script src="./_js/bootstrap.min.js"></script>
    <script src="./_js/bootstrap.js"></script>
    <title>商品頁</title>
    <script>

    function myFunction(){
	alert("已經加入購物車");
    }
</script>
</head>
<style>

        .bigbox{
            width: 400px;
            height: 40px;
            background: #269A8F;
            border-radius: 20px;
            position: relative;
            outline: none;
        }

        .inp{
            width: 400px;
            height: 40px;
            display: block;
            border: 2px solid #269A8F;
            border-radius: 20px;
            outline: none;
            padding-left: 20px;
            font-size: 15px;
        }
        #navbar-1{
            height: 80px;}
        
         
        
        
        /* 選擇方案按鈕樣式 */
        .btn-style{
            color:#fff;
            background-color:#26998E;
            width:120px;
            height: 40px;
            border-radius: 8px;
            border:none;
            outline: none;
           
        }
        .btn-hover button:hover{ opacity: 0.9; outline: none; border:none; }
    /* ----------------------------------------------------------------------------------------------- */
        .search-btn{
            position: absolute;
            right: 0px;
            top: 0px;
            width: 80px;
            height: 40px;
            background-color: #269A8F;
            border: none;
            outline: none;
            cursor: pointer;
            border-radius: 20px;
            color: #ffff;
            font-size: 18px;
            
        }
        .shopping-cart{
            width: 40px;
            height: 40px;
            border-radius: 100%;
            outline: none;
            border: none;
            background-color: #E86D4E;
            margin-right: 20px;
            margin-top: 5px;
        }
        .login-btn{
            width: 130px;
            height: 40px;
            border-radius: 20px;
            outline: none;
            border: none;
            background-color: #E7C269;
            color: #274456;
            font-weight: 600;
            font-size: 18px;
            margin-right: 100px;
            margin-top: 5px;
        }
        @media (min-width: 576px){
            .modal-dialog {
                max-width: 400px;
            }
        }
        
        .modal-content {
            padding: 1rem;
        }

        .close {
            margin-top: -1.5rem;
        }
            
        .form-title {
            margin: -2rem 0rem 2rem;
        }

        .btn-round {
            border-radius: 3rem;
        }
        .delimiter {
            padding: 1rem;  
        }
        .btn {
            float: right;
        }
            
        .signup-section {
            line-height: 40px;


        }

        footer {
            margin-top: 80px;
            width: 100%;
            height: 300px;
            background-color:#274456;
        }
        
</style>

<body>
     
 
    <nav class="navbar navbar-expand-md navbar-dark bg-white" id="navbar-1">
        <div class="navbar-collapse collapse w-25 order-1 order-md-0 dual-collapse2">
            <nav class="navbar navbar-light ">
                <a class="navbar-brand" href="./index.php">
                    <img src="../素材/資產 1.svg"  height="60" alt="">
                </a>
            </nav>
        </div>
        <form class="form-inline" style="width: auto;">
            <div class="bigbox">
                <input type="search" class="inp" />
                <button type="submit" class="search-btn" style="outline: none;">搜索</button>
            </div>
        </form>

        <div class="navbar-collapse collapse w-25 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
            <li><a href="./shoppingcart.php"><button class="shopping-cart" style="outline: none" onclick=""><img src="../素材/shoppingcart.svg" height="23px"></button></a></li>
            <li><a href="./member.php"><img src="../素材/圖片/大頭照-01.png" height="45px"> </a></li>
            </ul>
        </div>
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body con">
                        <div class="form-title text-center">
                            <h4>會員登入</h4>
                        </div>
                        <!-- <div class="d-flex flex-column text-center"> -->
                            <form>
                                <div class="form-group">
                                    <div class="text-left text-muted">帳號</div>
                                    <input type="email" class="form-control" id="email1"placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <div class="text-left text-muted">密碼</div>
                                    <input type="password" class="form-control" id="password1" placeholder="Password">
                                </div>
                            </form>
                                <br>
                                <div class=" container row m-0 p-0">
                                     <a href="" class="text-info "> 免費註冊</a> 
                                    
                                     <a href="./index-login.php"><button type="button" class="btn btn-info btn-round ">會員登入</button></a> 
                                </div>
                            
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>

        
    </nav>

<!-- ---------------------------------------------------------------------------------------------------------------->
<!-- nav bar -->
<nav class="navbar navbar-expand-lg navbar-light p-2 sticky-top " style="background-color:#274456;border-radius: 0px 0px 40px 40px ;">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto ">

        <div style="line-height:50px ;"><img src="../素材/0003.svg" style="height: 45px;" alt=""></div>
        <li class="nav-item pr-3">
          <a class="nav-link text-white" href="./mall.php">熱門票券</a>
        </li>
        
        <div class="mr-3" style=" color: white; line-height: 50px;">｜</div>

        <div style="line-height:50px ;"><img src="../素材/0004.svg" style="height: 45px;" alt=""></div>
        <li class="nav-item pr-3 ">
          <a class="nav-link text-white" href="#" tabindex="-1" aria-disabled="true">城市導覽</a>
        </li>

        <div class="mr-3" style=" color: white; line-height: 50px;">｜</div>

        <div style="line-height:50px ;"><img src="../素材/0001.svg" style="height: 45px;" alt=""></div>
        <li class="nav-item pr-3">
            <a class="nav-link text-white" href="#" tabindex="-1" aria-disabled="true">一日行/多日行</a>
        </li>
        
        <div class="mr-3" style=" color: white; line-height: 50px;">｜</div>

        <div style="line-height:50px ;"><img src="../素材/0002.svg" style="height: 45px;" alt=""></div>
        <li class="nav-item pr-3">
            <a class="nav-link text-white" href="#" tabindex="-1" aria-disabled="true">住宿</a>
        </li>

     </ul>
    </div>
</nav>
 
<!-- --------------------------------------------------------------------------------------------------------------             -->            
           
<div class="container mt-4">
    
    <!-- 30. 改變播放速度，在外層容器增加 data-interval="300" -->
    <!-- 31. 加入控制播放上一張或者下一張功能 -->
    <!-- 32. 加入指標提示使用者目前有多少項目 -->

    <div id="bee" class="carousel slide " data-ride="carousel" data-interval="3000">
        <!-- 圖片本人 -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../素材/圖片/商品頁/新增資料夾/01-1.jpg" alt="" style="width: 100%; height:550px">
            </div> 
            <div class="carousel-item">
                <img src="../素材/圖片/商品頁/新增資料夾/02-1.jpg" alt="" style="width: 100%; height:550px">
            </div>
            <div class="carousel-item">
                <img src="../素材/圖片/商品頁/新增資料夾/03-1.jpg" alt="" style="width: 100%; height:550px">
            </div>
        </div>
        <!-- 上一張下一張 -->
        <a class="carousel-control-prev" href="#bee" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#bee" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!-- 指標 -->
        <ol class="carousel-indicators">
            <li data-target="#bee" data-slide-to="0" class="active"></li>
            <li data-target="#bee" data-slide-to="1"></li>
            <li data-target="#bee" data-slide-to="2"></li>
        </ol>
    </div>
</div>  
          


        
      
            
           




<!-- -------------------------------------------------------------------------------------------- -->
<div class="container mt-4 mb-4">
<div class="row gx-4 gx-lg-5 text-center">
       
    <div class="col-lg-9 col-md-6 text-center "  >
         
        <div class="h6 mb-2" style="text-align: left; color:#274456 ;font-size: 25px; ">
            <p>桃園青埔｜Xpark 都會型水生公園門票</p>
        </div>
           
        <hr>

        <div class="row gx-4 gx-lg-5 text-center me-auto ms-auto ">
            <div class="col-lg-4 col-md-12 text-center  " style="font-size: 15px;">
               <div class="" style="color:#274456">可出示手機電子憑證或列印的紙本憑證</div>
              
            </div>
            <div class="col-lg-4 col-md-12 text-center  " style="font-size: 15px;">
                <div class="" style="color:#274456">兌換憑證前可免費取消</div>
               
            </div>
            <div class="col-lg-4 col-md-12 text-center " style="font-size: 15px;">
                <div class="" style="color:#274456">有效期／兌換期內皆可使用</div>
               
            </div>
        </div>
        <hr>   
       
         
          
         <p class="" style="color:#274456 ; text-align: left;font-size: 18px; ">
         由日本橫濱八景島首度跨海來台桃園開設分館「Xpark」，Xpark 主打新都會型水族館，驅使最先端的科技，營造出環境的溫度、濕度、氣味、聲音，帶您到地球上每個不可思議的角落，受到啟發、感受療癒、洗滌心靈！
         2021 年夏天，面對陣陣酷暑熱浪，日本人用獨有的角度與文化，編織出了專屬東洋的夏季光景，只有在 Xpark 看得見，和可愛生物一起創造不一樣的 Summer memories！
        </p>

    </div>
        
            
       
   
    <div class="col-lg-3 col-md-6 text-center mt-4 pt-3">
        <div class="btn-hover p-3" style=" border-radius: 20px; color: #274456;
        -webkit-box-shadow: 0px 5px 20px 5px rgba(0,0,0,0.13); 
         box-shadow: 0px 5px 20px 5px rgba(0,0,0,0.13);
         ">
            <h3 class="h4 mb-2" style="color: #274456;">NT550</h3>
            <a href="#方案選擇"><button class="btn-style">選擇方案</button></a>
       </div>
   </div>

</div>
</div>
<div id="方案選擇"></div>
<!-- --------------------------------------------------------------------------------------------------- -->
<div style="background-color:#E9E9E9;">

  <div class="container pt-4">
       
     <div class="h3 mb-3 " style="color: #274456;">方案選擇</div>
     
     
    <div class="p-3 mb-3" style=" border-radius: 10px; background-color:white;">
        <div class="row gx-4 gx-lg-5 text-center ">
            <div class="col-lg-10 col-md-12 text-center  " style="font-size: 15px;">
               <div class=" mb-0 text-white-75 h5" style="text-align: left;color: #274456;">Xpark 入園門票(成人)</div>

               <div class=" mb-0 pt-3" style="text-align: left; color: #274456;">
                 <ul style="font-size: 18px;">
                      <li>成人票：18 歲以上</li>
                      <li>兒童票：限 4 - 11 歲</li>
                      <li>長者票(博愛票)：限持有身心障礙證明者與 1 位陪同者、孕婦、滿 65 歲以上長者適用 </li>
                      <li>學生票：限 12 歲以上持有學生證之學生適用</li>
                      <li>此商品恕無法使用任何折扣券，敬請見諒</li>
                      <li>請留意入場時需依照購買人數全員到齊後，方可入館；如須分開入館，請先依照人數分開下訂 </li>
                 </ul>
               </div>
               
            </div>
           
            <div class="col-lg-2 col-md-12 text-center small "  style="font-size: 20px;">
                
                <h3 class="pt-5" style="color: #274456;">NT550</h3>

            </div>
                    
        </div>

        <div class="mb-2 pt-3">   
             <div class="row gx-4 gx-lg-5 text-center " style="background-color: #E9E9E9;">
                
               <div class="col-lg-4 col-md-12 text-center  " style="font-size: 15px;">
                  <div class="text-muted mb-0 text-white-75">可出示手機電子憑證或列印的紙本憑證</div>
                 
               </div>
               <div class="col-lg-4 col-md-12 text-center small   " style="font-size: 15px;">
                   <div class="text-muted mb-0 text-white-75">兌換憑證前可免費取消</div>
                  
               </div>
               <div class="col-lg-4 col-md-12 text-center small  " style="font-size: 15px;">
                   <div class="text-muted mb-0 text-white-75">有效期／兌換期內皆可使用</div>
                  
               </div>
               
             </div>
             <hr>

             <div class="row mt-3" >
               <div class="col-lg-6 col-md-6 text-center"></div>  
                

               <div class="col-lg-6 col-md-6 text-center">
                     <div class="row gx-4 gx-lg-5 text-center">
                       
                        <div class="pt-2 col-lg-12 col-md-12">
                             <div class="btn-hover" style="text-align: right;">
                                
                              
                                <button type="button" class="btn-style" onclick="myFunction()">加入購物車</button>
                              
                                <a href="./shoppingcart.php"><button class="btn-style">立即訂購</button></a>
                            
                             </div>
                             
                        </div>
                     
                    </div>
                   
                </div>
                 
            </div>
        </div>  
     </div>
<!-- -------------------------------------------------------------------------------------------------------------------------------- -->
<div class="p-3 mb-3" style=" border-radius: 10px; background-color:white;">
        <div class="row gx-4 gx-lg-5 text-center ">
            <div class="col-lg-10 col-md-12 text-center  " style="font-size: 15px;">
               <div class=" mb-0 text-white-75 h5" style="text-align: left;color: #274456;">Xpark 入園門票(兒童、長者)</div>

               <div class=" mb-0 pt-3" style="text-align: left; color: #274456;">
                 <ul style="font-size: 18px;">
                      <li>成人票：18 歲以上</li>
                      <li>兒童票：限 4 - 11 歲</li>
                      <li>長者票(博愛票)：限持有身心障礙證明者與 1 位陪同者、孕婦、滿 65 歲以上長者適用 </li>
                      <li>學生票：限 12 歲以上持有學生證之學生適用</li>
                      <li>此商品恕無法使用任何折扣券，敬請見諒</li>
                      <li>請留意入場時需依照購買人數全員到齊後，方可入館；如須分開入館，請先依照人數分開下訂 </li>
                 </ul>
               </div>
               
            </div>
           
            <div class="col-lg-2 col-md-12 text-center small "  style="font-size: 20px;">
                
                <h3 class="pt-5" style="color: #274456;">NT250</h3>

            </div>
                    
        </div>

        <div class="mb-2 pt-3">   
             <div class="row gx-4 gx-lg-5 text-center " style="background-color: #E9E9E9;">
                
               <div class="col-lg-4 col-md-12 text-center  " style="font-size: 15px;">
                  <div class="text-muted mb-0 text-white-75">可出示手機電子憑證或列印的紙本憑證</div>
                 
               </div>
               <div class="col-lg-4 col-md-12 text-center small   " style="font-size: 15px;">
                   <div class="text-muted mb-0 text-white-75">兌換憑證前可免費取消</div>
                  
               </div>
               <div class="col-lg-4 col-md-12 text-center small  " style="font-size: 15px;">
                   <div class="text-muted mb-0 text-white-75">有效期／兌換期內皆可使用</div>
                  
               </div>
               
             </div>
             <hr>

             <div class="row mt-3" >
               <div class="col-lg-6 col-md-6 text-center"></div>  
                

               <div class="col-lg-6 col-md-6 text-center">
                     <div class="row gx-4 gx-lg-5 text-center">
                       
                        <div class="pt-2 col-lg-12 col-md-12">
                             <div class="btn-hover" style="text-align: right;">
                                
                              
                                <button type="button" class="btn-style" onclick="myFunction()">加入購物車</button>
                              
                                <a href="./shoppingcart.php"><button class="btn-style">立即訂購</button></a>
                            
                             </div>
                             
                        </div>
                     
                    </div>
                   
                </div>
                 
            </div>
        </div>  
     </div>
<!-- -------------------------------------------------------------------------------------------------------------------------------- -->
<div class="p-3 mb-3" style=" border-radius: 10px; background-color:white;">
        <div class="row gx-4 gx-lg-5 text-center ">
            <div class="col-lg-10 col-md-12 text-center  " style="font-size: 15px;">
               <div class=" mb-0 text-white-75 h5" style="text-align: left;color: #274456;">Xpark 入園門票(學生)</div>

               <div class=" mb-0 pt-3" style="text-align: left; color: #274456;">
                 <ul style="font-size: 18px;">
                      <li>成人票：18 歲以上</li>
                      <li>兒童票：限 4 - 11 歲</li>
                      <li>長者票(博愛票)：限持有身心障礙證明者與 1 位陪同者、孕婦、滿 65 歲以上長者適用 </li>
                      <li>學生票：限 12 歲以上持有學生證之學生適用</li>
                      <li>此商品恕無法使用任何折扣券，敬請見諒</li>
                      <li>請留意入場時需依照購買人數全員到齊後，方可入館；如須分開入館，請先依照人數分開下訂 </li>
                 </ul>
               </div>
               
            </div>
           
            <div class="col-lg-2 col-md-12 text-center small "  style="font-size: 20px;">
                
                <h3 class="pt-5" style="color: #274456;">NT400</h3>

            </div>
                    
        </div>

        <div class="mb-2 pt-3">   
             <div class="row gx-4 gx-lg-5 text-center " style="background-color: #E9E9E9;">
                
               <div class="col-lg-4 col-md-12 text-center  " style="font-size: 15px;">
                  <div class="text-muted mb-0 text-white-75">可出示手機電子憑證或列印的紙本憑證</div>
                 
               </div>
               <div class="col-lg-4 col-md-12 text-center small   " style="font-size: 15px;">
                   <div class="text-muted mb-0 text-white-75">兌換憑證前可免費取消</div>
                  
               </div>
               <div class="col-lg-4 col-md-12 text-center small  " style="font-size: 15px;">
                   <div class="text-muted mb-0 text-white-75">有效期／兌換期內皆可使用</div>
                  
               </div>
               
             </div>
             <hr>

             <div class="row mt-3" >
               <div class="col-lg-6 col-md-6 text-center"></div>  
                

               <div class="col-lg-6 col-md-6 text-center">
                     <div class="row gx-4 gx-lg-5 text-center">
                       
                        <div class="pt-2 col-lg-12 col-md-12">
                             <div class="btn-hover" style="text-align: right;">
                                
                              
                                <button type="button" class="btn-style" onclick="myFunction()">加入購物車</button>
                              
                                <a href="./shoppingcart.php"><button class="btn-style">立即訂購</button></a>
                            
                             </div>
                             
                        </div>
                     
                    </div>
                   
                </div>
                 
            </div>
        </div>  
     </div>
 
         
     
     <!-- ----------------------------------------------------------------------------------------------------------------------------- -->

     <!-- 商品說明  -->
       
       <div class=" row container-fluid pt-3" style="width: 1185px;" > 
 
         <div class="  text-center  position-relative   " style="font-size: 15px;">

             <ul class="nav flex-column sticky-top  " style="top: 80px; z-index: 1019; ">

                 <li class="nav-item   pt-2 pb-4 " style="writing-mode: vertical-rl;border-radius: 30px 30px 0px 200px; width: 50px; background-color:#26998E ;">
                     <a class="nav-link" href="#商品說明" style="color: white;">商品說明</a>
                </li>


                <li class="nav-item   pt-2 pb-4" style="writing-mode: vertical-rl;border-radius: 30px 30px 0px 200px;width: 50px; background-color:#E6C169 ;">
                    <a class="nav-link  text-center" href="#購買須知" style="color: white; ">購買須知</a>
                </li>


                <li class="nav-item   pt-2 pb-4" style="writing-mode: vertical-rl;border-radius: 30px 30px 0px 200px;width: 50px; background-color:#F4A061 ;" >
                    <a class="nav-link" href="#如何使用" style="color: white;">如何使用</a>
                </li>


                <li class="nav-item   pt-2 pb-4" style="writing-mode: vertical-rl;border-radius: 30px 30px 0px 200px;width: 50px; background-color:#E76D4E ; ;">
                    <a class="nav-link" href="#取消政策" style="color: white;">取消政策</a>
                </li>
                
            </ul> 
                  
         </div>
                
             
             
         
         <div class="col-lg-11 col-md-11  text-center  pr-5 pl-5 " style="font-size: 18px; background-color: white; border-radius: 10px;">        
             <br id="商品說明"><br><br>
             <div class=" mb-0 text-white-75 h5 p-1"  style="text-align: center;background-color: #26998E;width: 120px;border-radius: 10px;">
             
             <span style="color: white;">商品說明</span>
            </div><br>

             <div class=" mb-3 pt-3 "  style="text-align: left; color: #274456;"> 
             ⚠️  【購票方式更新說明】⚠️<br>
              
             📌 因應 Xpark 館內系統維護，國內發行之振興五倍券(紙本/數位)館內現場目前暫時無法使用；日後調整振興五倍劵使用方式之時另行公告。<br>
             📌 現場購票 / 館內消費僅限現金付款，結帳時敬請耐心等候。<br>
             ► Xpark 營業時間調整如下：<br>
             ・10/01 - 10/31 週日至週五：10:00 - 18:00（最後預約場次為 16:00，閉館時間為 18:00）<br>
             ・10/01 - 10/31 週六(包含國定假日)：10:00 - 20:00（最後預約場次為 18:00，閉館時間為 20:00）<br>
             ＊採單一出入口制，出館後不可再入館<br>
             ＊1F與眾同樂區將調整部分內容進行展示，採梅花座入座。<br>
             ＊配合政府防疫管理措施，本館暫停開放設施服務及活動如下:<br>
             ①. 3F虛實互動區<br>
             ②. 2F大水槽銀鯧幻影之美活動<br>
             ③. 1F加價購櫃台、飼料扭蛋機<br>
             ④. 娃娃車租借服務、自動販賣機、飲水機(哺乳室、醫務室內除外)<br>
             ⑤. Xcafe將依照衛生福利部公告之「餐飲業防疫管理措施」進行管理，10/9前維持梅花座隔板<br>
             ⑥. 加購活動(潮間戲灘)10/13-11/13 進行施工，暫不開放<br>
             ❋ 購票方式與館內服務將會依照最新政令進行滾動式修正，如有不便敬請見諒。<br><br>
             ≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡


            </div>

             <div class=" mb-3 pt-3 pb-3" style="text-align: left; color: #274456;">
             － 行程特色 －<br><br>
             Xpark 為台灣首座新都會型水生公園。將生活在地球上各種地域的生物們的環境，
             透過空間演出與科技的融合，加以忠實的重現。在連氣溫、濕度、味道及聲音都經過縝密計算的空間裡，
             從天花板到地坪、延伸至水槽的影像演出呈現出 360° 具魄力的沉浸式空間。
             來訪的遊客並非單純透過壓克力玻璃觀賞生物，而是彷彿真得身歷其境，可以使用五感體驗各真實場景。
             主角，是生活在那裡的生物們，隨環境變遷而演變進化的生物們的不思議，從全方位各種角度將其魅力性襯托出來的環境演出也是一大特徵。
             Xpark 是一個滿足人們無止盡的「對於求知的慾望和獲知的喜悅」，並在世界上也是獨一無二的寓教於樂設施。<br><br>

             ＊館區最新消息及詳細說明請參考 Xpark 官網<br>
             ＊購票請先註冊 KKday 會員<br>
             ＊購票請參考線上訂票流程教學影片<br>
             ＊KKday 編輯帶路文章<br>
             ＊KKday 獨家販售驚喜福袋<br>
             ＊高鐵國旅聯票 來回車票＆桃園 Xpark 都會型水生公園門票<br><br>
             ≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡≡<br><br>

             － 方案介紹 －<br><br>

             【 Xpark 入園門票】<br><br>

              使用對象：<br>
              1. 成人票：限 18 歲以上<br>
              2. 兒童票：限 4 - 11 歲<br>
              3. 長者票(博愛票)：限持有身心障礙證明者與 1 位陪同者、孕婦、滿 65 歲以上長者適用<br>
              4. 學生票：限 12 歲以上持有學生證之學生適用<br>
              * 未滿 4 歲的幼童可免費入場，需有家長陪同入場<br>
              使用期限：限於指定當日兌換，並於票券上有效期間內使用
             </div><br>
             
             <div style="text-align: left;">➤ ｜福爾摩沙 Formosa ｜ 台灣被海洋擁抱著，有著豐富多樣的魚種生態、變化萬千的海底地形，福爾摩沙完整呈現了這樣美麗的海洋環境，宛若走進海中，一覽海洋世界的壯闊之美</div><br>
             <div class="pb-5"> <img src="../素材/圖片/商品頁/新增資料夾/04.jpg" alt="" style="width: 100%;"></div>
             <div style="text-align: left;">➤ 企鵝的可愛模樣讓人暑氣全消</div><br>
             <div class="pb-5"> <img src="../素材/圖片/商品頁/新增資料夾/02.jpg" alt="" style="width: 100%;"></div>
             <div class="pb-5"> <img src="../素材/圖片/商品頁/新增資料夾/05.jpg" alt="" style="width: 100%;"></div> 
             <div class="pb-5"> <img src="../素材/圖片/商品頁/新增資料夾/01.jpg" alt="" style="width: 100%;"></div>
             <div> <img src="../素材/圖片/商品頁/新增資料夾/03.jpg" alt="" style="width: 100%;"></div>
             <br id="購買須知"><br><br>
              <div class=" mb-0 text-white-75 h5 p-1"  style="text-align: center;background-color: #E6C169;width: 120px;border-radius: 10px;"><span style="color: white;">
              購買須知</span></div><br>
   
              <div class=" mb-3 pt-3" style="text-align: left; color: #274456;">
                <ul style="font-size: 18px;">
                        <li>未滿 4 歲的兒童可免費入場，需有家長陪同入場。</li> 
                        <li>下訂時請以「票券使用日」為主，下訂後即無法變更，敬請留意。</li> 
                        <li>訂單一次最高訂購上限為 6 張。</li> 
                        <li>每日場次數量為限量販售，售完為止。</li> 
                        <li>訂單恕不接受部分變更，若需變更入場日及場次請整筆重新下訂。</li> 
                        <li>展場開放時間，如遇週末・春季長假・暑假・年末年初會有變更，確切時間請上官網查詢。</li> 
                        <li>訂購博愛票旅客陪同者也需購買一張博愛票（陪同者僅限於身心障礙旅客）。</li> 
                        <li>館內建議停留時間為 2 小時。</li> 
                        <li>本館禁止攜帶外食、寵物，可攜帶開水。</li> 
                        <li>館內提供嬰兒車租借，沒提供輪椅租借，敬請旅客見諒。 </li>
                        <li>若有商業訂購或大量訂購將有拒絕出票之可能。 </li>
                        <li>請務必於訂購時確認訂購之票種是否正確，資格是否符合。</li> 
                        <li>團體預約請洽 Xpark 官網。 </li>
                        <li>此商品恕無法使用任何折扣券，敬請見諒。 </li>
                        <li>請留意入場時需依照購買人數全員到齊後，方可入館；如須分開入館，請先依照人數分開下訂，以利現場核銷入館。 </li>
               </ul>
              
              <div class=" mb-3 p-3" style="text-align: left; color: #274456;background-color:#E9E9E9;border-radius:10px">
                  
               <b style="font-size: 20px;">注意事項</b><br><br>
               <ul style="font-size: 16px;">

                   <li>請留意入場時需依照購買人數全員到齊後，方可入館；如須分開入館，請先依照人數分開下訂，以利現場核銷入館。</li>
                   <li>請依照購買場次之入場區間入館，若超時入場將依現場人流狀況安排，不保證可以入館。</li>
                   <li>購買學生、孩童、敬老票（博愛票）者當日請配合出示相關證件，若無法出示工作人員將有權拒絕旅客入場。</li>
                   <li>為維護館內參觀品質，每個時段皆有人數限制，因此若該場次已售完，請選擇其他場次，並請配合現場人流管制。</li>
                   <li>請勿於任何非主辦單位正式授權售票之通路、網站購買票劵，以免自身權益受損，若透過上述管道購票發生無法入場或其他交易糾紛問題，主辦單位及相關售票平台概不負責。</li>
                   <li>如有未盡事宜，台灣橫浜八景島股份有限公司保留、修改、終止、變更各專案內容細節之權利，且不另行通知。</li>
                   <li>為維護現場秩序及管控場內人數，如遇排隊人潮過多，可能出現遲延入場情況，請耐心等候現場工作人員指示安排入場。</li>
                   <li>配合動物自然生態習性，館內特定區域非全時段開放，請參閱現場公告或洽現場工作人員，敬請知悉並配合。</li>
                   <li>配合政府防疫管理措施，本館暫停開放部分設施及活動，請參閱商品說明。 </li>
               </ul>
              </div>        








               



              <br id="如何使用"><br>
              <div class=" mb-0 text-white-75 h5 p-1"  style="text-align: center;background-color: #F4A061;width: 120px;border-radius: 10px;"><span style="color: white;">
              如何使用</span></div><br>
   
              <div class=" mb-0 pt-3 pb-3" style="text-align: left; color: #274456;">

              <b style="font-size: 20px;">憑證使用方式</b><br><br>
              
              現場請出示 QR code<br><br> 
                
              <b style="font-size: 20px;">憑證兌換期限</b><br><br>
              需要按照預訂日期及當天開放時間內兌換，逾期失效

              </div>

              <br id="取消政策"><br>    
              <div class=" mb-0 text-white-75 h5 p-1" id="取消政策" style="text-align: center;background-color: #E76D4E;width: 120px;border-radius: 10px;"><span style="color: white;">
              取消政策</span></div><br>
              
              <div class=" mb-0 pt-3" style="text-align: left; color: #274456;">
              所選日期 6 天（含）之前取消，收取手續費 0%<br><br>
              所選日期 2 ~ 5 天之間取消，收取手續費 10%<br><br>
              所選日期 0 ~ 1 天之間取消，收取手續費 100%<br> 
              </div>    
              <br><br> 
         </br>
     </div>
 
   </div>
  </div>
 </div>

 <footer>

<div class="container text-center pt-5">

<img src="../素材/logo-footer.svg" style="width: 15%; "  alt="">

<div class="pt-3" style="color: white;">COPYRIGHT © 2021 旅Way All rights reserved.</div>

</div>
    
</footer>
 
 
</body>

</html>
                
    
            
   
                
   
                 
   
   

                      
          


                 
 
      
                      
                        
                     
                 
     
            
              
             
         
     
      
         
          
                
       
                
    


         
    
                    

   
 
  
 
 
 
 
       
             
     
 
        
         
        
 
      
        
         
         
    
 
 
 
 
 
 
             
        
 
              
               
         
      
 
  
      

                        
                        
                        