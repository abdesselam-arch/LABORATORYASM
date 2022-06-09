@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Description
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <pre style="color: black; font-size: 13px;">
Le Laboratoire d'analyses médicales ASM est là pour toutes
vos analyses et analyses et avec un soin tout particulier
                    </pre>   
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Etablissement
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <pre style="color: black; font-size: 13px;">
Catégorie: Laboratoires
Types: Laboratoire Personnel
Pays: Algérie
Wilaya: 46 Ain temouchent 
                    </pre>   
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Infos de Travail
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <pre style="color: black; font-size: 13px;">
Jours de travail : Dim, Lun, Mar, Mer, Jeu, Sam,
Horaires de Travail : 08:00 à 17:00
Vacances Du: Non Fourni
Vacances Au: Non Fourni
                    </pre>   
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Contacts
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <pre style="color: black; font-size: 13px;">
Phone : +213 043 79 83 97/043 79 84 49<br>
fax : +213 043 79 84 31<br>
Email : mail-cri@cunivaintemouchent.dz<br>
                    </pre>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection