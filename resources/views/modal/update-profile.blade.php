{{-- Modal edit profile --}}
<div class="modal fade" id="edit-profil-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body" style="padding: 50px 120px">
                <div class="header-modal d-flex justify-content-center" style="margin-bottom: 50px">
                    <h2 class="modal-title" id="exampleModalLabel" class="text-center">Edit Profile</h2>
                </div>
                <form action="/update-profile" method="POST" >
                    <input type="hidden" name="_methode" value="PUT">
                    <div class="left-form">
                        <div class="mb-3">
                            <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="name" value="" id="nama-lengkap">
                        </div>
                        <div class="mb-3">
                            <label for="kata-sandi" class="form-label">Kata Sandi</label>
                            <input type="password" name="password" class="form-control" id="kata-sandi">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="mb-2">
                            <label for="email" class="form-label">Foto profile</label>
                            <input type="file" name="foto_profile" class="form-control" id="email">
                        </div >
                        <div class="mb-3 d-flex mr-3">
                            <div >
                                <button type="button" class="btn btn-secondary m-2" data-bs-dismiss="modal" id="close-modal-edit">Close</button>
                            </div>
                            <div >
                                <button type="submit" class="btn btn-primary m-2" id="submit-modal-edit">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>