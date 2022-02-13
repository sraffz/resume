@extends('layouts.clapp')

@section('content')
	<div class="container">
    	<div class="row">
        	<div class="col-md-8 col-md-offset-2">
        		<div class="panel-heading"></div>
        		@if(count($info) > 0)
  					@foreach($info->all() as $infos)
        		<p class="uppercase"> <strong>{{ $infos->namapenuh }}</strong> <br>
					{{ $infos->alamat }} <br>
					{{ $infos->poskod }} {{ $infos->daerah }}, <br>
					{{ $infos->negeri }}.                                                     
				</p>
				@endforeach
                @endif
				<p><strong>________________________________________________________________________________________________________________</strong></p>

        		<p> 
					Tarikh :<br><br><strong>YM PENGARAH </strong><br>
					YAYASAN ISLAM KELANTAN <br>
					PETI SURAT 248, JALAN KUALA KRAI, <br>
					NILAM PURI 15730, KOTA BHARU, <br>
					KELANTAN                                                    
				</p>

				<p>Yang Mulia Pengarah,</p>

				<p class="uppercase"><strong>PERMOHONAN JAWATAN {{ $infos->jawatandipohon }} YAYASAN ISLAM KELANTAN</strong></p>
				<p>Perkara di atas dengan hormatnya dirujuk.</p>


					<p class="text-justify" >2. &emsp;Saya sebagaimana nama di atas merupakan graduan 
							@if(count($ijazahs) > 0)
			  					@foreach($ijazahs->all() as $ijazah)
					        		Ijazah <strong>{{ $ijazah->bidang }}</strong> dari <strong>{{ $ijazah->institusi }}</strong> dan telah mendapat kelulusan pada tahun <strong>{{ $ijazah->tahungrad }}</strong>.
			            		@endforeach
			                @endif

			                @if(count($diploma) > 0)
			  					@foreach($diploma->all() as $diplomas)
					        		Selain itu, saya juga merupakan graduan diploma <strong>{{ $diplomas->bidang }}</strong> dari <strong>{{ $diplomas->institusi }}</strong> dan mendapat kelulusan pada tahun <strong>{{ $diplomas->tahungrad }}</strong>.
			            		@endforeach
			                @endif

			                @if(count($sijil) > 0)
			  					@foreach($sijil->all() as $sijils)
					        		Di Samping itu, saya juga merupakan graduan sijil <strong>{{ $sijils->bidang }}</strong> dari <strong>{{ $sijils->institusi }}</strong> dan mendapat kelulusan pada tahun <strong>{{ $sijils->tahungrad }}</strong>.
			            		@endforeach
			                @endif

			                @if(count($tahfiz) > 0)
			  					@foreach($tahfiz->all() as $tahfizz)
					        		Diploma {{ $tahfizz->bidang }} dari {{ $tahfizz->institusi }} dan mendapat kelulusan pada tahun {{ $tahfizz->tahungrad }}.
			            		@endforeach
			                @endif

			                 <br><br> 

					3. 	&emsp;Sehubungan dengan itu, saya ingin memohon jawatan <strong>{{ $infos->jawatandipohon }}</strong> di sekolah kelolaan Yayasan Islam Kelantan. Saya amat berminat untuk berkhidmat sebagai tenaga pendidik di mana-mana sekolah kelolaan pihak Yang Mulia Pengarah Yayasan Islam Kelantan. Selain itu, saya juga merupakan seorang yang cepat belajar dan mudah bekerja di dalam pasukan. 
					<br><br>
					4.&emsp;	Saya berharap agar permohonan saya diberi pertimbangan sewajarnya. Saya juga berharap pihak Yang Mulia dapat menghubungi saya untuk ditemuduga di talian <strong>{{ $infos->nohp }} (email : {{ $infos->email }})</strong>. Segala pertimbangan pihak Yang Mulia saya dahului dengan ucapan terima kasih.

				<br><br><br>

				Yang Benar,
				<br><br><br>

				<strong>({{ $infos->namapenuh }})</strong><br>
				{{ $infos->ic }}
				<br><br><br><br>

				*Cover letter ini tidak memerlukan tandatangan kerana cover letter ini cetakan berkomputer.

				

				</p>

{{-- <script>
    window.onload = function(){
        window.print();
    }
</script> --}}

<script type="text/javascript">
    try {
        this.print();
    }
    catch(e) {
        window.onload = window.print;
    }
</script>
        		</div>
        	</div>
        </div>
    </div>

@endsection


				