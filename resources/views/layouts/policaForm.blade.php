

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">

            <div class="panel-group">
                <div class="panel panel-primary">

                    <div class="panel-heading"><h4>Ugovaratelj</h4></div>

                    <div class="panel-body">

                        @include('errors.list')
                        {{Form::open(array('route' => 'polica', 'class' => 'form'))}}

                        <div class="form-group">
                            {{Form::label('ugovaratelj')}}
                            {{Form::text('ugovaratelj_id', null, array('class' => 'form-control', 'placeholder' => 'id ugovaratelja'))}}

                        </div>


                        <div class="form-group">
                            {{Form::label('Vrsta Osobe:')}}
                            {{Form::select('ugovarateljVrsta', DB::table('vrstaosobe')->orderBy('ID')->pluck('Naziv','ID'), array('class' => 'form-control', 'placeholder' => 'vrsta ugovaratelja'))}}

                        </div>

                        <div class="form-group">
                            {{Form::label('Naziv:')}}
                            {{Form::text('ugovarateljNaziv', null, array('class' => 'form-control', 'placeholder' => 'naziv ugovaratelja'))}}

                        </div>
                        <div class="form-group">
                            {{Form::label('Ime:')}}
                            {{Form::text('ugovarateljIme', null, array('class' => 'form-control', 'placeholder' => 'Ime ugovaratelja'))}}

                        </div>

                        <div class="form-group">
                            {{Form::label('Prezime:')}}
                            {{Form::text('ugovarateljPrezime', null, array('class' => 'form-control', 'placeholder' => 'Prezime ugovaratelja'))}}

                        </div>

                        <div class="form-group">
                            {{Form::label('OIB:')}}
                            {{Form::text('ugovarateljOib', null, array('required', 'class' => 'form-control', 'placeholder' => 'Oib ugovaratelja', 'maxlength' => 13))}}

                        </div>


                        <div class="form-group">
                            {{Form::label('Datum Rođenja:')}}
                            {{Form::date('ugovarateljDatumRodjenja', null, array('class' => 'form-control', 'placeholder' => 'Datum ugovaratelja'))}}

                        </div>
                        <div class="form-group">
                            {{Form::label('Spol:')}}
                            {{Form::label('M')}}
                            {{Form::radio('ugovarateljSpolOznaka', 'm')}}
                            {{Form::label('Ž')}}
                            {{Form::radio('ugovarateljSpolOznaka', 'z')}}

                        </div>


                        <div class="form-group">
                            {{Form::label('Ulica:')}}
                            {{Form::text('ugovarateljUlica', null, array('class' => 'form-control', 'placeholder' => 'adresa ugovaratelja'))}}

                        </div>
                        <div class="form-group">
                            {{Form::label('Poštanski broj:')}}
                            {{Form::text('ugovarateljKucniBroj', null, array('class' => 'form-control', 'placeholder' => 'Ulica ugovaratelja'))}}

                        </div>
                        <div class="form-group">
                            {{Form::label('Naselje:')}}
                            
                            
                            {{Form::select('ugovarateljNaselje', DB::table('naselje')->orderBy('Naziv')->pluck('Naziv', 'Oznaka'), array('class' => 'form-control', 'placeholder' => 'Naselje ugovaratelja'))}}

                        </div>

                        

                        <div class="form-group">
                            {{Form::label('Telefon:')}}
                            {{Form::text('ugovarateljTelefon', null, array('class' => 'form-control', 'placeholder' => 'poštanski broj ugovaratelja'))}}

                        </div>

                        <div class="form-group">
                            {{Form::label('Email:')}}
                            {{Form::text('ugovarateljEmail', null, array('class' => 'form-control', 'placeholder' => 'Email ugovaratelja'))}}

                        </div>
                        




                    </div>
                </div>




            </div>

        </div>

        <div class="col-md-6">

            <div class="panel-group">
                <div class="panel panel-primary">

                    <div class="panel-heading"><h4>Osiguranik</h4></div>

                    <div class="panel-body">
                        {{Form::open(array('route' => 'polica', 'class' => 'form'))}}

                        <div class="form-group">
                            {{Form::label('osiguranik')}}
                            {{Form::text('osiguranik_id', null, array('class' => 'form-control', 'placeholder' => 'id osiguranika'))}}

                        </div>

                        <div class="form-group">
                            {{Form::label('Vrsta Osobe:')}}
                            {{Form::select('osiguranikVrsta', DB::table('vrstaosobe')->orderBy('ID')->pluck('Naziv','ID'), array('class' => 'form-control', 'placeholder' => 'vrsta osiguranika'))}}

                        <div class="form-group">
                            {{Form::label('Naziv:')}}
                            {{Form::text('osiguranikNaziv', null, array('class' => 'form-control', 'placeholder' => 'naziv osiguranika'))}}

                        </div>
                        <div class="form-group">
                            {{Form::label('Ime:')}}
                            {{Form::text('osiguranikIme', null, array('class' => 'form-control', 'placeholder' => 'Ime osiguranika'))}}

                        </div>

                        <div class="form-group">
                            {{Form::label('Prezime:')}}
                            {{Form::text('osiguranikPrezime', null, array('class' => 'form-control', 'placeholder' => 'Prezime osiguranika'))}}

                        </div>

                        <div class="form-group">
                            {{Form::label('OIB:')}}
                            {{Form::text('osiguranikOib', null, array('class' => 'form-control', 'placeholder' => 'Oib osiguranika', 'maxlength' => 13))}}

                        </div>


                        <div class="form-group">
                            {{Form::label('Datum Rođenja:')}}
                            {{Form::text('osiguranikDatumRodjenja', null, array('class' => 'form-control', 'placeholder' => 'Datum osiguranika'))}}

                        </div>
                        <div class="form-group">
                            {{Form::label('Spol:')}}
                            {{Form::label('M')}}
                            {{Form::radio('osiguranikSpolOznaka', 'm')}}
                            {{Form::label('Ž')}}
                            {{Form::radio('osiguranikSpolOznaka', 'z')}}

                        </div>

                        
                        <div class="form-group">
                            {{Form::label('Ulica:')}}
                            {{Form::text('osiguranikUlica', null, array('class' => 'form-control', 'placeholder' => 'adresa osiguranika'))}}

                        </div>
                        <div class="form-group">
                            {{Form::label('Poštanski broj:')}}
                            {{Form::text('osiguranikKucniBroj', null, array('class' => 'form-control', 'placeholder' => 'Ulica osiguranika'))}}

                        </div>
                        <div class="form-group">
                            {{Form::label('Naselje:')}}
                            {{Form::select('osiguranikNaselje', DB::table('naselje')->orderBy('Naziv')->pluck('Naziv', 'Oznaka'), array('class' => 'form-control', 'placeholder' => 'Naselje osiguranika'))}}

                        </div>

                        

                        <div class="form-group">
                            {{Form::label('Telefon:')}}
                            {{Form::text('osiguranikTelefon', null, array('class' => 'form-control', 'placeholder' => 'poštanski broj osiguranika'))}}

                        </div>

                        <div class="form-group">
                            {{Form::label('Email:')}}
                            {{Form::text('osiguranikEmail', null, array('class' => 'form-control', 'placeholder' => 'Email osiguranika'))}}

                        </div>
                        

                        

                        
                    </div>
                </div>




            </div>
            

        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel-group">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Vozilo</h4>
                    </div>
                    <div class="panel-body">
                        {{Form::open(array('route' => 'polica', 'class' => 'form'))}}
                        <div class="form-group">
                            {{Form::label('Registarska Oznaka')}}
                            {{Form::text('RegistarskaOznaka', null, array('class' => 'form-control', 'placeholder' => 'Registarska oznaka vozila'))}}

                        </div>
                        <div class="form-group">
                            {{Form::label('Marka:')}}
                            {{Form::text('Marka', null, array('class' => 'form-control', 'placeholder' => 'Marka vozila'))}}

                        </div>
                        <div class="form-group">
                            {{Form::label('Broj Šasije:')}}
                            {{Form::text('BrojSasije', null, array('class' => 'form-control', 'placeholder' => 'Broj šasije vozila'))}}

                        </div>
                        <div class="form-group">
                            {{Form::label('Godina proizvodnje:')}}
                            {{Form::date('GodinaProizvodnje', null, array('class' => 'form-control', 'placeholder' => 'Godina proizvodnje vozila'))}}

                        </div>

                        <div class="form-group">
                            {{Form::label('Tarifna Grupa:')}}
                            <br>
                            {{Form::select('TarifnaGrupa', DB::table('tarifnagrupa')->orderBy('Oznaka')->pluck('Naziv','Oznaka'), array('onchange' => 'tarifnagrupaJS(this.value)','class' => 'form-control', 'placeholder' => 'Tarifna grupa vozila'))}}

                        </div>

                        <div class="form-group">
                            {{Form::label('Tarifna Podgrupa:')}}
                            <select id='tarifnapodgrupa' class='form-control' name='tarifnapodgrupa'>
                            <option value=''></option>

                        </div>

                        <script>
                        function tarifnagrupaJS(val) {
                            alert("izabrna neki" + val);
                        }
                        </script>

                        <script>
    $('#TarifnaGrupa').on('change', function(e){

        console.log(e);
        var Oznaka = e.target.value;
        window.alert(Oznaka);
        $.get('/baza/tarifnapodgrupa?Oznaka=' + Oznaka, function(data) {
            console.log(data);
            $('#tarifnapodgrupa').empty();
            $.each(data, function(index,subCatObj){
                $('#tarifnapodgrupa').append(''+subCatObj.name+'');
            });
        });
    });
</script>
                        
                        <div class="form-group">
                            {{Form::label('Snaga:')}}
                            {{Form::number('Snaga', null, array('class' => 'form-control', 'placeholder' => 'Snaga vozila u kilowatima (kW) '))}}

                        </div>

                        <div class="form-group">
                            {{Form::label('Zapremina:')}}
                            {{Form::number('Zapremina', null, array('class' => 'form-control', 'placeholder' => 'Zapremina vozila u kubičnim centimetrima (ccm)'))}}
                            

                        </div>
                         <div class="form-group">
                            {{Form::label('Nosivost:')}}
                            {{Form::number('Nosivost', null, array('class' => 'form-control', 'placeholder' => 'Nosivost vozila u kilogramima (kg)'))}}

                        </div>
                        <div class="form-group">
                            {{Form::label('Broj Putnika:')}}
                            {{Form::number('BrojPutnika', null, array('class' => 'form-control', 'placeholder' => 'Broj putnika'))}}

                        </div>
                        <div class="form-group">
                            {{Form::label('Boja:')}}
                            {{Form::number('Boja', null, array('class' => 'form-control', 'placeholder' => 'Nosivost vozila u kilogramima (kg)'))}}

                        </div>

                         <div class="form-group">
                            {{Form::label('Proba:')}}
                            {{Form::number('Proba', null, array('class' => 'form-control', 'placeholder' => 'Probne tablice'))}}

                        </div>
                    </div>
                    <button type="submit">Dalje</button>
                            {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
        