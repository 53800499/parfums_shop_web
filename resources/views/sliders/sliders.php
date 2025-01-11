@extends('layouts.app1')
@section('title')
    Produit
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h2>Tables des sliders</h2>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                    <th class="text-secondary opacity-7">Nom du produit</th>
                    <th class="text-secondary opacity-7">Prix du produit</th>
                      <th class="text-secondary opacity-7">Description du produit</th>
                      <th class="text-secondary opacity-7">Nombre en stock</th>
                      <th class="text-secondary opacity-7">Status</th>
                      <th class="text-secondary opacity-7">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user4">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">CAME DIOR</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                            <h5 class="mb-0 ">15 000fcfa</h5>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. In, nihil?</span>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">108</span>
                      </td>
                      <td class="align-middle ">
                        <button class="btn btn-success">Désactiver</button>
                      </td>
                      <td class="align-middle my-3" >
                      <!-- Boutons pour les actions -->
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modal-edit-user" data-bs-original-title="Edit user">Modifier</button>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-confirmation">Supprimer</button>

                        <!-- Modal d'édition -->
                        <div class="modal fade" id="modal-edit-user" tabindex="-1" role="dialog" aria-labelledby="modal-edit-user" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="card card-plain">
                                <div class="card-header pb-0 text-left">
                                    <h3 class="font-weight-bolder text-info text-gradient">Modifier le produit</h3>
                                    <p class="mb-0">Modifiez les informations du produit ci-dessous</p>
                                </div>
                                <div class="card-body">
                                    <form role="form text-left">
                                    <label>Nom du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Nom du produit" aria-label="product_name" name="product_name" aria-describedby="name-addon" value="Nom du produit">
                                    </div>
                                    <label>Prix du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Prix du produit" aria-label="product_price" name="product_price" aria-describedby="name-addon" value="Prix du produit">
                                    </div>
                                    <label>Description du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Description du produit" aria-label="product_description" name="product_description" aria-describedby="name-addon" value="Description du produit">
                                    </div>
                                    <label>Image du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" placeholder="Image du produit" aria-label="product_image" name="product_image" aria-describedby="name-addon" value="Image du produit">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-round bg-gradient-info btn-sm w-100 mt-4 mb-0">Modifier la catégorie</button>
                                    </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                    <a href="javascript:;" class="text-info text-gradient font-weight-bold" data-bs-dismiss="modal">Annuler</a>
                                    </p>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- Modal de confirmation de suppression -->
                        <div class="modal fade" id="modal-delete-confirmation" tabindex="-1" role="dialog" aria-labelledby="modal-delete-confirmation" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                            <div class="modal-body p-4 text-center">
                                <h5 class="font-weight-bold">Confirmer la suppression</h5>
                                <p>Êtes-vous sûr de vouloir supprimer ce slider ? Cette action est irréversible.</p>
                                <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user4">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">CAME DIOR</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                            <h5 class="mb-0 ">15 000fcfa</h5>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. In, nihil?</span>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">108</span>
                      </td>
                      <td class="align-middle ">
                        <button class="btn btn-success">Désactiver</button>
                      </td>
                      <td class="align-middle my-3" >
                      <!-- Boutons pour les actions -->
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modal-edit-user" data-bs-original-title="Edit user">Modifier</button>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-confirmation">Supprimer</button>

                        <!-- Modal d'édition -->
                        <div class="modal fade" id="modal-edit-user" tabindex="-1" role="dialog" aria-labelledby="modal-edit-user" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="card card-plain">
                                <div class="card-header pb-0 text-left">
                                    <h3 class="font-weight-bolder text-info text-gradient">Modifier le produit</h3>
                                    <p class="mb-0">Modifiez les informations du produit ci-dessous</p>
                                </div>
                                <div class="card-body">
                                    <form role="form text-left">
                                    <label>Nom du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Nom du produit" aria-label="product_name" name="product_name" aria-describedby="name-addon" value="Nom du produit">
                                    </div>
                                    <label>Prix du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Prix du produit" aria-label="product_price" name="product_price" aria-describedby="name-addon" value="Prix du produit">
                                    </div>
                                    <label>Description du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Description du produit" aria-label="product_description" name="product_description" aria-describedby="name-addon" value="Description du produit">
                                    </div>
                                    <label>Image du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" placeholder="Image du produit" aria-label="product_image" name="product_image" aria-describedby="name-addon" value="Image du produit">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-round bg-gradient-info btn-sm w-100 mt-4 mb-0">Modifier la catégorie</button>
                                    </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                    <a href="javascript:;" class="text-info text-gradient font-weight-bold" data-bs-dismiss="modal">Annuler</a>
                                    </p>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- Modal de confirmation de suppression -->
                        <div class="modal fade" id="modal-delete-confirmation" tabindex="-1" role="dialog" aria-labelledby="modal-delete-confirmation" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                            <div class="modal-body p-4 text-center">
                                <h5 class="font-weight-bold">Confirmer la suppression</h5>
                                <p>Êtes-vous sûr de vouloir supprimer ce slider ? Cette action est irréversible.</p>
                                <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user4">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">CAME DIOR</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                            <h5 class="mb-0 ">15 000fcfa</h5>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. In, nihil?</span>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">108</span>
                      </td>
                      <td class="align-middle ">
                        <button class="btn btn-success">Désactiver</button>
                      </td>
                      <td class="align-middle my-3" >
                      <!-- Boutons pour les actions -->
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modal-edit-user" data-bs-original-title="Edit user">Modifier</button>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-confirmation">Supprimer</button>

                        <!-- Modal d'édition -->
                        <div class="modal fade" id="modal-edit-user" tabindex="-1" role="dialog" aria-labelledby="modal-edit-user" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="card card-plain">
                                <div class="card-header pb-0 text-left">
                                    <h3 class="font-weight-bolder text-info text-gradient">Modifier le produit</h3>
                                    <p class="mb-0">Modifiez les informations du produit ci-dessous</p>
                                </div>
                                <div class="card-body">
                                    <form role="form text-left">
                                    <label>Nom du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Nom du produit" aria-label="product_name" name="product_name" aria-describedby="name-addon" value="Nom du produit">
                                    </div>
                                    <label>Prix du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Prix du produit" aria-label="product_price" name="product_price" aria-describedby="name-addon" value="Prix du produit">
                                    </div>
                                    <label>Description du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Description du produit" aria-label="product_description" name="product_description" aria-describedby="name-addon" value="Description du produit">
                                    </div>
                                    <label>Image du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" placeholder="Image du produit" aria-label="product_image" name="product_image" aria-describedby="name-addon" value="Image du produit">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-round bg-gradient-info btn-sm w-100 mt-4 mb-0">Modifier la catégorie</button>
                                    </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                    <a href="javascript:;" class="text-info text-gradient font-weight-bold" data-bs-dismiss="modal">Annuler</a>
                                    </p>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- Modal de confirmation de suppression -->
                        <div class="modal fade" id="modal-delete-confirmation" tabindex="-1" role="dialog" aria-labelledby="modal-delete-confirmation" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                            <div class="modal-body p-4 text-center">
                                <h5 class="font-weight-bold">Confirmer la suppression</h5>
                                <p>Êtes-vous sûr de vouloir supprimer ce slider ? Cette action est irréversible.</p>
                                <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user4">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">CAME DIOR</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                            <h5 class="mb-0 ">15 000fcfa</h5>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. In, nihil?</span>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">108</span>
                      </td>
                      <td class="align-middle ">
                        <button class="btn btn-success">Désactiver</button>
                      </td>
                      <td class="align-middle my-3" >
                      <!-- Boutons pour les actions -->
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modal-edit-user" data-bs-original-title="Edit user">Modifier</button>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-confirmation">Supprimer</button>

                        <!-- Modal d'édition -->
                        <div class="modal fade" id="modal-edit-user" tabindex="-1" role="dialog" aria-labelledby="modal-edit-user" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="card card-plain">
                                <div class="card-header pb-0 text-left">
                                    <h3 class="font-weight-bolder text-info text-gradient">Modifier le produit</h3>
                                    <p class="mb-0">Modifiez les informations du produit ci-dessous</p>
                                </div>
                                <div class="card-body">
                                    <form role="form text-left">
                                    <label>Nom du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Nom du produit" aria-label="product_name" name="product_name" aria-describedby="name-addon" value="Nom du produit">
                                    </div>
                                    <label>Prix du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Prix du produit" aria-label="product_price" name="product_price" aria-describedby="name-addon" value="Prix du produit">
                                    </div>
                                    <label>Description du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Description du produit" aria-label="product_description" name="product_description" aria-describedby="name-addon" value="Description du produit">
                                    </div>
                                    <label>Image du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" placeholder="Image du produit" aria-label="product_image" name="product_image" aria-describedby="name-addon" value="Image du produit">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-round bg-gradient-info btn-sm w-100 mt-4 mb-0">Modifier la catégorie</button>
                                    </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                    <a href="javascript:;" class="text-info text-gradient font-weight-bold" data-bs-dismiss="modal">Annuler</a>
                                    </p>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- Modal de confirmation de suppression -->
                        <div class="modal fade" id="modal-delete-confirmation" tabindex="-1" role="dialog" aria-labelledby="modal-delete-confirmation" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                            <div class="modal-body p-4 text-center">
                                <h5 class="font-weight-bold">Confirmer la suppression</h5>
                                <p>Êtes-vous sûr de vouloir supprimer ce slider ? Cette action est irréversible.</p>
                                <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user4">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">CAME DIOR</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                            <h5 class="mb-0 ">15 000fcfa</h5>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. In, nihil?</span>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">108</span>
                      </td>
                      <td class="align-middle ">
                        <button class="btn btn-success">Désactiver</button>
                      </td>
                      <td class="align-middle my-3" >
                      <!-- Boutons pour les actions -->
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modal-edit-user" data-bs-original-title="Edit user">Modifier</button>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-confirmation">Supprimer</button>

                        <!-- Modal d'édition -->
                        <div class="modal fade" id="modal-edit-user" tabindex="-1" role="dialog" aria-labelledby="modal-edit-user" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="card card-plain">
                                <div class="card-header pb-0 text-left">
                                    <h3 class="font-weight-bolder text-info text-gradient">Modifier le produit</h3>
                                    <p class="mb-0">Modifiez les informations du produit ci-dessous</p>
                                </div>
                                <div class="card-body">
                                    <form role="form text-left">
                                    <label>Nom du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Nom du produit" aria-label="product_name" name="product_name" aria-describedby="name-addon" value="Nom du produit">
                                    </div>
                                    <label>Prix du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Prix du produit" aria-label="product_price" name="product_price" aria-describedby="name-addon" value="Prix du produit">
                                    </div>
                                    <label>Description du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Description du produit" aria-label="product_description" name="product_description" aria-describedby="name-addon" value="Description du produit">
                                    </div>
                                    <label>Image du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" placeholder="Image du produit" aria-label="product_image" name="product_image" aria-describedby="name-addon" value="Image du produit">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-round bg-gradient-info btn-sm w-100 mt-4 mb-0">Modifier la catégorie</button>
                                    </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                    <a href="javascript:;" class="text-info text-gradient font-weight-bold" data-bs-dismiss="modal">Annuler</a>
                                    </p>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- Modal de confirmation de suppression -->
                        <div class="modal fade" id="modal-delete-confirmation" tabindex="-1" role="dialog" aria-labelledby="modal-delete-confirmation" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                            <div class="modal-body p-4 text-center">
                                <h5 class="font-weight-bold">Confirmer la suppression</h5>
                                <p>Êtes-vous sûr de vouloir supprimer ce slider ? Cette action est irréversible.</p>
                                <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user4">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">CAME DIOR</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                            <h5 class="mb-0 ">15 000fcfa</h5>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. In, nihil?</span>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">108</span>
                      </td>
                      <td class="align-middle ">
                        <button class="btn btn-success">Désactiver</button>
                      </td>
                      <td class="align-middle my-3" >
                      <!-- Boutons pour les actions -->
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modal-edit-user" data-bs-original-title="Edit user">Modifier</button>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-confirmation">Supprimer</button>

                        <!-- Modal d'édition -->
                        <div class="modal fade" id="modal-edit-user" tabindex="-1" role="dialog" aria-labelledby="modal-edit-user" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="card card-plain">
                                <div class="card-header pb-0 text-left">
                                    <h3 class="font-weight-bolder text-info text-gradient">Modifier le produit</h3>
                                    <p class="mb-0">Modifiez les informations du produit ci-dessous</p>
                                </div>
                                <div class="card-body">
                                    <form role="form text-left">
                                    <label>Nom du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Nom du produit" aria-label="product_name" name="product_name" aria-describedby="name-addon" value="Nom du produit">
                                    </div>
                                    <label>Prix du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Prix du produit" aria-label="product_price" name="product_price" aria-describedby="name-addon" value="Prix du produit">
                                    </div>
                                    <label>Description du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Description du produit" aria-label="product_description" name="product_description" aria-describedby="name-addon" value="Description du produit">
                                    </div>
                                    <label>Image du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" placeholder="Image du produit" aria-label="product_image" name="product_image" aria-describedby="name-addon" value="Image du produit">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-round bg-gradient-info btn-sm w-100 mt-4 mb-0">Modifier la catégorie</button>
                                    </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                    <a href="javascript:;" class="text-info text-gradient font-weight-bold" data-bs-dismiss="modal">Annuler</a>
                                    </p>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- Modal de confirmation de suppression -->
                        <div class="modal fade" id="modal-delete-confirmation" tabindex="-1" role="dialog" aria-labelledby="modal-delete-confirmation" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                            <div class="modal-body p-4 text-center">
                                <h5 class="font-weight-bold">Confirmer la suppression</h5>
                                <p>Êtes-vous sûr de vouloir supprimer ce slider ? Cette action est irréversible.</p>
                                <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user4">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">CAME DIOR</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                            <h5 class="mb-0 ">15 000fcfa</h5>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. In, nihil?</span>
                        </div>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">108</span>
                      </td>
                      <td class="align-middle ">
                        <button class="btn btn-success">Désactiver</button>
                      </td>
                      <td class="align-middle my-3" >
                      <!-- Boutons pour les actions -->
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modal-edit-user" data-bs-original-title="Edit user">Modifier</button>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-confirmation">Supprimer</button>

                        <!-- Modal d'édition -->
                        <div class="modal fade" id="modal-edit-user" tabindex="-1" role="dialog" aria-labelledby="modal-edit-user" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="card card-plain">
                                <div class="card-header pb-0 text-left">
                                    <h3 class="font-weight-bolder text-info text-gradient">Modifier le produit</h3>
                                    <p class="mb-0">Modifiez les informations du produit ci-dessous</p>
                                </div>
                                <div class="card-body">
                                    <form role="form text-left">
                                    <label>Nom du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Nom du produit" aria-label="product_name" name="product_name" aria-describedby="name-addon" value="Nom du produit">
                                    </div>
                                    <label>Prix du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Prix du produit" aria-label="product_price" name="product_price" aria-describedby="name-addon" value="Prix du produit">
                                    </div>
                                    <label>Description du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Description du produit" aria-label="product_description" name="product_description" aria-describedby="name-addon" value="Description du produit">
                                    </div>
                                    <label>Image du produit</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" placeholder="Image du produit" aria-label="product_image" name="product_image" aria-describedby="name-addon" value="Image du produit">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-round bg-gradient-info btn-sm w-100 mt-4 mb-0">Modifier la catégorie</button>
                                    </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                    <a href="javascript:;" class="text-info text-gradient font-weight-bold" data-bs-dismiss="modal">Annuler</a>
                                    </p>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- Modal de confirmation de suppression -->
                        <div class="modal fade" id="modal-delete-confirmation" tabindex="-1" role="dialog" aria-labelledby="modal-delete-confirmation" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                            <div class="modal-body p-4 text-center">
                                <h5 class="font-weight-bold">Confirmer la suppression</h5>
                                <p>Êtes-vous sûr de vouloir supprimer ce slider ? Cette action est irréversible.</p>
                                <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                <button type="button" class="btn btn-danger">Supprimer</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
@section('script')
<!--   Core JS Files   -->
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="assets/js/plugins/chartjs.min.js"></script>
<script>
  var ctx = document.getElementById("chart-bars").getContext("2d");

  new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [{
        label: "Sales",
        tension: 0.4,
        borderWidth: 0,
        borderRadius: 4,
        borderSkipped: false,
        backgroundColor: "#fff",
        data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
        maxBarThickness: 6
      }, ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            suggestedMin: 0,
            suggestedMax: 500,
            beginAtZero: true,
            padding: 15,
            font: {
              size: 14,
              family: "Open Sans",
              style: 'normal',
              lineHeight: 2
            },
            color: "#fff"
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false
          },
          ticks: {
            display: false
          },
        },
      },
    },
  });


  var ctx2 = document.getElementById("chart-line").getContext("2d");

  var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

  gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
  gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
  gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

  var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

  gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
  gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
  gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

  new Chart(ctx2, {
    type: "line",
    data: {
      labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#cb0c9f",
          borderWidth: 3,
          backgroundColor: gradientStroke1,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        },
        {
          label: "Websites",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#3A416F",
          borderWidth: 3,
          backgroundColor: gradientStroke2,
          fill: true,
          data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
          maxBarThickness: 6
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            padding: 10,
            color: '#b2b9bf',
            font: {
              size: 11,
              family: "Open Sans",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: '#b2b9bf',
            padding: 20,
            font: {
              size: 11,
              family: "Open Sans",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });
</script>
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>

@endsection
