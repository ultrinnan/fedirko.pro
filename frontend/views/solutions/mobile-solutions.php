<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Mobile solutions';
$this->params['breadcrumbs'][] = $this->title;

$this->registerCss(".first { background: url('/images/bg/solutions/mobile_solutions.jpg') no-repeat center; background-size: cover;}");
?>

<style type="text/css">
    .tubes-container {
        position: absolute;
        width: 100%;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        overflow: hidden;
    }


    .tubes--on .tubes-middle--1 {
        height: 50%;
    }
    .tubes--on .tubes-circle {
        height: 730px;
    }
    .tubes--transition .tubes-circle {
        -webkit-transition: all 1.2s ease-out 1.2s;
        transition: all 1.2s ease-out 1.2s;
    }
    .tubes-circle {
        width: 730px;
        height: 0;
        top: 290px;
        left: 50%;
        margin-left: -366px;
        background-image: url('/images/pages/circle.png');
        z-index: 2;
    }
    .tubes-bottom, .tubes-circle, .verticalTimeline-img:after {
        background-repeat: no-repeat;
    }
    .tubes-circle, .tubes-middle {
        position: absolute;
        background-position: 50% 0;
    }

    .cards--page-xamarin .cards-row:after,
    .cards--page-xamarin .cards-text--bottom h3,
    .cards-text p,
    .cards2-text p,
    .cards3-text p,
    .cards4-text p,
    .cards5-text p,
    .cards7-text p,
    .cardsBg-text p {
        font-family: Ubuntu, Arial, Helvetica, sans-serif
    }

    .cards,
    .cards-item {
        background-position: 50% 50%;
        background-repeat: no-repeat;
        position: relative
    }

    .cards,
    .cards-item,
    .cards-text {
        position: relative
    }

    .cards--page-net-2 .cards-name,
    .cards--page-net-2 .cards-name h4,
    .cards--with-bgimage .cards-name h4,
    .cards--with-bgimage .cards-text,
    .cards--zoom .cards-name h4,
    .cards--zoom .cards-text {
        color: #fff
    }

    .cards6-text ul,
    .scheme1 ul,
    .scheme3-list ul,
    .scheme4-list ul,
    .scheme7-text ul {
        list-style-type: none
    }

    .cards {
        padding-top: 86px;
        padding-bottom: 50px
    }

    .cards-item {
        text-align: center;
        margin: 0 0 50px;
        background-size: cover
    }

    .container-fluid .cards-wrapper {
        width: 75%;
        margin: auto
    }

    .cards--with-borders .container-fluid .cards-wrapper {
        width: auto
    }

    .cards-icon {
        margin-bottom: 12px;
        line-height: 130px
    }

    .cards-icon .icon,
    .cards-icon svg {
        height: 100px;
        vertical-align: middle
    }

    .cards-name h4 {
        margin-top: 0;
        margin-bottom: 13px;
        font-weight: 300;
        text-transform: uppercase
    }

    .cards-text {
        font-size: 17px;
        line-height: 30px
    }

    .cards.width--full .cards-text {
        padding-left: 25px;
        padding-right: 25px
    }

    .cards .heading-title {
        margin-bottom: 0
    }

    .cards .heading-description {
        margin-top: 32px;
        margin-bottom: 0!important
    }

    .cards .heading~.cards-row,
    .cards .heading~.container .cards-row,
    .cards .heading~.container-fluid .cards-row,
    .cards .heading~.row {
        margin-top: 74px
    }

    @media (max-width:1440px) {
        .cards.width--full .cards-text {
            padding-left: 0;
            padding-right: 0
        }
    }

    .cards-text p {
        margin-top: 0;
        margin-bottom: 0;
        font-weight: 300
    }

    .cards-text p+ul {
        margin-top: 1em
    }

    .cards-object {
        line-height: 0;
        text-align: center
    }

    .cards--with-rounded-icons .cards-icon,
    .cards--with-rounded-icons--aqua .cards-icon,
    .cards--with-rounded-icons--blue .cards-icon,
    .cards--with-rounded-icons--dark-blue .cards-icon,
    .cards--with-rounded-icons--green .cards-icon,
    .cards--with-rounded-icons--orange .cards-icon,
    .cards--with-rounded-icons--purple .cards-icon,
    .cards--with-rounded-icons--red .cards-icon,
    .cards--with-rounded-icons--white .cards-icon {
        background: rgba(0, 0, 0, .4);
        display: inline-block;
        width: 180px;
        height: 180px;
        line-height: 180px;
        border-radius: 90px;
        margin-top: 0
    }

    .cards--with-rounded-icons--white .cards-icon {
        background-color: #fff
    }

    .cards--with-rounded-icons--green .cards-icon {
        background-color: #51c336
    }

    .cards--with-rounded-icons--blue .cards-icon {
        background-color: #0cf
    }

    .cards--with-rounded-icons--red .cards-icon {
        background-color: #f96057
    }

    .cards--with-rounded-icons--dark-blue .cards-icon {
        background-color: #255ccc
    }

    .cards--with-rounded-icons--orange .cards-icon {
        background-color: #ff9700
    }

    .cards--with-rounded-icons--aqua .cards-icon {
        background-color: #00ddce
    }

    .cards--with-rounded-icons--purple .cards-icon {
        background-color: #9d26d5
    }

    .cards--with-bgimage .cards-item .cards-wrapper {
        width: 92%
    }

    .cards--with-bgimage .cards-item {
        background: 50% 50% no-repeat #666;
        background-size: cover;
        margin: 0 -15px;
        padding: 50px 15px;
        width: auto;
        text-shadow: 0 0 10px rgba(0, 0, 0, .5)
    }

    .cards--with-bgimage .cards-icon {
        background: rgba(0, 0, 0, .4);
        display: inline-block;
        width: 200px;
        height: 200px;
        line-height: 200px;
        border-radius: 100px;
        margin-top: 0
    }

    .cards--with-bgimage .cards-icon .icon,
    .cards--with-bgimage .cards-icon svg {
        vertical-align: middle;
        height: 80px
    }

    @media (min-width:1030px) {
        .cards--with-bgimage .cards-item {
            padding: 208px 15px 30px;
            -webkit-transition: -webkit-transform .2s ease;
            transition: -webkit-transform .2s ease;
            transition: transform .2s ease;
            transition: transform .2s ease, -webkit-transform .2s ease
        }
        .cards--with-bgimage .cards-text {
            position: relative;
            opacity: 0;
            top: 50px;
            -webkit-transition: top .5s ease, opacity .5s ease;
            transition: top .5s ease, opacity .5s ease
        }
        .cards--with-bgimage .cards-icon {
            -webkit-transition: margin .5s ease;
            transition: margin .5s ease
        }
        .cards--with-bgimage.cards--with-zoom .cards-item:hover {
            z-index: 100;
            -webkit-transform: scale(1.05);
            -ms-transform: scale(1.05);
            transform: scale(1.05);
            -webkit-box-shadow: 0 0 20px rgba(0, 0, 0, .4);
            box-shadow: 0 0 20px rgba(0, 0, 0, .4)
        }
        .cards--with-bgimage.cards--with-zoom .cards-item:hover .cards-text {
            top: 30px;
            opacity: 1
        }
        .cards--with-bgimage.cards--with-zoom .cards-item:hover .cards-icon {
            margin-top: -50px;
            background: rgba(255, 255, 255, 1)
        }
        .cards--with-bgimage.cards--with-zoom .cards-item:hover .cards-icon .icon {
            -webkit-transform: scale(.952);
            -ms-transform: scale(.952);
            transform: scale(.952)
        }
        .cards--with-bgimage.cards--with-zoom .cards-item:hover .cards-icon .icon path {
            fill: #52c337!important
        }
        .cards--with-bgimage.cards--with-zoom .cards-row {
            padding-top: 0
        }
    }

    .cards--page-main-2 .cards-item .cards-icon svg path,
    .cards--python-3.cards--with-zoom .cards-item:hover .cards-icon .icon path {
        fill: #FFF!important
    }

    .cards--accordion .cards-row .column .cards-item {
        padding: 100px 15px;
        margin: 0
    }

    .cards.cards--accordion {
        padding: 0
    }

    @media (min-width:1030px) {
        .cards.cards--accordion {
            padding: 0;
            max-height: 700px
        }
        .cards--accordion .cards-row:after,
        .cards--accordion .cards-row:before {
            content: none
        }
        .cards--accordion .cards-row {
            float: none;
            display: table;
            table-layout: fixed
        }
        .cards--accordion .column {
            -webkit-transition: width .5s ease;
            transition: width .5s ease;
            display: table-cell;
            float: none
        }
        .cards--accordion.columns--2 .cards-row:hover .column {
            width: 30%
        }
        .cards--accordion.columns--2 .cards-row .column:hover {
            width: 70%
        }
        .cards--accordion.columns--3 .cards-row:hover .column {
            width: 25%
        }
        .cards--accordion.columns--3 .cards-row .column:hover {
            width: 50%
        }
        .cards--accordion.columns--4 .cards-row:hover .column {
            width: 20%
        }
        .cards--accordion.columns--4 .cards-row .column:hover {
            width: 40%
        }
        .cards--accordion.columns--5 .cards-row:hover .column {
            width: 17%
        }
        .cards--accordion.columns--5 .cards-row .column:hover {
            width: 32%
        }
        .cards--accordion .column .cards-item:before {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: #000;
            opacity: 0;
            -webkit-transition: opacity .5s ease;
            transition: opacity .5s ease
        }
        .cards--accordion .column .cards-item[class*=bgcolor--hover]:before {
            content: none
        }
        .cards--accordion .cards-row .column .cards-item {
            padding-top: 100px;
            margin: 0
        }
        .cards--accordion .cards-row .column .cards-text {
            position: relative;
            line-height: 40px;
            opacity: 0;
            top: 200px;
            -webkit-transition: opacity .1s ease, top .1s ease;
            transition: opacity .1s ease, top .1s ease;
            width: 80%;
            margin: 0 auto
        }
        .cards--accordion .cards-row .column:hover .cards-item:before {
            opacity: .4
        }
        .cards--accordion .cards-row .column:hover .cards-text {
            opacity: 1;
            top: 0;
            -webkit-transition-delay: .4s;
            transition-delay: .4s;
            -webkit-transition-duration: .3s;
            transition-duration: .3s
        }
        .cards--accordion .cards-row .column .cards-icon,
        .cards--accordion .cards-row .column .cards-name {
            position: relative;
            top: 100px;
            -webkit-transition: top .1s ease;
            transition: top .1s ease
        }
        .cards--accordion .cards-row .column:hover .cards-icon,
        .cards--accordion .cards-row .column:hover .cards-name {
            -webkit-transition-delay: .1s;
            transition-delay: .1s;
            -webkit-transition-duration: 1s;
            transition-duration: 1s;
            top: -50px
        }
    }

    .cards.cards--zoom {
        padding: 0
    }

    .cards--zoom .cards-item .cards-wrapper {
        width: auto
    }

    .cards--zoom .cards-item {
        padding: 50px 15px;
        margin: 0;
        width: auto;
        text-shadow: 0 0 10px rgba(0, 0, 0, .5)
    }

    @media (min-width:1030px) {
        .cards--zoom .cards-item {
            padding: 150px 15px 30px;
            -webkit-transition: -webkit-transform .2s ease;
            transition: -webkit-transform .2s ease;
            transition: transform .2s ease;
            transition: transform .2s ease, -webkit-transform .2s ease
        }
        .cards--zoom .cards-text {
            position: relative;
            opacity: 0;
            top: 50px;
            -webkit-transition: top .5s ease, opacity .5s ease;
            transition: top .5s ease, opacity .5s ease
        }
        .cards--zoom .cards-icon {
            -webkit-transition: margin .5s ease;
            transition: margin .5s ease
        }
        .cards--zoom .cards-item:hover {
            z-index: 100;
            -webkit-transform: scale(1.05);
            -ms-transform: scale(1.05);
            transform: scale(1.05);
            -webkit-box-shadow: 0 0 20px rgba(0, 0, 0, .4);
            box-shadow: 0 0 20px rgba(0, 0, 0, .4)
        }
        .cards--zoom .cards-item:hover .cards-text {
            top: 30px;
            opacity: 1
        }
        .cards--zoom .cards-item:hover .cards-icon {
            margin-top: -50px
        }
        .cards--zoom .cards-item:hover .cards-icon .icon {
            -webkit-transform: scale(.952);
            -ms-transform: scale(.952);
            transform: scale(.952)
        }
    }

    @media (max-width:1029px) {
        .cards-row+.cards-row {
            margin-top: 0
        }
        .cards--with-borders .container-fluid .cards-item {
            width: 100%;
            margin-left: auto;
            margin-right: auto
        }
        .cards-icon {
            line-height: 80px
        }
    }

    @media (max-width:767px) {
        .cards {
            padding: 50px 0
        }
        .cards--with-borders .container-fluid .cards-item {
            width: 100%;
            margin-left: auto;
            margin-right: auto
        }
        .cards-item {
            height: auto!important;
            margin-bottom: 30px
        }
        .cards-row+.cards-row {
            margin-top: 30px
        }
        .cards [class*=col]:last-child .cards-item,
        .column:last-child .cards-item {
            margin-bottom: 0
        }
        .container-fluid .cards-wrapper {
            width: 100%
        }
        .cards-name h4 {
            font-size: 26px;
            line-height: 30px
        }
        .cards-text p {
            font-size: 16px;
            line-height: 25px
        }
    }

    .cards--with-zoom .zIndex {
        z-index: 100!important
    }

    .cards--media-content-distribution .heading~.cards-row,
    .cards--media-content-distribution .heading~.row {
        margin-top: 66px
    }

    .cards--page-net-1 .cards-name h4 {
        margin-bottom: 26px;
        font-size: 30px;
        line-height: 35px
    }

    .cards--page-net-1 .cards-text p {
        font-size: 17px;
        line-height: 25px
    }

    .cards--page-net-2 {
        padding-bottom: 88px;
        background: url(/sites/all/themes/iflexion/images/bg-cards-page-net-1-left.png) 0 50% no-repeat, url(/sites/all/themes/iflexion/images/bg-cards-page-net-1-right.png) 100% 50% no-repeat #fff
    }

    .cards--page-net-2 .heading+.cards-row {
        margin-top: 40px
    }

    .cards--page-net-2 .cards-item {
        background: #fff
    }

    .cards--page-net-2 .cards-name {
        margin: -37px -32px 40px;
        padding: 37px 41px 12px
    }

    .cards--page-net-2 .cards-text ul {
        font-size: 1.1em
    }

    .cards--page-net-2 .cards-item--1 .cards-name {
        background: #51c336
    }

    .cards--page-net-2 .cards-item--2 .cards-name {
        background: #0cf
    }

    .cards--page-net-2.cards .cards-text p {
        line-height: 30px
    }

    .cards--page-net-2 .cards-wrapper {
        padding-bottom: 24px!important
    }

    .cards--page-net-2 ul li {
        margin-bottom: 14px
    }

    .cards--page-net-2 ul li:before {
        top: 10px
    }

    @media (max-width:1030px) {
        .cards--page-net-2 {
            background: url(/sites/all/themes/iflexion/images/bg-cards-page-net-1-left.png) 0 20% no-repeat, url(/sites/all/themes/iflexion/images/bg-cards-page-net-1-right.png) 100% 80% no-repeat #fff
        }
    }

    @media (max-width:767px) {
        .cards--page-net-2 {
            padding-bottom: 50px
        }
    }

    @media (min-width:1500px) {
        .cards--page-net-3 .cards-item .cards-name h4 {
            font-size: 30px;
            line-height: 35px
        }
    }

    .cards--page-net-3 {
        padding-bottom: 75px
    }

    .cards--page-net-3 .cards-wrapper {
        padding-bottom: 42px!important
    }

    .cards--frontend-1 {
        padding-bottom: 0
    }

    .cards--frontend-1 .heading-description {
        margin-bottom: 50px!important
    }

    .cards--frontend-1 .cards-row {
        background: url(/sites/all/themes/iflexion/images/bg-cards-frontend-1-1.jpg) 50% 0 repeat-x, url(/sites/all/themes/iflexion/images/bg-cards-frontend-1-2.jpg) 50% 100% repeat-x #f3f4f5;
        padding: 420px 0 300px!important;
        margin-top: 0!important
    }

    .cards--frontend-1 .cards-name h4 {
        margin-bottom: 34px;
        font-size: 45px
    }

    @media (max-width:767px) {
        .cards--frontend-1 .cards-name h4 {
            font-size: 30px;
            line-height: 34px
        }
    }

    .cards--frontend-2 {
        padding-top: 68px;
        padding-bottom: 0
    }

    .cards--frontend-2 .cards-name h4 {
        font-size: 45px;
        line-height: 45px
    }

    @media (max-width:1030px) {
        .cards--frontend-1 .cards-row {
            background: url(/sites/all/themes/iflexion/images/bg-cards-frontend-1-1.jpg) 85% 0 repeat-x, url(/sites/all/themes/iflexion/images/bg-cards-frontend-1-2.jpg) 50% 100% repeat-x #f3f4f5;
            padding: 400px 0 300px!important
        }
    }

    @media (max-width:767px) {
        .cards--frontend-2 .cards-name h4 {
            font-size: 26px;
            line-height: 30px
        }
        .cards--frontend-1 .cards-row {
            padding-bottom: 340px!important
        }
    }

    .cards--page-win-1 {
        padding-top: 68px
    }

    .cards--page-win-1 .heading-title h3 {
        font-size: 52px;
        line-height: 55px
    }

    .cards--page-win-1 .heading~.cards-row,
    .cards--page-win-1 .heading~.row {
        margin-top: 63px
    }

    .cards--page-win-1 .cards-name h4 {
        margin-bottom: 22px;
        font-size: 32px
    }

    .cards--page-win-1 .cards-text p {
        font-size: 17px;
        line-height: 30px
    }

    .cards--cloud-1 .container-fluid .cards-wrapper {
        width: 100%
    }

    @media (max-width:1029px) {
        .cards--cloud-1 .container-fluid .cards-wrapper {
            width: 70%
        }
    }

    @media (max-width:767px) {
        .cards--page-win-1 .heading-title h3 {
            font-size: 32px;
            line-height: 39px
        }
        .cards--cloud-1 .container-fluid .cards-wrapper {
            width: 100%
        }
    }

    .cards--cloud-2 {
        counter-reset: cards-cloud-2-counter
    }

    .cards--cloud-2 .heading-description {
        line-height: 40px
    }

    .cards--cloud-2 .cards-name h4 {
        font-weight: 400;
        font-size: 25px;
        text-align: left;
        counter-increment: cards-cloud-2-counter
    }

    .cards--cloud-2 .cards-item {
        text-align: left;
        counter-increment: cards-cloud-2-counter - 1
    }

    .cards--cloud-2 .cards-item .cards-wrapper {
        margin-left: 90px;
        position: relative
    }

    .cards--cloud-2 .cards-wrapper:before {
        content: "";
        display: block;
        position: absolute;
        top: -10px;
        left: -90px;
        width: 82px;
        height: 175px;
        background: url(/sites/all/themes/iflexion/images/bg-cards-cloud-1-counter.png)
    }

    .cards--cloud-2 .cards-wrapper:after {
        content: counter(cards-cloud-2-counter, decimal-leading-zero);
        display: block;
        position: absolute;
        top: -3px;
        left: -83px;
        width: 46px;
        height: 46px;
        line-height: 46px;
        font-size: 25px;
        font-weight: 600;
        letter-spacing: -.1em;
        text-align: center;
        color: #fff;
        background: #51c336;
        border-radius: 24px
    }

    .cards--cloud-3 {
        padding-bottom: 0
    }

    @media (min-width:1025px) {
        .cards--accordion--3 .cards-row:after,
        .cards--accordion--3 .cards-row:before {
            content: none
        }
        .cards--accordion--3 .cards-row {
            float: none;
            display: table;
            table-layout: fixed
        }
        .cards--accordion--3 .col-sm-4 {
            -webkit-transition: width .5s ease;
            transition: width .5s ease;
            display: table-cell;
            float: none
        }
        .cards--accordion--3 .cards-row:hover .col-sm-4 {
            width: 20%
        }
        .cards--accordion--3 .cards-row .col-sm-4:hover {
            width: 60%
        }
        .cards--accordion--3 .col-sm-4 .cards-item:before {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: #000;
            opacity: 0;
            -webkit-transition: opacity .5s ease;
            transition: opacity .5s ease
        }
        .cards--accordion--3 .cards-row .col-sm-4 .cards-text {
            opacity: 0;
            top: 200px;
            -webkit-transition: opacity .1s ease, top .1s ease;
            transition: opacity .1s ease, top .1s ease;
            width: 98%;
            margin: 0 auto
        }
        .cards--accordion--3 .cards-row .col-sm-4 .cards-text p {
            font-size: 19px;
            line-height: 40px
        }
        .cards--accordion--3 .cards-row .col-sm-4 .cards-item {
            padding-top: 60px;
            padding-bottom: 0
        }
        .cards--accordion--3 .cards-row .col-sm-4:hover .cards-item:before {
            opacity: .4
        }
        .cards--accordion--3 .cards-row .col-sm-4:hover .cards-text {
            line-height: 40px;
            opacity: 1;
            top: 0;
            -webkit-transition-delay: .4s;
            transition-delay: .4s;
            -webkit-transition-duration: .3s;
            transition-duration: .3s
        }
        .cards--accordion--3 .cards-row .col-sm-4 .cards-icon,
        .cards--accordion--3 .cards-row .col-sm-4 .cards-name {
            position: relative;
            top: 100px;
            -webkit-transition: top .1s ease;
            transition: top .1s ease
        }
        .cards--accordion--3 .cards-row .col-sm-4:hover .cards-icon,
        .cards--accordion--3 .cards-row .col-sm-4:hover .cards-name {
            -webkit-transition-delay: .1s;
            transition-delay: .1s;
            -webkit-transition-duration: 1s;
            transition-duration: 1s;
            top: -10px
        }
        .cards--accordion--3 .cards-row .cards-name h4 {
            font-size: 45px;
            line-height: 45px
        }
    }

    .cards--python-2 {
        background-size: cover;
        padding: 150px 0 144px
    }

    .cards--python-2 .col-sm-6+.col-sm-6 {
        color: #232323
    }

    .cards--python-2 .col-sm-6 .cards-item {
        margin-bottom: 0
    }

    .cards--python-2 .cards-name h4 {
        margin-bottom: 40px
    }

    .cards--python-2 .cards-text {
        width: 80%;
        margin-left: auto;
        margin-right: auto
    }

    @media (max-width:1030px) {
        .cards--python-2 {
            background-size: auto 100%;
            background-position: 0 50%
        }
        .cards--python-2 .col-sm-6+.col-sm-6 {
            margin-top: 50px;
            color: inherit
        }
    }

    @media (max-width:1029px) {
        .cards--python-2 {
            padding-top: 100px;
            padding-bottom: 100px
        }
    }

    @media (max-width:767px) {
        .cards--python-2 {
            padding-top: 50px;
            padding-bottom: 50px
        }
    }

    .cards--python-3 {
        padding-bottom: 0
    }

    .cards--python-3+.bgcolor--white {
        padding-top: 105px
    }

    .cards--python-3 .cards-icon {
        width: auto;
        height: auto;
        border-radius: 0;
        background: 0 0!important
    }

    .cards--python-3.cards--with-zoom .cards-item:hover .cards-icon .icon {
        -webkit-transform: none;
        -ms-transform: none;
        transform: none
    }

    .cards--python-3 .col-md-3:nth-child(2) .cards-wrapper {
        width: 100%
    }

    .cards--python-3 .col-md-3:nth-child(2) .cards-icon .icon {
        margin-top: 11px;
        height: 120px;
        max-height: none
    }

    .cards--python-3 .col-md-3:nth-child(3) .cards-icon .icon {
        margin-top: -6px
    }

    @media (max-width:767px) {
        .cards--python-3+.bgcolor--white {
            padding-top: 50px
        }
    }

    .cards--page-php-1 {
        padding-top: 62px;
        padding-bottom: 71px
    }

    @media (max-width:767px) {
        .cards--page-php-1 {
            padding-top: 50px;
            padding-bottom: 50px
        }
    }

    .cards--page-php-1 .heading~.cards-row,
    .cards--page-php-1 .heading~.row {
        margin-top: 60px
    }

    .cards--page-php-1 .cards-name h4 {
        margin-bottom: 20px
    }

    .cards--page-php-1 .cards-text p {
        font-size: 17px;
        line-height: 30px
    }

    .cards--page-php-1 .cards-text {
        max-width: 516px;
        margin-left: auto;
        margin-right: auto
    }

    .cards--page-php-2 .cards-wrapper {
        padding-bottom: 40px!important
    }

    .cards--ios ul li {
        margin-bottom: 10px
    }

    .cards--ios ul li:last-child {
        margin-bottom: 0
    }

    @media (min-width:1440px) {
        .cards--ios .col-sm-4 {
            width: 25%
        }
        .cards--ios .col-sm-4:first-child {
            margin-left: 12.5%
        }
    }

    @media (max-width:1029px) {
        .cards--ios .cards-item {
            height: auto!important
        }
    }

    .cards--java-1 {
        max-width: 1920px;
        margin-left: auto;
        margin-right: auto;
        padding: 0 0 190px
    }

    .cards--java-1:after {
        content: "";
        display: block;
        position: absolute;
        top: 13%;
        left: 50%;
        margin-left: -8%;
        width: 22%;
        height: 100%;
        background: url(/sites/all/themes/iflexion/images/vis-java-man.png) 50% 0 no-repeat;
        background-size: contain;
        z-index: 100;
        max-width: 460px
    }

    .cards--java-1 .cards-item {
        padding: 150px 15px 170px;
        margin: 0 -15px;
        width: auto
    }

    .cards--java-1 .cards-item.bgcolor--blue {
        background: url(/sites/all/themes/iflexion/images/bg-cards-java-1.png) 100% 0 no-repeat #0cf;
        background-size: contain
    }

    .cards--java-1 .cards-text {
        width: 80%;
        margin-left: auto;
        margin-right: auto
    }

    .cards--java-1 .cards-text p {
        font-size: 19px;
        line-height: 35px
    }

    @media (max-width:1030px) {
        .cards--java-1 {
            padding: 0 0 100px
        }
        .cards--java-1:after {
            left: 0;
            top: 50%;
            margin-top: -175px;
            margin-left: 0;
            width: 100%;
            max-width: none;
            height: 200px;
            background-position: 0 50%;
            background-size: contain
        }
        .cards--java-1 .cards-item {
            padding: 150px 15px
        }
    }

    @media (max-width:1029px) {
        .cards--java-1:after {
            display: none
        }
        .cards--java-1 .cards-item {
            height: auto!important;
            padding-top: 100px;
            padding-bottom: 100px
        }
        .cards--java-1 .cards-text {
            width: 100%
        }
    }

    @media (max-width:767px) {
        .cards--java-1 {
            padding: 0 0 50px
        }
        .cards--java-1 .cards-item {
            padding-top: 50px;
            padding-bottom: 50px
        }
    }

    .cards--java-3 .cards-name h4 {
        font-size: 30px
    }

    .cards--java-3 .heading-title h3 {
        margin: 0
    }

    .cards--java-4 .cards-item {
        position: relative
    }

    .cards--java-4 .cards-wrapper {
        background: #fff;
        height: 100%;
        z-index: 2
    }

    .cards--java-4 .cards-name {
        color: #fff;
        margin: -37px -32px 40px;
        padding: 37px 41px 12px
    }

    .cards--java-4 .cards-item--1 .cards-name {
        background: #51c336
    }

    .cards--java-4 .cards-item--2 .cards-name {
        background: #0cf
    }

    .cards--java-4.cards .cards-text p {
        line-height: 30px
    }

    @media (min-width:1030px) {
        .cards--java-4 .cards-item--1 {
            margin-right: 40px
        }
        .cards--java-4 .cards-item--2 {
            margin-left: 40px
        }
    }

    @media (min-width:769px) {
        .cards--java-4 .cards-item:before {
            content: "";
            display: block;
            position: absolute;
            bottom: -25px;
            height: 50%;
            width: 176%;
            left: 0;
            background: url(/sites/all/themes/iflexion/images/bg-cards-java-4-shadow-full.png) 50% 100% no-repeat;
            background-size: contain;
            z-index: 1;
            margin: 0 0 0 -40%
        }
    }

    .cards--application-integration {
        padding-bottom: 80px
    }

    .cards--application-integration .cards-name h4 {
        font-size: 30px;
        line-height: 35px
    }

    @media (max-width:767px) {
        .cards--application-integration {
            padding-bottom: 50px
        }
    }

    .cards--qa-1 {
        padding-top: 94px!important
    }

    .cards--qa-1 .heading-title h3 {
        font-size: 52px;
        line-height: 60px
    }

    .cards--qa-1 .heading-description {
        margin-top: 17px!important
    }

    .cards--qa-1 .heading-description p {
        font-size: 19px;
        line-height: 30px
    }

    .cards--appdev-1 {
        padding-top: 85px;
        padding-bottom: 70px
    }

    @media (max-width:767px) {
        .cards--appdev-1 {
            padding-top: 50px
        }
    }

    .cards--appdev-1 .heading-description {
        max-width: 1118px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 0
    }

    @media (max-width:1029px) {
        .cards--appdev-1 {
            padding-bottom: 50px
        }
    }

    .cards--appdev-2 {
        padding-top: 94px;
        padding-bottom: 50px
    }

    .cards--appdev-2 .heading-description {
        margin-top: 13px
    }

    .cards--appdev-2 .heading~.cards-row,
    .cards--appdev-2 .heading~.row {
        margin-top: 59px
    }

    @media (max-width:767px) {
        .cards--appdev-2 {
            padding-top: 50px
        }
    }

    .cards--appdev-2 .cards-item {
        border-bottom: 0!important;
        margin-bottom: 80px
    }

    .cards--appdev-2 .cards-item:after,
    .cards--appdev-2 .cards-item:before {
        content: '';
        display: block;
        width: 51%;
        height: 1px;
        border-top: 1px solid #ebebeb;
        position: absolute;
        bottom: 0;
        left: 0;
        -webkit-transform-origin: 0 100%;
        -ms-transform-origin: 0 100%;
        transform-origin: 0 100%;
        -webkit-transform: rotate(7deg);
        -ms-transform: rotate(7deg);
        transform: rotate(7deg)
    }

    .cards--appdev-2 .cards-item:after {
        left: auto;
        right: 0;
        -webkit-transform-origin: 100% 100%;
        -ms-transform-origin: 100% 100%;
        transform-origin: 100% 100%;
        -webkit-transform: rotate(-7deg);
        -ms-transform: rotate(-7deg);
        transform: rotate(-7deg)
    }

    .cards--appdev-2 .cards-wrapper {
        padding: 36px 30px 20px!important
    }

    .cards--appdev-2 .cards-name {
        color: #fff;
        margin: -37px -31px 30px;
        padding: 18px 31px 16px;
        background: #51c336;
        text-align: center
    }

    .cards--appdev-2 .cards-name h4 {
        margin-bottom: 0!important;
        text-transform: none;
        font-size: 1.6em!important
    }

    @media (max-width:767px) {
        .cards--appdev-2 .col-sm-4:last-child .cards-item {
            margin-bottom: 0
        }
        .cards--appdev-2 .cards-wrapper {
            padding: 36px 15px 5px 0!important
        }
        .cards--appdev-2 .cards-name {
            margin: -37px -16px 30px 0;
            padding: 18px 15px 16px
        }
        .cards--appdev-3 .cards-item {
            height: auto!important
        }
    }

    .cards--ruby-2 .cards-row {
        padding-top: 0!important;
        background-color: #f8f8f8
    }

    .cards--ruby-2 .cards-item {
        margin-bottom: 0;
        padding-bottom: 60px
    }

    .cards--ruby-2 .cards-icon {
        line-height: 170px;
        height: 170px;
        margin: 0
    }

    .cards--ruby-2 .cards-name {
        background: #51c336;
        background: -webkit-gradient(linear, left top, right top, color-stop(0, rgba(81, 195, 54, 1)), to(rgba(72, 170, 47, 1)));
        background: -webkit-linear-gradient(left, rgba(81, 195, 54, 1) 0, rgba(72, 170, 47, 1) 100%);
        background: linear-gradient(to right, rgba(81, 195, 54, 1) 0, rgba(72, 170, 47, 1) 100%);
        color: #fff;
        margin: 0 -15px 25px;
        padding: 20px
    }

    .cards--ruby-2 .cards-item--3 .cards-name {
        background: #51c336
    }

    .cards--ruby-2 .cards-name h4 {
        margin: 0
    }

    @media (min-width:1030px) {
        .cards--ruby-2 {
            padding: 100px 0 155px
        }
        .cards--ruby-2 .cards-row {
            background-size: 100% auto;
            background-position: 50% 0;
            background-image: url(/sites/all/themes/iflexion/images/bg-cards-ruby-2.png);
            position: relative;
            float: left
        }
        .cards--ruby-2 .cards-row:after,
        .cards--ruby-2 .cards-row:before {
            content: '';
            display: block;
            position: absolute;
            background-repeat: no-repeat
        }
        .cards--ruby-2 .cards-row:before {
            width: 100%;
            height: 155px;
            top: 100%;
            background-size: 100% 100%;
            background-position: 50% 100%;
            background-image: url(/sites/all/themes/iflexion/images/bg-cards-ruby-2-shadow-b.png)
        }
        .cards--ruby-2 .cards-row:after {
            width: 200px;
            height: 100%;
            padding-top: 155px;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            bottom: -155px;
            right: 100%;
            background-position: 100% 100%;
            background-image: url(/sites/all/themes/iflexion/images/bg-cards-ruby-2-shadow-l.png)
        }
    }

    .cards--ruby-3 .heading-title h3 {
        margin-bottom: 0
    }

    .cards--ruby-3 .cards-name h4 {
        font-size: 1.6em
    }

    .cards--webappdev-3 {
        padding-bottom: 100px
    }

    .cards--webappdev-3 .cards-row {
        background: url(/sites/all/themes/iflexion/images/bg-cards-webappdev-3.png) #d6d6d6;
        background: -webkit-linear-gradient(315deg, rgba(255, 255, 255, .2) 0, rgba(0, 0, 0, .1) 100%), url(/sites/all/themes/iflexion/images/bg-cards-webappdev-3.png), #d6d6d6;
        background: linear-gradient(135deg, rgba(255, 255, 255, .2) 0, rgba(0, 0, 0, .1) 100%), url(/sites/all/themes/iflexion/images/bg-cards-webappdev-3.png), #d6d6d6;
        border: 3px solid;
        border-color: #eee #aaa #aaa #eee;
        margin: 0 5px
    }

    .cards--webappdev-3 .cards-item {
        margin: 5px -10px;
        border: 1px solid;
        border-color: #777 #eee #eee #777;
        border-radius: 5px;
        text-align: left;
        background: -webkit-linear-gradient(315deg, rgba(255, 255, 255, .1) 0, rgba(255, 255, 255, .5) 40%, rgba(0, 0, 0, .2) 100%);
        background: linear-gradient(135deg, rgba(255, 255, 255, .1) 0, rgba(255, 255, 255, .5) 40%, rgba(0, 0, 0, .2) 100%)
    }

    .cards--webappdev-3 .cards-wrapper {
        border: 2px solid;
        border-color: #eee #777 #777 #eee;
        border-radius: 5px;
        padding: 40px;
        height: 100%;
        background: url(/sites/all/themes/iflexion/images/bg-cards-webappdev-3-keyhole.png) 95% 50% no-repeat
    }

    .cards--webappdev-3 .cards-wrapper ul li {
        margin-bottom: .5em;
        padding-left: 20px
    }

    .cards--webappdev-3 .cards-wrapper ul li:before {
        left: 0
    }

    @media (max-width:1030px) {
        .cards--webappdev-3 .cards-item {
            width: auto
        }
    }

    .cards--support-2 {
        padding-top: 21px;
        padding-bottom: 62px
    }

    .cards--support-2 .heading-description {
        max-width: 966px;
        margin-top: 19px;
        margin-left: auto;
        margin-right: auto
    }

    .cards--support-2 .heading-description p {
        line-height: 30px
    }

    .cards--support-2 .cards-wrapper {
        padding-bottom: 24px!important
    }

    @media (max-width:1029px) {
        .cards--support-2 {
            padding-top: 0
        }
    }

    .cards--support-2 h4 {
        font-size: 30px;
        line-height: 35px
    }

    .cards--support-3 {
        padding-top: 104px;
        padding-bottom: 145px
    }

    @media (max-width:1029px) {
        .cards--support-3 {
            padding-bottom: 100px
        }
    }

    @media (max-width:767px) {
        .cards--support-3 {
            padding-top: 50px;
            padding-bottom: 50px
        }
    }

    .cards--support-3 .cards-item ul li+li {
        margin-top: 7px
    }

    .cards--support-3 .cards-addon {
        position: relative;
        text-align: center;
        border-top: 2px solid #0cf;
        padding: 50px 0 0;
        margin-top: 50px
    }

    .cards--support-3 .cards-addon:after {
        content: '';
        display: block;
        position: absolute;
        width: 21px;
        height: 20px;
        top: -10px;
        left: 50%;
        margin-left: -10px;
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAUCAYAAABiS3YzAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAfFJREFUeNqklMsrRHEUx+94bZVHxmuBxkheYYVEFiI7JrsRsp6wIH+Ax2LI3nsn2WEnJtl4hSIm72SSR83SeIzv4fvTbcYdhlOfzv3dOb8z556XSdvyawaSDZpBPZ/jwCNwgyUwy+cgMX3jNAEMATuI0ozlBcyAHnCv/yEiwDAfbIA28AbGQR1I/AjgU8t5jL+30T7fKFILWOfFVdABTkJEmkXnVeAOVKh0qEgjmSNxuABq6TAPTIEr8EQ9xchOabfAe7P08xVpK5gAZ6AYeIEDOJVhgLyCbjAKYsEOyATt4kdF2k3dR4c2MGLgUH3ZCO28vCfSpSK1MBcekAaiGXGK9rPInQzwDK5BMrBKpOU0cLGi1b90qNFJDe+5+K5MnJp5uKTO1cKTHOoLarM49fEQrf1PYqh94vSGh3TqwzCdHVGnqjxLoWSujwMKdc58/blQUvkDvrCxyaVH/b9w6qB9E+/LV7pVnw5T97OZ50Anm1wzaP5O2on9AN879RMlzbwNCjl2jSxgAQdD2iYJ3IJlXt5nceZBA9gDJfKH+oViBWu6hdLOITCSTG4xtVAqVdEC92kRWGTz+7gvJZJN8ADiQSlzaGekHi7y3VBLWiIdBC0hZl/ldRr0MtKQm1+fjlaOrZUF8bL9VsAkn4PkXYABAOA6iPfoBY38AAAAAElFTkSuQmCC) #fff
    }

    .cards--support-3 .cards-addon h4 {
        position: relative;
        display: inline-block;
        margin: 0 auto;
        font-weight: 300;
        font-size: 30px;
        text-transform: uppercase;
        border-top: 1px solid #ebebeb
    }

    .cards--support-3 .cards-addon h4:before {
        content: '';
        display: block;
        position: absolute;
        width: 1px;
        height: 50px;
        border-right: 1px solid #ebebeb;
        bottom: 100%;
        left: 50%
    }

    .cards--support-4 {
        padding-top: 78px
    }

    @media (max-width:1030px) {
        .cards--support-3 .cards-item .cards-name:after {
            display: none
        }
        .cards.cards--support-3 .cards-item .cards-name h4:before {
            font-size: 2em;
            font-weight: 600;
            color: #ebebeb
        }
        .cards--support-3 .cards-item--1 .cards-name h4:before {
            content: '01'
        }
        .cards--support-3 .cards-item--2 .cards-name h4:before {
            content: '02'
        }
        .cards--support-3 .cards-item--3 .cards-name h4:before {
            content: '03'
        }
    }

    .cards--support-4 .cards-icon .icon {
        width: 120px;
        height: 100px;
        max-height: none;
        opacity: .3
    }

    .cards--support-4 .cards-name h4 {
        font-weight: 400;
        font-size: 100px;
        letter-spacing: -5px;
        line-height: normal
    }

    .cards--support-4 .cards-text {
        text-align: left
    }

    @media (max-width:767px) {
        .cards--support-4 {
            padding-top: 50px
        }
        .cards--support-3 {
            padding-bottom: 50px
        }
    }

    @media (min-width:760px) {
        .cards--support-4 .cards-icon {
            position: absolute;
            left: 50px;
            top: 0
        }
        .cards--support-4 .cards-name {
            position: absolute;
            left: 35px;
            top: 30px;
            width: 200px;
            text-align: right
        }
        .cards--support-4 .cards-text {
            margin: 0 4% 0 250px;
            text-align: left
        }
    }

    .cards--page-methodology .heading-title h3,
    .cards--page-quality-management .heading-title h3 {
        margin-bottom: 68px
    }

    .cards--page-methodology {
        padding-bottom: 285px;
        background: #fff;
        background: -webkit-linear-gradient(top, #fff 1%, #f0f0f0 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(1%, #fff), to(#f0f0f0));
        background: linear-gradient(to bottom, #fff 1%, #f0f0f0 100%);
        filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f0f0f0', GradientType=0)
    }

    .cards--page-methodology:before {
        content: '';
        position: absolute;
        display: block;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-repeat: no-repeat;
        background-position: 50% 100%;
        background-image: url(/sites/all/themes/iflexion/images/bg-cards-methodology.jpg)
    }

    .cards--page-engagement-models {
        padding-top: 30px
    }

    .cards--page-quality-management .cards-icon {
        line-height: 0
    }

    .cards--page-quality-management-1 {
        padding-bottom: 0;
        background-color: #FFF
    }

    .cards--page-quality-management-1 .cards-item {
        min-height: 165px;
        padding-top: 8px;
        padding-left: 90px;
        text-align: left;
        background-repeat: no-repeat;
        background-position: 0 0;
        background-image: url(/sites/all/themes/iflexion/images/ico-cards--page-quality-management@1x.png);
        background-size: auto
    }

    .cards--page-quality-management-1 .cards-item:after {
        content: '';
        position: absolute;
        display: block;
        width: 48px;
        height: 48px;
        top: 7px;
        left: 7px;
        font-weight: 700;
        font-size: 25px;
        line-height: 48px;
        color: #FFF;
        text-align: center
    }

    .cards--page-quality-management-1 .cards-item--1:after {
        content: '01'
    }

    .cards--page-quality-management-1 .cards-item--2:after {
        content: '02'
    }

    .cards--page-quality-management-1 .cards-item--3:after {
        content: '03'
    }

    .cards--page-quality-management-1 .cards-item--4:after {
        content: '04'
    }

    .cards--page-quality-management-1 .cards-name h4 {
        font-size: 25px;
        line-height: 30px;
        color: #51c336
    }

    .cards--page-application-security {
        padding-top: 110px;
        padding-bottom: 118px
    }

    @media (max-width:1029px) {
        .cards--page-application-security {
            padding-bottom: 50px
        }
    }

    .cards--page-application-security .cards-icon {
        margin-bottom: 37px;
        line-height: 0
    }

    .cards--page-application-security .cards-name h4 {
        margin-bottom: 34px;
        font-size: 38px
    }

    @media (max-width:767px) {
        .cards--page-application-security {
            padding-top: 50px
        }
        .cards--page-application-security .cards-name h4 {
            font-size: 26px;
            line-height: 30px
        }
    }

    .cards--page-application-security .cards-text p {
        font-size: 17px;
        line-height: 27px
    }

    .cards--page-application-security .cards-wrapper {
        width: 90%
    }

    .cards--page-application-security-1 {
        padding-bottom: 170px;
        color: #FFF;
        background-color: #000;
        background-repeat: no-repeat;
        background-position: 50% 0;
        background-image: url(/sites/all/themes/iflexion/images/bg-cards--page-application-security-1.jpg);
        background-size: cover;
        overflow: hidden
    }

    .cards--page-application-security-1 .cards-item {
        width: 90%;
        margin-left: auto;
        margin-right: auto;
        padding-top: 100px
    }

    @media (max-width:1029px) {
        .cards--page-application-security-1 .cards-item {
            width: 100%
        }
    }

    .cards--page-application-security-1 .cards-item--1 {
        z-index: 4
    }

    .cards--page-application-security-1 .cards-item--2 {
        z-index: 3
    }

    .cards--page-application-security-1 .cards-item--3 {
        z-index: 2
    }

    .cards--page-application-security-1 .cards-item:after {
        content: '';
        position: absolute;
        display: block;
        width: 350px;
        height: 350px;
        top: 74px;
        left: 50%;
        margin-left: -175px;
        background-color: #000;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg)
    }

    .cards--page-application-security-1 .cards-item--1:after {
        background: #0cf;
        background: rgba(0, 204, 255, .9)
    }

    .cards--page-application-security-1 .cards-item--2:after {
        background: #255ccc;
        background: rgba(37, 92, 204, .9)
    }

    .cards--page-application-security-1 .cards-item--3:after {
        background: #51c336;
        background: rgba(81, 195, 54, .9)
    }

    .cards--page-application-security-1 .cards-item:before {
        content: '';
        position: absolute;
        display: block;
        width: 0;
        height: 0;
        top: 2px;
        left: 50%;
        margin-left: -102px;
        border-style: solid;
        border-width: 51px 51px 0;
        border-color: #000 transparent transparent
    }

    .cards--page-application-security-1 .cards-item--1:before {
        border-color: #0cf transparent transparent;
        opacity: .8
    }

    .cards--page-application-security-1 .cards-item--2:before {
        border-color: #255ccc transparent transparent;
        opacity: .8
    }

    .cards--page-application-security-1 .cards-item--3:before {
        border-color: #51c336 transparent transparent;
        opacity: .8
    }

    .cards--page-application-security-1 .cards-wrapper {
        position: relative;
        padding-left: 80px;
        padding-right: 80px;
        z-index: 2
    }

    .cards--page-application-security-1 .heading-title h3 {
        margin-bottom: 76px
    }

    .cards--page-application-security-1 .cards-icon {
        line-height: 0
    }

    .cards--page-application-security-1 .cards-name h4 {
        font-size: 35px;
        line-height: 35px;
        color: #FFF;
        text-transform: none
    }

    .cards--page-application-security-1 .cards-text p {
        color: #FFF
    }

    @media (max-width:1440px) {
        .cards--page-application-security-1 .cards-wrapper {
            padding-left: 40px;
            padding-right: 40px
        }
    }

    @media (max-width:1200px) {
        .cards--page-application-security-1 .cards-wrapper {
            padding-left: 40px;
            padding-right: 40px
        }
        .cards--page-application-security-1 .cards-item {
            padding-top: 80px
        }
        .cards-icon .icon,
        .cards-icon svg {
            height: 80px
        }
        .cards--page-application-security-1 .cards-item:after {
            width: 300px;
            height: 300px;
            margin-left: -150px
        }
        .cards--page-application-security-1 .cards-item:before {
            top: 12px;
            margin-left: -102px
        }
    }

    @media (max-width:1030px) {
        .cards--page-application-security-1 .cards-wrapper {
            max-width: 350px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 160px
        }
    }

    @media (max-width:767px) {
        .cards--page-application-security-1 {
            padding-bottom: 50px
        }
        .cards--page-application-security-1 .cards-wrapper {
            margin-bottom: 115px
        }
    }

    .cards--page-application-security-2 .cards-item {
        padding-top: 28px;
        padding-bottom: 80px
    }

    .cards--page-application-security-2 .cards-item:before {
        content: '';
        position: absolute;
        display: block;
        width: 50%;
        height: 100%;
        top: 0;
        left: 0
    }

    .cards--page-application-security-2 .cards-item:after {
        content: '';
        position: absolute;
        display: block;
        width: 100%;
        height: 80px;
        bottom: 0;
        background-repeat: no-repeat;
        background-position: 50% 100%;
        background-image: url(/sites/all/themes/iflexion/images/cards--page-application-security-2-bottom.png);
        background-size: cover
    }

    .cards--page-application-security-2 .cards-item--1 {
        background-color: #255ccc
    }

    .cards--page-application-security-2 .cards-item--1:before {
        background-color: #2762d9
    }

    .cards--page-application-security-2 .cards-item--2 {
        background-color: #51c336
    }

    .cards--page-application-security-2 .cards-item--2:before {
        background-color: #55cd39
    }

    .cards--page-application-security-2 .cards-item--3 {
        background-color: #0cf
    }

    .cards--page-application-security-2 .cards-item--3:before {
        background-color: #00d7ff
    }

    .cards--page-application-security-2 .cards-wrapper {
        position: relative;
        padding-left: 30px;
        padding-right: 30px;
        z-index: 2
    }

    .cards--page-application-security-2 .cards-name h4 {
        font-size: 35px;
        line-height: 35px;
        color: #FFF
    }

    .cards--page-application-security-2 .cards-text p {
        color: #FFF
    }

    .cards--page-application-security-2 .cards-icon {
        margin-bottom: 33px;
        line-height: 0
    }

    @media (max-width:1030px) {
        .cards--page-application-security-2 .cards-item {
            padding-bottom: 30px
        }
        .cards--page-application-security-2 .cards-item:after {
            display: none
        }
    }

    .cards--page-dedicated-development-teams {
        margin-top: -40px
    }

    @media (max-width:767px) {
        .cards--page-dedicated-development-teams {
            margin-top: 0
        }
    }

    .cards--page-dedicated-development-teams .cards-item {
        text-align: center
    }

    .cards--page-dedicated-development-teams-1 {
        padding-left: 30px;
        overflow: hidden
    }

    .cards--page-dedicated-development-teams-1 .heading-title h3 {
        margin-bottom: 62px
    }

    .cards--page-dedicated-development-teams-1 .cards-item {
        text-align: left
    }

    .cards--page-dedicated-development-teams-1 .cards-item--1 {
        padding-top: 158px
    }

    .cards--page-dedicated-development-teams-1 .cards-item--2 {
        padding-top: 80px
    }

    .cards--page-dedicated-development-teams-1 .cards-name h4 {
        position: relative;
        margin-bottom: 68px;
        font-weight: 400;
        font-size: 35px;
        line-height: 35px;
        text-transform: uppercase
    }

    .cards--page-dedicated-development-teams-1 .cards-name h4:after {
        content: '';
        position: absolute;
        display: block;
        width: 100%;
        height: 99px;
        bottom: -109px;
        left: -29px;
        background-repeat: no-repeat;
        background-position: 0 0;
        background-image: url(/sites/all/themes/iflexion/images/dedicated-development-teams-title-after.png);
        background-size: contain
    }

    .cards--page-dedicated-development-teams-1 .cards-name {
        position: relative
    }

    .cards--page-dedicated-development-teams-1 .cards-name:after {
        content: '';
        position: absolute;
        display: block;
        width: 110px;
        top: -10px;
        left: -141px;
        font-weight: 500;
        font-size: 106px;
        line-height: 106px;
        color: #000;
        opacity: .1
    }

    .cards--page-dedicated-development-teams-1 .cards-item--1 .cards-name:after {
        content: '01'
    }

    .cards--page-dedicated-development-teams-1 .cards-item--2 .cards-name:after {
        content: '02'
    }

    .cards--page-dedicated-development-teams-1 .cards-item--3 .cards-name:after {
        content: '03'
    }

    .cards--page-dedicated-development-teams-1 ul li {
        line-height: 22px
    }

    .cards--page-dedicated-development-teams-1 ul li:before {
        top: .5em
    }

    .cards--page-dedicated-development-teams-1 ul li+li {
        margin-top: 10px
    }

    @media (max-width:1030px) {
        .cards--page-dedicated-development-teams-1 {
            padding-left: 15px
        }
    }

    @media (max-width:1029px) {
        .cards--page-dedicated-development-teams-1 .cards-item {
            height: auto!important;
            padding-top: 0
        }
    }

    .cards--page-dedicated-development-teams-2 {
        padding-bottom: 80px
    }

    @media (max-width:767px) {
        .cards--page-dedicated-development-teams-2 {
            padding-bottom: 50px
        }
    }

    .cards--page-dedicated-development-teams-2 .cards-item .cards-wrapper {
        text-align: center
    }

    .cards--page-dedicated-development-teams-2 .heading+.cards-row {
        margin-top: 18px
    }

    .cards--page-dedicated-development-teams-2 .cards-icon .icon {
        max-height: 160px
    }

    .cards--page-dedicated-development-teams-2 .cards-name h4 {
        text-transform: none
    }

    .cards--page-content-and-document-management {
        padding-top: 74px;
        padding-bottom: 0;
        background-color: #FFF
    }

    .cards--page-content-and-document-management .cards-row {
        background-repeat: no-repeat;
        background-position: 50% 0;
        background-image: url(/sites/all/themes/iflexion/images/cards-content-and-document-management.jpg);
        background-size: cover
    }

    .cards--page-content-and-document-management .col-md-3+.col-md-3 {
        border-left: 1px solid rgba(255, 255, 255, .2)
    }

    .cards--page-content-and-document-management .cards-item {
        background-color: transparent
    }

    .cards--page-content-and-document-management .cards-item .cards-icon {
        width: 160px;
        height: 160px;
        line-height: 160px;
        background-color: #00529c;
        margin-bottom: 36px
    }

    .cards--page-content-and-document-management .cards-item:hover {
        background-color: #f4f9fd
    }

    .cards--page-content-and-document-management .cards-item:hover,
    .cards--page-content-and-document-management .cards-item:hover .cards-name h4,
    .cards--page-content-and-document-management .cards-item:hover .cards-text p {
        color: #234;
        text-shadow: 0 0 0
    }

    .cards--page-content-and-document-management .cards-name h4 {
        font-size: 25px;
        line-height: 30px
    }

    .cards--page-content-and-document-management .cards-item .cards-icon svg {
        height: 64px
    }

    .cards--page-content-and-document-management-1 {
        padding-bottom: 76px
    }

    .cards--page-requirements-engineering {
        padding-bottom: 84px
    }

    .cards--page-requirements-engineering .cards-name h4 {
        font-size: 30px
    }

    @media (max-width:1029px) {
        .cards--page-requirements-engineering {
            padding-bottom: 50px
        }
    }

    @media (max-width:767px) {
        .cards--page-requirements-engineering .cards-name h4 {
            font-size: 26px;
            line-height: 30px
        }
    }

    .cards--page-requirements-engineering-1 {
        padding-bottom: 66px
    }

    .cards--page-requirements-engineering-1 .heading-description {
        margin-bottom: 100px!important
    }

    .cards--page-requirements-engineering-1 .cards-row {
        margin-top: 0!important
    }

    .cards--page-requirements-engineering-1 .cards-item {
        position: relative;
        margin-bottom: 0;
        text-align: left;
        overflow: hidden
    }

    .cards--page-requirements-engineering-1 .cards-wrapper {
        position: relative;
        max-width: 300px;
        padding-bottom: 58px
    }

    .cards--page-requirements-engineering-1 .cards-wrapper:after {
        content: '';
        position: absolute;
        display: block;
        width: 1px;
        height: 1000px;
        top: 33px;
        left: 2px;
        background-color: #dcdcdc
    }

    .cards--page-requirements-engineering-1 .cards-row+.cards-row .cards-wrapper:after {
        display: none
    }

    .cards--page-requirements-engineering-1 .cards-item--1 {
        padding-left: 6%
    }

    .cards--page-requirements-engineering-1 .cards-item--2 {
        padding-left: 18%
    }

    .cards--page-requirements-engineering-1 .cards-item--3 {
        padding-left: 31%
    }

    .cards--page-requirements-engineering-1 .cards-item--4 {
        padding-left: 13%
    }

    .cards--page-requirements-engineering-1 .cards-item--5 {
        padding-left: 25%
    }

    .cards--page-requirements-engineering-1 .cards-item--6 {
        padding-left: 38%
    }

    .cards--page-requirements-engineering-1 .cards-item--4 .cards-wrapper:after,
    .cards--page-requirements-engineering-1 .cards-item--5 .cards-wrapper:after,
    .cards--page-requirements-engineering-1 .cards-item--6 .cards-wrapper:after {
        bottom: 100%;
        top: auto;
        left: auto;
        right: 10px;
        margin-bottom: 9px
    }

    .cards--page-requirements-engineering-1 .cards-name h4 {
        position: static;
        font-weight: 500;
        font-size: 25px;
        line-height: 25px
    }

    .cards--page-requirements-engineering-1 .cards-row+.cards-row .cards-name,
    .cards--page-requirements-engineering-1 .cards-row+.cards-row .cards-wrapper {
        position: static
    }

    .cards--page-requirements-engineering-1 .cards-row+.cards-row .cards-name h4 {
        position: static;
        display: inline-block
    }

    .cards--page-requirements-engineering-1 .title--with-bullet h4:before {
        position: absolute;
        bottom: 0;
        margin-left: -7px;
        margin-right: 0;
        z-index: 2
    }

    .cards--page-requirements-engineering-1 .cards-row+.cards-row .title--with-bullet h4:before {
        margin-top: 0;
        bottom: auto;
        top: 0
    }

    .cards--page-requirements-engineering-1 .cards-row+.cards-row .cards-name h4:after {
        content: '';
        position: absolute;
        display: block;
        width: 1px;
        height: 1000px;
        bottom: 20px;
        right: -20px;
        background-color: #dcdcdc
    }

    .cards--page-requirements-engineering-1 .cards-text {
        padding-left: 10px
    }

    .cards--page-requirements-engineering-1 .cards-row {
        position: relative;
        padding-bottom: 17px;
        background-repeat: no-repeat;
        background-position: 50% 100%;
        background-image: url(/sites/all/themes/iflexion/images/cards-requirements-engineering-path.png);
        z-index: 1
    }

    .cards--page-requirements-engineering-1 .cards-row+.cards-row {
        margin-top: 0;
        top: -38px;
        background: 0 0;
        z-index: 2
    }

    .cards--page-requirements-engineering-1 .cards-row+.cards-row .cards-item {
        position: relative;
        padding-top: 76px
    }

    .cards--page-requirements-engineering-1 .cards-row+.cards-row .cards-wrapper {
        padding-bottom: 0
    }

    .cards--page-requirements-engineering-1 .cards-item--4 h4:before,
    .cards--page-requirements-engineering-1 .cards-item--5 h4:before,
    .cards--page-requirements-engineering-1 .cards-item--6 h4:before {
        position: absolute;
        bottom: 100%;
        margin-bottom: 56px;
        right: auto;
        margin-right: 0;
        z-index: 2
    }

    .cards--page-requirements-engineering-1 .cards-item--4 h4:before {
        left: 65%
    }

    .cards--page-requirements-engineering-1 .cards-item--5 h4:before {
        left: 78%
    }

    .cards--page-requirements-engineering-1 .cards-item--6 h4:before {
        left: 92%
    }

    .cards--page-requirements-engineering-1 .cards-item--4 h4:after,
    .cards--page-requirements-engineering-1 .cards-item--5 h4:after,
    .cards--page-requirements-engineering-1 .cards-item--6 h4:after {
        position: absolute;
        height: 60px!important;
        top: 0;
        bottom: auto;
        right: auto;
        z-index: 1
    }

    .cards--page-requirements-engineering-1 .cards-item--4 h4:after {
        left: 65%;
        margin-left: 3px
    }

    .cards--page-requirements-engineering-1 .cards-item--5 h4:after {
        left: 78%;
        margin-left: 3px
    }

    .cards--page-requirements-engineering-1 .cards-item--6 h4:after {
        left: 92%;
        margin-left: 3px
    }

    .cards--page-requirements-engineering-1 .cards-item ul li {
        margin-bottom: 11px;
        font-size: 15px;
        line-height: 25px
    }

    @media (max-width:1030px) {
        .cards--page-requirements-engineering-1 {
            padding-bottom: 0
        }
        .cards--page-requirements-engineering-1 .cards-row {
            background: 0 0
        }
        .cards--page-requirements-engineering-1 .cards-item .cards-wrapper:after,
        .cards--page-requirements-engineering-1 .cards-item h4:before,
        .cards--page-requirements-engineering-1 .cards-row+.cards-row .cards-name h4:after {
            display: none
        }
        .cards--page-requirements-engineering-1 .cards-row+.cards-row .cards-item {
            padding-top: 0;
            padding-bottom: 90px
        }
    }

    @media (max-width:1029px) {
        .cards--page-requirements-engineering-1,
        .cards--page-requirements-engineering-1 .cards-row+.cards-row .cards-wrapper,
        .cards--page-requirements-engineering-1 .cards-wrapper {
            padding-bottom: 50px
        }
        .cards--page-requirements-engineering-1 .cards-row .cards-item {
            height: auto!important
        }
        .cards--page-requirements-engineering-1 .cards-item ul li:last-child {
            margin-bottom: 0
        }
        .cards--page-requirements-engineering-1 .cards-row+.cards-row .cards-item {
            padding-top: 0;
            padding-bottom: 0
        }
        .cards--page-requirements-engineering-1 .cards-row {
            padding-bottom: 0
        }
        .cards--page-requirements-engineering-1 .cards-row+.cards-row {
            top: auto
        }
    }

    .cards--page-bigdata {
        padding-top: 55px
    }

    @media (max-width:767px) {
        .cards--page-requirements-engineering-1,
        .cards--page-requirements-engineering-1 .cards-row+.cards-row .cards-wrapper,
        .cards--page-requirements-engineering-1 .cards-wrapper {
            padding-bottom: 30px
        }
        .cards--page-requirements-engineering-1 .col-lg-4 {
            width: 100%!important
        }
        .cards--page-bigdata {
            padding-top: 0
        }
    }

    .cards--page-bigdata .heading-description {
        max-width: 982px;
        margin-left: auto;
        margin-right: auto
    }

    .cards--page-bigdata .heading-description p {
        font-size: 25px;
        line-height: 40px
    }

    .cards--page-bigdata .heading~.cards-row,
    .cards--page-bigdata .heading~.row {
        margin-top: 60px
    }

    .cards--page-bigdata .cards-name h4 {
        margin-bottom: 23px
    }

    .cards--page-bigdata .row+.row {
        margin-top: 0
    }

    .cards--page-bigdata .cards-item {
        margin-bottom: 26px!important
    }

    .cards--page-omnichannel-ecommerce {
        padding-top: 109px;
        padding-bottom: 83px
    }

    .cards--page-omnichannel-ecommerce .heading-description {
        margin-bottom: 92px
    }

    .cards--page-omnichannel-ecommerce .heading-description p {
        font-size: 17px;
        line-height: 28px
    }

    .cards--page-omnichannel-ecommerce .heading~.cards-row,
    .cards--page-omnichannel-ecommerce .heading~.row {
        margin-top: 90px
    }

    .cards--page-omnichannel-ecommerce .cards-name h4 {
        font-weight: 400;
        font-size: 25px;
        line-height: 28px
    }

    .cards--page-omnichannel-ecommerce .cards-wrapper {
        padding-bottom: 32px!important
    }

    .cards--page-omnichannel-ecommerce-1 {
        padding-top: 100px;
        padding-bottom: 62px
    }

    .cards--page-omnichannel-ecommerce-1 .heading-title h3 {
        font-size: 52px;
        line-height: 60px
    }

    @media (max-width:767px) {
        .cards--page-omnichannel-ecommerce-1 .heading-title h3 {
            font-size: 32px;
            line-height: 39px
        }
    }

    .cards--page-omnichannel-ecommerce-1 .heading-description {
        max-width: 980px;
        margin-top: 26px;
        margin-left: auto;
        margin-right: auto
    }

    .cards--page-omnichannel-ecommerce-1 .heading-description p {
        font-size: 19px;
        line-height: 30px
    }

    .cards--page-omnichannel-ecommerce-1 .heading~.container-fluid .cards-row {
        margin-top: 55px
    }

    .cards--page-omnichannel-ecommerce-1 .cards-item {
        margin-bottom: 79px
    }

    .cards--page-omnichannel-ecommerce-1 .cards-name h4 {
        font-size: 30px
    }

    .cards--page-omnichannel-ecommerce-1 .cards-text p {
        line-height: 25px
    }

    @media (max-width:1029px) {
        .cards--page-omnichannel-ecommerce,
        .cards--page-omnichannel-ecommerce-1 {
            padding-top: 100px;
            padding-bottom: 50px
        }
    }

    @media (max-width:767px) {
        .cards--page-omnichannel-ecommerce,
        .cards--page-omnichannel-ecommerce-1 {
            padding-top: 50px;
            padding-bottom: 50px
        }
    }

    .cards--mobile-1 {
        padding-top: 140px;
        background-repeat: no-repeat, no-repeat, no-repeat, no-repeat, no-repeat;
        background-position: -15% 45%, 50% 0, 50% 50%, 100% 50%, 50% 50%;
        background-size: auto, auto, auto, auto, cover;
        background-image: url(/sites/all/themes/iflexion/images/bg-cards-tablet.png), url(/sites/all/themes/iflexion/images/cards-bg-tree.png), url(/sites/all/themes/iflexion/images/cards-bg-ipad.png), url(/sites/all/themes/iflexion/images/bg-cards-phones.png), url(/sites/all/themes/iflexion/images/bg-cards-mobile-1.jpg)
    }

    .cards--mobile-1 .cards-row {
        padding-bottom: 50px
    }

    .cards--mobile-1 .cards-name h4 {
        position: relative;
        margin-bottom: 70px;
        font-size: 52px;
        line-height: 55px
    }

    .cards--mobile-1 .cards-name h4:after {
        content: '';
        position: absolute;
        display: block;
        width: 100%;
        height: 2px;
        left: 0;
        bottom: -34px;
        background-color: #000
    }

    .cards--mobile-1 .cards-item-1 .cards-name h4:after {
        background-color: #51c336
    }

    .cards--mobile-1 .cards-item-2 .cards-name h4:after {
        background-color: #0cf
    }

    .cards--mobile-1 .cards-text p {
        font-size: 19px;
        line-height: 35px
    }

    .cards--mobile-1 .iconSlider {
        padding-top: 35px;
        padding-bottom: 66px;
        border-top: 1px solid #dfdedb;
        background-color: transparent
    }

    @media (max-width:1700px) {
        .cards--mobile-1 {
            background-position: -25% 45%, 50% 0, 50% 50%, 100% 50%, 50% 50%
        }
    }

    @media (max-width:1500px) {
        .cards--mobile-1 {
            background-position: -9999px 45%, 50% 0, 50% 50%, -9999px 50%, 50% 50%
        }
    }

    @media (max-width:1200px) {
        .cards--page-requirements-engineering-1 .cards-item--1,
        .cards--page-requirements-engineering-1 .cards-item--2,
        .cards--page-requirements-engineering-1 .cards-item--3,
        .cards--page-requirements-engineering-1 .cards-item--4,
        .cards--page-requirements-engineering-1 .cards-item--5,
        .cards--page-requirements-engineering-1 .cards-item--6 {
            padding-left: 10px
        }
        .cards--mobile-1 {
            background-position: -9999px 45%, -9999px 0, -9999px 50%, -9999px 50%, 50% 50%
        }
    }

    @media (max-width:1029px) {
        .cards--mobile-1 {
            padding-top: 100px;
            padding-bottom: 100px
        }
        .cards--mobile-1 .cards-item-1 {
            margin-bottom: 60px
        }
    }

    @media (max-width:767px) {
        .cards--mobile-1 {
            padding-top: 50px;
            padding-bottom: 50px
        }
        .cards--mobile-1 .cards-name h4 {
            font-size: 26px;
            line-height: 30px
        }
        .cards--mobile-1 .cards-text p {
            font-size: 16px;
            line-height: 25px
        }
    }

    .cards--mobile-2 {
        padding-top: 100px;
        padding-bottom: 150px;
        background-repeat: no-repeat;
        background-position: 50% 173%;
        background-image: url(/sites/all/themes/iflexion/images/cards-bg-chairs.jpg)
    }

    .cards--mobile-2 .cards-item {
        display: block;
        height: 350px;
        line-height: 350px;
        background: #f9f9f9;
        -webkit-box-shadow: 1px 1px 5px rgba(0, 0, 0, .2);
        box-shadow: 1px 1px 5px rgba(0, 0, 0, .2);
        text-align: center
    }

    .cards--mobile-2 .cards-item-link-image {
        display: block;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1;
        background-size: cover;
        background-position: 50% 50%;
        -moz-filter: url('data:image/svg+xml;utf8,<svg xmlns=\http://www.w3.org/2000/svg\><filter id=\grayscale\><feColorMatrix type=\matrix\ values=\0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\/></filter></svg>#grayscale');
        -o-filter: url('data:image/svg+xml;utf8,<svg xmlns=\http://www.w3.org/2000/svg\><filter id=\grayscale\><feColorMatrix type=\matrix\ values=\0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\/></filter></svg>#grayscale');
        -webkit-filter: grayscale(100%);
        filter: gray;
        filter: url('data:image/svg+xml;utf8,<svg xmlns=\http://www.w3.org/2000/svg\><filter id=\grayscale\><feColorMatrix type=\matrix\ values=\0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\/></filter></svg>#grayscale')
    }

    .cards--mobile-2 .cards-item:before {
        content: '';
        display: block;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        text-decoration: none;
        background: #f9f9f9;
        -webkit-transition: all .2s ease;
        transition: all .2s ease;
        opacity: 1;
        z-index: 2
    }

    .cards--mobile-2 .cards-item:hover:before {
        opacity: .8;
        background: #0cf
    }

    .cards--mobile-2 .cards-icon {
        position: relative;
        display: inline-block;
        vertical-align: middle;
        margin-bottom: 0;
        line-height: 140px;
        z-index: 10
    }

    .cards--mobile-2 .cards-icon svg {
        height: 140px;
        max-height: 140px
    }

    .cards--mobile-3 .cards-name h4 {
        font-size: 35px;
        text-transform: capitalize
    }

    @media (max-width:767px) {
        .cards--mobile-2 {
            padding-top: 50px;
            padding-bottom: 50px
        }
        .cards--mobile-2 .cards-item {
            height: 250px;
            line-height: 250px
        }
        .cards--mobile-3 .cards-name h4 {
            font-size: 26px;
            line-height: 30px
        }
    }

    .cards--qa {
        padding-top: 10px!important
    }

    .cards--qa .heading~.cards-row,
    .cards--qa .heading~.row {
        margin-top: 65px
    }

    @media (max-width:1029px) {
        .cards--mobile-2 {
            padding-bottom: 50px
        }
        .cards--qa {
            padding-top: 0!important
        }
    }

    .cards--page-main-1 {
        padding-bottom: 50px
    }

    .cards--page-main-1 .cards-item {
        display: block;
        background: #fcfcfc;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .15);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .15);
        text-align: center;
        overflow: hidden;
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }

    .cards--page-main-1 .cards-wrapper {
        padding: 76px 20px 80px
    }

    .cards--page-main-1 .cards-item-link-image {
        display: block;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1;
        background-size: cover;
        background-position: 50% 50%;
        -webkit-transition: all .6s ease;
        transition: all .6s ease
    }

    .cards--page-main-1 .cards-item:before {
        content: '';
        display: block;
        position: absolute;
        width: 100%;
        height: 100%;
        text-decoration: none;
        background: #fcfcfc;
        outline: #fcfcfc solid 1px;
        -webkit-transition: all .4s ease;
        transition: all .4s ease;
        opacity: 1;
        z-index: 2
    }

    .cards--page-main-1 .cards-item:hover:before {
        opacity: .9;
        background: #0cf;
        outline: #0cf solid 1px
    }

    .cards--page-main-1 .cards-icon {
        line-height: 60px
    }

    .cards--page-main-1 .cards-icon .icon,
    .cards--page-main-1 .cards-icon svg {
        height: 60px;
        max-height: 60px
    }

    .cards--page-main-1 .cards-icon,
    .cards--page-main-1 .cards-name,
    .cards--page-main-1 .cards-text {
        position: relative;
        color: #234;
        z-index: 5
    }

    .cards--page-main-1 .cards-name h4 {
        font-size: 30px;
        line-height: 40px
    }

    .cards--page-main-1 .cards-icon svg path,
    .cards--page-main-1 .cards-name,
    .cards--page-main-1 .cards-text {
        -webkit-transition: all .4s ease;
        transition: all .4s ease
    }

    .cards--page-main-1 .cards-item:hover .cards-name,
    .cards--page-main-1 .cards-item:hover .cards-text {
        color: #FFF
    }

    .cards--page-main-1 .cards-item:hover .cards-item-link-image {
        -webkit-transform: scale(1.1);
        -ms-transform: scale(1.1);
        transform: scale(1.1)
    }

    @media (max-width:1029px) {
        .cards--page-main-1 .cards-wrapper {
            padding-top: 38px;
            padding-bottom: 40px
        }
    }

    @media (max-width:767px) {
        .cards--page-main-1 {
            padding-bottom: 50px
        }
        .cards--page-main-1 .cards-item {
            margin-bottom: 10px
        }
    }

    .cards--page-main-2 {
        padding-bottom: 100px;
        overflow: hidden
    }

    .cards--page-main-2 .row {
        position: relative;
        margin-left: -20px;
        margin-right: -20px;
        margin-top: 74px;
        padding-top: 0!important;
        background-color: #f9f9f9;
        overflow: hidden
    }

    .cards--page-main-border .row {
        margin-left: -18px;
        margin-right: -18px
    }

    .cards--page-main-2 .row-background {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-repeat: no-repeat;
        background-position: 50% 50%;
        background-size: cover;
        opacity: 0;
        -webkit-transform: scale(1.2);
        -ms-transform: scale(1.2);
        transform: scale(1.2);
        -webkit-transition: opacity .8s ease, -webkit-transform 1s linear .8s;
        transition: opacity .8s ease, -webkit-transform 1s linear .8s;
        transition: opacity .8s ease, transform 1s linear .8s;
        transition: opacity .8s ease, transform 1s linear .8s, -webkit-transform 1s linear .8s
    }

    .cards--page-main-2 .row-background.active {
        -webkit-transition: opacity .8s ease, -webkit-transform 10s linear 0s;
        transition: opacity .8s ease, -webkit-transform 10s linear 0s;
        transition: opacity .8s ease, transform 10s linear 0s;
        transition: opacity .8s ease, transform 10s linear 0s, -webkit-transform 10s linear 0s;
        opacity: 1;
        -webkit-transform: scale(1) rotate(.02deg);
        -ms-transform: scale(1) rotate(.02deg);
        transform: scale(1) rotate(.02deg)
    }

    .cards--page-main-2 .column {
        position: relative;
        margin-left: -1px;
        margin-top: -1px;
        padding: 0;
        z-index: 3;
        background: 0 0
    }

    .cards--page-main-2 .cards-item {
        position: relative;
        display: block;
        margin-bottom: 0;
        text-align: center;
        background: 0 0;
        overflow: hidden;
        -webkit-transition: all .2s ease;
        transition: all .2s ease;
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }

    .cards--page-main-border .cards-item {
        border-top: 3px solid #FFF;
        border-bottom: 3px solid #FFF;
        border-left: 3px solid #FFF;
        border-right: 3px solid #FFF
    }

    .cards--page-main-2 .cards-item.inactive:before {
        opacity: 0
    }

    .cards--page-main-2 .cards-item.active:before {
        opacity: 1
    }

    .cards--page-main-2 .cards-wrapper {
        padding: 76px 20px 80px;
        width: 100%
    }

    .cards--page-main-2 .cards-item-link-image {
        display: block;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1;
        background-size: cover;
        background-position: 50% 50%;
        opacity: 1;
        -webkit-transition: all .8s ease;
        transition: all .8s ease
    }

    .cards--page-main-2 .cards-item.inactive .cards-item-link-image {
        opacity: 0
    }

    .cards--page-main-2 .cards-item.active .cards-item-link-image {
        opacity: 1;
        -webkit-transform: scale(1.1);
        -ms-transform: scale(1.1);
        transform: scale(1.1)
    }

    .cards--page-main-2 .cards-item:before {
        content: '';
        display: block;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        text-decoration: none;
        background: rgba(34, 51, 68, .25);
        -webkit-transition: all .4s ease;
        transition: all .4s ease;
        opacity: 1;
        z-index: 2
    }

    .cards--page-main-2 .cards-icon {
        line-height: 60px;
        opacity: 0;
        -webkit-transition: all .4s ease;
        transition: all .4s ease
    }

    .cards--page-main-2 .cards-text {
        width: 70%;
        margin-left: auto;
        margin-right: auto;
        opacity: 0
    }

    .cards--page-main-2 .cards-icon .icon,
    .cards--page-main-2 .cards-icon svg {
        height: 60px;
        max-height: 60px
    }

    .cards--page-xamarinCode svg,
    .cards--page-xamarinIntegration svg {
        max-height: 1000px
    }

    .cards--page-main-2 .cards-icon,
    .cards--page-main-2 .cards-name,
    .cards--page-main-2 .cards-text {
        position: relative;
        color: #234;
        z-index: 5
    }

    .cards--page-main-2 .cards-item:hover .cards-name,
    .cards--page-main-2 .cards-item:hover .cards-text,
    .cards--page-main-2 .cards-name,
    .cards--page-main-2 .cards-text {
        color: #FFF
    }

    .cards--page-main-2 .cards-name h4 {
        font-weight: 500;
        font-size: 30px;
        line-height: 40px;
        -webkit-transition: all .4s ease;
        transition: all .4s ease
    }

    .cards--page-main-2 .cards-icon svg path,
    .cards--page-main-2 .cards-name,
    .cards--page-main-2 .cards-text {
        -webkit-transition: all .4s ease;
        transition: all .4s ease
    }

    .cards--page-main-2 .cards-item.active .cards-icon,
    .cards--page-main-2 .cards-item.active .cards-text {
        opacity: 1
    }

    .cards--page-main-2 .cards-item.inactive .cards-name h4 {
        opacity: .4
    }

    .cards--page-main-2 .cards-item.active .cards-name h4 {
        opacity: 1
    }

    @media (max-width:1200px) {
        .cards--page-main-2 .cards-wrapper {
            padding-top: 30px;
            padding-bottom: 30px
        }
    }

    @media (min-width:1031px) {
        .cards--page-main-2 .column {
            -webkit-transform: translateZ(0);
            transform: translateZ(0)
        }
    }

    @media (max-width:1030px) {
        .cards--page-main-2 .row-background {
            display: none
        }
        .cards--page-main-2 .column {
            margin-bottom: -1px
        }
        .cards--page-main-2 .row:hover .cards-item-link-image {
            opacity: 1
        }
        .cards--page-main-2 .cards-item:hover .cards-item-link-image {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1)
        }
        .cards--page-main-2 .row-background.active {
            opacity: 0;
            -webkit-transform: scale(1.2);
            -ms-transform: scale(1.2);
            transform: scale(1.2)
        }
        .cards--page-main-2 .cards-icon,
        .cards--page-main-2 .cards-text {
            opacity: 1
        }
    }

    @media (max-width:767px) {
        .cards--page-main-2 {
            padding-bottom: 50px
        }
    }

    .cards--page-xamarin {
        background-image: none;
        padding-top: 65px;
        padding-bottom: 60px
    }

    .cards--page-xamarin .heading-description {
        margin-top: 0
    }

    .cards--page-xamarin .heading+.cards-row {
        margin-top: 56px
    }

    .cards--page-xamarin .cards-row {
        position: relative
    }

    .cards--page-xamarin .cards-row:after {
        content: 'vs.';
        position: absolute;
        top: 25px;
        left: 50%;
        color: #000;
        -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
        transform: translate(-50%, 0);
        font-weight: 300;
        font-size: 30px;
        line-height: 1em;
        color: rgba(34, 51, 68, .4)
    }

    .cards--portfolio .cards-item-link-image:after,
    .cards--with-dividers .cards-item:after,
    .cards2--mediadata .cards2-text ul li:after,
    .cards2-item:after,
    .cards5 .col-lg-3:after,
    .cards6-item:before,
    .cards6-text ul li:after,
    .cards8-name h4:after,
    .cards8-name h4:before,
    .cards8:after,
    .cards8:before,
    .scheme-title h3:after,
    .scheme1 ul li:after,
    .scheme1-title h3:after,
    .scheme1-title h3:before,
    .scheme3 .heading-title:before,
    .scheme3-list h3:after,
    .scheme3-list h3:before,
    .scheme4 .heading-title:before,
    .scheme4-list h3:before,
    .scheme4-list li:after,
    .scheme4-list li:before,
    .scheme5-title h3:after,
    .scheme7-text ul li:after {
        content: ''
    }

    .cards--page-xamarin .cards-item {
        margin-left: 40px;
        margin-right: 40px
    }

    .cards--page-xamarin .cards-item--1 {
        margin-left: 16px;
        position: relative
    }

    .cards--page-xamarin .cards-item--2 {
        margin-right: 16px
    }

    .cards--page-xamarin .cards-name {
        padding: 30px 50px 8px
    }

    .cards--page-xamarin .cards-item--1 .cards-name {
        background: #3498db
    }

    .cards--page-xamarin .cards-item--2 .cards-name {
        background: #77d065
    }

    .cards--page-xamarin .cards-text hr {
        margin: 30px 20px;
        border: none;
        height: 1px;
        background-color: #ebebeb
    }

    .cards--page-xamarin .cards-text ul li {
        margin-bottom: 10px
    }

    .cards--page-xamarin .lists--checkmarks--green ul li:before {
        background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMTVweCIgaGVpZ2h0PSIxMXB4IiB2aWV3Qm94PSIwIDAgMTUgMTEiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDE1IDExIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjNzdEMDY1IiBkPSJNNS42MDksMTAuOTg2TDUuNjA3LDEwLjk5TDAsNS41MTJsMS44NjktMS44MjdsMy43NDQsMy42Ng0KCUwxMy4xMjUsMEwxNSwxLjgzNUw1LjYyNCwxMUw1LjYwOSwxMC45ODZ6Ii8+DQo8L3N2Zz4NCg==)!important
    }

    .cards--page-xamarin .lists--checkmarks--blue ul li:before {
        background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMTVweCIgaGVpZ2h0PSIxMXB4IiB2aWV3Qm94PSIwIDAgMTUgMTEiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDE1IDExIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjMzQ5OERCIiBkPSJNNS42MDksMTAuOTg2TDUuNjA3LDEwLjk5TDAsNS41MTJsMS44NjktMS44MjdsMy43NDQsMy42Ng0KCUwxMy4xMjUsMEwxNSwxLjgzNUw1LjYyNCwxMUw1LjYwOSwxMC45ODZ6Ii8+DQo8L3N2Zz4NCg==)!important
    }

    .cards--page-xamarin .cards-text--bottom ul li {
        font-weight: 300
    }

    .cards--page-xamarin .cards-text--bottom h3 {
        margin: 0 20px 5px;
        text-transform: uppercase;
        font-size: 24px;
        font-weight: 400
    }

    .cards--page-xamarin .lists--checkmarks--green h3 {
        color: #77d065
    }

    .cards--page-xamarin .lists--checkmarks--blue h3 {
        color: #3498db
    }

    @media (max-width:1030px) {
        .cards--page-xamarin .cards-item {
            margin-left: 0;
            margin-right: 0
        }
        .cards--page-xamarin .cards-row:after {
            display: none
        }
    }

    @media (max-width:767px) {
        .cards--page-xamarin .cards-name {
            padding: 30px 30px 8px
        }
        .cards--page-xamarin .cards-text ul li {
            padding-left: 20px
        }
        .cards--page-xamarin ul li:before {
            left: 0
        }
        .cards--page-xamarin .cards-text hr {
            margin: 30px 0
        }
        .cards--page-xamarin .cards-text--bottom h3 {
            margin: 0 0 5px
        }
        .cards--page-xamarin .cards-text--top {
            height: auto!important
        }
    }

    .cards--page-xamarinNative {
        background-image: url(/sites/all/themes/iflexion/images/bg-xamarin-native.jpg);
        background-repeat: no-repeat;
        padding-top: 84px!important;
        padding-bottom: 71px;
        background-size: cover
    }

    .cards--page-xamarinNative .heading-title h3 {
        color: #fff;
        font-size: 45px
    }

    .cards--page-xamarinNative .heading-description {
        margin-top: 13px
    }

    .cards--page-xamarinNative .heading-description p {
        color: #fff;
        line-height: 40px
    }

    .cards--page-xamarinNative .cards-name h4 {
        margin-bottom: 10px
    }

    .cards--page-xamarinNative .cards-text p {
        color: #fff;
        max-width: 290px;
        line-height: 24px
    }

    @media (max-width:1030px) {
        .cards--page-xamarinNative .cards-text p {
            max-width: 100%
        }
        .cards--page-xamarinNative .cards-item {
            margin-bottom: 100px
        }
    }

    @media (max-width:767px) {
        .cards--page-xamarinNative .heading-title h3 {
            font-size: 32px;
            line-height: 39px
        }
        .cards--page-xamarinNative {
            padding-top: 50px!important;
            padding-bottom: 100px
        }
        .cards--page-xamarinNative .heading-description p {
            line-height: 35px
        }
        .cards--page-xamarinNative .cards-item {
            margin-bottom: 100px
        }
    }

    @media (max-width:419px) {
        .cards--page-xamarinNative .cards-item {
            margin-bottom: 50px
        }
        .cards--page-xamarinNative {
            padding-top: 50px!important;
            padding-bottom: 50px
        }
    }

    .cards--page-xamarinCode .cards-row {
        margin-top: 50px!important
    }

    .cards--page-xamarinCode img,
    .cards--page-xamarinCode svg {
        max-width: 1227px;
        display: block;
        margin: -35px auto 0
    }

    .cards--page-xamarinCode .cards-name h4 {
        font-size: 30px;
        line-height: 35px
    }

    @media (max-width:1030px) {
        .cards--page-xamarinCode img {
            margin: -35px 20px 0
        }
        .cards--page-xamarinCode svg {
            margin: -35px 0 0;
            padding: 0 20px
        }
    }

    .cards--page-xamarinLib {
        padding-top: 32px;
        padding-bottom: 85px
    }

    .cards--page-xamarinLib .heading-title h3 {
        text-transform: uppercase;
        font-size: 45px
    }

    .cards--page-xamarinLib .heading-description {
        margin-top: 14px
    }

    .cards--page-xamarinLib .heading-description p {
        line-height: 40px
    }

    @media (max-width:767px) {
        .cards--page-xamarinLib .heading-title h3 {
            font-size: 32px;
            line-height: 39px
        }
        .cards--page-xamarinLib {
            padding-bottom: 50px
        }
        .cards--page-xamarinLib .heading-description p {
            line-height: 35px
        }
    }

    .cards--page-xamarinIntegration .heading-description {
        margin-top: 22px
    }

    .cards--page-xamarinIntegration img,
    .cards--page-xamarinIntegration svg {
        max-width: 1377px;
        margin: -15px auto 0;
        display: block
    }

    @media (max-width:1030px) {
        .cards--page-xamarinIntegration img {
            margin: -15px 20px 0
        }
        .cards--page-xamarinIntegration svg {
            margin: -15px 0 0;
            padding: 0 20px
        }
    }

    .cards--portfolio {
        padding-bottom: 0
    }

    .cards--portfolio .heading-title {
        margin-bottom: 28px
    }

    .cards--portfolio .heading-description {
        max-width: 1060px;
        margin-bottom: 78px
    }

    .cards--portfolio .column {
        padding: 0
    }

    .cards--portfolio .cards-item {
        display: block;
        margin: 0;
        padding-top: 250px;
        padding-bottom: 82px;
        overflow: hidden;
        -webkit-transition: all .8s ease-in-out;
        transition: all .8s ease-in-out
    }

    .cards--portfolio .cards-item:hover {
        padding-top: 50px;
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .cards--portfolio .cards-wrapper {
        width: 100%
    }

    .cards--portfolio .cards-item-link-image {
        display: block;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1;
        background-size: cover;
        background-position: 50% 50%
    }

    .cards--portfolio .cards-item-link-image:after {
        position: absolute;
        display: block;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, .15);
        background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, .7) 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgba(0, 0, 0, 0)), to(rgba(0, 0, 0, .7)));
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, .7) 100%);
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .cards--portfolio .cards-icon,
    .cards--portfolio .cards-name,
    .cards--portfolio .cards-text {
        position: relative;
        z-index: 2;
        -webkit-transition: all .8s ease-in-out;
        transition: all .8s ease-in-out
    }

    .cards--portfolio .cards-text {
        -webkit-transition: opacity .4s ease-in-out, margin-top .8s ease-in-out;
        transition: opacity .4s ease-in-out, margin-top .8s ease-in-out;
        position: absolute;
        width: 100%;
        padding-left: 15px;
        padding-right: 15px;
        opacity: 0;
        padding-top: 250px
    }

    .cards--portfolio .cards-item:hover .cards-icon,
    .cards--portfolio .cards-item:hover .cards-name,
    .cards--portfolio .cards-item:hover .cards-text {
        -webkit-transition: all .5s ease;
        transition: all .5s ease
    }

    .cards--portfolio .cards-icon {
        position: absolute;
        width: 100%;
        height: 180px;
        margin-bottom: 0;
        top: 0;
        line-height: 180px
    }

    .cards--portfolio .cards-icon .icon,
    .cards--portfolio .cards-icon svg {
        width: 40%;
        height: auto
    }

    .cards--portfolio .cards-name {
        position: relative;
        padding-left: 10%;
        padding-right: 10%
    }

    .cards--portfolio .cards-name h4 {
        margin-bottom: 0;
        font-size: 25px;
        line-height: 30px;
        color: #FFF
    }

    .cards--portfolio .cards-text p {
        font-size: 15px;
        line-height: 28px;
        color: #FFF
    }

    .cards--portfolio .cards-item:hover .cards-icon {
        margin-top: -130px;
        opacity: 0
    }

    .cards--portfolio .cards-item:hover .cards-text {
        margin-top: -216px;
        opacity: 1
    }

    .cards--portfolio .tags {
        position: absolute;
        display: block;
        width: 100%;
        left: 0;
        bottom: 16px;
        z-index: 2
    }

    .cards--portfolio .tags-section {
        margin-right: 0
    }

    .cards--portfolio .tags-item {
        margin-left: 5px;
        margin-right: 5px;
        font-size: 15px;
        line-height: 25px;
        color: #000;
        background-color: #fdfdfc
    }

    @media (max-width:1440px) {
        .cards--portfolio .cards-name {
            padding-left: 15px;
            padding-right: 15px
        }
    }

    @media (min-width:1200px) {
        .cards--portfolio .cards-name h4 {
            height: auto!important
        }
    }

    @media (max-width:1199px) {
        .cards--portfolio .cards-item,
        .cards--portfolio .cards-item:hover {
            padding-top: 100px;
            padding-bottom: 10px
        }
        .cards--portfolio .cards-item .cards-icon,
        .cards--portfolio .cards-item:hover .cards-icon {
            height: 100px;
            line-height: 100px;
            margin-top: 0;
            opacity: 1
        }
        .cards--portfolio .cards-name h4 {
            margin-bottom: 40px
        }
        .cards--portfolio .cards-text {
            display: none;
            height: 0!important
        }
        .cards--portfolio .tags {
            position: relative;
            bottom: auto
        }
    }

    @media (max-width:1030px) {
        .cards--portfolio .column {
            margin-bottom: -1px
        }
    }

    @media only screen and (-webkit-min-device-pixel-ratio:2),
    only screen and (min--moz-device-pixel-ratio:2),
    only screen and (-o-min-device-pixel-ratio:2/1),
    only screen and (min-device-pixel-ratio:2) {
        .cards--page-quality-management-1 .cards-item {
            background-image: url(/sites/all/themes/iflexion/images/ico-cards--page-quality-management@2x.png);
            background-size: 82px 165px
        }
    }

    .cards--with-borders .cards-item {
        margin-bottom: 40px;
        border: 1px solid #ebebeb
    }

    .cards--with-borders .cards-wrapper {
        position: relative;
        text-align: left;
        padding: 24px 31px 28px
    }

    .cards1-item,
    .cards1-object,
    .cards2--media-content-distribution .cards2-text,
    .cards2-item {
        text-align: center
    }

    .cards--with-top-borders .cards-item,
    .cards-item.cards-item--with-top-border {
        border-top: 0
    }

    .cards .cards-item--with-top-border .cards-wrapper,
    .cards.cards--with-top-borders .cards-wrapper {
        border-top: 6px solid #ebebeb;
        margin: 0 -1px
    }

    .cards--with-borders ul li+li {
        margin-top: 10px
    }

    .cards--with-borders .cards-item.border-color--green .cards-wrapper {
        border-color: #51c435
    }

    .cards--with-borders .cards-item.border-color--light-green .cards-wrapper {
        border-color: #77d065
    }

    .cards--with-borders .cards-item.border-color--yellow .cards-wrapper {
        border-color: #f1c40f
    }

    .cards--with-borders .cards-item.border-color--red .cards-wrapper {
        border-color: #e74c3c
    }

    .cards--with-borders .cards-item.border-color--light-blue .cards-wrapper {
        border-color: #3498db
    }

    .cards--with-borders .cards-item.border-color--dark-blue .cards-wrapper {
        border-color: #255ccc
    }

    .cards--with-borders .cards-item.border-color--blue .cards-wrapper {
        border-color: #0cf
    }

    .cards--with-borders .cards-item.border-color--purple .cards-wrapper {
        border-color: #9b59b6
    }

    .cards--with-borders .cards-item.border-color--light-purple .cards-wrapper {
        border-color: #b455b6
    }

    .cards--with-borders .cards-item.border-color--orange .cards-wrapper {
        border-color: #ff6d3a
    }

    .cards--with-borders .cards-item.border-color--aqua .cards-wrapper {
        border-color: #00ddce
    }

    .cards--with-borders .cards-name h4 {
        margin-top: 0;
        margin-bottom: 22px
    }

    .cards--with-borders .cards-text p {
        line-height: 25px
    }

    @media (max-width:1500px) {
        .cards--with-borders .cards-name h4 {
            font-size: 26px;
            line-height: 32px
        }
    }

    .cards--with-top-borders .border-color--green .cards-wrapper,
    .cards--with-top-borders.border-color--green .cards-wrapper {
        border-color: #51c435
    }

    .cards--with-top-borders .border-color--yellow .cards-wrapper,
    .cards--with-top-borders.border-color--yellow .cards-wrapper {
        border-color: #f1c40f
    }

    .cards--with-top-borders .border-color--red .cards-wrapper,
    .cards--with-top-borders.border-color--red .cards-wrapper {
        border-color: #e74c3c
    }

    .cards--with-top-borders .border-color--light-blue .cards-wrapper,
    .cards--with-top-borders.border-color--light-blue .cards-wrapper {
        border-color: #3498db
    }

    .cards--with-top-borders .border-color--dark-blue .cards-wrapper,
    .cards--with-top-borders.border-color--dark-blue .cards-wrapper {
        border-color: #255ccc
    }

    .cards--with-top-borders .border-color--blue .cards-wrapper,
    .cards--with-top-borders.border-color--blue .cards-wrapper {
        border-color: #0cf
    }

    .cards--with-top-borders .border-color--purple .cards-wrapper,
    .cards--with-top-borders.border-color--purple .cards-wrapper {
        border-color: #9b59b6
    }

    .cards--with-top-borders .border-color--orange .cards-wrapper,
    .cards--with-top-borders.border-color--orange .cards-wrapper {
        border-color: #ff6d3a
    }

    .cards--with-top-borders .border-color--aqua .cards-wrapper,
    .cards--with-top-borders.border-color--aqua .cards-wrapper {
        border-color: #00ddce
    }

    .cards--with-dividers .cards-item:after,
    .cards2-item:after {
        border-left: 1px solid rgba(200, 200, 200, .5)
    }

    .cards--with-top-borders .heading-description {
        margin-bottom: 78px
    }

    .cards--with-capitalize-title .cards-name h4 {
        text-transform: capitalize
    }

    .cards.cards--with-crosssBorders {
        padding-bottom: 100px
    }

    .cards--with-crosssBorders .cards-row {
        position: relative;
        margin-top: 74px;
        padding-top: 0!important;
        background-repeat: repeat-x, repeat-y;
        background-position: 0 50%, 50% 0;
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA9JREFUeNpiePr0KUCAAQAFYgKwfgmnQwAAAABJRU5ErkJggg==), url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA9JREFUeNpiePr0KUCAAQAFYgKwfgmnQwAAAABJRU5ErkJggg==)
    }

    .cards--with-crosssBorders .cards-item--1,
    .cards--with-crosssBorders .cards-item--2 {
        margin-bottom: 142px
    }

    @media (max-width:1030px) {
        .cards--with-crosssBorders .cards-item--1,
        .cards--with-crosssBorders .cards-item--2 {
            margin: 0 auto 65px
        }
        .cards--with-crosssBorders .cards-row {
            background: 0 0
        }
        .cards--with-crosssBorders .cards-wrapper {
            height: auto!important
        }
    }

    .cards1,
    .cards1-item {
        background-color: #f5f6fa
    }

    .cards--mediadata,
    .cards4 {
        background-repeat: no-repeat;
        background-position: 50% 100%
    }

    @media (max-width:1029px) {
        .cards.cards--with-crosssBorders {
            padding-bottom: 50px
        }
        .cards--with-crosssBorders .cards-item {
            margin-bottom: 50px
        }
    }

    @media (max-width:767px) {
        .cards--portfolio .cards-name h4 {
            height: auto!important
        }
        .cards--with-crosssBorders .cards-item {
            margin-bottom: 30px
        }
    }

    .cards--with-dividers .cards-item {
        margin-bottom: 40px
    }

    .cards--with-dividers .cards-item:after {
        position: absolute;
        display: block;
        width: 1px;
        height: 70%;
        top: 15%;
        left: -15px
    }

    .cards1,
    .cards1-item,
    .cards2,
    .cards2-item {
        position: relative
    }

    .cards--with-dividers .cards-row>:first-child .cards-item:after {
        display: none
    }

    .cards--with-dividers.cards--accordion .cards-item:after {
        top: 0;
        left: 0;
        height: 100%
    }

    @media (max-width:1199px) {
        .cards--with-dividers .cards-item:after {
            display: none
        }
    }

    @media (max-width:1030px) {
        .cards--with-dividers .cards-item {
            height: auto!important
        }
    }

    .cards--with-normal-title .cards-name h4 {
        text-transform: none
    }

    .cards--mediadata {
        padding-bottom: 280px
    }

    .cards--mediadata .cards-name h4 {
        text-transform: none;
        line-height: 40px
    }

    .cards1-name h4,
    .cards2-name h4 {
        text-transform: uppercase;
        font-weight: 300
    }

    .cards1 {
        padding-top: 100px;
        padding-bottom: 0
    }

    .cards1 .heading-title {
        margin-bottom: 70px
    }

    .cards1-item {
        z-index: 1
    }

    .cards1-item--1,
    .cards1-item--3 {
        padding-top: 90px
    }

    .cards1-name h4 {
        margin-top: 0;
        margin-bottom: 10px
    }

    .cards1-item p {
        width: 86%;
        margin-top: 0;
        margin-left: auto;
        margin-right: auto;
        font-size: 17px;
        line-height: 30px
    }

    .cards1-item--1 .cards1-name {
        color: #06cdff
    }

    .cards1-item--2 .cards1-name {
        color: #65c94e
    }

    .cards1-item--3 .cards1-name {
        color: #255ccc
    }

    .cards1-object {
        margin-top: -108px;
        line-height: 0
    }

    .cards1-object img {
        max-width: 100%
    }

    @media (max-width:1440px) {
        .cards1-object {
            padding-left: 15px;
            padding-right: 15px
        }
    }

    @media (max-width:1029px) {
        .cards1-item {
            margin-bottom: 50px;
            padding-left: 15%;
            padding-right: 15%
        }
        .cards1-item--1,
        .cards1-item--3 {
            padding-top: 0
        }
        .cards1-object {
            margin-top: 0
        }
    }

    @media (max-width:767px) {
        .cards1 {
            padding-top: 50px
        }
        .cards1-item {
            margin-bottom: 30px;
            padding-left: 0;
            padding-right: 0
        }
    }

    .cards2 {
        padding-top: 100px;
        padding-bottom: 50px;
        background-color: #FFF
    }

    .cards2 .heading-title h3 {
        margin-bottom: 4px
    }

    .cards2 .heading-description p {
        font-size: 19px;
        line-height: 35px
    }

    .cards2-item {
        margin-bottom: 50px
    }

    .cards2-icon {
        margin-bottom: 25px;
        line-height: 130px
    }

    .cards2-icon .icon {
        height: 100px;
        vertical-align: middle
    }

    .cards2-item:after {
        position: absolute;
        display: none;
        width: 1px;
        height: 70%;
        top: 15%;
        left: -15px
    }

    .cards2 .col-lg-4+.col-lg-4 .cards2-item:after {
        display: block
    }

    .cards2-name h4 {
        margin-top: 0;
        margin-bottom: 34px;
        font-size: 38px;
        color: #232323
    }

    .cards2-text p {
        padding-left: 40px;
        padding-right: 40px;
        font-weight: 300;
        font-size: 17px;
        line-height: 30px;
        color: #232323;
        margin: 0 auto
    }

    .cards2 a {
        color: #51c336;
        text-decoration: none
    }

    @media (max-width:1029px) {
        .cards2-item:after {
            display: none!important
        }
        .cards2-item {
            margin-bottom: 50px
        }
    }

    @media (max-width:767px) {
        .cards2 {
            padding-top: 50px
        }
        .cards2 [class*=col]:last-child .cards2-item {
            margin-bottom: 0
        }
        .cards2-item {
            margin-bottom: 30px
        }
    }

    .cards2--media-content-distribution {
        padding-top: 64px
    }

    .cards2--media-content-distribution .heading-description {
        margin-bottom: 82px
    }

    .cards2--media-content-distribution .heading-description p {
        font-size: 25px;
        line-height: 40px
    }

    .cards2--media-content-distribution .cards2-text ul {
        display: inline-block;
        float: none!important;
        width: auto!important;
        margin: 0!important;
        left: auto!important
    }

    .cards2--mediadata {
        padding-bottom: 0
    }

    .cards2--mediadata .cards2-img {
        height: 150px
    }

    .cards2--mediadata .cards2-name h4 {
        text-transform: none;
        font-size: 35px;
        line-height: 41px
    }

    .cards3-name h4,
    .cards4-name h4,
    .cards5-name h4 {
        text-transform: uppercase
    }

    .cards2 .heading-description p {
        margin-bottom: 0
    }

    .cards2--mediadata .cards2-text ul {
        text-align: left;
        margin: 0 0 0 30%;
        width: 70%;
        padding: 0;
        list-style-type: none;
        position: relative;
        left: -15%;
        font-size: 17px
    }

    .cards3-item,
    .cards4-item,
    .cards5-item,
    .cards5-object,
    .cards7-img,
    .cards8-name h4,
    .cardsBg-item,
    .description,
    .fullCards1-btn,
    .fullCards1-item,
    .heading,
    .heading-description p,
    .heading-title h3,
    .scheme-object {
        text-align: center
    }

    .cards2--mediadata .cards2-text ul li {
        position: relative;
        padding-left: 17px;
        font-size: 17px;
        line-height: 25px
    }

    .cards2--mediadata .cards2-text ul li+li {
        margin-top: 15px
    }

    .cards3-name h4,
    .cards3-text p {
        margin-top: 0;
        font-weight: 300;
        color: #232323
    }

    .cards2--mediadata .cards2-text ul li:after {
        position: absolute;
        display: block;
        width: 4px;
        height: 4px;
        top: 10px;
        left: 2px;
        background-color: #51c336;
        border-radius: 50%
    }

    .cards3,
    .cards3-item,
    .cards4,
    .cards4-item {
        position: relative
    }

    @media (max-width:1200px) {
        .cards2--mediadata .cards2-text ul {
            width: 100%;
            left: 0;
            margin-left: 0
        }
    }

    .cards2--page-social-networking {
        padding-bottom: 77px
    }

    .cards2--page-social-networking .heading-title {
        margin-bottom: 32px
    }

    .cards2--page-social-networking .heading-title h3 {
        line-height: 55px
    }

    .cards2--page-social-networking .heading-description {
        max-width: 1323px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 70px
    }

    @media (max-width:1029px) {
        .cards2--mediadata .cards2-text {
            text-align: center
        }
        .cards2--mediadata .cards2-text ul {
            position: relative;
            display: inline-block;
            width: auto
        }
        .cards2--page-social-networking {
            padding-bottom: 50px
        }
    }

    .cards3 {
        padding-top: 95px;
        padding-bottom: 104px;
        background-color: #FFF
    }

    .cards3-name h4 {
        margin-bottom: 24px;
        font-size: 42px
    }

    .cards3-text p {
        margin-bottom: 0;
        font-size: 19px;
        line-height: 32px
    }

    .cards3-item--1 .cards3-name h4 {
        color: #51c336
    }

    .cards3-item--2 .cards3-name h4 {
        color: #0cf
    }

    .cards3 .tubes-container {
        top: 110px
    }

    @media (max-width:1029px) {
        .cards3 {
            padding-top: 100px;
            padding-bottom: 50px
        }
        .cards3-item {
            margin-bottom: 50px
        }
    }

    @media (max-width:767px) {
        .cards3 {
            padding-top: 50px;
            padding-bottom: 50px
        }
        .cards3 [class*=col]:last-child .cards3-item {
            margin-bottom: 0
        }
    }

    .cards4 {
        padding-top: 100px;
        padding-bottom: 100px;
        background-color: #0d96d5;
        background-image: url(/sites/all/themes/iflexion/images/mobility-bg.jpg)
    }

    .cards4 .heading-title h3 {
        margin-bottom: 134px;
        color: #FFF
    }

    .cards4-name h4,
    .cards4-text p {
        margin-top: 0;
        font-weight: 300;
        color: #232323
    }

    .cards4-item {
        background-color: #FFF;
        padding: 82px 48px 58px
    }

    .cards4-icon {
        position: absolute;
        width: 110px;
        height: 110px;
        top: -57px;
        left: 50%;
        margin-left: -55px;
        border: 5px solid #FFF;
        background-color: #FFF;
        border-radius: 50%;
        line-height: 100px
    }

    .cards5,
    .cards5 .col-lg-3,
    .cards5-item {
        position: relative
    }

    .cards4-icon .icon {
        max-width: 60%;
        height: 100px;
        vertical-align: middle
    }

    .cards4-item--1 .cards4-icon {
        background-color: #9d26d5
    }

    .cards4-item--2 .cards4-icon {
        background-color: #255ccc
    }

    .cards4-item--3 .cards4-icon {
        background-color: #ff9700
    }

    .cards5,
    .cards6,
    .cards6-item {
        background-color: #FFF
    }

    .cards4-name h4 {
        margin-bottom: 18px;
        font-size: 30px;
        line-height: 40px
    }

    .cards4-text p,
    .cards5-text p {
        font-size: 17px
    }

    .cards4-text p {
        margin-bottom: 0;
        line-height: 30px
    }

    @media (max-width:1029px) {
        .cards4 {
            background-size: cover
        }
        .cards4 .col-lg-4+.col-lg-4 {
            margin-top: 100px
        }
        .cards4-item {
            height: auto!important
        }
    }

    @media (max-width:767px) {
        .cards4 {
            padding-top: 50px;
            padding-bottom: 50px
        }
    }

    .cards5 {
        padding-top: 100px;
        padding-bottom: 100px
    }

    .cards5 .heading-title h3 {
        margin-bottom: 86px
    }

    .cards5-row+.cards5-row {
        margin-top: 65px
    }

    .cards5-name h4,
    .cards5-text p {
        margin-top: 0;
        color: #232323;
        font-weight: 300
    }

    .cards5-item {
        padding-left: 25px;
        padding-right: 25px
    }

    .cards5-icon {
        line-height: 130px;
        margin-bottom: 15px
    }

    .cards5-icon .icon {
        height: 100px;
        vertical-align: middle
    }

    .cards5 .col-lg-3:after {
        position: absolute;
        display: none;
        width: 1px;
        height: 70%;
        top: 15%;
        left: -15px;
        border-left: 1px solid rgba(200, 200, 200, .5)
    }

    .col-lg-3+.col-lg-3:after {
        display: block
    }

    .cards5-name h4 {
        margin-bottom: 22px
    }

    .cards5-text p {
        margin-bottom: 0;
        line-height: 25px
    }

    .cards5-object {
        line-height: 0
    }

    @media (max-width:1030px) {
        .cards5-row+.cards5-row {
            margin-top: 0
        }
        .cards5-item {
            width: 70%;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 50px
        }
    }

    @media (max-width:1029px) {
        .cards5 {
            padding-top: 100px;
            padding-bottom: 50px
        }
    }

    @media (max-width:767px) {
        .cards5 {
            padding-top: 50px;
            padding-bottom: 50px
        }
        .cards5-item {
            width: 100%;
            height: auto!important;
            margin-bottom: 30px;
            padding-left: 0;
            padding-right: 0
        }
        .cards5 [class*=col]:last-child .cards5-item {
            margin-bottom: 0
        }
        .cards5-name h4 {
            font-size: 26px;
            line-height: 30px
        }
        .cards5-text p {
            font-size: 16px;
            line-height: 25px
        }
    }

    .cards6 {
        position: relative;
        padding-top: 66px;
        padding-bottom: 155px
    }

    .cards6 .heading-title {
        max-width: 1081px;
        margin-left: auto;
        margin-right: auto
    }

    .cards6 .heading-title h3 {
        margin-bottom: 40px
    }

    .cards6 .heading-description p {
        margin-bottom: 60px;
        font-size: 25px;
        line-height: 40px
    }

    .cards6-row+.cards6-row {
        margin-top: 40px
    }

    .cards6-item {
        position: relative;
        border: 1px solid #ebebeb
    }

    .cards6-item:before {
        position: relative;
        display: block;
        height: 6px;
        margin-top: -1px;
        margin-left: -1px;
        margin-right: -1px;
        background-color: #51c435
    }

    .cards6-wrapper {
        padding: 36px 40px 14px
    }

    .cards6-name h4 {
        margin-top: 0;
        margin-bottom: 24px;
        font-weight: 300;
        color: #232323;
        text-transform: capitalize
    }

    .cards6-text ul {
        margin: 0;
        padding: 0
    }

    .cards6-text ul li {
        position: relative;
        padding-left: 17px;
        font-size: 17px;
        line-height: 25px
    }

    .cards6-text ul li+li {
        margin-top: 15px
    }

    .cards6-text ul li:after {
        position: absolute;
        display: block;
        width: 4px;
        height: 4px;
        top: 10px;
        left: 2px;
        background-color: #51c336;
        border-radius: 50%
    }

    @media (max-width:1029px) {
        .cards6 {
            background-size: cover;
            padding-bottom: 54px
        }
        .cards6-item {
            width: 100%;
            height: auto!important;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 50px
        }
        .cards6-row+.cards6-row {
            margin-top: 0
        }
    }

    @media (max-width:767px) {
        .cards6 {
            padding-top: 50px;
            padding-bottom: 50px
        }
        .cards6-row+.cards6-row {
            margin-top: 30px
        }
        .cards6-item {
            width: 100%;
            margin-bottom: 30px
        }
        .cards6 [class*=col]:last-child .cards6-item {
            margin-bottom: 0
        }
    }

    .cards8 {
        position: relative;
        padding-top: 120px;
        padding-bottom: 100px;
        background: #e9e9e9;
        background: -webkit-linear-gradient(top, #e9e9e9 0, #fff 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #e9e9e9), to(#fff));
        background: linear-gradient(to bottom, #e9e9e9 0, #fff 100%);
        filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#e9e9e9', endColorstr='#ffffff', GradientType=0)
    }

    .cards8:after,
    .cards8:before {
        position: absolute;
        width: 100%;
        top: 0;
        left: 0
    }

    .cards8:before {
        height: 100%;
        background-repeat: no-repeat;
        background-position: 50% 0;
        background-image: url(/sites/all/themes/iflexion/images/cards8-bg.png)
    }

    .cards8:after {
        height: 8px;
        background-repeat: repeat-x;
        background-position: 0 0;
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAICAIAAABRUclSAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAADNJREFUeNpi/PPnDwMMsLx49RLBYWJiQnD4+PgRnP///iE4H96/R3DeI3M+fPgA5wAEGACSORFkBdhn9gAAAABJRU5ErkJggg==)
    }

    .cards9,
    .cards9-row:before,
    .cardsBg {
        background-repeat: no-repeat
    }

    .cards8 .heading-title h3 {
        margin-bottom: 26px;
        line-height: 55px
    }

    .cards8 .heading-description {
        max-width: 1222px;
        margin-left: auto;
        margin-right: auto
    }

    .cards8 .heading-description p {
        margin-bottom: 456px;
        font-weight: 300;
        font-size: 19px;
        line-height: 35px
    }

    .cards8-name h4 {
        position: relative;
        height: 70px;
        margin-top: 0;
        margin-bottom: 30px;
        padding-top: 16px;
        padding-bottom: 19px;
        font-weight: 300;
        color: #FFF;
        background-color: #51c336
    }

    .cards8-name h4:after,
    .cards8-name h4:before {
        position: absolute;
        width: 30px;
        height: 70px;
        top: 0;
        background-position: 0 0;
        background-repeat: no-repeat
    }

    .cards7,
    .cards9,
    .cards9-item {
        background-color: #FFF
    }

    .cards8-name h4:after {
        display: block;
        left: -30px;
        background-image: url(/sites/all/themes/iflexion/images/cards8-first.png)
    }

    .cards8-name h4:before {
        display: none;
        right: -30px;
        background-image: url(/sites/all/themes/iflexion/images/cards8-last.png)
    }

    .col-lg-3+.col-lg-3 .cards8-name h4:after {
        background-image: url(/sites/all/themes/iflexion/images/cards8-middle.png)
    }

    .col-lg-3:last-child .cards8-name h4:before {
        display: block
    }

    .cards8-text {
        padding-left: 20px;
        padding-right: 20px
    }

    .cards8-text p {
        font-size: 17px;
        line-height: 30px
    }

    .cards8 a {
        color: #51c336;
        text-decoration: none
    }

    @media (max-width:1200px) {
        .cards8-name h4 {
            font-size: 28px
        }
    }

    @media (max-width:1030px) {
        .cards8-name h4:after,
        .cards8:before {
            display: none
        }
        .cards8 {
            padding-bottom: 40px
        }
        .cards8 .heading-description p {
            margin-bottom: 40px
        }
        .cards8-name h4:before {
            display: none!important
        }
        .cards8-item {
            margin-bottom: 80px
        }
    }

    @media (max-width:767px) {
        .cards8 {
            padding-top: 50px;
            padding-bottom: 50px
        }
        .cards8 [class*=col]:last-child .cards8-item {
            margin-bottom: 0
        }
    }

    .cards7 {
        position: relative;
        padding-top: 125px;
        padding-bottom: 145px
    }

    .cards7 .heading-title h3 {
        margin-bottom: 82px;
        font-size: 54px;
        line-height: 60px
    }

    .cards7-row+.cards7-row {
        margin-top: 68px
    }

    .cards7-name h4,
    .cards7-text p {
        margin-top: 0;
        font-weight: 300;
        color: #232323
    }

    .cards7-item {
        position: relative;
        padding-left: 130px;
        padding-right: 40px
    }

    .cards7-name h4 {
        margin-bottom: 14px
    }

    .cards7-text p {
        margin-bottom: 0;
        font-size: 17px;
        line-height: 25px
    }

    .cards9 a,
    .cards9-item--1 .cards9-name h4 {
        color: #51c336
    }

    .cards7-img {
        position: absolute;
        width: 130px;
        top: 9px;
        left: -14px
    }

    .cards9,
    .cards9-row,
    .cardsBg {
        position: relative
    }

    @media (max-width:1030px) {
        .cards7-row+.cards7-row {
            margin-top: 0
        }
        .cards7-item {
            margin-bottom: 50px
        }
    }

    @media (max-width:767px) {
        .cards7 {
            padding-top: 50px;
            padding-bottom: 50px
        }
        .cards7-row+.cards7-row {
            margin-top: 30px
        }
        .cards7 .heading-title h3 {
            font-size: 32px;
            line-height: 39px
        }
        .cards7-item {
            margin-bottom: 30px;
            padding-left: 0;
            padding-right: 0;
            text-align: center
        }
        .cards7 [class*=col]:last-child .cards7-item {
            margin-bottom: 0
        }
        .cards7-img {
            position: relative;
            width: 100%;
            left: auto;
            top: auto;
            text-align: center
        }
    }

    .cards9-name h4,
    .cardsBg-name h4 {
        margin-top: 0;
        font-weight: 300;
        text-transform: uppercase
    }

    .cards9 {
        padding-top: 48px;
        padding-bottom: 88px;
        background-position: 100% 100%;
        background-image: url(/sites/all/themes/iflexion/images/cards9-bg.png)
    }

    .cards9 .heading-title {
        max-width: 836px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 37px
    }

    .cards9 .heading-title h3 {
        line-height: 55px
    }

    .cards9 .heading-description p {
        margin-bottom: 225px;
        font-weight: 300;
        font-size: 19px;
        line-height: 35px
    }

    .cards9-row:before {
        content: '';
        position: absolute;
        display: block;
        width: 100%;
        height: 165px;
        top: -127px;
        left: 0;
        background-position: 50% 50%;
        background-image: url(/sites/all/themes/iflexion/images/cards9-roof.png);
        z-index: 2;
        background-size: 100%
    }

    .cardsBg-item,
    .heading,
    .scheme,
    .scheme-title h3 {
        position: relative
    }

    .cards9 a {
        text-decoration: none
    }

    .cards9-item {
        margin-bottom: 40px;
        border: 1px solid #e6e6e6;
        -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .2);
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .2);
        padding: 50px 76px 30px
    }

    .cards9-name h4 {
        margin-bottom: 22px;
        font-size: 38px;
        color: #51c336
    }

    .cards9-item--2 .cards9-name h4 {
        color: #0cf
    }

    .cards9-text p {
        font-size: 17px;
        line-height: 30px
    }

    @media (max-width:767px) {
        .cards9 {
            padding-top: 50px;
            padding-bottom: 50px
        }
        .cards9 .heading-description p {
            margin-bottom: 140px
        }
        .cards9-item {
            height: auto!important;
            padding: 30px 15px
        }
        .cards9 [class*=col]:last-child .cards9-item {
            margin-bottom: 0
        }
    }

    .cardsBg {
        padding-top: 105px;
        padding-bottom: 388px;
        background-color: #f7f7f7;
        background-position: 50% 100%;
        background-image: url(/sites/all/themes/iflexion/images/cardsBg-bg.png)
    }

    .description,
    .fullCards1 {
        background-color: #FFF;
        position: relative
    }

    .cardsBg .heading-title {
        margin-bottom: 26px
    }

    .cardsBg .heading-description p {
        margin-bottom: 154px;
        font-size: 25px;
        line-height: 40px
    }

    .cardsBg-container {
        max-width: 1920px
    }

    .cardsBg-name h4 {
        margin-bottom: 28px;
        color: #232323
    }

    .cardsBg-text p {
        max-width: 436px;
        font-weight: 300;
        font-size: 17px;
        line-height: 30px;
        color: #232323;
        margin: 0 auto
    }

    @media (max-width:1500px) {
        .cardsBg {
            padding-bottom: 20%;
            background-size: 98%
        }
    }

    @media (max-width:1030px) {
        .cardsBg {
            padding-bottom: 34%
        }
        .cardsBg .heading-description p {
            margin-bottom: 80px
        }
        .cardsBg-item {
            margin-bottom: 40px
        }
    }

    @media (max-width:767px) {
        .cardsBg {
            padding-top: 50px
        }
    }

    .description {
        padding-top: 100px;
        padding-bottom: 100px;
        font-size: 19px;
        line-height: 35px
    }

    .description--big {
        font-size: 25px;
        line-height: 40px
    }

    .description p:last-child {
        margin-bottom: 0
    }

    @media (max-width:767px) {
        .description {
            padding-top: 50px;
            padding-bottom: 50px
        }
    }

    .description--page-engagement-models {
        padding-bottom: 50px
    }

    .fullCards1 {
        padding-bottom: 0
    }

    .fullCards1 .heading-title h3 {
        margin-bottom: 74px
    }

    .fullCards1-item {
        padding-top: 85px;
        padding-bottom: 60px;
        background-color: #5c5c5c
    }

    .fullCards1-icon {
        height: 170px;
        margin-bottom: 30px
    }

    .fullCards1-name h4 {
        margin-top: 0;
        margin-bottom: 30px;
        font-weight: 400;
        font-size: 25px;
        line-height: 30px;
        color: #FFF
    }

    .fullCards1-btn {
        display: inline-block;
        vertical-align: top;
        font-family: 'Exo 2', Arial, Helvetica, sans-serif;
        font-weight: 500;
        font-size: 16px;
        line-height: 16px;
        color: #FFF;
        text-decoration: none;
        text-transform: uppercase;
        border: 2px solid #FFF;
        border-radius: 3px;
        padding: 13px 37px
    }

    .fullCards1-item:hover {
        opacity: .8
    }

    .fullCards1-btn:hover {
        background: #fff
    }

    .scheme,
    .scheme-container {
        background-position: 50% 50%
    }

    .scheme,
    .scheme-container,
    .scheme-title h3:after {
        background-repeat: no-repeat
    }

    .fullCards1-item--1 {
        background-color: #5c5c5c
    }

    .fullCards1-item--1 .fullCards1-btn:hover {
        color: #5c5c5c
    }

    .fullCards1-item--2 {
        background-color: #97d02d
    }

    .fullCards1-item--2 .fullCards1-btn:hover {
        color: #97d02d
    }

    .fullCards1-item--3 {
        background-color: #26c7f7
    }

    .fullCards1-item--3 .fullCards1-btn:hover {
        color: #26c7f7
    }

    .fullCards1-item--4 {
        background-color: #f45b52
    }

    .fullCards1-item--4 .fullCards1-btn:hover {
        color: #f45b52
    }

    .heading-title {
        margin-bottom: 50px
    }

    .heading-title h3 {
        margin: 0;
        font-weight: 300;
        font-family: Avenir, Arial, Helvetica, sans-serif;
        font-size: 52px;
        line-height: 70px
    }

    .heading-description p,
    .scheme-title h3,
    .scheme1-title h3,
    .scheme3-list h3,
    .scheme4-list h3,
    .scheme5-title h3 {
        font-family: Ubuntu, Arial, Helvetica, sans-serif
    }

    .heading-title h3 span {
        text-transform: lowercase
    }

    .heading-color {
        font-style: normal
    }

    .heading-color--green {
        color: #51c435
    }

    .heading:last-child>:last-child {
        margin-bottom: 0
    }

    .heading-description {
        margin-bottom: 50px
    }

    .heading-description p {
        margin: 0;
        font-weight: 300;
        line-height: 35px
    }

    .heading--big .heading-description {
        font-size: 1.3em
    }

    .heading>.heading-description,
    .heading>.heading-title {
        left: auto;
        right: auto;
        width: 83.33333333%;
        margin-left: auto;
        margin-right: auto
    }

    .heading-break {
        display: block
    }

    @media (max-width:767px) {
        .heading-title {
            margin-bottom: 40px
        }
        .heading-title h3 {
            font-size: 32px;
            line-height: 39px
        }
        .heading>.heading-description,
        .heading>.heading-title {
            width: 100%
        }
    }

    .scheme {
        padding-top: 106px;
        padding-bottom: 100px;
        background-color: #03040a;
        background-image: url(/sites/all/themes/iflexion/images/scheme1.jpg);
        background-size: cover
    }

    .scheme .heading {
        color: #FFF
    }

    .scheme .heading-description p {
        margin-bottom: 60px;
        font-size: 19px;
        line-height: 35px
    }

    .scheme .heading-title {
        margin-bottom: 0
    }

    .scheme .heading-description {
        margin-top: 32px;
        margin-bottom: 0!important
    }

    .scheme-container {
        max-width: 1800px;
        background-image: url(/sites/all/themes/iflexion/images/sheme-object-lg.png)
    }

    .scheme-content {
        padding-top: 94px
    }

    .scheme-object {
        line-height: 0
    }

    .scheme-object img {
        max-width: 100%
    }

    .scheme-item+.scheme-item {
        padding-top: 98px
    }

    .scheme-item--left {
        padding-left: 18px;
        text-align: left
    }

    .scheme-item--right {
        padding-right: 10px;
        text-align: right
    }

    .scheme-title h3 {
        margin-top: 0;
        margin-bottom: 15px;
        font-weight: 300;
        font-size: 35px;
        line-height: 45px;
        color: #FFF;
        text-transform: capitalize
    }

    .scheme-title h3:after {
        position: absolute;
        display: block;
        width: 44px;
        height: 44px;
        top: 3px;
        border-radius: 50%;
        background-position: 0 0;
        z-index: 1
    }

    .scheme-item--1 .scheme-title h3:after {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAYAAAAehFoBAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABUpJREFUeNrUWU1PXUUYPkwLhI8Wer1c+bLUasXqQrBU3aoLrbJySRfuNHHR+Fe6aeLChQvpyh0muLAujQloa4zYElu4Fihwe+EKlABCfeb4DHkznJk5B+4l8U2e5Nxz5+M577zzfszURRNPoyPICaANaAeaiXq+17IL7ABPiFWgwvexPL2UbcKThySaAzqBPKA87RQ/oJm/zwJ7QAl4BJSzTlyXUcMdQB/QKt6VqbUNYBPYFhrUmm4AmoAWrkZO9F0HZqDlUrUJ6wlfAs7wd4VEtZa2MiqpkauT4wdoWQHugfhmNQgXSPYkNTgHPIyqI88B3VTIPyS9dBTCz9MEtCwCd2mD1RRt5/3As/w9C9IPfI1dckGQnQamakBWe4k9YIpzaOmrm4xXNBPh80APn2/TDGoqID3HufSSd4P0+bSEC3Q/Wn6h7zwWAelVko5dIEgXQn7YeANjBpWUcz0DvAy8QNdn/K4OFsvAn8AfwOMUpCsgOk2T7MfzmvQe9qZ7ja5rkTYbknPA28LWQzIL/KB9byjSgehFbsQVtLmTpOEOkt2kNwhFyPeBS/FH/6e5IrU4zzHMinVT+2f5YR8Dk8A4XZlLNIfTmhPId4D0sk3YaGku4A00iRH6UC0TwLfcLLasceK7/LAPgSFCa29UfNwB7wGimsuL5LYsN12O4bYSCAo6L7hKsjrK3QDGHGQPcGDbG+yrx7gKUvUee35ITq1ol5OEO0Ve4JMrQC+wAHwNLB3CGSyx7wLHuhJoX5YcFROUPF8+CmywQT5/w+U+rKxxDC2D0N45T1vDKY92JxQTEMUv8SUy79AOJ5ge2qKzsmvAjyS0xudr/M+WEseq49gus9git5irYvIdBXxuJ3f5Iu3QFh0VfwKuA29xP7Ty+Tr/60noN8YxdZDo9MxvuLUr5qkR81mXXBR+NEmzeuIBT/8BepJGh2+WcySJ4dai6KZMVHKJCdVJweTTAFkZlD5JeD9ludUkMdyaTAkTsfZySV7YnS0jGTbbiMOWTXh3ieFWr6yC0SUmN0hy8q9nIDyY8G7TmiNJ9ksuFR2v7FQj25cFY9CGEv77OcN8vzlCfWgP7VuBkvbh6VCybFnKzQyEb3r2x+NAShCvkEppQ0WP6/kCuJOC7K9sm8VlHthDSvo4Twef69liFnbb019/0AeOSNrncZmRxW1DiRKoLRDPi0wJhxP+12ngm8DnDLcbxATfveGoC4c5ZhEh2JfHGG6rimFvjylmo6fTLaaIQ0z2bdlmGL4sQvNlvtt2nCINccxbznOIyZhTjhwrxkuUrDQzSWaER/gIOHUE73SKY8ReBtqdCeQx8cZHu11lpXC5wETjTPC7GLUKhyBbYN8ujjWe4uBxn6MSSfI6baU34PhHBenPHDbtkmH2MWRHobUdjzn0ktM62pXtmk67lVeZBs576jrt4L8C3mMROsTk3hShCyIINJOcKULztFldhH7ni3wgq0RKOptUNS/zFPEMz7qmApoeY+R6l/VZPkVe8RfwvSzzPdLPKLhiKuakg5R7oqL9O8URlZ74S5KVBylNIrGRBympzoGh3R5y2CUn7+ml3hSviKOqSlRDsQ9SQLZNZHW/28evylHVFkU62H5cqRzItotioJh0VuxKL+8Lcxjg6U2tyXZzLl2UzoPs/cR2/7cD7dAt0gO6qAsc8HRU3SuDXrouc2UwDbKL3pU44qXMgiNP8EkDfXPNLmXshMV37fWEPlpWMeaeznXtNSv9bLUJy/jexUo3a124x+pCr075uG5Cy4S8um2h6TRYlfg2A8hGlHB1m1X+FWAAynGS8y4+oNgAAAAASUVORK5CYII=)
    }

    .scheme-item--2 .scheme-title h3:after {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAYAAAAehFoBAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABXBJREFUeNrUWctuHEUUbVf8kB+J7cl48Is4D2JDWBCDA2wJQhDwKstkEYkFSFlE/EqkKBKLRGJBsmIRyZHMgrBBQkjhKWBwLBJ7iOOMPZl48GOUcexwanTKujTVVd3jsSWudKSZ7q6q09W3zr23quHK8G/BNmwP0Al0AW1EE69r2wDWgTViCSjxetU+nDqWaMDGGommgF4gDSjHc4ov0Mb/B4BNoAA8BIpJB25IOMM9wBDQIa4VOWurQBmoiBnUM90MtALt/Bop0XYFmMEsF+pNWA84DHTzf4lE9Sw9SThJLfw6Kb6AtsfAHRAv14NwhmQbOYNzwP2gPvY80M8JeUrSC9shfIguoC0PTNEH62naz0eA5/h/FrgXtRhdC+aoIDsNZHeArFaJTSDLMQKOOXx15PdEhA8DA/z9E91gRw2k5zjWM7rJ4biEM5QfbT9SO3fFQHqJpKsSiFnO+HTYqIFxg1LMsfYDLwJHKH1Gd3WwWAT+BP4AHsUgXQLRabrkCH4vS/UIEzZqkI/pBgeBt4Svh20voT/vO1xQX2vt9bkHiO7jQtScfrYR7qHOlqkGvgj5HvCaVhrOXI6z+IB9mC/Wz9k/wBc7B3wPTFLKokxz0KS7Qb4HL7EY9mEzS3MeNWjloGMkexu4BNzgIMsk8pS/p3jvEp9tYNtz7CtSPcRXHjKqoURu0EGfdQUFnRecpeDrKHcZmODK9tkzPnuZbXUfZ0GkyUH6Pjl1mJBuCPeKvMBlp4BBYB74HFioQQwW2HaefZ3yPF+UHBUTlDQvPvQssFH+/oKfu1ZbZh/aRjHLBx3PGk5pPLdHMQFRfBNXInNS+Kwtu9JZ2QXgWxJa5u8LvBe2gvDpkw63eEJuVa6KyXfg0dxervI8/TBsOip+B1wE3qTPdfD3Rd4bsLSbYJ86SPQ6xjfcuhTz1ID5bJS9JBIT28zqgY872ut7N5lahm02NIbNDLd2JaRlzdHAhOqs5d7HHrLGXgE+slzPhmTVZoZbqylhAtZeUZYWfhe2MwkW25kIXzbhPcoMtyYVKhijzOQGtorg1QSERy3XyqExbLZVcqlgd229Htm+LBi9PmS590OC8X6NCPW+NbTlBUr6h6NBIeTL0q4nIHzdsT4eeVKC6hdSMX0o55CeT2X657Bf+GwSyfzPGlJS4xwNXNKjI9EHolKwmX6h9yMi6ZBDMoMQt1UlSqBOTzzPMaEet9zXaeAbwCcMt6vEbV57PaIgGGefOYRgVx5juC0phr1Npm8tjka3mCKOMdkPW4Vh+IQIzSd4rRKxizTGPm9FDYqQ3UJummPJqEQhlGbabEYowmmWPrXaXvZRVRnM7ownj6kufDy3oUIpXMoz0CQT/D5GrUwNZDNs28e+JmNsPG5xVCJJXqGvDHqE/5ogfT7Cp6NsnG0M2WuYtXWHOwyS04pJ5BtDWdPLTAMfOOo6LfCfAe+yCB1jcm+K0HkRBNpIzhShafqsLkK/dEU+kFUiJZ01W1eS8CJ3Ebu515X1zPQEI9fbrM/SMfKKv4CvfGU+bYRR8LGpmG37Enc4Y1pq/o6xN6EHvkKyciOlVSQ2ciMl1j4wZneAHDbIKXLnx+xJHOPOy0rM3R9N5BtiWwaynRy7ujcR3jNWEVVtTqSDXbuVyoFslygGcra94qj08q5wh+Pcvdlpsv0cq4GL/q7tuf/dhrbvFOkeJeooO9wX1PfIYJDSZY4MpkE079vU81meimEOZV6gEhSpuZWEJJupzTUdysQ9pyszRTTHXp3EoeDfx15r1GhZxZhzuqhjr1mps/UiLIPLIgftY6WbipGDSNtkdaG/TnG3TkKLhDy6bacvNocq8Qq/0GpgObpNav8IMACtFqOplHDFvQAAAABJRU5ErkJggg==)
    }

    .scheme-item--3 .scheme-title h3:after {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAYAAAAehFoBAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABZVJREFUeNq8Wc9PXEUcfwwFwo8Wui7LT0uphdp6EJS2HryoMVptYuyRHkw86K3xX+mliQcPHmxPeqoJHqwHmxgjajUmCKQtuxbossuWLaUEsNTPd/MZMg5v5r23bPkkn7C892bm8+Z95/tjpu7DH88Ee0A92A52gC1kA68LnoBb4GNyBSzzegXfvP5zogEPVCk0BXaDaVB5nlN8gRb+fwTcBovgfbCUdOC6hDPcCQ6Abca1EmdtDVwHN40ZlJluBJvBVn6NlNH2ETiHWS7WWrAMOAwe5v9lCpVZ2kg4SU38Oim+gOABOAPh67UQnKHYA5zBefBeUBs8D/ZyQv6l6KUgwsZ8GARPUWwe/KWGYgX/sM88xzh14ebZwWoFD9FeBbPgFBdMTYEZ3QanOIZgAKKHkwo+Bvbx9y2awTMFRM9zrKdiJhB9LK7gDN2P4Hf6zn0BRK9QdMUFQnQmatGJ8b9Ke5pNMLPPgS+CL9D1ab8rwaIA3gb/BpdDRO7qDEL7aJLiHidN72EHjmFjgcURexR8w7B1GwdJ+bxvg1nwB/G9UeYB0Yfws4ua/ggT3Ek/K28zHSNCvsuvUceZy3EWF9iH/mK9nP0jfLGPwF/BCboyF0SDiD4M8Z14iYItWM/SfIQ3EBHj9KGCSfBbLhYbqxx4mi/2PjhGyuxdNV5ul/eAUNFynNoK5qJLMdyWI/ys5AUXKVai3BXwukOsjad89grbSh8XIarBYxr3qKkNz6VMwd1GXuDDObAfXAS/ApeqcAZLbLvIvs5FPF8yNSomKGlevB+xwEb5+2t+7mqxyj4Eo5i9o55ntaY0nqtXTEAU38SXyLxJO5xkemhDsrJL4E8UtMrfl3jPRpF91bFvl1lsUFtFq2LyrTMwF7q5yvO0QxviN8WhXgZf43po4+/LvNcX0u46+5Qg0e0ZX2vrUMxTA+azLpzk36xjZmXgEU/7EXqSppB7WWuMMGhtrYpuSkclF3Songq592mEWI2XwU9Crk9ZbjUMWluzLmEC1l4upA27szGeYLGNO2xZh3cXtLYGZRWMLujcIMzJv5JA8GjItXVrjDDslFwq2F9s7bUDZRWMkTYUcu+3BOP95Qj1UWtoxwqUaR+eBkXLlk1cSyD4mmd9LEekBJUvpGLaUM7jej430z8P/uSzSVzmrjWkTB/naeBzPRvMwm552ssLveeIpAMelxlY2taUUQK1R8TzHFPC8yH3JQ08C37GcLtGTvLaGUdBcJ595hCCfXmM1raiGPa2mWI2eRrdYIo4xmTfxibD8GkjNJ/mtU3HLtIY+7zhGhQhu4naRGNZe4milWaGYc7wCBdY+lSLg+yj4mUwu3MReUxl4eO5J8pK4VIRA00wwe9h1MpUITbDtj3sayLGxuOOxvqTH/fpaJNmDSV11kNH423WbQPMvvTnn4kpVmz2A86wiL3K9NFlDv2sCR/hudt2TSdu5SUKWfDUdeLgvwTfYRE6xuReF6GLRhBo4UzqIjRNm5Ui9Dtf5INYZaSk2bCqucBdRKmcT0S4mS2mlBK53mJ9lo6RV8he2vdRZT5xglHwga6Yw/YlZoyK9mGMvQkZ+AuKNTdSmo3ExtxIibUPzI2ULjqEGXt/wc6cprljOcQN53KMMUTITXJPgNh2jl3Zm7D3jJWjqs0Z6WDHfqVyENthFAO5sL1iV3p5xzCHEa7UZy22l2NJUboAsXfCnovagR80Yn2e5lLrPWLFBdalPQLE3vXtkflwly5qiB0eCmp7ZNBP16WPDGYhNh+1qReFPD2GPpQ5Tk9Qos/dTCiykb65qkOZuOd060wR9bFXOzkY/P/Y6zF9tFnF6HM617FX1vSztRJsBpcCB+1hpZuKkYPY4X2ZX6e0XyehJdI8um2lLTZalfgmv9BaEHJ0mxT/CTAAsbynEh/zgDYAAAAASUVORK5CYII=)
    }

    .scheme-item--4 .scheme-title h3:after {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAYAAAAehFoBAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABYhJREFUeNq8WctTHEUcnu4EKB4Bsi6EVx7EhCgeJErUq1qWRjl5xIM3U+Uh65/iXFLlwYMHyclbrMKD8WKVZYkaLaswoUzYNYQsu9mwAUKxBMZfz35NtZ1+zCwbvqqvGGanu7/p+fXv0c2iz4P94BCxh9hL7ABbcF9gh7hNfAyuEqu4X0cuSjXg4QaFZogDxCyRO57jeIEO/H+CuEssE+8TK2kHZilnuI94ktil3Ktg1jaIm8SaMoNipluJ7cROfI2M0naduEizXG62YDHgGPEo/q9CqJilrZST1Iavk8ELCDwk3iLhm80Q3A+xhzGDS8S7QXNwnDiECXkC0SuBx8ZcGCWOQ2yR+EsTxQr8iz6LGGM8CNloo4LPwl4FFojzWDDNRS7aJc5jjCAeM2RjaQWfJg7j+gbM4NkiFy1hrCg2k5CdTiq4H+5H4Hf4zoNBLlqF6LoLDFm/zw9LbyDNoJpwqOeILxCfh+uTflcEixLxH+LfxAcJRFdJ6AJM8hxdr6neQxc8piywJGZwivimYus6joDi875DzBN/iH2vzzxC1k1Xx6DpD5PgPvhZ8TY3E0TI94ivCteImStgFu+hD/nFhjD7J/BiHxN/Jc7CldkgNHTHmkLWRy9R0gXLWVryeAMhYho+VGCO+C0Wi441DHwTL/YBcRIUszejvNzT3iNkQssZaCupiy6DcFv1+FmRF3wEsSLKXSFes4jVEeHZK2h7PO4rZC0O07gLTV30XEYVPKDkBS5cJI4Ql4lfE1ca8AUraLuMvi56nq+oGjkSlCxu3vcssPO4/gafu1GsoY8g7jNkpxzPSk1Zeu4QRwLC8SauROYt2OEc0kMdIiu7TPwJgtZwfRm/6SijL4a+bWaxBW2xVo7kO/D43AGs8iLsUIeIij8TQ+IbWA9duA7x27Ch3TX0KYLEgGN8qa2XI08NkM/a8CL+5i0zKwaecLSfgCdpM/yW18YwQWrr5HBTMirZIEP1vOG3Sx6xEi8TPzHcn9fcqglSW7ssYQLUXjZkFbvTMZ1isU1bbFmGdxukthauFYw2yNzA5ORfSSH4vOHepjaGCXslFw8OFtv77YBrBaPXhgy//ZZivL8sod63hvasgKv24WhQ1mxZxdUUgq861scDT0oQfyGe0IYKDtfzhZr+OfAnnk3jMp9aQ1z1cY4GLtezhSzshqO9eKH3LZH0pMNlBpq2Da6UQD2eeF5ASjhl+F2kga8TP0O43QDncO81S0EwhT4LFIJdeYzUtsoR9naRYrY5Gl1HijiJZF9HDWH4ghKaL+BezbKLNIk+r1tHDVkbtAmNVeklylqaacKi4hE+ROnTKI6gj7qXyUWLnjymvvBz0Q7XUriMZ6BZJPiDiFr9DYjtR9tB9DWbYONxTyNXkuR12MqIx/HPKKI/tdi0DVNoI8XO0KxtO8xhBJrW6bmKXtMJt/IS0sB7jrpOOPiviO+iCJ1Eci+L0GUlCHRAnCxCs7BZUYR+54x8IeNKSpo3Vc0l7CIejfcD3G5mGymliFxvoz7LJsgrxF7a994yv45ziIIPZcVs2pe4pVS0jxLsTYiBv4RYdSOlXUls1I2UZPvAIRuGhh1osu78yD2Jcey8rCfc/RFCfgT3h5D1YOz63oS2Z8wtVW1BSQd7DyyXC1mvUgwUTHvFtvTytmIOE9i9edZihzAWixd9Lrptesy3Az+qxPoizKXZe8QcC+zYnkfIRXdce2Qu3IGLOosOu4PmHhmMwHXJI4MFElv0ber5UITHkIcyZ+AJKvC5tZQiW+GbGzqUSXpOt4kUUR579YCjwf+PvR7DR6tVjDynsx175VU/2yzBanApYdBBVLqZBDmIil1UF8vxyx7QSWgFVI9uO2GLrVolXsMX2ghMR7cp8Z8AAwBk+ZD9x2+oAwAAAABJRU5ErkJggg==)
    }

    .scheme-item--left .scheme-title h3:after {
        left: -66px
    }

    .scheme-item--right .scheme-title h3:after {
        right: -66px
    }

    .scheme-item--1 .scheme-title h3 {
        color: #0cf
    }

    .scheme-item--2 .scheme-title h3 {
        color: #9d26d5
    }

    .scheme-item--3 .scheme-title h3 {
        color: #51c336
    }

    .scheme-item--4 .scheme-title h3 {
        color: #ff9000
    }

    .scheme-text p {
        font-weight: 300;
        font-size: 17px;
        line-height: 30px;
        color: #FFF
    }

    .scheme1 .heading,
    .scheme1 p {
        color: #234
    }

    .scheme-text p:last-child {
        margin-bottom: 0
    }

    @media (max-width:1440px) {
        .scheme-container {
            max-width: 1200px;
            background-position: 50% 40%;
            background-image: url(/sites/all/themes/iflexion/images/sheme-object-md.png)
        }
    }

    @media (max-width:1030px) {
        .scheme-item--left,
        .scheme-item--right {
            padding-left: 66px;
            text-align: left
        }
        .scheme-container {
            background: 0 0
        }
        .scheme-item {
            height: auto!important
        }
        .scheme-item--right {
            padding-right: 0
        }
        .scheme-item--right .scheme-title h3:after {
            right: auto;
            left: -66px
        }
    }

    @media (max-width:1029px) {
        .scheme {
            padding-bottom: 50px
        }
        .scheme-content,
        .scheme-item+.scheme-item {
            padding-top: 0
        }
        .scheme-item {
            margin-bottom: 50px
        }
    }

    @media (max-width:767px) {
        .scheme {
            padding-top: 50px;
            padding-bottom: 50px
        }
        .scheme-content+.scheme-content {
            padding-top: 30px
        }
        .scheme-item {
            margin-left: -15px;
            margin-right: -15px;
            margin-bottom: 30px
        }
        .scheme-item:last-child {
            margin-bottom: 0
        }
        .scheme-item--left,
        .scheme-item--right {
            padding-left: 0
        }
        .scheme-item--left .scheme-title h3:after,
        .scheme-item--right .scheme-title h3:after {
            display: none
        }
    }

    .scheme1 {
        position: relative;
        padding-top: 95px;
        padding-bottom: 50px;
        background-color: #FFF
    }

    .scheme1 .heading-title h3 {
        margin-bottom: 0
    }

    .scheme1 .heading-description p {
        margin-bottom: 104px
    }

    .scheme1-content {
        padding-top: 188px
    }

    .scheme1-item+.scheme1-item {
        margin-top: 86px
    }

    .scheme1-item--left,
    .scheme1-item--right {
        text-align: left
    }

    .scheme1-item--middle {
        position: relative;
        left: 46px
    }

    .scheme1-container {
        background-repeat: no-repeat;
        background-position: 50% 50%;
        background-image: url(/sites/all/themes/iflexion/images/scheme1-fruit-bg.jpg)
    }

    .scheme1-title h3 {
        position: relative;
        margin-bottom: 24px;
        font-weight: 300;
        font-size: 30px;
        line-height: 34px;
        color: #234
    }

    .scheme1-title h3:after,
    .scheme1-title h3:before {
        position: absolute;
        display: block
    }

    .scheme1-title h3:before {
        width: 300px;
        height: 1px;
        top: 19px;
        background-color: #dedede;
        z-index: 1
    }

    .scheme1-item--right .scheme1-title h3:before {
        left: 100%;
        margin-left: 46px
    }

    .scheme1-item--left .scheme1-title h3:before {
        right: 100%;
        margin-right: 46px
    }

    .scheme1-item--middle .scheme1-title h3:before {
        width: 1px;
        height: 100px;
        top: auto;
        bottom: 100%;
        left: 50%;
        margin-left: -62px;
        margin-bottom: 31px
    }

    .scheme1-title h3:after {
        width: 20px;
        height: 20px;
        top: 10px;
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAfRJREFUeNqUld9Lk2EUx9+21CL/AH8EgQRmBVo6m9d6EYWwQQvabT92EZl5oewfEM2LFCYpeN/FWi0q6KIg8EIG64di62Z0lewPiC6mM/we+Wy8G2/O98CH533Oe873PM+75zw7EV0fdjysVURgRHSJXfFbfBOvxRt8dXbSQywqnorzHkUuwB1RFDPilTso4HoOinkCTKwgpkSfOAUX8RWIyZAT9FrhrJhmG5b0XPxrWOVPWBL3xTNyHFZbW+Etl9hNsUyxCbEh/sAGPnu3KsbJmUbjULCVSmZPxEfRLXKsJCzaIYwvR8wndmO2aFomGBNnxQ+qWoF3YsD5v9m796JNrJBrBW4HOBpma2JfJJqIVa1fPCBnDV/EBENMPjDGneNbvCF3yAQ7mPxivOpD8EpDbmfA67T7sD3Xoa8d7BLPPYxffQhuM55jLJngFpPrjC98CFZjxxjzJphlcpcWsqOzeQyxLWIt5x6+rAmmuUUuc2TKdMv3I8Ss4A1iE+TumFbA1bsOHTPGy2ti0rYh/kIe3zAxow1dVq72sq1ygV/LOuChqNBmIVfrhfBVWNlbchbQqLu+kiJFQIpv9Fj0ihZxRlzCt0nLneYiSXpdX9ZCj8RnMUfy4hHfsYjQy2Y3doatxLi9B2l8h+/2hb+AtFdTHAgwAL8YdPcOGZFYAAAAAElFTkSuQmCC);
        z-index: 3
    }

    .scheme1-item--right .scheme1-title h3:after {
        right: -47px
    }

    .scheme1-item--left .scheme1-title h3:after {
        left: -47px
    }

    .scheme1-item--middle .scheme1-title h3:after {
        top: -32px;
        left: 50%;
        margin-left: -72px
    }

    .scheme1 ul {
        margin: 0;
        padding: 0
    }

    .scheme1 ul li {
        position: relative;
        padding-left: 17px;
        font-size: 17px;
        line-height: 25px;
        color: #727a82
    }

    .scheme1 ul li+li {
        margin-top: 15px
    }

    .scheme1 ul li:after {
        position: absolute;
        display: block;
        width: 4px;
        height: 4px;
        top: 11px;
        left: 1px;
        background-color: #51c336;
        border-radius: 50%
    }

    .scheme1-object {
        padding-top: 124px;
        padding-bottom: 124px;
        line-height: 0;
        text-align: center
    }

    .scheme1-object img {
        position: relative;
        max-width: 100%;
        z-index: 2
    }

    @media (max-width:1200px) {
        .scheme1-container {
            background: 0 0
        }
        .scheme1-content {
            padding-top: 90px
        }
        .scheme1-title h3:before {
            display: none
        }
        .scheme1-item--middle {
            margin-top: -100px
        }
        .scheme1-object {
            padding-top: 160px;
            padding-bottom: 0;
            background: 0 0
        }
    }

    @media (max-width:1029px) {
        .scheme1 {
            padding-top: 100px;
            padding-bottom: 50px
        }
        .scheme1-container {
            font-size: 0;
            background: 0 0
        }
        .scheme1-content {
            padding-top: 0
        }
        .scheme1-item {
            display: inline-block;
            vertical-align: top;
            width: 48%;
            margin-bottom: 50px
        }
        .scheme1-item+.scheme1-item {
            margin-top: 0;
            margin-left: 4%
        }
        .scheme1-item--middle {
            margin-top: 0;
            padding-top: 0;
            left: 0
        }
        .scheme1-title h3 {
            margin-top: 0
        }
        .scheme1-title h3:after {
            display: none
        }
        .scheme1-object {
            padding-top: 40px
        }
        .scheme1-object img {
            max-width: 60%
        }
    }

    .scheme2-img,
    .scheme3-img {
        max-width: 100%
    }

    @media (max-width:767px) {
        .scheme1 {
            padding-top: 50px
        }
        .scheme1-content,
        .scheme1-item--middle {
            padding-top: 0
        }
        .scheme1 .heading-title h3 {
            margin-bottom: 18px
        }
        .scheme1 .heading-description p {
            margin-bottom: 60px
        }
        .scheme1-item {
            display: block;
            width: 100%;
            height: auto!important;
            margin-bottom: 30px
        }
        .scheme1-item+.scheme1-item {
            margin-left: 0
        }
        .scheme1 .container:last-child .scheme1-item {
            margin-bottom: 0
        }
        .scheme1-object {
            padding-top: 20px
        }
        .scheme1-object img {
            max-width: 100%
        }
    }

    @media only screen and (-webkit-min-device-pixel-ratio:2),
    only screen and (min--moz-device-pixel-ratio:2),
    only screen and (-o-min-device-pixel-ratio:2/1),
    only screen and (min-device-pixel-ratio:2) {
        .scheme1-title h3:after {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABDJJREFUeNrMWVtIVFEUHSftqRGZiGRGZFpkEWQJ0UfWn4ggRin1lUXZu4/SICIoKIOQMKEi+qrUIAKxJ1QfQVBWlCilKIUlflgR2UPGGFs71pXT5ui9452BNqyPu885e6/Z57X3mfjixysD45AgsALIB3KBLGA2MI3tP4BeoBN4DjwCWoBwpI7iI+yfDuwCNgFzxug3CZgJLAFKqPsAXAXqgI+RRMKLJNNwN1DlQm40mcOx3bSVHC2CG4C3wE5gYsC/TKQtsbnRzxRLWy2wY5T270Az19cr4B3wlW0zgHnAMq7TQiBRjZ8FNABrgD3Ab5uTuFE2yVSgkYa1dAHVwDXgp8eoTeG6PQQssLQ3M5o/vUyxRK7eQm4QqAQWA5ciICfyi2NyaGNQtRfSZ7wXgueAIkvU8oDTQMjH+gvRRh5tmlJE32MSlDBvV7qXwGqg1eIwgzvzHo8RicwA8Aa4y7Z5lnGttPlS6cV32WhrMJk7a5aK3Cqg30LsFHf4BJeohbmehWyPaksBngCZhu4LsNDxaUbwhCIn62a9hZxMRRt/6QSPR5n0bdfRoe0S+nJEDvjjeoolIuVq8DHgtdLtA24CSeNYf4m8SQ5YpvuY0m0hpxGCFUCC0UFO+xrL+qyJ4PaxHmvAGcsBXaM2TQI5/XUm2KwGyPoaUmvuEh34lTjayjB0Q/RpinAKOllJutEwwDPJlJOWm8CPJPKwN6WBvs3EZIUQXKs63ma65MhcoDQQfdlA2wEjRbut+uQLweVK+UB9l/pcd2Pt7lIX37nSKduyq/75FYHYSb6L72whmKaU3eo7J4YEc1x8pwUtZ9o3S1oUK0lx8Z0UDPznElRbW2S6+v4UQ//9Lr4HhGCfUs5X3+0xJNjm4rtPCHYo5VL1/TCGBB+5+O4Qgi+Ucp36bhxPPetBnDRsLN/Pg5ZfUWAU4CLvgesxIHidts06qEBHWAg+U4V0kuWEr2QVFy35TpumlKkjTzi1BBnqK6pzlUq/JBPeBgxHgdwwbfWo9EoTFk5h5xysU8VQpiWxbKAu7JPcQdoyZb8qR0PkNJIEfGSOpjNqvavOAsWWs9PrtG5mwqp3rs6oLzvLzrxJjgKfVbF9w3IdNfEObfAYzTD7Lmaxr6+6G9wgjgiHI7ayUxp2KwOZLB9Tlb6Hi1pKysPAfT63DRG91B3m1JVZKrpU2s5U+r1moGxPH+cttXEXq6/WKO3ipYycJndR+7YlC3s5jTqST/m2kuCDWAJtPLWQa+IjkuvTR4hTckfpJ7OOkLt5q1o3Xh6Pyjm2mrZMuUWfIa+vW86vrbVMd7Se3xy5wMgNRfL8pmuS2hgkrp+4nOrd8kE3kSNiETdPKArEQrS1yI2cV4LOr61gvlbNYyRS6eXY+bTlKRGO8/k3xFqWrVkstBON9Sk3QSfTOckpx/U3xB8BBgCJQPpPZW/73QAAAABJRU5ErkJggg==);
            background-size: 20px 20px
        }
    }

    .scheme2 {
        position: relative;
        padding-top: 100px;
        padding-bottom: 100px;
        text-align: center;
        background-color: #FFF
    }

    .scheme2 .heading {
        color: #000
    }

    .scheme2 .heading-description p {
        margin-bottom: 84px;
        font-size: 19px;
        line-height: 30px
    }

    .scheme2--page-mobile {
        padding-bottom: 60px
    }

    .scheme2--page-mobile .heading-title {
        margin-bottom: 25px
    }

    .scheme2--page-mobile .heading-description {
        margin-bottom: 62px
    }

    .scheme2--page-mobile .heading-description p {
        margin-bottom: 0;
        font-size: 25px;
        line-height: 38px
    }

    @media (max-width:767px) {
        .scheme2 {
            padding-top: 50px;
            padding-bottom: 50px
        }
    }

    .scheme3 {
        position: relative;
        padding-top: 110px;
        padding-bottom: 167px;
        background-color: #f7f7f7
    }

    .scheme3 .heading {
        margin-bottom: 120px;
        color: #000
    }

    .scheme3 .heading-title {
        margin-bottom: 0
    }

    .scheme3 .heading-title h3 {
        position: relative;
        margin-bottom: 0;
        z-index: 1
    }

    .scheme3 .heading-title:before {
        position: absolute;
        display: block;
        width: 200px;
        height: 100%;
        left: 50%;
        margin-left: -100px;
        background: -webkit-linear-gradient(top, rgba(247, 247, 247, 0) 0, rgba(247, 247, 247, .6) 10%, rgba(247, 247, 247, .9) 50%, rgba(247, 247, 247, .6) 90%, rgba(247, 247, 247, 0) 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgba(247, 247, 247, 0)), color-stop(10%, rgba(247, 247, 247, .6)), color-stop(50%, rgba(247, 247, 247, .9)), color-stop(90%, rgba(247, 247, 247, .6)), to(rgba(247, 247, 247, 0)));
        background: linear-gradient(to bottom, rgba(247, 247, 247, 0) 0, rgba(247, 247, 247, .6) 10%, rgba(247, 247, 247, .9) 50%, rgba(247, 247, 247, .6) 90%, rgba(247, 247, 247, 0) 100%);
        filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#00f7f7f7', endColorstr='#00f7f7f7', GradientType=0)
    }

    .scheme3-container {
        position: relative;
        height: 725px;
        padding-top: 10px;
        text-align: center
    }

    .scheme3-col {
        position: relative;
        width: 720px;
        height: 720px;
        margin-left: auto;
        margin-right: auto;
        padding-top: 54px;
        background-color: #f7f7f7;
        border-radius: 50%;
        z-index: 1
    }

    .scheme3-list {
        position: absolute;
        width: 330px;
        top: 56px
    }

    .scheme3-left {
        left: -130px;
        text-align: right
    }

    .scheme3-right {
        right: -130px;
        text-align: left
    }

    .scheme3-list ul {
        margin: 0;
        padding: 0
    }

    .scheme3-list h3 {
        position: relative;
        margin-top: 0;
        margin-bottom: 15px;
        font-weight: 300;
        font-size: 19px;
        line-height: 30px;
        color: #234
    }

    .scheme3-list h3:after,
    .scheme3-list h3:before {
        position: absolute;
        display: block
    }

    .scheme3-list h3:before {
        width: 300px;
        height: 1.3px;
        top: 17px;
        background-color: #dedede
    }

    .scheme3-left h3:before {
        left: 100%;
        margin-left: 18px
    }

    .scheme3-right h3:before {
        right: 100%;
        margin-right: 18px
    }

    .scheme3-list h3:after {
        width: 20px;
        height: 20px;
        top: 8px;
        border-radius: 50%;
        background-repeat: no-repeat;
        background-position: 0 0
    }

    .scheme3-left h3:after {
        right: -30px;
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAfRJREFUeNqUld9Lk2EUx9+21CL/AH8EgQRmBVo6m9d6EYWwQQvabT92EZl5oewfEM2LFCYpeN/FWi0q6KIg8EIG64di62Z0lewPiC6mM/we+Wy8G2/O98CH533Oe873PM+75zw7EV0fdjysVURgRHSJXfFbfBOvxRt8dXbSQywqnorzHkUuwB1RFDPilTso4HoOinkCTKwgpkSfOAUX8RWIyZAT9FrhrJhmG5b0XPxrWOVPWBL3xTNyHFZbW+Etl9hNsUyxCbEh/sAGPnu3KsbJmUbjULCVSmZPxEfRLXKsJCzaIYwvR8wndmO2aFomGBNnxQ+qWoF3YsD5v9m796JNrJBrBW4HOBpma2JfJJqIVa1fPCBnDV/EBENMPjDGneNbvCF3yAQ7mPxivOpD8EpDbmfA67T7sD3Xoa8d7BLPPYxffQhuM55jLJngFpPrjC98CFZjxxjzJphlcpcWsqOzeQyxLWIt5x6+rAmmuUUuc2TKdMv3I8Ss4A1iE+TumFbA1bsOHTPGy2ti0rYh/kIe3zAxow1dVq72sq1ygV/LOuChqNBmIVfrhfBVWNlbchbQqLu+kiJFQIpv9Fj0ihZxRlzCt0nLneYiSXpdX9ZCj8RnMUfy4hHfsYjQy2Y3doatxLi9B2l8h+/2hb+AtFdTHAgwAL8YdPcOGZFYAAAAAElFTkSuQmCC)
    }

    .scheme3-right h3:after {
        left: -30px;
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAdtJREFUeNqclUlLQlEUx6/PiPoGTVBImwZosIHWuYgGMLKN0SrLRdEEKX2DrEUtGpBaBi0sM2jRN5BAy6JclavCDxAtrMz+B/7GS55TB37c4d3zf+fed+55JhXJKAOrBHYyAOrAB3gBt+AcXMhcxvrX0WQgOA42QbMqbE/AC8GgflLT9c3AB4IUi4NV0AKqSCvn4lxzZooqHzAbRShiHm5NnA7Ad57oJJBZsA2qZUeI1KuP0KETGwF7oAIsgjB4I2HOyTM/GKOPB1E6shHKB3gGDWAe7IN6cAk680QYA6PglT677FtEcAqdY/AIOniW1wXEsnYH+sEX+21gWmNqiB2BNHCXIKb48jmcXZq+YnYR7OXgiq1TlW7OHN8eEazhIMG2uwzBrhzfWo1f6b/2qbtZv/mUZN/C9qYMwQe2jWyTInjPwRDbkzIEs2ttbCMiGOJghinjZxoUMwnEz2vn4lxIBAOsIu1MmRRvS6xIDg5zrZu+ktgBTXd3Fe+mjQ8laZdlG+CdRDjXxzWD9BFbQU6m9MVBStbaP4vDFsQ8udVGzmIHLHAsV/GQSZtgajRxBy5uU7GQLPHGGBbYCbBRYoFdh9BpsYqdTdRJVm8rq4/iuUX5CwgY/QJ+BBgAFpGKdY9QEV0AAAAASUVORK5CYII=)
    }

    .scheme3-list li+li {
        margin-top: 55px
    }

    @media (max-width:1700px) {
        .scheme3-left {
            left: -40px
        }
        .scheme3-right {
            right: -40px
        }
    }

    @media (max-width:1510px) {
        .scheme3-list {
            width: 216px;
            top: 40px
        }
        .scheme3-left {
            left: 80px
        }
        .scheme3-right {
            right: 80px
        }
        .scheme3-list li+li {
            margin-top: 30px
        }
    }

    @media (max-width:1440px) {
        .scheme3-list {
            width: 180px
        }
        .scheme3-left {
            left: -5px
        }
        .scheme3-right {
            right: -5px
        }
    }

    @media (max-width:1200px) {
        .scheme3-col {
            width: 590px;
            height: 590px;
            padding-top: 25px
        }
        .scheme3-col .scheme3-img {
            max-width: 90%
        }
        .scheme3-list {
            width: 160px;
            top: -7px
        }
        .scheme3-left {
            left: -20px
        }
        .scheme3-right {
            right: -20px
        }
        .scheme3-list h3 {
            font-size: 15px;
            line-height: 24px
        }
        .scheme3-list h3:before {
            top: 14px
        }
        .scheme3-list h3:after {
            top: 4px
        }
        .scheme3-list li+li {
            margin-top: 36px
        }
    }

    @media (max-width:1030px) {
        .scheme3 .heading {
            margin-bottom: 15px
        }
        .scheme3-container {
            height: auto;
            font-size: 0
        }
        .scheme3-col {
            width: 100%;
            height: auto;
            margin-bottom: 50px
        }
        .scheme3-list {
            position: relative;
            display: inline-block;
            vertical-align: top;
            width: 50%;
            top: auto;
            left: auto;
            right: auto
        }
        .scheme3-left {
            padding-right: 80px
        }
        .scheme3-right {
            padding-left: 80px
        }
        .scheme3-list h3:before {
            display: none
        }
    }

    .scheme4 .heading-title:before,
    .scheme4-list h3:before,
    .scheme4-list li:before {
        display: block
    }

    @media (max-width:1029px) {
        .scheme3 {
            padding-top: 100px;
            padding-bottom: 100px
        }
    }

    @media (max-width:767px) {
        .scheme3 {
            padding-top: 50px;
            padding-bottom: 50px
        }
        .scheme3-left {
            padding-right: 40px
        }
        .scheme3-right {
            padding-left: 40px
        }
    }

    @media only screen and (-webkit-min-device-pixel-ratio:2),
    only screen and (min--moz-device-pixel-ratio:2),
    only screen and (-o-min-device-pixel-ratio:2/1),
    only screen and (min-device-pixel-ratio:2) {
        .scheme3-left h3:after {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABDJJREFUeNrMWVtIVFEUHSftqRGZiGRGZFpkEWQJ0UfWn4ggRin1lUXZu4/SICIoKIOQMKEi+qrUIAKxJ1QfQVBWlCilKIUlflgR2UPGGFs71pXT5ui9452BNqyPu885e6/Z57X3mfjixysD45AgsALIB3KBLGA2MI3tP4BeoBN4DjwCWoBwpI7iI+yfDuwCNgFzxug3CZgJLAFKqPsAXAXqgI+RRMKLJNNwN1DlQm40mcOx3bSVHC2CG4C3wE5gYsC/TKQtsbnRzxRLWy2wY5T270Az19cr4B3wlW0zgHnAMq7TQiBRjZ8FNABrgD3Ab5uTuFE2yVSgkYa1dAHVwDXgp8eoTeG6PQQssLQ3M5o/vUyxRK7eQm4QqAQWA5ciICfyi2NyaGNQtRfSZ7wXgueAIkvU8oDTQMjH+gvRRh5tmlJE32MSlDBvV7qXwGqg1eIwgzvzHo8RicwA8Aa4y7Z5lnGttPlS6cV32WhrMJk7a5aK3Cqg30LsFHf4BJeohbmehWyPaksBngCZhu4LsNDxaUbwhCIn62a9hZxMRRt/6QSPR5n0bdfRoe0S+nJEDvjjeoolIuVq8DHgtdLtA24CSeNYf4m8SQ5YpvuY0m0hpxGCFUCC0UFO+xrL+qyJ4PaxHmvAGcsBXaM2TQI5/XUm2KwGyPoaUmvuEh34lTjayjB0Q/RpinAKOllJutEwwDPJlJOWm8CPJPKwN6WBvs3EZIUQXKs63ma65MhcoDQQfdlA2wEjRbut+uQLweVK+UB9l/pcd2Pt7lIX37nSKduyq/75FYHYSb6L72whmKaU3eo7J4YEc1x8pwUtZ9o3S1oUK0lx8Z0UDPznElRbW2S6+v4UQ//9Lr4HhGCfUs5X3+0xJNjm4rtPCHYo5VL1/TCGBB+5+O4Qgi+Ucp36bhxPPetBnDRsLN/Pg5ZfUWAU4CLvgesxIHidts06qEBHWAg+U4V0kuWEr2QVFy35TpumlKkjTzi1BBnqK6pzlUq/JBPeBgxHgdwwbfWo9EoTFk5h5xysU8VQpiWxbKAu7JPcQdoyZb8qR0PkNJIEfGSOpjNqvavOAsWWs9PrtG5mwqp3rs6oLzvLzrxJjgKfVbF9w3IdNfEObfAYzTD7Lmaxr6+6G9wgjgiHI7ayUxp2KwOZLB9Tlb6Hi1pKysPAfT63DRG91B3m1JVZKrpU2s5U+r1moGxPH+cttXEXq6/WKO3ipYycJndR+7YlC3s5jTqST/m2kuCDWAJtPLWQa+IjkuvTR4hTckfpJ7OOkLt5q1o3Xh6Pyjm2mrZMuUWfIa+vW86vrbVMd7Se3xy5wMgNRfL8pmuS2hgkrp+4nOrd8kE3kSNiETdPKArEQrS1yI2cV4LOr61gvlbNYyRS6eXY+bTlKRGO8/k3xFqWrVkstBON9Sk3QSfTOckpx/U3xB8BBgCJQPpPZW/73QAAAABJRU5ErkJggg==);
            background-size: 20px 20px
        }
        .scheme3-right h3:after {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABDpJREFUeNrMmVlIFlEUx+eb+qJFI7KFyIrQLEskWgh6s94kgjDc8qkFW2jxoeUh2qEFosKCiuipzAIJouWp7CmoNEoSKmwzJcqKaOcztP+x/8TlcP1mvmWgAz9k7sx3z3/O3OWca8Rp6nWSMBfMBUVgDsgD48Ew3v8OOsEz0AQawX3QozvqnR3fUSRBgdlgHVgGJiT4Um/AeXACdKRbYBbYA1aCQU5qFgNnwA7w0U+gG6DDUvAErE2DOId9rGWfZX4Px4vgQFALVvdz/xu4yvH1ELwEn3lvBJgMZnKcLgIZ/fRzEqxHJH8nInAouMiOtbWBg6AO/AgYtSEct1vAFMt9edEyiPwRRKBErgEsVu2/wE5wlOMo2c+7CewGg9W9K6BER9I2Bo9bxEnU5oFDKYjzJsgh9tWm7i2m77gRlEFbr555AIrBO4vDiaCS42w6GA26uYy8Brc5VF5afjsWXAezVHslonjBJjCLM2uUitx80GURdoAzfIBP1HoochtoV/fkhe6AXKPtE5gGkV36E+9T4n6CpRZx8ikeg4oA4jwf8mwr/5omfZfQl2cjwV49BiUiK9SPd4FHqm0juAwykxh/GdxJatRW10Jfpi2PNPdp+idwDYgaDzwHR9SPytjmpjBJIuCwZYE+oiZNlJr6nAlV6gcHONjNMXeGDlK1CPuaaESxmz5Nq0IUXS8ryTZufAUX1MP74+wETpKf+6Bqq6dvMzGZKwIXqAevM13ybBIod9Jvpezbi+J3+jatSATqfOKmui5PcdzFm93lPr7nyENTVWOLfgsnPCvy8T1VBI5Tjc/VdUGIAgt8fI9zLWvaF3U9KkSBo318Z7rOf26umtpiw9X1hxD9d/n4/ioC36rGHHXdGqLAxz6+34rAp6qxUF3fClFgo4/vpyKwWTUuVNcXbfVsGsxLw+L5bnItb1FsFOBir8ClEAReYt9/N+jmvjqoWEdYBN4zC2kuO3qF38oqLl32jX2aVqGWPNF032Woz6mHt6n0SzLhVbJlpkFcL/tqN6IXtQg+h/25x1sHT6hiKFcnlsw2alIcjyJus6Xu2aTK0Rg1/UsCOpij6Yxaz6pjYIll7Qz6WauYsDpG9AotGfVZRK9D1yR9ZyWq2G6wbEdXuIfWB4xmD5+dwWJfb3UNPCjwTDRs76/sLLckq0HLThEwhu3vucA3cra+SKDsXIbo1cU7WZCzkmpL4V5iSYeStUJGLle1n4a4ar+ThQ38jI6aNHd5thJNQViUfdy1iBOf64Mcv8W4Jt1Q7YNZR7TynHBoAsKGsKxtZR/6XOaa+ET0Yokcv0V5/FYd8vHbKR6/dSd6PmhOnNoQEldJ4zaY5zD95YN+JktEPidPLA3CYuwr37JiJCXQe9s1zNdkDHUmIayTv81hX4ES4UiK/4ZYwLI1j4V2hjE+ZSd4xnROcsqk/g3xR4ABAKFBHOYY6r4+AAAAAElFTkSuQmCC);
            background-size: 20px 20px
        }
    }

    .scheme4 {
        position: relative;
        padding-top: 100px;
        background-color: #FFF
    }

    .scheme4 .heading {
        margin-bottom: 122px;
        color: #000
    }

    .scheme4 .heading-title {
        margin-bottom: 0
    }

    .scheme4 .heading-title h3 {
        position: relative;
        margin-bottom: 0;
        z-index: 1
    }

    .scheme4 .heading-title:before {
        position: absolute;
        width: 200px;
        height: 100%;
        left: 50%;
        margin-left: -100px;
        background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, .6) 10%, rgba(255, 255, 255, .9) 50%, rgba(255, 255, 255, .6) 90%, rgba(255, 255, 255, 0) 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgba(255, 255, 255, 0)), color-stop(10%, rgba(255, 255, 255, .6)), color-stop(50%, rgba(255, 255, 255, .9)), color-stop(90%, rgba(255, 255, 255, .6)), to(rgba(255, 255, 255, 0)));
        background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, .6) 10%, rgba(255, 255, 255, .9) 50%, rgba(255, 255, 255, .6) 90%, rgba(255, 255, 255, 0) 100%);
        filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#00ffffff', GradientType=0)
    }

    .scheme4-col,
    .scheme4-container {
        height: 950px
    }

    .scheme4-col {
        position: relative;
        padding-left: 10px;
        padding-right: 10px;
        text-align: center
    }

    @media (max-width:1440px) {
        .scheme4-col,
        .scheme4-container {
            height: 800px
        }
    }

    @media (max-width:1200px) {
        .scheme4-col,
        .scheme4-container {
            height: 650px
        }
    }

    .scheme4-img {
        position: absolute;
        max-width: 100%;
        top: 0;
        left: 0
    }

    .scheme4-list {
        padding-top: 120px
    }

    .scheme4-list ul {
        margin: 0;
        padding: 0
    }

    .scheme4-list li {
        position: relative
    }

    .scheme4-list li+li {
        margin-top: 50px
    }

    .scheme4-list li:before {
        position: absolute;
        width: 100%;
        height: 1.3px;
        top: 15px;
        left: 0;
        background-color: #000
    }

    .scheme4-list .scheme4-item--1:before {
        background-color: #f96058
    }

    .scheme4-list .scheme4-item--2:before {
        background-color: #9d26d5
    }

    .scheme4-list .scheme4-item--3:before {
        background-color: #0cf
    }

    .scheme4-list .scheme4-item--4:before {
        background-color: #ff9700
    }

    .scheme4-list .scheme4-item--5:before {
        background-color: #255ccc
    }

    .scheme4-list .scheme4-item--6:before {
        background-color: #00ddce
    }

    .scheme4-list h3 {
        position: relative;
        margin-top: 0;
        margin-bottom: 0;
        font-weight: 300;
        font-size: 19px;
        line-height: 30px;
        color: #234
    }

    .scheme4-list h3:before {
        position: absolute;
        width: 20px;
        height: 20px;
        right: -38px;
        top: 6px;
        background-color: #000;
        background-position: 50% 50%;
        border-radius: 50%
    }

    .scheme4-right h3:before {
        left: -38px
    }

    .scheme4-item--1 h3:before {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAqlJREFUeNqcVc1rE1EQn31vI0jpQU9us0lQKwh6kNriVxtSW1AsQkXT+nXoQS8i1B5MUfAqWg/tQf8BkaLEaov0ILQm/YhUsRTFmymaJmnqRQ8FxWTfrjMvbyXKtg0O/Ni8yZvfvDc781vtV89Z8LBNiE6FQ4g6RBGRQywgniPGlO8v0z3ITiEGEPUeSXYrnEOkEf2IZ2sRcsRtREyufL5F1hzJ8db2gGYYfnI5heW8SExm7dmkCaUSJRxRyW8iBO3RKq58V5EV+bGOOd59oRk0jXnVAxzHFiNPUmJ8rBFXmxVpfyXhGUScyPQrvR9Z08EGsCwQiQmw37wGJ5eVPJoZAHbgMOCp8W462PNvF6z7g3tUOaKIp0RIi0WEyY93TPPui2Hn+zewhgbAWcp4HlALhkC/FgNty1YQjx9Ni5fjYXTnETuYYjaxZmkePX+ETrYembwx/mcN4i2tEvAujMFYdFOdu5hqDWAtkTwwxkVycl2yP6TZDIjkK6AYGVu2TiJskq840h6gpz2XgmrN3evGojUS4TZZF6POlJkzn6smdDJfoDIWzWBe3V61cV5+WqWS6yLCgmranMwW2l41H7WRjP26UlCuAhF+oF8iOSGbjfqsWnP32jNT7kt5R4Sj0jk75QfbFry1DbRAaOPTBYJAeylGzCT8yj3K1ITkoFisF/HhFOg+0PtisnnXJsPG7sNJw70yBmNVY8f5rX17hZKlqJP+ZGh+8z3bucvgLRGA2lqA1VWAnz/kqBERP3ES9J7LoNXUyNETww8blLBcovJVigMN+PX/FId7rkpVElKWIcRVJV9pHj6aZ5G2oOwzyyo6K8sFegGyZuVrkj1A9HrJl2unEXc8BPZfo/m9QQqzkWKTaL5QokHqvV8NPqjCz6tPQNxrKH4LMADQawJXTipIcgAAAABJRU5ErkJggg==);
        background-color: #f96058
    }

    .scheme4-item--2 h3:before {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAr5JREFUeNqcVU1oE1EQnt3EJPXQZJNijNkGGtok0gpSG0FaCl6C4MFqjdqj4s9BxYtt0KtQ6g+oBw9WxKNKaqyolxw8FAr+lWBpNWnTUGpCSGlNUkGTrZs4E9+WKNs2OPDx3pu8+d7beTNfuIeuaVAxHaKHYR9iB0JCJBERxHPEC+b7y7QqZIcRNxDNKod4GPoQcUQAEVqPUIMYRAxUFnpuruWIKenpExqNTXo7+fKJYir6JPt1NpQT5WKZDnzGDr+KkGkPV/XJ1xmZ1HbS8tY7YO3ieODV8lEuQWni9uL45PBSBy7rGGmgmvAoIkhk+++KU00H6ttLq2WIPs5C4nUesjPFCpHg0oPzoBHw1sBv4WA+vBJ5czHZytLhR4wQIS3mEGLbKcvY3oC1+0fmF4TPLcC3LwW1C4J5pwF89x2w1aqF90OZsalHy93oTiGcPGMWMWdx72VrJ91sIzIy+i18dgFkqQzefmsnxaKb8nyMZ6UBrl5TitOABpO+IdkaabQAsadZoBiKZe4eIvTSzH1CaKQx8SoPtZqyV4lF6yDC7TQzOfUijUvThZoJlz//2avEotl4tWqv1XgtVxkxl6trPkSaJrlEkdoKGloNNRNSGZGtzEtp5koT4STNYtgBNFKd1WrKXuwc5VE+EuEozWZCOXtZBhkTDGbP5rc0uw30GEAxsZGsnblHedYhSblQbv5wKzOu0XHgG3ZUinddMjzQ98ABtJdiKJYVdlBzyHJeZrLkX4z8tJla9J+27a6zYW2BXtBCMSuD9L1UaTUi2nWmAbqu2UBXr6m03rvBTDsTltOUvmpxoAbv/09xuKmoVDUhnXIHcYHJV9ztF1Lu44LD6NSJ2JJSPiGl6QEoZ+wzye4hLqnJl2K9iCEVgf3XqH+vkMJsptgkmi+ZaJB672GNDyzxE+wvIKjWFL8FGAAV5QyxHjEhSQAAAABJRU5ErkJggg==);
        background-color: #9d26d5
    }

    .scheme4-item--3 h3:before {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAjpJREFUeNqkVU1rE1EUPUm0NrUrbUGtCkIFFWlDbVH/RcVmIeJGRBEEQRfVf2CyiosuWhA34sLaWhe6r+BCaNPUhVasukhCEbVuJMlEJs9zZt7UEabJgJcc3s19955M7tcksGQQIV3EuMVZ4gDRJCrECvGMeG5t/0gigvAckScG0V7WiUliPmxMhvQUkbMOg91JfLrej8XVE/jcGIEjlKjLpjv7g3M2JvWXRk/oI0cYwrlVNouuMfxEi+7uVMwr+tZsTG6LxyoTAdmTTbOsIKdlzP2vxpx5b0xv0Yd02XQnmftpioqxsRMBYRdRlvE2n0yOlaYxmXeeUyR0Jx+J/o21V8Slolwk7SPmZf1XBkdc5uP0GlCqta/IcBp4cxzYAbi9JXxptLycXkra1sDlvaimEkhNf+tMJlmtAzP0VYxirXlchGPSrvXjkM7Hm4gtgW8QSxkV4T5px7pxUGexFp9wxfoGsZT9yahujys7E/7ptPA73NgbUtYa3lhhpCc+4cm0f350fA5xifCtNBajrPPCnviEge/DH1tFWRLhgjUOuAYuE+y1RCcZSnvFgGIefMeANS+IcFZbpM4+mqzi9S7m5cVRINPTvgdf0ke+iqn7PVj1ufzRy0aNXoFjNsqp2F30Ib2w/ehlw7Ms5P9jOeQDnvA+1AoqEDf0RaN4pQ/Vq304rD5rGjQ/NLChAihn9m9KpoibhLvdgj1P3Iu5YO8STztt7OAVkLXb+xQRVFGJX7avgNmoofgjwABSIrfUFxyl6gAAAABJRU5ErkJggg==);
        background-color: #0cf
    }

    .scheme4-item--4 h3:before {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAnlJREFUeNqcVUtoE1EUPZnEH3VRrYKaVFALxlRaqRUNSncuLC6qsQsRF0rRLgSxokHdS7UqbsQPSjaiYDRW8INboVKLNrZUTWlCFyZkYdUKijY6iee+eSOpjM3ggcO7c3n3vJn77r3jKV2GE2aTbZphchlZILNkkrxPPtC+afA4CO4gz5J1mBlpMkomyp2+MttLniaPW09zMwjuyyLUWYvq1X7lm0zl8Pbqe6RiAZg/5MB7+vCTpPn3G57RYgU0dPUj3LMFHsNwfLdSsYiBU31IdjfzaZ4WjZYL7iLjSmzrnRGsam9Ckel5c4Ufdhv4NGIJLVzLROwG6jsBg2keTyTxNFKvc95O3hVBeciQATQefYbwuRZ8ywFPtgMTr52zt2gdsO0hUMVMPGfM8IUWehmElSK4h8ZN5iyNjq8rUDK9SGz8t5iNmkZg5wu+qc/E9fnjOqd7DV0aQHB/Dh6vl0mvLCb4OAS8uwYVI7EW2kRwgzJDB2vVOnYLrmHvtWOBZhFcoswFwYBaPwy6F5xIYlossNRwqnbXMGZZqzn184+LzCvrcyqr1sVN7gWljARfxvLakxfBYWVKBwikztzC3puK2ZfyUgR7lTka87NkTCbYKolKqGmA2isxqRt+7e01dIdk8et7HfqjffDOAVofWcU7Uw22PobaKzESaxV23L6ULrVx6PwmZOKDqgOkaDdfZE7Zrr4qi2KLLzJgdYm0nsRYOEJOlQ8HafBj/zkceuwpVS4o44vH45AeX2ms6cghdGA5qllnxUIBk6N5dQGSM+szBZfIw07jy0aE7HY5YE/IhKk0sVE2jmR6ryftW5TEv9K/gLhTU/wWYABfXNd44lRmNwAAAABJRU5ErkJggg==);
        background-color: #ff9700
    }

    .scheme4-item--5 h3:before {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAArpJREFUeNqcVV1Ik2EUPvu22aYU2Dbm3DetsZUhRJgFYqyyK8MLw6026CZJr4wuaq667t+ivOiiH+gmKpmWsSDoQmggdbEYRn/kFpZbU6wMJDf32znjfLDiU0cPPHzve3bO837fec85U9gPh0AGFchOZguyFplGxpBh5GPkE7b9BZWM2AHkZaRN5pAGpgcZQfqQj5YTVCLPI/tps0YtRLscuphnn8Gy0aQxk+3zt1T84djc9Ejwh7iUydOBI3z4GWSOfBQln3yJxdJH2o2vfB5xl6AAQS4f+QLkr/nj4zcDM8241bKor1TQifST2OAx69v2ndVNmWwBHozNwdOXP+FTLFkU2iRqoaNlPXjaDKBWKeB56Fe4bzDayOlwIYdJkDZRpNi93xg85REds/MZ6L0agQ9fFuVeELbUV8KtEzYwVqvhwv1Y8O6zWQea40irwMoi5iziPWRupTdbSYxAv/VcmYQ0+va7za0Ui2bK80GBSwOcu3VxpaBQYtJXFJPw8WsShtCXYiiWzZ0kuINW7jaDhZ4BzFm5kHylWEQzCdbQymrSiPR8N7VYtuB79pViESZBrtrLhQpvmpDO5jOSjQQTxaJNpKitoHFDZdmCVEaEqZmlBJsSJPiGVtQB9KQ6KxeSL3aOdCkhEhxlozmXL+QwwdBQp11VbLNFS5cBFDP84ruZzaMCd0gslc7bBobi4xWYl9sn7cXiXQ504B2vHciXYiiWC9uv1G3tzfFYcoUnf5tsonZim63K5HTooXqtCuYXsrCQzBVbjYR6OmrgbHc9rKtSFlvv3L3pJh4sRyl9pcOBGtz7n8NhQJpSpYJ0ynVkH4+viGuPPu7eq6+z1mpEbMk0VkKCLoByxp9JuIE8Lje+JHQhL8oM2H9B/XuaJsxqE5uGZoCHBk3v7dz4wIl/zX8Bfrmm+CPAAK7LDMNpPoQqAAAAAElFTkSuQmCC);
        background-color: #255ccc
    }

    .scheme4-item--6 h3:before {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAqVJREFUeNqcVc9rE1EQnt3NbrO26a/UtnFjISpUqLQlVlSQ/gUeKjUHEQ+WYj0IFYsN6l2qFfEiaEG8iILRWkH9AwpFBW1s6cFiQg5mGytJ7U+T7nazzsS3sMraLH7k4703zPvey7yZWQ6S0+AACdnDeBS5C6kh08g48gXyJbP9Ac5B8ATyJnIfbI8EMooctxs9trmAvI4cpoWX45NnffXp89UNu1tFr0K2z3pBvb+a/fpwbSlYMIt04HN2+FWk8fcNbzAx7VJN47tRv3KMB+CdrlbE37WlhamR5cUuXMpMNGoXPImMkdjTptBcpLI2rJkm3FvNwpP1HzCn50tCB0QZTlXVAd4aJI6D8Y3leO9iqo3FPIJ8RoK0SCKDQzWNk7f8Sre6pcPxb0n4pOUdg9cpyfCqeS8oHhGGcurk7ZXv3WhWkXtI8DROHmHMEuuh9pBhgnBYnf+nmIUOFH2vtIKHA6MqNZtiMT3Ds9SAPl+9KgAnYNDLihFm0GcMfWkP7WXmHhI8RLMBfE0aH2PM3MLytfYiukiwmWb7RW+Qxmntp2vBOPO19iICvFO2u4WIL03YNE3dspFghiUtlRWEpR2uBSmNCF/0QoaZMiQ4SzOqABopz9zC8sXKsR7lAwlOMKNigGlggEspUQ7t6EO+tOfBWk5h5gmeVUg6j3kUzS1MVWBcXmPSdm4jSge+QR/ypT353zlIt4wJMDhgsLYUebu5EWiT5Jkj3spAn88PDYIHssUtWCkapVLrqJBhuLYJxna2QJ0glErvYk4Ns8bST+GzNwcq8Mv/2RxGrS5lF6RT7iAvsPaV6Pf51XPV/hbKMw1MbV4rZOgBKGbsbxLuIged2peFXuSIywZ7hTpMuY4NtnZE3fsg0npFCvxH9gmIORXFLwEGAMLeC1riH67xAAAAAElFTkSuQmCC);
        background-color: #00ddce
    }

    .scheme4-left h3:after {
        right: -36px
    }

    .scheme4-right h3:after {
        left: -36px
    }

    .scheme4-list li:after {
        display: table;
        width: 100%
    }

    .scheme4-left,
    .scheme4-right {
        position: relative;
        width: 368px;
        background-color: #FFF;
        z-index: 1;
        display: block
    }

    .scheme4-left {
        float: left;
        padding-right: 24px;
        text-align: right
    }

    .scheme4-right {
        float: right;
        padding-left: 24px;
        text-align: left
    }

    .scheme4-icon {
        position: absolute;
        display: block;
        width: 80px;
        height: 80px;
        top: -26px;
        left: 50%;
        margin-left: -40px;
        border-radius: 50%;
        line-height: 74px
    }

    .scheme5,
    .scheme5-center,
    .scheme5-container {
        position: relative
    }

    .scheme4-item--1 .scheme4-icon {
        background: rgba(249, 96, 88, .95)
    }

    .scheme4-item--2 .scheme4-icon {
        background: rgba(157, 38, 213, .95)
    }

    .scheme4-item--3 .scheme4-icon {
        background: rgba(0, 204, 255, .95)
    }

    .scheme4-item--4 .scheme4-icon {
        background: rgba(255, 151, 0, .95)
    }

    .scheme4-item--5 .scheme4-icon {
        background: rgba(37, 92, 204, .95)
    }

    .scheme4-item--6 .scheme4-icon {
        background: rgba(0, 221, 206, .95)
    }

    .scheme5,
    .scheme6 {
        background-position: 50% 50%
    }

    .scheme4-icon .icon,
    .scheme4-icon svg {
        height: 40px;
        max-height: 40px;
        vertical-align: middle
    }

    @media (max-width:1440px) {
        .scheme4-col {
            padding-left: 0;
            padding-right: 0
        }
        .scheme4-left,
        .scheme4-right {
            width: 334px
        }
        .scheme4-list {
            padding-top: 76px
        }
        .scheme4-list li+li {
            margin-top: 40px
        }
    }

    @media (max-width:1200px) {
        .scheme4-list {
            padding-top: 26px
        }
        .scheme4-left,
        .scheme4-right {
            width: 320px
        }
    }

    @media (max-width:1030px) {
        .scheme4-col,
        .scheme4-container {
            height: auto
        }
        .scheme4-img {
            display: none
        }
        .scheme4-list li+li {
            margin-top: 60px
        }
        .scheme4-left,
        .scheme4-right {
            width: 220px
        }
    }

    @media (max-width:767px) {
        .scheme4 {
            padding-top: 50px
        }
        .scheme4-icon {
            top: -91px
        }
        .scheme4-list h3 {
            font-size: 15px;
            line-height: 24px
        }
        .scheme4-left {
            width: 48%;
            padding-right: 40px
        }
        .scheme4-right {
            width: 48%;
            margin-left: 4%;
            padding-left: 40px
        }
        .scheme4-left h3:after {
            right: -24px
        }
        .scheme4-right h3:after {
            left: -24px
        }
        .scheme4-list li+li {
            margin-top: 140px
        }
        .scheme4-list h3:after,
        .scheme4-list li:before {
            display: none
        }
        .scheme4-right h3:before {
            left: -30px;
            top: 4px
        }
        .scheme4-left h3:before {
            right: -30px;
            top: 4px
        }
    }

    @media only screen and (-webkit-min-device-pixel-ratio:2),
    only screen and (min--moz-device-pixel-ratio:2),
    only screen and (-o-min-device-pixel-ratio:2/1),
    only screen and (min-device-pixel-ratio:2) {
        .scheme4-icon {
            background-image: url(/sites/all/themes/iflexion/images/scheme4-icons@2x.png);
            background-size: 91px 636px
        }
    }

    .scheme5,
    .scheme6,
    .sphere {
        background-repeat: no-repeat;
        background-size: cover
    }

    .scheme5 {
        padding-top: 170px;
        padding-bottom: 120px;
        background-color: #03040a;
        background-image: url(/sites/all/themes/iflexion/images/scheme5-bg.jpg)
    }

    .scheme5-item+.scheme5-item {
        margin-top: 420px
    }

    .scheme5-item--2 {
        padding-right: 175px
    }

    .scheme5-item--4 {
        padding-left: 142px
    }

    .scheme5-item--middle {
        margin-top: 204px;
        text-align: center
    }

    .scheme5-heading h3,
    .scheme5-title h3 {
        margin-top: 0;
        margin-bottom: 0;
        font-weight: 300
    }

    .scheme5-center {
        padding-top: 198px
    }

    .scheme5-img {
        position: absolute;
        display: block;
        max-width: 100%;
        top: 0
    }

    .scheme5-item--left {
        text-align: right
    }

    .scheme5-item--right {
        text-align: left
    }

    .scheme5-title h3 {
        position: relative;
        font-size: 30px;
        line-height: 40px;
        color: #0cf
    }

    .scheme5-heading h3,
    .sphere--page-prototyping .sphere-item--7 .sphere-item-title h4,
    .sphere-heading h3 {
        font-family: Avenir, Arial, Helvetica, sans-serif;
        text-transform: uppercase
    }

    .scheme5-title h3:after {
        position: absolute;
        display: block;
        width: 10px;
        height: 10px;
        top: 20px;
        background-color: #0cf;
        border-radius: 50%
    }

    .scheme6,
    .scheme6-img,
    .scheme7 {
        position: relative
    }

    .scheme5-item--left .scheme5-title h3:after {
        left: 100%;
        margin-left: 13px
    }

    .scheme5-item--right .scheme5-title h3:after {
        right: 100%;
        margin-right: 13px
    }

    .scheme5-item--middle .scheme5-title h3:after {
        top: -15px;
        left: 50%;
        margin-left: -5px
    }

    .scheme5-heading h3 {
        font-size: 52px;
        line-height: 60px;
        color: #FFF;
        text-align: center
    }

    .scheme5-text p {
        font-weight: 300;
        font-size: 19px;
        line-height: 30px;
        color: #FFF;
        text-align: center
    }

    .scheme6 {
        padding-top: 100px;
        padding-bottom: 0;
        border-bottom: 120px solid #FFF;
        background-color: #000;
        background-image: url(/sites/all/themes/iflexion/images/scheme6-bg.jpg)
    }

    .scheme6--bg-xamarin {
        background-image: url(/sites/all/themes/iflexion/images/scheme6-bg-xamarin.jpg);
        border-bottom: 175px solid #fff
    }

    .scheme6--bg-xamarin .scheme6-img {
        margin-bottom: -175px
    }

    .scheme6 .heading {
        color: #FFF
    }

    .scheme6 .heading-title {
        margin-bottom: 22px
    }

    .scheme6 .heading-description p {
        font-size: 19px;
        line-height: 35px
    }

    .scheme6--page-application-integration .heading-description p,
    .scheme6--page-application-security-1 .heading-description p {
        line-height: 30px
    }

    .scheme6-img {
        display: block;
        max-width: 100%;
        margin: 38px auto -64px
    }

    @media (max-width:1029px) {
        .scheme6--bg-xamarin .scheme6-img,
        .scheme6-img {
            margin-bottom: 0
        }
        .scheme6 {
            padding-bottom: 80px;
            border-bottom: 0
        }
        .scheme6-img {
            margin-top: 0
        }
    }

    @media (max-width:767px) {
        .scheme6 {
            padding-top: 50px;
            padding-bottom: 50px
        }
    }

    .scheme6--type--1.scheme6 {
        background-color: #035b97;
        background-image: url(/sites/all/themes/iflexion/images/scheme6--type--1-bg.jpg);
        border-bottom: 168px solid #FFF
    }

    .scheme6--type--1 .heading-title h3 {
        margin-top: 0;
        margin-bottom: 40px
    }

    .scheme6--type--1 .heading-description p {
        margin-bottom: 36px
    }

    .scheme6--type--1 .scheme6-img {
        margin-top: -15px;
        margin-bottom: -164px
    }

    .scheme6--type--1 a {
        color: #0df;
        text-decoration: none
    }

    @media (max-width:1030px) {
        .scheme6--type--1.scheme6 {
            border-bottom: 50px solid #FFF
        }
    }

    @media (max-width:1029px) {
        .scheme6--type--1.scheme6 {
            border-bottom: 0 solid #FFF
        }
        .scheme6--type--1 .scheme6-img {
            margin-top: 0;
            margin-bottom: 0
        }
    }

    .scheme6--type--2.scheme6 {
        padding-bottom: 100px;
        background-color: #035b97;
        background-image: url(/sites/all/themes/iflexion/images/scheme6--type--2-bg.jpg);
        border-bottom: none
    }

    .scheme6--type--2 .heading-title h3 {
        margin-top: 0;
        margin-bottom: 40px
    }

    .scheme6--type--2 .scheme6-img {
        margin-top: 0;
        margin-bottom: 0
    }

    @media (max-width:767px) {
        .scheme6--type--2.scheme6 {
            padding-bottom: 50px
        }
    }

    .scheme6--type--3.scheme6 {
        padding-bottom: 100px;
        color: #234;
        background-image: none;
        background-color: #FFF;
        border-bottom: none
    }

    .scheme6--type--3.scheme6 .heading {
        color: #234
    }

    .scheme6--type--3.scheme6 .heading-description p {
        margin-bottom: 20px
    }

    .scheme6--type--3 .scheme6-img {
        margin-top: 30px;
        margin-bottom: 0
    }

    @media (max-width:767px) {
        .scheme6--type--3.scheme6 {
            padding-top: 50px;
            padding-bottom: 50px
        }
    }

    .scheme6--type--4.scheme6 {
        color: #FFF;
        background-image: url(/sites/all/themes/iflexion/images/scheme6--type--4.jpg)
    }

    .scheme6--type--4.scheme6 .heading {
        color: #FFF
    }

    .scheme6--type--5.scheme6 {
        color: #FFF;
        background-image: url(/sites/all/themes/iflexion/images/scheme6--type--5.jpg)
    }

    .scheme6--type--5.scheme6 .heading {
        color: #FFF
    }

    .scheme6--type--6 {
        padding-top: 80px
    }

    .scheme6--type--6.scheme6 {
        color: #FFF;
        background-image: url(/sites/all/themes/iflexion/images/scheme6--type--6.jpg)
    }

    .scheme6--type--6.scheme6 .heading {
        color: #FFF
    }

    .scheme6--type--6 .scheme6-img {
        margin-top: 12px
    }

    .scheme6--type--7.scheme6 {
        padding-bottom: 186px;
        color: #FFF;
        background-image: url(/sites/all/themes/iflexion/images/scheme6--type--7.jpg)
    }

    .scheme6--type--7.scheme6 .heading {
        color: #FFF
    }

    .scheme6--type--7 .scheme6-img {
        margin-top: 42px
    }

    @media (max-width:1029px) {
        .scheme6--type--7.scheme6 {
            padding-bottom: 100px
        }
    }

    @media (max-width:767px) {
        .scheme6--type--7.scheme6 {
            padding-bottom: 50px
        }
    }

    .scheme6--page-application-integration .heading-description {
        max-width: 1048px;
        margin-left: auto;
        margin-right: auto
    }

    .scheme6--page-application-security-1 {
        padding-bottom: 119px!important
    }

    .scheme6--page-application-security-1 .heading-title {
        margin-bottom: 20px
    }

    .scheme6--page-application-security-1 .heading-description {
        margin-bottom: 58px
    }

    .scheme6--page-application-security-2 {
        padding-top: 108px
    }

    .scheme6--page-application-security-2 .heading-title h3 {
        line-height: 60px
    }

    .scheme6--page-application-security-2 .heading-description p {
        line-height: 30px
    }

    @media (max-width:767px) {
        .scheme6--page-application-security-1,
        .scheme6--page-application-security-2 {
            padding-bottom: 50px!important
        }
        .scheme6--page-application-security-2 .heading-title h3 {
            line-height: 39px
        }
    }

    .scheme6--page-prototyping .heading-title h3 {
        margin-bottom: 50px;
        line-height: 60px
    }

    @media (max-width:767px) {
        .scheme6--page-prototyping .heading-title h3 {
            line-height: 32px
        }
    }

    .scheme6--page-prototyping .heading-description {
        margin-bottom: 90px
    }

    .scheme6--page-prototyping .heading-description p {
        font-size: 19px;
        line-height: 30px
    }

    .scheme7 {
        padding-top: 104px;
        padding-bottom: 94px;
        background-color: #FFF
    }

    .scheme7 .heading-description p {
        margin-bottom: 104px;
        font-size: 19px;
        line-height: 35px
    }

    .scheme7 a {
        color: #51c336;
        text-decoration: none
    }

    .scheme7-container {
        background-repeat: no-repeat;
        background-position: 50% 44%;
        background-image: url(/sites/all/themes/iflexion/images/scheme7-bg.png)
    }

    .scheme7-row+.scheme7-row {
        margin-top: 102px
    }

    .scheme7-title h4 {
        margin-top: 0;
        margin-bottom: 8px;
        font-weight: 600;
        font-size: 25px;
        line-height: 30px;
        color: #000;
        text-transform: uppercase
    }

    .scheme7-item--1 .scheme7-title h4 {
        color: #255ccc
    }

    .scheme7-item--2 .scheme7-title h4 {
        color: #00ddce
    }

    .scheme7-item--3 .scheme7-title h4 {
        color: #51c336
    }

    .scheme7-item--4 .scheme7-title h4 {
        color: #9d26d5
    }

    .scheme7-item--5 .scheme7-title h4 {
        color: #ff9700
    }

    .scheme7-item--6 .scheme7-title h4 {
        color: #f96058
    }

    .scheme7-text ul {
        margin: 0;
        padding: 0
    }

    .scheme7-text ul li {
        position: relative;
        padding-left: 20px;
        font-size: 15px;
        line-height: 30px
    }

    .scheme7-text ul li:after {
        position: absolute;
        display: block;
        width: 4px;
        height: 4px;
        top: 12px;
        left: 5px;
        background-color: #000;
        border-radius: 50%
    }

    .sphere,
    .sphere-container {
        position: relative
    }

    .scheme7-item--1 .scheme7-text ul li:after {
        background-color: #255ccc
    }

    .scheme7-item--2 .scheme7-text ul li:after {
        background-color: #00ddce
    }

    .scheme7-item--3 .scheme7-text ul li:after {
        background-color: #51c336
    }

    .scheme7-item--4 .scheme7-text ul li:after {
        background-color: #9d26d5
    }

    .scheme7-item--5 .scheme7-text ul li:after {
        background-color: #ff9700
    }

    .scheme7-item--6 .scheme7-text ul li:after {
        background-color: #f96058
    }

    .sphere {
        background-position: 50% 50%;
        padding-top: 100px;
        padding-bottom: 100px
    }

    .sphere .heading-title {
        margin-bottom: 0
    }

    .sphere .heading-description {
        margin-top: 32px;
        margin-bottom: 0!important
    }

    .sphere .container~.sphere-container {
        margin-top: 74px
    }

    .sphere a {
        color: #51c336;
        text-decoration: none
    }

    .sphere-object {
        margin: 0 auto;
        text-align: center
    }

    .sphere-object-img {
        max-width: 100%
    }

    .sphere-item {
        position: absolute
    }

    .sphere-item-title h4 {
        font-size: 1.6em;
        line-height: 1.2em;
        font-weight: 400;
        margin: 0 0 .4em;
        position: relative
    }

    .sphere-item-title h4:before {
        position: absolute;
        top: .3em
    }

    .sphere .title--with-bullet-small h4:before {
        position: absolute;
        top: 0
    }

    @media (max-width:1030px) {
        .sphere-item-title h4:before {
            display: none!important
        }
    }

    .sphere-item-text {
        font-size: .9em;
        line-height: 1.5em
    }

    .sphere-heading h3 {
        margin-top: 0;
        margin-bottom: 0;
        font-weight: 300;
        font-size: 52px;
        line-height: 60px;
        color: #FFF;
        text-align: center
    }

    .sphere-text p {
        font-weight: 300;
        font-size: 19px;
        line-height: 30px;
        color: #FFF;
        text-align: center
    }

    .sphere--items-2 .sphere-item--1 {
        top: 0;
        text-align: right
    }

    .sphere--items-2 .sphere-item--2,
    .sphere--items-3 .sphere-item--1,
    .sphere--items-3 .sphere-item--2 {
        top: 0
    }

    .sphere--items-3 .sphere-item--3 {
        bottom: 0
    }

    .sphere--items-4 .sphere-item--1 {
        top: 0;
        text-align: right
    }

    .sphere--items-4 .sphere-item--2 {
        top: 0
    }

    .sphere--items-4 .sphere-item--3 {
        bottom: 0
    }

    .sphere--items-4 .sphere-item--4 {
        bottom: 0;
        text-align: right
    }

    .sphere--items-4 .sphere-item--2 .sphere-item-title h4:before,
    .sphere--items-4 .sphere-item--3 .sphere-item-title h4:before {
        right: 100%
    }

    .sphere--items-4 .sphere-item--1 .sphere-item-title h4:before,
    .sphere--items-4 .sphere-item--4 .sphere-item-title h4:before {
        left: 100%
    }

    .sphere--items-5 .sphere-item--1 {
        top: 15%;
        text-align: right
    }

    .sphere--items-5 .sphere-item--2 {
        top: 15%;
        text-align: left
    }

    .sphere--items-5 .sphere-item--3 {
        bottom: 32%;
        text-align: left
    }

    .sphere--items-5 .sphere-item--4 {
        bottom: 0;
        text-align: center
    }

    .sphere--items-5 .sphere-item--5 {
        bottom: 32%;
        text-align: right
    }

    .sphere--items-6 .sphere-item--1 {
        top: 0;
        text-align: right
    }

    .sphere--items-6 .sphere-item--2 {
        top: 0
    }

    .sphere--items-6 .sphere-item--3 {
        top: 30%
    }

    .sphere--items-6 .sphere-item--4 {
        top: 60%
    }

    .sphere--items-6 .sphere-item--5 {
        top: 60%;
        text-align: right
    }

    .sphere--items-6 .sphere-item--6 {
        top: 30%;
        text-align: right
    }

    @media (min-width:1030px) {
        .sphere--items-6 .sphere-item--1 ul,
        .sphere--items-6 .sphere-item--5 ul,
        .sphere--items-6 .sphere-item--6 ul,
        .sphere--page-methodology .sphere-item--1 ul,
        .sphere--page-methodology .sphere-item--4 ul {
            text-align: right
        }
        .sphere--page-methodology ul li:before {
            top: .7em
        }
        .sphere--items-6 .sphere-item--1 ul li,
        .sphere--items-6 .sphere-item--5 ul li,
        .sphere--items-6 .sphere-item--6 ul li,
        .sphere--page-methodology .sphere-item--1 ul li,
        .sphere--page-methodology .sphere-item--4 ul li {
            padding: 0 25px 0 0
        }
        .sphere--items-6 .sphere-item--1 ul li:before,
        .sphere--items-6 .sphere-item--5 ul li:before,
        .sphere--items-6 .sphere-item--6 ul li:before,
        .sphere--page-methodology .sphere-item--1 ul li:before,
        .sphere--page-methodology .sphere-item--4 ul li:before {
            left: auto;
            right: 10px
        }
    }

    .sphere--page-php .sphere-item--1,
    .sphere--page-php .sphere-item--4 {
        padding-right: 30px
    }

    .sphere--items-7 .sphere-item--2 .sphere-item-title h4:before,
    .sphere--items-7 .sphere-item--3 .sphere-item-title h4:before,
    .sphere--items-7 .sphere-item--4 .sphere-item-title h4:before,
    .sphere--page-android-1 .sphere-item--2 .sphere-item-title h4:after,
    .sphere--page-android-1 .sphere-item--3 .sphere-item-title h4:after {
        right: 100%
    }

    .sphere--items-7 .sphere-item--1 {
        top: 0;
        text-align: right
    }

    .sphere--items-7 .sphere-item--2 {
        top: 0
    }

    .sphere--items-7 .sphere-item--3 {
        top: 30%
    }

    .sphere--items-7 .sphere-item--4 {
        top: 60%
    }

    .sphere--items-7 .sphere-item--5 {
        top: 80%;
        text-align: center
    }

    .sphere--items-7 .sphere-item--6 {
        top: 60%;
        text-align: right
    }

    .sphere--items-7 .sphere-item--7 {
        top: 30%;
        text-align: right
    }

    .sphere--items-7 .sphere-item--1 .sphere-item-title h4:before,
    .sphere--items-7 .sphere-item--6 .sphere-item-title h4:before,
    .sphere--items-7 .sphere-item--7 .sphere-item-title h4:before {
        left: 100%
    }

    .sphere--items-7 .sphere-item--5 .sphere-item-title h4:before {
        position: static;
        display: block
    }

    @media (max-width:1029px) {
        .sphere {
            padding-bottom: 50px
        }
        .sphere .sphere-object-wrapper {
            margin-bottom: 50px
        }
    }

    @media (max-width:767px) {
        .sphere .sphere-object-wrapper {
            margin-bottom: 30px
        }
    }

    .sphere--page-php {
        padding-bottom: 0;
        background-color: #036
    }

    .sphere--page-php .sphere-item--1,
    .sphere--page-php .sphere-item--2 {
        top: 8%
    }

    .sphere--page-php .sphere-item--3,
    .sphere--page-php .sphere-item--4 {
        bottom: 19%
    }

    .sphere--page-php .sphere-item--2,
    .sphere--page-php .sphere-item--3 {
        padding-left: 30px
    }

    .sphere--page-php .sphere-item-title h4 {
        margin-bottom: 11px;
        font-size: 35px;
        line-height: 40px
    }

    .sphere--page-php .sphere-item-text {
        font-size: 17px;
        line-height: 30px
    }

    @media (max-width:1600px) {
        .sphere--page-php {
            padding-bottom: 150px
        }
        .sphere--page-php .sphere-item--3,
        .sphere--page-php .sphere-item--4 {
            bottom: 0!important
        }
    }

    @media (max-width:1200px) {
        .sphere--page-php {
            padding-bottom: 100px
        }
    }

    .info--page-php-1.info {
        padding-top: 72px
    }

    .sphere--page-php-2 {
        padding-bottom: 65px;
        background-color: #036
    }

    .sphere--page-php-2 .heading-description {
        margin-bottom: 0
    }

    .sphere--page-php-2.sphere--items-2 .sphere-item {
        text-align: center;
        position: relative
    }

    .sphere--page-php-2 .sphere-item-title h4 {
        font-weight: 300;
        text-transform: uppercase;
        font-size: 45px;
        line-height: 55px
    }

    .sphere--page-php-2 .sphere-object-wrapper {
        max-width: 450px;
        margin-left: auto;
        margin-right: auto
    }

    .sphere--page-php-2 .sphere-item-text {
        font-size: 17px;
        line-height: 30px
    }

    @media (max-width:767px) {
        .info--page-php-1.info {
            padding-top: 50px
        }
        .sphere--page-php-2 {
            padding-bottom: 50px
        }
        .sphere--page-php-2 .sphere-item-title h4 {
            font-size: 30px;
            line-height: 34px
        }
    }

    .sphere--page-net-1 .sphere-item--1 .sphere-item-title {
        color: #0cf
    }

    .sphere--page-net-1 .sphere-item--2 .sphere-item-title {
        color: #51c435
    }

    .sphere--page-net-1 .sphere-item-title h4 {
        font-size: 45px
    }

    .sphere--page-net-1 .heading-description {
        margin-top: 23px
    }

    .sphere--page-net-1 .container~.sphere-container {
        margin-top: 131px
    }

    @media (max-width:767px) {
        .sphere--page-net-1 .sphere-item-title h4 {
            font-size: 30px;
            line-height: 34px
        }
        .sphere--page-net-1 .container~.sphere-container {
            margin-top: 40px
        }
    }

    @media (min-width:1600px) {
        .sphere--page-php-2.sphere--items-2 .sphere-item {
            top: -45px
        }
        .sphere--page-net-1.sphere--items-2 .sphere-item {
            margin-top: 60px
        }
    }

    .sphere--page-net-2.sphere--items-7 .sphere-item--1,
    .sphere--page-net-2.sphere--items-7 .sphere-item--6,
    .sphere--page-net-2.sphere--items-7 .sphere-item--7 {
        text-align: left
    }

    .sphere--page-net-2.sphere--items-7 .sphere-item--1,
    .sphere--page-net-2.sphere--items-7 .sphere-item--2 {
        top: 2%
    }

    .sphere--page-net-2 ul li {
        font-size: 15px
    }

    .sphere--page-net-2 .sphere-item-title h4 {
        font-weight: 500;
        font-size: 30px;
        text-transform: uppercase
    }

    .sphere--page-net-2 .sphere-object {
        position: relative;
        top: -25px
    }

    @media (min-width:1030px) and (max-width:1440px) {
        .sphere--page-net-2 .sphere-item ul li {
            font-size: 12px;
            line-height: 18px
        }
        .sphere--page-net-2 .sphere-object {
            top: -20px
        }
    }

    .sphere--page-elearning {
        padding-bottom: 110px;
        background-size: auto;
        background-color: #030403
    }

    .sphere--page-elearning .sphere-object {
        height: 1000px
    }

    .sphere--page-elearning .sphere-object-wrapper {
        position: absolute;
        width: 460px;
        top: 350px;
        left: 50%;
        margin-left: -230px
    }

    .sphere--page-elearning .sphere-item-title {
        color: #0cf
    }

    .sphere--page-elearning .sphere-item-title h4 {
        font-size: 30px
    }

    @media (max-width:1600px) {
        .sphere--page-elearning {
            background-size: 120%
        }
    }

    @media (max-width:1300px) {
        .sphere--page-elearning .sphere-object-wrapper {
            width: 420px;
            top: 300px;
            margin-left: -210px
        }
    }

    @media (max-width:1200px) {
        .sphere--page-elearning .sphere-object-wrapper {
            top: 340px
        }
        .sphere--page-elearning .sphere-heading h3 {
            font-size: 32px;
            line-height: 40px
        }
    }

    @media (max-width:1100px) {
        .sphere--page-elearning {
            background-size: 130%
        }
        .sphere--page-elearning .sphere-object-wrapper {
            top: 320px;
            width: 340px;
            margin-left: -170px
        }
    }

    @media (max-width:1029px) {
        .sphere--page-elearning .sphere-heading,
        .sphere--page-php-2 .heading-description {
            margin-bottom: 50px
        }
        .sphere--page-php .sphere-item--3,
        .sphere--page-php .sphere-item--4 {
            bottom: auto!important
        }
        .sphere--page-php .sphere-item--1,
        .sphere--page-php .sphere-item--2,
        .sphere--page-php .sphere-item--3,
        .sphere--page-php .sphere-item--4 {
            padding-left: 15px;
            padding-right: 15px
        }
        .sphere--page-elearning {
            background: #000!important
        }
        .sphere--page-elearning .sphere-heading h3 {
            font-size: 52px;
            line-height: 55px
        }
        .sphere--page-elearning .sphere-object {
            height: auto
        }
        .sphere--page-elearning .sphere-object-wrapper {
            position: relative;
            width: 100%;
            left: 0;
            margin-left: 0;
            top: auto
        }
    }

    @media (max-width:767px) {
        .sphere--page-elearning {
            padding-bottom: 50px
        }
        .sphere--page-elearning .sphere-heading h3 {
            font-size: 32px;
            line-height: 39px
        }
    }

    .sphere--page-android-1 {
        padding-bottom: 0
    }

    .sphere--page-android-1 .sphere-item-title h4 {
        font-size: 35px;
        line-height: 40px
    }

    .sphere--page-android-1 .sphere-item-title h4:before {
        top: 13px
    }

    .sphere--page-android-1 .sphere-item-title h4:after {
        content: "";
        display: block;
        width: 50px;
        height: 1px;
        border-top: 1px solid #e0e0e0;
        position: absolute;
        top: .6em;
        margin: 0 50px
    }

    .sphere--page-android-1 .sphere-object-wrapper {
        padding-bottom: 174px
    }

    .sphere--page-android-1 .sphere-item--1,
    .sphere--page-android-1 .sphere-item--2 {
        top: 1%
    }

    .sphere--page-android-1 .sphere-item--3,
    .sphere--page-android-1 .sphere-item--4 {
        bottom: auto;
        top: 39%
    }

    @media (max-width:1900px) {
        .sphere--page-android-1 .sphere-object-wrapper {
            padding-bottom: 250px
        }
        .sphere--page-android-1 .sphere-item--3,
        .sphere--page-android-1 .sphere-item--4 {
            top: 50%
        }
    }

    .sphere--page-android-1 .sphere-item--1 .sphere-item-title h4:after,
    .sphere--page-android-1 .sphere-item--2 .sphere-item-title h4:after {
        width: 70px
    }

    .sphere--page-android-1 .sphere-item--1 .sphere-item-title h4:after,
    .sphere--page-android-1 .sphere-item--4 .sphere-item-title h4:after {
        left: 100%
    }

    .sphere--page-android-1 .sphere-item--1 .sphere-item-title h4:before {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAUCAYAAABiS3YzAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAgZJREFUeNqklc1L1FEUhq8z5jZIBbVcaIyKH2AtaxBDsJKWDrkQBaW1qAvFPyBt0ddaBQ034laCFmISbQazFPILjZSshRG0dHSs98Bzh0HnpyMeeDhz7z3nnXvPvXMmJ9K+6AKsQjwWLXy+Jv6ITfFWTPP5lOVkEC0Qz0SHyHXBdiTeiAHxO30hdCKwTsRFlzgW4+KhKLQN4G08xnoX8XVBO42IjyS+F0/E1hk7vYl4o9gXUV8Ov9MwNTLBWXEfwVoxIXbFAX6CnW0TN0veNDopUavfLfFNtIuE6BFfRKcoFXl4G39mPUG85dWzlhLtxw+JvyImXvpvzmBh1mPEDzHf52saoRa/xA1xhW8uceeb5ZSJQ/FDFItK2+ldAha40XtZCjpEmshbYO6OiRYx2MFXu4tZFf47vihEsR3Hvozl4RMm+pNBKX71gmLr+Ou+zia6xCDKa5jnAlyWFzVHXgNzn0Lc/FeKHuOR2xv8l4VoD/Gt5NspN/07fYF/Kq6KGdErkgFiSdZniB9m/nn6458Uy6JcTFH01+I2nWiPrrTH2OZfETdF3jI6qdaWpHd+EI/EO9EtVvxPL4OV08V8Q2nzJ0tvfRuimddggWtiVDwQ+cTk00RGWW/ksprTXkHGJm0dZ4Qdhs+4pCTHHWSngU3aEWBHr+EfIE7TcPg48zXE7Z8U+C/AAFF5gJz2hrcTAAAAAElFTkSuQmCC)
    }

    .sphere--page-android-1 .sphere-item--2 .sphere-item-title h4:before {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAUCAYAAABiS3YzAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAfFJREFUeNqklMsrRHEUx+94bZVHxmuBxkheYYVEFiI7JrsRsp6wIH+Ax2LI3nsn2WEnJtl4hSIm72SSR83SeIzv4fvTbcYdhlOfzv3dOb8z556XSdvyawaSDZpBPZ/jwCNwgyUwy+cgMX3jNAEMATuI0ozlBcyAHnCv/yEiwDAfbIA28AbGQR1I/AjgU8t5jL+30T7fKFILWOfFVdABTkJEmkXnVeAOVKh0qEgjmSNxuABq6TAPTIEr8EQ9xchOabfAe7P08xVpK5gAZ6AYeIEDOJVhgLyCbjAKYsEOyATt4kdF2k3dR4c2MGLgUH3ZCO28vCfSpSK1MBcekAaiGXGK9rPInQzwDK5BMrBKpOU0cLGi1b90qNFJDe+5+K5MnJp5uKTO1cKTHOoLarM49fEQrf1PYqh94vSGh3TqwzCdHVGnqjxLoWSujwMKdc58/blQUvkDvrCxyaVH/b9w6qB9E+/LV7pVnw5T97OZ50Anm1wzaP5O2on9AN879RMlzbwNCjl2jSxgAQdD2iYJ3IJlXt5nceZBA9gDJfKH+oViBWu6hdLOITCSTG4xtVAqVdEC92kRWGTz+7gvJZJN8ADiQSlzaGekHi7y3VBLWiIdBC0hZl/ldRr0MtKQm1+fjlaOrZUF8bL9VsAkn4PkXYABAOA6iPfoBY38AAAAAElFTkSuQmCC)
    }

    .sphere--page-android-1 .sphere-item--3 .sphere-item-title h4:before {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAUCAYAAABiS3YzAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAgBJREFUeNqklc8vXVEQx4+nfVsJlfi58MSP+JGUpYoQiV/rio2okG4rakH6BygLylqbIDZiK3aCiM1LlC5KKyo01S40Ekv04TvJ58rN67s8Mcknc885M3PnzDl3bsp5d4cLkGJhi208p4tTsSeWxDzP/0lKgqDPxKjoEk9csPwTs2JQ/PUvhOIMK0VU9Igr8Um0ikxLAG3jj6z3YF8ZlGmR2MBxVbwW+3dkWkjwenEiar1yeJmmUiMLuCiaCVghpsVPcY6eJrMf2C3iN0+c26BWvypxIDrFhXgjtsUrkS/CaBtviT7sOvF7ztpt0AH0O3Em2sWE9+YEYvMfsDvDz+StV9MiavFH5ImnvDnH3S/mUyAuxS+RLUos0xcYrHGiDUkGdARpxG+NuRoLmsXgCF3mHial6EN0VohiO7b9GAmjLyzobwb56J0HBvuGzvXqbEE/M6jlNqxwAC7Jg1rGr465zRAn/5Wit3PJ7Q5eJxG0D/uX+Nsu97x7Oo4eFmliQfSLWECwGOsL2L9nfsx/+WfEFxERcxR9UlTTiY7pSseMq/k4wthH8J+JbyglYt3XUHr5CIIkQhfzGkqdd2j+1vddNHEbzHBXTIkWkYFNBk1kivV6DqvJdwsSNmnLdITmkHpHpjG2O0SmgU3aYWBbL+cPEKVpOHSU+XLsTuID3AgwAESdgknTxlvCAAAAAElFTkSuQmCC)
    }

    .sphere--page-android-1 .sphere-item--4 .sphere-item-title h4:before {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAUCAYAAABiS3YzAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAg1JREFUeNqklD1IW1EUx19iq6NQLfiBg4Kh+AHaoQQVUQS10kVQ7CAV1K6KdSmOHaoOapxtRcVFsoroIFbcBFsVUltpiwo2g1LIqJjW/4HfC8EmMeKBH+fde8/5v3vvO+942reeOUnMJ7pEG8+PxB9xKFbEEs//mTfBXK74KELinfAj6OD9zIeIy71NtFJsi17xl6Tn4rHw4G38gfVe4iuTiZaKdVEsPoly0S9WxTkx54xfizLiisnz3RTN4I5sJ8uiRfwQFWJOnIgL/Bw7+0ncMnlL6MREX4lq8Ut0i0sxIHZFjygSmXgbfxGDxHWTV8VaTHQYPyIiolME3DcnMJufIi5CntkbV7SU+wuLoMhC0OOkNlufJj5Ivun4TLSWoE2+aKMocNKzfNFE3iZzNSaax+AYX+bczZ7gj/B5Xi7b7KFzP8vEX5robwZF+K93FPuGL8SHTfQzgzo+3AaXno6FKXzLq2dux0tTCHHpnRS51eC/NEQHie8g30556NbpJP69yKZEhkQ0iViU9SDxo8xPxBf/vNgTJWKRS7cafCoWxKm4wi8wHyBukbw9dJwHcW+23rklXog10Sf23V8vgZXQxRrEmXjpniy+S30XzVSDBR6IGdEqcojJoYnMsN7Ax2qOq4LYTl3bpTGMscN+SHavs+ItO03Z+c84uv3H4zThCGsRxuOs990UNLsWYAAcVn55NjxM+AAAAABJRU5ErkJggg==)
    }

    .sphere--page-android-2 {
        padding-bottom: 120px
    }

    .sphere--page-android-2 .heading {
        margin-bottom: 0
    }

    .sphere--page-android-2.sphere--items-6 .sphere-item--3,
    .sphere--page-android-2.sphere--items-6 .sphere-item--6 {
        top: 36%
    }

    .sphere--page-android-2.sphere--items-6 .sphere-item--4,
    .sphere--page-android-2.sphere--items-6 .sphere-item--5 {
        top: 72%
    }

    .sphere--page-android-2 .lists--bullets ul li:before {
        top: .6em
    }

    .sphere--page-android-2 ul li+li {
        margin-top: 5px
    }

    .sphere--page-android-2 .heading-description {
        max-width: 1052px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 40px
    }

    .sphere--page-android-2 .heading-description p {
        font-size: 25px;
        line-height: 45px
    }

    .sphere--page-android-2 .sphere-item-title h4 {
        font-size: 30px;
        text-transform: uppercase
    }

    .sphere--page-android-2 li {
        font-size: 15px
    }

    .sphere--page-android-2 .sphere-item--1 li,
    .sphere--page-android-2 .sphere-item--5 li,
    .sphere--page-android-2 .sphere-item--6 li {
        padding-right: 17px!important
    }

    .sphere--page-android-2 .sphere-item--2 li,
    .sphere--page-android-2 .sphere-item--3 li,
    .sphere--page-android-2 .sphere-item--4 li {
        padding-left: 17px
    }

    .sphere--page-android-2 .sphere-item--1 li:before,
    .sphere--page-android-2 .sphere-item--5 li:before,
    .sphere--page-android-2 .sphere-item--6 li:before {
        right: 1px!important
    }

    .sphere--page-android-2 .sphere-item--2 li:before,
    .sphere--page-android-2 .sphere-item--3 li:before,
    .sphere--page-android-2 .sphere-item--4 li:before {
        left: 1px
    }

    @media (max-width:1200px) {
        .sphere--page-android-1 .sphere-object-wrapper {
            padding-bottom: 350px
        }
    }

    @media (max-width:1029px) {
        .sphere--page-android-2 {
            padding-bottom: 50px
        }
        .sphere--page-android-1 .sphere-object-wrapper {
            margin-bottom: 50px;
            padding-bottom: 0
        }
    }

    @media (max-width:767px) {
        .sphere--page-android-2 {
            padding-bottom: 50px
        }
        .sphere--page-android-1 .sphere-object-wrapper {
            margin-bottom: 30px
        }
    }

    .sphere--page-android-1 .sphere-item .sphere-item-text {
        font-size: 17px;
        line-height: 30px
    }

    .sphere--win-1 {
        padding-top: 80px
    }

    .sphere--win-1 .heading {
        margin-bottom: 0
    }

    .sphere--win-1 .heading-description {
        max-width: 1236px;
        margin-left: auto;
        margin-right: auto
    }

    .sphere--win-1 .heading-description p {
        font-size: 25px;
        line-height: 38px
    }

    .sphere--win-1 .sphere-item {
        top: 20%
    }

    .sphere--win-1 .sphere-item-text li {
        margin-bottom: 60px;
        font-size: 1.1em;
        padding-left: 50px;
        text-align: left
    }

    @media (min-width:1030px) {
        .sphere--win-1 .sphere-item--1 .sphere-item-text li {
            text-align: right;
            padding: 0 50px 0 0
        }
        .sphere--win-1 .sphere-item--1 .sphere-item-text li:before {
            left: auto;
            right: 0
        }
    }

    .sphere--appdev-1 .sphere-item,
    .sphere--appdev-1 .sphere-item ul,
    .sphere--win-2 .sphere-item .sphere-item-title {
        text-align: left
    }

    @media (max-width:1030px) {
        .sphere--page-android-1 .sphere-item .sphere-item-title h4:after,
        .sphere--win-1 .sphere-object-img {
            display: none
        }
    }

    @media (min-width:1440px) {
        .sphere--win-1 .sphere-item-text li:after {
            content: "";
            display: block;
            width: 80px;
            height: 1px;
            border-top: 1px solid rgba(0, 0, 0, .1);
            position: absolute;
            top: 50%;
            right: 100%;
            margin: 3
        }
        .sphere--win-1 .sphere-item--1 .sphere-item-text li:after {
            right: auto;
            left: 100%
        }
    }

    .sphere--ios .sphere-item--2 .sphere-item-title h4:before,
    .sphere--ios .sphere-item--3 .sphere-item-title h4:before,
    .sphere--ios .sphere-item--4 .sphere-item-title h4:before,
    .sphere--win-2 .sphere-item--2 .sphere-item-title h4:after,
    .sphere--win-2 .sphere-item--3 .sphere-item-title h4:after {
        right: 100%
    }

    @media (max-width:767px) {
        .sphere--win-1 .sphere-item:first-child,
        .sphere--win-1 .sphere-item:last-child .sphere-item-text li:last-child {
            margin-bottom: 0
        }
    }

    .sphere--win-2 .sphere-item--1,
    .sphere--win-2 .sphere-item--2 {
        top: 10%
    }

    .sphere--win-2 .sphere-item--3,
    .sphere--win-2 .sphere-item--4 {
        top: 60%
    }

    @media (max-width:1030px) {
        .sphere--win-2 .sphere-item .sphere-item-title {
            font-size: 14px
        }
        .sphere--win-2 .sphere-object-img {
            display: none
        }
    }

    .sphere--win-2 .sphere-item-title h4:after {
        content: "";
        display: none;
        width: 100px;
        height: 1px;
        border-top: 1px solid #e0e0e0;
        position: absolute;
        top: .6em;
        margin: 0 50px
    }

    .sphere--win-2 .sphere-item--1 .sphere-item-title h4:after,
    .sphere--win-2 .sphere-item--4 .sphere-item-title h4:after {
        left: 100%
    }

    @media (min-width:1600px) {
        .sphere--win-2 .sphere-item-title h4:after {
            display: block
        }
        .sphere--win-2 .sphere-item--1 .sphere-item-title,
        .sphere--win-2 .sphere-item--4 .sphere-item-title {
            width: 70%
        }
        .sphere--win-2 .sphere-item--1 .sphere-item-title h4:after,
        .sphere--win-2 .sphere-item--4 .sphere-item-title h4:after {
            width: 140px
        }
        .sphere--win-2 .sphere-item--1,
        .sphere--win-2 .sphere-item--4 {
            padding-left: 40px
        }
    }

    @media (max-width:1029px) {
        .sphere--win-2 .heading {
            margin-bottom: 0
        }
    }

    .sphere--python-1 {
        padding-bottom: 50px
    }

    .sphere--python-1 .heading {
        margin-bottom: 50px
    }

    .sphere--python-1 .sphere-object {
        position: relative
    }

    .sphere--python-1 .sphere-object-overlay {
        display: block;
        width: 240px;
        height: 240px;
        position: absolute;
        border-radius: 120px;
        top: 50%;
        left: 50%;
        margin: -124px 0 0 -120px;
        background: 50% 50% no-repeat;
        -webkit-transition: -webkit-transform 1s ease;
        transition: -webkit-transform 1s ease;
        transition: transform 1s ease;
        transition: transform 1s ease, -webkit-transform 1s ease;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0)
    }

    .sphere--python-1:hover .sphere-object-overlay {
        -webkit-transform: rotate(-40deg);
        -ms-transform: rotate(-40deg);
        transform: rotate(-40deg);
        -webkit-transition: -webkit-transform 1s ease;
        transition: -webkit-transform 1s ease;
        transition: transform 1s ease;
        transition: transform 1s ease, -webkit-transform 1s ease
    }

    .sphere--python-1 .sphere-object-overlay:hover {
        -webkit-transform: rotate(140deg);
        -ms-transform: rotate(140deg);
        transform: rotate(140deg);
        -webkit-transition: -webkit-transform 1s ease;
        transition: -webkit-transform 1s ease;
        transition: transform 1s ease;
        transition: transform 1s ease, -webkit-transform 1s ease
    }

    @-webkit-keyframes knob {
        0% {
            -webkit-transform: rotate(-100deg);
            transform: rotate(-100deg)
        }
        100% {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg)
        }
    }

    @keyframes knob {
        0% {
            -webkit-transform: rotate(-100deg);
            transform: rotate(-100deg)
        }
        100% {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg)
        }
    }

    .sphere--python-3 .heading {
        margin-bottom: 0
    }

    .sphere--python-3 .sphere-object-img {
        height: 412px
    }

    .sphere--python-3 .sphere-item-text {
        font-size: 17px;
        line-height: 30px
    }

    .sphere--python-3 .sphere-item-title h4 {
        margin-bottom: 22px;
        font-size: 35px;
        line-height: 40px
    }

    .sphere--python-3 .sphere-item--3,
    .sphere--python-3 .sphere-item--4 {
        bottom: 3%
    }

    .sphere--python-3 .sphere-item-title h4:before {
        top: 0;
        margin: 0 .8em;
        font-size: 1.3em
    }

    .sphere--ios .heading,
    .sphere--python-2 .heading {
        margin-bottom: 0
    }

    @media (max-width:1200px) {
        .sphere--python-3 .sphere-object-img {
            height: 350px
        }
    }

    @media (max-width:1029px) {
        .sphere--python-3 .sphere-item {
            height: auto!important
        }
    }

    .sphere--python-2 {
        padding-bottom: 60px
    }

    .sphere--python-2 .container~.sphere-container {
        margin-top: 8px
    }

    @media (max-width:1199px) {
        .sphere--python-1 .sphere-item,
        .sphere--python-2 .sphere-item {
            position: static
        }
    }

    @media (min-width:1440px) {
        .sphere--python-1 .sphere-item,
        .sphere--python-2 .sphere-item {
            margin-top: 50px
        }
    }

    @media (min-width:1600px) {
        .sphere--python-1 .sphere-item,
        .sphere--python-2 .sphere-item {
            margin-top: 100px
        }
        .sphere--python-1 .sphere-item--1,
        .sphere--python-2 .sphere-item--1 {
            margin-right: -50px
        }
        .sphere--python-1 .sphere-item--2,
        .sphere--python-2 .sphere-item--2 {
            margin-left: -50px
        }
    }

    .sphere--ios {
        counter-reset: ios-sphere-counter;
        padding-bottom: 140px
    }

    .sphere--ios .sphere-item {
        counter-increment: ios-sphere-counter
    }

    .sphere--ios .sphere-item-title h4 {
        font-weight: 400;
        font-size: 1.7em;
        text-transform: uppercase
    }

    .sphere--ios .sphere-item-title h4:before {
        content: counter(ios-sphere-counter, decimal-leading-zero);
        font-size: 47px;
        font-weight: 400;
        margin: 0 .5em;
        opacity: .25;
        height: 1em
    }

    .sphere--ios .heading-description p {
        line-height: 45px
    }

    .sphere--ios .sphere-item-text {
        line-height: 25px
    }

    .sphere--ios .sphere-item--1 .sphere-item-title h4:before,
    .sphere--ios .sphere-item--6 .sphere-item-title h4:before,
    .sphere--ios .sphere-item--7 .sphere-item-title h4:before {
        left: 100%
    }

    .sphere--ios .sphere-item--5 {
        top: 77%
    }

    @media (min-width:1030px) and (max-width:1280px) {
        .sphere--ios .sphere-object {
            min-height: 700px;
            padding-top: 100px
        }
        .sphere--ios .sphere-item .sphere-item-text {
            font-size: .9em;
            line-height: normal
        }
        .sphere--ios .sphere-item--3,
        .sphere--ios .sphere-item--7 {
            top: 40%
        }
        .sphere--ios .sphere-item--4,
        .sphere--ios .sphere-item--5,
        .sphere--ios .sphere-item--6 {
            top: 80%
        }
    }

    @media (min-width:1280px) {
        .sphere--ios .sphere-object {
            min-height: 780px
        }
    }

    @media (min-width:1440px) {
        .sphere--ios .sphere-object {
            min-height: 780px
        }
        .sphere--ios .sphere-item>* {
            position: relative
        }
        .sphere--ios .sphere-item--1>* {
            right: 20px
        }
        .sphere--ios .sphere-item--2>* {
            left: 20px
        }
        .sphere--ios .sphere-item--3>* {
            left: 120px
        }
        .sphere--ios .sphere-item--4>* {
            left: 50px
        }
        .sphere--ios .sphere-item--5>* {
            width: 80%;
            margin: 0 auto
        }
        .sphere--ios .sphere-item--6>* {
            right: 50px
        }
        .sphere--ios .sphere-item--7>* {
            right: 120px
        }
    }

    .sphere--appdev-1 {
        padding-bottom: 150px
    }

    .sphere--appdev-1 .sphere-item-title h4 {
        font-size: 1.4em
    }

    .sphere--appdev-1 .sphere-item ul li {
        padding: 0 0 0 25px
    }

    .sphere--appdev-1 .sphere-item ul li:before {
        left: 10px;
        right: auto
    }

    .sphere--appdev-1 .sphere-item--1,
    .sphere--appdev-1 .sphere-item--2 {
        top: 0
    }

    .sphere--appdev-1 .sphere-item--3,
    .sphere--appdev-1 .sphere-item--6 {
        top: 40%
    }

    .sphere--appdev-1 .sphere-item--4,
    .sphere--appdev-1 .sphere-item--5 {
        top: 80%
    }

    .sphere--appdev-1 .lists--bullets ul li:before {
        top: .6em
    }

    @media (min-width:1030px) and (max-width:1280px) {
        .sphere--appdev-1 .sphere-object {
            padding-top: 100px
        }
    }

    @media (max-width:1029px) {
        .sphere--appdev-1 {
            padding-bottom: 50px
        }
    }

    .sphere--webappdev-1 .sphere-object-wrapper {
        position: relative
    }

    .sphere--webappdev-1 .sphere-object-wrapper:after {
        content: '';
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        background: url(/sites/all/themes/iflexion/images/vis-sphere-webappdev-1-arrow.png) 50% 0 no-repeat;
        background-size: contain;
        -webkit-transform: rotate(0);
        -ms-transform: rotate(0);
        transform: rotate(0);
        -webkit-animation: webappdev-arrow;
        animation: webappdev-arrow;
        -webkit-animation-direction: alternate;
        animation-direction: alternate;
        -webkit-animation-duration: 5s;
        animation-duration: 5s;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite
    }

    .sphere--webappdev-1.sphere--items-4 .sphere-item--3,
    .sphere--webappdev-1.sphere--items-4 .sphere-item--4 {
        top: 70%;
        bottom: auto
    }

    @-webkit-keyframes webappdev-arrow {
        0% {
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }
        5% {
            -webkit-transform: rotate(3deg);
            transform: rotate(3deg)
        }
        10%,
        85% {
            -webkit-transform: rotate(2deg);
            transform: rotate(2deg)
        }
        25% {
            -webkit-transform: rotate(6deg);
            transform: rotate(6deg)
        }
        45% {
            -webkit-transform: rotate(-7deg);
            transform: rotate(-7deg)
        }
        60% {
            -webkit-transform: rotate(10deg);
            transform: rotate(10deg)
        }
        100% {
            -webkit-transform: rotate(5deg);
            transform: rotate(5deg)
        }
    }

    @keyframes webappdev-arrow {
        0% {
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }
        5% {
            -webkit-transform: rotate(3deg);
            transform: rotate(3deg)
        }
        10%,
        85% {
            -webkit-transform: rotate(2deg);
            transform: rotate(2deg)
        }
        25% {
            -webkit-transform: rotate(6deg);
            transform: rotate(6deg)
        }
        45% {
            -webkit-transform: rotate(-7deg);
            transform: rotate(-7deg)
        }
        60% {
            -webkit-transform: rotate(10deg);
            transform: rotate(10deg)
        }
        100% {
            -webkit-transform: rotate(5deg);
            transform: rotate(5deg)
        }
    }

    @media (min-width:1030px) {
        .sphere--appdev-1 .sphere-object {
            min-height: 400px;
            margin-bottom: 100px
        }
        .sphere--webappdev-1 .sphere-object-wrapper {
            margin-bottom: 100px
        }
    }

    @media (min-width:1440px) {
        .sphere--webappdev-1 .sphere-object-wrapper {
            margin-bottom: 0
        }
        .sphere--webappdev-1.sphere--items-4 .sphere-item--3,
        .sphere--webappdev-1.sphere--items-4 .sphere-item--4 {
            top: 50%;
            bottom: auto
        }
        .sphere--webappdev-1.sphere--items-4 .sphere-item--1,
        .sphere--webappdev-1.sphere--items-4 .sphere-item--4 {
            margin-right: -2%
        }
        .sphere--webappdev-1.sphere--items-4 .sphere-item--2,
        .sphere--webappdev-1.sphere--items-4 .sphere-item--3 {
            margin-left: -2%
        }
    }

    @media (min-width:1600px) {
        .sphere--webappdev-1.sphere--items-4 .sphere-item--1,
        .sphere--webappdev-1.sphere--items-4 .sphere-item--4 {
            margin-right: -3%
        }
        .sphere--webappdev-1.sphere--items-4 .sphere-item--2,
        .sphere--webappdev-1.sphere--items-4 .sphere-item--3 {
            margin-left: -3%
        }
    }

    @media (max-width:1440px) {
        .sphere--webappdev-1 {
            padding-bottom: 200px
        }
        .sphere--webappdev-1 .sphere-object {
            padding-top: 150px
        }
    }

    @media (max-width:1200px) {
        .sphere--webappdev-1 {
            padding-bottom: 100px
        }
    }

    .sphere--ruby-1 {
        max-width: 1920px;
        margin-left: auto;
        margin-right: auto
    }

    .sphere--ruby-1 .heading,
    .sphere--ruby-2 .heading {
        margin: 0
    }

    .sphere--ruby-2 {
        padding-bottom: 47px;
        text-shadow: 0 0 7px rgba(0, 0, 0, .7)
    }

    .sphere--ruby-2 .sphere-item-title h4 {
        margin-bottom: 16px;
        font-weight: 500;
        font-size: 25px;
        text-transform: uppercase
    }

    .sphere--ruby-2 .sphere-item-title h4:before {
        top: 5px;
        margin: 0 21px
    }

    .sphere--ruby-2 .sphere-item-title h4:after {
        margin: 0 40px!important
    }

    .sphere--ruby-2 ul li+li {
        margin-top: 15px
    }

    .sphere--ruby-2 ul li:before {
        top: .5em
    }

    .sphere--ruby-2 .sphere-item--1 .sphere-item-text {
        display: inline-block;
        vertical-align: top;
        padding-right: 80px
    }

    .sphere--ruby-2 .sphere-item--1 .sphere-item-text ul li {
        padding-right: 0;
        text-align: left
    }

    @media (max-width:1299px) {
        .sphere--ruby-2 .sphere-item--1 .sphere-item-text {
            padding-left: 20px
        }
    }

    .sphere--ruby-2 .sphere-item--1 .sphere-item-text ul li:before {
        left: -13px;
        right: auto
    }

    @media (max-width:1029px) {
        .sphere--webappdev-1 .sphere-object {
            padding-top: 0
        }
        .sphere--ruby-2 .sphere-item--1 .sphere-item-text {
            padding-left: 0;
            padding-right: 0
        }
        .sphere--ruby-2 .sphere-item--1 .sphere-item-text ul li:before {
            left: 10px
        }
    }

    .sphere--ruby-1 .sphere-item {
        top: 30%
    }

    .sphere--ruby-1 .sphere-item h4 {
        font-weight: 300;
        font-size: 35px;
        line-height: 55px
    }

    @media (max-width:1440px) {
        .sphere--ruby-1 .sphere-item {
            top: 0
        }
    }

    @media (max-width:1199px) {
        .sphere--ruby-1 .sphere-item {
            position: static
        }
    }

    @media (min-width:1030px) {
        .sphere--ruby-2 .sphere-object {
            padding-bottom: 200px
        }
        .sphere--ruby-2 .sphere-item--1,
        .sphere--ruby-2 .sphere-item--2 {
            top: 10%
        }
        .sphere--ruby-2 .sphere-item--3 {
            top: 80%;
            text-align: center
        }
        .sphere--ruby-2 .sphere-item--3 ul {
            text-align: center
        }
        .sphere--ruby-2 .sphere-item--3 ul li {
            display: inline-block
        }
        .sphere--ruby-2 .sphere-item--1 {
            text-align: right
        }
        .sphere--ruby-2 .sphere-item--1 ul li {
            padding-left: 0;
            padding-right: 25px;
            text-align: right
        }
        .sphere--ruby-2 .sphere-item--1 ul li:before {
            left: auto;
            right: 10px
        }
        .sphere--ruby-2 .sphere-item--2 h4:after,
        .sphere--ruby-2 .sphere-item--2 h4:before {
            right: 100%
        }
        .sphere--ruby-2 .sphere-item h4:after {
            content: '';
            display: block;
            position: absolute;
            border: 0 solid rgba(255, 255, 255, .1)
        }
        .sphere--ruby-2 .sphere-item--1 h4:after,
        .sphere--ruby-2 .sphere-item--2 h4:after {
            width: 60px;
            height: 1px;
            border-width: 1px 0 0;
            margin: 0 51px;
            top: 16px
        }
        .sphere--ruby-2 .sphere-item--3 h4:after {
            width: 1px;
            height: 30px;
            border-width: 0 0 0 1px;
            bottom: 100%;
            left: 50%;
            margin-bottom: 30px!important;
            margin-left: auto!important;
            margin-right: auto!important
        }
        .sphere--ruby-2 .sphere-item--1 h4:after,
        .sphere--ruby-2 .sphere-item--1 h4:before {
            left: 100%
        }
        .sphere--ruby-2 .sphere-item--3 h4:before {
            display: block;
            background-position: 50% 50%;
            width: 100%;
            margin: 0 0 10px;
            bottom: 100%;
            top: auto;
            height: 21px
        }
        .sphere--backend-1 {
            padding-bottom: 150px
        }
        .sphere--backend-1 .sphere-object {
            padding: 100px 0
        }
        .sphere--backend-1 .sphere-item--1,
        .sphere--backend-1 .sphere-item--5,
        .sphere--backend-1 .sphere-item--6 {
            padding-right: 60px
        }
        .sphere--backend-1 .sphere-item--2,
        .sphere--backend-1 .sphere-item--3,
        .sphere--backend-1 .sphere-item--4 {
            padding-left: 60px
        }
    }

    .sphere--backend-1 .sphere-item-title h4 {
        font-size: 35px
    }

    .sphere--backend-1 .sphere-item--1 h4:before,
    .sphere--backend-1 .sphere-item--5 h4:before,
    .sphere--backend-1 .sphere-item--6 h4:before {
        left: 100%;
        top: 14px
    }

    .sphere--backend-1 .sphere-item--2 h4:before,
    .sphere--backend-1 .sphere-item--3 h4:before,
    .sphere--backend-1 .sphere-item--4 h4:before {
        right: 100%;
        top: 14px
    }

    .sphere--backend-1 .sphere-item--1,
    .sphere--backend-1 .sphere-item--2 {
        top: 5%
    }

    .sphere--backend-1 .sphere-item--3,
    .sphere--backend-1 .sphere-item--6 {
        top: 46.5%
    }

    .sphere--backend-1 .sphere-item--4,
    .sphere--backend-1 .sphere-item--5 {
        top: 85%
    }

    @media (min-width:1030px) and (max-width:1280px) {
        .sphere--backend-1 .sphere-item {
            font-size: .9em;
            line-height: normal
        }
    }

    .sphere--backend-2 .sphere-item-title h4,
    .sphere--backend-3 .sphere-item h4 {
        font-size: 35px
    }

    .sphere--backend-2 .sphere-item h4:before {
        display: none
    }

    .sphere--backend-2 .sphere-item--1,
    .sphere--backend-2 .sphere-item--2 {
        top: 20%
    }

    .sphere--backend-2 .sphere-item--3,
    .sphere--backend-2 .sphere-item--4 {
        top: 70%;
        bottom: 0
    }

    .sphere--backend-2 .sphere-item-title h4:before {
        margin: 0 38px;
        z-index: 2
    }

    @media (min-width:1440px) {
        .sphere--backend-2 .sphere-item h4:before {
            display: block;
            top: 14px
        }
        .sphere--backend-2 .sphere-item h4:after {
            content: '';
            display: block;
            position: absolute;
            width: 20%;
            height: 1px;
            border-top: 1px solid #ebebeb;
            margin: 0 50px;
            top: 24px;
            left: 100%
        }
        .sphere--backend-2 .sphere-item--2 h4:after,
        .sphere--backend-2 .sphere-item--3 h4:after {
            left: auto;
            right: 100%
        }
    }

    .sphere--backend-3 {
        background-position: 50% 80%;
        background-size: auto
    }

    .sphere--backend-3 .container~.sphere-container {
        margin-top: 0
    }

    .sphere--backend-3 .sphere-item {
        top: 47%
    }

    .sphere--backend-3 .sphere-item h4:before {
        top: .4em;
        display: none
    }

    .sphere--backend-3 .sphere-item--1 h4:before {
        left: 100%
    }

    .sphere--backend-3 .sphere-item--2 h4:before {
        right: 100%
    }

    .sphere--page-prototyping .sphere-item--1 .sphere-item-icon,
    .sphere--page-prototyping .sphere-item--5 .sphere-item-icon,
    .sphere--page-prototyping .sphere-item--6 .sphere-item-icon {
        right: -80px
    }

    @media (min-width:1440px) {
        .sphere--backend-3 .sphere-item h4:before {
            display: block
        }
        .sphere--backend-3 .sphere-item--1 {
            margin-right: 50px
        }
        .sphere--backend-3 .sphere-item--2 {
            margin-left: 50px
        }
    }

    .sphere--page-prototyping-1 .sphere-item--5 .sphere-item-title h4:before,
    .sphere--page-prototyping-2 .sphere-item--4,
    .sphere--page-prototyping-2 .sphere-item--5 {
        display: none
    }

    .sphere--page-prototyping {
        max-width: 2400px;
        margin-left: auto;
        margin-right: auto;
        padding-top: 0;
        padding-bottom: 0
    }

    .sphere--page-prototyping .sphere-container {
        padding-top: 148px;
        padding-bottom: 96px
    }

    .sphere--page-prototyping .sphere-item--1,
    .sphere--page-prototyping .sphere-item--2 {
        top: 18%
    }

    .sphere--page-prototyping .sphere-item--3 {
        top: 47%
    }

    .sphere--page-prototyping .sphere-item--4,
    .sphere--page-prototyping .sphere-item--5 {
        top: 76%
    }

    .sphere--page-prototyping .sphere-item--6 {
        top: 47%
    }

    .sphere--page-prototyping .sphere-item--7 {
        top: 45%;
        text-align: center
    }

    @media (max-width:1200px) {
        .sphere--backend-3 .sphere-item {
            position: relative
        }
        .sphere--page-prototyping .sphere-item--7 {
            top: 43%
        }
    }

    .sphere--page-prototyping .sphere-item-title h4 {
        font-weight: 700;
        font-size: 19px;
        line-height: 24px;
        margin: 0 0 .1em
    }

    .sphere--page-prototyping .sphere-item-text {
        line-height: 25px
    }

    .sphere--page-prototyping .sphere-item-icon {
        position: absolute;
        width: 80px;
        height: 80px;
        top: 0;
        line-height: 80px;
        text-align: center;
        border: 1px solid #000;
        border-radius: 50%
    }

    .sphere--page-prototyping .icons--white .sphere-item-icon {
        border-color: #fff
    }

    .sphere--page-prototyping .icons--green .sphere-item-icon {
        border-color: #51c336
    }

    .sphere--page-prototyping .icons--blue .sphere-item-icon {
        border-color: #0cf
    }

    .sphere--page-prototyping .icons--red .sphere-item-icon {
        border-color: #f96057
    }

    .sphere--page-prototyping .icons--dark-blue .sphere-item-icon {
        border-color: #255ccc
    }

    .sphere--page-prototyping .icons--orange .sphere-item-icon {
        border-color: #ff9700
    }

    .sphere--page-prototyping .icons--aqua .sphere-item-icon {
        border-color: #00ddce
    }

    .sphere--page-prototyping .icons--purple .sphere-item-icon {
        border-color: #9d26d5
    }

    .sphere--page-prototyping .sphere-item-icon .icon {
        width: 42%;
        height: 80px
    }

    .sphere--page-prototyping .sphere-item--7 .sphere-item-title h4 {
        font-weight: 300;
        font-size: 52px;
        line-height: 60px;
        color: #234
    }

    @media (max-width:3000px) {
        .sphere--page-prototyping .sphere-item--7 .sphere-item-title {
            padding-left: 4%;
            padding-right: 4%
        }
    }

    @media (max-width:1920px) {
        .sphere--page-prototyping .sphere-item--7 .sphere-item-title {
            padding-left: 0;
            padding-right: 0
        }
    }

    @media (max-width:1440px) {
        .sphere--page-prototyping .sphere-item--7 .sphere-item-title {
            padding-left: 2%;
            padding-right: 2%
        }
    }

    @media (max-width:1030px) {
        .sphere--page-prototyping .sphere-item-icon {
            display: none
        }
    }

    @media (max-width:1029px) {
        .sphere--page-prototyping {
            padding-top: 100px;
            padding-bottom: 50px
        }
        .sphere--page-prototyping .sphere-container {
            padding-top: 0;
            padding-bottom: 0
        }
        .sphere--page-prototyping .sphere-item:nth-child(2n+2) {
            clear: both
        }
        .sphere--page-prototyping .sphere-item:nth-child(2n+1) {
            clear: none
        }
        .sphere--page-prototyping .sphere-item--7 {
            width: 100%;
            height: auto!important
        }
        .sphere--page-prototyping .sphere-item--7 .sphere-item-title {
            padding-left: 0;
            padding-right: 0;
            text-align: center
        }
    }

    .sphere--page-prototyping-1 .sphere-item--1 .sphere-item-text,
    .sphere--page-prototyping-1 .sphere-item--4 .sphere-item-text {
        padding-left: 100px
    }

    .sphere--page-prototyping-1 .sphere-item--2 .sphere-item-text,
    .sphere--page-prototyping-1 .sphere-item--3 .sphere-item-text {
        padding-right: 140px
    }

    @media (max-width:767px) {
        .sphere--page-prototyping {
            padding-top: 50px
        }
        .sphere--page-prototyping .sphere-item--7 .sphere-item-title h4 {
            font-weight: 400;
            font-size: 32px;
            line-height: 39px
        }
        .sphere--page-prototyping .sphere-item .sphere-item-text,
        .sphere--page-prototyping .sphere-item .sphere-item-title {
            text-align: center
        }
    }

    .sphere--page-prototyping .sphere-item--2 .sphere-item-icon,
    .sphere--page-prototyping .sphere-item--3 .sphere-item-icon,
    .sphere--page-prototyping .sphere-item--4 .sphere-item-icon {
        left: -80px
    }

    .sphere--page-prototyping-1 {
        max-width: 2400px;
        margin-left: auto;
        margin-right: auto;
        padding-top: 118px;
        padding-bottom: 162px;
        background-color: #FFF
    }

    .sphere--page-prototyping-1 .sphere-item-title h4 {
        font-weight: 500;
        font-size: 25px;
        text-transform: uppercase
    }

    @media (max-width:767) {
        .sphere--page-prototyping-1 {
            padding-top: 50px;
            padding-bottom: 50px
        }
    }

    .sphere--page-prototyping-1 .heading-description {
        margin-top: 50px
    }

    .sphere--page-prototyping-1 .heading-description p {
        font-size: 25px;
        line-height: 38px
    }

    .sphere--page-prototyping-1 .container~.sphere-container {
        margin-top: 86px
    }

    .sphere--page-prototyping-1 .sphere-item--1 {
        top: 7%;
        text-align: right
    }

    .sphere--page-prototyping-1 .sphere-item--2 {
        top: 7%
    }

    .sphere--page-prototyping-1 .sphere-item--3 {
        bottom: 5%
    }

    .sphere--page-prototyping-1 .sphere-item--4 {
        bottom: 5%;
        text-align: right
    }

    @media (max-width:1199px) {
        .sphere--page-prototyping-1 .sphere-item--1 .sphere-item-text,
        .sphere--page-prototyping-1 .sphere-item--4 .sphere-item-text {
            padding-left: 0
        }
        .sphere--page-prototyping-1 .sphere-item--2 .sphere-item-text,
        .sphere--page-prototyping-1 .sphere-item--3 .sphere-item-text {
            padding-right: 0
        }
    }

    .sphere--page-prototyping-1 .sphere-item--2 .sphere-item-title h4:before,
    .sphere--page-prototyping-1 .sphere-item--3 .sphere-item-title h4:before {
        right: 100%
    }

    .sphere--page-prototyping-1 .sphere-item--1 .sphere-item-title h4:before,
    .sphere--page-prototyping-1 .sphere-item--4 .sphere-item-title h4:before {
        left: 100%
    }

    .sphere--page-prototyping-1 .sphere-item--5 {
        bottom: 34%;
        text-align: center
    }

    @media (min-width:2500px) {
        .sphere--page-prototyping-1 .sphere-item--5 {
            bottom: 34%;
            padding-left: 50px;
            padding-right: 50px
        }
    }

    @media (max-width:3000px) {
        .sphere--page-prototyping-1 .sphere-item--5 {
            padding-left: 3%;
            padding-right: 3%
        }
    }

    @media (max-width:2200px) {
        .sphere--page-prototyping-1 .sphere-item--5 {
            padding-left: 1%;
            padding-right: 1%
        }
    }

    @media (max-width:1900px) {
        .sphere--page-prototyping-1 .sphere-item--5 {
            padding-left: 0;
            padding-right: 0
        }
    }

    @media (max-width:1600px) {
        .sphere--page-prototyping-1 .sphere-item--3,
        .sphere--page-prototyping-1 .sphere-item--4 {
            bottom: -60px
        }
    }

    @media (max-width:1440px) {
        .sphere--page-prototyping-1 .sphere-item--5 {
            bottom: 20%
        }
        .sphere--page-prototyping-1 .sphere-item--3,
        .sphere--page-prototyping-1 .sphere-item--4 {
            bottom: -100px
        }
    }

    @media (max-width:1300px) {
        .sphere--page-prototyping-1 .sphere-item--5 {
            bottom: 24%
        }
        .sphere--page-prototyping-1 .sphere-item-title h4 {
            margin-bottom: 0;
            font-size: 28px;
            line-height: 36px
        }
        .sphere--page-prototyping-1 .sphere-item-text {
            font-size: 17px;
            line-height: 1.4
        }
    }

    @media (max-width:1199px) {
        .sphere--page-prototyping-1 .sphere-item {
            position: relative;
            left: auto;
            right: auto;
            width: 50%;
            float: left;
            margin-bottom: 50px;
            padding-left: 35px;
            padding-right: 35px;
            text-align: left!important
        }
        .sphere--page-prototyping-1 .sphere-item-title h4:before {
            display: none
        }
        .sphere--page-prototyping-1 .sphere-object-wrapper {
            display: none;
            height: auto
        }
        .sphere--page-prototyping-1 .sphere-item--3,
        .sphere--page-prototyping-1 .sphere-item--4 {
            bottom: auto
        }
        .sphere--page-prototyping-1 .sphere-item--5 {
            padding-left: 35px;
            padding-right: 35px
        }
        .sphere--page-prototyping-1 .sphere-item--5 .sphere-item-text {
            padding-left: 0;
            padding-right: 0
        }
    }

    .sphere--page-prototyping-2 {
        padding-top: 146px;
        padding-bottom: 0;
        background-color: #fff;
        background-size: auto
    }

    @media (max-width:767px) {
        .sphere--page-prototyping-1 .sphere-item--5 {
            padding-left: 15px;
            padding-right: 15px
        }
        .sphere--page-prototyping-1 .sphere-item {
            width: 100%;
            height: auto!important;
            margin-bottom: 30px;
            padding-left: 15px;
            padding-right: 15px
        }
        .sphere--page-prototyping-2 {
            padding-top: 50px
        }
    }

    .sphere--page-prototyping-2 .container~.sphere-container {
        margin-top: 48px
    }

    .sphere--page-prototyping-2 .container-fluid {
        position: relative;
        max-width: 1920px;
        margin-left: auto;
        margin-right: auto;
        background-position: 50% 100%;
        background-size: auto
    }

    .sphere--page-prototyping-2 .sphere-object-wrapper {
        height: 610px
    }

    .sphere--page-prototyping-2 .sphere-item {
        width: 1000px!important;
        left: 50%;
        margin-left: -500px
    }

    .sphere--page-prototyping-2 .sphere-item-wrapper {
        position: relative;
        padding-left: 77px
    }

    .sphere--page-prototyping-2 .sphere-item-title h4 {
        font-weight: 700;
        font-size: 19px;
        text-transform: uppercase
    }

    .sphere--page-prototyping-2 .sphere-item-icon {
        position: absolute;
        width: 77px;
        height: 101px;
        top: 0;
        left: 0
    }

    .sphere--page-prototyping-2 .sphere-item--1 {
        top: 12%;
        padding-left: 458px
    }

    .sphere--page-prototyping-2 .sphere-item--2 {
        top: 31%;
        padding-left: 169px
    }

    .sphere--page-prototyping-2 .sphere-item--2 .sphere-item-wrapper {
        padding-left: 85px
    }

    .sphere--page-prototyping-2 .sphere-item--3 {
        padding-left: 638px;
        top: 42%
    }

    .sphere--page-prototyping-2 .sphere-item--3 .sphere-item-wrapper {
        padding-left: 110px
    }

    @media (max-width:1029px) {
        .sphere--page-prototyping-2 {
            background-image: none!important
        }
        .sphere--page-prototyping-2 .heading {
            margin-bottom: 0
        }
        .sphere--page-prototyping-2 .container-fluid {
            background: #FFF!important
        }
        .sphere--page-prototyping-2 .sphere-object-wrapper {
            height: auto
        }
        .sphere--page-prototyping-2 .sphere-item--1,
        .sphere--page-prototyping-2 .sphere-item--2,
        .sphere--page-prototyping-2 .sphere-item--3 {
            left: 0
        }
        .sphere--page-prototyping-2 .sphere-item--4,
        .sphere--page-prototyping-2 .sphere-item--5 {
            display: block
        }
        .sphere--page-prototyping-2 .sphere-item-icon {
            left: 0;
            display: none
        }
        .sphere--page-prototyping-2 .sphere-item {
            text-align: left!important;
            width: 40%!important;
            height: auto!important;
            float: none;
            top: auto;
            left: 0;
            margin-left: auto;
            margin-right: auto;
            padding-left: 15px;
            padding-right: 15px
        }
        .sphere--page-prototyping-2 .sphere-item .sphere-item-wrapper {
            padding-left: 0
        }
    }

    @media (max-width:767px) {
        .sphere--page-prototyping-2 {
            padding-bottom: 0!important
        }
        .sphere--page-prototyping-2 .sphere-item {
            width: 100%!important
        }
    }

    @media (min-width:1030px) and (max-width:1200px) {
        .sphere--items-4 .sphere-item-text {
            font-size: .8em;
            line-height: 1.4em
        }
        .sphere--items-4 .sphere-item-title h4 {
            font-size: 1.3em
        }
    }

    @media (max-width:1029px) {
        .sphere {
            padding-bottom: 50px;
            background-attachment: scroll
        }
        .sphere-item {
            position: relative;
            width: 50%;
            height: auto!important;
            float: left;
            bottom: auto!important;
            top: auto!important;
            margin-bottom: 50px;
            padding-left: 35px;
            padding-right: 35px;
            text-align: left!important
        }
        .sphere-item:nth-child(2n+1) {
            clear: both
        }
        .sphere-item:first-child {
            margin-top: 0
        }
    }

    @media (max-width:767px) {
        .sphere {
            padding-top: 50px;
            padding-bottom: 50px
        }
        .sphere-item {
            width: 100%;
            height: auto!important;
            margin-bottom: 30px;
            padding-left: 15px;
            padding-right: 15px
        }
        .sphere-item:last-child {
            margin-bottom: 0
        }
    }

    .sphere--page-methodology .sphere-item--1,
    .sphere--page-methodology .sphere-item--2 {
        top: 40px
    }

    .sphere--page-methodology .sphere-item--3,
    .sphere--page-methodology .sphere-item--4 {
        top: 52%;
        bottom: auto
    }

    .sphere--page-methodology .sphere-object-img {
        position: relative;
        top: -28px;
        left: -18px
    }

    .sphere--page-methodology ul li+li {
        margin-top: 10px
    }

    @media (max-width:1030px) {
        .sphere--page-methodology .heading {
            margin-bottom: 50px
        }
        .sphere--page-methodology .sphere-item {
            text-align: left!important
        }
    }

    .sphere--page-application-security {
        padding-top: 37px!important;
        padding-bottom: 78px
    }

    .sphere--page-application-security .heading {
        margin-bottom: 10px
    }

    .sphere--page-application-security .heading-title h3 {
        line-height: 60px
    }

    .sphere--page-application-security .sphere-item-title h4:before {
        display: none
    }

    @media (max-width:767px) {
        .sphere--page-application-security {
            padding-bottom: 50px;
            padding-top: 0!important
        }
        .sphere--page-application-security .heading-title h3 {
            line-height: 39px
        }
    }

    .sphere--page-application-security .heading-description {
        max-width: 998px;
        margin-top: 24px;
        margin-left: auto;
        margin-right: auto
    }

    .sphere--page-application-security .heading-description p {
        line-height: 30px
    }

    .sphere--page-application-security .sphere-object {
        padding-bottom: 150px
    }

    .sphere--page-application-security .sphere-item--1,
    .sphere--page-application-security .sphere-item--2 {
        top: 0
    }

    .sphere--page-application-security .sphere-item--3,
    .sphere--page-application-security .sphere-item--5 {
        bottom: 30%
    }

    .sphere--page-application-security .sphere-item--4 {
        bottom: 5%
    }

    .sphere--page-application-security .sphere-item--1 .sphere-item-title h4:before,
    .sphere--page-application-security .sphere-item--5 .sphere-item-title h4:before {
        left: 100%
    }

    .sphere--page-application-security .sphere-item--2 .sphere-item-title h4:before,
    .sphere--page-application-security .sphere-item--3 .sphere-item-title h4:before {
        right: 100%
    }

    .sphere--page-application-security .sphere-item--4 .sphere-item-title h4:before {
        top: auto;
        bottom: 140%;
        left: 50%;
        margin-left: -12px
    }

    .sphere--page-application-security .sphere-item-title h4 {
        margin-bottom: 5px;
        font-weight: 600;
        font-size: 25px;
        line-height: 25px;
        text-transform: uppercase
    }

    .sphere--page-application-security .sphere-item-text {
        font-size: 17px;
        line-height: 25px
    }

    .sphere--page-application-integration .sphere-item-title h4,
    .sphere--page-social-networking .sphere-item-title h4 {
        font-weight: 500;
        font-size: 25px;
        text-transform: uppercase
    }

    .sphere--page-application-integration {
        padding-top: 116px
    }

    .sphere--page-application-integration .sphere-container {
        max-width: 1920px;
        margin-left: auto;
        margin-right: auto
    }

    .sphere--page-application-integration .sphere-item-title h4:before {
        position: absolute;
        display: block;
        margin-top: -3px
    }

    .sphere--page-application-integration .sphere-item-title h4:after {
        content: '';
        position: absolute;
        display: block;
        width: 85px;
        height: 1px;
        top: 14px;
        background: rgba(255, 255, 255, .5)
    }

    .sphere--page-application-integration .sphere-item--1 .sphere-item-title h4:after,
    .sphere--page-application-integration .sphere-item--4 .sphere-item-title h4:after {
        right: -135px
    }

    .sphere--page-application-integration .sphere-item--2 .sphere-item-title h4:after,
    .sphere--page-application-integration .sphere-item--3 .sphere-item-title h4:after {
        left: -135px
    }

    @media (max-width:1199px) {
        .sphere--page-application-integration .sphere-item-title h4:after {
            display: none!important
        }
    }

    .sphere--page-application-integration .sphere-item--1 .sphere-item-text,
    .sphere--page-application-integration .sphere-item--4 .sphere-item-text {
        padding-left: 226px
    }

    .sphere--page-application-integration .sphere-item--2 .sphere-item-text,
    .sphere--page-application-integration .sphere-item--3 .sphere-item-text {
        padding-right: 226px
    }

    @media (max-width:1920px) {
        .sphere--page-application-integration .sphere-item--1 .sphere-item-text,
        .sphere--page-application-integration .sphere-item--4 .sphere-item-text {
            padding-left: 0
        }
        .sphere--page-application-integration .sphere-item--2 .sphere-item-text,
        .sphere--page-application-integration .sphere-item--3 .sphere-item-text {
            padding-right: 0
        }
    }

    @media (max-width:1029px) {
        .sphere--page-application-security .sphere-object {
            padding-bottom: 0
        }
        .sphere--page-application-integration {
            padding-top: 100px
        }
    }

    @media (max-width:767px) {
        .sphere--page-application-integration {
            padding-top: 50px
        }
    }

    .sphere--page-application-integration .container~.sphere-container {
        margin-top: 40px
    }

    .sphere--page-application-integration .sphere-object-wrapper {
        padding-top: 50px;
        padding-bottom: 40px
    }

    .sphere--page-application-integration .sphere-item--1,
    .sphere--page-application-integration .sphere-item--2 {
        top: 20%
    }

    .sphere--page-application-integration .sphere-item--1,
    .sphere--page-application-integration .sphere-item--4 {
        padding-right: 70px
    }

    .sphere--page-application-integration .sphere-item--2,
    .sphere--page-application-integration .sphere-item--3 {
        padding-left: 70px
    }

    @media (max-width:1600px) {
        .sphere--items-4 .sphere-item--3,
        .sphere--items-4 .sphere-item--4 {
            bottom: -50px
        }
    }

    @media (max-width:1200px) {
        .sphere--items-4 .sphere-item--3,
        .sphere--items-4 .sphere-item--4 {
            bottom: 0
        }
        .sphere--page-application-integration .sphere-item--1,
        .sphere--page-application-integration .sphere-item--4 {
            padding-right: 15px
        }
        .sphere--page-application-integration .sphere-item--2,
        .sphere--page-application-integration .sphere-item--3 {
            padding-left: 30px
        }
    }

    @media (max-width:1029px) {
        .sphere--page-application-integration .sphere-object-wrapper {
            padding-bottom: 0
        }
        .sphere--page-application-integration .sphere-item--1,
        .sphere--page-application-integration .sphere-item--2,
        .sphere--page-application-integration .sphere-item--3,
        .sphere--page-application-integration .sphere-item--4 {
            padding-left: 15px;
            padding-right: 15px
        }
    }

    .sphere--page-social-networking .sphere-object-wrapper {
        padding-top: 178px;
        padding-bottom: 220px
    }

    .sphere--page-social-networking .sphere-item--3 {
        top: 36%
    }

    .sphere--page-social-networking .sphere-item--4,
    .sphere--page-social-networking .sphere-item--5 {
        top: 78%
    }

    .sphere--page-social-networking .sphere-item--6 {
        top: 36%
    }

    .sphere--page-social-networking .sphere-item-title h4 {
        margin-top: 0;
        margin-bottom: 8px;
        line-height: 30px
    }

    .sphere--page-social-networking .sphere-item,
    .sphere--page-social-networking .sphere-item ul {
        text-align: left
    }

    .sphere--page-social-networking .sphere-item ul li {
        margin-bottom: 5px;
        padding-left: 18px;
        font-size: 15px
    }

    .sphere--page-social-networking .sphere-item ul li:before {
        left: 0;
        right: auto
    }

    @media (max-width:1029px) {
        .sphere--page-social-networking .heading {
            margin-bottom: 40px
        }
        .sphere--page-social-networking .sphere-object-wrapper {
            padding-top: 0;
            padding-bottom: 0
        }
        .sphere--page-social-networking .sphere-item {
            text-align: left!important
        }
    }

    .sphere--page-dedicated-development-teams .sphere-item-title h4 {
        font-weight: 300
    }

    .sphere--page-dedicated-development-teams .sphere-item-text {
        width: 76%
    }

    .sphere--page-dedicated-development-teams .sphere-item--1 .sphere-item-text,
    .sphere--page-dedicated-development-teams .sphere-item--4 .sphere-item-text {
        margin-left: auto
    }

    .sphere--page-dedicated-development-teams .sphere-item-title h4:before {
        width: 10px;
        height: 10px;
        top: 15px;
        margin: 0 21px;
        border-radius: 50%
    }

    @media (max-width:1029px) {
        .sphere--page-dedicated-development-teams .sphere-item--1 .sphere-item-text,
        .sphere--page-dedicated-development-teams .sphere-item--4 .sphere-item-text {
            margin-left: 0;
            width: 100%
        }
    }

    @media (max-width:1600px) {
        .sphere--page-dedicated-development-teams .sphere-object-wrapper {
            padding-top: 5%
        }
    }

    @media (max-width:1300px) {
        .sphere--page-dedicated-development-teams .sphere-object-wrapper {
            padding-top: 10%
        }
    }

    @media (max-width:1030px) {
        .sphere--page-dedicated-development-teams .sphere-object-wrapper {
            padding-top: 0
        }
    }

    .sphere--page-content-and-document-management {
        padding-bottom: 0
    }

    .sphere--page-content-and-document-management .sphere-object {
        padding-bottom: 266px
    }

    .sphere--page-content-and-document-management .sphere-item {
        text-align: left
    }

    .sphere--page-content-and-document-management .sphere-item--1,
    .sphere--page-content-and-document-management .sphere-item--2 {
        top: 5%
    }

    .sphere--page-content-and-document-management .sphere-item--3 {
        bottom: 19%
    }

    .sphere--page-content-and-document-management .sphere-item--4 {
        padding-left: 9%;
        bottom: 5%
    }

    .sphere--page-content-and-document-management .sphere-item--5 {
        bottom: 19%
    }

    .sphere--page-content-and-document-management .sphere-item--1 .sphere-item-title h4:before,
    .sphere--page-content-and-document-management .sphere-item--5 .sphere-item-title h4:before {
        left: 100%
    }

    .sphere--page-content-and-document-management .sphere-item--2 .sphere-item-title h4:before,
    .sphere--page-content-and-document-management .sphere-item--3 .sphere-item-title h4:before {
        right: 100%
    }

    .sphere--page-content-and-document-management .sphere-item--4 .sphere-item-title h4 {
        display: inline-block
    }

    .sphere--page-content-and-document-management .sphere-item--4 .sphere-item-title h4:before {
        top: auto;
        bottom: 180%;
        left: 50%;
        margin-left: -10px
    }

    .sphere--page-content-and-document-management .sphere-item .sphere-item-title h4 {
        font-weight: 400
    }

    .sphere--page-content-and-document-management ul li {
        margin-bottom: 10px
    }

    .sphere--page-content-and-document-management ul li:before {
        top: .7em
    }

    @media (max-width:1800px) {
        .sphere--page-content-and-document-management .sphere-object-wrapper {
            padding-top: 15%;
            padding-bottom: 10%
        }
    }

    @media (max-width:1500px) {
        .sphere--page-content-and-document-management .sphere-object-wrapper {
            padding-top: 18%
        }
        .sphere--page-content-and-document-management .sphere-item--4 {
            padding-left: 2%
        }
    }

    @media (max-width:1200px) {
        .sphere--page-content-and-document-management .sphere-object-wrapper {
            padding-top: 30%;
            padding-bottom: 30%
        }
    }

    @media (max-width:1100px) {
        .sphere--page-content-and-document-management {
            padding-bottom: 0
        }
        .sphere--page-content-and-document-management .sphere-object {
            display: none
        }
        .sphere--page-content-and-document-management .sphere-item {
            position: relative;
            display: inline-block;
            vertical-align: top;
            width: 50%;
            height: auto!important;
            bottom: auto;
            top: auto;
            left: auto;
            right: auto;
            margin-bottom: 40px;
            text-align: left!important
        }
        .sphere--page-content-and-document-management .sphere-item:nth-child(2n+1) {
            clear: both
        }
        .sphere--page-content-and-document-management .sphere-item .sphere-item-title h4:before {
            display: none
        }
        .sphere--page-content-and-document-management .sphere-item--4 {
            padding-left: 15px!important
        }
    }

    @media (max-width:1029px) {
        .sphere--page-content-and-document-management .sphere-item--4 {
            padding-left: 35px!important
        }
    }

    @media (max-width:767px) {
        .sphere--page-content-and-document-management .sphere-item {
            width: 100%;
            height: auto!important
        }
        .sphere--page-content-and-document-management .sphere-item--4 {
            padding-left: 15px!important
        }
    }

    .sphere--page-omnichannel-ecommerce .heading-description {
        margin-top: 42px
    }

    .sphere--page-omnichannel-ecommerce .heading-description p {
        font-size: 19px;
        line-height: 30px
    }

    .sphere--page-omnichannel-ecommerce .container~.sphere-container {
        margin-top: 90px
    }

    .sphere--page-omnichannel-ecommerce .sphere-object {
        padding-bottom: 253px
    }

    .sphere--page-omnichannel-ecommerce .sphere-item--3,
    .sphere--page-omnichannel-ecommerce .sphere-item--5 {
        bottom: 24%
    }

    .sphere--page-omnichannel-ecommerce .sphere-item--4 {
        padding-left: 15px;
        width: 100%;
        left: 0;
        bottom: -6%;
        text-align: center
    }

    .sphere--page-omnichannel-ecommerce .sphere-item--4 ul {
        display: inline-block
    }

    .sphere--page-omnichannel-ecommerce ul li:before {
        top: 10px
    }

    @media (max-width:1800px) {
        .sphere--page-omnichannel-ecommerce .sphere-object-wrapper {
            padding-top: 0;
            padding-bottom: 0
        }
    }

    @media (max-width:1200px) {
        .sphere--page-omnichannel-ecommerce .sphere-object-wrapper {
            padding-top: 2%;
            padding-bottom: 2%
        }
    }

    @media (max-width:1100px) {
        .sphere--page-omnichannel-ecommerce .sphere-item--4 {
            width: 50%;
            padding-left: 15px
        }
        .sphere--page-omnichannel-ecommerce .heading-description p {
            margin-bottom: 0
        }
    }
</style>

<section class="first main_page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Mobile solutions</h1>
            </div>
        </div>
    </div>
</section>

<section class="cards3 tubes">
    <div class="tubes-container">
        <div class="tubes-top"></div>
        <div class="tubes-middle"></div>
    </div>

    <div class="container">
        <div class="row cards3-row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="cards3-item cards3-item--1">
                    <div class="cards3-name">
                        <h4>ENTERPRISE</h4>
                    </div>

                    <div class="cards3-text">
                        <p>Iflexion exploits mobile productivity opportunities to deliver enterprise apps that result in improved efficiency, faster communication and a greater RoI. We deliver flexible and cost-effective solutions that let you mobilize, streamline and integrate your business processes on any device and platform.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-lg-push-2 col-md-5 col-md-push-2 col-sm-5 col-sm-push-2 col-xs-12">
                <div class="cards3-item cards3-item--2">
                    <div class="cards3-name">
                        <h4>CONSUMER</h4>
                    </div>

                    <div class="cards3-text">
                        <p>We create engaging consumer apps that help you drive sales and communicate your brand by unleashing the full power of mobility. Our team delivers stunning applications that provide your customers with a personalized mobile environment to improve their satisfaction, loyalty and trust.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>		<section class="scheme3 tubes">
    <div class="tubes-container">
        <div class="tubes-middle tubes-middle--1"></div>
        <div class="tubes-circle"></div>
        <div class="tubes-middle tubes-middle--2"></div>
    </div>

    <div class="container">
        <div class="heading">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="heading-title">
                        <h3>DRAW ON OUR DEEP POOL OF EXPERTISE...</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container scheme3-container">
        <div class="scheme3-col">
            <img class="scheme3-img" src="/images/pages/mobile1.png">
        </div>

        <div class="scheme3-list scheme3-left">
            <ul>
                <li><h3>Document Management</h3></li>
                <li><h3>Executive Dashboards</h3></li>
                <li><h3>Enterprise Resource Planning</h3></li>
                <li><h3>Fleet Management</h3></li>
                <li><h3>Workforce Productivity</h3></li>
                <li><h3>Field Force Automation</h3></li>
                <li><h3>Teamwork Collaboration</h3></li>
                <li><h3>Accounting Systems</h3></li>
            </ul>
        </div>

        <div class="scheme3-list scheme3-right">
            <ul>
                <li><h3>mCommerce</h3></li>
                <li><h3>Social Networking</h3></li>
                <li><h3>Education</h3></li>
                <li><h3>Lifestyle</h3></li>
                <li><h3>Self-care</h3></li>
                <li><h3>Media</h3></li>
                <li><h3>Games</h3></li>
                <li><h3>Entertainment</h3></li>
            </ul>
        </div>
    </div>
</section>		<section class="cards4 icons--white">
    <div class="container">
        <div class="heading">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="heading-title">
                        <h3>...TELL US YOUR MOBILITY NEEDS...</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row cards4-row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="cards4-item cards4-item--1">
                    <div class="cards4-icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="93px" height="56px" viewbox="0 0 93 56" enable-background="new 0 0 93 56" xml:space="preserve" class="icon">
<g display="none">
    <rect x="982" y="228" display="inline" fill="#D0E8F8" width="36" height="37.5"/>
</g>
                            <path fill="#3492D0" d="M85.2,1C89,1,92,4.4,92,8.5V47c0,4.2-3,7.5-6.8,7.5H7.8C4,54.5,1,51.1,1,47V8.5C1,4.4,4,1,7.8,1H85.2
	 M85.2,0H7.8C3.5,0,0,3.8,0,8.5V47c0,4.7,3.5,8.5,7.8,8.5h77.5c4.3,0,7.8-3.8,7.8-8.5V8.5C93,3.8,89.5,0,85.2,0L85.2,0z M17,22v5v1
	h1h5v4h-5h-1v1v5h-4v-5v-1h-1H7v-4h5h1v-1v-5H17 M18,21h-6v6H6v6h6v6h6v-6h6v-6h-6V21L18,21z M73,26v4h-4v-4H73 M74,25h-6v6h6V25
	L74,25z M80,18v4h-4v-4H80 M81,17h-6v6h6V17L81,17z M88,26v4h-4v-4H88 M89,25h-6v6h6V25L89,25z M80,34v4h-4v-4H80 M81,33h-6v6h6V33
	L81,33z M63,10v36H29V10H63 M64,9H28v38h36V9L64,9z"/>
</svg>
                    </div>

                    <div class="cards4-name">
                        <h4>Frontend Development</h4>
                    </div>

                    <div class="cards4-text">
                        <p>Our experts harness the power of modern technologies to deliver native, hybrid or cross-platform frontend solutions with eye-grabbing UIs that allow you to easily develop a new income stream or put your business in the palm of your hand.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="cards4-item cards4-item--2">
                    <div class="cards4-icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="84px" height="84px" viewbox="0 0 84 84" enable-background="new 0 0 84 84" xml:space="preserve" class="icon">
<path fill="#3492D0" d="M18.9,55.1c-2.5,0-4.9,1-6.7,2.8c-1.8,1.8-2.8,4.2-2.8,6.7c0,2.5,1,4.9,2.8,6.7c1.8,1.8,4.2,2.8,6.7,2.8
	s4.9-1,6.7-2.8c1.8-1.8,2.8-4.2,2.8-6.7c0-2.5-1-4.9-2.8-6.7C23.9,56,21.5,55.1,18.9,55.1z M25,70.6c-1.6,1.6-3.7,2.5-6,2.5
	c-2.3,0-4.4-0.9-6-2.5c-1.6-1.6-2.5-3.7-2.5-6c0-2.3,0.9-4.4,2.5-6c1.6-1.6,3.7-2.5,6-2.5c2.3,0,4.4,0.9,6,2.5
	c1.6,1.6,2.5,3.7,2.5,6C27.4,66.8,26.6,69,25,70.6z M19,41.8c0-5.2-4.3-9.5-9.5-9.5S0,36.5,0,41.8s4.3,9.5,9.5,9.5S19,47,19,41.8z
	 M1,41.8c0-4.7,3.8-8.5,8.5-8.5s8.5,3.8,8.5,8.5s-3.8,8.5-8.5,8.5S1,46.4,1,41.8z M19.5,27.9c2.5,0,4.9-1,6.7-2.8
	c3.7-3.7,3.7-9.7,0-13.4c-1.8-1.8-4.2-2.8-6.7-2.8c-2.5,0-4.9,1-6.7,2.8c-3.7,3.7-3.7,9.7,0,13.4C14.6,26.9,16.9,27.9,19.5,27.9z
	 M13.5,12.4c1.6-1.6,3.7-2.5,6-2.5s4.4,0.9,6,2.5c3.3,3.3,3.3,8.7,0,12c-1.6,1.6-3.7,2.5-6,2.5s-4.4-0.9-6-2.5
	C10.2,21.1,10.2,15.7,13.5,12.4z M51.9,42.2h12.6c0.3,5,4.4,9,9.5,9c5.2,0,9.5-4.3,9.5-9.5s-4.3-9.5-9.5-9.5c-5.1,0-9.2,4-9.5,9H52
	c0-0.1,0-0.2,0-0.2c0-2.2-0.8-4.3-2.1-5.9l8.7-8.7c1.7,1.4,3.8,2.1,5.9,2.1c2.5,0,4.9-1,6.7-2.8c1.8-1.8,2.8-4.2,2.8-6.7
	s-1-4.9-2.8-6.7c-1.8-1.8-4.2-2.8-6.7-2.8s-4.9,1-6.7,2.8c-1.8,1.8-2.8,4.2-2.8,6.7s1,4.9,2.8,6.7c0,0,0,0,0,0l-8.6,8.6
	c-1.6-1.6-3.8-2.7-6.2-2.8V19c5-0.3,9-4.4,9-9.5C52,4.3,47.7,0,42.5,0S33,4.3,33,9.5c0,5.1,4,9.2,9,9.5v12.6
	c-2.4,0.1-4.6,1.2-6.2,2.8L26.4,25l-0.7,0.7l9.4,9.4C33.8,36.7,33,38.8,33,41c0,0.1,0,0.2,0,0.2H19.2v1h13.8c0.3,2.1,1.3,4,2.7,5.5
	L25.7,57.8l0.7,0.7l10.1-10.1c1.5,1.2,3.4,2,5.4,2.1v14c-5,0.3-9,4.4-9,9.5c0,5.2,4.3,9.5,9.5,9.5S52,79.2,52,74c0-5.1-4-9.2-9-9.5
	v-14c2.1-0.1,3.9-0.9,5.4-2.1l9.4,9.4c-1.5,1.7-2.3,3.9-2.3,6.2c0,2.5,1,4.9,2.8,6.7c1.8,1.8,4.2,2.8,6.7,2.8c2.5,0,4.9-1,6.7-2.8
	c1.8-1.8,2.8-4.2,2.8-6.7s-1-4.9-2.8-6.7c-1.8-1.8-4.2-2.8-6.7-2.8c-2.4,0-4.7,0.9-6.5,2.6l-9.4-9.4C50.6,46.3,51.6,44.4,51.9,42.2z
	 M65.5,41.2c0.3-4.5,4-8,8.5-8c4.7,0,8.5,3.8,8.5,8.5s-3.8,8.5-8.5,8.5c-4.5,0-8.2-3.5-8.5-8h0.2v-1H65.5z M56.1,18.9
	c0-2.3,0.9-4.4,2.5-6c1.6-1.6,3.7-2.5,6-2.5s4.4,0.9,6,2.5c1.6,1.6,2.5,3.7,2.5,6s-0.9,4.4-2.5,6s-3.7,2.5-6,2.5
	c-2.1,0-4-0.7-5.6-2.1L58.6,25l0,0c0,0,0,0,0,0C56.9,23.4,56.1,21.2,56.1,18.9z M58.7,58.5l0.6-0.6l0,0c1.6-1.5,3.6-2.3,5.8-2.3
	c2.3,0,4.4,0.9,6,2.5c1.6,1.6,2.5,3.7,2.5,6s-0.9,4.4-2.5,6c-1.6,1.6-3.7,2.5-6,2.5c-2.3,0-4.4-0.9-6-2.5c-1.6-1.6-2.5-3.7-2.5-6
	C56.6,62,57.3,60,58.7,58.5z M34,9.5C34,4.8,37.8,1,42.5,1S51,4.8,51,9.5S47.2,18,42.5,18S34,14.2,34,9.5z M34,41
	c0-4.7,3.8-8.5,8.5-8.5S51,36.3,51,41s-3.8,8.5-8.5,8.5S34,45.7,34,41z M51,74c0,4.7-3.8,8.5-8.5,8.5S34,78.7,34,74s3.8-8.5,8.5-8.5
	S51,69.3,51,74z"/>
</svg>
                    </div>

                    <div class="cards4-name">
                        <h4>Middleware Development</h4>
                    </div>

                    <div class="cards4-text">
                        <p>We rethink middleware to ease the integration of mobility into your existing environment by providing a consistent framework and a comprehensive set of services for a wide range of apps and data sources.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="cards4-item cards4-item--3">
                    <div class="cards4-icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="49px" height="51px" viewbox="0 0 49 51" enable-background="new 0 0 49 51" xml:space="preserve" class="icon">
<path fill="#3492D0" d="M45.9,14H3.1C1.4,14,0,12.6,0,10.9V3.1C0,1.4,1.4,0,3.1,0h42.8C47.6,0,49,1.4,49,3.1v7.8
	C49,12.6,47.6,14,45.9,14z M3.1,1C1.9,1,1,1.9,1,3.1v7.8C1,12,1.9,13,3.1,13h42.8C47,13,48,12,48,10.9V3.1C48,1.9,47,1,45.9,1H3.1z
	 M45.9,28.9H3.1c-1.7,0-3.1-1.4-3.1-3.1v-7.6c0-1.7,1.4-3.1,3.1-3.1h42.8c1.7,0,3.1,1.4,3.1,3.1v7.6C49,27.5,47.6,28.9,45.9,28.9z
	 M3.1,16.1C1.9,16.1,1,17,1,18.2v7.6c0,1.2,0.9,2.1,2.1,2.1h42.8c1.2,0,2.1-0.9,2.1-2.1v-7.6c0-1.2-0.9-2.1-2.1-2.1H3.1z M45.9,44
	H3.1C1.4,44,0,42.6,0,40.9V33c0-1.7,1.4-3.1,3.1-3.1h42.8c1.7,0,3.1,1.4,3.1,3.1v7.9C49,42.6,47.6,44,45.9,44z M3.1,30.9
	C1.9,30.9,1,31.8,1,33v7.9C1,42,1.9,43,3.1,43h42.8C47,43,48,42,48,40.9V33c0-1.2-0.9-2.1-2.1-2.1H3.1z M25,15.2v-1.7
	c0-0.3-0.2-0.5-0.5-0.5S24,13.2,24,13.5v1.7c0,0.3,0.2,0.5,0.5,0.5S25,15.4,25,15.2z M25,30.2v-1.8c0-0.3-0.2-0.5-0.5-0.5
	S24,28.1,24,28.4v1.8c0,0.3,0.2,0.5,0.5,0.5S25,30.4,25,30.2z M25,46.1v-2.7c0-0.3-0.2-0.5-0.5-0.5S24,43.2,24,43.5v2.7
	c0,0.3,0.2,0.5,0.5,0.5S25,46.4,25,46.1z M24.5,50.8c-1.4,0-2.6-1.2-2.6-2.6s1.2-2.6,2.6-2.6s2.6,1.2,2.6,2.6S25.9,50.8,24.5,50.8z
	 M24.5,46.6c-0.9,0-1.6,0.7-1.6,1.6s0.7,1.6,1.6,1.6s1.6-0.7,1.6-1.6S25.4,46.6,24.5,46.6z M43.7,38.9c-1.4,0-2.6-1.2-2.6-2.6
	s1.2-2.6,2.6-2.6c1.4,0,2.6,1.2,2.6,2.6S45.2,38.9,43.7,38.9z M43.7,34.7c-0.9,0-1.6,0.7-1.6,1.6s0.7,1.6,1.6,1.6
	c0.9,0,1.6-0.7,1.6-1.6S44.6,34.7,43.7,34.7z M43.7,23.9c-1.4,0-2.6-1.2-2.6-2.6c0-1.4,1.2-2.6,2.6-2.6c1.4,0,2.6,1.2,2.6,2.6
	C46.4,22.8,45.2,23.9,43.7,23.9z M43.7,19.7c-0.9,0-1.6,0.7-1.6,1.6s0.7,1.6,1.6,1.6c0.9,0,1.6-0.7,1.6-1.6S44.6,19.7,43.7,19.7z
	 M43.7,9.4c-1.4,0-2.6-1.2-2.6-2.6c0-1.4,1.2-2.6,2.6-2.6c1.4,0,2.6,1.2,2.6,2.6C46.4,8.2,45.2,9.4,43.7,9.4z M43.7,5.2
	c-0.9,0-1.6,0.7-1.6,1.6s0.7,1.6,1.6,1.6c0.9,0,1.6-0.7,1.6-1.6S44.6,5.2,43.7,5.2z M22.7,48.3c0-0.3-0.2-0.5-0.5-0.5H11
	c-0.3,0-0.5,0.2-0.5,0.5s0.2,0.5,0.5,0.5h11.3C22.5,48.8,22.7,48.6,22.7,48.3z M38.7,48.3c0-0.3-0.2-0.5-0.5-0.5H26.7
	c-0.3,0-0.5,0.2-0.5,0.5s0.2,0.5,0.5,0.5h11.5C38.4,48.8,38.7,48.6,38.7,48.3z"/>
</svg>
                    </div>

                    <div class="cards4-name">
                        <h4>Backend Development</h4>
                    </div>

                    <div class="cards4-text">
                        <p>Iflexion analyzes internal software logics and wraps your data and processes into a scalable and secure backend solution that will expand and evolve together with your business and enable the latter to operate more efficiently.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>		<section class="scheme4 tubes icons--white">
    <div class="tubes-container">
        <div class="tubes-middle"></div>
    </div>

    <div class="container">
        <div class="heading">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="heading-title">
                        <h3>...AND EXPLORE MOBILITY BENEFITS WITH IFLEXION</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container scheme4-container">
        <div class="scheme4-col">
            <img class="scheme4-img" src="/sites/all/themes/iflexion/images/scheme4.png">
            <div class="scheme4-list">
                <ul>
                    <li class="scheme4-item scheme4-item--1">
                        <span class="scheme4-left"><h3>Field and Sales Force Enablement</h3></span>
                        <span class="scheme4-icon">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="39.8px" height="37.8px" viewbox="0 0 39.8 37.8" enable-background="new 0 0 39.8 37.8" xml:space="preserve" class="icon">
<path fill="#273E99" d="M7.6,37.8l2.2-13c0.1-0.4-0.1-0.8-0.4-1.1L0,14.4l13.1-1.9c0.4-0.1,0.7-0.3,0.9-0.7L19.9,0l5.9,11.9
	c0.2,0.4,0.5,0.6,0.9,0.7l13.1,1.9l-9.5,9.2c-0.3,0.3-0.4,0.7-0.4,1.1l2.2,13l-11.7-6.2c-0.4-0.2-0.8-0.2-1.1,0L7.6,37.8z
	 M19.9,30.5c0.4,0,0.7,0.1,1,0.3l9.9,5.2l-1.9-11c-0.1-0.7,0.1-1.5,0.6-2l8-7.8l-11.1-1.6c-0.7-0.1-1.4-0.6-1.7-1.2l-5-10l-5,10.1
	c-0.3,0.7-1,1.1-1.7,1.2L2.1,15.1l8,7.8c0.5,0.5,0.8,1.3,0.6,2L8.9,36l9.9-5.2C19.2,30.6,19.5,30.5,19.9,30.5z"/>
</svg>
                                    </span>
                        <span class="scheme4-right"><h3>Enhanced Brand Value</h3></span>
                    </li>
                    <li class="scheme4-item scheme4-item--2">
                        <span class="scheme4-left"><h3>BI Driven by Data and Analytics</h3></span>
                        <span class="scheme4-icon">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="42px" height="41px" viewbox="0 0 42 41" enable-background="new 0 0 42 41" xml:space="preserve" class="icon">
<path d="M10.8,26v10H4V26H10.8 M11.8,25H3v12h8.8V25L11.8,25z M24.8,21v15h-8V21H24.8 M25.8,20h-10v17h10V20L25.8,20z M38.8,16v20
	h-8V16H38.8 M39.8,15h-10v22h10V15L39.8,15z M14.4,10.2l6.4,6L38.5,0.9l-0.7-0.8l-17,14.7l-6.4-6L2,19.6l0.7,0.8L14.4,10.2z M38.7,0
	l-4.9,0v1l3.9,0v3.9h1V0z M41.7,39.3H0V40h41.7V39.3z"/>
</svg>
                                    </span>
                        <span class="scheme4-right"><h3>Analytics to Understand Customer Behavior</h3></span>
                    </li>
                    <li class="scheme4-item scheme4-item--3">
                        <span class="scheme4-left"><h3>24/7 Access to Key Performance Metrics</h3></span>
                        <span class="scheme4-icon">
                                        <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="48px" viewbox="0 0 40 48" enable-background="new 0 0 40 48" xml:space="preserve" class="icon">
<path fill="#231F20" d="M19.8,47.1C8.9,47.1,0,38.2,0,27.2C0,16.3,8.9,7.4,19.8,7.4s19.8,8.9,19.8,19.8
	C39.7,38.2,30.8,47.1,19.8,47.1z M19.8,8.4C9.4,8.4,1,16.8,1,27.2s8.4,18.8,18.8,18.8s18.8-8.4,18.8-18.8S30.2,8.4,19.8,8.4z
	 M30,27.2c0-0.3-0.2-0.5-0.5-0.5S29,26.9,29,27.2c0,5-4.1,9.1-9.1,9.1c-5,0-9.1-4.1-9.1-9.1c0-3.2,1.6-6.1,4.3-7.8
	c0.2-0.1,0.3-0.5,0.2-0.7c-0.1-0.2-0.5-0.3-0.7-0.2c-3,1.9-4.8,5.1-4.8,8.6c0,5.6,4.5,10.1,10.1,10.1S30,32.8,30,27.2z M25.9,27.2
	c0-0.3-0.2-0.5-0.5-0.5s-0.5,0.2-0.5,0.5c0,2.8-2.3,5.1-5.1,5.1s-5.1-2.3-5.1-5.1c0-1.7,0.8-3.2,2.2-4.2c0.2-0.2,0.3-0.5,0.1-0.7
	c-0.2-0.2-0.5-0.3-0.7-0.1c-1.7,1.1-2.7,3-2.7,5c0,3.3,2.7,6.1,6.1,6.1C23.2,33.3,25.9,30.6,25.9,27.2z M34.3,27.2
	c0-0.3-0.2-0.5-0.5-0.5s-0.5,0.2-0.5,0.5c0,7.4-6,13.5-13.5,13.5s-13.5-6-13.5-13.5c0-4.7,2.4-9,6.4-11.4c0.2-0.1,0.3-0.5,0.2-0.7
	c-0.1-0.2-0.5-0.3-0.7-0.2c-4.3,2.7-6.8,7.3-6.8,12.3c0,8,6.5,14.5,14.5,14.5C27.8,41.7,34.3,35.2,34.3,27.2z M17.1,8.1V5.3h5.1v2.9
	c0,0.3,0.2,0.5,0.5,0.5s0.5-0.2,0.5-0.5V4.8c0-0.3-0.2-0.5-0.5-0.5h-6.1c-0.3,0-0.5,0.2-0.5,0.5v3.4c0,0.3,0.2,0.5,0.5,0.5
	S17.1,8.4,17.1,8.1z M35.1,14.3l2.8-3.7c0.1-0.1,0.1-0.2,0.1-0.4c0-0.1-0.1-0.2-0.2-0.3l-4.9-3.6c-0.2-0.2-0.5-0.1-0.7,0.1l-2.8,3.7
	c-0.2,0.2-0.1,0.5,0.1,0.7c0.2,0.2,0.5,0.1,0.7-0.1l2.5-3.3l4.1,3l-2.5,3.3c-0.2,0.2-0.1,0.5,0.1,0.7c0.1,0.1,0.2,0.1,0.3,0.1
	C34.9,14.5,35,14.4,35.1,14.3z M5.5,14.4c0.2-0.2,0.3-0.5,0.1-0.7l-2.5-3.3l4.1-3l2.5,3.3c0.2,0.2,0.5,0.3,0.7,0.1
	c0.2-0.2,0.3-0.5,0.1-0.7L7.8,6.3C7.7,6.2,7.6,6.1,7.4,6.1c-0.1,0-0.3,0-0.4,0.1L2.1,9.8C2,9.9,2,10,1.9,10.2c0,0.1,0,0.3,0.1,0.4
	l2.8,3.7c0.1,0.1,0.2,0.2,0.4,0.2C5.3,14.5,5.4,14.4,5.5,14.4z M25.6,5.3h-12c-0.3,0-0.5-0.2-0.5-0.5V0.5c0-0.3,0.2-0.5,0.5-0.5h12
	c0.3,0,0.5,0.2,0.5,0.5v4.3C26.1,5,25.9,5.3,25.6,5.3z M14.1,4.3h11V1h-11V4.3z M20.1,27.6c0.2-0.1,0.3-0.5,0.2-0.7l-7.4-11.9
	c-0.1-0.2-0.5-0.3-0.7-0.2c-0.2,0.1-0.3,0.5-0.2,0.7l7.4,11.9c0.1,0.2,0.3,0.2,0.4,0.2C19.9,27.7,20,27.7,20.1,27.6z"/>
</svg>
                                    </span>
                        <span class="scheme4-right"><h3>On-Demand and On-the-Go Access to Your Service</h3></span>
                    </li>
                    <li class="scheme4-item scheme4-item--4">
                        <span class="scheme4-left"><h3>Improved Organizational Culture</h3></span>
                        <span class="scheme4-icon">
                                        <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="43px" height="44px" viewbox="0 0 43 44" enable-background="new 0 0 43 44" xml:space="preserve" class="icon">
<path fill="#231F20" d="M42.3,20.9c0-0.1,0-0.1,0-0.2c0-3.6-3.5-3.6-4.6-3.6H24c0.2-0.8,0.5-2.1,0.7-2.6c0.1-0.2,0.2-0.5,0.3-0.8
	c0.1-0.4,0.3-0.9,0.5-1.4c0.5-1.1,1-2.4,1.1-3.8c0.4-4.2-0.2-6.3-2.1-7.8C23.7,0.3,22.9,0,22,0c-1.4,0-2.5,0.8-2.5,0.8c0,0,0,0,0,0
	c-0.5,0.4-0.9,1-0.8,1.7c0,0.7,0,2.9-0.5,4.5c-0.3,0.9-1.4,2.9-2.6,4.8c-1.5,2.5-2.5,4.5-3,5.8c0,0,0,0,0,0
	c-0.1,0.2-0.2,0.5-0.3,0.8c-0.2-0.1-0.3-0.1-0.5-0.1H1.4c-0.8,0-1.4,0.6-1.4,1.4v22.2c0,0.8,0.6,1.4,1.4,1.4h10.4
	c0.7,0,1.3-0.6,1.4-1.3c0.8,0.9,2,1.4,3.5,1.4h16.9c0,0,0,0,0,0c0,0,0,0,0,0H37c1.7,0,3.1-1.4,3.1-3.1c0-0.9-0.4-1.7-1.1-2.3
	c1.3-0.6,2.2-2,2.2-3.5c0-1.3-0.7-2.4-1.8-2.9c1.2-0.8,2-2.1,2-3.7c0-1.4-0.7-2.5-1.7-3.1C41.2,24.1,42.2,22.8,42.3,20.9z
	 M12.2,41.8c0,0.2-0.2,0.4-0.4,0.4H1.4C1.2,42.2,1,42,1,41.8V19.6c0-0.2,0.2-0.4,0.4-0.4h10.4c0.2,0,0.4,0.2,0.4,0.4v19.7V41.8z
	 M37.8,24.1h-0.5h-2h-0.6c-0.3,0-0.5,0.2-0.5,0.5s0.2,0.5,0.5,0.5h0.6h2c1.8,0,3.1,1.1,3.1,2.7c0,1.8-1.4,3.3-3.1,3.3h-2
	c-0.3,0-0.5,0.2-0.5,0.5s0.2,0.5,0.5,0.5h2h0.3c1.5,0,2.5,1,2.5,2.3c0,1.4-1.2,2.7-2.5,2.8H37h-1.6c-0.3,0-0.5,0.2-0.5,0.5
	s0.2,0.5,0.5,0.5l1.6,0c0,0,0,0,0,0c1.2,0,2.1,0.8,2.1,1.9c0,1.2-1,2.1-2.1,2.1h-3.3c0,0,0,0,0,0c0,0,0,0,0,0H16.7
	c-2.1,0-3.5-1.2-3.5-3V19.6v-0.1c0-0.5,0.1-1.1,0.3-1.5c0,0,0,0,0,0c0,0,0,0,0,0c0.3-0.9,1.1-2.6,2.9-5.7c1.2-2,2.3-3.9,2.6-4.9
	c0.8-2.1,0.6-4.9,0.6-4.9c0-0.3,0.1-0.7,0.4-0.8C20,1.6,20.9,1,22,1c0.7,0,1.3,0.2,1.8,0.6c1.3,1,2.1,2.5,1.7,6.9
	c-0.1,1.2-0.6,2.4-1,3.5c-0.2,0.5-0.4,1-0.5,1.5c-0.1,0.3-0.2,0.5-0.2,0.7c-0.3,0.8-0.8,3.2-0.9,3.3c0,0,0,0.1,0,0.1c0,0,0,0,0,0
	c0,0,0,0,0,0c0,0,0,0,0,0.1c0,0.2,0.2,0.4,0.5,0.4h14.4c2.4,0,3.5,0.7,3.6,2.3c0,0,0,0,0,0C41.4,23.6,38.8,24.1,37.8,24.1z
	 M6.6,35.5c-1.3,0-2.4,1.1-2.4,2.4c0,1.3,1.1,2.4,2.4,2.4c1.3,0,2.4-1.1,2.4-2.4C9,36.5,7.9,35.5,6.6,35.5z M6.6,39.2
	c-0.8,0-1.4-0.6-1.4-1.4c0-0.8,0.6-1.4,1.4-1.4c0.8,0,1.4,0.6,1.4,1.4C8,38.6,7.4,39.2,6.6,39.2z"/>
</svg>
                                    </span>
                        <span class="scheme4-right"><h3>Improved Customer Satisfaction</h3></span>
                    </li>
                    <li class="scheme4-item scheme4-item--5">
                        <span class="scheme4-left"><h3>Enhanced Staff Engagement</h3></span>
                        <span class="scheme4-icon">
                                        <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="47.5px" height="47.5px" viewbox="0 0 47.5 47.5" enable-background="new 0 0 47.5 47.5" xml:space="preserve" class="icon">
<path fill="#231F20" d="M23.8,44.4c-11.4,0-20.6-9.3-20.6-20.6c0-11.4,9.3-20.6,20.6-20.6c11.4,0,20.6,9.3,20.6,20.6
	C44.4,35.1,35.1,44.4,23.8,44.4z M23.8,4.1c-10.8,0-19.6,8.8-19.6,19.6c0,10.8,8.8,19.6,19.6,19.6s19.6-8.8,19.6-19.6
	C43.4,12.9,34.6,4.1,23.8,4.1z M23.8,37.8c-7.7,0-14.1-6.3-14.1-14.1c0-7.7,6.3-14,14.1-14s14.1,6.3,14.1,14
	C37.8,31.5,31.5,37.8,23.8,37.8z M23.8,10.7c-7.2,0-13.1,5.9-13.1,13c0,7.2,5.9,13.1,13.1,13.1s13.1-5.9,13.1-13.1
	C36.8,16.6,31,10.7,23.8,10.7z M23.8,27.4c-2,0-3.6-1.6-3.6-3.6c0-2,1.6-3.6,3.6-3.6s3.6,1.6,3.6,3.6C27.4,25.8,25.8,27.4,23.8,27.4
	z M23.8,21.1c-1.4,0-2.6,1.2-2.6,2.6c0,1.4,1.2,2.6,2.6,2.6s2.6-1.2,2.6-2.6C26.4,22.3,25.2,21.1,23.8,21.1z M24.7,47V34
	c0-0.3-0.2-0.5-0.5-0.5s-0.5,0.2-0.5,0.5v13c0,0.3,0.2,0.5,0.5,0.5S24.7,47.3,24.7,47z M24.7,13.5v-13c0-0.3-0.2-0.5-0.5-0.5
	s-0.5,0.2-0.5,0.5v13c0,0.3,0.2,0.5,0.5,0.5S24.7,13.7,24.7,13.5z M47.5,24.2c0-0.3-0.2-0.5-0.5-0.5h-13c-0.3,0-0.5,0.2-0.5,0.5
	s0.2,0.5,0.5,0.5h13C47.3,24.7,47.5,24.5,47.5,24.2z M14,24.2c0-0.3-0.2-0.5-0.5-0.5h-13C0.2,23.7,0,24,0,24.2s0.2,0.5,0.5,0.5h13
	C13.7,24.7,14,24.5,14,24.2z"/>
</svg>
                                    </span>
                        <span class="scheme4-right"><h3>Enhanced Customer Engagement</h3></span>
                    </li>
                    <li class="scheme4-item scheme4-item--6">
                        <span class="scheme4-left"><h3>Reduced Operating Costs</h3></span>
                        <span class="scheme4-icon">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="39px" height="38px" viewbox="0 0 39 38" enable-background="new 0 0 39 38" xml:space="preserve" class="icon">
<path d="M0.5,7.2C0.3,7.2,0.1,7,0,6.8C0,6.5,0.1,6.2,0.4,6.2L31.5,0c0.1,0,0.3,0,0.4,0.1c0.1,0.1,0.2,0.2,0.2,0.4v6.1
	c0,0.3-0.2,0.5-0.5,0.5s-0.5-0.2-0.5-0.5V1.1L0.5,7.2C0.6,7.2,0.5,7.2,0.5,7.2z M39,36.9V6.7c0-0.3-0.2-0.5-0.5-0.5h-38
	C0.2,6.2,0,6.4,0,6.7v30.2c0,0.3,0.2,0.5,0.5,0.5h38C38.8,37.4,39,37.2,39,36.9z M1,7.2h37v29.2H1V7.2z M38.5,27.4h-6.6
	c-3.2,0-5.4-2.5-5.4-6.1s2.2-6.1,5.4-6.1h6.6v-1h-6.6c-3.7,0-6.4,3-6.4,7.1c0,4.1,2.7,7.1,6.4,7.1h6.6V27.4z M34.8,21.6
	c0-1.5-1.3-2.8-2.8-2.8c-1.5,0-2.8,1.3-2.8,2.8c0,1.5,1.3,2.8,2.8,2.8C33.5,24.4,34.8,23.1,34.8,21.6z M33.8,21.6
	c0,1-0.8,1.8-1.8,1.8c-1,0-1.8-0.8-1.8-1.8s0.8-1.8,1.8-1.8C32.9,19.8,33.8,20.6,33.8,21.6z"/>
</svg>
                                    </span>
                        <span class="scheme4-right"><h3>Increased Sales</h3></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>		<section class="statistics2 tubes">
    <div class="tubes-container">
        <div class="tubes-bottom"></div>
    </div>

    <div class="container">
        <div class="heading">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="heading-title">
                        <h3>WHY GO MOBILE</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 statistics2-col">
                <div class="statistics2-container statistics2-container--1">
                    <div class="statistics2-item statistics2-item--1">
                        <div class="statistics2-num">71<span class="statistics2-percent">%</span></div>
                        <div class="statistics2-description">of enterprises deploy or are willing to deploy mobile apps</div>
                    </div>
                    <div class="statistics2-item statistics2-item--2">
                        <div class="statistics2-num">94<span class="statistics2-percent">%</span></div>
                        <div class="statistics2-description">of enterprises connect apps to backend systems</div>
                    </div>
                    <div class="statistics2-item statistics2-item--3">
                        <div class="statistics2-num">73<span class="statistics2-percent">%</span></div>
                        <div class="statistics2-description">of enterprises rate 'increased efficiency' as a key mobile benefit</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 statistics2-col">
                <div class="statistics2-container statistics2-container--2">
                    <div class="statistics2-item statistics2-item--4">
                        <div class="statistics2-num">127’</div>
                        <div class="statistics2-description">is the average time people spend using mobile apps daily</div>
                    </div>
                    <div class="statistics2-item statistics2-item--5">
                        <div class="statistics2-num">7.9</div>
                        <div class="statistics2-description">is the average number of apps launched by a person daily</div>
                    </div>
                    <div class="statistics2-item statistics2-item--6">
                        <div class="statistics2-num">3/4</div>
                        <div class="statistics2-description">users have a mobile app to make a buying decision</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
    echo $this->render('/site/_call_to_action');
?>