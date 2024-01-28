<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
 <footer>
        <div class="footer-upper">
            <div class="container">
                <div class="footer-links">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="footer-about footer-margin">
                                <div class="about-logo">
                                    <a href="{{url('/')}}"><img src="{{asset(get_settings('logo'))}}" width="100" height="58" alt="Image"></a>
                                </div>
                               <p></p>
                                <div class="about-location">
                                    <ul>
                                        <li><i class="flaticon-maps-and-flags" aria-hidden="true"></i>Islamabad Pakistan</li>
                                     <li><i class="flaticon-phone-call"></i> 051-444-2246</li>                                        
                                        <li><i class="flaticon-mail"></i> shopaway@email.com</li>
                                    </ul>
                                </div>
                                <div class="footer-social-links">
                                    <ul>
                                        <li class="social-icon"><a href="https://www.facebook.com/maxhypechannel"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="social-icon"><a href="https://www.instagram.com/maxhypechannel/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li class="social-icon"><a href="https://twitter.com/TheMaxHype1"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li class="social-icon"><a href="https://www.linkedin.com/in/themaxhype-maxhype-a05687199"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li class="social-icon"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>    
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer-links-list footer-margin">
                                <h3>MAXHYPECHANNEL</h3>
                                <ul>
                                    <li><a href="{{url('/testimonials')}}">Our Testimonals</a></li>
                                    <li><a href="{{url('/privacypolicy')}}">Privacy Policy</a></li>
                                    <li><a href="{{url('/terms')}}">Terms and Conditions</a></li>
                                    <li><a href="{{url('/careers')}}">Careers</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer-recent-post footer-margin">
                                <h3>MEMBERSHIP</h3>
                                 <ul>
                                    <li><a href="#">Test</a></li>
                                </ul>                        
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer-links-list">
                                <div class="footer-instagram">
                                    <h3>BUSINESESS</h3>
                                    <ul>
                                        <li><a href="#"><img src="{{asset('frontend/images/logo1.png')}}" width="80" height="90" alt="Image"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright-content">
                        <p>COPYRIGHT © 2022
                        <a class="ml-25" href="{{url('/')}}" target="_blank">Shopaway.pk</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></P>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="payment-content">
                            <ul>
                                <li>We Accept</li>
                                <li>
                                    <img src="{{asset('/frontend/images')}}/payment1.png" alt="Image">
                                </li>
                                <li>
                                    <img src="{{asset('/frontend/images')}}/payment2.png" alt="Image">
                                </li>
                                <li>
                                    <img src="{{asset('/frontend/images')}}/payment3.png" alt="Image">
                                </li>
                                <li>
                                    <img src="{{asset('/frontend/images')}}/payment4.png" alt="Image">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
$( document ).ready(function() {
 $(".sub-formdata").submit(function(e){ 
    e.preventDefault();
    var token = $('input[name=_token]').val();
    var formdata = $(".sub-formdata").serialize();
    $.ajax({
            url: "{{url('/savesubscriber')}}",
            type:"POST",
            headers: {'X-CSRF-TOKEN': token},
            data:formdata,
            dataType:"json",
            success:function(data)
            { 
            Swal.fire('You have Successfully Subscribed!')
            $('.sub-formdata')[0].reset();   
         }
     });
    });
});

</script>
