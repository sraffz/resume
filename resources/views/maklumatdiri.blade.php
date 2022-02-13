@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> <strong>Maklumat Diri</strong></div>
                
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ url('/insertmd')}}">
                            {{ csrf_field() }}
                            <fieldset>
                                @if(count($errors) >0 )
                                @foreach($errors->all() as $error)
                                <div class="alert alert-danger">{{$error}}</div>
                                @endforeach
                                @endif 
                                <div class="form-group{{ $errors->has('penempatan') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Penempatan</label> 
                                    <div class="col-md-6">
                                        <table>
                                            <tr>
                                                <td>
                                                    Bersedia untuk ditempatkan di sekolah kawasan : <br>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input guamusangjelikrai" name="gua_musang" id="" value="1" checked>
                                                            Gua Musang
                                                        </label>
                                                        <br>
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input guamusangjelikrai" name="jeli" id="" value="1" checked>
                                                            Jeli
                                                        </label>
                                                        <br>
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input guamusangjelikrai" name="kualakrai" id="" value="1" checked>
                                                            Kuala Krai
                                                        </label>
                                                    </div> <br>
                                                    
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input bukanGuamusangjelikrai" name="tidak_sedia" id="" value="1">
                                                            Tidak bersedia ditempatkan di jajahan Gua Musang, Jeli, Kuala Krai 
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Nama Penuh</label> 
                                    <div class="col-md-6">
                                        <input id="name2" type="text" disabled="true" class="form-control" name="name2" value="<?php echo $users->namapenuh; ?>">
                                        
                                        <input id="name" type="hidden" class="form-control" name="name" value="<?php echo $users->namapenuh; ?>">
                                        @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('ic') ? ' has-error' : '' }}">
                                    <label for="ic" class="col-md-4 control-label">No Kad Pengenalan</label>   
                                    <div class="col-md-6">
                                        <input id="ic"  type="text" class="form-control" name="ic" value="<?php echo $users->ic; ?>" required> 
                                        @if ($errors->has('ic'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('ic') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group{{ $errors->has('jantina') ? ' has-error' : '' }}">
                                    <label for="jantina" class="col-md-4 control-label">Jantina</label>
                                    <div class="col-md-6">
                                        <select class="form-control" name="jantina" id="" required>
                                            <option value="">Sila Pilih</option>
                                            <option value="LELAKI">LELAKI</option>
                                            <option value="PEREMPUAN">PEREMPUAN</option>
                                        </select>
                                        @if ($errors->has('jantina'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('jantina') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                    <label for="address" class="col-md-4 control-label">Alamat Surat Menyurat</label>
                                    <div class="col-md-6">
                                        <input id="address" onkeyup="this.value = this.value.toUpperCase();" type="text" class="form-control" placeholder="Alamat" name="address" value="{{ old('address') }}" required>
                                        @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('daerah') ? ' has-error' : '' }}">
                                    <label for="daerah" class="col-md-4 control-label">Daerah</label>
                                    <div class="col-md-3" required>
                                        
                                        <select class="form-control" name="daerah" id="daerah" required>
                                            <option value="">Sila Pilih</option>
                                            <option value="KOTA BHARU">KOTA BHARU</option>
                                            <option value="PASIR MAS">PASIR MAS</option>
                                            <option value="TUMPAT">TUMPAT</option>
                                            <option value="PASIR PUTEH">PASIR PUTEH</option>
                                            <option value="BACHOK">BACHOK</option>
                                            <option value="KUALA KRAI">KUALA KRAI</option>
                                            <option value="MACHANG">MACHANG</option>
                                            <option value="TANAH MERAH">TANAH MERAH</option>
                                            <option value="JELI">JELI</option>
                                            <option value="GUA MUSANG">GUA MUSANG</option>
                                        </select>
                                        @if ($errors->has('daerah'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('daerah') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('poskod') ? ' has-error' : '' }}">
                                        <label for="poskod" class="col-md-1 control-label">Poskod</label>
                                        <div class="col-md-2">
                                            <input id="poskod" type="text" class="form-control" placeholder="Poskod" name="poskod" value="{{ old('poskod') }}" required>    
                                            @if ($errors->has('poskod'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('poskod') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('negeri') ? ' has-error' : '' }}">
                                    <label for="negeri" class="col-md-4 control-label">Negeri</label>
                                    <div class="col-md-6">
                                        <input id="negeri2" disabled="true" type="text" placeholder="Negeri" class="form-control" name="negeri2" value="Kelantan" required>
                                        <input id="negeri" type="hidden" placeholder="Negeri" class="form-control" name="negeri" value="KELANTAN" required>
                                        
                                        @if ($errors->has('negeri'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('negeri') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group{{ $errors->has('warganegara') ? ' has-error' : '' }}">
                                    <label for="warganegara" class="col-md-4 control-label">Warganegara</label> 
                                    <div class="col-sm-6">
                                      <select id="warganegara" name="warganegara" class="form-control select2 costum-select" required>
                                                        <option value="{{ old('warganegara') }}">
                                                            {{ old('warganegara') }}</option>
                                                        <option value="AFGHANISTAN">AFGHANISTAN</option>
                                                        <option value="ÅLAND ISLANDS">ÅLAND ISLANDS</option>
                                                        <option value="ALBANIA">ALBANIA</option>
                                                        <option value="ALGERIA">ALGERIA</option>
                                                        <option value="AMERICAN SAMOA">AMERICAN SAMOA</option>
                                                        <option value="ANDORRA">ANDORRA</option>
                                                        <option value="ANGOLA">ANGOLA</option>
                                                        <option value="ANGUILLA">ANGUILLA</option>
                                                        <option value="ANTARCTICA">ANTARCTICA</option>
                                                        <option value="ANTIGUA AND BARBUDA">ANTIGUA AND BARBUDA</option>
                                                        <option value="ARGENTINA">ARGENTINA</option>
                                                        <option value="ARMENIA">ARMENIA</option>
                                                        <option value="ARUBA">ARUBA</option>
                                                        <option value="AUSTRALIA">AUSTRALIA</option>
                                                        <option value="AUSTRIA">AUSTRIA</option>
                                                        <option value="AZERBAIJAN">AZERBAIJAN</option>
                                                        <option value="BAHAMAS">BAHAMAS</option>
                                                        <option value="BAHRAIN">BAHRAIN</option>
                                                        <option value="BANGLADESH">BANGLADESH</option>
                                                        <option value="BARBADOS">BARBADOS</option>
                                                        <option value="BELARUS">BELARUS</option>
                                                        <option value="BELGIUM">BELGIUM</option>
                                                        <option value="BELIZE">BELIZE</option>
                                                        <option value="BENIN">BENIN</option>
                                                        <option value="BERMUDA">BERMUDA</option>
                                                        <option value="BHUTAN">BHUTAN</option>
                                                        <option value="BOLIVIA">BOLIVIA</option>
                                                        <option value="BOSNIA AND HERZEGOVINA">BOSNIA AND HERZEGOVINA
                                                        </option>
                                                        <option value="BOTSWANA">BOTSWANA</option>
                                                        <option value="BOUVET ISLAND">BOUVET ISLAND</option>
                                                        <option value="BRAZIL">BRAZIL</option>
                                                        <option value="BRITISH INDIAN OCEAN TERRITORY">BRITISH INDIAN
                                                            OCEAN TERRITORY</option>
                                                        <option value="BRUNEI DARUSSALAM">BRUNEI DARUSSALAM</option>
                                                        <option value="BULGARIA">BULGARIA</option>
                                                        <option value="BURKINA FASO">BURKINA FASO</option>
                                                        <option value="BURUNDI">BURUNDI</option>
                                                        <option value="CAMBODIA">CAMBODIA</option>
                                                        <option value="CAMEROON">CAMEROON</option>
                                                        <option value="CANADA">CANADA</option>
                                                        <option value="CAPE VERDE">CAPE VERDE</option>
                                                        <option value="CAYMAN ISLANDS">CAYMAN ISLANDS</option>
                                                        <option value="CENTRAL AFRICAN REPUBLIC">CENTRAL AFRICAN
                                                            REPUBLIC</option>
                                                        <option value="CHAD">CHAD</option>
                                                        <option value="CHILE">CHILE</option>
                                                        <option value="CHINA">CHINA</option>
                                                        <option value="CHRISTMAS ISLAND">CHRISTMAS ISLAND</option>
                                                        <option value="COCOS (KEELING) ISLANDS">COCOS (KEELING) ISLANDS
                                                        </option>
                                                        <option value="COLOMBIA">COLOMBIA</option>
                                                        <option value="COMOROS">COMOROS</option>
                                                        <option value="CONGO">CONGO</option>
                                                        <option value="CONGO, THE DEMOCRATIC REPUBLIC OF THE">CONGO, THE
                                                            DEMOCRATIC REPUBLIC OF THE</option>
                                                        <option value="COOK ISLANDS">COOK ISLANDS</option>
                                                        <option value="COSTA RICA">COSTA RICA</option>
                                                        <option value="COTE D'IVOIRE">COTE D'IVOIRE</option>
                                                        <option value="CROATIA">CROATIA</option>
                                                        <option value="CUBA">CUBA</option>
                                                        <option value="CYPRUS">CYPRUS</option>
                                                        <option value="CZECH REPUBLIC">CZECH REPUBLIC</option>
                                                        <option value="DENMARK">DENMARK</option>
                                                        <option value="DJIBOUTI">DJIBOUTI</option>
                                                        <option value="DOMINICA">DOMINICA</option>
                                                        <option value="DOMINICAN REPUBLIC">DOMINICAN REPUBLIC</option>
                                                        <option value="ECUADOR">ECUADOR</option>
                                                        <option value="EGYPT">EGYPT</option>
                                                        <option value="EL SALVADOR">EL SALVADOR</option>
                                                        <option value="EQUATORIAL GUINEA">EQUATORIAL GUINEA</option>
                                                        <option value="ERITREA">ERITREA</option>
                                                        <option value="ESTONIA">ESTONIA</option>
                                                        <option value="ETHIOPIA">ETHIOPIA</option>
                                                        <option value="FALKLAND ISLANDS (MALVINAS)">FALKLAND ISLANDS
                                                            (MALVINAS)</option>
                                                        <option value="FAROE ISLANDS">FAROE ISLANDS</option>
                                                        <option value="FIJI">FIJI</option>
                                                        <option value="FINLAND">FINLAND</option>
                                                        <option value="FRANCE">FRANCE</option>
                                                        <option value="FRENCH GUIANA">FRENCH GUIANA</option>
                                                        <option value="FRENCH POLYNESIA">FRENCH POLYNESIA</option>
                                                        <option value="FRENCH SOUTHERN TERRITORIES">FRENCH SOUTHERN
                                                            TERRITORIES</option>
                                                        <option value="GABON">GABON</option>
                                                        <option value="GAMBIA">GAMBIA</option>
                                                        <option value="GEORGIA">GEORGIA</option>
                                                        <option value="GERMANY">GERMANY</option>
                                                        <option value="GHANA">GHANA</option>
                                                        <option value="GIBRALTAR">GIBRALTAR</option>
                                                        <option value="GREECE">GREECE</option>
                                                        <option value="GREENLAND">GREENLAND</option>
                                                        <option value="GRENADA">GRENADA</option>
                                                        <option value="GUADELOUPE">GUADELOUPE</option>
                                                        <option value="GUAM">GUAM</option>
                                                        <option value="GUATEMALA">GUATEMALA</option>
                                                        <option value="GUERNSEY">GUERNSEY</option>
                                                        <option value="GUINEA">GUINEA</option>
                                                        <option value="GUINEA-BISSAU">GUINEA-BISSAU</option>
                                                        <option value="GUYANA">GUYANA</option>
                                                        <option value="HAITI">HAITI</option>
                                                        <option value="HEARD ISLAND AND MCDONALD ISLANDS">HEARD ISLAND
                                                            AND MCDONALD ISLANDS</option>
                                                        <option value="HOLY SEE (VATICAN CITY STATE)">HOLY SEE (VATICAN
                                                            CITY STATE)</option>
                                                        <option value="HONDURAS">HONDURAS</option>
                                                        <option value="HONG KONG">HONG KONG</option>
                                                        <option value="HUNGARY">HUNGARY</option>
                                                        <option value="ICELAND">ICELAND</option>
                                                        <option value="INDIA">INDIA</option>
                                                        <option value="INDONESIA">INDONESIA</option>
                                                        <option value="IRAN, ISLAMIC REPUBLIC OF">IRAN, ISLAMIC REPUBLIC
                                                            OF</option>
                                                        <option value="IRAQ">IRAQ</option>
                                                        <option value="IRELAND">IRELAND</option>
                                                        <option value="ISLE OF MAN">ISLE OF MAN</option>
                                                        <option value="ISRAEL">ISRAEL</option>
                                                        <option value="ITALY">ITALY</option>
                                                        <option value="JAMAICA">JAMAICA</option>
                                                        <option value="JAPAN">JAPAN</option>
                                                        <option value="JERSEY">JERSEY</option>
                                                        <option value="JORDAN">JORDAN</option>
                                                        <option value="KAZAKHSTAN">KAZAKHSTAN</option>
                                                        <option value="KENYA">KENYA</option>
                                                        <option value="KIRIBATI">KIRIBATI</option>
                                                        <option value="KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF">KOREA,
                                                            DEMOCRATIC PEOPLE'S REPUBLIC OF</option>
                                                        <option value="KOREA, REPUBLIC OF">KOREA, REPUBLIC OF</option>
                                                        <option value="KUWAIT">KUWAIT</option>
                                                        <option value="KYRGYZSTAN">KYRGYZSTAN</option>
                                                        <option value="LAO PEOPLE'S DEMOCRATIC REPUBLIC">LAO PEOPLE'S
                                                            DEMOCRATIC REPUBLIC</option>
                                                        <option value="LATVIA">LATVIA</option>
                                                        <option value="LEBANON">LEBANON</option>
                                                        <option value="LESOTHO">LESOTHO</option>
                                                        <option value="LIBERIA">LIBERIA</option>
                                                        <option value="LIBYAN ARAB JAMAHIRIYA">LIBYAN ARAB JAMAHIRIYA
                                                        </option>
                                                        <option value="LIECHTENSTEIN">LIECHTENSTEIN</option>
                                                        <option value="LITHUANIA">LITHUANIA</option>
                                                        <option value="LUXEMBOURG">LUXEMBOURG</option>
                                                        <option value="MACAO">MACAO</option>
                                                        <option value="MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF">
                                                            MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF</option>
                                                        <option value="MADAGASCAR">MADAGASCAR</option>
                                                        <option value="MALAWI">MALAWI</option>
                                                        <option selected value="MALAYSIA">MALAYSIA</option>
                                                        <option value="MALDIVES">MALDIVES</option>
                                                        <option value="MALI">MALI</option>
                                                        <option value="MALTA">MALTA</option>
                                                        <option value="MARSHALL ISLANDS">MARSHALL ISLANDS</option>
                                                        <option value="MARTINIQUE">MARTINIQUE</option>
                                                        <option value="MAURITANIA">MAURITANIA</option>
                                                        <option value="MAURITIUS">MAURITIUS</option>
                                                        <option value="MAYOTTE">MAYOTTE</option>
                                                        <option value="MEXICO">MEXICO</option>
                                                        <option value="MICRONESIA, FEDERATED STATES OF">MICRONESIA,
                                                            FEDERATED STATES OF</option>
                                                        <option value="MOLDOVA, REPUBLIC OF">MOLDOVA, REPUBLIC OF
                                                        </option>
                                                        <option value="MONACO">MONACO</option>
                                                        <option value="MONGOLIA">MONGOLIA</option>
                                                        <option value="MONTENEGRO">MONTENEGRO</option>
                                                        <option value="MONTSERRAT">MONTSERRAT</option>
                                                        <option value="MOROCCO">MOROCCO</option>
                                                        <option value="MOZAMBIQUE">MOZAMBIQUE</option>
                                                        <option value="MYANMAR">MYANMAR</option>
                                                        <option value="NAMIBIA">NAMIBIA</option>
                                                        <option value="NAURU">NAURU</option>
                                                        <option value="NEPAL">NEPAL</option>
                                                        <option value="NETHERLANDS">NETHERLANDS</option>
                                                        <option value="NETHERLANDS ANTILLES">NETHERLANDS ANTILLES
                                                        </option>
                                                        <option value="NEW CALEDONIA">NEW CALEDONIA</option>
                                                        <option value="NEW ZEALAND">NEW ZEALAND</option>
                                                        <option value="NICARAGUA">NICARAGUA</option>
                                                        <option value="NIGER">NIGER</option>
                                                        <option value="NIGERIA">NIGERIA</option>
                                                        <option value="NIUE">NIUE</option>
                                                        <option value="NORFOLK ISLAND">NORFOLK ISLAND</option>
                                                        <option value="NORTHERN MARIANA ISLANDS">NORTHERN MARIANA
                                                            ISLANDS</option>
                                                        <option value="NORWAY">NORWAY</option>
                                                        <option value="OMAN">OMAN</option>
                                                        <option value="PAKISTAN">PAKISTAN</option>
                                                        <option value="PALAU">PALAU</option>
                                                        <option value="PALESTINIAN TERRITORY, OCCUPIED">PALESTINIAN
                                                            TERRITORY, OCCUPIED</option>
                                                        <option value="PANAMA">PANAMA</option>
                                                        <option value="PAPUA NEW GUINEA">PAPUA NEW GUINEA</option>
                                                        <option value="PARAGUAY">PARAGUAY</option>
                                                        <option value="PERU">PERU</option>
                                                        <option value="PHILIPPINES">PHILIPPINES</option>
                                                        <option value="PITCAIRN">PITCAIRN</option>
                                                        <option value="POLAND">POLAND</option>
                                                        <option value="PORTUGAL">PORTUGAL</option>
                                                        <option value="PUERTO RICO">PUERTO RICO</option>
                                                        <option value="QATAR">QATAR</option>
                                                        <option value="REUNION">REUNION</option>
                                                        <option value="ROMANIA">ROMANIA</option>
                                                        <option value="RUSSIAN FEDERATION">RUSSIAN FEDERATION</option>
                                                        <option value="RWANDA">RWANDA</option>
                                                        <option value="SAINT HELENA">SAINT HELENA</option>
                                                        <option value="SAINT KITTS AND NEVIS">SAINT KITTS AND NEVIS
                                                        </option>
                                                        <option value="SAINT LUCIA">SAINT LUCIA</option>
                                                        <option value="SAINT PIERRE AND MIQUELON">SAINT PIERRE AND
                                                            MIQUELON</option>
                                                        <option value="SAINT VINCENT AND THE GRENADINES">SAINT VINCENT
                                                            AND THE GRENADINES</option>
                                                        <option value="SAMOA">SAMOA</option>
                                                        <option value="SAN MARINO">SAN MARINO</option>
                                                        <option value="SAO TOME AND PRINCIPE">SAO TOME AND PRINCIPE
                                                        </option>
                                                        <option value="SAUDI ARABIA">SAUDI ARABIA</option>
                                                        <option value="SENEGAL">SENEGAL</option>
                                                        <option value="SERBIA">SERBIA</option>
                                                        <option value="SEYCHELLES">SEYCHELLES</option>
                                                        <option value="SIERRA LEONE">SIERRA LEONE</option>
                                                        <option value="SINGAPORE">SINGAPORE</option>
                                                        <option value="SLOVAKIA">SLOVAKIA</option>
                                                        <option value="SLOVENIA">SLOVENIA</option>
                                                        <option value="SOLOMON ISLANDS">SOLOMON ISLANDS</option>
                                                        <option value="SOMALIA">SOMALIA</option>
                                                        <option value="SOUTH AFRICA">SOUTH AFRICA</option>
                                                        <option value="SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS">
                                                            SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>
                                                        <option value="SPAIN">SPAIN</option>
                                                        <option value="SRI LANKA">SRI LANKA</option>
                                                        <option value="SUDAN">SUDAN</option>
                                                        <option value="SURINAME">SURINAME</option>
                                                        <option value="SVALBARD AND JAN MAYEN">SVALBARD AND JAN MAYEN
                                                        </option>
                                                        <option value="SWAZILAND">SWAZILAND</option>
                                                        <option value="SWEDEN">SWEDEN</option>
                                                        <option value="SWITZERLAND">SWITZERLAND</option>
                                                        <option value="SYRIAN ARAB REPUBLIC">SYRIAN ARAB REPUBLIC
                                                        </option>
                                                        <option value="TAIWAN, PROVINCE OF CHINA">TAIWAN, PROVINCE OF
                                                            CHINA</option>
                                                        <option value="TAJIKISTAN">TAJIKISTAN</option>
                                                        <option value="TANZANIA, UNITED REPUBLIC OF">TANZANIA, UNITED
                                                            REPUBLIC OF</option>
                                                        <option value="THAILAND">THAILAND</option>
                                                        <option value="TIMOR-LESTE">TIMOR-LESTE</option>
                                                        <option value="TOGO">TOGO</option>
                                                        <option value="TOKELAU">TOKELAU</option>
                                                        <option value="TONGA">TONGA</option>
                                                        <option value="TRINIDAD AND TOBAGO">TRINIDAD AND TOBAGO</option>
                                                        <option value="TUNISIA">TUNISIA</option>
                                                        <option value="TURKEY">TURKEY</option>
                                                        <option value="TURKMENISTAN">TURKMENISTAN</option>
                                                        <option value="TURKS AND CAICOS ISLANDS">TURKS AND CAICOS
                                                            ISLANDS</option>
                                                        <option value="TUVALU">TUVALU</option>
                                                        <option value="UGANDA">UGANDA</option>
                                                        <option value="UKRAINE">UKRAINE</option>
                                                        <option value="UNITED ARAB EMIRATES">UNITED ARAB EMIRATES
                                                        </option>
                                                        <option value="UNITED KINGDOM">UNITED KINGDOM</option>
                                                        <option value="UNITED STATES">UNITED STATES</option>
                                                        <option value="UNITED STATES MINOR OUTLYING ISLANDS">UNITED
                                                            STATES MINOR OUTLYING ISLANDS</option>
                                                        <option value="URUGUAY">URUGUAY</option>
                                                        <option value="UZBEKISTAN">UZBEKISTAN</option>
                                                        <option value="VANUATU">VANUATU</option>
                                                        <option value="VENEZUELA">VENEZUELA</option>
                                                        <option value="VIET NAM">VIET NAM</option>
                                                        <option value="VIRGIN ISLANDS, BRITISH">VIRGIN ISLANDS, BRITISH
                                                        </option>
                                                        <option value="VIRGIN ISLANDS, U.S.">VIRGIN ISLANDS, U.S.
                                                        </option>
                                                        <option value="WALLIS AND FUTUNA">WALLIS AND FUTUNA</option>
                                                        <option value="WESTERN SAHARA">WESTERN SAHARA</option>
                                                        <option value="YEMEN">YEMEN</option>
                                                        <option value="ZAMBIA">ZAMBIA</option>
                                                        <option value="ZIMBABWE">ZIMBABWE</option>
                                                    </select>                                       
                                        @if ($errors->has('warganegara'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('warganegara') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group{{ $errors->has('nosuratberanak') ? ' has-error' : '' }}">
                                    <label for="nosuratberanak" class="col-md-4 control-label">No Surat Beranak</label>
                                    <div class="col-md-6">
                                        <input id="nosuratberanak" onkeyup="this.value = this.value.toUpperCase();" type="text" class="form-control" name="nosuratberanak" placeholder="No Surat Beranak" required>
                                        
                                        @if ($errors->has('nosuratberanak'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nosuratberanak') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                
                                
                                <div class="form-group{{ $errors->has('tempatlahir') ? ' has-error' : '' }}">
                                    <label for="tempatlahir" class="col-md-4 control-label">Tempat Kelahiran</label>
                                    
                                    <div class="col-md-6">
                                        <input id="tempatlahir" onkeyup="this.value = this.value.toUpperCase();" type="text" placeholder="Tempat Kelahiran" class="form-control" name="tempatlahir" value="{{ old('tempatlahir') }}" required>
                                        
                                        @if ($errors->has('tempatlahir'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('tempatlahir') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>   
                                
                                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                                    <label for="status" class="col-md-4 control-label">Status Perkahwinan</label>
                                    
                                    <div class="col-md-6">
                                        {{-- <input id="status" type="status" class="form-control" name="status" value="{{ old('status') }}" required> --}}
                                        <select class="form-control" name="status" id="" required>
                                            <option value="">Sila Pilih</option>
                                            <option value="BUJANG">BUJANG</option>
                                            <option value="BERKAHWIN">BERKAHWIN</option>
                                            <option value="DUDA">DUDA</option>
                                            <option value="JANDA">JANDA</option>
                                        </select>
                                        
                                        @if ($errors->has('status'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('status') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">Alamat Email</label>
                                    
                                    <div class="col-md-6">
                                        
                                        <input id="email2" disabled="true" type="text" class="form-control" name="email2" value="<?php echo $users->email; ?>"  required>
                                        
                                        <input id="email" type="hidden"  class="form-control" name="email" value="<?php echo $users->email; ?>"  required>
                                        
                                        
                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group{{ $errors->has('hp') ? ' has-error' : '' }}">
                                    <label for="hp" class="col-md-4 control-label">No Telefon (HP)</label>
                                    
                                    <div class="col-md-6">
                                        <input id="hp" type="hp" class="form-control" name="hp" value="{{ old('hp') }}" required>
                                        
                                        @if ($errors->has('hp'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('hp') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group{{ $errors->has('hpr') ? ' has-error' : '' }}">
                                    <label for="hpr" class="col-md-4 control-label">No Telefon (Rumah)</label>
                                    
                                    <div class="col-md-6">
                                        <input id="hpr" type="hpr" class="form-control" name="hpr" value="{{ old('hpr') }}">
                                        
                                        @if ($errors->has('hpr'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('hpr') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group{{ $errors->has('sek') ? ' has-error' : '' }}">
                                    <label for="sek" class="col-md-4 control-label">Sekolah Menengah terakhir</label>
                                    
                                    <div class="col-md-6">
                                        <input id="sek" type="sek" class="form-control" name="sek" value="{{ old('sek') }}" placeholder="Nama Sekolah" onkeyup="this.value = this.value.toUpperCase();" required>
                                        
                                        @if ($errors->has('sek'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('sek') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group{{ $errors->has('jenissekolah') ? ' has-error' : '' }}">
                                    <label for="jenissekolah" class="col-md-4 control-label">Jenis Sekolah</label>
                                    
                                    <div class="col-md-6">
                                        <select class="form-control" name="jenissekolah" id="" required>
                                            <option value="">Sila Pilih</option>
                                            <option value="Kementerian Pendidikan Malaysia (KPM)">Kementerian Pendidikan Malaysia</option>
                                            <option value="Yayasan Islam Kelantan (YIK)">Yayasan Islam Kelantan</option>
                                        </select>
                                        
                                        @if ($errors->has('jenissekolah'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('jenissekolah') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-6">
                                        <button type="submit" class="btn btn-danger">
                                            Hantar
                                        </button>
                                    </div>
                                </div>
                            </fieldset>
                            
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
