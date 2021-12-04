<div>
    @if (session('message-sent'))
        <span class="textcenter text-success arlon-semibold">{{ session('message-sent') }}</span>
        <button class="text-center btn btn-outline-primary mx-auto arlon-medium" wire:click="newMsg" type="button" style="color: #00c0ff;border-color:#00c0ff;">Nouveau
            message</button>
    @else
        <form id="contactForm" wire:submit.prevent="sendMsg" name="contactForm" class="contactForm">
            @csrf
            <div class="row">
                <div class="col-lg-6 position-relative my-2">
                    <div class="form-group">
                        <input type="text" required minlength="1" maxlength="100" class="form-control" name="nom"
                            wire:model="nom" id="name" placeholder="Votre nom">
                    </div>
                    @error('nom')
                        <span class="text-danger error-msg position-absolute position-absolute ">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-lg-6 position-relative my-2">
                    <div class="form-group">
                        <input type="email" class="form-control" required maxlength="100" name="email"
                            wire:model="email" id="email" placeholder="Votre adresse e-mail">
                    </div>
                    @error('email')
                        <span class="text-danger error-msg position-absolute position-absolute ">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12 position-relative my-2">
                    <div class="form-group">
                        <input type="text" class="form-control" maxlength="150" minlength="2" required name="subject"
                            wire:model="subject" id="subject" placeholder="Sujet">
                    </div>
                    @error('subject')
                        <span class="text-danger error-msg position-absolute position-absolute ">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12 position-relative my-2">
                    <div class="form-group">
                        <textarea name="message" required minlength="2" maxlength="5000" class="form-control"
                            id="message" wire:model="message" cols="30" rows="4"
                            placeholder="Entrez votre message ici"></textarea>
                    </div>
                    @error('message')
                        <span class="text-danger error-msg position-absolute position-absolute ">{{ $message }}</span>
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
