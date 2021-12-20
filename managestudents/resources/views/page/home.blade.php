@extends('layout')
@section('content')
<!-- <?php
    use Illuminate\Support\Facades\Session;
    $message = Session::get('message');
    if($message){
        echo '<script>alert("'.$message.'");</script> ';
        Session::put('message',null);
    }
    ?> -->
 	<!-- Start of slider section
 		============================================= -->
 		<section id="slide" class="slider-section">
 			<div id="slider-item" class="slider-item-details">
 				<div  class="slider-area slider-bg-5 relative-position">
 					<div class="slider-text">
 						<div class="section-title mb20 headline text-left ">
 							<div class="layer-1-1">
 								<span class="subtitle ml42 text-uppercase">TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT</span>
 							</div>
 							<div class="layer-1-3">
 								<h2><span>Quản lý</span> - Tra cứu <br> <span>thông tin sinh viên</span></h2>
 							</div>
 						</div>
 						<div class="layer-1-4">
 							<div class="genius-btn  text-center text-uppercase ul-li-block bold-font">
 								<a href="#">ĐĂNG NHẬP <i class="fas fa-caret-right"></i></a>
 							</div>
 						</div>
 					</div>

 				</div>
 				<div class="slider-area slider-bg-2 relative-position">
 					<div class="slider-text">
 						<div class="section-title mb20 headline text-center ">
 							<div class="layer-1-1">
 								<span class="subtitle ml42 text-uppercase">TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT</span>
 							</div>
 							<div class="layer-1-2">
 								<h2 class="secoud-title"> Tra cứu <span>Nhanh Chóng.</span></h2>
 							</div>
 						</div>
 						<div class="layer-1-3">
 							<div class="search-course mb30 relative-position">
 								<form action="#" method="post">
 									<input class="course" name="course" type="text" placeholder="Nhập thông tin bạn cần tìm">
 									<div class="nws-button text-center  gradient-bg text-capitalize">
 										<button type="submit" value="Submit">Tìm kiếm</button> 
 									</div>
 								</form>
 							</div>
 						</div>
 					</div>
 				</div>
 				<div class="slider-area slider-bg-3 relative-position">
 					<div class="slider-text">
 						<div class="layer-1-2">
 							<div class="coming-countdown ul-li">
 								<ul>
 									<li class="days">
 										<span class="number"></span>
 										<span class>Days</span>
 									</li>

 									<li class="hours">
 										<span class="number"></span>
 										<span class>Hours</span>
 									</li>

 									<li class="minutes">
 										<span class="number"></span>
 										<span class>Minutes</span>
 									</li>

 									<li class="seconds">
 										<span class="number"></span>
 										<span class>Seconds</span>
 									</li>
 								</ul>
 							</div>
 						</div>
 						<div class="section-title mb20 headline text-center ">
 							<div class="layer-1-3">
 								<h2 class="third-slide"> Xem danh sách <br> <span>dễ dàng</span></h2>
 							</div>
 						</div>
 					</div>
 				</div>
 				<div class="slider-area slider-bg-4 relative-position">
 					<div class="slider-text">
 						<div class="section-title mb20 headline text-center ">
 							<span class="subtitle ml42 text-uppercase">TRƯỜNG ĐẠI HỌC SƯ PHẠM KỸ THUẬT</span>
 							<h2 class=""  ><span>Thuận tiện</span> - nhanh chóng <br> <span>An toàn</span></h2>
 						</div>
 					</div>
 				</div>
 			</div>
 		</section>
	<!-- End of slider section
		============================================= -->
		


	<!-- Start of sponsor section
		============================================= -->
		<div id="sponsor" class="sponsor-section sponsor-2">
			<div class="container">
				<div class="sponsor-item">
					<div class="sponsor-pic text-center">
						<img src="{{('assets/img/sponsor/s-1.jpg')}}" alt="">
					</div>
					<div class="sponsor-pic text-center ">
						<img src="{{('assets/img/sponsor/s-2.jpg')}}"  alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{('assets/img/sponsor/s-3.jpg')}}"  alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{('assets/img/sponsor/s-4.jpg')}}"  alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{('assets/img/sponsor/s-5.jpg')}}"  alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{('assets/img/sponsor/s-6.jpg')}}"  alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{('assets/img/sponsor/s-1.jpg')}}"  alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{('assets/img/sponsor/s-2.jpg')}}"  alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{('assets/img/sponsor/s-3.jpg')}}"  alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{('assets/img/sponsor/s-4.jpg')}}"  alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{('assets/img/sponsor/s-5.jpg')}}"  alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{('assets/img/sponsor/s-6.jpg')}}"  alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{('assets/img/sponsor/s-1.jpg')}}"  alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{('assets/img/sponsor/s-2.jpg')}}"  alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{('assets/img/sponsor/s-3.jpg')}}"  alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{('assets/img/sponsor/s-4.jpg')}}"  alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{('assets/img/sponsor/s-5.jpg')}}"  alt="">
					</div>
					<div class="sponsor-pic text-center">
						<img src="{{('assets/img/sponsor/s-6.jpg')}}"  alt="">
					</div>
				</div>
			</div>
		</div>
	<!-- End of sponsor section MIEN
		============================================= -->


	<!-- Start of about us section
		============================================= -->
		<section id="about-us" class="about-us-section home-secound">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="about-resigter-form backgroud-style relative-position">
							<div class="register-content">
								<div class="register-fomr-title text-center">
									<h3 class="bold-font"><span>Nhận thông tin</span> miễn phí từ chúng tôi.</h3>
									<p>Hơn 10000 sinh viên đã theo học ở đây</p>
								</div>
								<div class="register-form-area">
									<form class="contact_form" action="#" method="POST" enctype="multipart/form-data">
										<div class="contact-info">
											<input class="name" name="name" type="text" placeholder="Tên của bạn.">
										</div>
										<div class="contact-info">
											<input class="nbm" name="nbm" type="number" placeholder="Số điện thoại">
										</div>
										<div class="contact-info">
											<input class="email" name="email" type="email" placeholder="Email.">
										</div>
										<select>
											<option value="9" selected="">Chuyên ngành bạn quan tâm.</option>
											<option value="10">Web Design</option>
											<option value="11">Web Development</option>
											<option value="12">Php Core</option>
										</select>
										<div class="contact-info">
											<input type="text" id="datepicker" placeholder="Ngày sinh.">
										</div>
										<textarea placeholder="Nội dung."></textarea>
										<div class="nws-button text-uppercase text-center white text-capitalize">
											<button type="submit" value="Submit">Đăng ký </button> 
										</div> 
									</form>
								</div>
							</div>
						</div>
						<div class="bg-mockup">
							<img src="{{('assets/img/about/abt.jpg')}}" alt="">
						</div>
					</div>
					<!-- /form -->

					<div class="col-md-7">
						<div class="about-us-text">
							<div class="section-title relative-position mb20 headline text-left">
								<span class="subtitle ml42 text-uppercase">Trường Đại học Sư phạm Kỹ thuật </span>
								<h2>Là trường công lập <span> thành viên của Đại học Đà Nẵng </span>
									được thành lập năm 2017.</h2>
								<p>Là trung tâm đào tạo nguồn nhân lực kỹ thuật và công nghệ phục vụ cho nhu cầu phát triển kinh tế - xã hội khu vực miền Trung – Tây Nguyên, Nhà trường đã liên tục phát triển qua các thời kỳ lịch sử.  </p>
							</div>
							<div class="about-content-text">
								<p>Nhà trường đào tạo hệ chính qui cấp học là Đại học, gồm các ngành liên quan đến khối kỹ thuật. Tiền thân đi qua các giai đoạn:</p>
								<div class="about-list mb65 ul-li-block">
									<ul>
										<li>1960: Đặt viên đá đầu tiên xây dựng Trường Kỹ thuật Đà Nẵng. </li>
										<li>1962: Khai giảng khóa đầu tiên. </li>
										<li>1976: Chuyển đổi thành Trường Công nhân Kỹ thuật Nguyễn Văn Trỗi. </li>
										<li>1994: Thành lập Trường Cao đẳng Công nghệ thuộc Đại học Đà Nẵng. </li>
										<li>2017: Thành lập Trường Đại học Sư phạm Kỹ thuật thuộc Đại học Đà Nẵng</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of about us section
		============================================= -->

	<!-- Start secound testimonial section
		============================================= -->
		<section id="testimonial-secound" class="secound-testimoinial-section">
			<div class="container">
				<div class="testimonial-slide">
					<div class="section-title mb35 headline text-center">
						<span class="subtitle text-uppercase">Trường Đại học Sư phạm Kỹ thuật</span>
						<h2>Châm ngôn <span>giảng dạy.</span></h2>
					</div>

					<div class="testimonial-secound-slide-area">
						<div class="student-qoute text-center">
							<p>“ Phát huy truyền thống hơn 55 năm, Trường Đai học Sư phạm Kỹ thuật mục tiêu đào tạo <b> nguồn nhân lực kỹ thuật công nghệ các cấp:</b>kỹ sư công nghệ, cử nhân sư phạm kỹ thuật và kỹ sư thực hành ứng dụng.”</p>
							<div class="student-name-designation">
								<span class="st-name bold-font">PGS. TS. Phan Cao Thọ </span>
								<span class="st-designation">Hiệu trưởng</span>
							</div>
						</div>

						<div class="student-qoute text-center">
							<p>“Trường Đại học Sư Phạm Kỹ Thuật <b> biến ước mơ thành hiện thực</b>. Đường đến thành công!”</p>
							<div class="student-name-designation">
								<span class="st-name bold-font">PGS. TS. Võ Trung Hùng </span>
								<span class="st-designation">Phó Hiệu trưởng</span>
							</div>
						</div>

						<div class="student-qoute text-center">
							<p>“Sự gương mẫu của người thầy giáo là tia sáng mặt trời <b> huận lợi nhất đối với sự phát triển tâm hồn non trẻ</b>.  mà không có gì thay thế được.”</p>
							<div class="student-name-designation">
								<span class="st-name bold-font">TS. Hoàng Dũng</span>
								<span class="st-designation">Phó Hiệu trưởng</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End secound testimonial section
		============================================= -->


	<!-- Start secound teacher section
		============================================= -->
		<section id="teacher-2" class="secound-teacher-section">
			<div class="container">
				<div class="section-title mb35 headline text-left">
					<span class="subtitle text-uppercase">Trường Đại học Sư phạm Kỹ thuật</span>
					<h2>Đội ngũ <span>Giảng Viên.</span></h2>
				</div>
				<div class="teacher-secound-slide">
					<div class="teacher-img-text relative-position text-center">
						<div class="teacher-img-social relative-position">
							<img src="{{('assets/img/teacher/tb-1.png')}}" alt="">
							<div class="blakish-overlay"></div>
							<div class="teacher-social-list ul-li">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus-g')}}"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="teacher-name-designation mt15">
							<span class="teacher-name">Daniel Alvares</span>
							<span class="teacher-designation">Mobile Apps</span>
						</div>
					</div>

					<div class="teacher-img-text relative-position text-center">
						<div class="teacher-img-social relative-position">
							<img src="{{('assets/img/teacher/tb-2.png')}}" alt="">
							<div class="blakish-overlay"></div>
							<div class="teacher-social-list ul-li">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus-g')}}"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="teacher-name-designation mt15">
							<span class="teacher-name">Daniel Alvares</span>
							<span class="teacher-designation">Mobile Apps</span>
						</div>
					</div>

					<div class="teacher-img-text relative-position text-center">
						<div class="teacher-img-social relative-position">
							<img src="{{('assets/img/teacher/tb-3.png')}}" alt="">
							<div class="blakish-overlay"></div>
							<div class="teacher-social-list ul-li">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus-g')}}"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="teacher-name-designation mt15">
							<span class="teacher-name">Juliana Hernandes</span>
							<span class="teacher-designation">Web Design</span>
						</div>
					</div>

					<div class="teacher-img-text relative-position text-center">
						<div class="teacher-img-social relative-position">
							<img src="{{('assets/img/teacher/tb-4.png')}}" alt="">
							<div class="blakish-overlay"></div>
							<div class="teacher-social-list ul-li">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus-g')}}"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="teacher-name-designation mt15">
							<span class="teacher-name">Daniel Alvares</span>
							<span class="teacher-designation">Mobile Apps</span>
						</div>
					</div>

					<div class="teacher-img-text relative-position text-center">
						<div class="teacher-img-social relative-position">
							<img src="{{('assets/img/teacher/tb-1.png')}}" alt="">
							<div class="blakish-overlay"></div>
							<div class="teacher-social-list ul-li">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus-g')}}"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="teacher-name-designation mt15">
							<span class="teacher-name">Berliana Luis</span>
							<span class="teacher-designation">IOS App</span>
						</div>
					</div>

					<div class="teacher-img-text relative-position text-center">
						<div class="teacher-img-social relative-position">
							<img src="{{('assets/img/teacher/tb-3.png')}}" alt="">
							<div class="blakish-overlay"></div>
							<div class="teacher-social-list ul-li">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus-g')}}"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="teacher-name-designation mt15">
							<span class="teacher-name">Johansen Doe</span>
							<span class="teacher-designation">Mobile Apps</span>
						</div>
					</div>

					<div class="teacher-img-text relative-position text-center">
						<div class="teacher-img-social relative-position">
							<img src="{{('assets/img/teacher/tb-1.png')}}"  alt="">
							<div class="blakish-overlay"></div>
							<div class="teacher-social-list ul-li">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus-g')}}"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="teacher-name-designation mt15">
							<span class="teacher-name">Johanas Doe</span>
							<span class="teacher-designation">Graphic</span>
						</div>
					</div>

					<div class="teacher-img-text relative-position text-center">
						<div class="teacher-img-social relative-position">
							<img src="{{('assets/img/teacher/tb-4.png')}}"  alt="">
							<div class="blakish-overlay"></div>
							<div class="teacher-social-list ul-li">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus-g')}}"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="teacher-name-designation mt15">
							<span class="teacher-name">Daniel Alvares</span>
							<span class="teacher-designation">Mobile Apps</span>
						</div>
					</div>

					<div class="teacher-img-text relative-position text-center">
						<div class="teacher-img-social relative-position">
							<img src="{{('assets/img/teacher/tb-1.png')}}"  alt="">
							<div class="blakish-overlay"></div>
							<div class="teacher-social-list ul-li">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus-g')}}"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="teacher-name-designation mt15">
							<span class="teacher-name">Daniel Alvares</span>
							<span class="teacher-designation">Mobile Apps</span>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End teacher section
		============================================= -->
 @endsection