<style>
.card-content {
   white-space: pre-line !important;
}
.right {
   float: right;
}
.card {
    border: 0;
    margin-bottom: 30px;
    margin-top: 30px;
    border-radius: 6px;
    color: rgba(0, 0, 0, .87);
    background: #fff;
    width: 100%;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .2), 0 1px 5px 0 rgba(0, 0, 0, .12)
}

.card .card-category:not([class*=text-]) {
    color: #999
}

.card .card-category {
    margin-top: 10px
}

.card .card-category .material-icons {
    position: relative;
    top: 8px;
    line-height: 0
}

.card .form-check {
    margin-top: 15px
}

.card .card-title {
    margin-top: .625rem
}

.card .card-title:last-child {
    margin-bottom: 0
}

.card.no-shadow .card-header-image,
.card.no-shadow .card-header-image img {
    box-shadow: none !important
}

.card .card-body,
.card .card-footer {
    padding: .9375rem 1.875rem
}

.card .card-body+.card-footer {
    padding-top: 0;
    border: 0;
    border-radius: 6px
}

.card .card-footer {
    display: flex;
    align-items: center;
    background-color: transparent;
    border: 0
}

.card .card-footer .author,
.card .card-footer .stats {
    display: inline-flex
}

.card .card-footer .stats {
    color: #999
}

.card .card-footer .stats .material-icons {
    position: relative;
    top: 4px;
    font-size: 18px
}

.card.bmd-card-raised {
    box-shadow: 0 8px 10px 1px rgba(0, 0, 0, .14), 0 3px 14px 2px rgba(0, 0, 0, .12), 0 5px 5px -3px rgba(0, 0, 0, .2)
}

@media (min-width:992px) {
    .card.bmd-card-flat {
        box-shadow: none
    }
}

.card .card-header {
    border-radius: 3px;
    padding: 1rem 15px;
    margin-left: 15px;
    margin-right: 15px;
    margin-top: -30px;
    border: 0;
    background: linear-gradient(60deg, #eee, #bdbdbd)
}

.card .card-header .title {
    color: #fff
}

.card .card-header:not([class*=header-]) {
    box-shadow: 0 16px 38px -12px rgba(0, 0, 0, .56), 0 4px 25px 0 rgba(0, 0, 0, .12), 0 8px 10px -5px rgba(0, 0, 0, .2)
}

.card .card-header .nav-tabs {
    padding: 0
}

.card .card-header.card-header-image {
    position: relative;
    padding: 0;
    z-index: 1;
    margin-left: 15px;
    margin-right: 15px;
    margin-top: -30px;
    border-radius: 6px
}

.card .card-header.card-header-image img {
    width: 100%;
    border-radius: 6px;
    pointer-events: none;
    box-shadow: 0 5px 15px -8px rgba(0, 0, 0, .24), 0 8px 10px -5px rgba(0, 0, 0, .2)
}

.card .card-header.card-header-image .card-title {
    position: absolute;
    bottom: 15px;
    left: 15px;
    color: #fff;
    font-size: 1.125rem;
    text-shadow: 0 2px 5px rgba(33, 33, 33, .5)
}

.card .card-header.card-header-image .colored-shadow {
    transform: scale(.94);
    top: 12px;
    filter: blur(12px);
    position: absolute;
    width: 100%;
    height: 100%;
    background-size: cover;
    z-index: -1;
    transition: opacity .45s;
    opacity: 0
}

.card .card-header.card-header-image.no-shadow {
    box-shadow: none
}

.card .card-header.card-header-image.no-shadow.shadow-normal {
    box-shadow: 0 16px 38px -12px rgba(0, 0, 0, .56), 0 4px 25px 0 rgba(0, 0, 0, .12), 0 8px 10px -5px rgba(0, 0, 0, .2)
}

.card .card-header.card-header-image.no-shadow .colored-shadow {
    display: none !important
}

.card.bg-primary,
.card .card-header-primary,
.card.card-rotate.bg-primary .back,
.card.card-rotate.bg-primary .front {
    background: linear-gradient(60deg, #ab47bc, #7b1fa2)
}

.card.bg-info,
.card .card-header-info,
.card.card-rotate.bg-info .back,
.card.card-rotate.bg-info .front {
    background: linear-gradient(60deg, #26c6da, #0097a7)
}

.card.bg-success,
.card .card-header-success,
.card.card-rotate.bg-success .back,
.card.card-rotate.bg-success .front {
    background: linear-gradient(60deg, #66bb6a, #388e3c)
}

.card.bg-warning,
.card .card-header-warning,
.card.card-rotate.bg-warning .back,
.card.card-rotate.bg-warning .front {
    background: linear-gradient(60deg, #ffa726, #f57c00)
}

.card.bg-danger,
.card .card-header-danger,
.card.card-rotate.bg-danger .back,
.card.card-rotate.bg-danger .front {
    background: linear-gradient(60deg, #ef5350, #d32f2f)
}

.card.bg-rose,
.card .card-header-rose,
.card.card-rotate.bg-rose .back,
.card.card-rotate.bg-rose .front {
    background: linear-gradient(60deg, #ec407a, #c2185b)
}

.card .card-header-primary {
    box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .2), 0 13px 24px -11px rgba(156, 39, 176, .6)
}

.card .card-header-danger {
    box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .2), 0 13px 24px -11px rgba(244, 67, 54, .6)
}

.card .card-header-rose {
    box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .2), 0 13px 24px -11px rgba(233, 30, 99, .6)
}

.card .card-header-warning {
    box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .2), 0 13px 24px -11px rgba(255, 152, 0, .6)
}

.card .card-header-info {
    box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .2), 0 13px 24px -11px rgba(0, 188, 212, .6)
}

.card .card-header-success {
    box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .2), 0 13px 24px -11px rgba(76, 175, 80, .6)
}

.card[class*=bg-],
.card[class*=bg-] .card-title,
.card[class*=bg-] .card-title a,
.card[class*=bg-] .icon i,
.card [class*=header-],
.card [class*=header-] .card-title,
.card [class*=header-] .card-title a,
.card [class*=header-] .icon i {
    color: #fff
}

.card[class*=bg-] .icon i,
.card [class*=header-] .icon i {
    border-color: hsla(0, 0%, 100%, .25)
}

.card[class*=bg-] .author a,
.card[class*=bg-] .card-category,
.card[class*=bg-] .card-description,
.card[class*=bg-] .stats,
.card [class*=header-] .author a,
.card [class*=header-] .card-category,
.card [class*=header-] .card-description,
.card [class*=header-] .stats {
    color: hsla(0, 0%, 100%, .8)
}

.card[class*=bg-] .author a:active,
.card[class*=bg-] .author a:focus,
.card[class*=bg-] .author a:hover,
.card [class*=header-] .author a:active,
.card [class*=header-] .author a:focus,
.card [class*=header-] .author a:hover {
    color: #fff
}

.card .author .avatar {
    width: 30px;
    height: 30px;
    overflow: hidden;
    border-radius: 50%;
    margin-right: 5px
}

.card .author a {
    color: #3c4858;
    text-decoration: none
}

.card .author a .ripple-container {
    display: none
}

.card .card-category-social .fa {
    font-size: 24px;
    position: relative;
    margin-top: -4px;
    top: 2px;
    margin-right: 5px
}

.card .card-category-social .material-icons {
    position: relative;
    top: 5px
}

.card[class*=bg-],
.card[class*=bg-] .card-body {
    border-radius: 6px
}

.card[class*=bg-] .card-body h1 small,
.card[class*=bg-] .card-body h2 small,
.card[class*=bg-] .card-body h3 small,
.card[class*=bg-] h1 small,
.card[class*=bg-] h2 small,
.card[class*=bg-] h3 small {
    color: hsla(0, 0%, 100%, .8)
}

.card .card-stats {
    background: transparent;
    display: flex
}

.card .card-stats .author,
.card .card-stats .stats {
    display: inline-flex
}

.card-blog {
    margin-top: 60px
}

.card-blog [class*=col-] .card-header-image img {
    width: 100%
}

.card-blog .carf-footer .stats .material-icons {
    font-size: 18px;
    position: relative;
    top: 4px;
    width: 19px
}

.card-testimonial .card-footer {
    display: block
}

.card-testimonial .card-footer .card-avatar {
    margin-bottom: -60px
}

.card-contact .card-header {
    margin: 0 15px;
    margin-top: -20px
}

.card-profile,
.card-testimonial {
    margin-top: 30px;
    text-align: center
}

.card-profile .card-avatar,
.card-testimonial .card-avatar {
    max-width: 130px;
    max-height: 130px;
    margin: -50px auto 0;
    border-radius: 50%;
    overflow: hidden;
    padding: 0;
    box-shadow: 0 16px 38px -12px rgba(0, 0, 0, .56), 0 4px 25px 0 rgba(0, 0, 0, .12), 0 8px 10px -5px rgba(0, 0, 0, .2)
}

.card-profile .card-avatar+.card-body,
.card-testimonial .card-avatar+.card-body {
    margin-top: 15px
}

.card-profile .card-avatar img,
.card-testimonial .card-avatar img {
    width: 100%;
    height: auto
}

.card-profile .card-body+.card-footer,
.card-testimonial .card-body+.card-footer {
    margin-top: -15px
}

.card-profile .card-footer .btn.btn-just-icon,
.card-testimonial .card-footer .btn.btn-just-icon {
    font-size: 20px;
    padding: 12px;
    line-height: 1em
}

.card-profile.card-plain .card-avatar,
.card-testimonial.card-plain .card-avatar {
    margin-top: 0
}
.card .card-footer {
   margin: 0 0px 10px;
   padding-top: 10px;
   border-top: 1px solid #eeeeee;
}
.ml-auto, .mx-auto {
       margin-left: auto !important;
}
</style>

<?php

   if(isset($_GET['id'])) {
      $id = (int)$_GET['id'];
   } else {
?>
<script>window.location.href="index.php";</script>
<?php
   }
?>
<div class="row">
   <div class="col-lg-12 col-md-12">
      <div class="card card-blog">
      <div class="card-body ">
         <?php

            switch($id) {
               case 1:
                  include_once "Policy.php";
                  break;
               case 2:
                  include_once "TermAndCond.php";
                  break;
               case 3:
                  include_once "AboutUs.php";
                  break;
               default:
                  ?><script type="text/javascript">
                     window.location.href="index.php"
                  </script> <?php
                  break;
            }

         ?>
      </div>

      </div>
   </div>
</div>
