<div class="sect_1">
	<div class="container" style="padding: 0;">
		<div class="col-xs-12" style="padding: 0;">
			<img src="/assets/images/baroyeon/main.jpg" alt="메인이미지">
		</div>
	</div>
</div>
<div style="height: 200px;"></div>


<div class="sect_4 baroyeon">
	<div class="container">
		<!-- <button class="pdata_up">
			<span class="glyphicon glyphicon-menu-up"></span>
		</button> -->
		<div id="modal-btn" class="title subs_event">
			<img src="/assets/images/subs_title_icon_k.webp" style="width: 30px;">
			<img src="/assets/images/subs_title_k.webp">
		</div>

	</div>


	<!-- 모달 -->
	<div id="modal" class="modal">
		<div class="modal-content">
			<span class="close" style="display: none;">&times;</span>
			<div class="title subs_event">
				<h3>상담 신청하기</h3>
			</div>
			<div class="form">
				<div class="box">
					<div class="desc">
						<p>이름</p>
						<input type="text" placeholder="성함" id="name" />
					</div>
					<div class="desc">
						<p>전화번호</p>
						<input type="text" placeholder="연락처" id="phone" />
					</div>
					<div class="desc">
						<p>나이</p>
						<input type="text" placeholder="ex)1993" id="age" />
					</div>
					<div class="desc">
						<p>성별</p>
						<select id="gender">
							<option value="남자">남자</option>
							<option value="여자">여자</option>
						</select>
					</div>
					<div class="desc">
						<p>지역</p>
						<select id="live">
							<option value="01">서울</option>
							<option value="08">경기북부(구리,성남,하남 등)</option>
							<option value="18">경기남부(수원,용인,군포 등)</option>
							<option value="05">인천</option>
							<option value="09">강원</option>
							<option value="02">부산</option>
							<option value="07">울산</option>
							<option value="03">대구</option>
							<option value="06">대전</option>
							<option value="19">세종</option>
							<option value="10">충북</option>
							<option value="11">충남</option>
							<option value="12">경북</option>
							<option value="13">경남</option>
							<option value="14">전북</option>
							<option value="15">전남</option>
							<option value="16">제주도</option>
							<option value="17">해외</option>
						</select>
					</div>
					<div class="desc" style="display:none;">
						<p>키</p>
						<input type="text" placeholder="160cm" id="height" />
					</div>
					<div class="desc">
						<p>학력</p>
						<select id="education">
							<option value="35">고등학교 졸업</option>
							<option value="45">전문대 졸업</option>
							<option value="55">대학교 졸업</option>
							<option value="65">대학원 졸업</option>
							<option value="75">박사</option>
						</select>
					</div>
					<div class="desc">
						<p>결혼</p>
						<select id="marriage">
							<option value="초혼">초혼</option>
							<option value="재혼">재혼</option>
						</select>
					</div>
					<li style="display: none;">
						<input type="text" class="inpput1" value="01080219244" id="DSTADDR" />
					</li>
					<div class="checkbox">
						<div class="opacity"></div>
						<div class="check">
							<div class="desc">
								<input type="checkbox" class="agree" id="agree1"> 개인정보취급방침 동의<a href="javascript();" data-toggle="modal" data-target="#Modal_1">[필수]</a>
							</div>
							<div class="desc">
								<input type="checkbox" class="agree" id="agree2"> 제3자정보제공 동의<a href="javascript();" data-toggle="modal" data-target="#Modal_2">[필수]</a>
							</div>
						</div>
					</div>
				</div>
				<div class="ask_comp" id="submitBtn">
					<p>상담 예약하기</p>
				</div>

			</div>
		</div>
	</div>

	<script>
		const form = document.querySelector('.form');
		const submitBtn = document.getElementById('submitBtn');
		submitBtn.addEventListener('click', (event) => {
			event.preventDefault(); // 기본 양식 제출을 방지

			// 양식 필드의 값을 검색
			const phoneNum = form.querySelector('#phone').value.replace(/-/g, ''); // 하이픈 제거
			const formData = {
				name: form.querySelector('#name').value,
				tel1: phoneNum.slice(0, 3),
				tel2: phoneNum.slice(3, 7),
				tel3: phoneNum.slice(7),
				age: form.querySelector('#age').value,
				gender: form.querySelector('#gender').value,
				education: form.querySelector('#education').value,
				career: form.querySelector('#marriage').value,
				area: form.querySelector('#live').value
			};

			// 양식 데이터에서 URLsearchParams 개체를 구성
			const params = new URLSearchParams(formData);

			// JSONP 요청
			function response(data) {
				console.log(data);
			}
			const script = document.createElement("script");
			script.src = "https://www.baroyeon.co.kr/landAD/imi/SBJ_Save.baro?callback=response&" + params;
			document.body.appendChild(script);
		});
	</script>

	<!-- Modal_1 -->
	<div class="modal fade bd-example-modal-lg" id="Modal_1" tabindex="-1" role="dialog" aria-labelledby=".bd-example-modal-lg" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<p class="title"></p>
					<div class="contents">
						<p>
							<b>개인정보 수집 이용동의(필수)</b><br>
							당사는 상담신청 및 상품소개 업무를 위해 고객님의 개인정보수집∙이용에 대한 동의를 받고 있습니다. 당사는 "정보통신망이용촉진및 정보보호등에관한법률"에 따라 귀하의 개인정보를 다음과 같이 수집∙이용하고자 합니다.<br><br>

							<b>개인정보 수집자</b><br>
							㈜에스비제이<br><br>

							<b>수집하는 개인정보의 항목</b><br>
							- 성명, 핸드폰번호, 나이, 성별, 키, 학력, 결혼여부<br><br>

							<b>개인정보의 수집 및 이용 목적</b><br>
							가. 전화, 문자를 통한 이벤트 참여 확인, 상조, 레져, 보험상품 등의 서비스 소개 및 상담<br>
							나. 서비스 이용에 따른 본인확인, 경품 발송, 고지사항 전달, 고객 민원 처리<br>
							다. 신규 서비스 안내 및 제휴사 마케팅 활용<br>
							- 서비스 안내 및 상담을 위한 TM 및 문자 발송<br><br>


							<b>개인정보의 보유 및 이용기간</b><br>
							- 동의일로 부터 3년<br><br>

							<b>개인정보의 보유 및 이용 동의철회</b><br>
							동의한 개인정보 수집, 이용, 제공에 대한 철회는 언제든지 하실 수 있습니다.<br>
							본 동의를 거부하는 경우에는 상품소개 및 가입상담 서비스 제공이 제한될 수 있습니다.<br>
							당사 고객센터 이메일(info@sbjgroup.co.kr)을 통해 언제든지 개인정보 삭제 및 마케팅 활동에 대한 중지를 요청할 수 있습니다.<br>

						</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">닫기</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal_2 -->
	<div class="modal fade bd-example-modal-lg" id="Modal_2" tabindex="-1" role="dialog" aria-labelledby=".bd-example-modal-lg" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<p class="title"></p>
					<div class="contents">
						<b>제3자 정보제공 동의(필수)</b>
						<table class="table table-bordered table-responsive">
							<tr>
								<th>개인정보 제공받는 자</th>
								<th>㈜바로연 결혼정보 </th>
							</tr>
							<tr>
								<td>개인정보 이용목적</td>
								<td>결혼중개 서비스<br>
									소개 및 가입안내</td>
							</tr>
							<tr>
								<td>개인정보 제공항목</td>
								<td>성명, 휴대폰번호, 나이, 성별, 키, 학력, 결혼여부</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">닫기</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal_3 -->
	<div class="modal fade bd-example-modal-lg" id="Modal_3" tabindex="-1" role="dialog" aria-labelledby=".bd-example-modal-lg" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<p class="title"></p>
					<div class="contents">
						<p>
							<b>마케팅 정보 활용 동의 [선택]</b><br>
							(주)유토피아퓨처은(는) 「개인정보보호법」및「신용정보의 이용 및 보호에 관한 법률」에 따라 당사 상품소개 및 홍보 등을 위하여 귀하의 개인(신용)정보를 다음과 같이 수집ㆍ이용하고자 합니다.
							* 동의 후 언제든지 동의 철회 및 마케팅 중단을 요청하실 수 있습니다.
							<br><br>

							<b>1. 수집항목</b><br>
							이름, 전화번호<br><br>

							<b>2. 보유 · 이용기간</b><br>
							정보동의고객 : 동의일로부터 3년<br><br>

							<b>3. 수집목적</b><br>
							상담신청에 대한 응대, 우편 · 전화 · 인터넷 · 방문 등을 통한 유익한 정보의 제공, 상조상품, 금융상품 소개 및 기타 서비스의 제공 안내, 이벤트 · 행사의 안내 등 회사의 정상적인 영업에 관계된 행위
							<br><br>
							<br>
							* 상담신청은 마케팅 정보활용 동의를 거부하셔도 전화로 상담을 진행할 수 있습니다.
							<br><br>
						</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">닫기</button>
				</div>
			</div>
		</div>
	</div>
