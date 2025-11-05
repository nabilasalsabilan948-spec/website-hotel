<div>
    <main id="main" class="main">

    <div class="pagetitle">
      <h1>HCreate Hotel</h1>
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
                          <input type="text" class="form-control" placeholder="Search..." wire:model.live.debounce.300ms="search">
                        </div>
                        <div class="col-6">
                            <a wire:navigate href="/hotels/create" class="btn btn-primary float-end">create hotel</a>
                        </div>
                    </div>
                </div>
              
              <table class="table table-hover">
                <thead>
                  <tr>
                    {{-- <th scope="col">#</th> --}}
                    <th scope="col">Name</th>
                    <th scope="col">address</th>
                    <th scope="col">phone</th>
                    <th scope="col">email</th>
                    <th scope="col">check in time</th>
                    <th scope="col">check out time</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($hotels as $hotel)
                        
                  <tr>
                    {{-- <th scope="row">1</th> --}}
                    <td>{{$hotel->name}}</td>
                    <td>{{$hotel->address}}</td>
                    <td>{{$hotel->phone}}</td>
                    <td>{{$hotel->email}}</td>
                    <td>{{$hotel->check_in_time}}</td>
                    <td>{{$hotel->check_out_time}}</td>
                    <td>
                      <a wire:navigate href="/hotels/{{ $hotel->id }}/edit" class="btn btn-sm btn-warning">edit</a>
                      <button 
                      wire:click="delete({{ $hotel->id }})" 
                      wire:confirm="are you sure to delete?"
                      class="btn btn-sm btn-danger">delete</button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{$hotels->links()}}
            </div>
          </div>

        </div>
    </section>

  </main>
</div>

