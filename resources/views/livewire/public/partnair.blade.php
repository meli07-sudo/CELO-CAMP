<div>
    @if (session('demand-sent'))
        <div class="d-flex justify-content-center align-items-center container flex-column">
            <p class="d-inline-block mx-auto demand-sent text-success arlon-semibold">
                Votre demande de partenariat a été envoyée. Elle sera examinée par notre équipe compétente. Nous vous
                tiendrons très vite au courant de l'état de la demande. Merci pour votre sollicitude !
            </p>
            <a href="{{ route('public-index') }}" class="btn btn-outline-primary arlon-medium">&leftarrow; Revenir à
                l'accueil</a>
        </div>
    @else
        <h5 class="poppins-semibold text-center px-3">Remplissez les informations ci-dessous afin
            de soumettre une demande de partenariat avec K4A Blockchain</h5>
        <form id="contactForm" wire:submit.prevent="sendPartenairDemand">
            <div class="row">
                <div class="col-lg-6 position-relative my-2">
                    <div class="form-group">
                        <input type="text" minlength="1" maxlength="100" class="form-control" name="nom"
                            wire:model="nom" id="name" placeholder="Votre nom">
                    </div>
                    @error('nom')
                        <span class="text-danger error-msg small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-lg-6 position-relative my-2">
                    <div class="form-group">
                        <input type="text" minlength="1" maxlength="100" class="form-control" name="prenom"
                            wire:model="prenom" id="name" placeholder="Votre prénom">
                    </div>
                    @error('prenom')
                        <span class="text-danger error-msg small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-lg-6 position-relative my-2">
                    <div class="form-group">
                        <input type="email" class="form-control" maxlength="100" name="email" wire:model="email"
                            id="email" placeholder="Votre adresse e-mail">
                    </div>
                    @error('email')
                        <span class="text-danger error-msg small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-lg-6 position-relative my-2">
                    <div class="form-group">
                        <input type="tel" class="form-control" maxlength="100" name="tel" wire:model="tel" id="tel"
                            placeholder="Votre numéro de téléphone">
                    </div>
                    @error('tel')
                        <span class="text-danger error-msg small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-lg-6 position-relative my-2">
                    <div class="form-group">
                        <input type="text" class="form-control" maxlength="255" name="nomEnterprise"
                            wire:model="nomEnterprise" id="nomEnterprise" placeholder="Nom de l'entreprise">
                    </div>
                    @error('nomEnterprise')
                        <span class="text-danger error-msg small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-lg-6 position-relative my-2">
                    <div class="form-group">
                        <select class="form-select" wire:model.defer="formeSociale">
                            <option value="0">Forme Sociales :</option>
                            @foreach ($typeEntreprises as $key => $typeEntreprise)
                                <option value="{{ $key }}">{{ $typeEntreprise }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('formeSociale')
                        <span class="text-danger error-msg small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-lg-6 position-relative my-2">
                    <div class="form-group">
                        <input type="url" class="form-control" name="website" wire:model="website" id="website"
                            placeholder="Site Internet">
                    </div>
                    @error('website')
                        <span class="text-danger error-msg small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-lg-6 position-relative my-2">
                    <div class="form-group">
                        <input type="text" class="form-control" maxlength="150" minlength="2" name="pays"
                            wire:model="pays" id="pays" placeholder="Pays">
                    </div>
                    @error('pays')
                        <span class="text-danger error-msg small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-lg-6 position-relative my-2">
                    <div class="form-group">
                        <input type="text" class="form-control" maxlength="150" minlength="2" name="ville"
                            wire:model="ville" id="ville" placeholder="Ville">
                    </div>
                    @error('ville')
                        <span class="text-danger error-msg small">{{ $message }}</span>
                    @enderror
                </div>


                <div class="col-lg-12 position-relative my-2">
                    <div class="form-group">
                        <input type="text" class="form-control" maxlength="2048" name="matriculeOuRegistreCommerce"
                            wire:model="matriculeOuRegistreCommerce" id="matriculeOuRegistreCommerce"
                            placeholder="Immatriculation ou numéro de registre de commerce">
                    </div>
                    @error('matriculeOuRegistreCommerce')
                        <span class="text-danger error-msg small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-8 position-relative my-2">
                    <div class="form-group">

                        <label for="file" class="form-label">CV / Présentation de votre structure</label>
                        <input type="file" class="form-control" name="file" wire:model="file" id="file">
                    </div>
                    @error('file')
                        <span class="text-danger error-msg small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12 position-relative my-2">
                    <div class="form-group">
                        <textarea name="message" minlength="2" maxlength="5000" class="form-control" id="message" wire:model="message"
                            cols="30" rows="6" placeholder="Entrez votre message ici"></textarea>
                    </div>
                    @error('message')
                        <span class="text-danger error-msg small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12 my-3">
                    <div class="form-group">
                        <input type="submit" wire:loading.attr="disabled" value="Envoyer" class="btn btn-primary">
                        <div class="submitting"></div>
                    </div>
                </div>
            </div>
        </form>
    @endif
</div>
