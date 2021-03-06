@extends('layout')
@section('content')
    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <section class="table table-striped" >
        <form >
    <table>
       <tr>
           <th>Nom_evenement</th>
           <th>Type_evenement</th>
           <th>Date_debut</th>
           <th>Date_fin</th>
           <th>Duree</th>
           <th>Salles</th>
           <th>Disposition</th>
           <th>Nombre_participant</th>
           <th>Restauration</th>
           <th>Equipement</th>
           <th>Autres_informations</th>
           <th>Civilite</th>
           <th>Prenom</th>
           <th>Nom </th>
           <th>Societe</th>
           <th>Secteur_activite</th>
           <th>Email</th>
           <th>Telephone</th>
           <th>User_id</th>
      </tr>
    </table>
        </form>
    @foreach($resevationevents as $reservationevent)
        <table>
        <tr>
            <th>{{$reservationevent->Nom_evenement}}</th>
            <th>{{$reservationevent->Type_evenement}}</th>
            <th>{{$reservationevent->Date_debut}}</th>
            <th>{{$reservationevent->Date_fin}}</th>
            <th>{{$reservationevent->Duree}}</th>
            <th>{{$reservationevent->Salles}}</th>
            <th>{{$reservationevent->Disposition}}</th>
            <th>{{$reservationevent->Nombre_participant}}</th>
            <th>{{$reservationevent->Restauration}}</th>
            <th>{{str_replace("|"," ", $reservationevent->Equipement)}}</th>
            <th>{{$reservationevent->Autres_informations}}</th>
            <th>{{$reservationevent->Civilite}}</th>
            <th>{{$reservationevent->Prenom}}</th>
            <th>{{$reservationevent->Nom}} </th>
            <th>{{$reservationevent->Societe}}</th>
            <th>{{$reservationevent->Secteur_activite}}</th>
            <th>{{$reservationevent->Email}}</th>
            <th>{{$reservationevent->Telephone}}</th>
            <th>{{$reservationevent->User}}</th>
            <th> <p class="btn btn-outline-secondary"><a href="reseventedit/{{$reservationevent->id}}">Editer</a></p></th>
            <th><form action="reseventedit/{{$reservationevent->id}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
                </form></th>
        </tr>
        </table>
    @endforeach
    </section>
@endsection

