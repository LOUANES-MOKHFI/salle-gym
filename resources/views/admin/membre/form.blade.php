                       <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom et Prenom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nom et Préneom" >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="num_tlfn" class="col-md-4 col-form-label text-md-right">{{ __('Télèphone') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('num_tlfn') is-invalid @enderror" name="num_tlfn" value="{{ old('num_tlfn') }}" required autocomplete="num_tlfn" placeholder="Numero télèphone">

                                @error('num_tlfn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nbr_moi" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de moi payée') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="number" class="form-control @error('nbr_moi') is-invalid @enderror" name="nbr_moi" value="{{ old('nbr_moi') }}" required autocomplete="nbr_moi" placeholder="Nombre des mois payée">

                                @error('nbr_moi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="montant" class="col-md-4 col-form-label text-md-right">{{ __('Montant') }}</label>

                            <div class="col-md-6">
                                <input id="montant" type="text" class="form-control @error('montant') is-invalid @enderror" name="montant" required placeholder="Montant DA" value="{{old('montant')}}">
                                <span class="btn btn-default">DA</span>

                                @error('montant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success "><i class="fa fa-btn fa-add"></i>
                                    {{ __('Ajouter') }}
                                </button>
                            </div>
                        </div>
                        
