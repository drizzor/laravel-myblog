<x-contact>
    @section('style')
       <style>

            .dark-overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
            }

           #page-header {
                position: relative;
                min-height: 300px;
                background: url("https://source.unsplash.com/fb7yNPbT0l8");
                background-position: 0 -580px;
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-size: cover; 
                color: white;
                border-bottom: 1px #eee solid;
                padding-top: 50px;
            }
        </style> 
    @endsection

    <!-- PAGE HEADER -->
    <section id="page-header" class="p-5">
        <div class="dark-overlay">
          <div class="row">
            <div class="col">
              <div class="container pt-5">
                <h1 class="text-center">Nous contacter</h1>
                <p class="d-none d-md-block">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi,
                  suscipit perspiciatis optio error perferendis ratione
                  accusantium cum vel. Excepturi, qui?
                </p>
              </div>
            </div>
          </div>
        </div>
    </section>
    
    <!-- CONTACT SECTION -->
    <section id="contact" class="py-3 my-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card p-4">
              <h4>Entrer en conctact</h4>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi,
                praesentium!
              </p>
              <h4>Adresse</h4>
              <p>550 Main st, Boston MA</p>
              <h4>Email</h4>
              <p>contact@mail.com</p>
              <h4>Téléphone</h4>
              <p>(555) 555-5555</p>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card py-4">
              <div class="card-body">
                <h3 class="text-center">
                  Completer le forumulaire pour nous contacter
                </h3>
                <hr />
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Prénom"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Nom"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Email"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Téléphone"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea
                        class="form-control"
                        placeholder="Votre Message..."
                      ></textarea>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <input
                        type="submit"
                        value="Envoyer"
                        class="btn btn-outline-danger btn-block"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- STAFF SECTION -->
    <section id="staff" class="py-5 text-center bg-dark text-white">
      <div class="container">
        <h1>L'équipe</h1>
        <hr />
        <div class="row">
          <div class="col-md-3">
            <img
              src="https://avatars.dicebear.com/api/avataaars/Anna.svg?mood[]=happy"
              alt=""
              class="img-fluid rounded-circle mb-2"
            />
            <h4>Anna Doe</h4>
            <small>Marketing Manager</small>
          </div>

          <div class="col-md-3">
            <img
              src="https://avatars.dicebear.com/api/avataaars/Richard.svg?mood[]=happy"
              alt=""
              class="img-fluid rounded-circle mb-2"
            />
            <h4>Richard Doe</h4>
            <small>Business Manager</small>
          </div>

          <div class="col-md-3">
            <img
              src="https://avatars.dicebear.com/api/avataaars/Max.svg?mood[]=happy"
              alt=""
              class="img-fluid rounded-circle mb-2"
            />
            <h4>Max Doe</h4>
            <small>CEO</small>
          </div>
          <div class="col-md-3">
            <img
              src="https://avatars.dicebear.com/api/avataaars/Steve.svg?mood[]=happy"
              alt=""
              class="img-fluid rounded-circle mb-2"
            />
            <h4>Steve Smith</h4>
            <small>Web Developer</small>
          </div>
        </div>
      </div>
    </section>
</x-contact>
