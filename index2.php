<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style3.css?v=1.4">
   
   
    <link rel="stylesheet" href="css/all.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Document</title>
</head>
<body>
    
        <header>
            <div class="header-top">
                <div class="logo">
                    <h1>la ma<span>rge</span></h1>
                </div>
                <ul>
                    
                    <li><i class="far fa-1x fa-bell"></i></li>
                    <li><img src="img/1.png" alt=""> </li>
                </ul>
            </div>
            
            <nav> 
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i>dashboard</a></li>
                    <li><a href="#"><i class="fas fa-check-circle"></i>configuration</a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i>mail app</a></li>
                    <li><a href="#"><i class="fas fa-money-bill-wave-alt"></i>payment</a></li>
                    <li><a href="#"><i class="fas fa-check-double"></i>absence</a></li>
                    <li><a href="#"><i class="fas fa-pen-square"></i>exercices</a></li>
                    <li><a href="#"><i class="fas fa-book"></i>controles</a></li>
                    
                
                </ul>
            </nav>
        </header>
        <main>
        <form class="mail" method="POST">
            <div class="mail-title">
                <div class="text">
                    <p>mail-inbox</p>
                    <span>apps / mail-inbox</span>
                </div>
                
                
                    
                    <input type="button" value="add new one" class="btn" onclick="hide()">
                </div>
            <div class="mail-desc">
                <div class="mail-option">
                    <div class="top"> <button class="btn btn-l"> compose</button></div>
                    <div class="bottom">
                       <ul class="option-1">
                          
                       <li><p><i class="fas fa-inbox"></i> inbox</p> <span>20</span></li>
                       <li><p><i class="fas fa-users"></i> utilisateurs</p> <span>20</span></li>
                       <li><p><i class="fas fa-users-cog"></i> admin</p> <span>20</span></li>
                       <li><p><i class="fas fa-users-slash"></i></i> suspend</p> <span>20</span></li><!---->
                       <li><p><i class="fas fa-user-shield"></i> active</p> <span>20</span></li>
                       
                       </ul>
                       <ul class="option-2">
                        
                          <li>label</li>
                          <li><p><i class="fas fa-graduation-cap"></i> lycee</p> <span>20</span></li>
                          <li><p><i class="fas fa-university"></i> college</p> <span>20</span></li>
                          <li><p><i class="fas fa-school"></i> primaire</p> <span>20</span></li>
                          
                      
                          </ul>
                          <ul class="option-3">
                          <li>social</li>
                          <li><p><i class="fab fa-facebook-f"></i> facebook</p> <span>20</span></li>
                          <li><p><i class="fab fa-google"></i> google</p> <span>20</span></li>
                          <li><p><i class="fas fa-street-view"></i> direct</p> <span>20</span></li>
                     
                          </ul>
                    </div>
                </div>
                <div class="mail-loader">
                    <div class="top">
                        <div class="left"><!---->
                           
                            <button class="btn btn-s" id="btn1"><i class="fas fa-sync"></i></button>
                            <!--<input type="button" value="add new one" class="btn" onclick="hide()">-->
                           <p id="btn2" class="btn btn-s" onclick="more()">more<i class="fas fa-chevron-right" id="mi"></i></p>
                           <!--<button class="btn btn-s" id="btn2">more <i class="fas fa-chevron-right"></i></button>--> 
                            <input type="search" placeholder=""  id="btn3">
                            <ul id="more">
                                <li><button class="btn-li "> <i class="fas fa-sync"></i>activate</button></li>
                                <li><button class="btn-li "> <i class="fas fa-user-slash"></i>auspend</button></li>
                                <li><button class="btn-li "> <i class="fas fa-users-cog"></i>admin</button></li>
                                <li><button class="btn-li "> <i class="fas fa-user-check"></i>utlisateur</button></li>
                                
                            </ul>

                        </div>
                        <div class="right">
                            <p>1-50 of 234 </p>
                            <button class="btn btn-s"><i class="fas fa-forward"></i></button>
                        </div>
                 </div>
                <div class="bottom">
                    <ul > 
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="fas fa-star" id="i1"></i>
                            <i class="fas fa-user-slash" id="i3"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="far fa-star" id="i2"></i>
                            <i class="fas fa-user-slash" id="i4"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="fas fa-star" id="i1"></i>
                            <i class="fas fa-user-slash" id="i3"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="far fa-star" id="i2"></i>
                            <i class="fas fa-user-slash" id="i4"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="fas fa-star" id="i1"></i>
                            <i class="fas fa-user-slash" id="i3"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="far fa-star" id="i2"></i>
                            <i class="fas fa-user-slash" id="i4"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="fas fa-star" id="i1"></i>
                            <i class="fas fa-user-slash" id="i3"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="far fa-star" id="i2"></i>
                            <i class="fas fa-user-slash" id="i4"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="fas fa-star" id="i1"></i>
                            <i class="fas fa-user-slash" id="i3"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="far fa-star" id="i2"></i>
                            <i class="fas fa-user-slash" id="i4"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="fas fa-star" id="i1"></i>
                            <i class="fas fa-user-slash" id="i3"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="far fa-star" id="i2"></i>
                            <i class="fas fa-user-slash" id="i4"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="fas fa-star" id="i1"></i>
                            <i class="fas fa-user-slash" id="i3"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="far fa-star" id="i2"></i>
                            <i class="fas fa-user-slash" id="i4"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="fas fa-star" id="i1"></i>
                            <i class="fas fa-user-slash" id="i3"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="far fa-star" id="i2"></i>
                            <i class="fas fa-user-slash" id="i4"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="fas fa-star" id="i1"></i>
                            <i class="fas fa-user-slash" id="i3"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="far fa-star" id="i2"></i>
                            <i class="fas fa-user-slash" id="i4"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="fas fa-star" id="i1"></i>
                            <i class="fas fa-user-slash" id="i3"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="far fa-star" id="i2"></i>
                            <i class="fas fa-user-slash" id="i4"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="fas fa-star" id="i1"></i>
                            <i class="fas fa-user-slash" id="i3"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="far fa-star" id="i2"></i>
                            <i class="fas fa-user-slash" id="i4"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="fas fa-star" id="i1"></i>
                            <i class="fas fa-user-slash" id="i3"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="far fa-star" id="i2"></i>
                            <i class="fas fa-user-slash" id="i4"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                            <li>
                            <input type="checkbox" id="c1"> 
                            <i class="fas fa-star" id="i1"></i>
                            <i class="fas fa-user-slash" id="i3"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
                        <li>
                            <input type="checkbox" id="c1"> 
                            <i class="far fa-star" id="i2"></i>
                            <i class="fas fa-user-slash" id="i4"></i>
                            <p class="p1">nom penom </p>
                            <p class="p2"> walidddd@gmail.com</p>
                            <p class="p3"> april 01</p>

                        </li>
               
 
                    </ul>
                </div>
                    
                </div>
            </div>
        </form>
        <div id="div"><!--<input type="button" value="add new one" class="btn" onclick="hide()">-->
                        
        <input type="button" value="X" class="btn" onclick="hide()"  id="btn-close">
            
                       
             <form method="POST" class="div-form">
                                <h1>Create Account</h1>
                                <div class="social-container">
                                    <a href="#" class="social"><i class="fab fa-3x fa-facebook" id="i1"></i></a>
                                    <a href="#" class="social"><i class="fab fa-3x fa-google" id="i2"></i></a>              
                                </div>
                                <span>or use your email for registration</span>
                                <input type="text" placeholder="Name" name="Nom" required  />
                                <input type="email" placeholder="Email" name="Email" required />
                                <input type="password" placeholder="Password" name="Psw" required/>
                                <button type="submit" name="sup" class="btn">add</button>
                                
            </form>
                        
        </div> 
        </main>
        <footer><p>Lorem ipsum dolor sit amet consectetur aspernatur quia quidem?</p> </footer>
    
    <script src="script1.js?1501"></script>
</body>
</html>