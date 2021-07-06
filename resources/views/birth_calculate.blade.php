@extends('layouts.app')
@section('scripts')
    <head>
        <title>date Usercontract</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
{{--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />--}}
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="JsLocaldate.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
{{--        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script><!-- jQuery is required -->--}}
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script><!-- jQuery is required -->
        <link  href="/dist/datepicker.css" rel="stylesheet">
        <script src="/dist/datepicker.js"></script>
        <script src="https://kit.fontawesome.com/6e23057652.js" crossorigin="anonymous"></script>

    </head>
    <style type="text/css">
        .box{
            width:600px;
            margin:0 auto;

        }
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }
        .text-color {
            color: #46a1de;
            transition-duration: 0.5s;
            font-family: 'Prompt'; font-weight: 300;
            font-size: 12px;
        }
        .wrapper {
            min-width: 100%;
            max-width: 100%;
            margin: 0 auto;
        }

        .tabs {
            display: table;
            table-layout: fixed;
            width: 100%;
            -webkit-transform: translateY(5px);
            transform: translateY(5px);
        }
        .tabs > li {
            transition-duration: 0.25s;
            display: table-cell;
            list-style: none;
            text-align: center;
            padding: 20px 20px 25px 20px;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            color: #252525;
            font-family: 'Prompt'; font-weight: 300;
            font-size: 18px;
        }
        .tabs > li:before {
            z-index: -1;
            position: absolute;
            content: "";
            width: 100%;
            height: 120%;
            top: 0;
            left: 0;
            background-color: rgba(250, 174, 22, 98);
            -webkit-transform: translateY(100%);
            transform: translateY(100%);
            transition-duration: 0.25s;
            border-radius: 5px 5px 0 0;
        }
        .tabs > li:hover:before {
            -webkit-transform: translateY(70%);
            transform: translateY(70%);
        }
        .tabs > li.active {
            color: #252525;
            font-family: 'Prompt'; font-weight: 300;
            background-color: #F9C414;
            border-radius: 5px 5px 0 0;
        }
        .tabs > li.active:before {
            transition-duration: 0.5s;
            background-color: #F9C414;
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }

        .tab__content {
            background-color: white;
            position: relative;
            width: 100%;
            border-radius: 5px;
        }
        .tab__content > li {
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            display: none;
            list-style: none;
        }
        .tab__content > li .content__wrapper {
            text-align: center;
            border-radius: 5px;
            width: 100%;
            padding: 45px 40px 40px 40px;
            background-color: white;
        }


        *,
        *:before,
        *:after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: #1f1f1f;
            font-family: "Open Sans", Helvetica, Arial, sans-serif;
        }

        .cont {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 60vh;
            padding: 80px 70px;
        }
        .cont__inner {
            position: relative;
            height: 100%;
        }
        .cont__inner:hover .el__bg:after {
            opacity: 1;
        }

        .el {
            position: absolute;
            left: 0;
            top: 0;
            width: 19.2%;
            height: 100%;
            background: #252525;
            transition: transform 0.6s 0.7s, width 0.7s, opacity 0.6s 0.7s, z-index 0s 1.3s;
            will-change: transform, width, opacity;
        }
        .el:not(.s--active) {
            cursor: pointer;
        }
        .el__overflow {
            overflow: hidden;
            position: relative;
            height: 100%;
        }
        .el__inner {
            overflow: hidden;
            position: relative;
            height: 100%;
            transition: transform 1s;
        }
        .cont.s--inactive .el__inner {
            transform: translate3d(0, 100%, 0);
        }
        .el__bg {
            position: relative;
            width: calc(100vw - 140px);
            height: 100%;
            transition: transform 0.6s 0.7s;
            will-change: transform;
        }
        .el__bg:before {
            content: "";
            position: absolute;
            left: 0;
            top: -5%;
            width: 100%;
            height: 110%;
            background-size: cover;
            background-position: center center;
            transition: transform 1s;
            transform: translate3d(0, 0, 0) scale(1);
        }
        .cont.s--inactive .el__bg:before {
            transform: translate3d(0, -100%, 0) scale(1.2);
        }
        .el.s--active .el__bg:before {
            transition: transform 0.8s;
        }
        .el__bg:after {
            content: "";
            z-index: 1;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            opacity: 0;
            transition: opacity 0.5s;
        }
        .cont.s--el-active .el__bg:after {
            transition: opacity 0.5s 1.4s;
            opacity: 1 !important;
        }
        .el__preview-cont {
            z-index: 2;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            transition: all 0.3s 1.2s;
        }
        .cont.s--inactive .el__preview-cont {
            opacity: 0;
            transform: translateY(10px);
        }
        .cont.s--el-active .el__preview-cont {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.5s;
        }
        .el__heading {
            color: #fff;
            text-transform: uppercase;
            font-size: 18px;
            font-family: 'Prompt'; font-weight: 300;
        }
        .el__content {
            z-index: -1;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            padding: 30px;
            opacity: 0;
            pointer-events: none;
            transition: all 0.1s;
        }
        .el.s--active .el__content {
            z-index: 2;
            opacity: 1;
            pointer-events: auto;
            transition: all 0.5s 1.4s;
        }
        .el__text {
            text-transform: uppercase;
            font-size: 40px;
            color: #fff;
        }
        .el__close-btn {
            z-index: -1;
            position: absolute;
            right: 10px;
            top: 10px;
            width: 60px;
            height: 60px;
            opacity: 0;
            pointer-events: none;
            transition: all 0s 0.45s;
            cursor: pointer;
        }
        .el.s--active .el__close-btn {
            z-index: 5;
            opacity: 1;
            pointer-events: auto;
            transition: all 0s 1.4s;
        }
        .el__close-btn:before, .el__close-btn:after {
            content: "";
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            height: 8px;
            margin-top: -4px;
            background: #fff;
            opacity: 0;
            transition: opacity 0s;
        }
        .el.s--active .el__close-btn:before, .el.s--active .el__close-btn:after {
            opacity: 1;
        }
        .el__close-btn:before {
            transform: rotate(45deg) translateX(100%);
        }
        .el.s--active .el__close-btn:before {
            transition: all 0.3s 1.4s cubic-bezier(0.72, 0.09, 0.32, 1.57);
            transform: rotate(45deg) translateX(0);
        }
        .el__close-btn:after {
            transform: rotate(-45deg) translateX(100%);
        }
        .el.s--active .el__close-btn:after {
            transition: all 0.3s 1.55s cubic-bezier(0.72, 0.09, 0.32, 1.57);
            transform: rotate(-45deg) translateX(0);
        }
        .el__index {
            overflow: hidden;
            position: absolute;
            left: 0;
            bottom: -80px;
            width: 100%;
            height: 100%;
            min-height: 250px;
            text-align: center;
            font-size: 20vw;
            line-height: 0.85;
            font-weight: bold;
            transition: transform 0.5s, opacity 0.3s 1.4s;
            transform: translate3d(0, 1vw, 0);
        }
        .el:hover .el__index {
            transform: translate3d(0, 0, 0);
        }
        .cont.s--el-active .el__index {
            transition: transform 0.5s, opacity 0.3s;
            opacity: 0;
        }
        .el__index-back, .el__index-front {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
        }
        .el__index-back {
            color: #2f3840;
            opacity: 0;
            transition: opacity 0.25s 0.25s;
        }
        .el:hover .el__index-back {
            transition: opacity 0.25s;
            opacity: 1;
        }
        .el__index-overlay {
            overflow: hidden;
            position: relative;
            transform: translate3d(0, 100%, 0);
            transition: transform 0.5s 0.1s;
            color: transparent;
        }
        .el__index-overlay:before {
            content: attr(data-index);
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            color: #F9C414;
            transform: translate3d(0, -100%, 0);
            transition: transform 0.5s 0.1s;
        }
        .el:hover .el__index-overlay {
            transform: translate3d(0, 0, 0);
        }
        .el:hover .el__index-overlay:before {
            transform: translate3d(0, 0, 0);
        }
        .el:nth-child(1) {
            transform: translate3d(0%, 0, 0);
            transform-origin: 50% 50%;
        }
        .cont.s--el-active .el:nth-child(1):not(.s--active) {
            transform: scale(0.5) translate3d(0%, 0, 0);
            opacity: 0;
            transition: transform 0.95s, opacity 0.95s;
        }
        .el:nth-child(1) .el__inner {
            transition-delay: 0s;
        }
        .el:nth-child(1) .el__bg {
            transform: translate3d(0%, 0, 0);
        }
        .el:nth-child(1) .el__bg:before {
            transition-delay: 0s;
            background-image: url("https://4c2z2qi2m3-flywheel.netdna-ssl.com/wp-content/uploads/Fotolia_117447476_S-849x445.jpg");
        }
        .el:nth-child(2) {
            transform: translate3d(105.2083333333%, 0, 0);
            transform-origin: 155.2083333333% 50%;
        }
        .cont.s--el-active .el:nth-child(2):not(.s--active) {
            transform: scale(0.5) translate3d(105.2083333333%, 0, 0);
            opacity: 0;
            transition: transform 0.95s, opacity 0.95s;
        }
        .el:nth-child(2) .el__inner {
            transition-delay: 0.1s;
        }
        .el:nth-child(2) .el__bg {
            transform: translate3d(-19.2%, 0, 0);
        }
        .el:nth-child(2) .el__bg:before {
            transition-delay: 0.1s;
            background-image: url("https://cdn.wallpapersafari.com/38/44/lOE48B.jpg");
        }
        .el:nth-child(3) {
            transform: translate3d(210.4166666667%, 0, 0);
            transform-origin: 260.4166666667% 50%;
        }
        .cont.s--el-active .el:nth-child(3):not(.s--active) {
            transform: scale(0.5) translate3d(210.4166666667%, 0, 0);
            opacity: 0;
            transition: transform 0.95s, opacity 0.95s;
        }
        .el:nth-child(3) .el__inner {
            transition-delay: 0.2s;
        }
        .el:nth-child(3) .el__bg {
            transform: translate3d(-38.4%, 0, 0);
        }
        .el:nth-child(3) .el__bg:before {
            transition-delay: 0.2s;
            background-image: url("https://i1.wp.com/www.forest-monitor.com/wp-content/uploads/2018/07/NS_mixed_forest.jpg?fit=3872%2C2592");
        }
        .el:nth-child(4) {
            transform: translate3d(315.625%, 0, 0);
            transform-origin: 365.625% 50%;
        }
        .cont.s--el-active .el:nth-child(4):not(.s--active) {
            transform: scale(0.5) translate3d(315.625%, 0, 0);
            opacity: 0;
            transition: transform 0.95s, opacity 0.95s;
        }
        .el:nth-child(4) .el__inner {
            transition-delay: 0.3s;
        }
        .el:nth-child(4) .el__bg {
            transform: translate3d(-57.6%, 0, 0);
        }
        .el:nth-child(4) .el__bg:before {
            transition-delay: 0.3s;
            background-image: url("https://www.vmcdn.ca/f/files/halifaxtoday/images/fire/110117-adobestock_134229099-fire-generic.jpeg;w=1200;h=800;mode=crop");
        }
        .el:nth-child(5) {
            transform: translate3d(420.8333333333%, 0, 0);
            transform-origin: 470.8333333333% 50%;
        }
        .cont.s--el-active .el:nth-child(5):not(.s--active) {
            transform: scale(0.5) translate3d(420.8333333333%, 0, 0);
            opacity: 0;
            transition: transform 0.95s, opacity 0.95s;
        }
        .el:nth-child(5) .el__inner {
            transition-delay: 0.4s;
        }
        .el:nth-child(5) .el__bg {
            transform: translate3d(-76.8%, 0, 0);
        }
        .el:nth-child(5) .el__bg:before {
            transition-delay: 0.4s;
            background-image: url("https://cached.imagescaler.hbpl.co.uk/resize/scaleHeight/815/cached.offlinehbpl.hbpl.co.uk/news/OMC/gold-20191210023914632.png");
        }
        .el:hover .el__bg:after {
            opacity: 0;
        }
        .el.s--active {
            z-index: 1;
            width: 100%;
            transform: translate3d(0, 0, 0);
            transition: transform 0.6s, width 0.7s 0.7s, z-index 0s;
        }
        .el.s--active .el__bg {
            transform: translate3d(0, 0, 0);
            transition: transform 0.6s;
        }
        .el.s--active .el__bg:before {
            transition-delay: 0.6s;
            transform: scale(1.1);
        }

        .icon-link {
            position: absolute;
            left: 5px;
            bottom: 5px;
            width: 32px;
        }
        .icon-link img {
            width: 100%;
            vertical-align: top;
        }
        .icon-link--twitter {
            left: auto;
            right: 5px;
        }
        @font-face {
            font-family: 'Prompt'; font-weight: 300;
            font-style: normal;
            src: url(https://fonts.google.com/specimen/Prompt?selection.family=Prompt&sidebar.open=true) format('truetype');
        }
        * {
            font-family: 'Prompt'; font-weight: 300;
        }
        .red {
            background-color: #C21300;
            content: "#C21300";
        }
        .red-l1 {
            background-color: #B34034;
            content: "#B34034";
        }
        .red-l2 {
            background-color: #A31000;
            content: "#A31000";
        }
        .red-l3 {
            background-color: #fbd1d5;
            content: "#fbd1d5";
        }
        .red-l4 {
            background-color: #fde7e9;
            content: "#fde7e9";
        }
        .red-l5 {
            background-color: #fef5f6;
            content: "#fef5f6";
        }
        .red-d1 {
            background-color: #B31504;
            content: "#B31504";
        }
        .red-d2 {
            background-color: #700B00;
            content: "#700B00";
        }
        .red-d3 {
            background-color: #92373f;
            content: "#92373f";
        }
        .red-d4 {
            background-color: #6b282e;
            content: "#6b282e";
        }
        .red-d5 {
            background-color: #481b1f;
            content: "#481b1f";
        }
        .green {
            background-color: #b2cf65;
            content: "#b2cf65";
        }
        .green-l1 {
            background-color: #c7dc8f;
            content: "#c7dc8f";
        }
        .green-l2 {
            background-color: #dbe9b8;
            content: "#dbe9b8";
        }
        .green-l3 {
            background-color: #eaf2d4;
            content: "#eaf2d4";
        }
        .green-l4 {
            background-color: #f4f8e9;
            content: "#f4f8e9";
        }
        .green-l5 {
            background-color: #fafcf6;
            content: "#fafcf6";
        }
        .green-d1 {
            background-color: #9db759;
            content: "#9db759";
        }
        .green-d2 {
            background-color: #879d4d;
            content: "#879d4d";
        }
        .green-d3 {
            background-color: #6c7e3d;
            content: "#6c7e3d";
        }
        .green-d4 {
            background-color: #505d2d;
            content: "#505d2d";
        }
        .green-d5 {
            background-color: #353e1e;
            content: "#353e1e";
        }
        .blue {
            background-color: #30a4dc;
            content: "#30a4dc";
        }
        .blue-l1 {
            background-color: #69bde6;
            content: "#69bde6";
        }
        .blue-l2 {
            background-color: #9fd5ef;
            content: "#9fd5ef";
        }
        .blue-l3 {
            background-color: #c5e6f5;
            content: "#c5e6f5";
        }
        .blue-l4 {
            background-color: #e1f2fa;
            content: "#e1f2fa";
        }
        .blue-l5 {
            background-color: #f3fafd;
            content: "#f3fafd";
        }
        .blue-d1 {
            background-color: #2a91c2;
            content: "#2a91c2";
        }
        .blue-d2 {
            background-color: #257da7;
            content: "#257da7";
        }
        .blue-d3 {
            background-color: #1d6486;
            content: "#1d6486";
        }
        .blue-d4 {
            background-color: #154962;
            content: "#154962";
        }
        .blue-d5 {
            background-color: #0e3142;
            content: "#0e3142";
        }
        .peach {
            background-color: #f58960;
            content: "#f58960";
        }
        .peach-l1 {
            background-color: #f8a98c;
            content: "#f8a98c";
        }
        .peach-l2 {
            background-color: #fac8b5;
            content: "#fac8b5";
        }
        .peach-l3 {
            background-color: #fcded3;
            content: "#fcded3";
        }
        .peach-l4 {
            background-color: #feeee8;
            content: "#feeee8";
        }
        .peach-l5 {
            background-color: #fef8f6;
            content: "#fef8f6";
        }
        .peach-d1 {
            background-color: #d87955;
            content: "#d87955";
        }
        .peach-d2 {
            background-color: #ba6849;
            content: "#ba6849";
        }
        .peach-d3 {
            background-color: #95533a;
            content: "#95533a";
        }
        .peach-d4 {
            background-color: #6e3d2b;
            content: "#6e3d2b";
        }
        .peach-d5 {
            background-color: #49291d;
            content: "#49291d";
        }
        .orange {
            background-color: #faab58;
            content: "#faab58";
        }
        .orange-l1 {
            background-color: #fbc286;
            content: "#fbc286";
        }
        .orange-l2 {
            background-color: #fdd8b2;
            content: "#fdd8b2";
        }
        .orange-l3 {
            background-color: #fee8d1;
            content: "#fee8d1";
        }
        .orange-l4 {
            background-color: #fef3e7;
            content: "#fef3e7";
        }
        .orange-l5 {
            background-color: #fffaf5;
            content: "#fffaf5";
        }
        .orange-d1 {
            background-color: #dd974e;
            content: "#dd974e";
        }
        .orange-d2 {
            background-color: #be8243;
            content: "#be8243";
        }
        .orange-d3 {
            background-color: #986835;
            content: "#986835";
        }
        .orange-d4 {
            background-color: #704c27;
            content: "#704c27";
        }
        .orange-d5 {
            background-color: #4b331a;
            content: "#4b331a";
        }
        .yellow {
            background-color: #ffd85a;
            content: "#ffd85a";
        }
        .yellow-l1 {
            background-color: #ffe387;
            content: "#ffe387";
        }
        .yellow-l2 {
            background-color: #ffedb3;
            content: "#ffedb3";
        }
        .yellow-l3 {
            background-color: #fff4d1;
            content: "#fff4d1";
        }
        .yellow-l4 {
            background-color: #fff9e7;
            content: "#fff9e7";
        }
        .yellow-l5 {
            background-color: #fffdf5;
            content: "#fffdf5";
        }
        .yellow-d1 {
            background-color: #e1bf4f;
            content: "#e1bf4f";
        }
        .yellow-d2 {
            background-color: #c2a444;
            content: "#c2a444";
        }
        .yellow-d3 {
            background-color: #9b8337;
            content: "#9b8337";
        }
        .yellow-d4 {
            background-color: #726128;
            content: "#726128";
        }
        .yellow-d5 {
            background-color: #4c401b;
            content: "#4c401b";
        }
        .purple {
            background-color: #c37dc4;
            content: "#c37dc4";
        }
        .purple-l1 {
            background-color: #d3a1d4;
            content: "#d3a1d4";
        }
        .purple-l2 {
            background-color: #e3c3e4;
            content: "#e3c3e4";
        }
        .purple-l3 {
            background-color: #eedbef;
            content: "#eedbef";
        }
        .purple-l4 {
            background-color: #f6ecf6;
            content: "#f6ecf6";
        }
        .purple-l5 {
            background-color: #fbf7fc;
            content: "#fbf7fc";
        }
        .purple-d1 {
            background-color: #ac6ead;
            content: "#ac6ead";
        }
        .purple-d2 {
            background-color: #945f95;
            content: "#945f95";
        }
        .purple-d3 {
            background-color: #774c77;
            content: "#774c77";
        }
        .purple-d4 {
            background-color: #573858;
            content: "#573858";
        }
        .purple-d5 {
            background-color: #3a253a;
            content: "#3a253a";
        }
        .teal {
            background-color: #21c5c7;
            content: "#21c5c7";
        }
        .teal-l1 {
            background-color: #5ed5d6;
            content: "#5ed5d6";
        }
        .teal-l2 {
            background-color: #98e4e5;
            content: "#98e4e5";
        }
        .teal-l3 {
            background-color: #c1efef;
            content: "#c1efef";
        }
        .teal-l4 {
            background-color: #dff7f7;
            content: "#dff7f7";
        }
        .teal-l5 {
            background-color: #f2fcfc;
            content: "#f2fcfc";
        }
        .teal-d1 {
            background-color: #1daeb0;
            content: "#1daeb0";
        }
        .teal-d2 {
            background-color: #199697;
            content: "#199697";
        }
        .teal-d3 {
            background-color: #147879;
            content: "#147879";
        }
        .teal-d4 {
            background-color: #0f5859;
            content: "#0f5859";
        }
        .teal-d5 {
            background-color: #0a3b3b;
            content: "#0a3b3b";
        }
        .pink {
            background-color: #f15b82;
            content: "#f15b82";
        }
        .pink-l1 {
            background-color: #f588a4;
            content: "#f588a4";
        }
        .pink-l2 {
            background-color: #f9b3c5;
            content: "#f9b3c5";
        }
        .pink-l3 {
            background-color: #fbd1dc;
            content: "#fbd1dc";
        }
        .pink-l4 {
            background-color: #fde7ed;
            content: "#fde7ed";
        }
        .pink-l5 {
            background-color: #fef5f8;
            content: "#fef5f8";
        }
        .pink-d1 {
            background-color: #d55073;
            content: "#d55073";
        }
        .pink-d2 {
            background-color: #b74563;
            content: "#b74563";
        }
        .pink-d3 {
            background-color: #92374f;
            content: "#92374f";
        }
        .pink-d4 {
            background-color: #6c293a;
            content: "#6c293a";
        }
        .pink-d5 {
            background-color: #481b27;
            content: "#481b27";
        }
        .brown {
            background-color: #624b63;
            content: "#624b63";
        }
        .brown-l1 {
            background-color: #8d7c8e;
            content: "#8d7c8e";
        }
        .brown-l2 {
            background-color: #b6acb7;
            content: "#b6acb7";
        }
        .brown-l3 {
            background-color: #d3cdd4;
            content: "#d3cdd4";
        }
        .brown-l4 {
            background-color: #e8e5e8;
            content: "#e8e5e8";
        }
        .brown-l5 {
            background-color: #f6f4f6;
            content: "#f6f4f6";
        }
        .brown-d1 {
            background-color: #564257;
            content: "#564257";
        }
        .brown-d2 {
            background-color: #4b394b;
            content: "#4b394b";
        }
        .brown-d3 {
            background-color: #3c2e3c;
            content: "#3c2e3c";
        }
        .brown-d4 {
            background-color: #2c222c;
            content: "#2c222c";
        }
        .brown-d5 {
            background-color: #1d161e;
            content: "#1d161e";
        }
        .gray {
            background-color: #666666;
            content: "#666666";
        }
        .gray-l1 {
            background-color: #909090;
            content: "#909090";
        }
        .gray-l2 {
            background-color: #b8b8b8;
            content: "#b8b8b8";
        }
        .gray-l3 {
            background-color: #d4d4d4;
            content: "#d4d4d4";
        }
        .gray-l4 {
            background-color: #e9e9e9;
            content: "#e9e9e9";
        }
        .gray-l5 {
            background-color: #f6f6f6;
            content: "#f6f6f6";
        }
        .gray-d1 {
            background-color: #5a5a5a;
            content: "#5a5a5a";
        }
        .gray-d2 {
            background-color: #4e4e4e;
            content: "#4e4e4e";
        }
        .gray-d3 {
            background-color: #3e3e3e;
            content: "#3e3e3e";
        }
        .gray-d4 {
            background-color: #2e2e2e;
            content: "#2e2e2e";
        }
        .gray-d5 {
            background-color: #1e1e1e;
            content: "#1e1e1e";
        }
        .container {
            padding: 20px;
            width: 100%;
            text-align: center;
            margin: 0 auto;
        }
        .block-group {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 5px auto;
        }
        .block {
            display: inline-flex;
            flex-flow: column nowrap;
            justify-content: flex-end;
            width: 100px;
            height: 100px;
            text-transform: uppercase;
        }
        .block.base {
            padding: 3px;
            border: 2px solid #fff;
        }
        .block span {
            display: block;
            background-color: #fff;
            font-size: 12px;
        }
        .block span:before {
            content: "#";
            color: #aaa;
        }

        @media only screen and (min-width: 320px) {
            .btn{
                margin: auto;
                display: block;
                margin-bottom: 1vw;
                font-family: Prompt;
                background-color: #F9C414;
                border-radius: 500px;
                height:42px;
                color: #252525;
                box-shadow: 0px 8px 5px -6px rgba(0, 0, 0, 0.2);
                transition: all 0.4s;
                -webkit-transition: all 0.4s;
                -moz-transition: all 0.4s;
                -ms-transition: all 0.4s;
                -o-transition: all 0.4s;
                font-size: 5vw;
                font-weight: 300;

            }

            .btn:hover {
                background-color: #edb806;
                color: #252525;
                box-shadow: none;
            }
        }
        @media only screen and (min-width: 500px) {
            .btn{
                margin: auto;
                display: block;
                margin-bottom: 1vw;
                font-family: Prompt;
                background-color: #F9C414;
                border-radius: 500px;
                height:42px;
                color: #252525;
                box-shadow: 0px 8px 5px -6px rgba(0, 0, 0, 0.2);
                transition: all 0.4s;
                -webkit-transition: all 0.4s;
                -moz-transition: all 0.4s;
                -ms-transition: all 0.4s;
                -o-transition: all 0.4s;
                font-size: 2vw;
                font-weight: 300;

            }

            .btn:hover {
                background-color: #edb806;
                color: #252525;
                box-shadow: none;
            }
        }
        @media only screen and (min-width: 1024px) {
            .btn{
                margin: auto;
                display: block;
                margin-bottom: 1vw;
                font-family: Prompt;
                background-color: #F9C414;
                border-radius: 500px;
                height:42px;
                color: #252525;
                box-shadow: 0px 8px 5px -6px rgba(0, 0, 0, 0.2);
                transition: all 0.4s;
                -webkit-transition: all 0.4s;
                -moz-transition: all 0.4s;
                -ms-transition: all 0.4s;
                -o-transition: all 0.4s;
                font-size: 1vw;
                font-weight: 300;

            }

            .btn:hover {
                background-color: #edb806;
                color: #252525;
                box-shadow: none;
            }
        }

    </style>
    <body style="width: 100%;height: 100%; background-color: #F0F0F0;">

    <div class="container" style="background-color: #F0F0F0;">
        <ul class="tabs">

            <li class="active">คำนวณวันเกิด</li>
            <li>ความหมายการคำนวณ</li>
            <li>วิธีการใช้งาน</li>
        </ul>

        <ul class="tab__content" style="box-shadow: 2px 2px 20px #A8A8A8;">
            <li class="active">
                <div class="content__wrapper" style="text-align: center;">
                    <h1 style="font-family: 'Prompt'; font-weight: 300;">คำนวณวันเกิดของคุณ</h1>
                    <br>
                    <div class="content" style=" font-family: 'Prompt'; font-weight: 300;font-size: 16px; width: 100%; height: 100%; text-align: center; color: #8C8C8C;">
                        <p>ธาตุแบบจีนแบบเพราะๆได้อีกชื่อว่า เบญจธาตุ หรือแปลว่า 5 ธาตุนั่นเอง แบ่งเป็น ไม้ ไฟ ดิน ทอง น้ำ ซึ่งแต่ละธาตุแบ่งให้ละเอียดได้อีกธาตุละ 2 ประเภท
                            คือหยิน และหยาง ธาตุแต่ละตัวจะมีความสอดคล้องก่อกำเนิดเกื้อกูลหรือเป็นปฏิปักษ์ต่อธาตุอีกตัวนึงอย่างเป็นวัฏจักร</p>
{{--                        <h6 style="color: #F9C414;">www.Balance-fengshui.com</h6>--}}
{{--                        <h1>•••</h1>--}}
                        <form method="get" action="/birthcalculate">
                            @csrf
                            <div>
                                <h3 style="font-family: 'Prompt'; font-weight: 300;text-align: center;">กรุณากรอกวันเดือนปีเกิดของท่านในช่องค้นหา</h3>
                                <div style="text-align: center; height: 100%; border-radius: 50px;">
                                    <div class="row">
                                        <div class="col-12" style="text-align: center;">
                                            <br />
                                            <form action="/fetch" method="post" autocomplete="off">
                                                {{--                                        <div class="container" style="width: 100%; text-align: center;">--}}
                                                {{--                                            <span><i class="far fa-calendar-alt"></i></span>--}}
                                                {{--                                            <input id="date" data-toggle="datepicker" type="text" class="form-control" placeholder="วัน/เดือน/ปี" autocomplete="off" >--}}
                                                {{--                                        </div>--}}
                                                <div class="docs-datepicker">
                                                    <div class="input-group">
                                                        <input type="text" data-toggle="datepicker" class="form-control docs-date" name="date" id="date" placeholder="ปี/เดือน/วัน" autocomplete="off">
                                                        <input type="text" class="form-control" name="calculated_age" id="calculated_age" hidden>
                                                        <input type="text" class="form-control" name="calculated_age2" id="calculated_age2" hidden>

                                                        <div class="input-group-append">
                                                            <button style="margin-top: 15px;" type="button" class="form-control docs-date" disabled>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <button onclick="calculate_age()" style="margin-top: 15px;" type="button" class="btn form-control">
                                                        คำนวณ
                                                    </button>

                                                    <div class="docs-datepicker-container"></div>
                                                </div>

                                                {{--                        <button id="date" type="submit" class="btn btn-primary">Submit</button>--}}


                                                {{ csrf_field() }}
                                            </form>
                                        </div>

                                    </div>
                                    <div id="birthData" class="row" style="text-align: center;"></div>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>

            </li>
            <li>
                <div class="content__wrapper">
                    <h1 style="font-weight: 300;">ความหมายการคำนวณ</h1>

                    <div class="cont s--inactive">
                        <!-- cont inner start -->
                        <div class="cont__inner">
                            <!-- el start -->
                            <div class="el">
                                <div class="el__overflow">
                                    <div class="el__inner">
                                        <div class="el__bg"></div>
                                        <div class="el__preview-cont">
                                            <h2 class="el__heading">ธาตุดิน</h2>
                                        </div>
                                        <div class="el__content">
                                            <h4 style="font-family: 'Prompt'; font-weight: 300;color: #FFFFFF;">ธาตุดิน คือผู้เกิดปีนักษัตร ฉลู(วัว) มะโรง(งูใหญ่) มะแม(แพะ) จอ(หมา) สีที่เป็นพลังหรือส่งเสริมธาตุดิน คือ สีโกโก้ สีเหลือง สีไข่ไก่</h4>
                                            <div class="block-group">
                                                <div class="block orange-l2"></div>
                                                <div class="block orange-l1"></div>
                                                <div class="block orange base"></div>
                                                <div class="block orange-d1"></div>
                                                <div class="block orange-d2"></div>
                                            </div>
                                            <div class="el__close-btn"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="el__index">
                                    <div class="el__index-back">1</div>
                                    <div class="el__index-front">
                                        <div class="el__index-overlay" data-index="1">1</div>
                                    </div>
                                </div>
                            </div>
                            <!-- el end -->
                            <!-- el start -->
                            <div class="el">
                                <div class="el__overflow">
                                    <div class="el__inner">
                                        <div class="el__bg"></div>
                                        <div class="el__preview-cont">
                                            <h2 class="el__heading">ธาตุน้ำ</h2>
                                        </div>
                                        <div class="el__content">
                                            <h4 style="font-family: 'Prompt'; font-weight: 300; color: #FFFFFF;">ธาตุน้ำ คือผู้เกิดปีนักษัตร ชวด (หนู) กุน(หมู) สีที่เป็นพลังหรือส่งเสริมธาตุน้ำ คือ สีน้ำเงิน</h4>
                                            <div class="block-group">
                                                <div class="block blue-l2"></div>
                                                <div class="block blue-l1"></div>
                                                <div class="block blue base"></div>
                                                <div class="block blue-d1"></div>
                                                <div class="block blue-d2"></div>
                                            </div>
                                            <div class="el__close-btn"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="el__index">
                                    <div class="el__index-back">2</div>
                                    <div class="el__index-front">
                                        <div class="el__index-overlay" data-index="2">2</div>
                                    </div>
                                </div>
                            </div>
                            <!-- el end -->
                            <!-- el start -->
                            <div class="el">
                                <div class="el__overflow">
                                    <div class="el__inner">
                                        <div class="el__bg"></div>
                                        <div class="el__preview-cont">
                                            <h2 class="el__heading">ธาตุไม้</h2>
                                        </div>
                                        <div class="el__content">
                                            <h4 style="color: #FFFFFF;font-family: 'Prompt'; font-weight: 300;">ธาตุไม้  คือผู้เกิดปีนักษัตร  ขาล(เสือ) เถาะ (กระต่าย) สีที่เป็นพลังหรือส่งเสริมธาตุไม้ คือ สีเขียว</h4>
                                            <div class="block-group">
                                                <div class="block green-l2"></div>
                                                <div class="block green-l1"></div>
                                                <div class="block green base"></div>
                                                <div class="block green-d1"></div>
                                                <div class="block green-d2"></div>
                                            </div>

                                            <div class="el__close-btn"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="el__index">
                                    <div class="el__index-back">3</div>
                                    <div class="el__index-front">
                                        <div class="el__index-overlay" data-index="3">3</div>
                                    </div>
                                </div>
                            </div>
                            <!-- el end -->
                            <!-- el start -->
                            <div class="el">
                                <div class="el__overflow">
                                    <div class="el__inner">
                                        <div class="el__bg"></div>
                                        <div class="el__preview-cont">
                                            <h2 class="el__heading">ธาตุไฟ</h2>
                                        </div>
                                        <div class="el__content">
                                            <h4 style="font-family: 'Prompt'; font-weight: 300;color: #FFFFFF">ธาตุไฟ คือผู้เกิดปีนักษัตร มะเส็ง(งูเล็ก) มะแม(ม้า) สีที่เป็นพลังหรือส่งเสริมธาตุไฟ คือ สีแดง</h4>
                                            <div class="block-group">
                                                <div class="block red-l2"></div>
                                                <div class="block red-l1"></div>
                                                <div class="block red base"></div>
                                                <div class="block red-d1"></div>
                                                <div class="block red-d2"></div>
                                            </div>
                                            <div class="el__close-btn"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="el__index">
                                    <div class="el__index-back">4</div>
                                    <div class="el__index-front">
                                        <div class="el__index-overlay" data-index="4">4</div>
                                    </div>
                                </div>
                            </div>
                            <!-- el end -->
                            <!-- el start -->
                            <div class="el">
                                <div class="el__overflow">
                                    <div class="el__inner">
                                        <div class="el__bg"></div>
                                        <div class="el__preview-cont">
                                            <h2 class="el__heading">ธาตุทอง</h2>
                                        </div>
                                        <div class="el__content">
                                            <h4 style="color: #FFFFFF;font-family: 'Prompt'; font-weight: 300;">ธาตุทอง คือผู้เกิดปีนักษัตร วอก(ลิง) ระกา(ไก่)  สีที่เป็นพลังหรือส่งเสริมธาตุทอง คือ สีขาว</h4>

                                            <div class="block-group">
                                                <div class="block yellow-l2"></div>
                                                <div class="block yellow-l1"></div>
                                                <div class="block yellow base"></div>
                                                <div class="block yellow-d1"></div>
                                                <div class="block yellow-d2"></div>
                                            </div>
                                            <div class="el__close-btn"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="el__index">
                                    <div class="el__index-back">5</div>
                                    <div class="el__index-front">
                                        <div class="el__index-overlay" data-index="5">5</div>
                                    </div>
                                </div>
                            </div>
                            <!-- el end -->
                        </div>
                        <!-- cont inner end -->
                    </div>

                    <h5 style="font-family: 'Prompt'; font-weight: 300;line-height: 30px;">“ธาตุสำคัญ” หมายถึง ธาตุที่ไปทำให้ดวงของคุณเกิดความสมดุล…

                        เป็นตัวที่บอกว่าธาตุอะไรในดวงชะตาให้คุณหรือให้โทษ การวิเคราะห์ดวงจีนตามหลักฮวงจุ้ยจะเน้นธาตุสำคัญเพื่อปรับชะตากรรม เช่น ธาตุสำคัญเป็นธาตุทอง การตั้งโต๊ะทำงานหันหลังพิงทิศตะวันตก หรือการกราบไหว้สิ่งศักดิ์สิทธิ์ที่หันหน้าไปทางทิศตะวันออก จะช่วยส่งเสริมให้ชีวิตเจริญรุ่งเรืองขึ้นครับ

                        การหาธาตุสำคัญของดวงหลักจะพิจารณาจากธาตุดิถี และกำลังธาตุภายในดวงทั้ง 5 ธาตุได้แก่ ดิน ทอง น้ำ ไม้ ไฟ

                        – วัฏจักร การส่งเสริม : ธาตุดิน ส่งเสริม ธาตุทอง, ธาตุทอง ส่งเสริม ธาตุน้ำ, ธาตุน้ำ ส่งเสริม ธาตุไม้, ธาตุไม้ ส่งเสริม ธาตุไฟ, ธาตุไฟ ส่งเสริม ธาตุดิน

                        – วัฏจักร การควบคุมทำลาย : ธาตุดิน ควบคุม ธาตุน้ำ, ธาตุทอง ควบคุม ธาตุไม้, ธาตุน้ำ ควบคุม ธาตุไฟ, ธาตุไม้ ควบคุม ธาตุดิน, ธาตุไฟ ควบคุม ธาตุทอง</h5>
                    <h1 style="color: #8C8C8C;">•••</h1>
                </div>
            </li>
            <li>
                <div class="content__wrapper">
                    <h2 style="font-family: 'Prompt'; font-weight: 300;">วิธีการใช้งาน</h2>
                    <center><iframe width="560" height="315" src="https://www.youtube.com/embed/rYb8Nln8bjw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
                </div>
            </li>
        </ul>
    </div>

    </body>
<script>
    $(document).ready(function () {
	// Variables
	var clickedTab = $(".tabs > .active");
	var tabWrapper = $(".tab__content");
	var activeTab = tabWrapper.find(".active");
	var activeTabHeight = activeTab.outerHeight();

	// Show tab on page load
	activeTab.show();

	// Set height of wrapper on page load
	tabWrapper.height(activeTabHeight);

	$(".tabs > li").on("click", function () {
		// Remove class from active tab
		$(".tabs > li").removeClass("active");

		// Add class active to clicked tab
		$(this).addClass("active");

		// Update clickedTab variable
		clickedTab = $(".tabs .active");

		// fade out active tab
		activeTab.fadeOut(250, function () {
			// Remove active class all tabs
			$(".tab__content > li").removeClass("active");

			// Get index of clicked tab
			var clickedTabIndex = clickedTab.index();

			// Add class active to corresponding tab
			$(".tab__content > li").eq(clickedTabIndex).addClass("active");

			// update new active tab
			activeTab = $(".tab__content > .active");

			// Update variable
			activeTabHeight = activeTab.outerHeight();

			// Animate height of wrapper to new tab height
			tabWrapper
				.stop()
				.delay(50)
				.animate(
					{
						height: activeTabHeight
					},
					500,
					function () {
						// Fade in active tab
						activeTab.delay(50).fadeIn(250);
					}
				);
		});
	});

	// Variables
	var colorButton = $(".colors li");

	colorButton.on("click", function () {
		// Remove class from currently active button
		$(".colors > li").removeClass("active-color");

		// Add class active to clicked button
		$(this).addClass("active-color");

		// Get background color of clicked
		var newColor = $(this).attr("data-color");

		// Change background of everything with class .bg-color
		$(".bg-color").css("background-color", newColor);

		// Change color of everything with class .text-color
		$(".text-color").css("color", newColor);
	});
});

</script>

    <script>
        var $cont = document.querySelector(".cont");
var $elsArr = [].slice.call(document.querySelectorAll(".el"));
var $closeBtnsArr = [].slice.call(document.querySelectorAll(".el__close-btn"));

setTimeout(function () {
  $cont.classList.remove("s--inactive");
}, 200);

$elsArr.forEach(function ($el) {
  $el.addEventListener("click", function () {
    if (this.classList.contains("s--active")) return;
    $cont.classList.add("s--el-active");
    this.classList.add("s--active");
  });
});

$closeBtnsArr.forEach(function ($btn) {
  $btn.addEventListener("click", function (e) {
    e.stopPropagation();
    $cont.classList.remove("s--el-active");
    document.querySelector(".el.s--active").classList.remove("s--active");
  });
});

    </script>
    <script>
                var colors = document.getElementsByClassName("block");
        for (i = 0; i < colors.length; i++) {
          var colorValue = window
            .getComputedStyle(colors[i])
            .getPropertyValue("content");
          colors[i].insertAdjacentHTML(
            "beforeend",
            "<span>" + colorValue.replace(/['"#]+/g, "") + "</span>"
          );
        }

    </script>
    <script>
        $('[data-toggle="datepicker"]').datepicker({
            format: 'yyyy/mm/dd'
        });

    </script>
    <script>
        function calculate_age(){
            var birth_date = new Date(document.getElementById("date").value);
            var birth_date_year = birth_date.getFullYear();

            var today_date = new Date();
            var today_date_year = today_date.getFullYear();

            var calculated_age = 0;

            calculated_age = today_date_year - birth_date_year;

            $('#calculated_age').val(calculated_age);

            var age_range = 0;

            if(calculated_age > 0 && calculated_age < 13){
                age_range = 1;
                $('#calculated_age2').val(age_range);
            }else if(calculated_age > 12 && calculated_age < 40){
                age_range = 2;
                $('#calculated_age2').val(age_range);
            }else if(calculated_age > 39 ){
                age_range = 3;
                $('#calculated_age2').val(age_range);
            }

            var query = $('#date').val();
            if(query != '')
            {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{ route('date.fetch') }}",
                    method:"POST",
                    data:{query:query, _token:_token},
                    success:function(data){
                        $('#birthData').fadeIn();
                        $('#birthData').html(data);

                        var ageRange = $('#calculated_age2').val();
                        $('.btn-link').attr('href', $('.btn-link').attr('href')+'/'+ageRange)
                        //*******************************************************************
                    }
                }).done(function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'เรียบร้อย',
                        text: 'โปรดเลือกช่วงเวลาเกิด เช้า - เย็น',
                        showConfirmButton: false,
                        timer: 3500,
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        },


                    })
                });
            }


        }

    </script>
<!--    --><?php
//        public function test()
//          {
//
//            $html = file_get_html('https://www.chinesefortunecalendar.com/TDB/ChineseAstrologyChk.asp?AstroCalendar=V1&TimeZone=7&Longitude=&SunYear=2020&SunMonth=6&SunDay=15&SunHour=12&SunMin=30&Gender=V3');
//
//            $i= 0;
//            foreach($html->find('table[id=tbl04] tr td') as $element){
//              echo $i++;
//              echo $element->innertext ."\n";
//
//            }
//          }
//          ?>



@endsection
