<script>
function update_profile() {
  var form = document.getElementById("update_profile_form")
  var formData = new FormData(form)
  var xhr = new XMLHttpRequest()
  xhr.open("POST", "controller", true)
  xhr.onload = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      window.location.href = "#profile-tab"
      window.location.reload()
    }
  };
  xhr.send(formData)
}
</script>

<iframe name="update_profile_frame" style="display:none"></iframe>

<form id="update_profile_form" action="controller" method="POST" target="update_profile_frame" enctype="multipart/form-data" class="container">
  <div class="row mt-5">
    <div class="col-12">
      <div class="d-flex align-items-center">
        <input name="request" type="hidden" value="update_profile">
        <img class="pfp rounded-circle" src="assets/uploads/profile-img/<?= $_SESSION['user_id'] ?>.<?= $user['profile_image'] ?>" width="150" height="150">
        <div class="ml-3 w-100">
          <h2 class="mb-4">
            <input class="form-control" id="edit-username" name="username" type="text" placeholder="Username" value="<?= $user['username'] ?>">
          </h2>
          <h4 class="mb-2">
            <input class="form-control" id="edit-full-name" name="full_name" type="text" placeholder="Full Name" value="<?= $user['full_name'] ?>">
          </h4>
          <div class="custom-file mt-3">
            <input class="custom-file-input" id="edit-profile-image" name="profile_image" type="file">
            <label class="custom-file-label" for="edit-profile-image">Profile image</label>
          </div>
          <div class="form-group mt-3">
            <select class="form-control" id="edit-country" name="country">
              <option value="<?= $user['country'] ?>" selected>current country: <?= $user['country'] ?></option>
              <option value="AF">Afghanistan 🇦🇫</option>
              <option value="AO">Angola 🇦🇴</option>
              <option value="AL">Albania 🇦🇱</option>
              <option value="AD">Andorra 🇦🇩</option>
              <option value="AE">United Arab Emirates 🇦🇪</option>
              <option value="AR">Argentina 🇦🇷</option>
              <option value="AM">Armenia 🇦🇲</option>
              <option value="AG">Antigua and Barbuda 🇦🇬</option>
              <option value="AU">Australia 🇦🇺</option>
              <option value="AT">Austria 🇦🇹</option>
              <option value="AZ">Azerbaijan 🇦🇿</option>
              <option value="BI">Burundi 🇧🇮</option>
              <option value="BE">Belgium 🇧🇪</option>
              <option value="BJ">Benin 🇧🇯</option>
              <option value="BF">Burkina Faso 🇧🇫</option>
              <option value="BD">Bangladesh 🇧🇩</option>
              <option value="BG">Bulgaria 🇧🇬</option>
              <option value="BH">Bahrain 🇧🇭</option>
              <option value="BS">Bahamas 🇧🇸</option>
              <option value="BA">Bosnia and Herzegovina 🇧🇦</option>
              <option value="BY">Belarus 🇧🇾</option>
              <option value="BZ">Belize 🇧🇿</option>
              <option value="BO">Bolivia 🇧🇴</option>
              <option value="BR">Brazil 🇧🇷</option>
              <option value="BB">Barbados 🇧🇧</option>
              <option value="BN">Brunei 🇧🇳</option>
              <option value="BT">Bhutan 🇧🇹</option>
              <option value="BW">Botswana 🇧🇼</option>
              <option value="CF">Central African Republic 🇨🇫</option>
              <option value="CA">Canada 🇨🇦</option>
              <option value="CH">Switzerland 🇨🇭</option>
              <option value="CL">Chile 🇨🇱</option>
              <option value="CN">China 🇨🇳</option>
              <option value="CI">Ivory Coast 🇨🇮</option>
              <option value="CM">Cameroon 🇨🇲</option>
              <option value="CD">DR Congo 🇨🇩</option>
              <option value="CG">Republic of the Congo 🇨🇬</option>
              <option value="CO">Colombia 🇨🇴</option>
              <option value="KM">Comoros 🇰🇲</option>
              <option value="CV">Cape Verde 🇨🇻</option>
              <option value="CR">Costa Rica 🇨🇷</option>
              <option value="CU">Cuba 🇨🇺</option>
              <option value="CY">Cyprus 🇨🇾</option>
              <option value="CZ">Czechia 🇨🇿</option>
              <option value="DE">Germany 🇩🇪</option>
              <option value="DJ">Djibouti 🇩🇯</option>
              <option value="DM">Dominica 🇩🇲</option>
              <option value="DK">Denmark 🇩🇰</option>
              <option value="DO">Dominican Republic 🇩🇴</option>
              <option value="DZ">Algeria 🇩🇿</option>
              <option value="EC">Ecuador 🇪🇨</option>
              <option value="EG">Egypt 🇪🇬</option>
              <option value="ER">Eritrea 🇪🇷</option>
              <option value="ES">Spain 🇪🇸</option>
              <option value="EE">Estonia 🇪🇪</option>
              <option value="ET">Ethiopia 🇪🇹</option>
              <option value="FI">Finland 🇫🇮</option>
              <option value="FJ">Fiji 🇫🇯</option>
              <option value="FR">France 🇫🇷</option>
              <option value="FM">Micronesia 🇫🇲</option>
              <option value="GA">Gabon 🇬🇦</option>
              <option value="GB">United Kingdom 🇬🇧</option>
              <option value="GE">Georgia 🇬🇪</option>
              <option value="GH">Ghana 🇬🇭</option>
              <option value="GN">Guinea 🇬🇳</option>
              <option value="GM">Gambia 🇬🇲</option>
              <option value="GW">Guinea-Bissau 🇬🇼</option>
              <option value="GQ">Equatorial Guinea 🇬🇶</option>
              <option value="GR">Greece 🇬🇷</option>
              <option value="GD">Grenada 🇬🇩</option>
              <option value="GT">Guatemala 🇬🇹</option>
              <option value="GY">Guyana 🇬🇾</option>
              <option value="HN">Honduras 🇭🇳</option>
              <option value="HR">Croatia 🇭🇷</option>
              <option value="HT">Haiti 🇭🇹</option>
              <option value="HU">Hungary 🇭🇺</option>
              <option value="ID">Indonesia 🇮🇩</option>
              <option value="IN">India 🇮🇳</option>
              <option value="IE">Ireland 🇮🇪</option>
              <option value="IR">Iran 🇮🇷</option>
              <option value="IQ">Iraq 🇮🇶</option>
              <option value="IS">Iceland 🇮🇸</option>
              <option value="IL">Israel 🇮🇱</option>
              <option value="IT">Italy 🇮🇹</option>
              <option value="JM">Jamaica 🇯🇲</option>
              <option value="JO">Jordan 🇯🇴</option>
              <option value="JP">Japan 🇯🇵</option>
              <option value="KZ">Kazakhstan 🇰🇿</option>
              <option value="KE">Kenya 🇰🇪</option>
              <option value="KG">Kyrgyzstan 🇰🇬</option>
              <option value="KH">Cambodia 🇰🇭</option>
              <option value="KI">Kiribati 🇰🇮</option>
              <option value="KN">Saint Kitts and Nevis 🇰🇳</option>
              <option value="KR">South Korea 🇰🇷</option>
              <option value="KW">Kuwait 🇰🇼</option>
              <option value="LA">Laos 🇱🇦</option>
              <option value="LB">Lebanon 🇱🇧</option>
              <option value="LR">Liberia 🇱🇷</option>
              <option value="LY">Libya 🇱🇾</option>
              <option value="LC">Saint Lucia 🇱🇨</option>
              <option value="LI">Liechtenstein 🇱🇮</option>
              <option value="LK">Sri Lanka 🇱🇰</option>
              <option value="LS">Lesotho 🇱🇸</option>
              <option value="LT">Lithuania 🇱🇹</option>
              <option value="LU">Luxembourg 🇱🇺</option>
              <option value="LV">Latvia 🇱🇻</option>
              <option value="MA">Morocco 🇲🇦</option>
              <option value="MC">Monaco 🇲🇨</option>
              <option value="MD">Moldova 🇲🇩</option>
              <option value="MG">Madagascar 🇲🇬</option>
              <option value="MV">Maldives 🇲🇻</option>
              <option value="MX">Mexico 🇲🇽</option>
              <option value="MH">Marshall Islands 🇲🇭</option>
              <option value="MK">Macedonia 🇲🇰</option>
              <option value="ML">Mali 🇲🇱</option>
              <option value="MT">Malta 🇲🇹</option>
              <option value="MM">Myanmar 🇲🇲</option>
              <option value="ME">Montenegro 🇲🇪</option>
              <option value="MN">Mongolia 🇲🇳</option>
              <option value="MZ">Mozambique 🇲🇿</option>
              <option value="MR">Mauritania 🇲🇷</option>
              <option value="MU">Mauritius 🇲🇺</option>
              <option value="MW">Malawi 🇲🇼</option>
              <option value="MY">Malaysia 🇲🇾</option>
              <option value="NA">Namibia 🇳🇦</option>
              <option value="NE">Niger 🇳🇪</option>
              <option value="NG">Nigeria 🇳🇬</option>
              <option value="NI">Nicaragua 🇳🇮</option>
              <option value="NL">Netherlands 🇳🇱</option>
              <option value="NO">Norway 🇳🇴</option>
              <option value="NP">Nepal 🇳🇵</option>
              <option value="NR">Nauru 🇳🇷</option>
              <option value="NZ">New Zealand 🇳🇿</option>
              <option value="OM">Oman 🇴🇲</option>
              <option value="PK">Pakistan 🇵🇰</option>
              <option value="PA">Panama 🇵🇦</option>
              <option value="PE">Peru 🇵🇪</option>
              <option value="PH">Philippines 🇵🇭</option>
              <option value="PW">Palau 🇵🇼</option>
              <option value="PG">Papua New Guinea 🇵🇬</option>
              <option value="PL">Poland 🇵🇱</option>
              <option value="KP">North Korea 🇰🇵</option>
              <option value="PT">Portugal 🇵🇹</option>
              <option value="PY">Paraguay 🇵🇾</option>
              <option value="QA">Qatar 🇶🇦</option>
              <option value="RO">Romania 🇷🇴</option>
              <option value="RU">Russia 🇷🇺</option>
              <option value="RW">Rwanda 🇷🇼</option>
              <option value="SA">Saudi Arabia 🇸🇦</option>
              <option value="SD">Sudan 🇸🇩</option>
              <option value="SN">Senegal 🇸🇳</option>
              <option value="SG">Singapore 🇸🇬</option>
              <option value="SB">Solomon Islands 🇸🇧</option>
              <option value="SL">Sierra Leone 🇸🇱</option>
              <option value="SV">El Salvador 🇸🇻</option>
              <option value="SM">San Marino 🇸🇲</option>
              <option value="SO">Somalia 🇸🇴</option>
              <option value="RS">Serbia 🇷🇸</option>
              <option value="SS">South Sudan 🇸🇸</option>
              <option value="ST">São Tomé and Príncipe 🇸🇹</option>
              <option value="SR">Suriname 🇸🇷</option>
              <option value="SK">Slovakia 🇸🇰</option>
              <option value="SI">Slovenia 🇸🇮</option>
              <option value="SE">Sweden 🇸🇪</option>
              <option value="SZ">Swaziland 🇸🇿</option>
              <option value="SC">Seychelles 🇸🇨</option>
              <option value="SY">Syria 🇸🇾</option>
              <option value="TD">Chad 🇹🇩</option>
              <option value="TG">Togo 🇹🇬</option>
              <option value="TH">Thailand 🇹🇭</option>
              <option value="TJ">Tajikistan 🇹🇯</option>
              <option value="TM">Turkmenistan 🇹🇲</option>
              <option value="TL">Timor-Leste 🇹🇱</option>
              <option value="TO">Tonga 🇹🇴</option>
              <option value="TT">Trinidad and Tobago 🇹🇹</option>
              <option value="TN">Tunisia 🇹🇳</option>
              <option value="TR">Turkey 🇹🇷</option>
              <option value="TV">Tuvalu 🇹🇻</option>
              <option value="TZ">Tanzania 🇹🇿</option>
              <option value="UG">Uganda 🇺🇬</option>
              <option value="UA">Ukraine 🇺🇦</option>
              <option value="UY">Uruguay 🇺🇾</option>
              <option value="US">United States 🇺🇸</option>
              <option value="UZ">Uzbekistan 🇺🇿</option>
              <option value="VA">Vatican City 🇻🇦</option>
              <option value="VC">Saint Vincent and the Grenadines 🇻🇨</option>
              <option value="VE">Venezuela 🇻🇪</option>
              <option value="VN">Vietnam 🇻🇳</option>
              <option value="VU">Vanuatu 🇻🇺</option>
              <option value="WS">Samoa 🇼🇸</option>
              <option value="YE">Yemen 🇾🇪</option>
              <option value="ZA">South Africa 🇿🇦</option>
              <option value="ZM">Zambia 🇿🇲</option>
              <option value="ZW">Zimbabwe 🇿🇼</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 mt-5">
      <h5>
        <textarea class="form-control" id="edit-bio" name="bio" rows="3" placeholder="Bio"><?= $user['bio'] ?></textarea>
      </h5>
    </div>
    <div class="col-12 mt-3">
      <div class="alert alert-danger" id="edit-error" style="display: none;"></div>
      <span onclick="update_profile()" class="btn btn-primary btn-block w-100">Save</span>
    </div>
  </div>
</form>