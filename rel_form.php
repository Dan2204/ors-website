          <div id="quote-form" class="container">
                  <h4 class="text-center mb-4">Get a free quote.</h4>
                  <div id="error"><? echo $error; ?></div>
                  <form id="contact" class="contact-form" method="post">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"
                          ><i class="fas fa-user"></i
                        ></span>
                      </div>
                      <input
                        type="text"
                        class="form-control"
                        name="name"
                        id="name"
                        placeholder="Name *"
                        required
                      />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"
                          ><i class="fas fa-briefcase"></i
                        ></span>
                      </div>
                      <input
                        type="text"
                        class="form-control"
                        name="comp_name"
                        id="comp_name"
                        placeholder="Company Name"
                      />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"
                          ><i class="fas fa-envelope"></i
                        ></span>
                      </div>
                      <input
                        type="text"
                        class="form-control"
                        name="email"
                        id="email"
                        placeholder="Email *"
                        required
                      />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"
                          ><i class="fas fa-phone"></i
                        ></span>
                      </div>
                      <input
                        type="text"
                        class="form-control"
                        name="phone"
                        id="phone"
                        placeholder="Contact Number *"
                        required
                      />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"
                          ><i class="fas fa-pencil-alt"></i
                        ></span>
                      </div>
                      <textarea
                        class="form-control"
                        id="message"
                        name="message"
                        placeholder="Comments"
                      ></textarea>
                    </div>
                  </div>
                  <p class="text-muted">* required fields</p>
                  <div class="submit-btn">
                    <button class="btn btn-block" id="submit" type="submit">Submit</button>
                  </div>
                </form>
                </div>
