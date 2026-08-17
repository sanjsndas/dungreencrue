<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>


<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dungreencrue - Request accepted!</title>
    
    <meta property="og:title" content="Dungreencrue - Request accepted!" />
    <meta property="og:image" content="logo2.svg"/>
    <meta property="og:description" content="Dungreencrue - Request accepted!">
    <meta name="description" content="Dungreencrue - Request accepted!">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bakbak+One&display=swap" rel="stylesheet" />
    

    <link rel="shortcut icon" href="logo2.svg" type="image/x-icon" />
    
    <style>
        * {
            box-sizing: border-box;
        }

        body{
            direction: ltr;
            font-family: 'Work Sans', sans-serif !important;
            font-size: 15px;
            margin: 0;
            padding: 0px;
            line-height: 1.5;
        }

        a {
            text-decoration: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: 0;
        }

        ul {
            padding-left: 0;
            margin-top: 0;
            margin-bottom: 0;
            padding-inline-start: 0;
        }

        img {
            display: block;
        }

        .link {
            text-decoration: none;
        }

        .link:hover,
        .link:focus {
            color: inherit;
            cursor: pointer;
        }

        .list {
            list-style: none;
        }
        .cont-pad-big {
          padding: 111px 0;
        }
        .priv-new {
            overflow: hidden;
            word-break: break-all;
        }
        .priv-new ul {
            margin-left: 18px;
        }
        .pad-priv-n {
          padding: 0 14px;
        }
        .title {
            
            line-height: 1.5;
            margin-bottom: 1.2rem;
            position: relative;
            padding-bottom: 28px;
            margin-bottom: 38px;
            text-align: center;
            font-size: clamp(26px, 4vw, 48px);
        }

        .title mark {
            background: linear-gradient(120deg, #e4a0a1, #e4a0a1);
            background-image: linear-gradient(120deg, #fff3cd, #fff3cd);
            background-position: 0 80%;
            background-repeat: no-repeat;
            background-size: 100% 20%;
        }

        .title mark span {
            color: #a30000 !important;
            font-family: 'Abril Fatface', sans-serif;
            line-height: 1.5;
            margin-bottom: 1.2rem;
            font-weight: 200;
        }

        .container {
            padding-left: 12px;
            padding-right: 12px;
            margin-left: auto;
            margin-right: auto;
            max-width: 1200px !important;
        }

        @media screen and (min-width: 576px) and (max-width: 991px) {
            .container {
                padding-left: 15px;
                padding-right: 15px;
            }
        }

        @media screen and (min-width: 992px) {
            .container {
                padding-left: 18px;
                padding-right: 18px;
            }
        }

.button_1 {
  display: inline-block;
  padding: 0.5em 1em;
  text-decoration: none;
  border-radius: 3px;
  font-weight:  800;
  color: #FFF;
  background-image: -webkit-linear-gradient(45deg, #709dff 0%, #b0c9ff 100%);
  background-image: linear-gradient(45deg, #709dff 0%, #b0c9ff 100%);
  transition: .4s;
}

.button_1:hover{
  background-image: -webkit-linear-gradient(45deg, #709dff 50%, #b0c9ff 100%);
  background-image: linear-gradient(45deg, #709dff 50%, #b0c9ff 100%);
}
.button_2{
  display: inline-block;
  padding: 0.5em 1em;
  text-decoration: none;
  border-radius: 4px;
  color: #ffffff;
  background-image: -webkit-linear-gradient(#6795fd 0%, #67ceff 100%);
  background-image: linear-gradient(#6795fd 0%, #67ceff 100%);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.29);
  border-bottom: solid 3px #5e7fca;
}

.button_2:active{
  -ms-transform: translateY(4px);
  -webkit-transform: translateY(4px);
  transform: translateY(4px);
  box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.2);
  border-bottom: none;
}
.button_3{
  display: inline-block;
  padding: 0.5em 1em;
  text-decoration: none;
  border-radius: 4px;
  color: #ffffff;
  background-image: -webkit-linear-gradient(45deg, #FFC107 0%, #ff8b5f 100%);
  background-image: linear-gradient(45deg, #FFC107 0%, #ff8b5f 100%);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.29);
  border-bottom: solid 3px #c58668;
}

.button_3:active{
  -ms-transform: translateY(4px);
  -webkit-transform: translateY(4px);
  transform: translateY(4px);
  box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.2);
  border-bottom: none;
}
.button_4{
  display: inline-block;
  padding: 7px 18px;
border-radius: 25px;
  text-decoration: none;
  color: #FFF;
  background-image: -webkit-linear-gradient(45deg, #FFC107 0%, #ff8b5f 100%);
  background-image: linear-gradient(45deg, #FFC107 0%, #ff8b5f 100%);
  transition: .4s;
}

.button_4:hover {
  background-image: -webkit-linear-gradient(45deg, #FFC107 0%, #f76a35 100%);
  background-image: linear-gradient(45deg, #FFC107 0%, #f76a35 100%);
}
.button_5{
  display: inline-block;
  padding: 0.5em 1em;
  text-decoration: none;
  color: #FFF;
  background-image: -webkit-linear-gradient(#6795fd 0%, #67ceff 100%);
  background-image: linear-gradient(#6795fd 0%, #67ceff 100%);
  transition: .4s;
}

.button_5:hover{
  background-image: -webkit-linear-gradient(#6795fd 0%, #67ceff 70%);
  background-image: linear-gradient(#6795fd 0%, #67ceff 70%);
}




        header {
            width: 100%;
            position: sticky;
            transition: all .5s;
            top: 0;
            z-index: 3;
            background: #f4f9f9;
            min-height: 125px;
        }
        @media (max-width: 576px) {
            header {
                position: relative;
            }
        }
        header .nav {
            min-height: 125px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            direction: initial;
        }

        header .logo {
            padding: 14px 0;
            white-space: nowrap;
            display: flex;
            color: #2f3f9fe6;
            font-size: 20px;
            align-items: center;
            gap: 14px;
            font-weight:  800;
            text-transform: uppercase;
        }
        
      
        @media screen and (max-width: 575px) {
            header .logo {
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
            }
          
            
        }

       .logo img{
            max-height: 49px;
            width: 100%;
        }


        header.fixed {
            background-color: #14171c;
            position: fixed;
        }

        .logo-link-l06 {
            display: flex;
            gap: 14px;
            color: #fff;
            font-size: 23px;
        }

        @media screen and (min-width: 575px) {
            .logo-link-l06 {
                font-size: 27px;
            }
        }

        #nav-wrap, .navigation {
            margin: 0;
            padding: 0;
        }

        .btn-menu {
            display: none;
        }

        #nav-wrap {
            font-size: 11.5px;
            transition: none;
            width: auto;
            z-index: auto;
            margin-left: auto;
        }
        .nav-header {
            display: none;
        }
        .navigation {
            display: flex;
    flex-wrap: wrap;
    justify-content: flex-end;
        }
        .navigation li {
            position: relative;
            display: inline-block;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .navigation li:hover a,
        .navigation li:focus a {
            color: #2f3f9fe6;
        }
        .navigation li a {
            background: none;
            border: 0;
            color: #000000e6;
            display: block;
            font-size: 16px;
            font-weight:  800;
            padding: 4px 10px;
            text-decoration: none;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out
        }

        .offcanvas-backdrop {
            opacity: 0
        }


        @media  (max-width:576px) {
            header .nav {
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            header {
            position: relative;
            }
            #nav-wrap {
                margin-left: 0;
            }
        }
    


#scrollspyHero {
    padding: 88px 0;
    background: #f4f9f9;
    overflow: hidden;
}
@media screen and (max-width:767px) {
    #scrollspyHero {
        padding: 38px 0;
    }
}

#scrollspyHero .row {
    display: flex;
    gap:  53px;
    align-items: center !important;
}

@media screen and (max-width:767px) {
    #scrollspyHero .row {
        flex-direction: column-reverse;
    }
}

.part-left, .picture-center {
    flex: 1;
}

.part-left h1 {
    font-size: 34px;
    font-weight:  800;
    line-height: 1.5;
    margin-bottom: 16px;
}
.picture-center img {
    -webkit-mask-image: url(public/img/hero-blob-1.svg);
    mask-image: url(public/img/hero-blob-1.svg);
    -webkit-mask-position: center;
    mask-position: center;
    -webkit-mask-repeat: no-repeat;
    mask-repeat: no-repeat;
    -webkit-mask-size: auto;
    mask-size: auto;
    height: auto;
    max-width: 110%;
}

.scrollspyServices-list {
    display: flex;
    flex-direction: row-reverse;
    gap: 48px;
}
@media screen and (max-width:440px) {
    .scrollspyServices-list {
        flex-direction: column;
    }
}
@media screen and (max-width: 768px) {
    .scrollspyServices-list {
        flex-wrap: wrap;
    }
}

.scrollspyServices-item {
    flex: 1;
}

@media screen and (min-width: 440px) and (max-width: 768px) {
    .scrollspyServices-item {
        flex: calc(100% / 2 - 48px)
    }
}

.badge {
    color: rgba(47,63,159);
    padding: 16px;
    border-radius: 6px;
    display: inline-block;
    line-height: 1.5;
    text-align: center;
    vertical-align: initial;
}

#scrollspyServices, 
#scrollspyPortfolio {
    padding: 90px 0;
}

.project-2-flex {
    display: flex;
    gap: 16px;
    flex-direction: row-reverse;
}
@media screen and (max-width: 575px) {
    .project-2-flex {
        flex-direction: column;
    }
}

.project-2-item {
    flex: 1;
    gap:  18px;
    display: flex;
    flex-direction: column;
}

.overlay-hover {
    border-radius: 8px;
    overflow: hidden;
    margin: 0;
}

.overlay-hover img {
    width: 100%;
    height: 241px;
    object-fit: cover;
    transform: scale3d(1, 1, 1);
    transform-style: preserve-3d;
    transition: transform .5s;
}

.overlay-hover img.big {
    height: 505px;
}

.overlay-hover:hover img {
    transform: scale(1.2);
}

#scrollspyTeam {
    padding: 136px 0;
}

#scrollspyTeam .row {
    display: flex;
    gap: 48px;
}

@media screen and (max-width: 575px) {
    #scrollspyTeam .row {
        flex-direction: column;
    }
}

.card {
    flex: 1;
    max-width: min(100%, 400px);
    border-bottom: solid 1px #2f3f9f ;
    box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,.075);
    color: #212529;
    display: flex;
    flex-direction: column;
    min-width: 0;
    position: relative;
    word-wrap: break-word;
    background-clip: initial;
    background-color: #fff;
    border-radius: 6px;
    overflow: hidden;
    margin: 0 auto;
}
@media screen and (min-width: 576px)and (max-width: 990px) {
    .card {
        flex: calc(100% / 2 - 48px);
        max-width: min(100%, 400px);
    }
    #scrollspyTeam .row {
        flex-wrap: wrap;
    }
}

.card figure {
    margin: 0;
    padding: 0;
}

.card figure img {
    height: auto;
    max-width: 100%;
}

.card figcaption {
    padding: 24px;
    margin: 0;
}

.card figcaption h4 {
    font-size: 24px;
    margin-bottom: 4px;
}
@media screen and (max-width: 990px) {
    .card figcaption h4 {
        font-size: 20px;
    }
}

.card figcaption p {
    color: #6c757d;
    margin: 0;
}

#scrollspyPricing {
    padding: 136px 0;
    background: #fcf6f0;
}
#scrollspyPricing .row {
    display: flex;
    gap: 32px;
}
@media screen and (max-width: 990px) {
    #scrollspyPricing .row {
        flex-direction: column;
    }
}

.price-card {
    flex: calc(100% / 3 - 32px);
    border-bottom: solid 1px #2f3f9f;
    box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,.075);
    color: #212529;
    display: flex;
    flex-direction: column;
    min-width: 0;
    position: relative;
    word-wrap: break-word;
    background-clip: initial;
    background-color: #fff;
    border-radius: 6px;
    padding: 48px;
}
@media screen and (max-width: 990px) {
    .price-card {
        flex: 100%;
        width: min(100%, 516px);
        margin: 0 auto;
    }
}

.price-card h2 {
    font-size: 24px;
    margin-bottom: 8px;
    font-weight: 600;
    line-height: 1.5;
}

.price-card h4 {
    color: #2f3f9f;
    font-size: 40px;
    font-weight: 600;
    margin-bottom: 0;
    line-height: 1.5;
}

.price-card .text-secondary {
    color: #6c757d;
    margin-bottom: 24px;
    margin-top: 0;
}

.list-group {
    margin-bottom: 24px;
}

.list-group-item {
    color: #212529;
    display: flex;
    padding: 8px 16px;
    position: relative;
    text-decoration: none;
}

.list-group-item:not(:last-child) {
    border-bottom: 1px solid #dee2e6;
}

.list-group-item span {
    flex: 1;
}

.pricing-popular {
    box-shadow: 0 1rem 3rem rgba(0,0,0,.175);
}

@media only screen and (min-width: 991px) {
    .pricing-popular {
        margin: -24px 0;
    }
}

.comments-l07 {
    padding: 136px 0;
}

.comments-l07 .row {
    display: flex;
    gap: 48px;
}

@media screen and (max-width: 990px) {
    .comments-l07 .row {
        flex-direction: column;
    }
}

.comments-l07 .card-body {
    flex: 1;
    max-width: min(516px, 100%);
    margin: 0 auto;
    border-bottom: 1px solid #2f3f9f ;
    box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,.075);
    color: #212529;
    display: flex;
    flex-direction: column;
    min-width: 0;
    position: relative;
    word-wrap: break-word;
    background-clip: initial;
    background-color: #fff;
    border-radius: 6px;
    padding: 48px;
}
    
.comments-l07 .card-body img {
    width: 110px;
    margin-bottom: 24px;
    border: 5px solid #dee2e6;
    border-radius: 0%;
}

.comments-l07 .card-body figure {
    margin: 0;
}

.ratings {
    margin-bottom: 16px;
}

.ratings[data-star="5"]:before {
    content: "★★★★★";
    color: #ffc107;
}

.ratings[data-star="4"]:before {
    content: "★★★★";
    color: #ffc107;

}
.ratings[data-star-off="1"]:after {
    color: #ddd;
    content: "★"
}

.blockquote-icon {
    position: relative;
    z-index: 1;
    margin: 0 0 16px;
    margin-bottom: 24px;
}

.blockquote-icon:before {
    background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-quote'%3e%3cpath d='M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z'/%3e%3c/svg%3e");    background-position: 50%;
    background-repeat: no-repeat;
    background-size: cover;
    content: "";
    height: 64px;
    left: -1rem;
    opacity: 0.1;
    position: absolute;
    top: -1rem;
    width: 64px;
    z-index: -1;
}

figcaption {
    text-align: center;
}

.comments-l07 .card-body figcaption h4 {
    font-size: 24px;
    margin-bottom: 8px;
    margin-top: 0;
    font-weight: 600;
    line-height: 1.5;
}

.comments-l07 .card-body figcaption h5 {
    color: #6c757d;
    font-size: 16px;
    margin-bottom: 0;
    font-weight: 600;
    line-height: 1.5;
}

#scrollspyMain {
    background: #f2fafa;
    padding: 136px 0;
}

#scrollspyMain .row {
    display: flex;
    gap: 48px;
    flex-direction: row-reverse;
}
@media screen and (max-width: 767px) {
    #scrollspyMain .row {
        flex-direction: column;
    }
}

#scrollspyMain .row > div {
    flex: 1;
}


#scrollspyMain .row > div img {
    border-radius: 6px;
    max-width: 100%;
    max-height: 600px;
    position: sticky;
    top: 125px;
    object-fit: contain;
}
@media screen and (max-width: 990px) {
    #scrollspyMain .row > div img {
        height: auto;
    }
}

.main-price-l07 {
    background-color: #2f3f9f;
    border: 1px solid #2f3f9f;
    border-radius: 8px;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-size: 23px;
    line-height: 1.5;
    padding: 12px 24px;
    text-align: center;
    text-decoration: none;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    -webkit-user-select: none;
    user-select: none;
    vertical-align: middle;
    border-radius: 800px;
}

#scrollspyMain ul {
    margin-left: 23px;
}


.stat-flex {
    display: flex;
    margin-top: 136px;
    gap: 35px;
}

@media screen and (max-width: 440px) {
    .stat-flex {
        flex-direction: column;
    }
}


.stat-flex .card {
    flex: 1;
    border-bottom: 1px solid #2f3f9f ;
    box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,.075);
    padding: 48px;
    text-align: center;
}

@media screen and (min-width: 440px) and (max-width: 767px){
    .stat-flex .card {
        flex: calc(100% / 2 - 48px);
    }
    .stat-flex {
        flex-wrap: wrap;

    }
}
@media screen and (min-width: 768px) and (max-width: 990px){
    .stat-flex .card {
        padding: 24px;
    }
}


.stat-flex .card:hover .stat-icon{
    transform: rotate3d(0180deg);
}

.stat-icon {
    width: 80px;
    height: 80px;
    align-items: center;
    backface-visibility: hidden;
    margin: 0 auto 8px auto;
    border-radius: 0%;
    display: inline-flex;
    justify-content: center;
    line-height: 1.5;
    padding: 0;
}

.stat-flex .card h3 {
    margin-bottom: 8px;
    font-size: 40px;
    font-weight: 600;
    line-height: 1.5;
    margin-top: 0;
}

.stat-flex .card p {
    color: #6c757d;
    font-size: 20px;
    margin: 0;
    line-height: 1.5;
}

#scrollspyContact {
    padding: 136px 0;
    background: #f7f4e9;
}
#scrollspyContact .row {
    display: flex;
    flex-direction: row-reverse;
    gap: 35px;
}
@media screen and (max-width: 767px) {
    #scrollspyContact .row {
        flex-direction: column;
    }
}

#scrollspyContact .row > div {
    flex: 1;
}

#scrollspyContact .row img {
    border-radius: 6px;
    width: 100%;
    position: sticky;
    top: 140px;
}

.form-l07 {
    display: flex;
    flex-direction: column;
}

.input-form-section-component,
.textarea-form-section-component {
    border: 0;
    border-bottom: 1px solid #2f3f9f ;
    box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,.075);
    padding: 8px 18px;
	border-radius: 6px;
	background: #fff;
	width: 100%;
	color: #212529;
	margin-bottom: 18px;
    display: block;
	outline: none;
	font-size: 16px;
	line-height: 1.5;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	-webkit-transition: all 0.3s ease-in-out;
	-ms-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}

.textarea-form-section-component {
    height: 80px;
}

.input-form-section-component::placeholder,
.textarea-form-section-component::placeholder {
    font-weight: 600;
    font-size: 16px;
    line-height: 1.5;
    color: #424446;
}

.form-l07 > label {
    display: block;
    font-weight: 600;
    font-size: 16px;
    line-height: 1.5;
    margin: 0 0 8px 0;
    padding: 0;
    color: #212529;
}

.form-l07-check {
    margin-bottom:18px;
}

.form-l07-check-label a {
    color: #2e3038;
}

#scrollspyContact button {
    border: none;
    font-size: 16px;
    line-height: inherit;
}

footer section {
    padding: 72px 0;
    background: #f8f9fa;
}

footer section .row {
    display: flex;
    flex-direction: row-reverse;
    gap: 28px;
}

@media screen and (max-width: 767px) {
    footer section .row {
        flex-direction: column;
    }
}
@media screen and (min-width: 768px) and (max-width: 990px) {
    footer section .row {
        flex-wrap: wrap;
    }
}

footer .logo-link-l07 {
    display: block;
    text-align: center;
    font-size: 24px;
}

footer .logo-link-l07 img {
    margin: 0 auto 16px auto;
}


.widget {
    flex: 1;
    line-height: 1.5;
}

.widget-title {
    font-size: 24px;
    margin-bottom: 24px;
    font-weight: 600;
    margin-top: 0;
    color: #212529;
}

.widget address{
    margin-bottom: 24px;
    font-style: normal;
}

.link-secondary {
    color: rgb(108, 117, 125);
    display: block;
    word-break: break-all;
}
.link-secondary:hover,
.link-secondary:focus {
    color: rgb(86, 94, 100);
}

.widget li {
    margin-bottom: 8px;
}

.widget li:last-child {
    margin-bottom: 0;
}

.widget.nl p {
    margin-bottom: 24px;
    margin-top: 0;
}

.input-group {
    align-items: stretch;
    display: flex;
    flex-wrap: wrap;
    position: relative;
    width: 100%;
    margin-bottom: 24px;
}

.input-group span {
    border-bottom-left-radius: 6px;
    border-top-left-radius: 6px;
    align-items: center;
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    color: #212529;
    display: flex;
    font-size: 16px;
    font-weight: 600;
    line-height: 1.5;
    padding: 6px 12px;
    text-align: center;
    white-space: nowrap;
}

.input-group input {
    border-top-right-radius: 6px;
    border-bottom-right-radius: 6px;
    appearance: none;
    background-clip: padding-box;
    background-color: #fff;
    border: 1px solid #dee2e6;
    color: #212529;
    display: block;
    font-size: 16px;
    font-weight: 600;
    line-height: 1.5;
    padding: 6px 12px;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    width: calc(100% - 42px);
}

.input-group input:focus {
    border-color: #979fcf;
    box-shadow: 0 0 0 .25rem #2f3f9f40;
    outline: 0;
}

.input-group + button {
    display: block;
    width: 100%;
    margin: 0;
    border: none;
    font-size: 16px;
    line-height: inherit;
}

.footer-bottom {
    padding: 48px 0;
    background-color: #f8f9fa;
    border-top: 1px solid #e9ecef;
}

.footer-bottom p {
    margin: 0;
}

.politics-l05 a {
    color: #BCBEC2;
        }
        .hiddenS {
  display: none;
}
    </style>
        
</head>
<body>
    <header class="header-l07 shipping--widgetsk">
        <div class="container nav">
            <a href="./" class="logo">
                <div>Dungreencrue</div>
                <img src="logo2.svg"  alt="">
            </a>
            <nav id="nav-wrap">
                <ul class="navigation list">
                    <li><a href="./">Home</a></li>
                    
                    <li><a href="./#scrollspyServices">Our Services</a></li>
                    
                    <li><a href="./#scrollspyComments">Comments</a></li>
                    
                    
                 </ul>
            </nav>
        </div>   	
    </header>

    <section id="scrollspyHero" class="bsb-hero-2 footer__cardxy">
        <div class="container">
          <div class="row">
            <div class="part-left">
              <h1 class="">Welcome to Dungreencrue, your trusted partner in professional garden care. We provide expert services tailored to keep your garden vibrant, healthy, and beautiful throughout every season. Our skilled team uses eco-friendly methods and the latest equipment to ensure your outdoor space thrives. Experience premium garden maintenance with Dungreencrue—where your garden's health is our priority.</h1>
              <div>
                
                
                <a class="button_2" href="./#scrollspyContact">
                    <span>Go to contacts</span>
                </a>
                
            </div>
            </div>
            <div class="picture-center">
              <img class="img-fluid" loading="lazy" src="portrait/illustration_gallery_6a82d471798027.80082047.jpg" alt="">
            </div>
          </div>
        </div>
      </section>
      


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-shopkl-popup{
		margin: 0px;
		padding: 0px;
		font-family: 'Noto Sans Display', sans-serif;
		width: 100%;
		font-size: 16px;
		padding: 263px 0px;
	}
	.bodyClass1-shopkl-popup{
		background: #ffe6ca;
		color: #ffffff;
	}
	.bodyClass2-shopkl-popup{
		background: #f6f7d4;
		color: #fff;
	}
	.bodyClass3-shopkl-popup{
		background: #fff;
		color: #111;
	}
	.wrapage-block-shopkl-popup{
		background-size: 100%;
		width: 100%;
	}
	.box_main-shopkl-popup{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-shopkl-popup h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-shopkl-popup p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-shopkl-popup{
		text-align: center;
	}
	.mainBlock-shopkl-popup ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-shopkl-popup ul>li span{
		font-weight: bold;
	}
	.mainBlock-shopkl-popup{
		max-width: 927px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 15px;
	}
	.mainBlock-shopkl-popup .cBlock-shopkl-popup{
		text-align: center;
	}

	.bodyClass3-shopkl-popup .mainBlock-shopkl-popup{
		background: none;
		border-top: 2px dotted #f6f7d4;
		border-bottom: 2px dotted #f6f7d4;
	}
	.bodyClass2-shopkl-popup .mainBlock-shopkl-popup{
		background: #1D2D50;
		color: #fff !important;
		box-shadow: 0px 0px 15px #1D2D50;
	}
	.bodyClass2-shopkl-popup .mainBlock-shopkl-popup p{
		color: #fff !important;
	}
	.bodyClass1-shopkl-popup .mainBlock-shopkl-popup{
		background: #00ACB0;
		color: #ffffff;
		border-left: 0px solid #616F39;
	}
	.bodyClass1-shopkl-popup .mainBlock-shopkl-popup p{
		color: #ffffff !important;
	}
	.order-shopkl-popup{
		font-size: 20px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-shopkl-popup p{
			padding: 0px 15px;
		  }
		  .box_main-shopkl-popup h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-shopkl-popup{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-shopkl-popup{
			height: 100%;
		}
	}
</style>
<div class="bodyClass3-shopkl-popup" id="mainWrapp-shopkl-popup">


	<div class="wrapage-block-shopkl-popup">
		<div class="box_main-shopkl-popup">
			<div class="mainBlock-shopkl-popup">
				<p>We're truly grateful for your outreach and the confidence you've placed in us. Your support empowers our dedicated team to enhance the caliber of our offerings continually.</p>
<p>Remember, your insights, feedback, and suggestions are invaluable to our growth and evolution. If there's anything on your mind or if you require assistance, please feel free to reach out. Our commitment is to be readily available to assist you.</p>
<p class="cBlock-shopkl-popup">With heartfelt thanks and warm wishes!</p>
			</div>
		</div>
	</div>


</div>



      <footer class="footer wishlist--columnjk">
        <section>
          <div class="container">
            <div class="row">
                <div class="widget">
                    <a class="logo-link-l07 link" href="./">
                        <img class="logo-link-l07__img" src="logo2.svg" width="27px" alt="">Dungreencrue
                    </a>    
                </div>
                
                <div class="widget">
                  <h4 class="widget-title">Site Links</h4>
                  <ul class="list">
                    <li><a href="./#scrollspyServices" class="link-secondary">Our Services</a></li>
                    
                    
                    <li><a href="./#scrollspyTeam" class="link-secondary">Our People</a></li>
                    
                    <li><a class="link-secondary" href="privacyPolicy.html">Privacy policy</a></li>
                    <li><a class="link-secondary" href="terms-of-service.html">Terms & Conditions</a></li>
                    <li><a class="link-secondary" href="legal-disclaimer.html">Disclaimer</a></li>
                  </ul>
                </div>
                <div class="widget nl">
                   <form method="post" action="{thx-page-newsletter}">
                        <div class="input-group">
                          <span class="input-group-text" id="email-newsletter-addon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                              <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"></path>
                            </svg>
                          </span>
                          <input type="email" class="form-control" id="email-newsletter" value="" placeholder="Email Address" aria-label="email-newsletter" aria-describedby="email-newsletter-addon" required="">
                        </div>
                          <button class="button_2" type="submit">I want to subscribe</button>
                    </div>
                  </form>
                </div>
            </div>
          </div>
        </section>
    
        <div class="footer-bottom">
          <div class="container">
                <div class="copyright text-center text-md-start">
                    <p class="copiright">&#169; Dungreencrue 2026</p>
                </div>
          </div>
        </div>
    
      </footer>

    

    
            <script>
                const title = document.querySelectorAll('.title')
                title.forEach(function(titleItem) {
                    const titleMas = titleItem.textContent.split(" ");

                    if (titleMas.length === 1) {
                        const newTitle = '<mark><span>' + titleItem.textContent + '</span></mark>';
                        titleItem.innerHTML = newTitle;
                    } else {
                        const accentWord = '<mark><span>' + titleMas[1] + '</span></mark>';
                        titleMas.splice(1, 1, accentWord);
                        const newTitle = titleMas.join(' ');
                        titleItem.innerHTML = newTitle;
                    }
                })
            </script>

    

</body>
</html>
