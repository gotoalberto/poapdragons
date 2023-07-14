<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?> 
<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
    <head>
        <meta prefix="og: http://ogp.me/ns#"/>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="description" content="The Web3 game to encourage the usage of POAP.">
        <meta name="keywords" content="game, premium template, gaming, online gaming, pc game, android, ios, google play store, apple appstore, one page template, dragonic, dragons, themeforest">
        <title>POAPS & DRAGONS</title>
        <!-- Bootstrap -->
        <link href="https://fonts.googleapis.com/css?family=Cinzel|Cinzel+Decorative" rel="stylesheet">
        <link href="fonts/ionicons/2.0.1/css/ionicons.min.css" type="text/css" media="screen" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
        <![endif]-->
        <meta name="theme-color" content="#181818">
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
    </head>
    <body data-spy="scroll" data-target=".navbar-custom">
        <div class="container-fluid">
            <div class="row">
                <!-- ============== HEADER =============== -->
                <header id="home">
                    <!-- Main nav -->
                    <nav class="navbar navbar-inverse navbar-custom navbar-fixed-top">
                        <div class="container">
                            <div class="navbar navbar-header">
                                <a class="navbar-brand navbar-logo" href="#home"></a>
                                <button type="button" class="navbar-toggle custom-toggle-btn" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                                <span class="sr-only">
                                Toggle navigation
                                </span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="main-nav">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="plain-link"><a href="#game">The Game</a></li>
                                    <li class="plain-link"><a href="#cards">Wooden Cards</a></li>
                                    <li class="plain-link"><a href="#heroes">Web3 Heroes Gallery</a></li>
                                    <li class="plain-link"><a href="#contact">Become a Hero</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <h1>
                        <!--<img onload="this.style.opacity='1';" class="big-logo" src="https://poapdragons.s3.eu-west-2.amazonaws.com/img/Dragonic-Final.png" alt="Dragonic big logo">-->
                    </h1>
                </header>
            </div>
            <!-- ============== DIVIDER ============== -->
            <div class="Divider">
                <hr class="Divider-rule">
            </div>
            <!-- ============== GAME SECTION =============== -->
            <div class="row pattern">
                <section class="features" id="game">
                    <div class="container">
                        <div class="row">
                            <h2>The Game</h2>
                            <p class="section-description">
                                POAPS & DRAGONS is a non-profit game created to pay tribute to the Web3 builders, and encourage the usage of the <a href="https://poap.xyz" target="_blank" style="color: #ecd19a">POAP protocol</a>. Now a days, it's still possible to meet outstanding Web3 builders in person, just by attending their confferences. That's amazing, don't you think?. It won't be that easy for long.
                                The purpose of this game is to meet as many future Web3 heroes as you can, while it's still possible.<br/><br/>
                                
                                Each character has its own NFT at the heroes' gallery. Your quest consists of meeting them in person and getting their POAP. Your networking abilities will increase as you meet each character.<br/><br/>
                                
                                Right now, the POAPs & DRAGONS promoting team is in charge of picking which characters take part in the gallery. But it won't be like that forever. A DAO will be making such decisions in the foreseable future.
                                The most active players will be rewarded with tokens from POAPs & DRAGONS DAO. The governance of the project will then be in their hands.<br/><br/>
                                Let the quest begin!
                            </p>
                        </div>
                        <div class="row" style="margin-top: 5%;align-items:center;justify-content:center;display:flex;">
                            
                                <div class="col-sm-6 col-md-3">
                                    <img class="features-img dragon" src="https://poapdragons.s3.eu-west-2.amazonaws.com/img/dragon_2.png">
                                </div>
                        </div>

                        <div class="row items-container bottom-wrapper">
                            <p>&nbsp;<br>&nbsp;</p>
                        </div>
                        <!--
                        <div class="row">
                            <h2>Choose your Hero</h2>
                            <article class="col-sm-6 col-md-3 box features-item thumbnail-100" data-toggle="modal" data-target="#shop-modal">
                                <img class="features-img" src="https://poapdragons.s3.eu-west-2.amazonaws.com/img/character-1.jpg" alt="Aleister Hero Character" data-Strength="9" data-Dexterity="7" data-Agility="7" data-Willpower="8" data-Intelligence="4">
                                <span class="item-name-caption hidden-xs">
                                Aleister
                                </span>
                                <h3>Aleister</h3>
                                <p class="features-p">
                                    Aleister, the former demonlord, is always looking at others bearing a malefic grin upon his twisted visage, harnessing all the power he can muster as he directs bolts of pure chaos towards his foes.
                                </p>
                            </article>
                            <article class="col-sm-6 col-md-3 box features-item thumbnail-100" data-toggle="modal" data-target="#shop-modal">
                                <img class="features-img" src="https://poapdragons.s3.eu-west-2.amazonaws.com/img/character-2.jpg" alt="Hecate Hero Character" data-Strength="4" data-Dexterity="7" data-Agility="7" data-Willpower="9" data-Intelligence="8">
                                <span class="item-name-caption hidden-xs">
                                Hecate
                                </span>
                                <h3>Hecate</h3>
                                <p class="features-p">
                                    The only place Hecate feels safe is total Darkness, where she envelopes herself and thrives, until it totally consumes her existence. Until that strange familiar odor which vanished, reappears and stabs you - in the Dark.
                                </p>
                            </article>
                            <div class="clearfix visible-sm-block"></div>
                            <article class="col-sm-6 col-md-3 box features-item thumbnail-100" data-toggle="modal" data-target="#shop-modal">
                                <img class="features-img" src="https://poapdragons.s3.eu-west-2.amazonaws.com/img/character-3.jpg" alt="Theregar Hero Character" data-Strength="7" data-Dexterity="9" data-Agility="9" data-Willpower="4" data-Intelligence="6">
                                <span class="item-name-caption hidden-xs">
                                Theregar
                                </span>
                                <h3>Theregar</h3>
                                <p class="features-p">
                                    Theregar's smile looks intimidating as it is, yet is amplified by the fel green hue of the enchantments he is preparing: As he deflects his attackers, his foes are enlightened by his immense control of the Shadows...
                                </p>
                            </article>
                            <article class="col-sm-6 col-md-3 box features-item thumbnail-100" data-toggle="modal" data-target="#shop-modal">
                                <img class="features-img" src="https://poapdragons.s3.eu-west-2.amazonaws.com/img/character-4.jpg" alt="Roth Hero Character" data-strength="5" data-dexterity="6" data-agility="6" data-willpower="9" data-intelligence="9">
                                <span class="item-name-caption hidden-xs">
                                Roth
                                </span>
                                <h3>Roth</h3>
                                <p class="features-p">
                                    Void claimed all in the Halls of Reflection as Roth rised from the Stone, his voice echoing again in the sultry darkness. His enemies fallen, their eyesight blurred, their powers escaping their body as he consumed their souls...
                                </p>
                            </article>
                        </div>
                    </div>-->
                </section>
            </div>
            <!-- ============== DIVIDER ============== -->
            <div class="Divider">
                <hr class="Divider-rule">
            </div>
            <!-- ============== QUEST SECTION =============== -->
            <div class="row pattern-dark">
                <section class="gallery" id="cards">
                    <div class="container">
                        <div class="row">
                            <h2>Wooden Cards</h2>
                            <p class="section-description">
                                To play this game and get POAPs you just need an Ethereum Address. No gas, no fees and you don't need to buy anything, ever. Easy, right?<br/><br/>
                                You will get the POAP of each character by meeting them in person.
                                To guarantee that you have, in fact, met in person, we have given them a wooden card you will have to tap. The cards have the character's illustration engraved on them. And, by the way, the cards look super cool!<br/>
                                Each wooden card has an NFC tag. When you physically tap on it with your phone, you get a single-use link to claim your POAP. Isn't that a great excuse to talk to the characters and get to know them better?<br/><br/>
                                There is a growing number of players that have already started their quest. Join them!
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div id="dragonic-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
                            <div class="modal-corner modal-corner-top-left"></div>
                            <div class="modal-corner modal-corner-top-right"></div>
                            <div class="modal-corner modal-corner-bottom-left"></div>
                            <div class="modal-corner modal-corner-bottom-right"></div>
                            <div class="modal-border modal-border-top"></div>
                            <div class="modal-border modal-border-right"></div>
                            <div class="modal-border modal-border-bottom"></div>
                            <div class="modal-border modal-border-left"></div>
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#dragonic-carousel" data-slide-to="0"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="https://poapdragons.s3.eu-west-2.amazonaws.com/img/video_laser.gif" alt="Dragonic Game Gameplay Screenshot Dragons Mountains">
                                </div>
                            </div>
                            <!-- Controls -->
                            <!--
                            <a class="left carousel-control" href="#dragonic-carousel" role="button" data-slide="prev">
                            <span class="slider-arrow slider-arrow-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#dragonic-carousel" role="button" data-slide="next">
                            <span class="slider-arrow slider-arrow-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            </a>
                            -->
                        </div>
                    </div>
                </section>
            </div>
            <!-- ============== DIVIDER ============== -->
            <div class="Divider">
                <hr class="Divider-rule">
            </div>
            <!-- ============== HEROES SECTION =============== -->
            <div class="row pattern">
                <section id="heroes">
                    <div class="container">
                        <div class="row">
                            <h2>The Web3 Heroes Gallery</h2>
                            <div style="text-align:center">
                                <a xmlns="http://www.w3.org/1999/xhtml" class="button-game" target="_blank" id="connect-button" style="width:350px;text-align:center;cursor:pointer;">
                                    <span class="button-game-bg-left"></span>
                                    <span class="button-game-bg-mid">
                                        <span id="connect-button-text">Connect Metamask</span>
                                    </span>
                                    <span class="button-game-bg-right"></span>
                                </a>
                            </div>
                            
                            <p id="poap-message" class="section-description" style="color: #ecd19a;display:none"></p>

                            <p class="section-description">
                                <br/>Each time you tap on a character's wooden card, you will get their POAP and unlock its card design. Unlocked cards are shown with a red button to see its details. This section will be updated, showing the cards you have collected. To make the experience memorable, we have crafted both cards, the wooden one and the digital one, with great care.<br/><br/>
                                We hope you enjoy playing while you meet the heroes that make Web3 possible.
                            </p>
                        </div>
                        <div class="row items-container">

                             <div id="poap-57278-data-target" class="col-xs-5 col-sm-3 gallery-item item-3 thumbnail-50" data-toggle="modal" data-target="#anonymous">
                                <img card-img="https://poapdragons.s3.eu-west-2.amazonaws.com/img/dragonic-gameplay-01.jpg" hidden-img="https://poapdragons.s3.eu-west-2.amazonaws.com/img/dragonic-gameplay-01.jpg" id="poap-57278-img" src="https://poapdragons.s3.eu-west-2.amazonaws.com/img/dragonic-gameplay-01.jpg" alt="Alberto G. Toribio">
                                <span class="item-name-caption hidden-xs">Alberto G. Toribio</span>
                                <div class="panel-item__text">
                                    <h3 class="panel-item__title">Alberto G. Toribio</h3>
                                </div>
                                <a xmlns="http://www.w3.org/1999/xhtml" class="button-game">
                                <span class="button-game-bg-left"></span>
                                <span id="poap-57278-button" class="button-game-bg-mid-disabled">
                                <span id="poap-57278-button-text">Not achieved</span>
                                </span>
                                <span class="button-game-bg-right"></span>
                                </a>
                            </div>

                            <div id="poap-57279-data-target" class="col-xs-5 col-sm-3 gallery-item item-3 thumbnail-50" data-toggle="modal" data-target="#anonymous">
                                <img src="https://poapdragons.s3.eu-west-2.amazonaws.com/img/dragonic-gameplay-01.jpg" alt="Alberto G. Toribio">
                                <span class="item-name-caption hidden-xs">Jorge Schnura</span>
                                <div class="panel-item__text">
                                    <h3 class="panel-item__title">Jorge Schnura</h3>
                                </div>
                                <a xmlns="http://www.w3.org/1999/xhtml" class="button-game">
                                <span class="button-game-bg-left"></span>
                                <span id="poap-57279-button" class="button-game-bg-mid-disabled">
                                <span id="poap-57279-button-text">Not achieved</span>
                                </span>
                                <span class="button-game-bg-right"></span>
                                </a>
                            </div>

                            <div class="col-xs-5 col-sm-3 gallery-item item-3 thumbnail-50" data-toggle="modal" data-target="#anonymous">
                                <img src="https://poapdragons.s3.eu-west-2.amazonaws.com/img/dragonic-gameplay-01.jpg" alt="Alberto G. Toribio">
                                <span class="item-name-caption hidden-xs">Jori Ambruster</span>
                                <div class="panel-item__text">
                                    <h3 class="panel-item__title">Andrés Cuadrado</h3>
                                </div>
                                <a xmlns="http://www.w3.org/1999/xhtml" class="button-game">
                                <span class="button-game-bg-left"></span>
                                <span class="button-game-bg-mid-disabled">
                                <span>Not achieved</span>
                                </span>
                                <span class="button-game-bg-right"></span>
                                </a>
                            </div>

                            <div class="col-xs-5 col-sm-3 gallery-item item-3 thumbnail-50"data-toggle="modal" data-target="#anonymous">
                                <img src="https://poapdragons.s3.eu-west-2.amazonaws.com/img/dragonic-gameplay-01.jpg" alt="Alberto G. Toribio">
                                <span class="item-name-caption hidden-xs">Nicolás Barilari</span>
                                <div class="panel-item__text">
                                    <h3 class="panel-item__title">Nicolás Barilari</h3>
                                </div>
                                <a xmlns="http://www.w3.org/1999/xhtml" class="button-game">
                                <span class="button-game-bg-left"></span>
                                <span class="button-game-bg-mid-disabled">
                                <span>Not achieved</span>
                                </span>
                                <span class="button-game-bg-right"></span>
                                </a>
                            </div>

                            <div class="col-xs-5 col-sm-3 gallery-item item-3 thumbnail-50"data-toggle="modal" data-target="#anonymous">
                                <img src="https://poapdragons.s3.eu-west-2.amazonaws.com/img/dragonic-gameplay-01.jpg" alt="Alberto G. Toribio">
                                <span class="item-name-caption hidden-xs">Jesús Pérez</span>
                                <div class="panel-item__text">
                                    <h3 class="panel-item__title">Jesús Pérez</h3>
                                </div>
                                <a xmlns="http://www.w3.org/1999/xhtml" class="button-game">
                                <span class="button-game-bg-left"></span>
                                <span class="button-game-bg-mid-disabled">
                                <span>Not achieved</span>
                                </span>
                                <span class="button-game-bg-right"></span>
                                </a>
                            </div>

                            <div class="col-xs-5 col-sm-3 gallery-item item-3 thumbnail-50"data-toggle="modal" data-target="#anonymous">
                                <img src="https://poapdragons.s3.eu-west-2.amazonaws.com/img/dragonic-gameplay-01.jpg" alt="Alberto G. Toribio">
                                <span class="item-name-caption hidden-xs">Facundo Ameal</span>
                                <div class="panel-item__text">
                                    <h3 class="panel-item__title">Facundo Ameal</h3>
                                </div>
                                <a xmlns="http://www.w3.org/1999/xhtml" class="button-game">
                                <span class="button-game-bg-left"></span>
                                <span class="button-game-bg-mid-disabled">
                                <span>Not achieved</span>
                                </span>
                                <span class="button-game-bg-right"></span>
                                </a>
                            </div>
                            
                        </div>
                        <div class="row items-container bottom-wrapper">
                            <!-- Modal -->
                            <div class="modal fade" id="alberto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body pattern-dark clearfix" id="modalBody">
                                            <h3 class="panel-item__title" style="text-align:center">Alberto G. Toribio</h3>
                                            <img src="" id="showcase-img" class="img-thumbnail" alt="Showcase Dragonic Game">
                                            
                                            <p class="panel-item__summary">
                                                He founded a Bitcoin DEX in 2014, being one of Bitcoin pioneers in Spain.
                                            </p>
                                        </div>
                                        <div class="modal-footer pattern">
                                            <a xmlns="http://www.w3.org/1999/xhtml" class="button-game shop-modal-hide" href="https://google.com" target="_blank">
                                            <span class="button-game-bg-left"></span>
                                            <span class="button-game-bg-mid">
                                            <span>View your POAP</span>
                                            </span>
                                            <span class="button-game-bg-right"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="jorge" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body pattern-dark clearfix" id="modalBody">
                                            <h3 class="panel-item__title" style="text-align:center">Jorge Schnura</h3>
                                            <img src="" id="showcase-img" class="img-thumbnail" alt="Showcase Dragonic Game">
                                            
                                            <p class="panel-item__summary">
                                                He founded Unlockd, a collateralized NFT platform.
                                            </p>
                                        </div>
                                        <div class="modal-footer pattern">
                                            <a xmlns="http://www.w3.org/1999/xhtml" class="button-game shop-modal-hide" href="https://google.com" target="_blank">
                                            <span class="button-game-bg-left"></span>
                                            <span class="button-game-bg-mid">
                                            <span>Link to your POAP</span>
                                            </span>
                                            <span class="button-game-bg-right"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>

            <!-- ============== DIVIDER ============== -->
            <!--
            <div class="Divider">
                <hr class="Divider-rule">
            </div>


            <div class="row">
                <section class="testimonials" id="testimonials">
                    <div class="container">
                        <div class="row">
                            <h2>Insights of the Players</h2>
                        </div>
                        <div class="row">
                            <section class="col-md-4">
                                <cite><img src="https://poapdragons.s3.eu-west-2.amazonaws.com/img/developer-1.jpg" alt="Hu Shun Xiao"></cite>
                                <blockquote>
                                    
                                </blockquote>
                                <p>
                                    <strong>Jesús Pérez</strong>, Crypto Plaza Founder
                                </p>
                            </section>
                            <section class="col-md-4">
                                <cite><img src="https://poapdragons.s3.eu-west-2.amazonaws.com/img/developer-2.jpg" alt="Rob Auguste"></cite>
                                <blockquote>
                                    
                                </blockquote>
                                <p>
                                    <strong>Jesús Pérez</strong>, Ethic Hub Founder
                                </p>
                            </section>
                            <section class="col-md-4">
                                <cite><img src="https://poapdragons.s3.eu-west-2.amazonaws.com/img/developer-3.jpg" alt="Antonio Kirill"></cite>
                                <blockquote>

                                </blockquote>
                                <p>
                                    <strong>Jorge Schnura</strong>, UnlockD Founder
                                </p>
                            </section>
                        </div>
                    </div>
                </section>
            </div>
            <!-- ============== DIVIDER ============== -->
            <div class="Divider">
                <hr class="Divider-rule">
            </div>
            <!-- ============== CONTACT SECTION =============== -->
            <div class="row pattern">
                <section class="contact" id="contact">
                    <div class="container">
                        <div class="row">
                            <h2>Become a Web3 Hero</h2>
                            <p class="section-description">
                                You can also become a Web3 hero and become a card in this game. Tell us your story! We will evaluate your application to take part in this game.<br/>

                                If accepted, we will design a character for you and incorporate it into the gallery.<br/><br/>

                                Getting a custom-made character will cost 0.5ETH. In return, you will get a virtual card and a wooden engraved card with your character's design. The physical wooden card will allow you to give your character's POAPs to other POAPs & DRAGONS players through NFC technology. <br/><br/>

                                This is a non-profit project, created by <a style="color: #ecd19a" href="https://twitter.com/gotoalberto" target="_blank">Alberto G. Toribio</a>, from <a style="color: #ecd19a" href="https://cryptoplaza.es" target="_blank">Crypto Plaza</a> to support the POAP project. The money collected will be used to pay third party providers, like the creative team who make the card designs, the production costs of the physical cards and web hosting. The rest will be donated to the POAP protocol.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-16 col-lg-9">
                                <form action="mail.php" method="post" class="contact-form">
                                    <div class="row">
                                        <div class="col-sm-4 label-container">
                                            <label for="name">Name or ENS: </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="name" id="name" required placeholder="your name or name.eth.">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 label-container">
                                            <label for="email">Email: </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="email" name="email" id="email" required placeholder="Your Web2 email, or web3 native mail.">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 label-container">
                                            <label>Why are you a Hero: </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select name="reason" class="form-control">
                                                <option selected>I founded a Web3 project</option>
                                                <option>I collaborate with a Web3 project</option>
                                                <option>I'm a Web3 artist or content creator</option>
                                                <option>I'm an Old Generation user</option>
                                                <option>I just want to contribute to POAP.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 label-container">
                                            <label>Tell us your history:</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <textarea name="message" placeholder="Why should you be included in the Web3 Heroes Gallery? Tell us greatfull reason or just something fun." style="width: 100%"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 button-submit"></div>
                                        <div class="col-sm-8">                                
                                            <button type="submit" class="btn">Submit</button>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 label-container">
                                    </div>
                                    <div class="col-sm-8">
                                        <label id="checkbox" class="col-sm-12">
                                        <span class="choice-text">By sending this form I accept the <a href="/legal" target="_blank" style="color: #ecd19a">privacy policy.</a></span>
                                        </span>
                                        </label>
                                    </div>

                                    <div class="row">
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- ============== DIVIDER ============== -->
            <div class="Divider">
                <hr class="Divider-rule">
            </div>
            <!-- ============== FOOTER =============== -->
            <div class="row pattern-dark">
                <footer class="container footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <nav class="footer-nav">
                                <ul>
                                    <li><a target="_target"href="/legal">Legal Advisory</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <nav class="social-nav">
                                <a target="_blank" href="https://twitter.com/cryptoplaza_es"><span class="ion-social-twitter"></span></a>
                                <a target="_blank" href="https://www.youtube.com/channel/UCBQES3SqvA7QirWyg69v3QQ"><span class="ion-social-youtube"></span></a>
                                <a target="_blank" href="https://www.instagram.com/cryptoplazahub/"><span class="ion-social-instagram"></span></a>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <p class="copyright">Made with love, to support POAP.</p>
                    </div>
                </footer>
            </div>
        </div>
        <!-- ============== SCRIPTS =============== -->
        <script src="https://poapdragons.s3.eu-west-2.amazonaws.com/js/jquery-1.12.4.min.js"></script>
        <script src="https://poapdragons.s3.eu-west-2.amazonaws.com/js/bootstrap/bootstrap.min.js"></script>
        <script src="https://poapdragons.s3.eu-west-2.amazonaws.com/js/waypoints/jquery.waypoints.min.js"></script>
        <script src="https://poapdragons.s3.eu-west-2.amazonaws.com/js/app.js"></script>
        <script src="https://poapdragons.s3.eu-west-2.amazonaws.com/js/jquery-mobile-custom/jquery.mobile.custom.min.js"></script>
    </body>
</html>