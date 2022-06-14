{{-- form add task --}}
<div class="right-nav">
    <div class="nav-right-clicker">X</div>
    <h2>Masukkan Detail Tugasmu</h2>
    <form action="/add-task" method="post">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Nama Tugas</label>
            <input type="text" name="judul" class="form-control" id="judul">
        </div>
        <div class="mb-3">
            <label for="detail" class="form-label">Detail Pengumpulan</label>
            <textarea class="form-control" name="catatan" id="detail" cols="30" rows="4"></textarea>
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <div class="option-check">
                <input type="radio" class="form-check-input" value="1" id="very" name="kategori">
                <label class="form-check-label" for="very">Very Urgent</label>
                <input type="radio" class="form-check-input" id="urgent" value="2" name="kategori">
                <label class="form-check-label" for="urgent">Urgent</label>
                <input type="radio" class="form-check-input" id="normal" value="3" name="kategori">
                <label class="form-check-label" for="normal">Normal</label>
            </div>
          </div>
        <div class="mb-3">
            <label for="deadline" class="form-label">Deadline</label>
            <input type="date" class="form-control" id="deadline" name="deadline">
        </div>
        <div class="mb-3">
            <label for="tempat" class="form-label">Tempat Pengumpulan</label>
            <input type="text" class="form-control" id="tempat" name="tempat_pengumpulan">
        </div>
        <div class="mb-3">
            <label class="form-label">Group</label>
            <select class="form-select" name="group">
                <?php foreach($grups as $grup){ ?>
                    <option value="{{ $grup->ID_GRUP }}" selected>{{ $grup->NAMA_GRUP }}</option>
                <?php }?>
            </select>
        </div>
        <div class="mb-3 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>