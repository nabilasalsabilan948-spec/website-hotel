<div>
    <main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Hotel</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Blank</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <div class="row">
                        <div class="col-6">
                            <h5 class="card-title">Edit Hotel</h5>
                        </div>
                        <div class="col-6">

                        </div>
                    </div>
                  </div>
                  <form wire:submit.prevent="update">
                    {{-- name --}}
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input wire:model="name" type="text" class="form-control">
                    @error('name')
                      <div class="text-dager">{{$message}}</div>
                    @enderror
                  </div>
                </div>
                {{-- email --}}
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input wire:model="email" type="email" class="form-control">
                    @error('email')
                      <div class="text-dager">{{$message}}</div>
                    @enderror
                  </div>
                </div>
                {{-- phone --}}
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">phone</label>
                  <div class="col-sm-10">
                    <input wire:model="phone" type="text" class="form-control">
                    @error('phone')
                      <div class="text-dager">{{$message}}</div>
                    @enderror
                  </div>
                </div>
                {{-- address --}}
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                    <textarea wire:model="address" class="form-control" style="height: 100px"></textarea>
                    @error('address')
                      <div class="text-dager">{{$message}}</div>
                    @enderror
                  </div>
                </div>
                {{-- strats --}}
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">strats</label>
                  <div class="col-sm-10">
                    <input wire:model="stars" type="number" class="form-control">
                    @error('stars')
                      <div class="text-dager">{{$message}}</div>
                    @enderror
                  </div>
                </div>

                {{-- check in time --}}
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Check In Time</label>
                  <div class="col-sm-10">
                    <input wire:model="check_in_time" type="datetime-local" class="form-control">
                    @error('check_in_time')
                      <div class="text-dager">{{$message}}</div>
                    @enderror
                  </div>
                </div>

                {{-- check out time --}}
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Check out Time</label>
                  <div class="col-sm-10">
                    <input wire:model="check_out_time" type="datetime-local" class="form-control">
                    @error('check_out_time')
                      <div class="text-dager">{{$message}}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                  </div>
                </div>

              </form>
            </div>
          </div>

        </div>
    </section>

  </main>
</div>

