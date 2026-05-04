    <div class="mt-3">
        <label for="">Marque</label>
        <input type="text" value="{{old('marque', $vehicule->marque ?? '')}}" name="marque" id="" class="form-control">
    </div>

    <div class="mt-3">
        <label for="">Modéle</label>
        <input type="text" value="{{old('modele', $vehicule->modele ?? '')}}" name="modele" id="" class="form-control">
    </div>

    <div class="mt-3">
        <label for="">Année</label>
        <input type="text" value="{{old('annee', $vehicule->annee ?? '')}}" name="annee" id="" class="form-control">
    </div>

    <div class="mt-3">
        <label for="">Matricule</label>
        <input type="text" value="{{old('matricule', $vehicule->matricule ?? '')}}" name="matricule" id="" class="form-control">
    </div>

    <div class="mt-3">
        <label for="">Categorie</label>
        <input type="text" value="{{old('categorie', $vehicule->categorie ?? '')}}" name="categorie" id="" class="form-control">
    </div>

    <div class="mt-3">
        <label for="">Couleur</label>
        <input type="text" value="{{old('couleur', $vehicule->couleur ?? '')}}" name="couleur" id="" class="form-control">
    </div>
    
    <div class="mt-3">
        <label for="">Etat</label>
        <select value="{{old('etat', $vehicule->etat ?? '')}}" name="etat" id="" class="form-select">
            <option value="">...</option>
            <option value="neuve">Neuve</option>
            <option value="bon_etat">Bon Etat</option>
            <option value="a_restaurer">A restaurer</option>
            <option value="epave">epave</option>
            <option value="inonde">Inonde</option>
        </select>
    </div>

    <div class="mt-3">
        <label for="">Prix Par Jour (en DHS)</label>
        <input type="text" value="{{old('prix_par_jour', $vehicule->prix_par_jour ?? '')}}" name="prix_par_jour" id="" class="form-control">
    </div>

    <div class="mt-3">
        <label for="">Photo</label>
        <input type="file" name="photo" id="" class="form-control">
    </div>