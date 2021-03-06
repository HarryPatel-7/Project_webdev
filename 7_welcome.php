<?php

session_start();

if(!isset($_SESSION['Uname']))
{
    header("Location: 7_login.html");
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Template 7 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="7_style.css">
        
        <script src="7_javascript.js"> </script>
    </head>

    <body style="background-color: #ffc404;">
        <div class="header">
            <div class="navbar">
                <div class="menu">
                    <ul>
                        <li> <a href="#"> Home </a> </li>
                        <li> <a href="http://localhost/7_features.html"> Features </a> </li>
                        <li> <a href="http://localhost/7_styleguide.html"> Style Guide </a> </li>
                        <li> <a href="http://localhost/11_index.html" > Contact Us </a> </li>                       
                    </ul>
                </div>
                
                <h3 style="font-family: Lucida Handwriting ; font-size: larger ; color: darkblue ; margin-left: auto; margin-right: auto;">
                    Renge
                </h3>
                
                <div class="Register-btn"> <?php echo "<h3> Welcome " . $_SESSION['Uname'] . "</h3>"; ?> </div>
                <div class="Signin-btn"> <a href="7_logout.php"> Logout </a> </div>
                <div class="searchbox">
                    <input type="text" class="searchText" placeholder="Search..">
                    <a href="#" class="searchbtn">
                        <button type="submit" class="button"> <i class="fa fa-search"></i> </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="column">
                    <p> Announcements </p>
                    <h3> Get started with Renge </h3>
                </div>
            </div>
            <div class="column">
                <div class="row">
                    <p2> Don't miss it </p2>
                    <div class="column">
                        <h3> Everthing has beauty , but not everyone sees it </h3>
                        <br>
                        <p1> Charles Barrett and others </p1>                            
                    </div>
                    <div class="column">    
                        <h3> Design is a mirror , reflecting the culture </h3>
                        <br>
                        <p1> Victoria West & David cole </p1>
                    </div>
                    <div class="column">                            
                        <h3> I always loved aesthetics </h3>
                        <br>
                        <br>
                        <p1> Hannah Weastell & Victoria West </p1>
                    </div>
                </div>
            </div>           
        </div>

        <br>
        <br>

        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div class="content">
                    <p> A year ago by Megan Anderson & Victoria West - 3 min read </p>
                    <br>
                    <a> Now we're getting somewhere </a>
                    <br>
                    <br>
                    <br>
                    <p> Quae quo sunt excelsiores, eo dant clariora indicia naturae. Sed haec quidem liberius ab eo dicuntur et </p>
                    <br>
                    <br>
                    <p1> 
                        <a1 href="#"> #story </a1>
                        <a1 href="#"> #art </a1>
                        <a1 href="#"> #creative </a1> 
                    </p1>
                </div>
                <div class="imageBox">
                    <img src="http://localhost/Image1.png" height="400" width="400">
                </div>
            </div>
        </section>
        <br>
        <br>
        <br>
        <br>
        <section>
            <div class="div1">
                <div class="Text">
                    <h2><b> Everything has beauty , but not everyone sees it </b></h2>
                    <br>
                    <p> Charles Barrett and others - 3 min read </p>
                    <br>
                    <a> Utilitatis causa amicitia est quaesita. Quae quo sunt excelsiores, eo dant clariora indicia naturae. Sed haec quidem liberius ab eo dicuntur et... </a>
                    <br>
                    <br>
                    <p> <a href="#">  #story    #illustration </a> </p>
                </div> 
                <div class="image">
                    <img src="http://localhost/I2.png" height="150" width="150">
                </div>
            </div>
            <div class="div2">
                <div class="Text">
                    <h2><b> Design is a mirror, reflecting the culture </b></h2>
                    <br>
                    <p> Victoria West & David Cole ??? 2 min read </p>
                    <br>
                    <a> Tertium autem omnibus aut maximis rebus iis, quae secundum naturam sint, fruentem vivere. Materiam vero rerum et copiam apud hos exilem, apud illos uberrimam reperiemus. Atque his de rebus et splendida est eorum et illustris oratio </a>
                    <br>
                    <br>
                    <p> <a href="#">  #creative    #product </a> </p>
                </div> 
                <div class="image">
                    <img src="http://localhost/I3.png" height="150" width="150">
                </div>
            </div>
        </section>
        <br>
        <br>
        <br>
        <br><br>
        
        <section class="s1">
            <div class="div1">
                <br>
                
                <div class="Text">
                    <h2><b> Anyone can hold the helm when the sea is calm </b></h2>
                    <br>
                    <p> Megan Anderson & Charles Barrett ??? 2 min read </p>
                    <br>
                    <a> Audio equidem philosophi vocem, Epicure, sed quid tibi dicendum sit oblitus es. Haec et tu ita posuisti, et verba vestra sunt. Contemnit... </a>
                    <br>
                    <br>
                    <p> <a href="#">  #creative    #review    #story </a> </p>
                    <br>
                </div> 
                <div class="image">
                    <img src="http://localhost/I4.png" height="150" width="150">
                </div>
            </div>
            <br><br><br>
            
            <div class="div2"> 
                <span> Members </span>              
                <div class="Text">                    
                    <h2><b> Being unique is better than being perfect </b></h2>
                    <br>
                    <p> Megan Anderson ??? 2 min read </p>
                    <br>
                    <a> Quae in controversiam veniunt, de iis, si placet, disseramus. Iam quae corporis sunt, ea nec auctoritatem cum animi partibus, comparandam et cognitionem habent faciliorem. </a>
                    <br>
                    <br>
                    <p> <a href="#"> #review    #story </a> </p>
                </div> 
            </div>
        </section>
        <br><br><br><br>

        <section class="text-gray-600 body-font">
            <br>
            <br>
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div class="content">
                    <br><br><br><br><br>
                    <p> 2 years ago by Hannah Weastell & Victoria West ??? 3 min read </p>
                    <br>
                    <a> I always loved aesthetics </a>
                    <br>
                    <br>
                    <br>
                    <p> Quid ad utilitatem tantae pecuniae. Duo enim genera quae erant, fecit tria. Et quod est munus, quod opus sapientiae. Sed in rebus apertissimis nimium longi sumus. Quos nisi redarguimus, omnis virtus, omne decus, omnis vera laus deserenda est. </p>
                    <br>
                    <br>
                    <p1> <a1 href="#">  #design    #story  </a1> </p1>
                </div>
                <div class="imageBox1">
                    <img src="http://localhost/Image2.png" height="400" width="400">
                </div>
            </div>
        </section>

        <span> Members </span>
        <section>
            <div class="div1">
                <div class="Text">
                    <h2><b> You???ve gotta be natural </b></h2>
                    <br>
                    <p> Hannah Weastell and others ??? 2 min read </p>
                    <br>
                    <a> Sed tamen intellego quid velit. Non est igitur summum malum dolor. Tu autem inter haec tantam multitudinem hominum interiectam non vides nec laetantium nec dolentium. </a>
                    <br>
                    <br>
                    <p> <a href="#">  #product   #idea </a> </p>
                </div> 
                <div class="image">
                    <img src="http://localhost/I5.png" height="150" width="150">
                </div>
            </div>
            <div class="div2">
                <div class="Text">
                    <h2><b> The difference is quality </b></h2>
                    <br>
                    <p> David Cole & Charles Barrett ??? 3 min read </p>
                    <br>
                    <a> Qui autem esse poteris, nisi te amor ipse ceperit. Utilitatis causa amicitia est quaesita. Miserum hominem! Si dolor summum malum est, dici aliter non potest. Videamus igitur sententias eorum, tum ad verba redeamus. Vide, ne etiam menses! nisi forte eum dicis, qui, simul atque arripuit. </a>
                    <br>
                    <br>
                    <p> <a href="#">  #creative    #idea    #story </a> </p>
                </div> 
            </div>
        </section>
        <br>
        <br>
        <br>
        <br>
        
        <section class="s1">
            <div class="div1">
                <br>
                <div class="Text">
                    <h2><b> When you are on your way </b></h2>
                    <br>
                    <p> Hannah Weastell & Megan Anderson ??? 3 min read </p>
                    <br>
                    <a> Vide, ne etiam menses! nisi forte eum dicis, qui, simul atque arripuit, interficit. Atque his de rebus et splendida est eorum et illustris oratio. Ego autem existimo, si honestum esse aliquid ostendero, quod sit ipsum vi sua propter seque expetendum, iacere vestra omnia. </a>
                    <br>
                    <br>
                    <p> <a href="#"> #design    #idea    #creative </a> </p>
                </div> 
                <div class="image">
                    <img src="http://localhost/I6.png" height="150" width="150">
                </div>
            </div>
            <div class="div2">                
                <div class="Text">                  
                    <h2><b> My childhood was full of wonderful memories </b></h2>
                    <br>
                    <p> Charles Barrett ??? 3 min read </p>
                    <br>
                    <a> Audio equidem philosophi vocem, Epicure, sed quid tibi dicendum sit oblitus es. Haec et tu ita posuisti, et verba vestra sunt. Contemnit... </a>
                    <br>
                    <br>
                    <p> <a href="#"> #story </a> </p>
                </div> 
                <div class="image">
                    <img src="http://localhost/I7.png" height="150" width="150">
                </div>
            </div>
        </section>
        <br>
        <br><br><br><br>
        <br>
        <div class="division">
            <p> Subscribe to new posts. </p>
        </div>
        <div class="division2">
            <form>
                <label for="email"></label>
                <input type="text"  name="" id="email" placeholder="Your Email Address">
                <input type="button" class="button" id="button" value="Subscribe" onclick="validate()">
            </form>
        </div>
        <br><br><br>
        
        <hr>
        <br>
        <br>

        <section class="footer-section">
            <div class="l-footer">
                <h3 style="font-family: Lucida Handwriting ; font-size: larger ; color: darkblue ; margin-left: auto; margin-right: auto;"> Renge </h3>
                <br>
                <p> A minimal, functional theme for running a paid-membership publication on Ghost. </p>
                <br>

                
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-bitbucket"></i></a>
                <a href="#"><i class="fa fa-github-square"></i></a>
                <a href="#"><i class="fa fa-kickstarter-k"></i></a>
                <a href="#"><i class="fa fa-reddit"></i></a>
                <a href="#"><i class="fa fa-unsplash"></i></a>
                <a href="#"><i class="fa fa-vimeo-v"></i></a>
                <br><br>
                <br><br>
                
            </div>

            <div class="r-footer">
                <ul class="box">
                    <li> <a href="#"> Features </a> </li>
                    <li> <a href="#"> StyleGuide </a> </li>
                    <li> <a href="#"> Contact </a> </li>
                    <li> <a href="#"> Get Theme </a> </li>
                    <li> <a href="#"> Membership </a> </li>
                </ul>
                <ul class="box">
                    <li> <a href="#"> Tags </a> </li>
                    <li> <a href="#"> Authors </a> </li>
                    <li> <a href="#"> Subscribe </a> </li>
                    <li> <a href="#"> 404 </a> </li>
                    <li> <a href="#"> Account page </a> </li>
                </ul>
                <ul class="box">
                    <li> <a href="#"> Tag page </a> </li>
                    <li> <a href="#"> Author page </a> </li>
                    <li> <a href="#"> Light Version </a> </li>
                    <li> <a href="#"> Dark version </a> </li>
                    <li> <a href="#"> Sign In/Up </a> </li>
                </ul>    
            </div>
        </section>	

        <p class="p1"> Renge ?? 2021. All Right Reserved. Published with Ghost. </p>
    </body>
</html>