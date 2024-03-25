<div class="modal fade" id="roomModal{{ $item->id }}" tabindex="-1" aria-labelledby="roomModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="roomModalLabel">Input Data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>
                Kamu akan mendaftar sebagai tamu dalam room <span class="roomTitle">"{{ $item->name }}"</span> <br> Silahkan isi data berikut:
            </p>
            <form action="{{ route('room-choice') }}" method="post">
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap" required>
                    <label for="name">Nama</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">Email address</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Nomor Handphone" required>
                    <label for="telephone">No HP</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="detail" id="detail" placeholder="Keperluan" required>
                    <label for="detail">Keperluan</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="title" placeholder="Keperluan" value="{{ $item->name }}" readonly>
                    <label for="title">Room</label>
                  </div>
                  <input type="hidden" name="room_id" value="{{ $item->id}}">
                  <div class="m-3 text-center">
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah data anda sudah benar?')">Simpan Data</button>
                  </div>
            </form>
        </div>
      </div>
    </div>
</div>
